@extends("component.main")
@section("content")
@php
    $blogCount = $blogs->count();
    $featuredBlog = $featuredBlog ?? $blogs->first();
    $searchTerm = request('q');
    $activeCategory = request('category');
@endphp

<section class="relative h-[30vh] flex items-center justify-center text-center text-white overflow-hidden">

  <!-- BACKGROUND IMAGE -->
  <img 
    src="{{asset('assets/images/banner.png')}}"
    class="absolute inset-0 w-full h-full object-cover"
  />

  <!-- DARK OVERLAY -->
  <div class="absolute inset-0 bg-black/60"></div>

  <!-- CONTENT -->
  <div class="relative z-10 max-w-4xl px-6">

  

    <!-- HEADING -->
    <h1 class="mt-6 text-3xl sm:text-4xl md:text-5xl font-bold leading-tight">
        Stories, updates, and releases from the
<span class="text-[#FC5124] font-semibold"> 
                 backend team.</span> <span class="text-[#FD5528] font-semibold">
     
    </h1>

    <!-- SUBTEXT -->
    <p class="mt-6 text-gray-300 text-sm sm:text-base md:text-lg max-w-2xl mx-auto">
   Every new blog created in the dashboard appears here automatically. Search, filter, and read the latest posts as soon as they are published.
    </p>

 

  </div>

</section>

<!-- <section class="relative overflow-hidden bg-slate-950 text-white">
    <img src="{{ asset('assets/images/banner.png') }}" class="absolute inset-0 h-full w-full object-cover opacity-20" alt="Blog banner">
    <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-black/50 to-slate-500"></div>

    <div class="relative mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
        <div class="max-w-3xl space-y-6">
            <p class="text-xs font-semibold uppercase tracking-[0.45em] text-[#FD5528]">
                Blog & Insights
            </p>
            <h1 class="text-4xl font-bold leading-tight sm:text-5xl lg:text-6xl">
                Stories, updates, and releases from the backend team.
            </h1>
            <p class="max-w-2xl text-base leading-7 text-slate-200 sm:text-lg">
                Every new blog created in the dashboard appears here automatically. Search, filter, and read the latest posts as soon as they are published.
            </p>
        </div>
    </div>
</section> -->

