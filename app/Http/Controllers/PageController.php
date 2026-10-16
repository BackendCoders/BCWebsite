<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\MenuItem;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PageController extends Controller
{
    private function inferMenuType(?string $type, string $title, string $slug): ?string
    {
        $normalized = MenuItem::normalizeType($type);

        if ($normalized) {
            return $normalized;
        }

        $haystack = strtolower(trim($title . ' ' . $slug));

        if (
            str_contains($haystack, 'software')
            || str_contains($haystack, 'web')
            || str_contains($haystack, 'app')
            || str_contains($haystack, 'api')
            || str_contains($haystack, 'saas')
            || str_contains($haystack, 'erp')
            || str_contains($haystack, 'ecommerce')
            || str_contains($haystack, 'mvp')
        ) {
            return MenuItem::TYPE_SOFTWARE;
        }

        if (
            str_contains($haystack, 'marketing')
            || str_contains($haystack, 'seo')
            || str_contains($haystack, 'social')
            || str_contains($haystack, 'content')
            || str_contains($haystack, 'google ads')
            || str_contains($haystack, 'meta ads')
            || str_contains($haystack, 'local seo')
        ) {
            return MenuItem::TYPE_DIGITAL;
        }

        return null;
    }

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
            'canonical_url' => 'nullable|url|max:255',
            'type' => 'nullable|string|max:255',
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
                'type' => $this->inferMenuType($request->type, $page->title, $page->slug),
                'order' => (MenuItem::max('order') ?? 0) + 1,
                'is_active' => 1,
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
        }, 'menuItem'])->findOrFail($id);

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
            'canonical_url' => 'nullable|url|max:255',
            'type' => 'nullable|string|max:255',
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
                'type' => $this->inferMenuType($request->type, $page->title, $page->slug),
                'order' => (MenuItem::max('order') ?? 0) + 1,
                'is_active' => 1,
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

    public function media(string $path)
    {
        $path = $this->normalizeMediaPath($path);
        $fullPath = $this->resolveMediaFilePath($path);

        if (! $fullPath || ! file_exists($fullPath)) {
            $isIcon = Str::contains(strtolower($path), ['icon', 'logo', 'bci_icon', 'favicon']);
            $fallbackFile = $isIcon ? 'assets/images/bci_icon.png' : 'assets/images/banner.png';
            $fallbackPath = public_path($fallbackFile);

            if (file_exists($fallbackPath)) {
                $fullPath = $fallbackPath;
            }
        }

        abort_unless($fullPath && file_exists($fullPath), 404);

        $mimeType = File::mimeType($fullPath) ?: 'application/octet-stream';

        return response()->file($fullPath, [
            'Content-Type' => $mimeType,
            'Cache-Control' => 'public, max-age=31536000, immutable',
        ]);
    }

    private function resolveMediaFilePath(string $path): ?string
    {
        $candidates = [
            Storage::disk('public')->path($path),
            storage_path('app/public/' . $path),
            public_path('storage/' . $path),
            public_path($path),
            public_path('assets/images/' . $path),
            storage_path('app/' . $path),
        ];

        $basename = basename($path);
        if ($basename && $basename !== $path) {
            $candidates[] = storage_path('app/public/sections/' . $basename);
            $candidates[] = storage_path('app/public/section-items/' . $basename);
            $candidates[] = storage_path('app/public/blogs/' . $basename);
            $candidates[] = storage_path('app/public/projects/' . $basename);
            $candidates[] = public_path('assets/images/' . $basename);
            $candidates[] = public_path('storage/sections/' . $basename);
            $candidates[] = public_path('storage/section-items/' . $basename);
        }

        foreach ($candidates as $candidate) {
            if ($candidate && file_exists($candidate) && is_file($candidate)) {
                return $candidate;
            }
        }

        return null;
    }

    private function normalizeMediaPath(string $path): string
    {
        $path = trim(str_replace('\\', '/', $path));
        $path = ltrim($path, '/');

        if (Str::startsWith($path, 'public/')) {
            return Str::after($path, 'public/');
        }

        if (Str::startsWith($path, 'storage/')) {
            return Str::after($path, 'storage/');
        }

        return $path;
    }
}
