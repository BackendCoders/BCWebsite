@extends('layout.main')

@section('content')
<div class="relative mx-auto mt-32 max-w-5xl space-y-6 overflow-hidden">
    <div class="pointer-events-none absolute inset-x-0 top-0 -z-10 h-56 bg-gradient-to-b from-[#FD5528]/10 via-transparent to-transparent blur-3xl"></div>
    <div class="pointer-events-none absolute -left-24 top-20 -z-10 h-64 w-64 rounded-full bg-orange-400/10 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-24 top-28 -z-10 h-56 w-56 rounded-full bg-[#FD5528]/10 blur-3xl"></div>

    <div class="flex flex-col gap-4 rounded-[2.25rem] border border-slate-200/70 bg-white/75 p-6 shadow-2xl shadow-slate-200/40 backdrop-blur-xl lg:flex-row lg:items-center lg:justify-between">
        <div class="space-y-2">
            <span class="inline-flex items-center rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-[#FD5528]">Content Hub</span>
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-slate-900">Edit blog</h2>
                <p class="mt-1 max-w-2xl text-sm text-slate-500">Update the blog post details with a polished orange-white admin layout.</p>
            </div>
        </div>

        <div class="grid gap-3 sm:grid-cols-3">
            <div class="rounded-2xl border border-slate-200/70 bg-white px-4 py-3 shadow-sm">
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-slate-400">Step 1</p>
                <p class="mt-1 text-sm font-semibold text-slate-700">Basics</p>
            </div>
            <div class="rounded-2xl border border-slate-200/70 bg-white px-4 py-3 shadow-sm">
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-slate-400">Step 2</p>
                <p class="mt-1 text-sm font-semibold text-slate-700">Content</p>
            </div>
            <div class="rounded-2xl border border-slate-200/70 bg-white px-4 py-3 shadow-sm">
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-slate-400">Step 3</p>
                <p class="mt-1 text-sm font-semibold text-slate-700">Save</p>
            </div>
        </div>
    </div>

    <div class="grid gap-6 lg:grid-cols-1 p-4">
        <div class="rounded-[2rem] border border-slate-200/70 bg-white/85 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
            <form action="{{ route('blogs.update', $blog) }}" method="POST" enctype="multipart/form-data" class="grid gap-5 pb-24" data-blog-form>
                @csrf
                @method('PUT')

                <div class="grid gap-5 md:grid-cols-2">
                    <div class="space-y-2">
                        <label class="mb-2 block text-sm font-medium text-slate-700">Title</label>
                        <input type="text" name="title" value="{{ old('title', $blog->title) }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                        @error('title')<p class="mt-2 text-sm text-rose-500">{{ $message }}</p>@enderror
                    </div>

                    <div class="space-y-2">
                        <label class="mb-2 block text-sm font-medium text-slate-700">Category</label>
                        <select name="category_id" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                            <option value="">Select category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" @selected(old('category_id', $blog->category_id) == $category->id)>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="grid gap-5 md:grid-cols-2">
                    <div class="space-y-2">
                        <label class="mb-2 block text-sm font-medium text-slate-700">Blog image</label>
                        <input type="file" name="image" accept="image/*" class="w-full rounded-2xl border border-dashed border-slate-300 bg-white px-4 py-3 text-sm text-slate-600 shadow-sm outline-none transition file:mr-4 file:rounded-xl file:border-0 file:bg-[#FD5528] file:px-4 file:py-2 file:text-sm file:font-semibold file:text-white focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                        @if($blog->image)
                            <div class="mt-3 overflow-hidden rounded-2xl border border-slate-200 shadow-sm">
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="h-44 w-full object-cover">
                            </div>
                        @endif
                        @error('image')<p class="mt-2 text-sm text-rose-500">{{ $message }}</p>@enderror
                    </div>

                    <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 shadow-sm">
                        <input id="is_published" type="checkbox" name="is_published" value="1" class="h-5 w-5 rounded border-slate-300 text-[#FD5528] focus:ring-[#FD5528]" @checked(old('is_published', $blog->is_published))>
                        <label for="is_published" class="text-sm font-medium text-slate-700">Publish immediately</label>
                    </div>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Excerpt</label>
                    <textarea name="excerpt" rows="3" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">{{ old('excerpt', $blog->excerpt) }}</textarea>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Content</label>
                    <div data-blog-editor class="w-full rounded-2xl border border-slate-200 bg-white shadow-sm"></div>
                    <input type="hidden" name="content" data-blog-content value="{{ old('content', $blog->content) }}">
                </div>

                <div class="sticky bottom-0 z-10 flex flex-col-reverse gap-3 border-t border-slate-200 bg-white/95 py-4 backdrop-blur sm:flex-row sm:justify-end">
                    <a href="{{ route('blogs.index') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 shadow-sm transition hover:border-[#FD5528] hover:text-[#FD5528]">
                        Cancel
                    </a>
                    <button type="submit" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20] hover:shadow-xl hover:shadow-[#FD5528]/30 active:scale-[0.98]">
                        Update Blog
                    </button>
                </div>
            </form>
        </div>

       
    </div>
</div>
@endsection
