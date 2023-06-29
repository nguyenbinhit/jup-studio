<?php

namespace App\Http\Requests\Admins\Employee;

use App\Enums\EmployeeStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'email' => ['string', 'email'],
            'file' => ['image', 'nullable'],
            'position' => ['string', 'nullable'], // Chức vụ
            'description' => ['string', 'nullable'], // Mô tả
            'socials' => ['array', 'nullable'], // Mạng xã hội
            'status' => ['string', Rule::in([EmployeeStatus::Publish->value, EmployeeStatus::UnPublish->value])],
        ];
    }
}
