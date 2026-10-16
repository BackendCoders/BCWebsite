<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Services\BlogContentFormatter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
        $request->merge([
            'table_of_contents' => $this->normalizeTableOfContents($request->input('table_of_contents', [])),
            'faqs' => $this->normalizeFaqs($request->input('faqs', [])),
        ]);

        $data = $this->validateBlog($request);
        $data['category_id'] = $this->normalizeCategoryId($data['category_id'] ?? null);
        $data['slug'] = $this->resolveUniqueSlug($data['slug'] ?? '', $data['title']);
        $data['is_published'] = $request->boolean('is_published');
        $data['is_featured'] = $request->boolean('is_featured');
        $data['published_at'] = $data['is_published'] ? now() : null;
        $formattedContent = app(BlogContentFormatter::class)->format($data['content'] ?? '', $data['title'] ?? '', $data['meta_keywords'] ?? null);
        $data['content'] = $formattedContent['content'];
        if (empty($data['table_of_contents'])) {
            $data['table_of_contents'] = $formattedContent['table_of_contents'];
        }
        if (empty($data['faqs'])) {
            $data['faqs'] = $formattedContent['faqs'];
        }
        $data['image'] = $this->storeImage($request);

        Blog::create($data);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully');
    }

    public function edit(Blog $blog)
    {
        $categories = Category::orderBy('name')->get();

        return view('blogs.edit', compact('blog', 'categories'));
    }

    public function show(Blog $blog)
    {
        $blog->load('category');

        return view('blogs.show', compact('blog'));
    }

    public function image(string $path)
    {
        $path = $this->normalizeImagePath($path);

        abort_unless(str_starts_with($path, 'blogs/'), 404);
        abort_unless(Storage::disk('public')->exists($path), 404);

        $fullPath = Storage::disk('public')->path($path);
        $mimeType = Storage::disk('public')->mimeType($path)
            ?: File::mimeType($fullPath)
            ?: 'application/octet-stream';

        return response()->file($fullPath, [
            'Content-Type' => $mimeType,
            'Cache-Control' => 'public, max-age=31536000, immutable',
        ]);
    }

    public function update(Request $request, Blog $blog)
    {
        $request->merge([
            'table_of_contents' => $this->normalizeTableOfContents($request->input('table_of_contents', [])),
            'faqs' => $this->normalizeFaqs($request->input('faqs', [])),
        ]);

        $data = $this->validateBlog($request);
        $data['category_id'] = $this->normalizeCategoryId($data['category_id'] ?? null);
        $data['slug'] = $this->resolveUniqueSlug($data['slug'] ?? '', $data['title'], $blog->id);
        $data['is_published'] = $request->boolean('is_published');
        $data['is_featured'] = $request->boolean('is_featured');
        $data['published_at'] = $data['is_published'] ? ($blog->published_at ?? now()) : null;
        $formattedContent = app(BlogContentFormatter::class)->format($data['content'] ?? '', $data['title'] ?? '', $data['meta_keywords'] ?? null);
        $data['content'] = $formattedContent['content'];
        if (empty($data['table_of_contents'])) {
            $data['table_of_contents'] = $formattedContent['table_of_contents'];
        }
        if (empty($data['faqs'])) {
            $data['faqs'] = $formattedContent['faqs'];
        }
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

    // private function validateBlog(Request $request): array
    // {
    //     return $request->validate([
    //         'category_id' => ['nullable', 'integer', 'exists:categories,id'],
    //         'title' => ['required', 'string', 'max:255'],
    //         'excerpt' => ['nullable', 'string'],
    //         'content' => ['nullable', 'string'],
    //         'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,avif', 'max:4096'],
    //         'is_published' => ['nullable', 'boolean'],
    //     ]);
    // }

   
    private function validateBlog(Request $request): array
{
return $request->validate([

    'category_id' => ['nullable', 'integer', 'exists:categories,id'],
    'title' => [ 'required', 'string','max:255' ],
    'slug' => ['nullable', 'string', 'max:255'],

    'excerpt' => ['nullable', 'string' ],

    'content' => [  'nullable','string' ],

    'image' => [ 'nullable', 'image','mimes:jpg,jpeg,png,webp,avif', 'max:4096' ],

    'meta_title' => ['nullable','string','max:255' ],

    'meta_description' => [ 'nullable', 'string' ],

    'meta_keywords' => ['nullable','string'],

    'table_of_contents' => ['nullable', 'array'],

    'table_of_contents.*.title' => ['nullable', 'string', 'max:255'],

    'table_of_contents.*.anchor' => ['nullable', 'string', 'max:255'],

    'faqs' => ['nullable','array' ],

    'faqs.*.question' => [ 'nullable', 'string', 'max:500' ],

    'faqs.*.answer' => [ 'nullable','string' ],

    'is_featured' => [ 'nullable', 'boolean' ],

    'is_published' => [ 'nullable','boolean' ],

]);


}

    private function normalizeTableOfContents(array $tableOfContents): array
    {
        return collect($tableOfContents)
            ->map(function ($item, $index) {
                $title = trim((string) data_get($item, 'title', is_string($item) ? $item : ''));
                $anchor = trim((string) data_get($item, 'anchor', ''));

                if (! filled($title) && ! filled($anchor)) {
                    return null;
                }

                return [
                    'title' => $title ?: 'Section '.($index + 1),
                    'anchor' => $anchor ?: \Illuminate\Support\Str::slug($title ?: 'section-'.($index + 1)),
                ];
            })
            ->filter()
            ->values()
            ->all();
    }

private function normalizeFaqs(array $faqs): array
    {
        return collect($faqs)
            ->map(function ($faq) {
                $question = trim((string) data_get($faq, 'question', ''));
                $answer = (string) data_get($faq, 'answer', '');

                if (! filled($question) && ! filled($answer)) {
                    return null;
                }

                if (! filled($question) || ! filled($answer)) {
                    return null;
                }

                return [
                    'question' => $question,
                    'answer' => $answer,
                ];
            })
            ->filter()
            ->values()
            ->all();
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

    private function normalizeCategoryId(mixed $categoryId): ?int
    {
        return filled($categoryId) ? (int) $categoryId : null;
    }

    private function makeUniqueSlug(string $title): string
    {
        return $this->resolveUniqueSlug('', $title);
    }

    private function resolveUniqueSlug(string $slug, string $title, ?int $ignoreId = null): string
    {
        $base = Str::slug(trim($slug) !== '' ? $slug : $title);
        $base = $base !== '' ? $base : 'blog';
        $candidate = $base;
        $index = 1;

        while (
            Blog::where('slug', $candidate)
                ->when($ignoreId, fn ($query) => $query->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $candidate = $base.'-'.$index;
            $index++;
        }

        return $candidate;
    }

    private function normalizeImagePath(string $path): string
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

    public function uploadEditorImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp,svg|max:10240',
        ]);

        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension() ?: 'webp';
        $filename = 'editor_' . time() . '_' . Str::random(10) . '.' . $extension;

        $path = $file->storeAs('blogs', $filename, 'public');
        $url = route('blogs.image', ['path' => $path]);

        return response()->json([
            'success' => true,
            'url' => $url,
            'path' => $path,
            'filename' => $filename,
        ]);
    }
}
