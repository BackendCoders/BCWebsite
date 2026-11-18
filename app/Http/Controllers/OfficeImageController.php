<?php

namespace App\Http\Controllers;

use App\Models\OfficeImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class OfficeImageController extends Controller
{
    public function index(Request $request)
    {
        $query = OfficeImage::query();

        if ($request->filled('category')) {
            $query->where('category', $request->input('category'));
        }

        if ($request->filled('status')) {
            if ($request->input('status') === 'published') {
                $query->where('is_published', true);
            } elseif ($request->input('status') === 'draft') {
                $query->where('is_published', false);
            }
        }

        $images = $query->ordered()->paginate(15)->withQueryString();
        $categories = OfficeImage::CATEGORIES;

        return view('office_images.index', compact('images', 'categories'));
    }

    public function create()
    {
        $categories = OfficeImage::CATEGORIES;
        return view('office_images.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => ['required', 'string', Rule::in(OfficeImage::CATEGORIES)],
            'title' => 'nullable|string|max:255',
            'caption' => 'nullable|string|max:1000',
            'alt_text' => 'nullable|string|max:255',
            'order' => 'nullable|integer',
            'is_featured' => 'nullable|boolean',
            'is_published' => 'nullable|boolean',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:8192',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:8192',
            'manual_path' => 'nullable|string|max:255',
        ]);

        $category = $request->input('category');
        $order = (int) ($request->input('order') ?? 0);
        $isFeatured = $request->boolean('is_featured');
        $isPublished = $request->has('is_published') ? $request->boolean('is_published') : true;

        // Multiple images upload support
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('office_gallery', 'public');
                $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $title = $request->filled('title') ? $request->input('title') : ucwords(str_replace(['-', '_'], ' ', $filename));

                OfficeImage::create([
                    'title' => $title,
                    'caption' => $request->input('caption'),
                    'alt_text' => $request->filled('alt_text') ? $request->input('alt_text') : $title . ' - Backend Coders India Kanpur',
                    'image_path' => $path,
                    'category' => $category,
                    'order' => $order++,
                    'is_featured' => $isFeatured,
                    'is_published' => $isPublished,
                ]);
            }

            return redirect()->route('office-images.index')->with('success', 'Images uploaded successfully.');
        }

        // Single image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('office_gallery', 'public');
        } elseif ($request->filled('manual_path')) {
            $imagePath = trim($request->input('manual_path'));
        }

        if (! $imagePath) {
            return back()->withInput()->withErrors(['image' => 'Please select an image file to upload or provide an image path.']);
        }

        OfficeImage::create([
            'title' => $request->input('title'),
            'caption' => $request->input('caption'),
            'alt_text' => $request->filled('alt_text') ? $request->input('alt_text') : ($request->input('title') ?: 'Backend Coders India Kanpur Office Workspace'),
            'image_path' => $imagePath,
            'category' => $category,
            'order' => $order,
            'is_featured' => $isFeatured,
            'is_published' => $isPublished,
        ]);

        return redirect()->route('office-images.index')->with('success', 'Office gallery image added successfully.');
    }

    public function edit(OfficeImage $officeImage)
    {
        $categories = OfficeImage::CATEGORIES;
        return view('office_images.edit', compact('officeImage', 'categories'));
    }

    public function update(Request $request, OfficeImage $officeImage)
    {
        $request->validate([
            'category' => ['required', 'string', Rule::in(OfficeImage::CATEGORIES)],
            'title' => 'nullable|string|max:255',
            'caption' => 'nullable|string|max:1000',
            'alt_text' => 'nullable|string|max:255',
            'order' => 'nullable|integer',
            'is_featured' => 'nullable|boolean',
            'is_published' => 'nullable|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:8192',
            'manual_path' => 'nullable|string|max:255',
        ]);

        $data = [
            'title' => $request->input('title'),
            'caption' => $request->input('caption'),
            'alt_text' => $request->input('alt_text'),
            'category' => $request->input('category'),
            'order' => (int) ($request->input('order') ?? 0),
            'is_featured' => $request->boolean('is_featured'),
            'is_published' => $request->boolean('is_published'),
        ];

        if ($request->hasFile('image')) {
            $this->deleteStoredFile($officeImage->image_path);
            $data['image_path'] = $request->file('image')->store('office_gallery', 'public');
        } elseif ($request->filled('manual_path')) {
            $data['image_path'] = trim($request->input('manual_path'));
        }

        $officeImage->update($data);

        return redirect()->route('office-images.index')->with('success', 'Office image updated successfully.');
    }

    public function destroy(OfficeImage $officeImage)
    {
        $this->deleteStoredFile($officeImage->image_path);
        $officeImage->delete();

        return redirect()->route('office-images.index')->with('success', 'Office image deleted successfully.');
    }

    public function toggle(OfficeImage $officeImage, string $field)
    {
        if (in_array($field, ['is_published', 'is_featured'], true)) {
            $officeImage->update([$field => ! $officeImage->$field]);
            return back()->with('success', 'Status updated successfully.');
        }

        return back();
    }

    private function deleteStoredFile(?string $path): void
    {
        if (! $path) {
            return;
        }

        // Do not delete preset public assets
        if (str_starts_with($path, 'assets/')) {
            return;
        }

        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}

