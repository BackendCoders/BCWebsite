<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $careers = Career::latest()->get();

        return view('careers.index', compact('careers'));
    }

    public function create()
    {
        return view('careers.create');
    }

    public function store(Request $request)
    {
        Career::create($this->validateCareer($request));

        return redirect()->route('careers.index')->with('success', 'Career opening created successfully');
    }

    public function edit(Career $career)
    {
        return view('careers.edit', compact('career'));
    }

    public function update(Request $request, Career $career)
    {
        $career->update($this->validateCareer($request));

        return redirect()->route('careers.index')->with('success', 'Career opening updated successfully');
    }

    public function destroy(Career $career)
    {
        $career->delete();

        return redirect()->route('careers.index')->with('success', 'Career opening deleted successfully');
    }

    private function validateCareer(Request $request): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'employment_type' => ['nullable', 'string', 'max:255'],
            'work_mode' => ['nullable', 'string', 'max:255'],
            'experience' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'cta_label' => ['nullable', 'string', 'max:255'],
            'is_active' => ['nullable', 'boolean'],
        ]);
    }
}
