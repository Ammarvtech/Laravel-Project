<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddEmployeeRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:employees',
            'company_id' => 'required',
            'phone' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'First Name Field is required!',
            'last_name.required' => 'Last Name Field is required!',
            'email.required' => 'Email Field is required!',
            'company_id.required' => 'Company Field is required!',
            'phone.required' => 'Phone Field is required!',
        ];
    }
}
