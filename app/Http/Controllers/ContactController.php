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
            'last_name'  => 'nullable|string|max:100',
            'email'     => 'required|email|max:150',
            'phone'     => 'nullable|string|max:20',
            'message'   => 'required|string|max:1000',
        ]);
 
        try {
            // ✅ 2. SAVE TO DATABASE (SAFE)
            Contact::create($validated);

            // ✅ 3. SEND EMAIL TO ADMIN
            Mail::to(config('mail.from.address'))
                ->send(new ContactMail($validated));

            // ✅ 4. SUCCESS RESPONSE
            return back()->with('success', 'Message sent successfully!');

        } catch (\Exception $e) {

            // ✅ 5. LOG ERROR (IMPORTANT)
            Log::error('Contact Form Error: ' . $e->getMessage());

            return back()->with('error', 'Something went wrong. Please try again.');
        }
    }
}