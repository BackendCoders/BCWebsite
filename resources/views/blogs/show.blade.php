@extends('layout.main')

@section('content')
@php
    $publishedAt = $blog->published_at ?? $blog->created_at;
@endphp

<div class="space-y-6">
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <p class="text-sm font-semibold uppercase tracking-[0.35em] text-slate-400">Blog detail</p>
            <h2 class="mt-2 text-3xl font-bold text-slate-900">{{ $blog->title }}</h2>
            <p class="mt-1 text-sm text-slate-500">A live preview of the blog post stored in the database.</p>
        </div>

        <div class="flex flex-wrap gap-2">
            <a href="{{ route('frontend.blog-detail', $blog->slug) }}" target="_blank" class="inline-flex items-center justify-center rounded-2xl bg-emerald-500 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-emerald-500/20 transition hover:bg-emerald-600">
                Open public page
            </a>
            <a href="{{ route('blogs.edit', $blog) }}" class="inline-flex items-center justify-center rounded-2xl bg-sky-500 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-sky-500/20 transition hover:bg-sky-600">
                Edit
            </a>
            <a href="{{ route('blogs.index') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">
                Back
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-emerald-700">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid gap-6 lg:grid-cols-[minmax(0,1.7fr)_minmax(280px,0.9fr)]">
        <article class="overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-xl">
            <div class="relative aspect-[16/9] w-full">
                <img
                    src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('assets/images/banner.png') }}"
                    alt="{{ $blog->title }}"
                    class="h-full w-full object-cover"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
                <div class="absolute bottom-5 left-5 flex flex-wrap gap-2">
                    <span class="rounded-full bg-[#FD5528] px-4 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-white">
                        {{ $blog->category?->name ?? 'Uncategorized' }}
                    </span>
                    <span class="rounded-full bg-white/20 px-4 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-white backdrop-blur">
                        {{ optional($publishedAt)->format('d M, Y') }}
                    </span>
                </div>
            </div>

            <div class="space-y-6 p-8">
                <div class="flex flex-wrap gap-2 text-xs font-semibold uppercase tracking-[0.3em]">
                    @if($blog->is_published)
                        <span class="rounded-full bg-emerald-500/10 px-3 py-1 text-emerald-600">Published</span>
                    @else
                        <span class="rounded-full bg-amber-500/10 px-3 py-1 text-amber-600">Draft</span>
                    @endif
                    <span class="rounded-full bg-slate-100 px-3 py-1 text-slate-600">Slug: {{ $blog->slug }}</span>
                </div>

                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-slate-400">Excerpt</p>
                    <p class="mt-3 text-base leading-7 text-slate-600">
                        {{ $blog->excerpt ?: 'No excerpt added yet.' }}
                    </p>
                </div>

                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-slate-400">Content</p>
                    <div class="prose prose-slate mt-3 max-w-none">
                        @if($blog->content)
                            {!! $blog->content !!}
                        @else
                            <p>This blog post does not have content yet.</p>
                        @endif
                    </div>
                </div>
            </div>
        </article>

        <aside class="space-y-6">
            <div class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-lg">
                <p class="text-xs uppercase tracking-[0.4em] text-slate-400">Details</p>
                <dl class="mt-4 space-y-4 text-sm">
                    <div class="flex items-center justify-between gap-4">
                        <dt class="text-slate-500">Category</dt>
                        <dd class="font-semibold text-slate-900">{{ $blog->category?->name ?? 'Uncategorized' }}</dd>
                    </div>
                    <div class="flex items-center justify-between gap-4">
                        <dt class="text-slate-500">Published</dt>
                        <dd class="font-semibold text-slate-900">{{ optional($publishedAt)->format('d M, Y h:i A') }}</dd>
                    </div>
                    <div class="flex items-center justify-between gap-4">
                        <dt class="text-slate-500">Created</dt>
                        <dd class="font-semibold text-slate-900">{{ $blog->created_at->format('d M, Y h:i A') }}</dd>
                    </div>
                    <div class="flex items-center justify-between gap-4">
                        <dt class="text-slate-500">Updated</dt>
                        <dd class="font-semibold text-slate-900">{{ $blog->updated_at->format('d M, Y h:i A') }}</dd>
                    </div>
                </dl>
            </div>

            <div class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-lg">
                <p class="text-xs uppercase tracking-[0.4em] text-slate-400">Actions</p>
                <div class="mt-4 flex flex-col gap-3">
                    <a href="{{ route('blogs.edit', $blog) }}" class="inline-flex items-center justify-center rounded-2xl bg-sky-500 px-5 py-3 text-sm font-semibold text-white transition hover:bg-sky-600">
                        Edit this post
                    </a>
                    <form action="{{ route('blogs.destroy', $blog) }}" method="POST" onsubmit="return confirm('Delete this blog post?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-full rounded-2xl bg-rose-500 px-5 py-3 text-sm font-semibold text-white transition hover:bg-rose-600">
                            Delete this post
                        </button>
                    </form>
                </div>
            </div>
        </aside>
    </div>
</div>
@endsection
