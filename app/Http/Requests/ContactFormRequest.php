<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest  // Change to ContactFormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'messageContent' => 'nullable|string|min:5'
        ];
    }

    public function messages(): array
    {
        return [
            'name.max' => 'Name is too long',
            'email.email' => 'Invalid email format',
            'messageContent.min' => 'Message is too short'
        ];
    }
}