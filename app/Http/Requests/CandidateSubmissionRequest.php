<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidateSubmissionRequest extends FormRequest
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

            'file' => 'required',
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|string|email',
            'phone' => 'required|string',
            'experience' => 'required|int|exists:software_development_languages,id',
            'skill' => 'required|int|exists:software_development_skills,id',
            'salary' => 'required|int|exists:expected_salaries,id',
            'description' => 'required|string',
        ];
    }
}
