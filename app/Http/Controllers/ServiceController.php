<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest('priority')->latest()->get();

        return view('services.index', compact('services'));
    }

    public function create()
    {
        return view('services.create', [
            'highlightsText' => '',
            'technologiesText' => '',
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validateService($request);
        $data['slug'] = Str::slug($data['title']) . '-' . Str::random(5);
        $data['status'] = (bool) ($data['status'] ?? true);
        $data['highlights'] = $this->linesToArray($request->input('highlights'));
        $data['technologies'] = $this->linesToArray($request->input('technologies'));

        Service::create($data);

        return redirect()->route('services.index')->with('success', 'Service created successfully');
    }

    public function edit(Service $service)
    {
        return view('services.edit', [
            'service' => $service,
            'highlightsText' => $this->arrayToLines($service->highlights ?? []),
            'technologiesText' => $this->arrayToLines($service->technologies ?? []),
        ]);
    }

    public function update(Request $request, Service $service)
    {
        $data = $this->validateService($request);
        $data['slug'] = Str::slug($data['title']) . '-' . Str::random(5);
        $data['status'] = (bool) ($data['status'] ?? true);
        $data['highlights'] = $this->linesToArray($request->input('highlights'));
        $data['technologies'] = $this->linesToArray($request->input('technologies'));

        $service->update($data);

        return redirect()->route('services.index')->with('success', 'Service updated successfully');
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully');
    }

    private function validateService(Request $request): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'icon' => ['nullable', 'string', 'max:255'],
            'icon_image' => ['nullable', 'url', 'max:255'],
            'badge_text' => ['nullable', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string', 'max:255'],
            'summary' => ['nullable', 'string'],
            'details' => ['nullable', 'string'],
            'highlights' => ['nullable', 'string'],
            'technologies' => ['nullable', 'string'],
            'cta_label' => ['nullable', 'string', 'max:255'],
            'cta_url' => ['nullable', 'url', 'max:255'],
            'priority' => ['nullable', 'integer', 'min:1', 'max:100'],
            'status' => ['nullable', 'boolean'],
        ]);
    }

    private function linesToArray(?string $value): array
    {
        return array_values(array_filter(array_map('trim', preg_split("/\r\n|\n|\r/", (string) $value) ?: [])));
    }

    private function arrayToLines(array $values): string
    {
        return implode("\n", $values);
    }
}
