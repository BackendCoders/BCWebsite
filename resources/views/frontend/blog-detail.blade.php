@extends('component.main')
@section('content')
@php
    $publishedAt = $blog->published_at ?? $blog->created_at;
    $readingTime = $blog->reading_time;
    $shareUrl = route('frontend.blog-detail', $blog->slug);
    $tocItems = $blog->table_of_contents_items;
    $faqItems = $blog->faq_items;
    $keywords = collect(explode(',', (string) $blog->meta_keywords))
        ->map(fn ($keyword) => trim($keyword))
        ->filter()
        ->values();
    $faqSchema = collect($faqItems)
        ->map(function ($faq) {
            return [
                '@type' => 'Question',
                'name' => $faq['question'],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => strip_tags($faq['answer']),
                ],
            ];
        })
        ->values()
        ->all();
@endphp

<main class="relative overflow-hidden bg-[#f5f7fb] text-slate-950">
<div class="pointer-events-none absolute inset-x-0 top-0 -z-10 h-72 bg-[radial-gradient(circle_at_top_left,_rgba(253,85,40,.12),_transparent_35%),radial-gradient(circle_at_top_right,_rgba(14,165,233,.10),_transparent_28%)]"></div>


<div class="flex justify-center">
    <header class="w-full max-w-9xl overflow-hidden  border border-slate-200 bg-white shadow-[0_24px_80px_rgba(15,23,42,0.12)]">
     <div class="relative h-98">
                        <img
                            src="{{ $blog->getImageUrl() }}"
                            alt="{{ $blog->title }}"
                            class="h-1/2 w-1/2 object-cover"
                        >
    <!-- Premium Overlay -->
    <div
        class="absolute inset-0"
        style="
            background:
            radial-gradient(circle at top right, rgba(253,85,40,.35), transparent 35%),
            radial-gradient(circle at bottom left, rgba(59,130,246,.20), transparent 30%),
            linear-gradient(
                to bottom,
                rgba(2,6,23,.35),
                rgba(2,6,23,.60),
                rgba(2,6,23,.95)
            );
        ">
    </div>

<div class="absolute inset-x-0 bottom-0 flex justify-center px-6 pb-8 md:pb-12">

    <div
        class="w-full max-w-9xl rounded-3xl border border-white/10 bg-white/[0.03] p-6 backdrop-blur-md">

        <div class="mb-1 flex flex-wrap justify-center gap-3">

            <span
                class="rounded-full bg-[#FD5528] px-4 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-white shadow-lg">

                {{ $blog->category?->name ?? 'Uncategorized' }}

            </span>

            @if($blog->is_featured)

                <span
                    class="rounded-full border border-white/15 bg-white/10 px-4 py-1 text-xs font-semibold uppercase tracking-[0.3em] text-white backdrop-blur">

                    Featured

                </span>

            @endif

            <span
                class="rounded-full border border-white/15 bg-white/10 px-4 py-1 text-xs font-semibold uppercase tracking-[0.3em] text-white backdrop-blur">

                {{ $blog->is_published ? 'Published' : 'Draft' }}

            </span>

        </div>

        <h1
            class="mx-auto max-w-7xl text-center text-3xl font-black leading-tight text-white sm:text-4xl md:text-5xl lg:text-6xl">

            {{ $blog->title }}

        </h1>

        <p
            class="mx-auto mt-5 max-w-7xl text-center text-sm leading-7 text-slate-200 sm:text-base sm:leading-8">

            {{ $blog->excerpt ?: strip_tags($blog->content ?: 'This article is ready to read.') }}

        </p>

        <div
            class="mt-6 flex flex-wrap items-center justify-center gap-4 text-sm text-slate-300">

            <span>
                {{ optional($blog->published_at)->format('M d, Y') }}
            </span>

            <span class="h-1 w-1 rounded-full bg-slate-500"></span>

            <span>
                {{ str_word_count(strip_tags($blog->content ?? '')) > 0 ? ceil(str_word_count(strip_tags($blog->content)) / 200) : 1 }} min read
            </span>

        </div>

    </div>

</div>
                    </div>
                </header>
