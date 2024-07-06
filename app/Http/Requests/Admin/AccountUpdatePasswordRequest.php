<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class AccountUpdatePasswordRequest extends FormRequest
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
            'new_password' => ['required', 'string', 'different:current_password', Password::min(8)->letters()->numbers()->mixedCase()->symbols()],
            'confirm_new_password' => ['required', 'string', 'same:new_password'],
            'current_password' => ['required', 'string', 'current_password:web'],
        ];
    }
}
