@extends("component.main")
@section("content")
@php
    $publishedAt = $blog->published_at ?? $blog->created_at;
@endphp

<section class="bg-slate-50 py-12">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
            <a href="{{ route('frontend.blog') }}" class="text-sm font-semibold text-[#FD5528] hover:underline">
                &larr; Back to blog
            </a>

            <div class="flex flex-wrap items-center gap-2">
                <span class="text-sm text-slate-400">/</span>
                <span class="text-sm text-slate-500">{{ $blog->category?->name ?? 'Uncategorized' }}</span>

                @auth
                    @if(auth()->user()->isAdmin())
                        <a href="{{ route('blogs.edit', $blog) }}" class="ml-2 rounded-full bg-sky-500 px-4 py-2 text-xs font-semibold uppercase tracking-[0.25em] text-white shadow-lg shadow-sky-500/20 transition hover:bg-sky-600">
                            Edit
                        </a>
                    @endif
                @endauth
            </div>
        </div>

        <header class="overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-2xl">
            <div class="grid lg:grid-cols-2">
                <div class="relative min-h-[320px]">
                    <img
                        src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('assets/images/banner.png') }}"
                        alt="{{ $blog->title }}"
                        class="h-full w-full object-cover"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 flex flex-wrap gap-2">
                        <span class="rounded-full bg-[#FD5528] px-4 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-white">
                            {{ $blog->category?->name ?? 'Uncategorized' }}
                        </span>
                        <span class="rounded-full bg-white/20 px-4 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-white backdrop-blur">
                            {{ optional($publishedAt)->format('d M, Y') }}
                        </span>
                    </div>
                </div>

                <div class="space-y-6 p-8 lg:p-10">
                    <p class="text-xs font-semibold uppercase tracking-[0.45em] text-[#FD5528]">Blog Detail</p>
                    <h1 class="text-3xl font-bold leading-tight text-slate-900 md:text-4xl">
                        {{ $blog->title }}
                    </h1>
                    <p class="text-base leading-7 text-slate-600">
                        {{ $blog->excerpt ?: strip_tags($blog->content ?: '') }}
                    </p>
                    <div class="flex flex-wrap gap-3 text-sm text-slate-500">
                        <span class="flex items-center gap-2">
                            <span class="h-2 w-2 rounded-full bg-[#FD5528]"></span>
                            {{ $blog->is_published ? 'Published' : 'Draft' }}
                        </span>
                        <span class="flex items-center gap-2">
                            <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                            {{ optional($publishedAt)->format('d M, Y') }}
                        </span>
                    </div>
                </div>
            </div>
        </header>

        <div class="mt-10 grid gap-8 lg:grid-cols-[minmax(0,1.6fr)_minmax(300px,0.8fr)]">
            <article class="space-y-8 rounded-[2rem] border border-slate-200 bg-white p-8 shadow-lg">
                @if($blog->content)
                    <div class="prose prose-slate max-w-none">
                        {!! $blog->content !!}
                    </div>
                @else
                    <p class="text-slate-600 leading-7">
                        {{ $blog->excerpt ?: 'This blog post does not have content yet.' }}
                    </p>
                @endif
            </article>

            <aside class="space-y-6">
                <div class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-lg">
                    <p class="text-xs uppercase tracking-[0.4em] text-slate-400">About this article</p>
                    <div class="mt-4 space-y-3">
                        <h2 class="text-lg font-bold text-slate-900">{{ $blog->title }}</h2>
                        <p class="text-sm leading-6 text-slate-600">
                            {{ $blog->excerpt ?: strip_tags($blog->content ?: '') }}
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">
                                {{ $blog->category?->name ?? 'Uncategorized' }}
                            </span>
                            <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">
                                {{ $blog->is_published ? 'Published' : 'Draft' }}
                            </span>
                        </div>
                    </div>
                </div>

                <div class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-lg">
                    <p class="text-xs uppercase tracking-[0.4em] text-slate-400">Related posts</p>
                    <div class="mt-4 space-y-4">
                        @forelse($relatedBlogs as $related)
                            <a href="{{ route('frontend.blog-detail', $related->slug) }}" class="flex gap-3 rounded-2xl border border-slate-200 p-3 transition hover:-translate-y-0.5 hover:shadow-lg">
                                <img
                                    src="{{ $related->image ? asset('storage/' . $related->image) : asset('assets/images/banner.png') }}"
                                    alt="{{ $related->title }}"
                                    class="h-16 w-20 rounded-xl object-cover"
                                >
                                <div>
                                    <p class="text-xs uppercase tracking-[0.3em] text-slate-400">
                                        {{ $related->category?->name ?? 'Uncategorized' }}
                                    </p>
                                    <h3 class="text-sm font-semibold text-slate-900">{{ $related->title }}</h3>
                                </div>
                            </a>
                        @empty
                            <p class="text-sm text-slate-500">No related posts found.</p>
                        @endforelse
                    </div>
                </div>

                <div class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-lg">
                    <p class="text-xs uppercase tracking-[0.4em] text-slate-400">Call to action</p>
                    <p class="mt-3 text-sm leading-6 text-slate-600">
                        Want a similar blog post or a content strategy? Publish from the dashboard and the public blog updates right away.
                    </p>
                    <a href="{{ route('frontend.contact') }}" class="mt-5 inline-flex rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/20 transition hover:bg-[#e94c20]">
                        Contact us
                    </a>
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection
