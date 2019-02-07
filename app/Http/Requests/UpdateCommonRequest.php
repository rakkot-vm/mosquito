<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCommonRequest extends FormRequest
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
            'data.*.title' => 'required|string|max:255',
            'data.*.value' => [
                'sometimes',
                function($filed, $value){
                    if(is_string($value) && strlen($value) <= 255) return true;
                    if(is_object($value)) return true;
                }],
        ];
    }
}
