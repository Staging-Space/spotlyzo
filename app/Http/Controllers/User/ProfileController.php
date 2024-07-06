<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\AccountUpdatePasswordRequest;
use App\Http\Requests\User\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Update the specified resource in storage.
     */
    public function updateProfile(ProfileUpdateRequest $request)
    {
        $inputs = $request->validated();

        auth()->user()->update([
            'first_name' => $inputs['first_name'],
            'last_name' => $inputs['last_name'],
            'email' => $inputs['email'],
            'phone' => $inputs['phone'],
            'address' => $inputs['address'],
            'city' => $inputs['city'],
            'postal_code' => $inputs['postal_code'],
        ]);

        return redirect()->route('user.accounts.profile')->with([
            'success' => 'The profile is updated.',
        ]);
    }

    /**
     * Update user password.
     */
    public function updatePassword(AccountUpdatePasswordRequest $request)
    {
        $inputs = $request->validated();

        auth()->user()->update([
            'password' => bcrypt($inputs['new_password']),
        ]);

        return redirect()->route('user.accounts.profile')->with([
            'success' => 'The password is updated.',
        ]);
    }
}
