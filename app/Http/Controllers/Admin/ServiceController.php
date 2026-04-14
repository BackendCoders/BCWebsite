<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceRequest;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Services\SlugGenerator;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $perPage = min(
            $request->integer('per_page', config('admin.pagination.per_page')),
            config('admin.pagination.max_per_page')
        );

        $query = Service::with('category');

        if ($request->filled('trashed')) {
            $trashed = $request->input('trashed');

            if ($trashed === 'only') {
                $query->onlyTrashed();
            } elseif ($trashed === 'with') {
                $query->withTrashed();
            }
        }

        if ($request->filled('status')) {
            $query->where('status', $request->boolean('status'));
        }

        if ($request->filled('category')) {
            $query->where('service_category_id', $request->input('category'));
        }

        $query->search($request->input('search'));

        $sort = in_array($request->input('sort'), ['title', 'price', 'priority', 'created_at'], true)
            ? $request->input('sort')
            : 'priority';

        $direction = in_array($request->input('direction'), ['asc', 'desc'], true)
            ? $request->input('direction')
            : 'desc';

        $query->orderBy($sort, $direction)
            ->orderByDesc('updated_at');

        $services = $query->paginate($perPage)->withQueryString();

        return view('admin.services.index', [
            'services' => $services,
            'filters' => $request->only(['search', 'sort', 'direction', 'category', 'status', 'trashed', 'per_page']),
            'categories' => ServiceCategory::orderBy('name')->get(),
        ]);
    }

    public function create()
    {
        return view('admin.services.form', [
            'service' => new Service(),
            'categories' => ServiceCategory::orderBy('name')->get(),
            'action' => route('admin.services.store'),
            'method' => 'POST',
        ]);
    }

    public function store(ServiceRequest $request)
    {
        $payload = $request->validated();
        $payload['slug'] = SlugGenerator::unique(Service::class, $payload['title']);
        $payload['priority'] = $payload['priority'] ?? 50;
        $payload['metadata'] = $payload['metadata'] ?? [];

        Service::create($payload);

        return redirect()->route('admin.services.index')
            ->with('success', 'Service created successfully.');
    }

    public function edit(Service $service)
    {
        return view('admin.services.form', [
            'service' => $service,
            'categories' => ServiceCategory::orderBy('name')->get(),
            'action' => route('admin.services.update', $service),
            'method' => 'PUT',
        ]);
    }

    public function update(ServiceRequest $request, Service $service)
    {
        $payload = $request->validated();
        $payload['slug'] = SlugGenerator::unique(Service::class, $payload['title'], $service);
        $payload['priority'] = $payload['priority'] ?? 50;
        $payload['metadata'] = $payload['metadata'] ?? [];

        $service->update($payload);

        return redirect()->route('admin.services.index')
            ->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return back()->with('success', 'Service archived.');
    }

    public function restore(int $service)
    {
        $model = Service::withTrashed()->findOrFail($service);
        $model->restore();

        return back()->with('success', 'Service restored.');
    }
}
