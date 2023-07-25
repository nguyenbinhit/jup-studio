<?php

namespace App\Http\Requests\Admins\Page;

use Illuminate\Foundation\Http\FormRequest;

class ReviewStoreRequest extends FormRequest
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
            'customer_name' => ['required', 'string'],
            'customer_email' => ['required', 'email', 'unique:reviews,customer_email'],
            'file' => ['required', 'image'],
            'comment' => ['string', 'nullable'],
            'stars' => ['required', 'integer', 'min:1', 'max:5']
        ];
    }
}
