<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceCategoryController extends Controller
{
    public function index()
    {
        $serviceCategories = ServiceCategory::orderBy('priority')
            ->orderByDesc('created_at')
            ->get();

        return view('service-categories.index', compact('serviceCategories'));
    }

    public function create()
    {
        return view('service-categories.create');
    }

    public function store(Request $request)
    {
        $payload = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|string|max:100',
            'cover_image' => 'nullable|url',
            'color' => 'nullable|string|max:50',
            'priority' => 'nullable|integer|min:1|max:10',
            'is_featured' => 'sometimes|boolean',
            'status' => 'sometimes|boolean',
        ]);

        $payload['slug'] = $this->buildSlug($payload['name']);
        $payload['status'] = $request->boolean('status', true);
        $payload['is_featured'] = $request->boolean('is_featured');
        $payload['priority'] = $payload['priority'] ?? 5;

        ServiceCategory::create($payload);

        return redirect()->route('dashboard.service-categories.index')
            ->with('success', 'Service category added.');
    }

    public function edit(ServiceCategory $serviceCategory)
    {
        return view('service-categories.edit', compact('serviceCategory'));
    }

    public function update(Request $request, ServiceCategory $serviceCategory)
    {
        $payload = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|string|max:100',
            'cover_image' => 'nullable|url',
            'color' => 'nullable|string|max:50',
            'priority' => 'nullable|integer|min:1|max:10',
            'is_featured' => 'sometimes|boolean',
            'status' => 'sometimes|boolean',
        ]);

        $payload['slug'] = $this->buildSlug($payload['name'], $serviceCategory);
        $payload['status'] = $request->boolean('status', true);
        $payload['is_featured'] = $request->boolean('is_featured');
        $payload['priority'] = $payload['priority'] ?? 5;

        $serviceCategory->update($payload);

        return redirect()->route('dashboard.service-categories.index')
            ->with('success', 'Service category updated.');
    }

    public function destroy(ServiceCategory $serviceCategory)
    {
        $serviceCategory->delete();

        return back()->with('success', 'Service category removed.');
    }

    private function buildSlug(string $name, ServiceCategory $except = null): string
    {
        $slug = Str::slug($name);

        $query = ServiceCategory::where('slug', $slug);
        if ($except) {
            $query->whereKeyNot($except->getKey());
        }

        if ($query->exists()) {
            $slug = "{$slug}-" . time();
        }

        return $slug;
    }
}
