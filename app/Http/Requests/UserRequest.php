<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
            'email' => 'required|email',
            'password'=> 'required',
            'repassword' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name Required',
            'name.max' => 'Name can\'t be exceed 255 character',
            'email.required' => 'Email Required',
            'email.email' => 'Must be an email',
            'password.required' => 'Password Required',
            'repassword.required' => 'Again Password Required'
        ];
    }
}
