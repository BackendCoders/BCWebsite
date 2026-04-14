@extends('admin.layouts.app')

@section('title', $serviceCategory->exists ? 'Edit Category' : 'New Category')

@section('content')
<div class="space-y-6">

    <div class="rounded-3xl border border-slate-100 bg-white p-6 shadow-sm">
        <header class="mb-4 space-y-1">
            <p class="text-sm text-slate-500">Service categories</p>
            <h1 class="text-2xl font-semibold text-slate-900">{{ $serviceCategory->exists ? 'Edit service category' : 'Add new category' }}</h1>
        </header>

        <form method="POST" action="{{ $action }}" class="space-y-5" data-loading>
            @csrf
            @if($serviceCategory->exists)
                @method('PUT')
            @endif

            <div class="grid gap-4 md:grid-cols-2">
                <label class="space-y-1 text-sm text-slate-500">
                    <span>Name</span>
                    <input type="text" name="name" value="{{ old('name', $serviceCategory->name) }}" class="w-full rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none" required>
                    @error('name')
                        <p class="text-xs text-rose-600">{{ $message }}</p>
                    @enderror
                </label>

                <label class="space-y-1 text-sm text-slate-500">
                    <span>Slug</span>
                    <input type="text" name="slug" value="{{ old('slug', $serviceCategory->slug) }}" class="w-full rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none" readonly>
                </label>
            </div>

            <label class="space-y-1 text-sm text-slate-500">
                <span>Description</span>
                <textarea name="description" rows="3" class="w-full rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none">{{ old('description', $serviceCategory->description) }}</textarea>
                @error('description')
                    <p class="text-xs text-rose-600">{{ $message }}</p>
                @enderror
            </label>

            <div class="grid gap-4 md:grid-cols-2">
                <label class="space-y-1 text-sm text-slate-500">
                    <span>Icon</span>
                    <input type="text" name="icon" value="{{ old('icon', $serviceCategory->icon) }}" class="w-full rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none" placeholder="e.g. uil uil-database">
                </label>

                <label class="space-y-1 text-sm text-slate-500">
                    <span>Cover image URL</span>
                    <input type="url" name="cover_image" value="{{ old('cover_image', $serviceCategory->cover_image) }}" class="w-full rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none">
                </label>
            </div>

            <div class="grid gap-4 md:grid-cols-3">
                <label class="space-y-1 text-sm text-slate-500">
                    <span>Priority (1-10)</span>
                    <input type="number" name="priority" min="1" max="10" value="{{ old('priority', $serviceCategory->priority ?? 5) }}" class="w-full rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none">
                </label>

                <label class="space-y-1 text-sm text-slate-500">
                    <span>Color (CSS value)</span>
                    <input type="text" name="color" value="{{ old('color', $serviceCategory->color) }}" class="w-full rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none" placeholder="#0254eb">
                </label>

                <label class="space-y-1 text-sm text-slate-500">
                    <span class="flex items-center justify-between">
                        <span>Status</span>
                        <span class="text-xs uppercase text-slate-400">Visible</span>
                    </span>
                    <input type="checkbox" name="status" value="1" {{ old('status', $serviceCategory->status ?? true) ? 'checked' : '' }} class="h-4 w-4 text-indigo-600">
                </label>
            </div>

            <div class="flex items-center gap-6">
                <label class="flex items-center gap-2 text-sm text-slate-500">
                    <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $serviceCategory->is_featured) ? 'checked' : '' }} class="h-4 w-4 text-emerald-600">
                    Featured on dashboard
                </label>
                <div class="text-xs text-slate-400">Featured categories get prime placement on the homepage.</div>
            </div>

            <div class="flex justify-end gap-2">
                <a href="{{ route('admin.service-categories.index') }}" class="rounded-2xl border border-slate-200 px-4 py-2 text-sm font-semibold text-slate-600 hover:bg-slate-50">Cancel</a>
                <button type="submit" class="rounded-2xl bg-indigo-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-indigo-500">Save category</button>
            </div>
        </form>
    </div>
</div>
@endsection
