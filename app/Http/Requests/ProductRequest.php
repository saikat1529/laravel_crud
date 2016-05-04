<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request
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
            'name' => 'required|max:255',
            'price' => 'required'
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'Product Name Required',
            'name.max' => 'Product Name can not be exceed 255',
            'price.required' => 'Price Required'
        ];
    }
}
