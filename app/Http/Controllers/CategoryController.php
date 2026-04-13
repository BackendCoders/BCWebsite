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
        //  VALIDATION
        $request->validate([
            'name' => 'required|max:255',
        ]);

        //  UNIQUE SLUG
        $slug = Str::slug($request->name);
        if (Category::where('slug', $slug)->exists()) {
            $slug .= '-' . time();
        }

        Category::create([
            'name' => $request->name,
            'slug' => $slug,
            'color' => $request->color,
            'status' => $request->has('status'),
        ]);

        return redirect()->route('category.index')
            ->with('success', 'Category created successfully');
    }

    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        // VALIDATION
        $request->validate([
            'name' => 'required|max:255',
        ]);

        //  UNIQUE SLUG (ignore current)
        $slug = Str::slug($request->name);
        if (Category::where('slug', $slug)
            ->where('id', '!=', $category->id)
            ->exists()) {
            $slug .= '-' . time();
        }

        $category->update([
            'name' => $request->name,
            'slug' => $slug,
            'color' => $request->color,
            'status' => $request->has('status'),
        ]);

        return redirect()->route('category.index')
            ->with('success', 'Category updated successfully');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return back()->with('success', 'Category deleted successfully');
    }
}