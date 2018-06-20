<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
                    'ncontrol' => 'required',
                    'curp' => 'required',
                    'grade' => 'required|numeric|max:6',
                    'specialty' => 'required',
                    'grup' => 'required|alpha|max:1',
                    'email' => 'required|email|unique:users',
                    'password' => 'required|min:9',
                    'phone' => 'required|numeric',
                    'imss' => 'required',
                    'tutor' => 'required',
                    'phoneTutor' => 'required|numeric',
                    

                ];
                break;
            case 'PUT':
                return [
                    'name' => 'required|max:255',
                    'ncontrol' => 'required',
                    'curp' => 'required',
                    'grade' => 'required|numeric|max:6',
                    'specialty' => 'required',
                    'grup' => 'required|alpha|max:1',
                    'email' => 'required|email|unique:users,email,'.$this->get('id'),
                    'password' => 'max:255',
                    'password_confirm' => 'max:255|same:password',
                    'phone' => 'required',
                    'imss' => 'required',
                    'tutor' => 'required',
                    'phoneTutor' => 'required',
                    

                ];
                break;
        }
    }
}
