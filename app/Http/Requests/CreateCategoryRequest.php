<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest
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
            'title'=>'required|min:3|max:100',
            'description'=>'max:250',
        ];
    }
    public function messages()
    {
        return[

        // Category Name Validation Messages
        'title.required'=>'Category Name Required',
        'title.min'=>'Category Name Min Value 3',
        'title.max'=>'Category Name Max Value 100',

        // Category Description Validation Messages
        'description.max'=>'Description Max Value 250'
        ];
    }
}
