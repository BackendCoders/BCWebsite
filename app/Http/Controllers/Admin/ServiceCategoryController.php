<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceCategoryRequest;
use App\Models\ServiceCategory;
use App\Services\SlugGenerator;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    public function index(Request $request)
    {
        $perPage = min(
            $request->integer('per_page', config('admin.pagination.per_page')),
            config('admin.pagination.max_per_page')
        );

        $query = ServiceCategory::query();

        if ($request->filled('trashed')) {
            $trashed = $request->input('trashed');

            if ($trashed === 'only') {
                $query->onlyTrashed();
            } elseif ($trashed === 'with') {
                $query->withTrashed();
            }
        }

        $query->search($request->input('search'));

        $direction = $request->input('direction', 'asc');
        $sort = in_array($request->input('sort'), ['name', 'priority', 'created_at', 'status'], true)
            ? $request->input('sort')
            : 'priority';

        $direction = in_array($direction, ['asc', 'desc'], true) ? $direction : 'asc';

        $query->withCount('services')
            ->orderBy($sort === 'priority' ? 'priority' : $sort, $direction)
            ->orderByDesc('created_at');

        $serviceCategories = $query->paginate($perPage)->withQueryString();

        return view('admin.service-categories.index', [
            'serviceCategories' => $serviceCategories,
            'filters' => $request->only(['search', 'sort', 'direction', 'trashed', 'per_page']),
        ]);
    }

    public function create()
    {
        return view('admin.service-categories.form', [
            'serviceCategory' => new ServiceCategory(),
            'action' => route('admin.service-categories.store'),
            'method' => 'POST',
        ]);
    }

    public function store(ServiceCategoryRequest $request)
    {
        $payload = $request->validated();
        $payload['slug'] = SlugGenerator::unique(ServiceCategory::class, $payload['name']);
        $payload['priority'] = $payload['priority'] ?? 5;

        ServiceCategory::create($payload);

        return redirect()->route('admin.service-categories.index')
            ->with('success', 'Service category created successfully.');
    }

    public function edit(ServiceCategory $serviceCategory)
    {
        return view('admin.service-categories.form', [
            'serviceCategory' => $serviceCategory,
            'action' => route('admin.service-categories.update', $serviceCategory),
            'method' => 'PUT',
        ]);
    }

    public function update(ServiceCategoryRequest $request, ServiceCategory $serviceCategory)
    {
        $payload = $request->validated();
        $payload['slug'] = SlugGenerator::unique(ServiceCategory::class, $payload['name'], $serviceCategory);
        $payload['priority'] = $payload['priority'] ?? 5;

        $serviceCategory->update($payload);

        return redirect()->route('admin.service-categories.index')
            ->with('success', 'Service category updated successfully.');
    }

    public function destroy(ServiceCategory $serviceCategory)
    {
        $serviceCategory->delete();

        return back()->with('success', 'Service category archived.');
    }

    public function restore(int $serviceCategory)
    {
        $category = ServiceCategory::withTrashed()->findOrFail($serviceCategory);
        $category->restore();

        return back()->with('success', 'Service category restored.');
    }

    public function toggleStatus(ServiceCategory $serviceCategory): JsonResponse
    {
        $serviceCategory->update(['status' => ! $serviceCategory->status]);

        return response()->json([
            'status' => $serviceCategory->status,
        ]);
    }
}
