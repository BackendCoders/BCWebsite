@extends('layout.main')

@section('content')
<div class="space-y-6 mt-32 relative overflow-hidden max-w-4xl mx-auto">
    <div class="pointer-events-none absolute inset-x-0 top-0 -z-10 h-56 bg-gradient-to-b from-[#FD5528]/10 via-transparent to-transparent blur-3xl"></div>

    <div class="flex items-center justify-between">
        <div>
            <a href="{{ route('office-images.index') }}" class="text-xs font-semibold text-slate-500 hover:text-slate-800">&larr; Back to Office Gallery</a>
            <h2 class="mt-2 text-2xl font-bold tracking-tight text-slate-900">Edit Office Photo</h2>
            <p class="text-xs text-slate-500">Update metadata, category, ALT text, or replace the photo asset.</p>
        </div>
    </div>

    @if($errors->any())
        <div class="rounded-2xl border border-rose-200 bg-rose-50 p-4 text-rose-700 text-sm">
            <ul class="list-disc pl-5 space-y-1">
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('office-images.update', $officeImage) }}" method="POST" enctype="multipart/form-data" class="space-y-6 rounded-[2rem] border border-slate-200/70 bg-white/90 p-8 shadow-xl backdrop-blur-xl">
        @csrf
        @method('PUT')

        <!-- Current Image Preview -->
        <div class="flex flex-col sm:flex-row items-center gap-6 p-4 rounded-2xl bg-slate-50 border border-slate-200">
            <img src="{{ $officeImage->image_url }}" alt="{{ $officeImage->alt_text }}" class="h-32 w-48 object-cover rounded-xl shadow-md">
            <div class="space-y-1 text-xs text-slate-600">
                <p><strong>Path:</strong> {{ $officeImage->image_path }}</p>
                <p><strong>Status:</strong> {{ $officeImage->is_published ? 'Published' : 'Draft' }}</p>
                <p><strong>Category:</strong> {{ $officeImage->category }}</p>
            </div>
        </div>

        <div class="grid gap-6 md:grid-cols-2">
            <div>
                <label for="category" class="block text-xs font-bold uppercase tracking-wider text-slate-700">Category *</label>
                <select name="category" id="category" required class="mt-2 block w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-sm text-slate-900 shadow-sm focus:border-[#FD5528] focus:ring-[#FD5528]">
                    @foreach($categories as $cat)
                        <option value="{{ $cat }}" {{ old('category', $officeImage->category) === $cat ? 'selected' : '' }}>{{ $cat }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="order" class="block text-xs font-bold uppercase tracking-wider text-slate-700">Display Order</label>
                <input type="number" name="order" id="order" value="{{ old('order', $officeImage->order) }}" class="mt-2 block w-full rounded-xl border border-slate-300 px-3.5 py-2.5 text-sm text-slate-900 shadow-sm focus:border-[#FD5528] focus:ring-[#FD5528]">
            </div>
        </div>

        <div>
            <label for="title" class="block text-xs font-bold uppercase tracking-wider text-slate-700">Photo Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $officeImage->title) }}" class="mt-2 block w-full rounded-xl border border-slate-300 px-3.5 py-2.5 text-sm text-slate-900 shadow-sm focus:border-[#FD5528] focus:ring-[#FD5528]">
        </div>

        <div>
            <label for="caption" class="block text-xs font-bold uppercase tracking-wider text-slate-700">Detailed Caption / Story</label>
            <textarea name="caption" id="caption" rows="3" class="mt-2 block w-full rounded-xl border border-slate-300 px-3.5 py-2.5 text-sm text-slate-900 shadow-sm focus:border-[#FD5528] focus:ring-[#FD5528]">{{ old('caption', $officeImage->caption) }}</textarea>
        </div>

        <div>
            <label for="alt_text" class="block text-xs font-bold uppercase tracking-wider text-slate-700">SEO Alt Text</label>
            <input type="text" name="alt_text" id="alt_text" value="{{ old('alt_text', $officeImage->alt_text) }}" class="mt-2 block w-full rounded-xl border border-slate-300 px-3.5 py-2.5 text-sm text-slate-900 shadow-sm focus:border-[#FD5528] focus:ring-[#FD5528]">
        </div>

        <!-- Replace Image -->
        <div>
            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700">Replace Image (Optional)</label>
            <input type="file" name="image" accept="image/jpeg,image/png,image/webp" class="mt-2 block w-full text-xs text-slate-600 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-[#FD5528]/10 file:text-[#FD5528] hover:file:bg-[#FD5528]/20">
        </div>

        <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
            <label for="manual_path" class="block text-xs font-semibold text-slate-700">Or update path manually (optional)</label>
            <input type="text" name="manual_path" id="manual_path" value="{{ old('manual_path', $officeImage->image_path) }}" class="mt-1 block w-full rounded-lg border border-slate-300 px-3 py-1.5 text-xs text-slate-900">
        </div>

        <div class="flex items-center gap-6 pt-2">
            <label class="inline-flex items-center gap-2 cursor-pointer">
                <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $officeImage->is_featured) ? 'checked' : '' }} class="h-4 w-4 rounded text-[#FD5528] focus:ring-[#FD5528]">
                <span class="text-xs font-medium text-slate-700">Pin as Featured Photo</span>
            </label>

            <label class="inline-flex items-center gap-2 cursor-pointer">
                <input type="checkbox" name="is_published" value="1" {{ old('is_published', $officeImage->is_published) ? 'checked' : '' }} class="h-4 w-4 rounded text-[#FD5528] focus:ring-[#FD5528]">
                <span class="text-xs font-medium text-slate-700">Published</span>
            </label>
        </div>

        <div class="flex justify-end gap-3 pt-4 border-t border-slate-100">
            <a href="{{ route('office-images.index') }}" class="rounded-xl border border-slate-300 bg-white px-4 py-2 text-xs font-semibold text-slate-700 shadow-sm hover:bg-slate-50">Cancel</a>
            <button type="submit" class="rounded-xl bg-[#FD5528] px-6 py-2.5 text-xs font-semibold text-white shadow-lg shadow-[#FD5528]/25 hover:bg-[#e94c20]">Update Photo</button>
        </div>
    </form>
</div>
@endsection

