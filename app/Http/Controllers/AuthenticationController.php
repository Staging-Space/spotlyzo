<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password as FacadesPassword;
use Illuminate\Validation\Rules\Password as RulesPassword;

class AuthenticationController extends Controller
{
    /**
     * Display register page and register user.
     */
    public function register(Request $request)
    {
        $method = $request->method();

        if ($method == 'GET') {
            return view('app.authentication.register');
        }

        $inputs = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email', 'max:255'],
            'password' => ['required', 'string', RulesPassword::min(8)->letters()->numbers()->mixedCase()->symbols()],
            'confirm_password' => ['required', 'string', 'same:password'],
        ]);

        User::create([
            'role' => 'user',
            'first_name' => $inputs['first_name'],
            'last_name' => $inputs['last_name'],
            'email' => $inputs['email'],
            'password' => $inputs['password'],
        ]);

        return redirect()->route('index')->with([
            'success' => 'You have registered successfully.',
        ]);
    }

    /**
     * Display login page and login user.
     */
    public function login(Request $request)
    {
        $method = $request->method();

        if ($method == 'GET') {
            return view('app.authentication.login');
        }

        $inputs = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'min:8', 'max:32'],
        ]);

        $success = auth()->attempt($inputs);

        if (!$success) {
            return redirect()->back()->withErrors([
                'error' => 'The email address or password is incorrect.',
            ]);
        }

        $request->session()->regenerate();

        if (auth()->user()->role == 'admin') {
            return redirect()->route('admin.index')->with([
                'success' => 'You have logged in successfully.',
            ]);
        }

        return redirect()->route('index')->with([
            'success' => 'You have logged in successfully.',
        ]);
    }

    /**
     * Display logout page and logout user.
     */
    public function logout(Request $request)
    {
        $method = $request->method();

        if ($method == 'GET') {
            return view('app.authentication.logout');
        }

        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('index')->with([
            'success' => 'You have logged out successfully.',
        ]);
    }

    /**
     * Display forgot password page and send reset password mail.
     */
    public function forgotPassword(Request $request)
    {
        $method = $request->method();

        if ($method == 'GET') {
            return view('app.authentication.forgot-password');
        }

        $inputs = $request->validate([
            'email' => ['required', 'email', 'max:255'],
        ]);

        $status = FacadesPassword::sendResetLink($inputs);

        if ($status != FacadesPassword::RESET_LINK_SENT) {
            return redirect()->back()->withErrors([
                'error' => $status,
            ]);
        }

        return redirect()->route('index')->with([
            'success' => $status,
        ]);
    }

    /**
     * Display reset password page and reset password.
     */
    public function resetPassword(Request $request)
    {
        $method = $request->method();

        if ($method == 'GET') {
            $email = $request->query('email');
            $token = $request->query('token');

            if ($email == null || $token == null) {
                abort(403);
            }

            return view('app.authentication.reset-password', [
                'email' => $email,
                'token' => $token,
            ]);
        }

        $inputs = $request->validate([
            'token' => ['required', 'string'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'string', RulesPassword::min(8)->letters()->numbers()->mixedCase()->symbols()],
            'confirm_password' => ['required', 'string', 'same:password'],
        ]);

        $status = FacadesPassword::reset($inputs, function ($user, $password) {
            $user->update([
                'password' => $password,
            ]);
        });

        if ($status != FacadesPassword::PASSWORD_RESET) {
            return redirect()->back()->withErrors([
                'error' => $status,
            ]);
        }

        return redirect()->route('login')->with([
            'success' => $status,
        ]);
    }
}
