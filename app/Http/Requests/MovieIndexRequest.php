<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieIndexRequest extends FormRequest
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
            'items_per_page' => 'integer|min:1',
            'sort_order' => 'in:ASC,DESC',
            'gener' => 'nullable|string|max:255',// nullable if user does not want to filter result
            'director' => 'nullable|string|max:255',// nullable if user does not want to filter result
        ];
    }
}
