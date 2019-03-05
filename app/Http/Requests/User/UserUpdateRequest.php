<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
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
            'id' => 'required|integer',
            'name' => 'required|string',
            'email' => [
                Rule::unique('users')->ignore($this->request->get('id')),
                'required',
                'email',
                ],
            'password' => 'nullable|string|min:6',
        ];
    }

//    protected function failedValidation(Validator $validator) {
//        throw new HttpResponseException(response()->json($validator->errors(), 422));
//    }
}
