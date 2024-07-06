<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactMailRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.contact.index');
    }

    /**
     * Send contact mail.
     */
    public function mail(ContactMailRequest $request)
    {
        $inputs = $request->validated();
        $contactMail = new ContactMail($inputs);

        Mail::send($contactMail);

        return redirect()->route('contact.index')->with([
            'success' => 'Thank you! Your message has been sent. We will contact you soon.',
        ]);
    }
}
