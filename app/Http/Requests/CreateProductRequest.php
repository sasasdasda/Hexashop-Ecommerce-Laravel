<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'product_name' => 'required|min:3|max:60',
            'product_image' => 'required',
            'product_price' => 'required|numeric|min:1',
            'product_category' => 'required|numeric',
            'product_description' => 'required|min:10|max:1000',
        ];
    }
    public function messages()
    {
        return [

            // Product Name Validation Messages
            'product_name.required' => 'Product Name Is Required !',
            'product_name.min' => 'Product Name Min Value Is 3 Character',
            'product_name' => 'Product Name Max Value Is 1000 Character',

            // Product Image Validation Messages
            'product_image.required' => 'Product Image Required !',
            'product_image.image'=>'Please Drop a Image File',

            // Product Price Validation Messages
            'product_price.required' => 'Product Price Is Required !',
            'product_price.numeric' => 'Please Insert A Numeric Value',
            'product_price.min' => 'Min Price Is 1 Dollar',

            // Product Category Validation Messages
            'product_category.required' => 'Category Is Required !',
            'product_category.numeric' => 'Please Choise A Category',

            // Product Description Validation Messages
            'product_description.required' => 'Product Description Required !',
            'product_description.min' => 'Product Min Value Is 10 Character',
            'product_description.max' => 'Product Max Value Is 1000 Character',
        ];
    }
}
