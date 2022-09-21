<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SchoolFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'name' => [
                'required',
                'string',
                'max:200'
            ],
            'location' => [
                'required',
                'string',
                'max:200'
            ],
            'email' => [
                'required',
                'string'
            ],
            'contact' => [
                'required',
                'integer'
            ],
            'status' => [
                'nullable'
            ],
        ];
        return $rules;
    }
}
