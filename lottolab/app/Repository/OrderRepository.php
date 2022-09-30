<?php


namespace App\Repository;



use Ignited\LaravelOmnipay\Facades\OmnipayFacade as Omnipay;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use App\Models\Balance;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\Product;
use App\Models\UserShop;
use App\Models\Coupon;
use App\Events\OrderCreated;
use App\Exceptions\PickbazarException;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Exceptions\RepositoryException;
use Prettus\Validator\Exceptions\ValidatorException;

class OrderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tracking_number' => 'like',
        'shop_id',
    ];
    /**
     * @var string[]
     */
    protected $dataArray = [
        'tracking_number',
        'customer_id',
        'shop_id',
        'status',
        'amount',
        'sales_tax',
        'paid_total',
        'total',
        'delivery_time',
        'payment_gateway',
        'discount',
        'coupon_id',
        'payment_id',
        'logistics_provider',
        'billing_address',
        'shipping_address',
        'delivery_fee',
        'customer_contact'
    ];

    public function boot()
    {
        try {
            $this->pushCriteria(app(RequestCriteria::class));
        } catch (RepositoryException $e) {
        }
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Order::class;
    }

    /**
     * @param $request
     * @return LengthAwarePaginator|JsonResponse|Collection|mixed
     */
    public function storeOrder($request)
    {
        $request['tracking_number'] = Str::random(12);
        $request['customer_id'] = $request->user()->id;
        $discount = $this->calculateDiscount($request);
        if ($discount) {
            $request['paid_total'] = $request['amount'] + $request['sales_tax'] + $request['delivery_fee'] - $discount;
            $request['total'] = $request['amount'] + $request['sales_tax'] + $request['delivery_fee'] - $discount;
            $request['discount'] =  $discount;
        } else {
            $request['paid_total'] = $request['amount'] + $request['sales_tax'] + $request['delivery_fee'];
            $request['total'] = $request['amount'] + $request['sales_tax'] + $request['delivery_fee'];
        }
        $payment_gateway = $request['payment_gateway'];
        switch ($payment_gateway) {
            case 'cod':
                // Cash on Delivery no need to capture payment
                return $this->createOrder($request);
                break;
            case 'paypal':
                // For default gateway no need to set gateway
                Omnipay::setGateway('paypal');
                break;
        }

        $response = $this->capturePayment($request);
        if ($response->isSuccessful()) {
            $payment_id = $response->getTransactionReference();
            $request['payment_id'] = $payment_id;
            $order = $this->createOrder($request);
            return $order;
        } elseif ($response->isRedirect()) {
            return $response->getRedirectResponse();
        } else {
            throw new PickbazarException('PICKBAZAR_ERROR.PAYMENT_FAILED');
        }
    }

    /**
     * @param $request
     * @return mixed
     */
    protected function capturePayment($request)
    {
        $card = Omnipay::creditCard($request['card']);
        $amount = $request['paid_total'];
        $currency = 'USD';
        $transaction =
            Omnipay::purchase(array(
                'amount'   => $amount,
                'currency' => $currency,
                'card'     => $card,
            ));
        return $transaction->send();
    }

    /**
     * @param $request
     * @return array|LengthAwarePaginator|Collection|mixed
     */
    protected function createOrder($request)
    {
        try {
            $orderInput = $request->only($this->dataArray);
            $products = $this->processProducts($request['products']);
            $order = $this->create($orderInput);
            $order->products()->attach($products);
            $this->createChildOrder($order->id, $request);
            $this->calculateShopIncome($order);
            $order->children = $order->children;

            // event(new OrderCreated($order));
            return $order;
        } catch (ValidatorException $e) {
            throw new PickbazarException('PICKBAZAR_ERROR.SOMETHING_WENT_WRONG');
        }
    }

    protected function calculateShopIncome($parent_order)
    {
        foreach ($parent_order->children as  $order) {
            $balance = Balance::where('shop_id', '=', $order->shop_id)->first();
            $adminCommissionRate = $balance->admin_commission_rate;
            $shop_earnings = ($order->total * (100 - $adminCommissionRate)) / 100;
            $balance->total_earnings = $balance->total_earnings + $shop_earnings;
            $balance->current_balance = $balance->current_balance + $shop_earnings;
            $balance->save();
        }
    }

    protected function processProducts($products)
    {
        foreach ($products as $key => $product) {
            if (!isset($product['variation_option_id'])) {
                $product['variation_option_id'] = null;
                $products[$key] = $product;
            }
        }
        return $products;
    }

    protected function calculateDiscount($request)
    {
        try {
            if (!isset($request['coupon_id'])) {
                return false;
            }
            $coupon = Coupon::findOrFail($request['coupon_id']);
            if (!$coupon->is_valid) {
                return false;
            }
            switch ($coupon->type) {
                case 'percentage':
                    return ($request['amount'] * $coupon->amount) / 100;
                case 'fixed':
                    return $coupon->amount;
                    break;
                case 'free_shipping':
                    return isset($request['delivery_fee']) ? $request['delivery_fee'] : false;
                    break;
            }
            return false;
        } catch (\Exception $exception) {
            return false;
        }
    }

    public function createChildOrder($id, $request)
    {
        $products = $request->products;
        $productsByShop = [];

        foreach ($products as $key => $cartProduct) {
            $product = Product::findOrFail($cartProduct['product_id']);
            $productsByShop[$product->shop_id][] = $cartProduct;
        }

        foreach ($productsByShop as $shop_id => $cartProduct) {
            $amount = array_sum(array_column($cartProduct, 'subtotal'));
            $orderInput = [
                'tracking_number' => Str::random(12),
                'shop_id' => $shop_id,
                'status' => $request->status,
                'customer_id' => $request->customer_id,
                'shipping_address' => $request->shipping_address,
                'customer_contact' => $request->customer_contact,
                'delivery_time' => $request->delivery_time,
                'delivery_fee' => 0,
                'sales_tax' => 0,
                'discount' => 0,
                'parent_id' => $id,
                'amount' => $amount,
                'total' => $amount,
                'paid_total' => $amount,
            ];

            $order = $this->create($orderInput);
            $order->products()->attach($cartProduct);
        }
    }
}
