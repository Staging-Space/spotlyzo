<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class PlaceStoreRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'category' => ['required', 'exists:categories,id'],
            'description' => ['required', 'string', 'max:250'],
            'content' => ['required', 'string'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'min:1'],
            'monday_opening_time' => ['nullable', 'date_format:H:i'],
            'monday_closing_time' => ['nullable', 'date_format:H:i'],
            'tuesday_opening_time' => ['nullable', 'date_format:H:i'],
            'tuesday_closing_time' => ['nullable', 'date_format:H:i'],
            'wednesday_opening_time' => ['nullable', 'date_format:H:i'],
            'wednesday_closing_time' => ['nullable', 'date_format:H:i'],
            'thursday_opening_time' => ['nullable', 'date_format:H:i'],
            'thursday_closing_time' => ['nullable', 'date_format:H:i'],
            'friday_opening_time' => ['nullable', 'date_format:H:i'],
            'friday_closing_time' => ['nullable', 'date_format:H:i'],
            'saturday_opening_time' => ['nullable', 'date_format:H:i'],
            'saturday_closing_time' => ['nullable', 'date_format:H:i'],
            'sunday_opening_time' => ['nullable', 'date_format:H:i'],
            'sunday_closing_time' => ['nullable', 'date_format:H:i'],
            'facilities' => ['array'],
            'images' => ['required', 'array'],
            'images.*' => ['image', 'mimes:jpg,png', 'max:1024'],
        ];
    }
}
