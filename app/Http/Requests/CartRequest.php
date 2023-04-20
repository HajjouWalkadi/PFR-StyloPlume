<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
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
            'name' => 'nullable|string',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'product_title' => 'nullable|string',
            'quantity' => 'nullable|numeric|min:1',
            'price' => 'nullable|numeric|min:1',
            'image' => 'nullable|image|max:3000',
            'product_id' => 'nullable|numeric|min:1',
            'user_id' => 'nullable|numeric|min:1',
        ];
    }
}
