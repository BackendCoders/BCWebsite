@extends('layout.main')

@section('content')
<div class="space-y-6 mt-32 relative overflow-hidden max-w-4xl mx-auto">
    <div class="pointer-events-none absolute inset-x-0 top-0 -z-10 h-56 bg-gradient-to-b from-[#FD5528]/10 via-transparent to-transparent blur-3xl"></div>

    <div class="flex items-center justify-between">
        <div>
            <a href="{{ route('office-images.index') }}" class="text-xs font-semibold text-slate-500 hover:text-slate-800">&larr; Back to Office Gallery</a>
            <h2 class="mt-2 text-2xl font-bold tracking-tight text-slate-900">Upload Office Photos</h2>
            <p class="text-xs text-slate-500">Add genuine workplace, workstation, team, and facility photographs to the public showcase.</p>
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

    <form action="{{ route('office-images.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 rounded-[2rem] border border-slate-200/70 bg-white/90 p-8 shadow-xl backdrop-blur-xl">
        @csrf

        <div class="grid gap-6 md:grid-cols-2">
            <div>
                <label for="category" class="block text-xs font-bold uppercase tracking-wider text-slate-700">Category *</label>
                <select name="category" id="category" required class="mt-2 block w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-sm text-slate-900 shadow-sm focus:border-[#FD5528] focus:ring-[#FD5528]">
                    @foreach($categories as $cat)
                        <option value="{{ $cat }}" {{ old('category') === $cat ? 'selected' : '' }}>{{ $cat }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="order" class="block text-xs font-bold uppercase tracking-wider text-slate-700">Display Order</label>
                <input type="number" name="order" id="order" value="{{ old('order', 0) }}" class="mt-2 block w-full rounded-xl border border-slate-300 px-3.5 py-2.5 text-sm text-slate-900 shadow-sm focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="0">
            </div>
        </div>

        <div>
            <label for="title" class="block text-xs font-bold uppercase tracking-wider text-slate-700">Photo Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" class="mt-2 block w-full rounded-xl border border-slate-300 px-3.5 py-2.5 text-sm text-slate-900 shadow-sm focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="e.g. Engineering Workstation & Dual Display Setup">
        </div>

        <div>
            <label for="caption" class="block text-xs font-bold uppercase tracking-wider text-slate-700">Detailed Caption / Story</label>
            <textarea name="caption" id="caption" rows="3" class="mt-2 block w-full rounded-xl border border-slate-300 px-3.5 py-2.5 text-sm text-slate-900 shadow-sm focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="Describe the workspace, activity, or team collaboration happening in this photo...">{{ old('caption') }}</textarea>
        </div>

        <div>
            <label for="alt_text" class="block text-xs font-bold uppercase tracking-wider text-slate-700">SEO Alt Text</label>
            <input type="text" name="alt_text" id="alt_text" value="{{ old('alt_text') }}" class="mt-2 block w-full rounded-xl border border-slate-300 px-3.5 py-2.5 text-sm text-slate-900 shadow-sm focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="Descriptive alt text for Google Image search and accessibility">
        </div>

        <!-- File Upload Section -->
        <div class="rounded-2xl border-2 border-dashed border-slate-300 bg-slate-50/50 p-6 text-center">
            <svg class="mx-auto h-12 w-12 text-slate-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <div class="mt-3 flex justify-center text-sm text-slate-600">
                <label for="image_file" class="relative cursor-pointer rounded-md font-semibold text-[#FD5528] hover:underline focus-within:outline-none">
                    <span>Upload multiple images</span>
                    <input id="image_file" name="images[]" type="file" multiple accept="image/jpeg,image/png,image/webp" class="sr-only">
                </label>
                <p class="pl-1">or drag and drop</p>
            </div>
            <p class="text-xs text-slate-500 mt-1">WebP, PNG, JPG up to 8MB each</p>
        </div>

        <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
            <label for="manual_path" class="block text-xs font-semibold text-slate-700">Or use an existing asset path (optional)</label>
            <input type="text" name="manual_path" id="manual_path" value="{{ old('manual_path') }}" class="mt-1 block w-full rounded-lg border border-slate-300 px-3 py-1.5 text-xs text-slate-900" placeholder="assets/images/office.jpg">
        </div>

        <div class="flex items-center gap-6 pt-2">
            <label class="inline-flex items-center gap-2 cursor-pointer">
                <input type="checkbox" name="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }} class="h-4 w-4 rounded text-[#FD5528] focus:ring-[#FD5528]">
                <span class="text-xs font-medium text-slate-700">Pin as Featured Photo</span>
            </label>

            <label class="inline-flex items-center gap-2 cursor-pointer">
                <input type="checkbox" name="is_published" value="1" {{ old('is_published', '1') ? 'checked' : '' }} class="h-4 w-4 rounded text-[#FD5528] focus:ring-[#FD5528]">
                <span class="text-xs font-medium text-slate-700">Publish immediately</span>
            </label>
        </div>

        <div class="flex justify-end gap-3 pt-4 border-t border-slate-100">
            <a href="{{ route('office-images.index') }}" class="rounded-xl border border-slate-300 bg-white px-4 py-2 text-xs font-semibold text-slate-700 shadow-sm hover:bg-slate-50">Cancel</a>
            <button type="submit" class="rounded-xl bg-[#FD5528] px-6 py-2.5 text-xs font-semibold text-white shadow-lg shadow-[#FD5528]/25 hover:bg-[#e94c20]">Save & Upload</button>
        </div>
    </form>
</div>
@endsection

