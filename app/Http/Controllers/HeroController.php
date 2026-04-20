<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    //  LIST
    public function index()
    {
        $heroes = Hero::latest()->paginate(10);

        return view('banner.hero.index', compact('heroes'));
    }

    //  CREATE FORM
    public function create()
    {
        return view('banner.hero.create');
    }

    //  STORE
    public function store(Request $request)
    {
        //  VALIDATION
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'button_text' => 'nullable|string|max:100',
            'button_url' => 'nullable|string|max:255',
            'button_target' => 'nullable|in:_self,_blank',
        ]);

        //  IMAGE UPLOAD
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('hero', 'public');
        }

        //  CREATE
        Hero::create($validated);

        return redirect()->route('hero.index')
            ->with('success', 'Hero created successfully.');
    }

    //  EDIT FORM
    public function edit($id)
    {
        $hero = Hero::findOrFail($id);

        return view('banner.hero.edit', compact('hero'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $hero = Hero::findOrFail($id);

        //  VALIDATION
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'button_text' => 'nullable|string|max:100',
            'button_url' => 'nullable|string|max:255',
            'button_target' => 'nullable|in:_self,_blank',
        ]);

        //  IMAGE REPLACE
        if ($request->hasFile('image')) {

            // delete old image
            if ($hero->image && Storage::disk('public')->exists($hero->image)) {
                Storage::disk('public')->delete($hero->image);
            }

            $validated['image'] = $request->file('image')->store('hero', 'public');
        }

        //  UPDATE
        $hero->update($validated);

        return redirect()->route('hero.index')
            ->with('success', 'Hero updated successfully.');
    }

    //  DELETE
    public function destroy($id)
    {
        $hero = Hero::findOrFail($id);

        // delete image
        if ($hero->image && Storage::disk('public')->exists($hero->image)) {
            Storage::disk('public')->delete($hero->image);
        }

        $hero->delete();

        return back()->with('success', 'Hero deleted successfully.');
    }
}