<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest
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
            'tod' => 'required|min:3|max:60',
            // 'result' => 'numeric|required'
        ];
    }
    public function messages()
    {
        return [
            'tod.required'     =>  'Quick Todo Field Required',
            'tod.min'=>'Todo List Field Must Be at Least 3 Characters.',
            'tod.max'=>'Todo List Must Not Be Greater Than 60 Characters.',
            'result.required'   =>  'Result Field Required',
            'result.numeric'    =>  'Please Insert a Numeric Value',
        ];
    }
}
