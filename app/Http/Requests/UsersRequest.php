<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
    public function rules() {
        $now=date('m/d/Y');
        return [
            'firstName' => 'required|min:3',
            'lastName' => 'required|min:3',
            'birth' => 'required|date|date_format:m/d/Y|before_or_equal:'.$now,
            'email' => 'required|email:rfc',
            'phone' => 'required|regex:/^(\(?\d{3}\)?[\- ]?)?[\s\]?[0-9]{3}?[\d\- ]?[0-9]{4}$/'

        ];
    }
    public function attributes() {
        return [
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'birth' => 'Date Of Birth',
            'email' => 'Email',
            'phone' => 'Phone Number'
        ];
    }
}
