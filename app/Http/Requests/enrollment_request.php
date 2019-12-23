<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class enrollment_request extends FormRequest
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
            //
            'phone'=>'required|min:11',
        ];
    }

    public function messages()
    {
        return [
            'phone.required'=>'Please provide Phone Number',
            'phone.min'=>'Phone must be greater than or equal to 11 digits'

        ];
    }
}
