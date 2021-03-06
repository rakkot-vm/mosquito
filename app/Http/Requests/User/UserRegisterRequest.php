<?php

namespace App\Http\Requests\User;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserRegisterRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => [
                Rule::unique('users')->ignore(Auth::id()),
                'required',
                'email',
                ],
            'password' => 'required|min:6',
        ];
    }

//    protected function failedValidation(Validator $validator) {
//        throw new HttpResponseException(response()->json($validator->errors(), 422));
//    }
}