<section class="bg-slate-50 py-12">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <form method="GET" action="{{ route('frontend.blog') }}" class="mb-10 grid gap-4 rounded-[2rem] border border-slate-200 bg-white p-5 shadow-lg lg:grid-cols-[1fr_auto_auto]">
            <input
                type="text"
                name="q"
                value="{{ $searchTerm }}"
                placeholder="Search posts, excerpts, or keywords"
                class="w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm outline-none focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10"
            >

            <select name="category" class="rounded-2xl border border-slate-200 px-4 py-3 text-sm outline-none focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                <option value="">All categories</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" @selected((string) $activeCategory === (string) $category->id)>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            <div class="flex gap-3">
                <button type="submit" class="rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/20 transition hover:bg-[#e94c20]">
                    Filter
                </button>
                <a href="{{ route('frontend.blog') }}" class="rounded-2xl border border-slate-200 px-5 py-3 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">
                    Reset
                </a>
            </div>
        </form>

        <div class="grid gap-8 lg:grid-cols-[minmax(0,1.6fr)_minmax(320px,0.8fr)]">
            <div class="space-y-8">
                <div class="grid gap-6 md:grid-cols-2">
                    @forelse($blogs as $blog)
                       <article class="group overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-lg transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl hover:border-[#FD5528]/40">

    <a href="{{ route('frontend.blog-detail', $blog->slug) }}" class="block">
        <div class="relative h-56 overflow-hidden">

            <!-- Image -->
            <img
                src="{{ $blog->getImageUrl() }}"
                alt="{{ $blog->title }}"
                class="h-full w-full object-cover transition duration-700 ease-out group-hover:scale-110"
                loading="lazy"
            >

            <!-- Overlay Gradient -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>

            <!-- Top Glow Effect -->
            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-500 bg-gradient-to-tr from-[#FD5528]/30 via-transparent to-transparent"></div>

            <!-- Bottom Tags -->
            <div class="absolute bottom-4 left-4 flex flex-wrap gap-2">

                <span class="rounded-full bg-[#FD5528] px-3 py-1 text-xs font-semibold text-white shadow-md">
                    {{ $blog->category?->name ?? 'Uncategorized' }}
                </span>

                <span class="rounded-full bg-white/20 px-3 py-1 text-xs font-semibold text-white backdrop-blur-md border border-white/20">
                    {{ optional($blog->published_at ?? $blog->created_at)->format('d M, Y') }}
                </span>

            </div>

        </div>
    </a>

    <div class="space-y-4 p-6">

        <!-- Title -->
        <h2 class="text-xl font-bold text-slate-900 transition duration-300 group-hover:text-[#FD5528] leading-snug">
            <a href="{{ route('frontend.blog-detail', $blog->slug) }}">
                {{ $blog->title }}
            </a>
        </h2>

        <!-- Description -->
        <p class="text-sm leading-6 text-slate-600 group-hover:text-slate-700 transition">
            {{ \Illuminate\Support\Str::limit(strip_tags($blog->excerpt ?: $blog->content ?: ''), 160) }}
        </p>

        <!-- Footer -->
        <div class="flex items-center justify-between pt-2 border-t border-slate-100">

            <span class="text-xs uppercase tracking-[0.35em] text-slate-400 group-hover:text-[#FD5528] transition">
                {{ $blog->is_published ? 'Published' : 'Draft' }}
            </span>

            <a href="{{ route('frontend.blog-detail', $blog->slug) }}"
               class="text-sm font-semibold text-[#FD5528] flex items-center gap-1 group-hover:gap-2 transition-all duration-300">

                Read more
                <span class="transition-transform duration-300 group-hover:translate-x-1">→</span>

            </a>

        </div>

    </div>
</article>
                    @empty
                        <div class="rounded-[2rem] border border-dashed border-slate-300 bg-white p-10 text-center text-slate-500 md:col-span-2">
                            No published blog posts found.
                        </div>
                    @endforelse
                </div>
            </div>

            <aside class="space-y-6">
                <div class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-lg">
                    <p class="text-xs uppercase tracking-[0.4em] text-slate-400">Overview</p>
                    <div class="mt-4 flex items-end justify-between">
                        <div>
                            <p class="text-3xl font-bold text-slate-900">{{ $blogCount }}</p>
                            <p class="text-sm text-slate-500">Published stories</p>
                        </div>
                        <span class="rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">
                            Live
                        </span>
                    </div>
                </div>

                <div class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-lg">
                    <p class="text-xs uppercase tracking-[0.4em] text-slate-400">Featured</p>
                    @if($featuredBlog)
                        <a href="{{ route('frontend.blog-detail', $featuredBlog->slug) }}" class="mt-4 block space-y-4">
                            <img
                                src="{{ $featuredBlog->getImageUrl() }}"
                                alt="{{ $featuredBlog->title }}"
                                class="h-44 w-full rounded-3xl object-cover"
                                loading="lazy"
                            >
                            <div class="space-y-2">
                                <h3 class="text-lg font-bold text-slate-900">{{ $featuredBlog->title }}</h3>
                                <p class="text-sm text-slate-600">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($featuredBlog->excerpt ?: $featuredBlog->content ?: ''), 120) }}
                                </p>
                            </div>
                        </a>
                    @else
                        <p class="mt-4 text-sm text-slate-500">Publish a blog post to show it here.</p>
                    @endif
                </div>

                <div class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-lg">
                    <p class="text-xs uppercase tracking-[0.4em] text-slate-400">Categories</p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        @forelse($categories as $category)
                            <a
                                href="{{ route('frontend.blog', array_filter(['category' => $category->id, 'q' => $searchTerm])) }}"
                                class="rounded-full border px-4 py-2 text-xs font-semibold transition {{ (string) $activeCategory === (string) $category->id ? 'border-[#FD5528] bg-[#FD5528] text-white' : 'border-slate-200 bg-white text-slate-700 hover:border-[#FD5528] hover:text-[#FD5528]' }}"
                            >
                                {{ $category->name }}
                            </a>
                        @empty
                            <span class="text-sm text-slate-500">No categories available.</span>
                        @endforelse
                    </div>
                </div>

                <div class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-lg">
                    <p class="text-xs uppercase tracking-[0.4em] text-slate-400">Need help?</p>
                    <p class="mt-3 text-sm leading-6 text-slate-600">
                        Publish a new blog from the dashboard and it will appear here automatically without changing this page.
                    </p>
                </div>
            </aside>
        </div>
    </div>
