<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class OrderStoreRequest extends FormRequest
{
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
        return [
            'status' => 'string|max:20',
            'amount' => 'numeric',

            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'phone' => 'numeric',
            'email' => 'email',
            'land' => 'string|max:255',
            'index' => 'numeric',
            'city' => 'string|max:255',
            'street' => 'string|max:255',
            'house' => 'string|max:255',
            'client_type' => 'string|max:255',

            'products_json' => 'json',
            'payment' => 'string|max:255',
        ];
    }

    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
