@extends('layout.main')
@section('content')
<div class="relative overflow-hidden">
    <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_top_left,_rgba(253,85,40,0.12),_transparent_25%),radial-gradient(circle_at_top_right,_rgba(14,165,233,0.10),_transparent_22%),linear-gradient(180deg,_rgba(248,250,252,0.95),_white_18%,_rgba(248,250,252,0.98))]"></div>

    <div class="relative mx-auto max-w-4xl px-4 pb-12 pt-28 sm:px-6 lg:px-8">
        <div class="mb-6 overflow-hidden rounded-[2rem] border border-slate-200/70 bg-white/95 p-6 shadow-[0_24px_80px_rgba(15,23,42,0.08)] backdrop-blur-xl">
            <div class="flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
                <div>
                  
            </div>
        </div>

        <div class="overflow-hidden rounded-[2rem] border border-slate-200/70 bg-white/95 shadow-[0_24px_80px_rgba(15,23,42,0.08)] backdrop-blur-xl">
            <div class="border-b border-slate-200/70 bg-gradient-to-r from-[#FD5528]/10 via-white to-sky-50 px-6 py-6 sm:px-8">
                <div class="flex flex-col gap-4 lg:flex-row lg:items-start lg:justify-between">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.35em] text-[#FD5528]">Page settings</p>
                        <h2 class="mt-2 text-2xl font-bold text-slate-900">➕ Create Page</h2>
                        <p class="mt-1 text-sm text-slate-500">
                            Build a new page with SEO fields, live URL preview, and indexing controls.
                        </p>
                    </div>

                    <div class="grid gap-3 sm:grid-cols-3">
                        <div class="rounded-2xl border border-slate-200 bg-white px-4 py-3 shadow-sm">
                            <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Core</p>
                            <p class="mt-1 text-sm font-semibold text-slate-900">Title, slug, type</p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white px-4 py-3 shadow-sm">
                            <p class="text-xs uppercase tracking-[0.3em] text-slate-400">SEO</p>
                            <p class="mt-1 text-sm font-semibold text-slate-900">Meta fields</p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white px-4 py-3 shadow-sm">
                            <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Preview</p>
                            <p class="mt-1 text-sm font-semibold text-slate-900">Google snippet</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-6 sm:p-8">
                <!-- Errors -->
                @if($errors->any())
                    <div class="mb-6 rounded-2xl border border-rose-200 bg-rose-50 px-4 py-4 text-rose-700">
                        <p class="font-semibold">Please fix the following issues:</p>
                        <ul class="mt-2 list-disc space-y-1 pl-5 text-sm">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('pages.store') }}">
                @csrf

                <!-- Basic Info -->
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="rounded-2xl border border-slate-200/70 bg-slate-50 p-4">
                        <label class="block text-sm font-medium">Title</label>
                        <input type="text" name="title" id="title"
                               class="w-full border p-2 rounded mt-1"
                               placeholder="Enter page title">
                    </div>

                    <div class="rounded-2xl border border-slate-200/70 bg-slate-50 p-4">
                        <label class="block text-sm font-medium">Slug</label>
                        <input type="text" name="slug" id="slug"
                               class="w-full border p-2 rounded mt-1"
                               placeholder="auto-generated">
                        <p class="mt-1 text-xs text-gray-500">Used for the live page URL and header link.</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="rounded-2xl border border-slate-200/70 bg-slate-50 p-4">
                        <label class="block text-sm font-medium">Menu Type</label>
                        @php
                            $selectedType = \App\Models\MenuItem::normalizeType(old('type', ''));
                        @endphp
                        <select name="type" class="w-full border p-2 rounded mt-1">
                            <option value="" {{ blank($selectedType) ? 'selected' : '' }}>No Type Selection</option>
                            @foreach(\App\Models\MenuItem::getTypes() as $value => $label)
                                <option value="{{ $value }}" {{ $selectedType === $value ? 'selected' : '' }}>
                                    {{ $label }}
                                </option>
                            @endforeach
                        </select>
                        @error('type')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- SEO Section -->
                <div class="mb-6 overflow-hidden rounded-[1.5rem] border border-slate-200/70 bg-white">
                    <div class="border-b border-slate-200/70 bg-slate-50 px-4 py-4">
                        <h3 class="text-lg font-semibold text-slate-700">🔍 SEO Settings</h3>
                    </div>

                    <div class="space-y-4 p-4">
                        <div>
                            <label class="block text-sm font-medium">Meta Title</label>
                            <input type="text" name="meta_title" id="meta_title"
                                   class="w-full border p-2 rounded mt-1"
                                   placeholder="Max 60 characters">
                        </div>

                        <div>
                            <label class="block text-sm font-medium">Meta Description</label>
                            <textarea name="meta_description" id="meta_description"
                                      class="w-full border p-2 rounded mt-1"
                                      rows="3"
                                      placeholder="Max 160 characters"></textarea>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium">Canonical URL</label>
                                <input type="text" name="canonical_url"
                                       class="w-full border p-2 rounded mt-1"
                                       placeholder="https://example.com/page">
                            </div>

                            <div>
                                <label class="block text-sm font-medium">Keywords</label>
                                <input type="text" name="meta_keywords"
                                       class="w-full border p-2 rounded mt-1"
                                       placeholder="keyword1, keyword2">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium">Indexing</label>
                            <select name="is_index"
                                    class="w-full border p-2 rounded mt-1">
                                <option value="1">Index (Google can show)</option>
                                <option value="0">No Index (Hidden from Google)</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- SEO Preview -->
                <div class="mb-6 overflow-hidden rounded-[1.5rem] border border-slate-200/70 bg-white">
                    <div class="border-b border-slate-200/70 bg-slate-50 px-4 py-4">
                        <h3 class="text-lg font-semibold text-slate-700">📊 Google Preview</h3>
                    </div>

                    <div class="p-4">
                        <p id="preview-title" class="text-blue-600 text-lg font-medium"></p>
                        <p id="preview-url" class="text-green-700 text-sm"></p>
                        <p id="preview-desc" class="text-gray-700 text-sm"></p>
                    </div>
                </div>

                <!-- Submit -->
                <button type="submit"
                        class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
                    💾 Save Page
                </button>

                </form>

            </div>
        </div>
    </div>
</div>

<!-- JS -->
<script>
// Auto slug
document.getElementById('title').addEventListener('input', function(){
    let slug = this.value.toLowerCase()
        .replace(/[^a-z0-9]+/g,'-')
        .replace(/(^-|-$)/g,'');

    document.getElementById('slug').value = slug;
});

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
</script>

@endsection
