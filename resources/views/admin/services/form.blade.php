@extends('admin.layouts.app')

@section('title', $service->exists ? 'Edit Service' : 'New Service')

@section('content')
<div class="space-y-6">

    <div class="rounded-3xl border border-slate-100 bg-white p-6 shadow-sm">
        <header class="mb-4 space-y-1">
            <p class="text-sm text-slate-500">Manage services</p>
            <h1 class="text-2xl font-semibold text-slate-900">{{ $service->exists ? 'Edit service' : 'Add service' }}</h1>
        </header>

        <form method="POST" action="{{ $action }}" class="space-y-5" data-loading>
            @csrf
            @if($service->exists)
                @method('PUT')
            @endif

            <div class="grid gap-4 md:grid-cols-2">
                <label class="space-y-1 text-sm text-slate-500">
                    <span>Title</span>
                    <input type="text" name="title" value="{{ old('title', $service->title) }}" class="w-full rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none" required>
                    @error('title')
                        <p class="text-xs text-rose-600">{{ $message }}</p>
                    @enderror
                </label>

                <label class="space-y-1 text-sm text-slate-500">
                    <span>Category</span>
                    <select name="service_category_id" class="w-full rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none" required>
                        <option value="">Select category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('service_category_id', $service->service_category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </label>
            </div>

            <div class="grid gap-4 md:grid-cols-2">
                <label class="space-y-1 text-sm text-slate-500">
                    <span>Duration</span>
                    <input type="text" name="duration" value="{{ old('duration', $service->duration) }}" class="w-full rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none">
                </label>

                <label class="space-y-1 text-sm text-slate-500">
                    <span>Price ($)</span>
                    <input type="number" name="price" step="0.01" min="0" value="{{ old('price', $service->price) }}" class="w-full rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none">
                </label>
            </div>

            <label class="space-y-1 text-sm text-slate-500">
                <span>Summary</span>
                <input type="text" name="summary" value="{{ old('summary', $service->summary) }}" class="w-full rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none">
            </label>

            <label class="space-y-1 text-sm text-slate-500">
                <span>Details</span>
                <textarea name="details" rows="5" class="w-full rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none">{{ old('details', $service->details) }}</textarea>
            </label>

            <div class="grid gap-4 md:grid-cols-3">
                <label class="space-y-1 text-sm text-slate-500">
                    <span>Priority (1-100)</span>
                    <input type="number" name="priority" min="1" max="100" value="{{ old('priority', $service->priority ?? 50) }}" class="w-full rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none">
                </label>

                <label class="space-y-1 text-sm text-slate-500">
                    <span>Start date</span>
                    <input type="datetime-local" name="starts_at" value="{{ old('starts_at', optional($service->starts_at)->format('Y-m-d\TH:i') ?? '') }}" class="w-full rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none">
                </label>

                <label class="space-y-1 text-sm text-slate-500">
                    <span>End date</span>
                    <input type="datetime-local" name="ends_at" value="{{ old('ends_at', optional($service->ends_at)->format('Y-m-d\TH:i') ?? '') }}" class="w-full rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none">
                </label>
            </div>

            <div class="grid gap-4 md:grid-cols-2">
                <label class="space-y-1 text-sm text-slate-500">
                    <span>Support channel</span>
                    <input type="text" name="metadata[support]" value="{{ old('metadata.support', $service->metadata['support'] ?? '') }}" class="w-full rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none">
                </label>

                <label class="space-y-1 text-sm text-slate-500">
                    <span>Delivery format</span>
                    <input type="text" name="metadata[delivery]" value="{{ old('metadata.delivery', $service->metadata['delivery'] ?? '') }}" class="w-full rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none">
                </label>
            </div>

            <div class="flex items-center gap-6">
                <label class="flex items-center gap-2 text-sm text-slate-500">
                    <input type="checkbox" name="status" value="1" {{ old('status', $service->status ?? true) ? 'checked' : '' }} class="h-4 w-4 text-emerald-600">
                    Active
                </label>
                <label class="flex items-center gap-2 text-sm text-slate-500">
                    <input type="checkbox" name="starts_at_auto" value="1" disabled class="h-4 w-4 text-slate-400" />
                    Scheduling coming soon
                </label>
            </div>

            <div class="flex justify-end gap-2">
                <a href="{{ route('admin.services.index') }}" class="rounded-2xl border border-slate-200 px-4 py-2 text-sm font-semibold text-slate-600 hover:bg-slate-50">Cancel</a>
                <button type="submit" class="rounded-2xl bg-indigo-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-indigo-500">
                    {{ $service->exists ? 'Update service' : 'Create service' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
