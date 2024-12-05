<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'post_title' => 'required|min:3|max:60',
            'select_category'=>'required|numeric',
            'post_body' => 'required|min:2|max:500',
        ];
    }
    public function messages()
    {
        return [
            // 
            'post_title.required'       => 'Post Title Is Required',
            'post_title.min'            => 'Post Title Min Value Is 3 Character',
            'post_title.max'            => 'Post Title Max Value Is 60 Character',

            'select_category.required'  => 'Post Category Is Required',
            'select_category.numeric'   => 'You Must Be Choise Any Category',

            'post_body.required'        => 'Post Title Is Required',
            'post_body.min'             => 'Post Description Min Value Is 3 Character',
            'post_body.max'             => 'Post Description Max Value Is 500 Character',


        ];
    }
}
