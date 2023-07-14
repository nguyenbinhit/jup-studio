<?php

namespace App\Http\Requests\Admins\User;

use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;


class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user() ? true : false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {

        return [
            'name' => ['string'],
            'email' => ['email'],
            'password' => ['nullable', Password::min(8)
            ->letters()
            ->mixedCase()
            ->numbers()
            ->symbols()
            ],
        ];
    }
}
