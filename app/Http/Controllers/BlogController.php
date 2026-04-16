<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('category')->latest()->get();

        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();

        return view('blogs.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $this->validateBlog($request);
        $data['slug'] = Str::slug($data['title']) . '-' . Str::random(5);
        $data['published_at'] = $data['is_published'] ? now() : null;
        $data['is_published'] = (bool) ($data['is_published'] ?? false);
        $data['image'] = $this->storeImage($request);

        Blog::create($data);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully');
    }

    public function edit(Blog $blog)
    {
        $categories = Category::orderBy('name')->get();

        return view('blogs.edit', compact('blog', 'categories'));
    }

    public function update(Request $request, Blog $blog)
    {
        $data = $this->validateBlog($request);
        $data['slug'] = Str::slug($data['title']) . '-' . Str::random(5);
        $data['published_at'] = $data['is_published'] ? ($blog->published_at ?? now()) : null;
        $data['is_published'] = (bool) ($data['is_published'] ?? false);
        $data['image'] = $this->updateImage($request, $blog);

        $blog->update($data);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully');
    }

    public function destroy(Blog $blog)
    {
        $this->deleteImage($blog->image);
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully');
    }

    private function validateBlog(Request $request): array
    {
        return $request->validate([
            'category_id' => ['nullable', 'exists:categories,id'],
            'title' => ['required', 'string', 'max:255'],
            'excerpt' => ['nullable', 'string'],
            'content' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,avif', 'max:4096'],
            'is_published' => ['nullable', 'boolean'],
        ]);
    }

    private function storeImage(Request $request): ?string
    {
        if (! $request->hasFile('image')) {
            return null;
        }

        return $request->file('image')->store('blogs', 'public');
    }

    private function updateImage(Request $request, Blog $blog): ?string
    {
        if ($request->hasFile('image')) {
            $this->deleteImage($blog->image);

            return $request->file('image')->store('blogs', 'public');
        }

        return $blog->image;
    }

    private function deleteImage(?string $path): void
    {
        if ($path && Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}
