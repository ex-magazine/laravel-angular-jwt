<?php

namespace App\Http\Controllers;

use App\Repository\CheckoutRepository;
use App\Http\Requests\ShopCheckoutVerifyRequest;
use App\Enums\Permission;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use App\Exceptions\PickbazarException;

class ShopCheckoutController extends Controller
{
    public $repository;

    public function __construct(CheckoutRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Verify the checkout data and calculate tax and shipping.
     *
     * @param CheckoutVerifyRequest $request
     * @return array
     */
    public function verify(CheckoutVerifyRequest $request)
    {
        $user = $request->user();
        if ($user->can(Permission::CUSTOMER)) {
            return $this->repository->verify($request);
        } else {
            throw new PickbazarException('PICKBAZAR_ERROR.NOT_AUTHORIZED');
        }
    }
}
