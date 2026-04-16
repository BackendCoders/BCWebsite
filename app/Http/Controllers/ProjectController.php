<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $data = $this->validateProject($request);
        $data['is_featured'] = (bool) ($data['is_featured'] ?? false);
        $data['technologies'] = $this->normalizeTechnologies($request->input('technologies', []));
        $data['image'] = $this->storeImage($request);

        Project::create($data);

        return redirect()->route('projects.index')->with('success', 'Project created successfully');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $this->validateProject($request);
        $data['is_featured'] = (bool) ($data['is_featured'] ?? false);
        $data['technologies'] = $this->normalizeTechnologies($request->input('technologies', []));
        $data['image'] = $this->updateImage($request, $project);

        $project->update($data);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully');
    }

    public function destroy(Project $project)
    {
        $this->deleteImage($project->image);
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully');
    }

    private function validateProject(Request $request): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'client_name' => ['nullable', 'string', 'max:255'],
            'category' => ['nullable', 'string', 'max:255'],
            'status' => ['nullable', 'string', 'max:50'],
            'technologies' => ['nullable', 'array'],
            'technologies.*' => ['nullable', 'string', 'max:255'],
            'live_url' => ['nullable', 'url', 'max:255'],
            'description' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,avif', 'max:4096'],
            'is_featured' => ['nullable', 'boolean'],
            'completed_at' => ['nullable', 'date'],
        ]);
    }

    private function storeImage(Request $request): ?string
    {
        if (! $request->hasFile('image')) {
            return null;
        }

        return $request->file('image')->store('projects', 'public');
    }

    private function updateImage(Request $request, Project $project): ?string
    {
        if ($request->hasFile('image')) {
            $this->deleteImage($project->image);

            return $request->file('image')->store('projects', 'public');
        }

        return $project->image;
    }

    private function deleteImage(?string $path): void
    {
        if ($path && \Illuminate\Support\Facades\Storage::disk('public')->exists($path)) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($path);
        }
    }

    private function normalizeTechnologies(array $technologies): ?string
    {
        $values = array_values(array_filter(array_map(static function ($technology) {
            return trim((string) $technology);
        }, $technologies)));

        return $values ? implode(', ', $values) : null;
    }
}
