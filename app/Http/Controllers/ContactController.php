<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // Import Mail Facade
use App\Mail\ContactFormSubmitted;     // Import your Mailable class

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // 1. Validate the incoming form data
        $validated = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName'  => 'required|string|max:255',
            'email'     => 'required|email|max:255',
            'phone'     => 'nullable|string|max:20',
            'message'   => 'required|string',
        ]);

        // 2. Send the email to the Admin
        // Replace 'admin@goodwillanguage.com' with the actual email you want to receive these messages on
        Mail::to('admin@goodwillanguage.com')->send(new ContactFormSubmitted($validated));

        // 3. Return a success response back to the Vue frontend
        return back()->with('success', 'Thank you! Your message has been sent successfully.');
    }
}
