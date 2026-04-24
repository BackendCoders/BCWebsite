<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\MenuItem;
use Illuminate\Support\Str;

class PageController extends Controller
{
    // 🔹 1. LIST ALL PAGES
    public function index()
    {
        $pages = Page::withCount('sections')->latest()->get();
        return view('page.index', compact('pages'));
    }

    // 🔹 2. SHOW CREATE FORM
    public function create()
    {
        return view('page.create');
    }

    // 🔹 3. STORE DATA (CREATE PAGE + MENU)
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:pages,slug',
            'meta_title' => 'nullable|max:100',
            'meta_description' => 'nullable|max:255',
        ]);

        // ✅ Create Page
        $page = Page::create([
            'title' => $request->title,
            'slug' => Str::slug($request->slug), // clean URL
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'canonical_url' => $request->canonical_url,
            'meta_keywords' => $request->meta_keywords,
            'is_index' => $request->is_index ?? 1,
        ]);

        // ✅ CREATE MENU (no duplicate)
        MenuItem::firstOrCreate(
            ['page_id' => $page->id],
            [
                'title' => $page->title,
                'type' => $request->type,
                'order' => (MenuItem::max('order') ?? 0) + 1
            ]
        );

        return redirect()->route('pages.index')
            ->with('success', 'Page Created & Added to Menu');
    }

    // 🔹 4. SHOW SINGLE PAGE
    public function show($id)
    {
        $page = Page::with(['sections' => function ($query) {
            $query->orderBy('order')->with('items');
        }])->findOrFail($id);

        return view('page.show', compact('page'));
    }

    // 🔹 5. EDIT FORM
    public function edit($id)
    {
        $page = Page::with(['sections' => function ($query) {
            $query->orderBy('order')->with('items');
        }])->findOrFail($id);

        return view('page.edit', compact('page'));
    }

    // 🔹 6. UPDATE DATA (SYNC MENU)
    public function update(Request $request, $id)
    {
        $page = Page::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:pages,slug,' . $id,
            'meta_title' => 'nullable|max:100',
            'meta_description' => 'nullable|max:255',
        ]);

        // ✅ Update Page
        $page->update([
            'title' => $request->title,
            'slug' => Str::slug($request->slug),
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'canonical_url' => $request->canonical_url,
            'meta_keywords' => $request->meta_keywords,
            'is_index' => $request->is_index ?? 1,
        ]);

        // ✅ CREATE OR UPDATE MENU
        MenuItem::updateOrCreate(
            ['page_id' => $page->id],
            [
                'title' => $page->title,
                'type' => $request->type,
                'order' => (MenuItem::max('order') ?? 0) + 1
            ]
        );

        return redirect()->route('pages.index')
            ->with('success', 'Page & Menu Updated Successfully');
    }

    // 🔹 7. DELETE PAGE (REMOVE MENU ALSO)
    public function destroy($id)
    {
        $page = Page::findOrFail($id);

        // ✅ delete related menu
        MenuItem::where('page_id', $page->id)->delete();

        $page->delete();

        return redirect()->route('pages.index')
            ->with('success', 'Page & Menu Deleted Successfully');
    }
}