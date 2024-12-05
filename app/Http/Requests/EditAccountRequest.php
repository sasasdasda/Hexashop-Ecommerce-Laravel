<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditAccountRequest extends FormRequest
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
            'firstname'=>'min:3|max:30|string',
            'firstname'=>'required|min:3|max:30|string',
            'lastname'=>'required|min:3|max:30|string',
            'profile_image'=>'required',
            'country'=>'required|string|min:3|max:30',
            'store_location'=>'required|string|min:10|max:100',
            'about'=>'required|min:30|max:1000|string',
            'email'=>'required|email|string|unique:users,email',
        ];
    }
    public function messages()
    {
        return [
            'firstname.required'=>'First Name Is Required.',
            'firstname.min'=>'First Name Min Value is 3',
            'firstname.max'=>'First Name Max Value is 30',
            'firstname.string'=>'First Name Must be String',

            'lastname.required'=>'Last Name Is Required.',
            'lastname.min'=>'Last Name Min Value is 3 Character',
            'lastname.max'=>'Last Name max Value is 30 Character',
            'lastname.string'=>'Last Name Must be String',

            'profile_image.required'=>'Image Is Required.',
            // 'profile_image.image'=>'Insert Image File.',

            'country.required'=>'Store Location Is Required.',
            'country.string'=>'Store Location Is string.',
            'country.min'=>'Store Location Min Value is 3',
            'country.max'=>'Store Location Max Value is 30',

            'store_location.required'=>'Store Location Is Required.',
            'store_location.string'=>'Store Location Is string.',
            'store_location.min'=>'Store Location Min Value is 10',
            'store_location.max'=>'Store Location Max Value is 100',

            'about.required'=>'About Field Is Required.',
            'about.min'=>'About Field Min Value is 30',
            'about.max'=>'About Field Max Value is 1000',
            'about.string'=>'About Field Must be String Value.',

            'email.required'=>'First Name Is Required.',
            'email.string'=>'Email Must be String ',
            'email.email'=>'Please Enter a Valid Email.',
            'email.unique'=>'Please Choose Another Email.',
        ];
    }
}
