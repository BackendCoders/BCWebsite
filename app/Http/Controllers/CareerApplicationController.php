<?php

namespace App\Http\Controllers;

use App\Models\CareerApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CareerApplicationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:30'],
            'email' => ['required', 'email', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'about' => ['nullable', 'string'],
            'resume' => ['nullable', 'file', 'mimes:pdf,doc,docx', 'max:5120'],
        ]);

        $validated['resume'] = $request->hasFile('resume')
            ? $request->file('resume')->store('career-resumes', 'public')
            : null;

        CareerApplication::create($validated);

        return back()->with('success', 'Application submitted successfully');
    }
}
