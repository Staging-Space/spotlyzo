<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterMailRequest;
use App\Mail\NewsletterMail;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    /**
     * Send newsletter mail.
     */
    public function mail(NewsletterMailRequest $request)
    {
        $inputs = $request->validated();
        $newsletterMail = new NewsletterMail($inputs);

        Mail::send($newsletterMail);

        return redirect()->back()->with([
            'success' => 'Thank you! You have successfully subscribed our newsletter.',
        ]);
    }
}
