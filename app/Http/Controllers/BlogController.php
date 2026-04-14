<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('category')->latest()->paginate(10);
        return view('blog.index', compact('blogs'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('blog.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $payload = $this->validatePayload($request);
        $payload['slug'] = $this->generateSlug($request->title);
        $payload['thumbnail'] = $this->storeThumbnail($request);

        Blog::create($payload);

        return redirect()->route('dashboard.blog.index')
            ->with('success', 'Blog created successfully');
    }

    public function edit(Blog $blog)
    {
        $categories = Category::orderBy('name')->get();
        return view('blog.edit', compact('blog', 'categories'));
    }

    public function update(Request $request, Blog $blog)
    {
        $payload = $this->validatePayload($request);
        $payload['slug'] = $this->generateSlug($request->title);

        if ($thumbnail = $this->storeThumbnail($request, $blog)) {
            $payload['thumbnail'] = $thumbnail;
        }

        $blog->update($payload);

        return redirect()->route('dashboard.blog.index')
            ->with('success', 'Blog updated successfully');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->thumbnail) {
            Storage::disk('public')->delete($blog->thumbnail);
        }

        $blog->delete();

        return back()->with('success', 'Blog deleted successfully');
    }

    private function validatePayload(Request $request): array
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
            'excerpt' => 'nullable|string',
            'content' => 'nullable|string',
            'read_time' => 'nullable|integer|min:1',
            'published_at' => 'nullable|date',
            'thumbnail' => 'nullable|image|max:2048',
            'is_featured' => 'sometimes|boolean',
            'status' => 'sometimes|boolean',
        ]);

        $validated['is_featured'] = $request->boolean('is_featured');
        $validated['status'] = $request->boolean('status', true);
        $validated['read_time'] = $validated['read_time'] ?? 1;

        return $validated;
    }

    private function generateSlug(string $title): string
    {
        $slug = Str::slug($title);
        return "{$slug}-" . time();
    }

    private function storeThumbnail(Request $request, ?Blog $blog = null): ?string
    {
        if (!$request->hasFile('thumbnail')) {
            return null;
        }

        if ($blog && $blog->thumbnail) {
            Storage::disk('public')->delete($blog->thumbnail);
        }

        return $request->file('thumbnail')->store('blogs', 'public');
    }
}
