<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Section;
use App\Models\SectionItem;
use Illuminate\Support\Facades\DB;

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

    // 🔹 3. STORE DATA (🔥 FIXED)
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:pages,slug',
            'meta_title' => 'nullable|max:100',
            'meta_description' => 'nullable|max:255',
        ]);

        DB::beginTransaction();

        try {

            // ✅ CREATE PAGE
            $page = Page::create([
                'title' => $request->title,
                'slug' => $request->slug,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'canonical_url' => $request->canonical_url,
                'meta_keywords' => $request->meta_keywords,
                'is_index' => $request->is_index ?? 1,
            ]);

            // ✅ AUTO CREATE DEFAULT SECTIONS
            $this->createDefaultSections($page);

            DB::commit();

            return redirect()->route('pages.index')
                ->with('success', 'Page Created with Default Sections');

        } catch (\Exception $e) {

            DB::rollBack();

            return back()->with('error', $e->getMessage());
        }
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

    // 🔹 7. DELETE PAGE
    public function destroy($id)
    {
        $page = Page::findOrFail($id);

        DB::beginTransaction();

        try {
            // Optional: delete sections & items
            foreach ($page->sections as $section) {
                $section->items()->delete();
                $section->delete();
            }

            $page->delete();

            DB::commit();

            return redirect()->route('pages.index')
                ->with('success', 'Page Deleted Successfully');

        } catch (\Exception $e) {

            DB::rollBack();

            return back()->with('error', $e->getMessage());
        }
    }

    // 🔥 AUTO CREATE DEFAULT SECTIONS
    private function createDefaultSections($page)
    {
        // Prevent duplicate sections
        if ($page->sections()->exists()) {
            return;
        }

        // 🔥 HERO
        $hero = Section::create([
            'page_id' => $page->id,
            'type' => 'hero',
            'title' => $page->title,
            'order' => 0,
        ]);

        SectionItem::create([
            'section_id' => $hero->id,
            'title' => $page->title,
            'description' => 'Write your hero description here...',
            'extra' => [
                'button_text' => 'Get Started',
                'button_url' => '/contact',
                'eyebrow' => 'Welcome'
            ],
        ]);

        // 🔥 ABOUT
        $about = Section::create([
            'page_id' => $page->id,
            'type' => 'about',
            'title' => 'About Us',
            'order' => 1,
        ]);

        SectionItem::create([
            'section_id' => $about->id,
            'title' => 'Who We Are',
            'description' => 'Add your about content here...',
        ]);

        // 🔥 SERVICES
        $services = Section::create([
            'page_id' => $page->id,
            'type' => 'services',
            'title' => 'Our Services',
            'order' => 2,
        ]);

        SectionItem::insert([
            [
                'section_id' => $services->id,
                'title' => 'Service One',
                'description' => 'Service description...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'section_id' => $services->id,
                'title' => 'Service Two',
                'description' => 'Service description...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'section_id' => $services->id,
                'title' => 'Service Three',
                'description' => 'Service description...',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        // 🔥 CTA
        $cta = Section::create([
            'page_id' => $page->id,
            'type' => 'cta',
            'title' => 'Get Started',
            'order' => 3,
        ]);

        SectionItem::create([
            'section_id' => $cta->id,
            'title' => 'Ready to grow your business?',
            'description' => 'Contact us today!',
            'extra' => [
                'button_text' => 'Contact Us',
                'button_url' => '/contact'
            ],
        ]);
    }
}