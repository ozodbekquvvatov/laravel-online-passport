<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PassportUpdateRequest extends FormRequest
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
            'passport_number' => 'required|unique:passports|max:255|min:9',
            'issue_date' => 'required|date',
            'expiry_date' => 'required|date',
        ];
    }
}
