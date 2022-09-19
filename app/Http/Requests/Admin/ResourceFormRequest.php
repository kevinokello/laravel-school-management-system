<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ResourceFormRequest extends FormRequest
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
        $rules =  [
            'category_id' => [
                'required',
                'integer'
            ],
            'sub_category_id' => [
                'required',
                'integer'
            ],
            'image' => [
                'nullable'
            ],
            'name' => [
                'required',
                'string',
                'max:200'
            ],
            'price' => [
                'required',
                'integer'
            ],
            'slug' => [
                'required',
                'string',
                'max:200'
            ],
            'status' => [
                'nullable'
            ],
            'featured' => [
                'nullable'
            ],
            'recommended' => [
                'nullable'
            ],
            'description' => [
                'nullable',
                'string',
                'max:200'
            ],
            'body' => [
                'nullable',
                'string',
                'max:200'
            ],
            'attatchment' => [
                'nullable'
            ],
            'yt_iframe' => [
                'nullable'
            ],

        ];
        return $rules;
    }
}
