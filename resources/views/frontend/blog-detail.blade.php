@extends('component.main')
@section('content')
@php
    $publishedAt = $blog->published_at ?? $blog->created_at;
    $updatedAt = $blog->updated_at && (! $publishedAt || $blog->updated_at->gt($publishedAt)) ? $blog->updated_at : $publishedAt;
    $readingTime = $blog->reading_time;
    $shareUrl = route('frontend.blog-detail', $blog->slug);
    $tocItems = $blog->table_of_contents_items;
    $faqItems = $blog->faq_items;
    $contentHtml = $blog->processed_content ?: $blog->content;
@endphp

<main class="relative overflow-hidden bg-[#f5f7fb] text-slate-950">
<div class="pointer-events-none absolute inset-x-0 top-0 -z-10 h-72 bg-[radial-gradient(circle_at_top_left,_rgba(253,85,40,.12),_transparent_35%),radial-gradient(circle_at_top_right,_rgba(14,165,233,.10),_transparent_28%)]"></div>


<div class="flex justify-center">
    <header class="relative w-full max-w-9xl overflow-hidden border-b border-slate-200 bg-slate-950 shadow-[0_24px_80px_rgba(15,23,42,0.12)]">
        <!-- Background Banner Image -->
        <div class="relative min-h-[480px] sm:min-h-[540px] md:min-h-[580px] flex items-center justify-center overflow-hidden">
            <img
                src="{{ $blog->getImageUrl() }}"
                alt="{{ $blog->title }}"
                class="absolute inset-0 h-full w-full object-cover object-center filter brightness-[0.70] contrast-[1.05]"
                loading="eager"
                fetchpriority="high"
            >

            <!-- Cinematic Gradient Overlay for Maximum Readability -->
            <div
                class="absolute inset-0"
                style="
                    background:
                    radial-gradient(circle at top right, rgba(253,85,40,.28), transparent 45%),
                    radial-gradient(circle at bottom left, rgba(14,165,233,.18), transparent 40%),
                    linear-gradient(
                        to bottom,
                        rgba(2,6,23,.60),
                        rgba(2,6,23,.75),
                        rgba(2,6,23,.92)
                    );
                ">
            </div>

            <!-- Content Overlay (Centered, Exactly like Reference Image) -->
            <div class="relative z-10 mx-auto w-full max-w-5xl px-4 py-12 sm:px-6 sm:py-16 text-center">
             

                <!-- Category Pill & Featured Badge -->
                <div class="mb-4 flex flex-wrap items-center justify-center gap-2.5">
                    <span class="inline-flex items-center rounded-full bg-[#FD5528] px-4 py-1.5 text-xs font-bold uppercase tracking-[0.25em] text-white shadow-lg shadow-[#FD5528]/35">
                        {{ $blog->category?->name ?? 'Uncategorized' }}
                    </span>
                    @if($blog->is_featured)
                        <span class="inline-flex items-center rounded-full border border-white/20 bg-white/10 px-3.5 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-white backdrop-blur-md">
                            Featured
                        </span>
                    @endif
                </div>

                <!-- Title (Centered Bold White) -->
                <h1 class="mx-auto max-w-4xl text-3xl font-black tracking-tight text-white sm:text-4xl md:text-5xl lg:text-6xl leading-[1.18] drop-shadow-md">
                    {{ $blog->title }}
                </h1>

                <!-- Short Description (Clean, High Contrast, Perfectly Visible) -->
                @php
                    $bannerShortDescription = trim((string)($blog->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($blog->content ?: ''), 160)));
                @endphp
                @if(!empty($bannerShortDescription))
                    <p class="mx-auto mt-4 max-w-3xl text-center text-sm sm:text-base md:text-lg leading-relaxed text-slate-100 font-normal drop-shadow">
                        {{ \Illuminate\Support\Str::limit(strip_tags($bannerShortDescription), 175) }}
                    </p>
                @endif

                <!-- Author & Date Badge (Translucent Pill - No Read Time) -->
                <div class="mt-7 flex flex-wrap items-center justify-center gap-3 text-xs sm:text-sm text-slate-200">
                    <div class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-4 py-2 backdrop-blur-md shadow-lg">
                        <span class="flex h-6 w-6 items-center justify-center rounded-full bg-[#FD5528] text-xs font-bold text-white uppercase shadow">
                            BC
                        </span>
                        <span class="font-medium text-white">
                            Written by <span class="font-bold text-white">Backend Coders India</span>
                        </span>
                    </div>

                    <span class="rounded-full border border-white/15 bg-black/30 px-3.5 py-2 font-medium text-slate-200 backdrop-blur-md shadow">
                        {{ optional($publishedAt)->format('M d, Y') }}
                    </span>

                    @auth
                        @if(auth()->user()->isAdmin())
                            <a href="{{ route('blogs.edit', $blog) }}" class="inline-flex items-center rounded-full bg-sky-500 px-3.5 py-2 text-xs font-bold uppercase tracking-wider text-white shadow-lg shadow-sky-500/25 transition hover:bg-sky-600">
                                Edit
                            </a>
                        @endif
                    @endauth
                </div>

                <!-- Professional Breadcrumbs (Aligned After Written by Author) -->
                <nav aria-label="Breadcrumb" class="mt-5 flex flex-wrap items-center justify-center gap-2 text-xs sm:text-sm font-medium text-slate-300">
                    <a href="{{ route('frontend.index') }}" class="inline-flex items-center gap-1.5 transition hover:text-[#FD5528]">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        <span>Home</span>
                    </a>
                    <span class="text-slate-500">/</span>
                    <a href="{{ route('frontend.blog') }}" class="transition hover:text-[#FD5528]">Blog</a>
                    <span class="text-slate-500">/</span>
                    @if($blog->category)
                        <a href="{{ route('frontend.blog') }}?category={{ $blog->category->id }}" class="transition hover:text-[#FD5528]">{{ $blog->category->name }}</a>
                        <span class="text-slate-500">/</span>
                    @endif
                    <span class="text-white font-semibold truncate max-w-[200px] sm:max-w-md" title="{{ $blog->title }}">{{ $blog->title }}</span>
                </nav>
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
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">Article</p>
                            <h2 class="mt-2 text-2xl font-bold text-slate-900">Overview</h2>
                            <p class="mt-2 text-sm text-slate-600">Written by <span class="font-semibold text-slate-900">Backend Coders India</span></p>
                        </div>
                    </div>

                    <div class="grid gap-8 px-6 py-8 sm:px-8">
                        <div id="content" class="blog-content-body prose prose-slate max-w-none prose-headings:text-slate-900 prose-headings:font-bold prose-h1:text-4xl prose-h1:mt-0 prose-h1:mb-6 prose-h2:mt-8 prose-h2:mb-4 prose-h2:text-2xl prose-h3:text-xl prose-h3:mt-6 prose-h3:mb-3 prose-p:text-slate-600 prose-p:leading-8 prose-p:mb-5 prose-a:text-[#FD5528] prose-a:font-semibold prose-a:underline prose-a:underline-offset-4 prose-a:decoration-2 prose-a:decoration-[#FD5528]/40 hover:prose-a:text-[#e94c20] hover:prose-a:decoration-[#e94c20] prose-ul:text-slate-600 prose-ul:my-5 prose-li:my-2 prose-li:ml-2 prose-ol:text-slate-600 prose-ol:my-5 prose-ol:pl-6 prose-ol:list-decimal prose-blockquote:border-l-4 prose-blockquote:border-[#FD5528] prose-blockquote:bg-slate-50 prose-blockquote:py-3 prose-blockquote:px-4 prose-blockquote:rounded prose-code:bg-slate-100 prose-code:text-slate-800 prose-code:px-1.5 prose-code:py-0.5 prose-code:rounded prose-pre:bg-slate-900 prose-pre:rounded-xl prose-pre:overflow-x-auto prose-img:rounded-xl prose-img:shadow-lg prose-table:my-6 prose-table:w-full prose-table:border-collapse prose-table:overflow-hidden prose-th:border prose-th:border-slate-300 prose-th:bg-slate-100 prose-th:px-4 prose-th:py-3 prose-th:text-left prose-th:align-top prose-th:font-semibold prose-th:text-slate-900 prose-td:border prose-td:border-slate-300 prose-td:px-4 prose-td:py-3 prose-td:align-top prose-td:text-slate-700">
                            @if($contentHtml)
                                {!! $contentHtml !!}
                            @else
                                <p>This blog post does not have content yet.</p>
                            @endif
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

        <a href="https://www.linkedin.com/company/backendcodersindia/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"
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
                        <div class="rounded-2xl bg-orange-50 p-4">
                            <p class="text-xs uppercase tracking-[0.3em] text-orange-500">Last updated</p>
                            <p class="mt-1 text-sm font-semibold text-slate-900">{{ optional($updatedAt)->format('F d, Y') }}</p>
                        </div>
                        <div class="rounded-2xl bg-slate-50 p-4">
                            <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Reading time</p>
                            <p class="mt-1 text-sm font-semibold text-slate-900">~{{ $readingTime }} minutes</p>
                        </div>
                    </div>
                </div>

                <div class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-[0_20px_60px_rgba(15,23,42,0.08)]">
                    <p class="text-xs font-semibold uppercase tracking-[0.35em] text-slate-400">Recent Posts</p>
                    <div class="mt-5 space-y-4">
                        @forelse($recentBlogs as $recent)
                            <a href="{{ route('frontend.blog-detail', $recent->slug) }}" class="group flex gap-3 rounded-2xl border border-slate-200 p-3 transition hover:-translate-y-0.5 hover:border-[#FD5528] hover:shadow-lg">
                                <img alt=""
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

                @auth
                    @if(auth()->user()->isAdmin())
                        <div class="rounded-[2rem] border border-slate-200 bg-gradient-to-br from-[#FD5528] to-[#e94c20] p-6 text-white shadow-[0_20px_60px_rgba(253,85,40,0.22)]">
                            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-white/80">CMS Management</p>
                            <h3 class="mt-2 text-xl font-bold">Start a new article</h3>
                            <p class="mt-3 text-sm leading-6 text-white/90">
                                Use the dashboard to create a new post with FAQ, TOC, and SEO data in one place.
                            </p>
                            <a href="{{ route('blogs.create') }}" class="mt-5 inline-flex items-center justify-center rounded-2xl bg-white px-4 py-3 text-sm font-semibold text-[#FD5528] transition hover:bg-slate-100">
                                Add Blog
                            </a>
                        </div>
                    @endif
                @else
                    <div class="rounded-[2rem] border border-slate-200 bg-gradient-to-br from-[#FD5528] to-[#e94c20] p-6 text-white shadow-[0_20px_60px_rgba(253,85,40,0.22)]">
                        <p class="text-xs font-semibold uppercase tracking-[0.3em] text-white/80">Grow Your Business</p>
                        <h3 class="mt-2 text-xl font-bold">Need Custom Web &amp; SEO Solutions?</h3>
                        <p class="mt-3 text-sm leading-6 text-white/90">
                            Get in touch with Backend Coders India for high-performance website development and technical SEO.
                        </p>
                        <a href="{{ route('frontend.contact') }}" class="mt-5 inline-flex items-center justify-center rounded-2xl bg-white px-4 py-3 text-sm font-semibold text-[#FD5528] transition hover:bg-slate-100">
                            Get Free Consultation
                        </a>
                    </div>
                @endauth
            </aside>
        </div>
    </section>
    
