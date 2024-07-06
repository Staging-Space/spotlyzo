<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    /**
     * Display profile page.
     */
    public function profile()
    {
        return view('app.user.accounts.profile', [
            'user' => auth()->user(),
        ]);
    }

    /**
     * Display places page.
     */
    public function places()
    {
        return view('app.user.accounts.places', [
            'places' => auth()->user()->places,
        ]);
    }

    /**
     * Display incoming bookings page.
     */
    public function incomingBookings()
    {
        return view('app.user.accounts.incoming-bookings');
    }

    /**
     * Display outgoing bookings page.
     */
    public function outgoingBookings()
    {
        return view('app.user.accounts.outgoing-bookings');
    }

    /**
     * Display transactions page.
     */
    public function transactions()
    {
        return view('app.user.accounts.transactions');
    }
}
