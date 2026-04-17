@extends('layout.main')

@section('content')
<div class="mx-auto max-w-4xl space-y-6">
    <div>
        <h2 class="text-3xl font-bold text-slate-900">Edit detail</h2>
        <p class="mt-1 text-sm text-slate-500">Update the detail post details.</p>
    </div>

    <div class="rounded-[2rem] border border-slate-200/70 bg-white/80 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
        <form action="{{ route('details.update', $detail) }}" method="POST" enctype="multipart/form-data" class="grid gap-5">
            @csrf
            @method('PUT')

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Title</label>
                    <input type="text" name="title" value="{{ old('title', $detail->title) }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                    @error('title')<p class="mt-2 text-sm text-rose-500">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Category</label>
                    <select name="category_id" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                        <option value="">Select category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" @selected(old('category_id', $detail->category_id) == $category->id)>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Detail image</label>
                    <input type="file" name="image" accept="image/*" class="w-full rounded-2xl border border-dashed border-slate-300 bg-white px-4 py-3 text-sm text-slate-600 outline-none transition file:mr-4 file:rounded-xl file:border-0 file:bg-[#FD5528] file:px-4 file:py-2 file:text-sm file:font-semibold file:text-white focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                    @if($detail->image)
                        <div class="mt-3 overflow-hidden rounded-2xl border border-slate-200">
                            <img src="{{ asset('storage/' . $detail->image) }}" alt="{{ $detail->title }}" class="h-44 w-full object-cover">
                        </div>
                    @endif
                    @error('image')<p class="mt-2 text-sm text-rose-500">{{ $message }}</p>@enderror
                </div>

                <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3">
                    <input id="is_published" type="checkbox" name="is_published" value="1" class="h-5 w-5 rounded border-slate-300 text-[#FD5528] focus:ring-[#FD5528]" @checked(old('is_published', $detail->is_published))>
                    <label for="is_published" class="text-sm font-medium text-slate-700">Publish immediately</label>
                </div>
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Excerpt</label>
                <textarea name="excerpt" rows="3" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">{{ old('excerpt', $detail->excerpt) }}</textarea>
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Content</label>
                <textarea name="content" rows="8" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">{{ old('content', $detail->content) }}</textarea>
            </div>

            <div class="flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
                <a href="{{ route('details.index') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">
                    Cancel
                </a>
                <button type="submit" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20]">
                    Update Detail
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