</main>

<div id="blogImageModal" class="fixed inset-0 z-[100] hidden items-center justify-center bg-slate-950/80 px-4 py-6 backdrop-blur-sm">
    <button type="button" data-close-blog-image-modal class="absolute inset-0 h-full w-full cursor-default" aria-label="Close image preview"></button>
    <div class="relative z-[101] w-full max-w-5xl overflow-hidden rounded-[2rem] border border-white/10 bg-white shadow-2xl">
        <div class="flex items-center justify-between border-b border-slate-200 px-4 py-3 sm:px-6">
            <p class="text-sm font-semibold text-slate-900">Image preview</p>
            <button type="button" data-close-blog-image-modal class="rounded-full bg-slate-100 px-4 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-200">
                Close
            </button>
        </div>
        <div class="max-h-[80vh] overflow-auto bg-slate-950 p-4 sm:p-6">
            <img id="blogImageModalImg" src="" alt="Blog image preview" class="mx-auto max-h-[72vh] w-auto rounded-2xl object-contain shadow-2xl">
        </div>
    </div>
</div>

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

<script>
document.addEventListener('DOMContentLoaded', function () {
    const content = document.getElementById('content');
    const modal = document.getElementById('blogImageModal');
    const modalImg = document.getElementById('blogImageModalImg');
    const closeButtons = document.querySelectorAll('[data-close-blog-image-modal]');

    if (!content || !modal || !modalImg) return;

    const openModal = (src, alt) => {
        if (!src) return;
        modalImg.src = src;
        modalImg.alt = alt || 'Blog image preview';
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    };

    const closeModal = () => {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        modalImg.src = '';
        document.body.style.overflow = '';
    };

    content.querySelectorAll('img').forEach((img) => {
        img.style.cursor = 'zoom-in';
        img.addEventListener('click', () => openModal(img.src, img.alt));
    });

    closeButtons.forEach((button) => {
        button.addEventListener('click', closeModal);
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !modal.classList.contains('hidden')) {
            closeModal();
        }
    });
});
</script>

