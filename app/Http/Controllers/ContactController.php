<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // ✅ 1. VALIDATION
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email'    => 'required|email|max:150',
            'phone'    => 'nullable|string|max:20',
            'message'  => 'required|string|max:1000',
            'captcha'  => 'required'
        ]);

        // ✅ 2. CAPTCHA CHECK
        if ($request->captcha != $request->captcha_correct) {
            return back()
                ->withInput()
                ->with('error', 'Invalid captcha. Please try again.');
        }

        try {
            // ✅ 3. SAVE TO DATABASE
            Contact::create([
                'first_name' => $validated['first_name'],
                  'last_name' => $validated['last_name'],
                'email'    => $validated['email'],
                'phone'    => $validated['phone'] ?? null,
                'message'  => $validated['message'],
            ]);

            // ✅ 4. SEND EMAIL TO ADMIN
            Mail::to(env('ADMIN_EMAIL'))
                ->send(new ContactMail($validated));

            // ✅ 5. SUCCESS RESPONSE
            return back()->with('success', 'Message sent successfully!');

        } catch (\Exception $e) {

            // ✅ 6. LOG ERROR
            Log::error('Contact Form Error: ' . $e->getMessage());

            return back()
                ->withInput()
                ->with('error', 'Something went wrong. Please try again.');
        }
    }
}