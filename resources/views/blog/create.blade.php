@extends('layout.main')

@section('content')

<div class="space-y-6">
    <div class="flex flex-col gap-3 md:flex-row md:items-center md:justify-between">
        <div>
            <h2 class="text-2xl font-semibold text-gray-800">Create Blog</h2>
            <p class="text-sm text-gray-500">Publish a new article for services or marketing updates.</p>
        </div>
    </div>

    <form method="POST"
          action="{{ route('dashboard.blog.store') }}"
          enctype="multipart/form-data"
          class="rounded-3xl border border-gray-100 bg-white p-6 shadow-xl shadow-orange-50 space-y-6">
        @csrf

        <div class="grid gap-5 md:grid-cols-2">
            <div>
                <label class="mb-1 block text-xs font-semibold uppercase tracking-widest text-gray-500">Category</label>
                <select name="category_id"
                        class="w-full rounded-2xl border border-gray-200 bg-white px-4 py-3 text-sm text-gray-700 focus:border-orange-400 focus:outline-none">
                    <option value="">Choose category</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}"
                            {{ old('category_id') == $cat->id ? 'selected' : '' }}>
                            {{ $cat->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="mb-1 block text-xs font-semibold uppercase tracking-widest text-gray-500">Title</label>
                <input type="text" name="title"
                       value="{{ old('title') }}"
                       placeholder="Write a compelling heading"
                       class="w-full rounded-2xl border border-gray-200 px-4 py-3 text-sm text-gray-700 focus:border-orange-400 focus:outline-none">
                @error('title')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="grid gap-5 md:grid-cols-2">
            <div class="md:col-span-2">
                <label class="mb-1 block text-xs font-semibold uppercase tracking-widest text-gray-500">Excerpt</label>
                <textarea name="excerpt"
                          rows="3"
                          placeholder="Share a short summary or teaser..."
                          class="w-full rounded-2xl border border-gray-200 px-4 py-3 text-sm text-gray-700 focus:border-orange-400 focus:outline-none">{{ old('excerpt') }}</textarea>
                @error('excerpt')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="grid gap-5 md:grid-cols-2">
            <div class="md:col-span-2">
                <label class="mb-1 block text-xs font-semibold uppercase tracking-widest text-gray-500">Content</label>
                <textarea name="content"
                          rows="6"
                          placeholder="Add the full article body here..."
                          class="w-full rounded-2xl border border-gray-200 px-4 py-3 text-sm text-gray-700 focus:border-orange-400 focus:outline-none">{{ old('content') }}</textarea>
                @error('content')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="grid gap-5 md:grid-cols-3">
            <div>
                <label class="mb-1 block text-xs font-semibold uppercase tracking-widest text-gray-500">Read Time</label>
                <input type="number" name="read_time"
                       value="{{ old('read_time', 3) }}"
                       min="1"
                       class="w-full rounded-2xl border border-gray-200 px-4 py-3 text-sm text-gray-700 focus:border-orange-400 focus:outline-none">
                @error('read_time')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="mb-1 block text-xs font-semibold uppercase tracking-widest text-gray-500">Publish Date</label>
                <input type="date" name="published_at"
                       value="{{ old('published_at') }}"
                       class="w-full rounded-2xl border border-gray-200 px-4 py-3 text-sm text-gray-700 focus:border-orange-400 focus:outline-none">
                @error('published_at')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="mb-1 block text-xs font-semibold uppercase tracking-widest text-gray-500">Thumbnail</label>
                <input type="file" name="thumbnail"
                       accept="image/*"
                       class="w-full rounded-2xl border border-dashed border-gray-200 px-4 py-3 text-sm text-gray-700 focus:border-orange-400 focus:outline-none">
                @error('thumbnail')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="flex flex-wrap gap-6">
            <label class="flex items-center gap-2 text-sm font-medium text-gray-700">
                <input type="checkbox" name="is_featured" {{ old('is_featured') ? 'checked' : '' }} class="h-4 w-4 rounded border-gray-300 text-orange-500 focus:ring-orange-500">
                Featured article
            </label>
            <label class="flex items-center gap-2 text-sm font-medium text-gray-700">
                <input type="checkbox" name="status" {{ old('status', true) ? 'checked' : '' }} class="h-4 w-4 rounded border-gray-300 text-orange-500 focus:ring-orange-500">
                Publish now
            </label>
        </div>

        <div class="flex justify-end">
            <button type="submit"
                    class="rounded-full bg-orange-500 px-6 py-2 text-sm font-semibold uppercase tracking-widest text-white shadow-lg shadow-orange-100 transition hover:bg-orange-600">
                Save Blog
            </button>
        </div>
    </form>
</div>

@endsection
