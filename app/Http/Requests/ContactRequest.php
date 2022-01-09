<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        $rules = [
            'first_name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:contacts,email',
            'date_of_birth' => 'required|date',
            'phone_numbers' => 'required|array|min:1',
            'phone_numbers.*' => 'required|min:1|unique:phone_numbers,phone_number',
        ];

        if ($this->route()->named('contacts.update')) {
            $id = $this->route()->parameter('contact')->id;
            $rules['email'] .= ',' . $id;
            $rules['phone_numbers.*'] .= ',' . $id . ',contact_id|distinct';
        }

        return $rules;
    }
}
