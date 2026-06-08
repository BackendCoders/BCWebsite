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
                <div class="relative min-h-[400px]">
                    <img
                        src="{{ $blog->getImageUrl() }}"
                        alt="{{ $blog->title }}"
                        class="h-full w-full object-cover"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6 flex flex-col justify-end">
                        <div class="flex flex-wrap gap-2 mb-3">
                            <span class="rounded-full bg-[#FD5528] px-4 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-white shadow-lg">
                                {{ $blog->category?->name ?? 'Uncategorized' }}
                            </span>
                        </div>
                        <h1 class="text-3xl md:text-4xl font-bold text-white leading-tight mb-2">{{ $blog->title }}</h1>
                        <div class="flex flex-wrap items-center gap-4 text-sm text-gray-100">
                            <span class="rounded-full bg-white/20 px-3 py-1 text-xs font-semibold uppercase tracking-[0.25em] backdrop-blur">
                                {{ optional($publishedAt)->format('d M, Y') }}
                            </span>
                            <span class="flex items-center gap-1">
                                <span class="h-1.5 w-1.5 rounded-full bg-[#FD5528]"></span>
                                {{ ceil(str_word_count(strip_tags($blog->content ?: '')) / 200) }} min read
                            </span>
                        </div>
                    </div>
                </div>

                <div class="space-y-6 p-8 lg:p-10 bg-gradient-to-br from-slate-50 to-white">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.45em] text-[#FD5528] mb-3">Article Overview</p>
                        <div class="flex flex-wrap gap-3 text-sm">
                            <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-emerald-50 text-emerald-700 font-medium">
                                <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                                {{ $blog->is_published ? 'Published' : 'Draft' }}
                            </span>
                            <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-50 text-blue-700 font-medium">
                                {{ optional($publishedAt)->format('M d, Y') }}
                            </span>
                            <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-orange-50 text-orange-700 font-medium">
                                {{ ceil(str_word_count(strip_tags($blog->content ?: '')) / 200) }} min read
                            </span>
                        </div>
                    </div>
                    <p class="text-base leading-7 text-slate-600 italic border-l-4 border-[#FD5528] pl-4">
                        {{ $blog->excerpt ?: strip_tags($blog->content ?: '') }}
                    </p>
                </div>
            </div>
        </header>

        <div class="mt-10 grid gap-8 lg:grid-cols-[minmax(0,1.6fr)_minmax(300px,0.8fr)]">
            <article class="space-y-8 rounded-[2rem] border border-slate-200 bg-white p-8 md:p-10 shadow-lg">
                @if($blog->content)
                    <div class="prose prose-slate max-w-none prose-headings:text-slate-900 prose-headings:font-bold prose-h2:mt-8 prose-h2:mb-4 prose-h2:text-2xl prose-h3:text-xl prose-h3:mt-6 prose-h3:mb-3 prose-p:text-slate-600 prose-p:leading-8 prose-p:mb-4 prose-a:text-[#FD5528] prose-a:font-semibold hover:prose-a:text-[#e94c20] prose-ul:text-slate-600 prose-ul:my-4 prose-li:my-2 prose-li:ml-2 prose-blockquote:border-l-4 prose-blockquote:border-[#FD5528] prose-blockquote:bg-slate-50 prose-blockquote:py-2 prose-blockquote:px-4 prose-blockquote:rounded prose-code:bg-slate-100 prose-code:text-slate-800 prose-code:px-1.5 prose-code:py-0.5 prose-code:rounded prose-pre:bg-slate-900 prose-pre:rounded-xl prose-img:rounded-xl prose-img:shadow-lg">
                        {!! $blog->content !!}
                    </div>
                @else
                    <p class="text-slate-600 leading-7">
                        {{ $blog->excerpt ?: 'This blog post does not have content yet.' }}
                    </p>
                @endif
                
                <!-- Divider -->
                <div class="border-t border-slate-200 pt-8">
                    <div class="flex flex-wrap gap-2">
                        <span class="text-xs uppercase tracking-[0.3em] text-slate-400 font-semibold">Tags:</span>
                        <span class="inline-flex items-center gap-1 px-3 py-1.5 rounded-full bg-[#FD5528]/10 text-[#FD5528] font-medium">
                            {{ $blog->category?->name ?? 'Uncategorized' }}
                        </span>
                    </div>
                </div>
                
                <!-- Social Sharing -->
                <div class="border-t border-slate-200 pt-8">
                    <p class="text-xs uppercase tracking-[0.3em] text-slate-400 font-semibold mb-4">Share this post:</p>
                    <div class="flex flex-wrap gap-3">
                        <a href="https://twitter.com/intent/tweet?text={{ urlencode($blog->title) }}&url={{ urlencode(route('frontend.blog-detail', $blog->slug)) }}" target="_blank" class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#1DA1F2] text-white hover:bg-[#1a8cd8] transition" title="Share on Twitter">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2s9 5 20 5a9.5 9.5 0 00-9-5.5c4.75 2.25 7-7 7-7a10.6 10.6 0 01-9.5 5M21 3a5.5 5.5 0 10-11 0 5.5 5.5 0 0011 0z"></path></svg>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('frontend.blog-detail', $blog->slug)) }}" target="_blank" class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#1877F2] text-white hover:bg-[#166fe5] transition" title="Share on Facebook">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a6 6 0 00-6 6v3H7v4h2v8h4v-8h3l1-4h-4V8a1 1 0 011-1h3z"></path></svg>
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(route('frontend.blog-detail', $blog->slug)) }}" target="_blank" class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#0A66C2] text-white hover:bg-[#085399] transition" title="Share on LinkedIn">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path><circle cx="4" cy="4" r="2"></circle></svg>
                        </a>
                        <button onclick="navigator.clipboard.writeText('{{ route('frontend.blog-detail', $blog->slug) }}')" class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-slate-200 text-slate-700 hover:bg-slate-300 transition" title="Copy link">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.658 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                        </button>
                    </div>
                </div>
            </article>

            <aside class="space-y-6">
                <!-- Article Info Card -->
                <div class="rounded-[2rem] border border-slate-200 bg-gradient-to-br from-slate-50 to-white p-6 shadow-lg top-24">
                    <p class="text-xs uppercase tracking-[0.4em] text-slate-400 font-semibold mb-4">Article Info</p>
                    <div class="space-y-4">
                        <div>
                            <p class="text-xs uppercase tracking-[0.3em] text-slate-400 mb-1">Category</p>
                            <p class="text-sm font-bold text-slate-900">{{ $blog->category?->name ?? 'Uncategorized' }}</p>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-[0.3em] text-slate-400 mb-1">Published</p>
                            <p class="text-sm font-semibold text-slate-900">{{ optional($publishedAt)->format('F d, Y') }}</p>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-[0.3em] text-slate-400 mb-1">Reading Time</p>
                            <p class="text-sm font-semibold text-slate-900">~{{ ceil(str_word_count(strip_tags($blog->content ?: '')) / 200) }} minutes</p>
                        </div>
                        <div class="pt-3 border-t border-slate-200">
                            <div class="flex items-center gap-2 text-xs font-semibold">
                                <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                                <span class="text-emerald-700">{{ $blog->is_published ? 'Published' : 'Draft' }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Related Posts -->
                <div class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-lg">
                    <p class="text-xs uppercase tracking-[0.4em] text-slate-400 font-semibold mb-4">Related Posts</p>
                    <div class="space-y-3">
                        @forelse($relatedBlogs as $related)
                            <a href="{{ route('frontend.blog-detail', $related->slug) }}" class="group flex gap-3 rounded-2xl border border-slate-200 p-3 transition hover:border-[#FD5528] hover:bg-slate-50 hover:shadow-md">
                                <div class="relative overflow-hidden rounded-lg flex-shrink-0">
                                    <img
                                        src="{{ $related->getImageUrl() }}"
                                        alt="{{ $related->title }}"
                                        class="h-16 w-20 object-cover group-hover:scale-110 transition duration-300"
                                        loading="lazy"
                                    >
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-xs uppercase tracking-[0.25em] text-[#FD5528] font-semibold">
                                        {{ $related->category?->name ?? 'Uncategorized' }}
                                    </p>
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-[#FD5528] transition line-clamp-2">{{ $related->title }}</h3>
                                </div>
                            </a>
                        @empty
                            <p class="text-sm text-slate-500 text-center py-4">No related posts at the moment.</p>
                        @endforelse
                    </div>
                </div>

                <!-- Newsletter/CTA Card -->
                <div class="rounded-[2rem] border border-slate-200 bg-gradient-to-br from-[#FD5528] to-[#e94c20] p-6 shadow-lg text-white">
                    <p class="text-xs uppercase tracking-[0.3em] font-semibold mb-2 opacity-90">💌 Enjoyed this post?</p>
                    <h3 class="text-lg font-bold mb-2">Get Updates</h3>
                    <p class="text-sm leading-6 mb-4 opacity-95">
                        Subscribe to get notified when we publish new insights and updates.
                    </p>
                    <a href="{{ route('frontend.contact') }}" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-white text-[#FD5528] font-semibold hover:bg-slate-100 transition text-sm">
                        Get in touch
                        <span>→</span>
                    </a>
                </div>

                <!-- CTA Card -->
                <div class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-lg">
                    <p class="text-xs uppercase tracking-[0.3em] text-slate-400 font-semibold mb-3">Need similar content?</p>
                    <p class="text-sm leading-6 text-slate-600 mb-4">
                        Looking for custom blog posts, content strategy, or technical writing? Let's collaborate!
                    </p>
                    <a href="{{ route('frontend.contact') }}" class="inline-flex items-center gap-2 rounded-xl bg-[#FD5528] px-4 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/20 transition hover:bg-[#e94c20]">
                        Contact Us
                        <span>→</span>
                    </a>
                </div>

                <!-- Back to Blog -->
                <a href="{{ route('frontend.blog') }}" class="flex items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm font-semibold text-slate-900 shadow-sm hover:border-[#FD5528] hover:text-[#FD5528] hover:shadow-md transition">
                    <span>←</span>
                    Back to Blog
                </a>
            </aside>
        </div>
    </div>
</section>
@endsection
