<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'category' => ['required', 'numeric', 'exists:categories,id'],
            'title' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'min:1', 'max:99999999.99'],
            'quantity' => ['required', 'numeric', 'min:1'],
            'description' => ['required', 'string', 'max:500'],
            'content' => ['required', 'string'],
            'image' => ['required', 'image', 'max:1024', 'dimensions:width=800,height=800'],
        ];
    }
}
