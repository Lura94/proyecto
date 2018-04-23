<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportRequest extends FormRequest
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
                    'id_student' => 'required',
                    'name_teacher' => 'required|max:255',
                    'reason' => 'required',
                    'description' => 'required',
                    'signed_hour' => 'required|numeric|min:1',
                ];
                break;
            case 'PUT':
                return [
                    'id_student' => 'required',
                    'name_teacher' => 'required|max:255',
                    'reason' => 'required',
                    'description' => 'required',
                    'signed_hour' => 'required|numeric|min:1',
                ];
                break;
        }

    }
}
