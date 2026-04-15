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
    // ✅ STEP 1: VALIDATE (THIS CREATES $validated)
    $validated = $request->validate([
        'first_name' => 'required',
        'last_name' => 'nullable',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'nullable',
        'captcha' =>'required'
    ]);
 // ✅ 2. CAPTCHA CHECK
        if ($request->captcha != $request->captcha_correct) {
            return back()
                ->withInput()
                ->with('error', 'Invalid captcha. Please try again.');
        }

        try {
            // ✅ 3. SAVE TO DATABASE
            // Contact::create([
            //     'name'     => $validated['name'],
            //     'email'    => $validated['email'],
            //     'phone'    => $validated['phone'] ?? null,
            //     'country'  => $validated['country'] ?? null,
            //     'product'  => $validated['product'] ?? null,
            //     'quantity' => $validated['quantity'] ?? null,
            //     'message'  => $validated['message'],
            // ]);

            // ✅ 4. SEND EMAIL TO ADMIN

            //  dd('Email sent');
             Mail::to(config('mail.admin_email') ?: 'enquiry@backendcodersindia.com')
            ->send(new ContactMail($validated));

                //   dd('Email sent');
        // return back()->with('success', 'Message sent successfully!');
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