<script type="application/ld+json">
{!! json_encode([
    '@@context' => 'https://schema.org',
    '@type' => 'BlogPosting',
    'mainEntityOfPage' => [
        '@type' => 'WebPage',
        '@id' => $shareUrl,
    ],
    'headline' => $blog->title,
    'description' => $blog->meta_description ?: ($blog->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($blog->content ?: ''), 158)),
    'image' => $blog->getImageUrl() ? [url($blog->getImageUrl())] : [asset('assets/images/banner.png')],
    'datePublished' => $publishedAt ? \Carbon\Carbon::parse($publishedAt)->toIso8601String() : null,
    'dateModified' => $updatedAt ? \Carbon\Carbon::parse($updatedAt)->toIso8601String() : null,
    'author' => [
        '@type' => 'Organization',
        'name' => 'Backend Coders',
        '@id' => 'https://backendcodersindia.com/#organization',
        'url' => 'https://backendcodersindia.com',
    ],
    'publisher' => [
        '@type' => 'Organization',
        'name' => 'Backend Coders India',
        'logo' => [
            '@type' => 'ImageObject',
            'url' => asset('assets/images/bci_icon.png'),
        ],
    ],
    'articleSection' => $blog->category?->name ?? 'Technology',
    'keywords' => $blog->seo_keywords,
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>

<script type="application/ld+json">
{!! json_encode([
    '@@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        [
            '@type' => 'ListItem',
            'position' => 1,
            'name' => 'Home',
            'item' => route('frontend.index'),
        ],
        [
            '@type' => 'ListItem',
            'position' => 2,
            'name' => 'Blog',
            'item' => route('frontend.blog'),
        ],
        [
            '@type' => 'ListItem',
            'position' => 3,
            'name' => $blog->category?->name ?? 'Article',
            'item' => route('frontend.blog'),
        ],
        [
            '@type' => 'ListItem',
            'position' => 4,
            'name' => $blog->title,
            'item' => $shareUrl,
        ],
    ],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>

@endsection
