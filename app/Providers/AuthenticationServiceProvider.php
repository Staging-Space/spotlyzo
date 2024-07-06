<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthenticationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Gate::define('admin', function ($user) {
            return $user->role == 'admin';
        });

        Gate::define('user', function ($user) {
            return $user->role == 'user';
        });

        ResetPassword::createUrlUsing(function ($user, $token) {
            return route('reset-password', [
                'email' => $user->email,
                'token' => $token,
            ]);
        });
    }
}
