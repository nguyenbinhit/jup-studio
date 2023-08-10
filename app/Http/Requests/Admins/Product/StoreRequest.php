<?php

namespace App\Http\Requests\Admins\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            // 'name' => ['string', 'nullable'], // TODO:
            // 'description' => ['string', 'nullable'], // TODO:
            'file' => ['required', 'image'],
            // 'type' => ['string', 'nullable'], // TODO:
        ];
    }
}