</div>

    <section class="mx-auto max-w-9xl px-4 py-8 sm:px-6 lg:px-8 lg:px-10">
        <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
            <a href="{{ route('frontend.blog') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-[#FD5528] hover:underline">
                <span>&larr;</span>
                Back to blog
            </a>

            <div class="flex flex-wrap items-center gap-2">
                <span class="rounded-full bg-white px-3 py-1 text-xs font-semibold uppercase tracking-[0.25em] text-slate-500 shadow-sm ring-1 ring-slate-200">
                    {{ $blog->category?->name ?? 'Uncategorized' }}
                </span>
                <span class="rounded-full bg-white px-3 py-1 text-xs font-semibold uppercase tracking-[0.25em] text-slate-500 shadow-sm ring-1 ring-slate-200">
                    {{ $readingTime }} min read
                </span>
                @auth
                    @if(auth()->user()->isAdmin())
                        <a href="{{ route('blogs.edit', $blog) }}" class="rounded-full bg-sky-500 px-3 py-1 text-xs font-semibold uppercase tracking-[0.25em] text-white shadow-lg shadow-sky-500/20 transition hover:bg-sky-600">
                            Edit
                        </a>
                    @endif
                @endauth
            </div>
        </div>

        <div class="grid grid-cols-1 gap-8 lg:grid-cols-4">
            <aside class="space-y-4 lg:col-span-1">
                <div class="sticky top-24 overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-[0_20px_60px_rgba(15,23,42,0.08)]">
                    <div class="border-b border-slate-100 bg-gradient-to-r from-[#FD5528]/10 to-orange-50 px-5 py-4">
                        <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">Contents</p>
                        <h2 class="mt-2 text-lg font-bold text-slate-900">Jump to section</h2>
                    </div>

                    <nav class="p-3">
                        @forelse($tocItems as $index => $item)
                            <a href="#{{ $item['anchor'] }}" class="group mb-2 flex items-center gap-3 rounded-xl px-4 py-3 transition hover:bg-[#FD5528]/5 hover:text-[#FD5528]">
                                <span class="flex h-7 w-7 items-center justify-center rounded-full bg-slate-100 text-xs font-bold text-slate-600 transition group-hover:bg-[#FD5528] group-hover:text-white">
                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                </span>
                                <span class="text-sm font-medium text-slate-700 transition group-hover:text-[#FD5528]">
                                    {{ $item['title'] }}
                                </span>
                            </a>
                        @empty
                            <div class="px-4 py-6 text-sm leading-6 text-slate-500">
                                Add table of contents items in the editor to create these section links.
                            </div>
                        @endforelse
                    </nav>
                </div>
            </aside>

            <section class="space-y-8 lg:col-span-2">
               
                <article class="overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-[0_20px_60px_rgba(15,23,42,0.08)]">
                    <div class="border-b border-slate-100 px-6 py-5 sm:px-8">
                        <div class="flex flex-wrap items-center justify-between gap-4">
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">Article</p>
                                <h2 class="mt-2 text-2xl font-bold text-slate-900">Overview</h2>
                            </div>

                            <div class="flex flex-wrap gap-2 text-xs font-semibold uppercase tracking-[0.25em]">
                                <span class="rounded-full bg-emerald-50 px-3 py-2 text-emerald-700">
                                    Published: {{ optional($publishedAt)->format('M d, Y') }}
                                </span>
                                <span class="rounded-full bg-orange-50 px-3 py-2 text-orange-700">
                                    Reading: {{ $readingTime }} min
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="grid gap-8 px-6 py-8 sm:px-8">
                        <div id="content" class="prose prose-slate max-w-none prose-headings:text-slate-900 prose-headings:font-bold prose-h2:mt-8 prose-h2:mb-4 prose-h2:text-2xl prose-h3:text-xl prose-h3:mt-6 prose-h3:mb-3 prose-p:text-slate-600 prose-p:leading-8 prose-p:mb-4 prose-a:text-[#FD5528] prose-a:font-semibold hover:prose-a:text-[#e94c20] prose-ul:text-slate-600 prose-ul:my-4 prose-li:my-2 prose-li:ml-2 prose-blockquote:border-l-4 prose-blockquote:border-[#FD5528] prose-blockquote:bg-slate-50 prose-blockquote:py-2 prose-blockquote:px-4 prose-blockquote:rounded prose-code:bg-slate-100 prose-code:text-slate-800 prose-code:px-1.5 prose-code:py-0.5 prose-code:rounded prose-pre:bg-slate-900 prose-pre:rounded-xl prose-img:rounded-xl prose-img:shadow-lg">
                            @if($blog->content)
                                {!! $blog->content !!}
                            @else
                                <p>This blog post does not have content yet.</p>
                            @endif
                        </div>

                        <div class="rounded-[1.75rem] border border-slate-200 bg-slate-50 p-5">
                            <div class="flex flex-wrap items-center gap-3">
                                <span class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-400">Keywords</span>
                                <div class="flex flex-wrap gap-2">
                                    @forelse($keywords as $keyword)
                                        <span class="rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">{{ $keyword }}</span>
                                    @empty
                                        <span class="text-sm text-slate-500">No keywords provided.</span>
                                    @endforelse
                                </div>
                            </div>
                        </div>

    <div class="mt-6 flex flex-wrap gap-3 sm:gap-4">
        <a href="https://www.facebook.com/backendcoders/" target="_blank" rel="noopener noreferrer" aria-label="Facebook"
           class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-[#f1e9e9] to-[#f5f1f1] transition-all duration-300 hover:scale-110">
          <img src="https://img.icons8.com/?size=100&id=106163&format=png&color=fd5528" class="h-5 w-5" alt="" aria-hidden="true">
        </a>

        <a href="https://www.instagram.com/backendcoders/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"
           class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-[#f1e9e9] to-[#f5f1f1] transition-all duration-300 hover:scale-110">
          <img src="https://img.icons8.com/?size=100&id=32309&format=png&color=fd5528" class="h-5 w-5" alt="" aria-hidden="true">
        </a>

        <a href="https://www.linkedin.com/company/103738896/admin/dashboard/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"
           class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-[#f1e9e9] to-[#f5f1f1] transition-all duration-300 hover:scale-110">
          <img src="https://img.icons8.com/?size=100&id=34349&format=png&color=fd5528" class="h-5 w-5" alt="" aria-hidden="true">
        </a>

        <a href="https://wa.me/919140092133" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"
           class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-[#f1e9e9] to-[#f5f1f1] transition-all duration-300 hover:scale-110">
          <img src="https://img.icons8.com/?size=100&id=16733&format=png&color=fd5528" class="h-5 w-5" alt="" aria-hidden="true">
        </a>
      </div>
                    </div>
                </article>
            </section>

            <aside class="space-y-4 lg:col-span-1">
                <div class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-[0_20px_60px_rgba(15,23,42,0.08)]">
                    <p class="text-xs font-semibold uppercase tracking-[0.35em] text-slate-400">Article Info</p>
                    <div class="mt-5 space-y-4">
                        <div class="rounded-2xl bg-slate-50 p-4">
                            <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Category</p>
                            <p class="mt-1 text-sm font-bold text-slate-900">{{ $blog->category?->name ?? 'Uncategorized' }}</p>
                        </div>
                        <div class="rounded-2xl bg-slate-50 p-4">
                            <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Published</p>
                            <p class="mt-1 text-sm font-semibold text-slate-900">{{ optional($publishedAt)->format('F d, Y') }}</p>
                        </div>
                        <div class="rounded-2xl bg-slate-50 p-4">
                            <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Reading time</p>
                            <p class="mt-1 text-sm font-semibold text-slate-900">~{{ $readingTime }} minutes</p>
                        </div>
                        <div class="rounded-2xl bg-slate-50 p-4">
                            <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Status</p>
                            <p class="mt-1 text-sm font-semibold text-slate-900">{{ $blog->is_published ? 'Published' : 'Draft' }}</p>
                        </div>
                    </div>
                </div>

                <div class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-[0_20px_60px_rgba(15,23,42,0.08)]">
                    <p class="text-xs font-semibold uppercase tracking-[0.35em] text-slate-400">Recent Posts</p>
                    <div class="mt-5 space-y-4">
                        @forelse($recentBlogs as $recent)
                            <a href="{{ route('frontend.blog-detail', $recent->slug) }}" class="group flex gap-3 rounded-2xl border border-slate-200 p-3 transition hover:-translate-y-0.5 hover:border-[#FD5528] hover:shadow-lg">
                                <img
                                    src="{{ $recent->getImageUrl() }}"
                                    alt="{{ $recent->title }}"
                                    class="h-16 w-20 rounded-xl object-cover"
                                    loading="lazy"
                                >
                                <div class="min-w-0">
                                    <p class="text-xs uppercase tracking-[0.3em] text-slate-400">
                                        {{ $recent->category?->name ?? 'Uncategorized' }}
                                    </p>
                                    <h3 class="mt-1 text-sm font-semibold text-slate-900 transition group-hover:text-[#FD5528] line-clamp-2">
                                        {{ $recent->title }}
                                    </h3>
                                    <p class="mt-1 text-xs text-slate-500">
                                        {{ optional($recent->published_at ?? $recent->created_at)->format('d M, Y') }}
                                    </p>
                                </div>
                            </a>
                        @empty
                            <p class="text-sm text-slate-500">No recent posts found.</p>
                        @endforelse
                    </div>
                </div>

                <div class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-[0_20px_60px_rgba(15,23,42,0.08)]">
                    <p class="text-xs font-semibold uppercase tracking-[0.35em] text-slate-400">Reviews</p>
                    <div class="mt-5 space-y-4">
                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                            <div class="flex items-center gap-3">
                                <div class="flex h-11 w-11 items-center justify-center rounded-full bg-[#FD5528] font-bold text-white">A</div>
                                <div>
                                    <p class="font-semibold text-slate-900">Abdullah Ansari</p>
                                    <p class="text-xs text-amber-500">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                                </div>
                            </div>
                            <p class="mt-3 text-sm leading-6 text-slate-600">
                                Excellent SEO services with measurable growth.
                            </p>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                            <div class="flex items-center gap-3">
                                <div class="flex h-11 w-11 items-center justify-center rounded-full bg-slate-900 font-bold text-white">R</div>
                                <div>
                                    <p class="font-semibold text-slate-900">Rahul Sharma</p>
                                    <p class="text-xs text-amber-500">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                                </div>
                            </div>
                            <p class="mt-3 text-sm leading-6 text-slate-600">
                                Professional team and outstanding SEO results.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="rounded-[2rem] border border-slate-200 bg-gradient-to-br from-[#FD5528] to-[#e94c20] p-6 text-white shadow-[0_20px_60px_rgba(253,85,40,0.22)]">
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-white/80">Need similar content?</p>
                    <h3 class="mt-2 text-xl font-bold">Start a new article</h3>
                    <p class="mt-3 text-sm leading-6 text-white/90">
                        Use the dashboard to create a new post with FAQ, TOC, and SEO data in one place.
                    </p>
                    <a href="{{ route('blogs.create') }}" class="mt-5 inline-flex items-center justify-center rounded-2xl bg-white px-4 py-3 text-sm font-semibold text-[#FD5528] transition hover:bg-slate-100">
                        Add Blog
                    </a>
                </div>
            </aside>
        </div>

    </section>
</main>

@if(!empty($faqItems))
    <section id="faq" class="bg-[#fff8f3] py-16 sm:py-20">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
            <div class="mb-10 text-center">
                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">FAQ</p>
                <h2 class="mt-2 text-3xl font-bold text-slate-900">Frequently Asked Questions</h2>
            </div>

            <div class="space-y-4">
                @foreach($faqItems as $index => $faq)
                    <details class="group rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:border-[#FD5528]/30">
                        <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                            <div class="flex items-center gap-3">
                                <span class="flex h-8 w-8 items-center justify-center rounded-full bg-[#FD5528]/10 text-xs font-bold text-[#FD5528]">
                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                </span>
                                <span class="font-semibold text-slate-900">{{ $faq['question'] }}</span>
                            </div>
                            <span class="text-2xl text-[#FD5528] transition-transform group-open:rotate-45">+</span>
                        </summary>

                        <div class="mt-4 border-t border-slate-100 pt-4 text-slate-600 leading-8">
                            {!! $faq['answer'] !!}
                        </div>
                    </details>
                @endforeach
            </div>
        </div>
    </section>
@endif

@if(!empty($faqItems))
    <script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => $faqSchema,
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
    </script>
@endif

@endsection
