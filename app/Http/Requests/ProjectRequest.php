<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'priority' => 'in:on',
            'title' => 'required|string|max:100',
            'excerpt' => 'string|required|max:150',
            'status' => 'in:on',
            'objective' => 'required|max:500',
            'country' => 'string|max:100',
            'population' => 'string',
            'progression_details' => 'max:400',
            'context' => 'max:400',
            'brief' => 'max:1000',
            'methodology' => 'max:1000',
            'contributors' => 'max:400',
            'conception' => 'max:1500',
            'thumbnail_link' => 'string',
            'video_link' => 'string',
            'project_link' => 'string',
            'tags.*' => 'integer',
            'pictures' => 'string',
            'supports' => 'string',
            'support_links' => 'string'
        ];
    }
}
