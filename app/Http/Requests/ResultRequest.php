<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use LDAP\Result;

class ResultRequest extends FormRequest
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
            'result' => 'required|numeric|integer'
        ];
    }
    public function messages()
    {
        return [
            'result.required' => 'Result Field Required',
            'result.numeric' => 'Please Insert A Numeric Value',
            'result.integer' =>'Please Insert A Integer Value'
        ];
    }
}
