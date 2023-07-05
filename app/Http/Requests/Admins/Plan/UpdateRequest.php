<?php

namespace App\Http\Requests\Admins\Plan;

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
        logger($this->all());
        return [
            'name' => ['string'],
            'price' => ['numeric'],
            'description' => ['string', 'nullable'],
            'benefits' => ['array'],
        ];
    }
}
