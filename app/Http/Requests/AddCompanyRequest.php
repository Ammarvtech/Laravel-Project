<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCompanyRequest extends FormRequest
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
            'email' => 'required|unique:companies',
            'image' => 'required',
            'website' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name Field is required!',
            'email.required' => 'Email Field is required!',
            'image.required' => 'Image Field is required!',
            'website.required' => 'Website Field is required!',
        ];
    }
}
