<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $payload = $request->validate([
            'name' => 'required|max:255',
            'color' => 'nullable|string',
            'status' => 'sometimes|boolean',
        ]);

        $payload['slug'] = $this->buildSlug($payload['name']);
        $payload['status'] = $request->boolean('status', true);

        Category::create($payload);

        return redirect()->route('dashboard.category.index')
            ->with('success', 'Category created successfully');
    }

    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $payload = $request->validate([
            'name' => 'required|max:255',
            'color' => 'nullable|string',
            'status' => 'sometimes|boolean',
        ]);

        $payload['slug'] = $this->buildSlug($payload['name'], $category);
        $payload['status'] = $request->boolean('status', true);

        $category->update($payload);

        return redirect()->route('dashboard.category.index')
            ->with('success', 'Category updated successfully');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return back()->with('success', 'Category deleted successfully');
    }

    private function buildSlug(string $name, ?Category $category = null): string
    {
        $slug = Str::slug($name);

        $query = Category::where('slug', $slug);
        if ($category) {
            $query->whereKeyNot($category->getKey());
        }

        if ($query->exists()) {
            $slug = "{$slug}-" . time();
        }

        return $slug;
    }
}
