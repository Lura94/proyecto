<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        switch ($this->method())
        {
            case 'POST':
                return [
                    'name' => 'required|max:255',
                    'email' => 'required|max:255|email|unique:users',
                    'password' => 'required|max:255|min:9',
                    'phone' => 'required',
                ];
                break;
            case 'PUT':
                return [
                    'name' => 'required|max:255',
                    'email' => 'required|email|max:255|unique:users,email,'.$this->get('id'),
                    'password' => 'required|max:255|min:9',
                    'password_confirm' => 'same:password|required|min:9|max:255',
                    'phone' => 'required',
                ];
                break;
        }

    }
}
