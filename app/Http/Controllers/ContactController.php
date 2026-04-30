<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\ContactReplyMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['nullable', 'string', 'max:100'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string', 'max:20'],
            'message' => ['nullable', 'string'],
            'captcha' => ['required'],
        ]);

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

            $adminRecipient = config('mail.contact.admin_email', config('mail.from.address'));
            if (! $adminRecipient) {
                Log::error('Contact mail configuration is missing an admin recipient.');

                return back()->with('error', 'Email configuration missing.');
            }

            $adminMailSent = false;
            $replyMailSent = false;
            $adminMailFailed = null;
            $replyMailFailed = null;

            try {
                Mail::to($adminRecipient)->send(new ContactMail($contact->toArray()));
                $adminMailSent = true;
            } catch (\Throwable $mailException) {
                $adminMailFailed = $mailException->getMessage();

                Log::error('Contact admin mail failed: '.$mailException->getMessage(), [
                    'contact_id' => $contact->id,
                    'recipient' => $adminRecipient,
                ]);
            }

            try {
                Mail::to($contact->email)->send(new ContactReplyMail($contact->toArray()));
                $replyMailSent = true;
            } catch (\Throwable $replyException) {
                $replyMailFailed = $replyException->getMessage();

                Log::warning('Contact auto-reply failed: '.$replyException->getMessage(), [
                    'contact_id' => $contact->id,
                    'recipient' => $contact->email,
                ]);
            }

            if (! $adminMailSent && ! $replyMailSent) {
                return back()
                    ->with('error', 'Message saved, but email delivery failed. Please try again later.');
            }

            if ($adminMailFailed || $replyMailFailed) {
                return back()->with('success', 'Message saved successfully. Email delivery had a minor issue, but your submission was received.');
            }

            return back()->with('success', 'Message sent successfully!');
        } catch (\Throwable $e) {
            Log::error('Contact Form Error: '.$e->getMessage());

            return back()
                ->withInput()
                ->with('error', 'Something went wrong. Please try again.');
        }
    }
}
