<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    // 🔹 1. LIST ALL PAGES
    public function index()
    {
        $pages = Page::latest()->get();
        return view('page.index', compact('pages'));
    }

    // 🔹 2. SHOW CREATE FORM
    public function create()
    {
        return view('page.create');
    }

    // 🔹 3. STORE DATA
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:pages,slug',
            'meta_title' => 'nullable|max:100',
            'meta_description' => 'nullable|max:255',
        ]);

        Page::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'canonical_url' => $request->canonical_url,
            'meta_keywords' => $request->meta_keywords,
            'is_index' => $request->is_index ?? 1,
        ]);

        return redirect()->route('pages.index')
            ->with('success', 'Page Created Successfully');
    }


    // 🔹 4. SHOW SINGLE PAGE
    public function show($id)
    {
        $page = Page::findOrFail($id);
        return view('page.show', compact('page'));
    }

    // 🔹 5. EDIT FORM
    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('page.edit', compact('page'));
    }

    // 🔹 6. UPDATE DATA
    public function update(Request $request, $id)
    {
        $page = Page::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:pages,slug,' . $id,
            'meta_title' => 'nullable|max:100',
            'meta_description' => 'nullable|max:255',
        ]);

        $page->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'canonical_url' => $request->canonical_url,
            'meta_keywords' => $request->meta_keywords,
            'is_index' => $request->is_index ?? 1,
        ]);

        return redirect()->route('pages.index')
            ->with('success', 'Page Updated Successfully');
    }



public function sections()
{
    return $this->hasMany(Section::class)->orderBy('order');
}

    // 🔹 7. DELETE PAGE
    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        $page->delete();

        return redirect()->route('pages.index')
            ->with('success', 'Page Deleted Successfully');
    }
}