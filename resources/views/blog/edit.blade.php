@extends('layout.main')

@section('content')

<div class="space-y-6">
    <div class="flex flex-col gap-3 md:flex-row md:items-center md:justify-between">
        <div>
            <h2 class="text-2xl font-semibold text-gray-800">Edit Blog</h2>
            <p class="text-sm text-gray-500">Update the article content, thumbnail or metadata.</p>
        </div>
        <a href="{{ route('dashboard.blog.index') }}"
           class="text-sm font-semibold text-orange-600 hover:underline">
            ← Back to list
        </a>
    </div>

    <form method="POST"
          action="{{ route('dashboard.blog.update', $blog) }}"
          enctype="multipart/form-data"
          class="rounded-3xl border border-gray-100 bg-white p-6 shadow-xl shadow-orange-50 space-y-6">
        @csrf
        @method('PUT')

        <div class="grid gap-5 md:grid-cols-2">
            <div>
                <label class="mb-1 block text-xs font-semibold uppercase tracking-widest text-gray-500">Category</label>
                <select name="category_id"
                        class="w-full rounded-2xl border border-gray-200 bg-white px-4 py-3 text-sm text-gray-700 focus:border-orange-400 focus:outline-none">
                    <option value="">Choose category</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}"
                            {{ old('category_id', $blog->category_id) == $cat->id ? 'selected' : '' }}>
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
                       value="{{ old('title', $blog->title) }}"
                       placeholder="Update the heading"
                       class="w-full rounded-2xl border border-gray-200 px-4 py-3 text-sm text-gray-700 focus:border-orange-400 focus:outline-none">
                @error('title')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div>
            <label class="mb-1 block text-xs font-semibold uppercase tracking-widest text-gray-500">Excerpt</label>
            <textarea name="excerpt"
                      rows="3"
                      class="w-full rounded-2xl border border-gray-200 px-4 py-3 text-sm text-gray-700 focus:border-orange-400 focus:outline-none">{{ old('excerpt', $blog->excerpt) }}</textarea>
            @error('excerpt')
                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="mb-1 block text-xs font-semibold uppercase tracking-widest text-gray-500">Content</label>
            <textarea name="content"
                      rows="6"
                      class="w-full rounded-2xl border border-gray-200 px-4 py-3 text-sm text-gray-700 focus:border-orange-400 focus:outline-none">{{ old('content', $blog->content) }}</textarea>
            @error('content')
                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="grid gap-5 md:grid-cols-3">
            <div>
                <label class="mb-1 block text-xs font-semibold uppercase tracking-widest text-gray-500">Read Time</label>
                <input type="number" name="read_time"
                       value="{{ old('read_time', $blog->read_time) }}"
                       min="1"
                       class="w-full rounded-2xl border border-gray-200 px-4 py-3 text-sm text-gray-700 focus:border-orange-400 focus:outline-none">
                @error('read_time')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="mb-1 block text-xs font-semibold uppercase tracking-widest text-gray-500">Publish Date</label>
                <input type="date" name="published_at"
                       value="{{ old('published_at', optional($blog->published_at)->format('Y-m-d')) }}"
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
                @if($blog->thumbnail)
                    <p class="mt-3 text-xs text-gray-500">Current file: {{ basename($blog->thumbnail) }}</p>
                @endif
            </div>
        </div>

        <div class="flex flex-wrap gap-6">
            <label class="flex items-center gap-2 text-sm font-medium text-gray-700">
                <input type="checkbox" name="is_featured" {{ old('is_featured', $blog->is_featured) ? 'checked' : '' }} class="h-4 w-4 rounded border-gray-300 text-orange-500 focus:ring-orange-500">
                Mark as featured
            </label>
            <label class="flex items-center gap-2 text-sm font-medium text-gray-700">
                <input type="checkbox" name="status" {{ old('status', $blog->status) ? 'checked' : '' }} class="h-4 w-4 rounded border-gray-300 text-orange-500 focus:ring-orange-500">
                Publish now
            </label>
        </div>

        <div class="flex justify-end gap-3">
            <a href="{{ route('dashboard.blog.index') }}"
               class="rounded-full border border-gray-200 px-5 py-2 text-xs font-semibold uppercase tracking-widest text-gray-600 transition hover:border-orange-400 hover:text-orange-600">
                Cancel
            </a>
            <button type="submit"
                    class="rounded-full bg-orange-500 px-6 py-2 text-sm font-semibold uppercase tracking-widest text-white shadow-lg shadow-orange-100 transition hover:bg-orange-600">
                Update Blog
            </button>
        </div>
    </form>
</div>

@endsection
