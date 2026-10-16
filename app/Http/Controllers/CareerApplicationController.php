<?php

namespace App\Http\Controllers;

use App\Models\CareerApplication;
use App\Services\VisitorTrackingService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CareerApplicationController extends Controller
{
    public function store(Request $request, VisitorTrackingService $tracking)
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:30'],
            'email' => ['required', 'email', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'about' => ['nullable', 'string'],
            'resume' => ['nullable', 'file', 'mimes:pdf,doc,docx', 'max:5120'],
        ]);

        try {
            $resumePath = $request->hasFile('resume')
                ? $request->file('resume')->store('career-resumes', 'public')
                : null;

            $appData = [
                'full_name' => $validated['full_name'],
                'phone' => $validated['phone'],
                'email' => $validated['email'],
                'position' => $validated['position'],
                'about' => $validated['about'] ?? '',
                'resume' => $resumePath,
            ];

            $appData += $tracking->submissionMetadata($request, 'career_applications');

            CareerApplication::create($appData);

            return back()->with('success', 'Application submitted successfully');
        } catch (\Throwable $e) {
            Log::error('Career application submission failed.', [
                'exception' => $e::class,
            ]);

            return back()
                ->withInput()
                ->with('error', config('app.debug') ? 'Error: '.$e->getMessage() : 'Something went wrong. Please try again.');
        }
    }
}
