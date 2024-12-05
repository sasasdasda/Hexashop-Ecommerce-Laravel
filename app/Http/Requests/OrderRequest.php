<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'firstname_details' => 'required|min:3|max:100|string',
            'lastname_details' => 'required|min:3|max:100|string',
            'address' => 'required|min:10|max:100|string',
            'twoncity' => 'required|min:5|max:100|string',
            'country' => 'required|min:3|max:100|string',
            'postcode' => 'required|min:3|max:100|string',
            'emailaddress' => 'required|min:3|max:100|string',
            'mobile' => 'required|min:3|max:50|string',
            'notes' => 'required|min:3|max:1000|string',
        ];
    }
}
