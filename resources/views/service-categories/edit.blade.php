@extends('layout.main')

@section('content')

<div class="space-y-6">
    <div class="flex flex-col gap-3 md:flex-row md:items-center md:justify-between">
        <div>
            <h2 class="text-2xl font-semibold text-gray-800">Edit Service Category</h2>
            <p class="text-sm text-gray-500">Keep the service taxonomy aligned with the latest offerings.</p>
        </div>
        <a href="{{ route('dashboard.service-categories.index') }}"
           class="text-sm font-semibold text-orange-600 hover:underline">
            ← Back to list
        </a>
    </div>

    <form method="POST"
          action="{{ route('dashboard.service-categories.update', $serviceCategory) }}"
          class="rounded-3xl border border-gray-100 bg-white p-6 shadow-xl shadow-orange-50 space-y-5">
        @csrf
        @method('PUT')

        <div>
            <label class="mb-1 block text-xs font-semibold uppercase tracking-widest text-gray-500">Name</label>
            <input type="text" name="name"
                   value="{{ old('name', $serviceCategory->name) }}"
                   class="w-full rounded-2xl border border-gray-200 px-4 py-3 text-sm text-gray-700 focus:border-orange-400 focus:outline-none">
            @error('name')
                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="mb-1 block text-xs font-semibold uppercase tracking-widest text-gray-500">Description</label>
            <textarea name="description"
                      rows="3"
                      class="w-full rounded-2xl border border-gray-200 px-4 py-3 text-sm text-gray-700 focus:border-orange-400 focus:outline-none">{{ old('description', $serviceCategory->description) }}</textarea>
            @error('description')
                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="grid gap-5 md:grid-cols-2">
            <div>
                <label class="mb-1 block text-xs font-semibold uppercase tracking-widest text-gray-500">Icon or Emoji</label>
                <input type="text" name="icon"
                       value="{{ old('icon', $serviceCategory->icon) }}"
                       class="w-full rounded-2xl border border-gray-200 px-4 py-3 text-sm text-gray-700 focus:border-orange-400 focus:outline-none">
                @error('icon')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="mb-1 block text-xs font-semibold uppercase tracking-widest text-gray-500">Cover Image URL</label>
                <input type="url" name="cover_image"
                       value="{{ old('cover_image', $serviceCategory->cover_image) }}"
                       class="w-full rounded-2xl border border-gray-200 px-4 py-3 text-sm text-gray-700 focus:border-orange-400 focus:outline-none">
                @error('cover_image')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="grid gap-5 md:grid-cols-3">
            <div>
                <label class="mb-1 block text-xs font-semibold uppercase tracking-widest text-gray-500">Color</label>
                <select name="color"
                        class="w-full rounded-2xl border border-gray-200 bg-white px-4 py-3 text-sm text-gray-700 focus:border-orange-400 focus:outline-none">
                    @foreach(['orange', 'blue', 'green', 'purple', 'slate'] as $color)
                        <option value="{{ $color }}" {{ old('color', $serviceCategory->color) === $color ? 'selected' : '' }}>
                            {{ ucfirst($color) }}
                        </option>
                    @endforeach
                </select>
                @error('color')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="mb-1 block text-xs font-semibold uppercase tracking-widest text-gray-500">Priority</label>
                <input type="number" name="priority"
                       min="1"
                       max="10"
                       value="{{ old('priority', $serviceCategory->priority) }}"
                       class="w-full rounded-2xl border border-gray-200 px-4 py-3 text-sm text-gray-700 focus:border-orange-400 focus:outline-none">
                @error('priority')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col justify-end">
                <label class="flex items-center gap-2 text-sm font-medium text-gray-700">
                    <input type="checkbox" name="is_featured" {{ old('is_featured', $serviceCategory->is_featured) ? 'checked' : '' }} class="h-4 w-4 rounded border-gray-300 text-orange-500 focus:ring-orange-500">
                    Highlight on landing
                </label>
                <label class="mt-2 flex items-center gap-2 text-sm font-medium text-gray-700">
                    <input type="checkbox" name="status" {{ old('status', $serviceCategory->status) ? 'checked' : '' }} class="h-4 w-4 rounded border-gray-300 text-orange-500 focus:ring-orange-500">
                    Mark as active
                </label>
            </div>
        </div>

        <div class="flex justify-end gap-3">
            <a href="{{ route('dashboard.service-categories.index') }}"
               class="rounded-full border border-gray-200 px-5 py-2 text-xs font-semibold uppercase tracking-widest text-gray-600 transition hover:border-orange-400 hover:text-orange-600">
                Cancel
            </a>
            <button type="submit"
                    class="rounded-full bg-orange-500 px-6 py-2 text-sm font-semibold uppercase tracking-widest text-white shadow-lg shadow-orange-100 transition hover:bg-orange-600">
                Update Category
            </button>
        </div>
    </form>
</div>

@endsection
