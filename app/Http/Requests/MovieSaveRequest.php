<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieSaveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255|regex:/^[^\'"\\\\]+$/',
            'director' => 'required|string|max:255|regex:/^[^\'"\\\\]+$/',
            'gener' => 'required|string|max:255|regex:/^[^\'"\\\\]+$/',
            'release_year' => 'required|integer|between:1900,' . date('Y'),
            'description' => 'required|string|max:1000|regex:/^[^\'"\\\\]*$/',
        ];

        if ($this->isMethod('patch') || $this->isMethod('put')) {

        }

        return $rules;
    }
}
