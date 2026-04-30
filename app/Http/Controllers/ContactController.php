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
    //  STEP 1: VALIDATE (THIS CREATES $validated)
    $validated = $request->validate([
        'first_name' => 'required',
        'last_name' => 'nullable',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'nullable',
        'captcha' =>'required'
    ]);
 // 2. CAPTCHA CHECK
        if ($request->captcha != $request->captcha_correct) {
            return back()
                ->withInput()
                ->with('error', 'Invalid captcha. Please try again.');
        }

        try {
            $contact = Contact::create([
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'] ?? '',
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'message' => $validated['message'] ?? '',
            ]);

            $recipient = config('mail.admin_email') ?: config('mail.from.address');

            try {
                Mail::to($recipient)
                    ->send(new ContactMail($contact->toArray()));
            } catch (\Throwable $mailException) {
                Log::warning('Contact mail delivery failed: '.$mailException->getMessage(), [
                    'contact_id' => $contact->id,
                    'email' => $contact->email,
                ]);
            }

            return back()->with('success', 'Message sent successfully!');

        } catch (\Exception $e) {

            //  6. LOG ERROR
            Log::error('Contact Form Error: ' . $e->getMessage());

            return back()
                ->withInput()
                ->with('error', 'Something went wrong. Please try again.');
        }
    }
}
