<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    // public function pass(){
    //     return
    // }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // if ($this->password != $this->confirmPassword) {
        //     // return redirect()->back()->with(['ss', 'ssssssssssssadasssssssssssssss']);
        //     $ss = 'sad';
        //     return view('signup', $ss);
        //     // redirect()->back()->with(['ss' => 'sssss']);
        // }
        return [
            'firstname' => 'required|min:3|max:30|string',
            'lastname' => 'required|min:3|max:30|string',
            'username' => 'required|min:4|max:100|string|unique:users,name,except,id',
            'email' => 'required|min:6|max:60|string|email|unique:users,email',
            'password' => 'required|min:3|max:30|string',
            'confirmPassword' => 'required|min:3|max:30|string',
        ];
    }
    public function messages()
    {
        return [
            // First Name
            'firstname.required' => 'First Name Filed is Required',
            'firstname.min' => 'Min Length For Fisrt Name is 3 Character',
            'firstname.max' => 'Max Length is 30 Character',
            'firstname.string' => 'Please Insert A String Value',
            // Last Name
            'lastname.required' => 'Last Name Filed is Required',
            'lastname.min' => 'Min Length For Last Name is 3 Character',
            'lastname.max' => 'Max Length is 30 Character',
            'lastname.string' => 'Please Insert A String Value',
            // User Name
            'username.required' => 'Username Filed is Required',
            'username.min' => 'Min Length is 4 Character',
            'username.max' => 'Max Length is 100 Character',
            'username.string' => 'Please Insert A String Value to Username Field',
            'username.unique' => 'This Username Is Exist',
            // Email
            'email.required' => 'Email Filed is Required',
            'email.min' => 'Email Min Length is 6 Character',
            'email.max' => 'Email Max Length is 60 Character',
            'email.string' => 'Please Insert A String Value to Email Field',
            'email.unique' => 'This Email Is Exist',
            // Password
            'password.required' => 'Password Filed is Required',
            'password.min' => 'Password Min Length is 6 Character',
            'password.max' => 'Password Max Length is 60 Character',
            'password.string' => 'Please Insert A String Value to Password Field',
            // Confirm Password
            'confirmPassword.required' => 'Password Filed is Required',
            'confirmPassword.min' => 'Password Min Length is 6 Character',
            'confirmPassword.max' => 'Password Max Length is 60 Character',
            'confirmPassword.string' => 'Please Insert A String Value to Password Field',
        ];
    }
}
