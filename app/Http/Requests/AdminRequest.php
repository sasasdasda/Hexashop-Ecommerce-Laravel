<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class AdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name'      =>  'required|max:30|min:4',
            // 'username'  =>  'required|max:30|min:4',
            'email'     =>  'required|min:4|max:100|email|unique:users,email',
            'password2' =>  'required|min:8|max:100|string',
        ];
    }

    public function messages()
    {
        // if($request->name){

        // }
        // Return Validation Messages
        return [
            // Name Validation Messages
            'name.required'     => 'Name Is Required',
            'name.max'          => 'Name Max Length Is 30',
            'name.min'          => 'Name min length Is 4',

            // Username Validation Messages
            'username.required' => 'Username Is Required',
            'username.min'      => 'Username Min Value Is 30',
            'username.max'      => 'Username Max Value Is 4',

            // Email Validation Messages
            'email.required'    => 'Email Is Required',
            'email.max'         => 'Email max Value Is 100',
            'email.min'         => 'Email min Value Is 4 ',
            'email.email'       => 'Please Insert Valid Email ',
            'email.unique'      => 'Enter Another Email',
            
            // Password Validation Messages
            'password2.required' => 'Password Is Required',
            'password2.min'      => 'Password Min Value Is 8',
            'password2.max'      => 'Password Max Value Is 100',
            'password2.string'   => 'Password Must Be a String',
        ];
    }
}
