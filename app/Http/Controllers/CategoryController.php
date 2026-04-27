<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //  1. List all categories
    public function index()
    {
        $categories = Category::latest()->get();
        return view('categories.index', compact('categories'));
    }

    //  2. Show create form
    public function create()
    {
        return view('categories.create');
    }

    //  3. Store data
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'nullable|max:255|unique:categories,slug',
            'description' => 'nullable'
        ]);

        $validated['slug'] = !empty($validated['slug'])
            ? $validated['slug']
            : Category::uniqueSlug($validated['name']);

        Category::create($validated);

        return redirect()->route('categories.index')
                         ->with('success', 'Category created successfully');
    }
    
    // show categories
        public function show($id)
        {
            $category = \App\Models\Category::findOrFail($id);

            return view('categories.show', compact('category'));
        }

    //  4. Show edit form
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    //  5. Update data
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'nullable|max:255|unique:categories,slug,' . $category->id,
            'description' => 'nullable'
        ]);

        $validated['slug'] = !empty($validated['slug'])
            ? $validated['slug']
            : Category::uniqueSlug($validated['name'], $category->id);

        $category->update($validated);

        return redirect()->route('categories.index')
                         ->with('success', 'Category updated successfully');
    }



    //  6. Delete category
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')
                         ->with('success', 'Category deleted successfully');
    }
}
