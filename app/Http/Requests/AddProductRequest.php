<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            'name' => 'required',
            'image' => 'required',
            'price' => 'required|numeric',
            'color' => 'required',
            'size' => 'required|numeric',
            'category_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name Field is required!',
            'image.required' => 'Image Field is required!',
            'price.required' => 'Price Field is required!',
            'color.required' => 'Color Field is required!',
            'size.required' => 'Size Field is required!',
            'category_id.required' => 'Category_ID Field is required!',
        ];
    }
}