</section>

<main class="max-w-7xl mx-auto px-6 lg:px-8 py-20">

    <!-- WHY WEBSITE DEVELOPMENT -->
    <section id="need">

        <div class="grid lg:grid-cols-2 gap-14 items-center">

            <!-- Content -->
            <div>

                <span class="inline-flex px-4 py-2 rounded-full bg-orange-100 text-[#FD5528] font-semibold text-sm">
                    Website Development
                </span>

                <h2 class="mt-6 text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
                    Why Businesses Need
                    <span class="text-[#FD5528]">
                        Professional Website Development
                    </span>
                </h2>

                <p class="mt-6 text-lg leading-8 text-gray-600">
                    Your website is often the first interaction customers have
                    with your business. A professionally developed website
                    builds trust, supports marketing efforts, improves user
                    experience, and helps convert visitors into enquiries.
                </p>

                <div class="mt-8 grid sm:grid-cols-2 gap-4">

                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-orange-100 flex items-center justify-center">
                            ✓
                        </div>
                        <span class="font-medium text-gray-700">
                            Build Trust
                        </span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-orange-100 flex items-center justify-center">
                            ✓
                        </div>
                        <span class="font-medium text-gray-700">
                            Generate Leads
                        </span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-orange-100 flex items-center justify-center">
                            ✓
                        </div>
                        <span class="font-medium text-gray-700">
                            Improve SEO
                        </span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-orange-100 flex items-center justify-center">
                            ✓
                        </div>
                        <span class="font-medium text-gray-700">
                            Increase Conversions
                        </span>
                    </div>

                </div>

            </div>

            <!-- Image -->
            <div>
                <img
                    src="/images/website-development.jpg"
                    alt="Website Development Company in Kanpur"
                    class="rounded-[32px] shadow-2xl w-full">
            </div>

        </div>

    </section>

    <!-- BENEFITS -->
    <section id="benefits" class="mt-24">
        <div class="text-center max-w-3xl mx-auto">

            <span class="inline-flex px-4 py-2 rounded-full bg-orange-100 text-[#FD5528] font-semibold text-sm">
                Benefits
            </span>

            <h2 class="mt-5 text-4xl font-bold text-gray-900">
                Benefits of Choosing a Professional Web Development Company
            </h2>

        </div>

        <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-6 mt-14">

            <div class="group bg-white border border-orange-100 rounded-[28px] p-8 hover:-translate-y-2 hover:shadow-xl transition-all duration-300">
                <div class="w-16 h-16 rounded-2xl bg-orange-50 flex items-center justify-center text-[#FD5528] text-2xl">
                    ★
                </div>

                <h3 class="mt-6 text-xl font-bold text-gray-900">
                    Customer Trust
                </h3>

                <p class="mt-3 text-gray-600">
                    Professional design builds confidence and credibility.
                </p>
            </div>

            <div class="group bg-white border border-orange-100 rounded-[28px] p-8 hover:-translate-y-2 hover:shadow-xl transition-all duration-300">
                <div class="w-16 h-16 rounded-2xl bg-orange-50 flex items-center justify-center text-[#FD5528] text-2xl">
                    📱
                </div>

                <h3 class="mt-6 text-xl font-bold text-gray-900">
                    Mobile Experience
                </h3>

                <p class="mt-3 text-gray-600">
                    Responsive websites across all devices.
                </p>
            </div>

            <div class="group bg-white border border-orange-100 rounded-[28px] p-8 hover:-translate-y-2 hover:shadow-xl transition-all duration-300">
                <div class="w-16 h-16 rounded-2xl bg-orange-50 flex items-center justify-center text-[#FD5528] text-2xl">
                    🚀
                </div>

                <h3 class="mt-6 text-xl font-bold text-gray-900">
                    Search Visibility
                </h3>

                <p class="mt-3 text-gray-600">
                    Better SEO performance and Google rankings.
                </p>
            </div>

            <div class="group bg-white border border-orange-100 rounded-[28px] p-8 hover:-translate-y-2 hover:shadow-xl transition-all duration-300">
                <div class="w-16 h-16 rounded-2xl bg-orange-50 flex items-center justify-center text-[#FD5528] text-2xl">
                    📈
                </div>

                <h3 class="mt-6 text-xl font-bold text-gray-900">
                    More Leads
                </h3>

                <p class="mt-3 text-gray-600">
                    Higher conversion rates and enquiries.
                </p>
            </div>

        </div>

    </section>

    <!-- FEATURES -->
    <section id="features" class="mt-24">

        <div class="rounded-[40px] bg-[#111111] p-10 lg:p-16">

            <div class="max-w-3xl">
                <h2 class="text-4xl font-bold text-white">
                    Key Features Every Modern Business Website Should Have
                </h2>

                <p class="mt-5 text-gray-300">
                    Modern websites need to be fast, responsive,
                    SEO-friendly, and ready for business growth.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 mt-12">

                <div class="bg-white/5 rounded-3xl p-8 border border-white/10">
                    <h3 class="text-xl font-bold text-white">
                        Responsive Design
                    </h3>
                    <p class="mt-3 text-gray-300">
                        Works perfectly on desktop, tablet and mobile.
                    </p>
                </div>

                <div class="bg-white/5 rounded-3xl p-8 border border-white/10">
                    <h3 class="text-xl font-bold text-white">
                        SEO Ready Structure
                    </h3>
                    <p class="mt-3 text-gray-300">
                        Optimized for search engines from day one.
                    </p>
                </div>

                <div class="bg-white/5 rounded-3xl p-8 border border-white/10">
                    <h3 class="text-xl font-bold text-white">
                        Fast Performance
                    </h3>
                    <p class="mt-3 text-gray-300">
                        Optimized code and assets for maximum speed.
                    </p>
                </div>

                <div class="bg-white/5 rounded-3xl p-8 border border-white/10">
                    <h3 class="text-xl font-bold text-white">
                        Scalable Architecture
                    </h3>
                    <p class="mt-3 text-gray-300">
                        Ready for future growth and integrations.
                    </p>
                </div>

            </div>

        </div>

    </section>

    <!-- WHY CHOOSE US -->
    <section id="whyus" class="mt-24">

        <div class="text-center">
            <span class="inline-flex px-4 py-2 rounded-full bg-orange-100 text-[#FD5528] font-semibold">
                Why Choose Us
            </span>

            <h2 class="mt-5 text-4xl font-bold text-gray-900">
                Why Choose Backend Coders India
            </h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-14">

            <div class="rounded-3xl border border-orange-100 p-6">
                SEO-Friendly Structure
            </div>

            <div class="rounded-3xl border border-orange-100 p-6">
                Custom Design Solutions
            </div>

            <div class="rounded-3xl border border-orange-100 p-6">
                Fast Development Process
            </div>

            <div class="rounded-3xl border border-orange-100 p-6">
                Startup & SME Expertise
            </div>

            <div class="rounded-3xl border border-orange-100 p-6">
                Ecommerce Development
            </div>

            <div class="rounded-3xl border border-orange-100 p-6">
                Mobile App Solutions
            </div>

        </div>

    </section>

</main>


@endsection
