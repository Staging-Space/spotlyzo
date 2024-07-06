<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AccountUpdatePasswordRequest;

class AccountController extends Controller
{
    /**
     * Display profile page.
     */
    public function profile()
    {
        return view('app.admin.accounts.profile');
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

        return redirect()->route('admin.accounts.profile')->with([
            'success' => 'The password is updated.',
        ]);
    }
}
