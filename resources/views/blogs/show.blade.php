@extends('layout.main')

@section('content')
@php
    $publishedAt = $blog->published_at ?? $blog->created_at;
    $tocItems = $blog->table_of_contents_items;
    $faqItems = $blog->faq_items;
    $keywords = collect(explode(',', (string) $blog->meta_keywords))
        ->map(fn ($keyword) => trim($keyword))
        ->filter()
        ->values();
    $readTime = $blog->reading_time;
@endphp

<div class="relative mx-auto mt-32 max-w-7xl space-y-6 overflow-hidden">
    <div class="pointer-events-none absolute inset-x-0 top-0 -z-10 h-56 bg-gradient-to-b from-[#FD5528]/10 via-transparent to-transparent blur-3xl"></div>
    <div class="pointer-events-none absolute -left-24 top-20 -z-10 h-64 w-64 rounded-full bg-orange-400/10 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-24 top-28 -z-10 h-56 w-56 rounded-full bg-[#FD5528]/10 blur-3xl"></div>

    <div class="flex flex-col gap-4 rounded-[2.25rem] border border-slate-200/70 bg-white/75 p-6 shadow-2xl shadow-slate-200/40 backdrop-blur-xl lg:flex-row lg:items-center lg:justify-between">
        <div class="space-y-2">
            <span class="inline-flex items-center rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-[#FD5528]">Blog preview</span>
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-slate-900">{{ $blog->title }}</h2>
                <p class="mt-1 max-w-2xl text-sm text-slate-500">Review the article exactly as the admin dashboard sees it, with SEO and FAQ details included.</p>
            </div>
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

    <div class="grid gap-6 xl:grid-cols-[minmax(0,1.55fr)_minmax(320px,0.85fr)]">
        <article class="overflow-hidden rounded-[2rem] border border-slate-200/70 bg-white shadow-xl shadow-slate-200/40">
            <div class="relative aspect-[16/9] w-full">
                <img src="{{ $blog->getImageUrl() }}" alt="{{ $blog->title }}" class="h-full w-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/15 to-transparent"></div>
                <div class="absolute bottom-5 left-5 flex flex-wrap gap-2">
                    <span class="rounded-full bg-[#FD5528] px-4 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-white">
                        {{ $blog->category?->name ?? 'Uncategorized' }}
                    </span>
                    @if($blog->is_featured)
                        <span class="rounded-full bg-white/20 px-4 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-white backdrop-blur">
                            Featured
                        </span>
                    @endif
                    <span class="rounded-full bg-white/20 px-4 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-white backdrop-blur">
                        {{ optional($publishedAt)->format('d M, Y') }}
                    </span>
                </div>
            </div>

            <div class="space-y-8 p-8">
                <div class="flex flex-wrap gap-2 text-xs font-semibold uppercase tracking-[0.3em]">
                    @if($blog->is_published)
                        <span class="rounded-full bg-emerald-500/10 px-3 py-1 text-emerald-600">Published</span>
                    @else
                        <span class="rounded-full bg-amber-500/10 px-3 py-1 text-amber-600">Draft</span>
                    @endif
                    <span class="rounded-full bg-slate-100 px-3 py-1 text-slate-600">Reading: {{ $readTime }} min</span>
                    <span class="rounded-full bg-slate-100 px-3 py-1 text-slate-600">Slug: {{ $blog->slug }}</span>
                </div>

                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-slate-400">Excerpt</p>
                    <p class="mt-3 text-base leading-7 text-slate-600">
                        {{ $blog->excerpt ?: 'No excerpt added yet.' }}
                    </p>
                </div>

                <div id="content">
                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-slate-400">Content</p>
                    <div class="prose prose-slate mt-3 max-w-none">
                        @if($blog->content)
                            {!! $blog->content !!}
                        @else
                            <p>This blog post does not have content yet.</p>
                        @endif
                    </div>
                </div>

                @if(!empty($faqItems))
                    <div id="faq" class="border-t border-slate-200 pt-8">
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-slate-400">FAQs</p>
                        <div class="mt-4 space-y-4">
                            @foreach($faqItems as $faq)
                                <details class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                                    <summary class="cursor-pointer list-none text-sm font-semibold text-slate-900">
                                        {{ $faq['question'] }}
                                    </summary>
                                    <div class="prose prose-slate mt-4 max-w-none text-sm">
                                        {!! $faq['answer'] !!}
                                    </div>
                                </details>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </article>

        <aside class="space-y-6">
            <div class="rounded-[2rem] border border-slate-200/70 bg-white p-6 shadow-lg shadow-slate-200/40">
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
                    <div class="flex items-center justify-between gap-4">
                        <dt class="text-slate-500">Reading</dt>
                        <dd class="font-semibold text-slate-900">{{ $readTime }} min</dd>
                    </div>
                </dl>
            </div>

            <div class="rounded-[2rem] border border-slate-200/70 bg-white p-6 shadow-lg shadow-slate-200/40">
                <p class="text-xs uppercase tracking-[0.4em] text-slate-400">SEO</p>
                <div class="mt-4 space-y-4 text-sm">
                    <div>
                        <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Meta title</p>
                        <p class="mt-1 font-semibold text-slate-900">{{ $blog->meta_title ?: $blog->title }}</p>
                    </div>
                    <div>
                        <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Meta description</p>
                        <p class="mt-1 leading-6 text-slate-600">{{ $blog->meta_description ?: ($blog->excerpt ?: 'No meta description provided.') }}</p>
                    </div>
                    <div>
                        <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Keywords</p>
                        <div class="mt-2 flex flex-wrap gap-2">
                            @forelse($keywords as $keyword)
                                <span class="rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">{{ $keyword }}</span>
                            @empty
                                <span class="text-sm text-slate-500">No keywords provided.</span>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>

            <div class="rounded-[2rem] border border-slate-200/70 bg-white p-6 shadow-lg shadow-slate-200/40">
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

            @if(!empty($tocItems))
                <div class="rounded-[2rem] border border-slate-200/70 bg-white p-6 shadow-lg shadow-slate-200/40">
                    <p class="text-xs uppercase tracking-[0.4em] text-slate-400">TOC</p>
                    <div class="mt-4 space-y-3">
                        @foreach($tocItems as $item)
                            <a href="#content" class="block rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm font-medium text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">
                                {{ $item['title'] }}
                            </a>
                        @endforeach
                        <a href="#faq" class="block rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm font-medium text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">
                            FAQs
                        </a>
                    </div>
                </div>
            @endif
        </aside>
    </div>
</div>
@endsection
