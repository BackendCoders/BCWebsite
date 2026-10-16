<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\ContactReplyMail;
use App\Models\Contact;
use App\Services\VisitorTrackingService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request, VisitorTrackingService $tracking)
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['nullable', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'min:7', 'max:25', 'regex:/^[\+]?[0-9\s\-\(\)]{7,25}$/'],
            'message' => ['nullable', 'string'],
            'selected_plan' => ['nullable', 'string', 'max:255'],
            'captcha' => ['required'],
        ], [
            'phone.regex' => 'Please enter a valid phone number including country code (e.g. +91 98765 43210).',
            'phone.min' => 'Please enter a valid phone number with at least 7 digits.',
        ]);

        if ($request->captcha != $request->captcha_correct) {
            $errorMessage = "Verification failed: Incorrect math answer. Next steps: Please solve the math question again or click 'Reload challenge' to get a new one.";

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => $errorMessage,
                    'errors' => [
                        'captcha' => [$errorMessage],
                    ],
                ], 422);
            }

            return back()
                ->withInput()
                ->with('error', $errorMessage);
        }

        try {
            $rawMessage = trim((string) ($validated['message'] ?? ''));
            $selectedPlan = trim((string) ($request->input('selected_plan') ?? ''));

            if ($selectedPlan !== '') {
                $planHeader = "Package / Plan Inquiry: " . $selectedPlan;
                if ($rawMessage !== '' && ! str_contains($rawMessage, $selectedPlan)) {
                    $finalMessage = $planHeader . "\n\nClient Requirements / Message:\n" . $rawMessage;
                } elseif ($rawMessage !== '') {
                    $finalMessage = $rawMessage;
                } else {
                    $finalMessage = $planHeader . "\n\nClient submitted an inquiry for this specific package.";
                }
            } else {
                $finalMessage = $rawMessage;
            }

            $contactData = [
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'] ?? '',
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'message' => $finalMessage,
            ];

            $contactData += $tracking->submissionMetadata($request, 'contacts');

            $contact = Contact::create($contactData);

            $adminRecipient = config('mail.contact.admin_email', config('mail.from.address'));
            $adminMailSent = false;
            $replyMailSent = false;
            $adminMailFailed = null;
            $replyMailFailed = null;

            if ($adminRecipient) {
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
            } else {
                Log::warning('Contact mail admin recipient is not configured.');
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
                Log::warning('Contact inquiry #' . $contact->id . ' saved in database, but outbound email delivery failed (check mail server settings).');
            }

            $successMessage = "Thanks! We'll reply within 24 hours. Your inquiry has been received by our team.";

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => $successMessage,
                ]);
            }

            return back()->with('success', $successMessage);
        } catch (\Throwable $e) {
            Log::error('Contact form submission failed.', [
                'exception' => $e::class,
                'database_error' => $e->getPrevious()?->getMessage() ?? $e->getMessage(),
                'sql' => $e instanceof \Illuminate\Database\QueryException ? $e->getSql() : null,
            ]);

            $failureMessage = config('app.debug')
                ? 'Error: '.$e->getMessage().' Next steps: Please check your input or contact technical support.'
                : "We were unable to process your inquiry due to a temporary issue. Next steps: Please try submitting again, or reach us directly at info@backendcodersindia.com / +91 9140092133.";

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => $failureMessage,
                ], 500);
            }

            return back()
                ->withInput()
                ->with('error', $failureMessage);
        }
    }
}
