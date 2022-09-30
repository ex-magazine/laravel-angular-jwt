<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ShopOrderUpdateRequest extends FormRequest
{
    protected $rules = [];

    /**
     * General validation rules
     *
     * @return array
     */
    protected function getRules()
    {
        return [
            'coupon_id'       => 'nullable|exists:App\Models\Coupon,id',
            'shop_id'         => 'exists:App\Models\Shop,id',
            'products'        => 'array',
            'amount'          => 'numeric',
            'paid_total'      => 'numeric',
            'total'           => 'numeric',
            'status'          => 'exists:App\Models\OrderStatus,id',
            'customer_id'     => 'exists:App\Models\UserShop,id',
            'payment_gateway' => 'string',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->rules = $this->getRules();
        return $this->rules;
    }


    public function failedValidation(Validator $validator)
    {
        // TODO: Need to check from the request if it's coming from GraphQL API or not.
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
