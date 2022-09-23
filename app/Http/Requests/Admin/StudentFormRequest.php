<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StudentFormRequest extends FormRequest
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
            'academic_id' => [
                'required',
                'integer'
            ],
            'cohort_id' => [
                // 'required',
                'integer'
            ],
            'session_id' => [
                'required',
                'integer'
            ],
            'religion_id' => [
                'required'
            ],
            'gender_id' => [
                'required'
            ],
            'first_name' => [
                'required',
                'string',
                'max:200'
            ],
            'middle_name' => [
                'required',
                'string',
                'max:200'
            ],
            'last_name' => [
                'required',
                'string',
                'max:200'
            ],
            'location_id' => [
                'required',
                'string',
                'max:200'
            ],
            'email' => [
                'required',
                'string',
                'max:200'
            ],
            'date_of_birth' => [
                'required'
            ],
            'mobile' => [
                'required',
                'integer'
            ],
            'admission_date' => [
                'required'
            ],
            'student_photo' => [
                'nullable'
            ],
            'admission_no' => [
                'required',
                'string',
                'max:200'
            ],
            'previous_school_details' => [
                'required',
                'string',
                'max:200'
            ],
            'aditional_notes' => [
                'required',
                'string',
                'max:200'
            ],
            'medical_condition' => [
                'required',
                'string',
                'max:200'
            ],

        ];
        return $rules;
    }
}
