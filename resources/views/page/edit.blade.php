@extends('layout.main')
@section('content')

<div class="max-w-4xl mx-auto bg-white p-6 rounded-xl shadow">

    <!-- Header -->
    <h2 class="text-2xl font-bold mb-6 text-gray-800">✏️ Edit Page</h2>

    <!-- Errors -->
    @if($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            <ul>
                @foreach($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('pages.update', $page->id) }}">
        @csrf
        @method('PUT')

        <!-- Basic Info -->
        <div class="grid grid-cols-2 gap-4 mb-6">
            <div>
                <label class="block text-sm font-medium">Title</label>
                <input type="text" name="title" id="title"
                       value="{{ old('title', $page->title) }}"
                       class="w-full border p-2 rounded mt-1">
            </div>

            <div>
                <label class="block text-sm font-medium">Slug</label>
                <input type="text" name="slug" id="slug"
                       value="{{ old('slug', $page->slug) }}"
                       class="w-full border p-2 rounded mt-1">
            </div>
        </div>

        <!-- SEO -->
        <div class="border-t pt-4 mb-6">
            <h3 class="text-lg font-semibold mb-3 text-gray-700">🔍 SEO Settings</h3>

            <div class="mb-4">
                <label class="block text-sm font-medium">Meta Title</label>
                <input type="text" name="meta_title" id="meta_title"
                       value="{{ old('meta_title', $page->meta_title) }}"
                       class="w-full border p-2 rounded mt-1">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Meta Description</label>
                <textarea name="meta_description" id="meta_description"
                          class="w-full border p-2 rounded mt-1"
                          rows="3">{{ old('meta_description', $page->meta_description) }}</textarea>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium">Canonical URL</label>
                    <input type="text" name="canonical_url"
                           value="{{ old('canonical_url', $page->canonical_url) }}"
                           class="w-full border p-2 rounded mt-1">
                </div>

                <div>
                    <label class="block text-sm font-medium">Keywords</label>
                    <input type="text" name="meta_keywords"
                           value="{{ old('meta_keywords', $page->meta_keywords) }}"
                           class="w-full border p-2 rounded mt-1">
                </div>
            </div>

            <div class="mt-4">
                <label class="block text-sm font-medium">Indexing</label>
                <select name="is_index" class="w-full border p-2 rounded mt-1">
                    <option value="1" {{ $page->is_index ? 'selected' : '' }}>Index</option>
                    <option value="0" {{ !$page->is_index ? 'selected' : '' }}>No Index</option>
                </select>
            </div>
        </div>

        <!-- SEO Preview -->
        <div class="border-t pt-4 mb-6">
            <h3 class="text-lg font-semibold mb-2 text-gray-700">📊 Google Preview</h3>

            <div class="bg-gray-50 p-4 rounded border">
                <p id="preview-title" class="text-blue-600 text-lg font-medium"></p>
                <p id="preview-url" class="text-green-700 text-sm"></p>
                <p id="preview-desc" class="text-gray-700 text-sm"></p>
            </div>
        </div>

        <!-- Submit -->
        <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
            💾 Update Page
        </button>

    </form>

</div>

<script>
// SEO Preview
function updatePreview(){
    document.getElementById('preview-title').innerText =
        document.getElementById('meta_title').value;

    document.getElementById('preview-url').innerText =
        window.location.origin + '/' + document.getElementById('slug').value;

    document.getElementById('preview-desc').innerText =
        document.getElementById('meta_description').value;
}

document.getElementById('meta_title').addEventListener('input', updatePreview);
document.getElementById('meta_description').addEventListener('input', updatePreview);
document.getElementById('slug').addEventListener('input', updatePreview);

// Load preview initially
updatePreview();
</script>

@endsection