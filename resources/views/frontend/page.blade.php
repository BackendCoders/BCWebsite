@extends('component.main')

@section('content')
@php
    $sections = $page?->sections ?? collect();
    $heroSection = $sections->firstWhere('type', 'hero');
    $heroItem = $heroSection?->items?->first();
    $heroImage = $heroItem?->image ?: $heroSection?->image;
    $contentSections = $sections->reject(fn ($section) => \Illuminate\Support\Str::lower((string) $section->type) === 'hero')->values();

    $mediaUrl = function ($path) {
        if (! $path) {
            return asset('assets/images/banner.png');
        }

        $path = trim(str_replace('\\', '/', (string) $path));

        if (\Illuminate\Support\Str::startsWith($path, ['http://', 'https://', '//'])) {
            return $path;
        }

        $path = ltrim($path, '/');

        if (\Illuminate\Support\Str::startsWith($path, 'public/')) {
            $path = \Illuminate\Support\Str::after($path, 'public/');
        }

        if (\Illuminate\Support\Str::startsWith($path, 'storage/')) {
            $path = \Illuminate\Support\Str::after($path, 'storage/');
        }

        if (\Illuminate\Support\Str::startsWith($path, ['assets/', 'images/', 'uploads/', 'files/']) && file_exists(public_path($path))) {
            return asset($path);
        }

        if (file_exists(public_path($path))) {
            return asset($path);
        }

        return route('media.file', ['path' => $path]);
    };

    $firstItem = fn ($section) => $section?->items?->first();
    $heroExtra = $heroItem?->extra ?? [];
    $pageTitle = strip_tags((string) ($page->meta_title ?: $page->title ?: 'Backend Coders India'));
    $pageHeading = $heroItem?->title ?: ($heroSection?->title ?: ($page->title ?: $pageTitle));
    $pageDescription = strip_tags((string) ($page->meta_description ?: $heroItem?->description ?: ''));
    $heroImageUrl = $heroImage ? $mediaUrl($heroImage) : asset('assets/images/banner.png');

    $breadcrumbSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Home',
                'item' => url('/'),
            ],
            [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => $pageTitle,
                'item' => url()->current(),
            ],
        ],
    ];

    $webPageSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'WebPage',
        'name' => $pageTitle,
        'headline' => strip_tags((string) $pageHeading),
        'description' => $pageDescription,
        'url' => url()->current(),
        'primaryImageOfPage' => [
            '@type' => 'ImageObject',
            'url' => $heroImageUrl,
        ],
        'publisher' => [
            '@type' => 'Organization',
            'name' => 'Backend Coders India',
            'url' => url('/'),
            'logo' => [
                '@type' => 'ImageObject',
                'url' => asset('assets/images/bci_icon.png'),
            ],
        ],
    ];
@endphp

@push('head')
    {{-- Preload Largest Contentful Paint (LCP) Hero Image --}}
    @if($heroImage)
        <link rel="preload" as="image" href="{{ $mediaUrl($heroImage) }}" fetchpriority="high">
    @endif

    {{-- Structured Data: WebPage --}}
    <script type="application/ld+json">
{!! json_encode($webPageSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>

    {{-- Structured Data: BreadcrumbList --}}
    <script type="application/ld+json">
{!! json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>

@endpush

<main class="bg-white">

    {{-- HERO SECTION --}}
    <section class="relative overflow-hidden bg-[linear-gradient(135deg,#fff7f2_0%,#ffffff_45%,#fff1eb_100%)] py-16 text-slate-900 sm:py-20 lg:py-24" aria-label="Hero Section">
        <div class="pointer-events-none absolute inset-0 opacity-50" aria-hidden="true">
            <div class="absolute -top-20 right-0 h-72 w-72 rounded-full bg-white/50 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 h-72 w-72 rounded-full bg-[#FD5528]/15 blur-3xl"></div>
        </div>

        <div class="relative mx-auto grid max-w-7xl items-center gap-12 px-6 lg:grid-cols-2">
            <div>
                @if($heroExtra['eyebrow'] ?? null)
                    <p class="mb-3 text-xs font-semibold uppercase tracking-[0.25em] text-[#FD5528]">
                        {{ $heroExtra['eyebrow'] }}
                    </p>
                @else
                    <p class="mb-3 text-xs font-semibold uppercase tracking-[0.25em] text-[#FD5528]">
                        {{ $pageTitle }}
                    </p>
                @endif

                <h1 class="text-4xl font-bold leading-tight text-slate-950 sm:text-5xl lg:text-6xl pb-2">
                    @if($heroItem && $heroItem->title)
                        {!! $heroItem->title !!}
                    @elseif($heroSection && $heroSection->title)
                        {!! $heroSection->title !!}
                    @else
                        {{ $pageTitle }}
                    @endif
                </h1>

                @if($heroItem && $heroItem->description)
                    <div class="mt-6 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">
                        {!! $heroItem->description !!}
                    </div>
                @elseif($pageDescription)
                    <p class="mt-6 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">
                        {{ $pageDescription }}
                    </p>
                @endif

                @if(($heroExtra['sub_text'] ?? null) || ($heroExtra['button'] ?? null) || ($heroExtra['button_text'] ?? null) || ($heroExtra['secondary_button'] ?? null))
                    <div class="mt-8 flex flex-col gap-4 sm:flex-row sm:items-center">
                        @if($heroExtra['button'] ?? null || $heroExtra['button_text'] ?? null)
                            <a
                                href="{{ $heroExtra['button_url'] ?? route('frontend.contact') }}"
                                target="{{ $heroExtra['button_target'] ?? '_self' }}"
                                @if(($heroExtra['button_target'] ?? '_self') === '_blank') rel="noopener noreferrer" @endif
                                class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-6 py-3 font-semibold text-white shadow-[0_16px_36px_rgba(253,85,40,0.24)] transition hover:-translate-y-0.5 hover:bg-[#e94c20]"
                            >
                                {{ $heroExtra['button'] ?? $heroExtra['button_text'] }}
                            </a>
                        @endif

                        @if($heroExtra['secondary_button'] ?? null)
                            <a
                                href="{{ $heroExtra['secondary_button_url'] ?? '#' }}"
                                target="{{ $heroExtra['secondary_button_target'] ?? '_self' }}"
                                @if(($heroExtra['secondary_button_target'] ?? '_self') === '_blank') rel="noopener noreferrer" @endif
                                class="inline-flex items-center justify-center rounded-2xl border border-slate-300 bg-white px-6 py-3 font-semibold text-slate-700 shadow-sm transition hover:-translate-y-0.5 hover:border-[#FD5528] hover:text-[#FD5528]"
                            >
                                {{ $heroExtra['secondary_button'] ?? ('Learn More About ' . strip_tags((string) ($heroItem?->title ?? $pageTitle))) }}
                            </a>
                        @endif
                    </div>
                @endif
            </div>

            <div class="relative">
                @if($heroImage)
                    <img
                        src="{{ $mediaUrl($heroImage) }}"
                        alt="{{ strip_tags((string) ($heroItem?->title ?: $heroSection?->title ?: $pageTitle)) }}"
                        width="1200"
                        height="630"
                        loading="eager"
                        fetchpriority="high"
                        decoding="async"
                        onerror="this.onerror=null; this.src='{{ asset('assets/images/banner.png') }}';"
                        class="h-[420px] w-full rounded-[2.25rem] object-cover shadow-[0_30px_80px_rgba(15,23,42,0.18)] ring-1 ring-black/5"
                    >
                @else
                    <img
                        src="{{ asset('assets/images/banner.png') }}"
                        alt="{{ strip_tags((string) ($heroItem?->title ?: $heroSection?->title ?: $pageTitle)) }}"
                        width="1200"
                        height="630"
                        loading="eager"
                        fetchpriority="high"
                        decoding="async"
                        class="h-[420px] w-full rounded-[2.25rem] object-cover shadow-[0_30px_80px_rgba(15,23,42,0.18)] ring-1 ring-black/5"
                    >
                @endif
            </div>
        </div>
    </section>

    {{-- DYNAMIC CONTENT SECTIONS --}}
    @foreach($contentSections as $section)
        @php
            $items = $section->items ?? collect();
            $sectionType = \Illuminate\Support\Str::lower((string) $section->type);
            $sectionTitle = $section->title ?: data_get($items->first(), 'extra.heading');
            $sectionSubtitle = data_get($items->first(), 'extra.subtitle') ?: data_get($items->first(), 'extra.sub_text') ?: data_get($section, 'extra.subtitle') ?: null;
            $sectionId = 'section-' . ($section->id ?? $loop->index);
        @endphp

        @switch($sectionType)
            {{-- CASE: SOCIAL MEDIA CONTENT STRATEGY --}}
            @case('social-media-content-strategy')
                @php
                    $leadItem = $firstItem($section);
                    $featureItems = $items->slice(1)->values();
                    $leadTitle = $sectionTitle ?: data_get($leadItem, 'title', 'Content Strategy and Planning');
                    $leadDescription = data_get($leadItem, 'description');
                    $leadImage = $section->image ?: data_get($leadItem, 'image') ?: data_get($items->first(), 'image');
                    $leadImageAlt = strip_tags((string) (data_get($leadItem, 'title') ?: $leadTitle));
                @endphp

                <section id="{{ $sectionId }}" class="bg-white py-20 sm:py-24" aria-label="{{ $leadTitle }}">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-14">
                            <div class="order-2 lg:order-1">
                                <div class="overflow-hidden rounded-[2rem] border border-slate-200 bg-slate-50 shadow-[0_25px_70px_rgba(15,23,42,0.10)]">
                                    @if($leadImage)
                                        <img
                                            src="{{ $mediaUrl($leadImage) }}"
                                            alt="{{ $leadImageAlt }}"
                                            width="1200"
                                            height="560"
                                            loading="lazy"
                                            decoding="async"
                                            onerror="this.onerror=null; this.src='{{ asset('assets/images/banner.png') }}';"
                                            class="h-[320px] w-full object-cover sm:h-[420px] lg:h-[500px]"
                                        >
                                    @else
                                        <div class="flex h-[320px] items-center justify-center bg-[linear-gradient(135deg,#fff7f2_0%,#fff_60%,#fff1eb_100%)] px-8 text-center sm:h-[420px] lg:h-[500px]">
                                            <div>
                                                <p class="text-sm font-semibold uppercase tracking-[0.35em] text-[#FD5528]">Content Strategy</p>
                                                <p class="mt-4 text-2xl font-bold text-slate-900">{{ $leadTitle }}</p>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="order-1 text-center lg:order-2 lg:text-left">
                                <div class="mx-auto max-w-2xl lg:mx-0">
                                    <span class="inline-flex rounded-full bg-orange-50 px-4 py-2 text-xs font-semibold uppercase tracking-[0.25em] text-[#FD5528]">
                                        Content Strategy
                                    </span>

                                    <h2 class="mt-6 text-3xl font-black leading-tight text-slate-900 sm:text-4xl md:text-5xl">
                                        {{ $leadTitle }}
                                    </h2>

                                    @if($leadDescription)
                                        <div class="mt-6 space-y-4 text-base leading-8 text-slate-600 sm:text-lg">
                                            {!! $leadDescription !!}
                                        </div>
                                    @endif

                                    @if($leadItem && $leadItem->title && $leadItem->title !== $leadTitle)
                                        <p class="mt-4 text-base leading-8 text-slate-600">
                                            {!! $leadItem->title !!}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        @if($featureItems->isNotEmpty())
                            <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                                @foreach($featureItems as $item)
                                    <div class="rounded-3xl border border-slate-200/80 bg-white p-7 text-center shadow-[0_10px_30px_rgba(15,23,42,0.05)] transition-all duration-300 hover:-translate-y-1 hover:border-[#FD5528]/20 hover:shadow-[0_20px_45px_rgba(253,85,40,0.10)]">
                                        <h3 class="text-lg font-bold text-slate-900">
                                            {{ $item->title }}
                                        </h3>
                                        @if($item->description)
                                            <div class="mt-3 text-sm leading-7 text-slate-600">
                                                {!! $item->description !!}
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </section>
                @break

            {{-- CASE: SOCIAL MEDIA REELS STRATEGY --}}
            @case('social-media-reels-strategy')
                @php
                    $leadItem = $firstItem($section);
                    $featureItems = $items->slice(1)->values();
                    $leadTitle = $sectionTitle ?: data_get($leadItem, 'title', 'Reels and Creative Content Strategy');
                    $leadDescription = data_get($leadItem, 'description');
                @endphp

                <section id="{{ $sectionId }}" class="relative overflow-hidden bg-white py-20 sm:py-28" aria-label="{{ $leadTitle }}">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(253,85,40,0.05),transparent_30%)]" aria-hidden="true"></div>

                    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="mx-auto max-w-4xl text-center">
                            <span class="inline-flex rounded-full border border-[#FD5528]/10 bg-[#FD5528]/5 px-5 py-2 text-xs font-semibold uppercase tracking-[0.28em] text-[#FD5528]">
                                Creative Content
                            </span>

                            <h2 class="mt-7 text-3xl font-black leading-[1.1] tracking-tight text-slate-950 sm:text-4xl md:text-5xl xl:text-6xl">
                                {{ $leadTitle }}
                            </h2>

                            @if($leadDescription)
                                <div class="mx-auto mt-8 max-w-7xl space-y-5 text-base leading-8 text-slate-600 sm:text-lg">
                                    {!! $leadDescription !!}
                                </div>
                            @endif
                        </div>

                        @if($featureItems->isNotEmpty())
                            <div class="mt-12 grid justify-items-center gap-6 sm:grid-cols-2 xl:grid-cols-3">
                                @foreach($featureItems as $item)
                                    <div class="group relative w-full max-w-sm overflow-hidden rounded-[2rem] border border-slate-200 bg-white p-8 text-center shadow-[0_12px_45px_rgba(15,23,42,0.05)] transition-all duration-300 hover:-translate-y-1 hover:border-[#FD5528]/20 hover:shadow-[0_25px_70px_rgba(253,85,40,0.10)]">
                                        <div class="absolute right-0 top-0 h-28 w-28 translate-x-10 -translate-y-10 rounded-full bg-[#FD5528]/5 blur-3xl transition-all duration-300 group-hover:bg-[#FD5528]/10" aria-hidden="true"></div>

                                        <div class="relative">
                                            <div class="mb-5 inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-[#FD5528]/10 text-sm font-bold text-[#FD5528]">
                                                {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                                            </div>

                                            <h3 class="text-xl font-black leading-snug text-slate-950">
                                                {{ $item->title }}
                                            </h3>

                                            @if($item->description)
                                                <div class="mt-4 text-sm leading-7 text-slate-600">
                                                    {!! $item->description !!}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </section>
                @break

            {{-- CASE: SOCIAL MEDIA PAID CAMPAIGNS --}}
            @case('social-media-paid-campaigns')
                @php
                    $leadItem = $firstItem($section);
                    $featureItems = $items->slice(1)->values();
                    $leadTitle = $sectionTitle ?: data_get($leadItem, 'title', 'Paid Social Media Campaign Management');
                    $leadDescription = data_get($leadItem, 'description');
                @endphp

                <section id="{{ $sectionId }}" class="bg-white py-20 sm:py-24" aria-label="{{ $leadTitle }}">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="mx-auto max-w-4xl text-center">
                            <span class="inline-flex rounded-full bg-orange-50 px-4 py-2 text-xs font-semibold uppercase tracking-[0.25em] text-[#FD5528]">
                                Paid Social Media
                            </span>

                            <h2 class="mt-6 text-3xl font-black leading-tight text-slate-900 sm:text-4xl md:text-5xl">
                                {{ $leadTitle }}
                            </h2>

                            @if($leadDescription)
                                <div class="mx-auto mt-6 max-w-7xl space-y-4 text-base leading-8 text-slate-600 sm:text-lg">
                                    {!! $leadDescription !!}
                                </div>
                            @endif
                        </div>

                        @if($featureItems->isNotEmpty())
                            <div class="mt-12 grid justify-items-center gap-5 sm:grid-cols-2 xl:grid-cols-3">
                                @foreach($featureItems as $item)
                                    <div class="w-full max-w-sm rounded-3xl border border-slate-100 bg-white p-7 text-center shadow-sm transition hover:shadow-md">
                                        <h3 class="text-lg font-bold text-slate-900">
                                            {{ $item->title }}
                                        </h3>
                                        @if($item->description)
                                            <div class="mt-3 text-sm leading-7 text-slate-600">
                                                {!! $item->description !!}
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </section>
                @break

            {{-- CASE: ABOUT / CONTENT / TEXT --}}
            @case('about')
            @case('content')
            @case('text')
                @php
                    $item = $firstItem($section);
                    $contentImage = $item?->image ?: $section->image;
                @endphp

                <section id="{{ $sectionId }}" class="bg-white py-16 sm:py-20" aria-label="{{ $sectionTitle ?: 'Content Section' }}">
                    @if($sectionType === 'content')
                        <div class="mx-auto max-w-7xl px-6 text-center">
                            @if($sectionTitle)
                                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">
                                    {{ $sectionTitle }}
                                </p>
                            @endif

                            @if($item && $item->title)
                                <h2 class="mt-4 text-3xl font-bold leading-tight text-slate-950 sm:text-4xl">
                                    {!! $item->title !!}
                                </h2>
                            @endif

                            @if($item && $item->description)
                                <div class="mt-6 space-y-4 text-base leading-8 text-slate-600 text-justify">
                                    {!! $item->description !!}
                                </div>
                            @endif

                            @if(data_get($item, 'extra.button_text') || data_get($item, 'extra.link_text'))
                                <div class="mt-8 flex justify-center">
                                    <a
                                        href="{{ data_get($item, 'extra.button_url', route('frontend.contact')) }}"
                                        target="{{ data_get($item, 'extra.button_target', '_self') }}"
                                        @if(data_get($item, 'extra.button_target', '_self') === '_blank') rel="noopener noreferrer" @endif
                                        class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-6 py-3 font-semibold text-white shadow-[0_16px_36px_rgba(253,85,40,0.18)] transition hover:-translate-y-0.5 hover:bg-[#e94c20]"
                                    >
                                        {{ data_get($item, 'extra.button_text', data_get($item, 'extra.link_text', 'Learn More')) }}
                                    </a>
                                </div>
                            @endif
                        </div>
                    @else
                        <div class="mx-auto grid max-w-7xl gap-10 px-6 lg:grid-cols-2 lg:items-center">
                            <div>
                                @if($sectionTitle)
                                    <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">
                                        {{ $sectionTitle }}
                                    </p>
                                @endif

                                @if($item && $item->title)
                                    <h2 class="mt-4 text-3xl font-bold leading-tight text-slate-950 sm:text-4xl">
                                        {!! $item->title !!}
                                    </h2>
                                @endif

                                @if($item && $item->description)
                                    <div class="mt-6 space-y-4 text-base leading-8 text-slate-600">
                                        {!! $item->description !!}
                                    </div>
                                @endif

                                @if(data_get($item, 'extra.button_text') || data_get($item, 'extra.link_text'))
                                    <a
                                        href="{{ data_get($item, 'extra.button_url', route('frontend.contact')) }}"
                                        target="{{ data_get($item, 'extra.button_target', '_self') }}"
                                        @if(data_get($item, 'extra.button_target', '_self') === '_blank') rel="noopener noreferrer" @endif
                                        class="mt-8 inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-6 py-3 font-semibold text-white shadow-[0_16px_36px_rgba(253,85,40,0.18)] transition hover:-translate-y-0.5 hover:bg-[#e94c20]"
                                    >
                                        {{ data_get($item, 'extra.button_text', data_get($item, 'extra.link_text', 'Learn More')) }}
                                    </a>
                                @endif
                            </div>

                            <div>
                                @if($contentImage)
                                    <img
                                        src="{{ $mediaUrl($contentImage) }}"
                                        alt="{{ strip_tags((string) ($item->title ?? $sectionTitle ?? $pageTitle)) }}"
                                        width="1200"
                                        height="720"
                                        loading="lazy"
                                        decoding="async"
                                        onerror="this.onerror=null; this.src='{{ asset('assets/images/banner.png') }}';"
                                        class="w-full rounded-[1.75rem] object-cover shadow-2xl shadow-slate-200"
                                    >
                                @endif
                            </div>
                        </div>
                    @endif
                </section>
                @break

            {{-- CASE: SERVICES / CARDS / FEATURES --}}
            @case('services')
            @case('cards')
            @case('features')
                <section id="{{ $sectionId }}" class="bg-slate-50 py-16 sm:py-20" aria-label="{{ $sectionTitle ?: 'Services Section' }}">
                    <div class="mx-auto max-w-7xl px-6 py-4">
                        @if($sectionTitle)
                            <div class="mx-auto max-w-7xl text-center">
                                <h2 class="text-2xl font-bold p-2 text-[#FD5528] my-8 sm:text-3xl">
                                    {{ $sectionTitle }}
                                </h2>
                                @if($sectionSubtitle)
                                    <p class="mx-auto max-w-3xl text-base leading-7 text-slate-700 mb-6">
                                        {{ $sectionSubtitle }}
                                    </p>
                                @endif
                            </div>
                        @endif

                        <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                            @foreach($items as $item)
                                @php $extra = $item->extra ?? []; @endphp

                                <article data-aos="fade-up" class="group relative overflow-hidden rounded-[2rem] border border-orange-100 bg-white p-7 shadow-[0_16px_40px_rgba(15,23,42,0.08)] transition duration-500 hover:-translate-y-1 hover:shadow-[0_24px_60px_rgba(253,85,40,0.12)] text-gray-900">
                                    <div class="relative z-10 flex flex-col items-center text-center space-y-4">
                                        <!-- LABEL -->
                                        <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">
                                            {{ data_get($extra, 'label', 'Service') }}
                                        </span>

                                        <!-- ICON -->
                                        <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-inner">
                                            @if($item->image)
                                                <img alt="" src="{{ $mediaUrl($item->image) }}" alt="{{ strip_tags((string) $item->title) }}" width="56" height="56" loading="lazy" decoding="async" onerror="this.onerror=null; this.src='{{ asset('assets/images/bci_icon.png') }}';" class="h-14 w-14 object-contain" />
                                            @else
                                                <img src="{{ asset('assets/images/bci_icon.png') }}" alt="Backend Coders India" width="48" height="48" loading="lazy" decoding="async" class="h-12 w-12 object-contain" />
                                            @endif
                                        </div>

                                        <!-- TITLE -->
                                        <h3 class="text-xl font-semibold text-slate-950">
                                            {{ $item->title }}
                                        </h3>

                                        <!-- DESCRIPTION -->
                                        @if($item->description)
                                            <div class="text-sm leading-7 text-slate-600">
                                                {!! $item->description !!}
                                            </div>
                                        @endif

                                        <!-- TAGS -->
                                        @php $tags = data_get($extra, 'tags', []); @endphp
                                        @if(is_array($tags) && count($tags))
                                            <div class="flex flex-wrap justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
                                                @foreach($tags as $tag)
                                                    <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">
                                                        {{ $tag }}
                                                    </span>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </section>
                @break

            {{-- CASE: FAQ --}}
            @case('faq')
                <section id="{{ $sectionId }}" class="bg-white py-16 sm:py-20" aria-label="Frequently Asked Questions">
                    <div class="mx-auto max-w-5xl px-6">
                        <div class="mx-auto max-w-7xl text-center">
                            <span class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">
                                {{ $sectionTitle ?: 'FAQ' }}
                            </span>
                            <h2 class="mt-4 text-3xl font-bold leading-tight text-slate-950 sm:text-4xl">
                                {{ $sectionTitle ?: 'Frequently Asked Questions' }}
                            </h2>
                        </div>

                        <div class="mt-8 space-y-4">
                            @foreach($items as $item)
                                <details class="group rounded-2xl border border-slate-200 bg-white p-5 shadow-[0_10px_30px_rgba(15,23,42,0.06)] transition hover:border-[#FD5528]/20">
                                    <summary class="cursor-pointer list-none font-medium text-slate-900">
                                        <span class="flex items-center justify-between gap-4">
                                            <span class="font-semibold text-slate-900">{!! $item->title !!}</span>
                                            <span class="text-2xl leading-none text-[#FD5528] transition-transform group-open:rotate-45" aria-hidden="true">+</span>
                                        </span>
                                    </summary>
                                    @if($item->description)
                                        <div class="mt-4 text-sm leading-7 text-slate-600">
                                            {!! $item->description !!}
                                        </div>
                                    @endif
                                </details>
                            @endforeach
                        </div>
                    </div>
                </section>
                @break

            {{-- CASE: STATS / METRICS --}}
            @case('stats')
            @case('metrics')
                <section id="{{ $sectionId }}" class="bg-gradient-to-br from-slate-50 via-slate-100 to-[#fff4f0] py-16 sm:py-20" aria-label="{{ $sectionTitle ?: 'Key Metrics' }}">
                    <div class="mx-auto max-w-7xl px-6 text-center">
                        <div class="mx-auto mb-16 max-w-4xl text-center">
                            <span class="inline-flex items-center rounded-full border border-[#FD5528]/20 bg-[#FD5528]/10 px-5 py-2 text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">
                                {{ $sectionTitle ?: 'Performance Metrics' }}
                            </span>

                            <h2 class="mt-6 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                                {{ $sectionTitle ?: 'Services Designed To' }}
                                <span class="text-[#FD5528]">Drive Measurable Results</span>
                            </h2>

                            @if($sectionSubtitle)
                                <p class="mx-auto mt-5 max-w-5xl text-base leading-8 text-slate-600 sm:text-lg">
                                    {{ $sectionSubtitle }}
                                </p>
                            @else
                                <p class="mx-auto mt-5 max-w-5xl text-base leading-8 text-slate-600 sm:text-lg">
                                    Strategic campaign planning, continuous optimization, and conversion-focused digital solutions designed to increase visibility, generate qualified leads, and maximize return on investment.
                                </p>
                            @endif
                        </div>

                        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            @foreach($items as $item)
                                @php $itemExtra = $item->extra ?? []; @endphp

                                <div class="group relative overflow-hidden rounded-[28px] border border-slate-200 bg-white p-7 shadow-[0_12px_40px_rgba(15,23,42,0.08)] transition-all duration-500 hover:-translate-y-2 hover:border-[#FD5528]/30 hover:shadow-[0_25px_60px_rgba(253,85,40,0.15)]">
                                    <div class="absolute left-0 top-0 h-1 w-full bg-gradient-to-r from-[#020000] via-[#0e0300] to-[#000000]" aria-hidden="true"></div>
                                    <div class="absolute -right-10 -top-10 h-32 w-32 rounded-full bg-[#FD5528]/5 blur-3xl transition-all duration-500 group-hover:bg-[#FD5528]/10" aria-hidden="true"></div>

                                    <div class="relative mt-5">
                                        <p class="text-xl lg:text-3xl font-extrabold tracking-tight text-[#FD5528]">
                                            {{ data_get($itemExtra, 'value', $item->title) }}
                                        </p>
                                    </div>

                                    <div class="mt-5 h-px w-full bg-gradient-to-r from-[#FD5528]/20 via-slate-200 to-transparent" aria-hidden="true"></div>

                                    @if($item->description)
                                        <div class="mt-5 text-sm leading-7 text-slate-600 text-start">
                                            {!! $item->description !!}
                                        </div>
                                    @endif

                                    <div class="absolute bottom-0 left-0 h-1 w-0 bg-[#FD5528] transition-all duration-500 group-hover:w-full" aria-hidden="true"></div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                @break

            {{-- CASE: TIMELINE / PROCESS / STEPS --}}
            @case('timeline')
            @case('process')
            @case('steps')
                <section id="{{ $sectionId }}" class="bg-slate-50 py-16 sm:py-20" aria-label="{{ $sectionTitle ?: 'Our Process' }}">
                    <div class="mx-auto max-w-7xl px-6">
                        @if($sectionTitle)
                            <div class="text-center">
                                <h2 class="text-2xl font-bold text-[#FD5528] sm:text-3xl">{{ $sectionTitle }}</h2>
                                @if($sectionSubtitle)
                                    <p class="mt-2 text-base leading-6 text-slate-600">{{ $sectionSubtitle }}</p>
                                @endif
                            </div>
                        @endif

                        <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
                            @foreach($items as $index => $item)
                                <div class="rounded-[1.75rem] border border-slate-200 bg-white p-6 shadow-[0_10px_30px_rgba(15,23,42,0.06)]">
                                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-[#FD5528] font-bold text-white">
                                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                    </div>
                                    @if($item->title)
                                        <h3 class="mt-5 text-lg font-semibold text-slate-900">{{ $item->title }}</h3>
                                    @endif
                                    @if($item->description)
                                        <div class="mt-3 text-sm leading-7 text-slate-600">{!! $item->description !!}</div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                @break

            {{-- CASE: GALLERY --}}
            @case('gallery')
                <section id="{{ $sectionId }}" class="bg-white py-16 sm:py-20" aria-label="{{ $sectionTitle ?: 'Gallery' }}">
                    <div class="mx-auto max-w-7xl px-6">
                        <div class="flex flex-col items-center text-center">
                            @if($sectionTitle)
                                <span class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">{{ $sectionTitle }}</span>
                                <h2 class="mt-3 text-3xl font-bold text-slate-950 sm:text-4xl">{{ $sectionTitle }}</h2>
                                @if($sectionSubtitle)
                                    <p class="mt-2 text-base leading-6 text-slate-600 max-w-3xl">{{ $sectionSubtitle }}</p>
                                @endif
                            @endif

                            <div class="mt-12 grid w-full gap-6 sm:grid-cols-2 lg:grid-cols-3">
                                @foreach($items as $item)
                                    @php $galleryImage = $item->image ?: $section->image; @endphp
                                    <div class="overflow-hidden rounded-[1.75rem]">
                                        @if($galleryImage)
                                            <img
                                                src="{{ $mediaUrl($galleryImage) }}"
                                                alt="{{ strip_tags((string) ($item->title ?: $sectionTitle ?: $pageTitle)) }}"
                                                width="720"
                                                height="480"
                                                loading="lazy"
                                                decoding="async"
                                                onerror="this.onerror=null; this.src='{{ asset('assets/images/banner.png') }}';"
                                                class="h-60 w-full object-cover"
                                            >
                                        @endif
                                        <div class="group relative overflow-hidden rounded-[1.75rem] border border-orange-100 bg-white p-7 shadow-[0_12px_40px_rgba(15,23,42,0.06)] transition duration-500 hover:-translate-y-2 hover:border-[#F19737]/30 hover:shadow-[0_20px_60px_rgba(241,151,55,0.16)]" data-aos="zoom-in">
                                            <div class="relative z-10 mt-6 text-center">
                                                @if($item->title)
                                                    <h3 class="text-xl sm:text-2xl font-medium leading-tight text-[#2C2B44] transition duration-300 group-hover:text-[#F19737]">
                                                        {{ $item->title }}
                                                    </h3>
                                                @endif

                                                @if($item->description)
                                                    <div class="mt-5 rounded-2xl border border-orange-100 bg-gradient-to-br from-orange-50 to-slate-50 p-5">
                                                        <div class="text-sm sm:text-base leading-8 text-slate-600">
                                                            {!! $item->description !!}
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="absolute bottom-0 left-0 h-1 w-0 bg-gradient-to-r from-[#F19737] to-[#da7840] transition-all duration-500 group-hover:w-full" aria-hidden="true"></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
                @break

            {{-- CASE: CALL TO ACTION (CTA) --}}
            @case('cta')
                @php $cta = $items->first(); @endphp
                <section id="{{ $sectionId }}" class="relative overflow-hidden bg-gradient-to-r from-[#FC5124] via-[#FD5528] to-orange-400 py-20 text-white" aria-label="Call to Action">
                    <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top_left,_white,_transparent_50%)]" aria-hidden="true"></div>
                    <div class="relative mx-auto max-w-5xl px-6 text-center">
                        @if($cta && $cta->title)
                            <h2 class="text-3xl font-bold tracking-tight sm:text-4xl md:text-5xl">
                                {!! $cta->title !!}
                            </h2>
                        @endif

                        @if($cta && $cta->description)
                            <div class="mx-auto mt-4 max-w-6xl text-sm leading-8 text-white/90 sm:text-base md:text-lg">
                                {!! $cta->description !!}
                            </div>
                        @endif

                        @if($cta && (data_get($cta, 'extra.button_text') || data_get($cta, 'extra.button') || data_get($cta, 'extra.link_text')))
                            <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                                <!-- Contact Button -->
                                <a
                                    href="{{ data_get($cta, 'extra.button_url', route('frontend.contact')) }}"
                                    target="{{ data_get($cta, 'extra.button_target', '_self') }}"
                                    @if(data_get($cta, 'extra.button_target', '_self') === '_blank') rel="noopener noreferrer" @endif
                                    class="inline-flex min-w-[180px] items-center justify-center rounded-xl bg-white px-6 py-3 font-semibold text-[#FC5124] shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
                                >
                                    {{ data_get($cta, 'extra.button_text', data_get($cta, 'extra.button', data_get($cta, 'extra.link_text', 'Contact Us'))) }}
                                </a>

                                <!-- WhatsApp Button -->
                                <a
                                    href="https://wa.me/919140092133"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    aria-label="Contact us on WhatsApp"
                                    class="inline-flex min-w-[180px] items-center justify-center gap-2 rounded-xl border border-white/20 bg-[#25D366] px-6 py-3 font-semibold text-white shadow-lg transition-all duration-300 hover:-translate-y-1 hover:bg-[#20c55a] hover:shadow-xl"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         width="18"
                                         height="18"
                                         fill="currentColor"
                                         aria-hidden="true"
                                         viewBox="0 0 16 16">
                                        <path d="M13.601 2.326A7.854 7.854 0 0 0 8.004 0C3.589 0 .004 3.584.004 8c0 1.41.368 2.788 1.067 4.004L0 16l4.104-1.063A7.965 7.965 0 0 0 8.004 16c4.415 0 8-3.584 8-8a7.95 7.95 0 0 0-2.403-5.674ZM8.004 14.5a6.47 6.47 0 0 1-3.297-.903l-.236-.14-2.435.63.65-2.37-.154-.244A6.44 6.44 0 0 1 1.504 8c0-3.584 2.916-6.5 6.5-6.5 1.736 0 3.366.675 4.593 1.9A6.456 6.456 0 0 1 14.504 8c0 3.584-2.916 6.5-6.5 6.5Zm3.565-4.886c-.195-.098-1.153-.57-1.331-.635-.178-.065-.308-.098-.438.098-.13.195-.503.635-.617.765-.113.13-.227.146-.422.049-.195-.098-.824-.304-1.57-.97-.58-.517-.972-1.155-1.086-1.35-.114-.195-.012-.3.086-.397.088-.087.195-.227.292-.34.097-.114.13-.195.195-.325.065-.13.032-.244-.016-.341-.049-.098-.438-1.056-.6-1.446-.158-.38-.319-.329-.438-.335l-.373-.006c-.13 0-.341.049-.52.244-.178.195-.682.667-.682 1.625 0 .959.699 1.885.796 2.015.098.13 1.378 2.104 3.339 2.95.467.202.832.322 1.116.412.469.149.896.128 1.234.078.376-.056 1.153-.471 1.315-.926.162-.454.162-.844.114-.926-.049-.081-.178-.13-.373-.227Z"/>
                                    </svg>
                                    WhatsApp
                                </a>
                            </div>
                        @endif
                    </div>
                </section>
                @break

            {{-- DEFAULT FALLBACK SECTION --}}
            @default
                @php $defaultImage = $item->image ?? $section->image; @endphp
                <section id="{{ $sectionId }}" class="bg-white py-16 sm:py-20" aria-label="{{ $sectionTitle ?: 'Overview' }}">
                    <div class="mx-auto max-w-7xl px-6">
                        @if($sectionTitle)
                            <div class="text-center">
                                <h2 class="text-2xl font-bold text-[#FD5528] sm:text-3xl">{{ $sectionTitle }}</h2>
                                @if($sectionSubtitle)
                                    <p class="mt-2 text-base leading-6 text-slate-600">{{ $sectionSubtitle }}</p>
                                @endif
                            </div>
                        @endif

                        <div class="mt-10 space-y-8">
                            @foreach($items as $item)
                                @php $rowImage = $item->image ?: $section->image; @endphp
                                <div class="grid gap-8 rounded-[2rem] border border-slate-200 bg-white p-6 shadow-[0_14px_40px_rgba(15,23,42,0.06)] lg:grid-cols-2 lg:items-center">
                                    <div>
                                        @if($item->title)
                                            <h3 class="text-2xl font-bold text-slate-950">{!! $item->title !!}</h3>
                                        @endif
                                        @if($item->description)
                                            <div class="mt-4 text-base leading-8 text-slate-600">{!! $item->description !!}</div>
                                        @endif
                                    </div>

                                    @if($rowImage)
                                        <img
                                            src="{{ $mediaUrl($rowImage) }}"
                                            alt="{{ strip_tags((string) ($item->title ?: $sectionTitle ?: $pageTitle)) }}"
                                            width="1200"
                                            height="720"
                                            loading="lazy"
                                            decoding="async"
                                            onerror="this.onerror=null; this.src='{{ asset('assets/images/banner.png') }}';"
                                            class="w-full rounded-[1.5rem] object-cover shadow-[0_16px_36px_rgba(15,23,42,0.10)]"
                                        >
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
        @endswitch
    @endforeach

    @if($contentSections->isEmpty())
        @if(in_array($page->slug, ['about-backend-coders-software-digital-marketing-company-in-kanpur', 'seo-rocket-pro'], true))
            @php
                $isAbout = $page->slug === 'about-backend-coders-software-digital-marketing-company-in-kanpur';
                $intro = $isAbout
                    ? 'Backend Coders India is a software and digital services team based in Kanpur. We work with businesses to plan, build, and improve websites, custom applications, and online customer journeys.'
                    : 'SEO Rocket Pro is a structured search optimization service for businesses that want to improve discoverability through useful content, sound technical foundations, and ongoing measurement. Search positions and lead volumes are not guaranteed.';
            @endphp
            <section class="bg-gradient-to-b from-orange-50 to-white py-16 sm:py-24">
                <div class="mx-auto max-w-5xl px-6">
                    <div class="rounded-[2rem] border border-orange-100 bg-white p-8 shadow-xl shadow-orange-100/60 sm:p-12">
                        <span class="inline-flex rounded-full bg-orange-50 px-4 py-2 text-xs font-bold uppercase tracking-[0.2em] text-[#FD5528]">{{ $isAbout ? 'About Backend Coders India' : 'SEO Rocket Pro' }}</span>
                        <h2 class="mt-5 text-3xl font-bold tracking-tight text-slate-950 sm:text-4xl">{{ $isAbout ? 'Software and digital services built around your goals' : 'A practical plan for stronger organic visibility' }}</h2>
                        <p class="mt-5 text-lg leading-8 text-slate-600">{{ $intro }}</p>
                        <div class="mt-10 grid gap-5 md:grid-cols-3">
                            @foreach(($isAbout ? [['Plan with clarity', 'Define scope, priorities, and the right technical approach before work begins.'], ['Build for real use', 'Create accessible websites and software shaped around customer and team needs.'], ['Improve over time', 'Review performance and make practical improvements as requirements change.']] : [['Technical health', 'Review crawlability, page experience, site structure, and implementation issues.'], ['Useful content', 'Align page content with customer questions and clear business information.'], ['Measure progress', 'Track agreed indicators and use findings to guide the next round of work.']]) as [$heading, $copy])
                                <article class="rounded-2xl border border-slate-200 bg-slate-50 p-6"><h3 class="text-lg font-bold text-slate-900">{{ $heading }}</h3><p class="mt-3 leading-7 text-slate-600">{{ $copy }}</p></article>
                            @endforeach
                        </div>
                        <a href="{{ route('frontend.contact') }}" class="mt-9 inline-flex items-center rounded-xl bg-[#FD5528] px-6 py-3 font-semibold text-white shadow-lg shadow-orange-200 transition hover:bg-orange-600">Discuss your project</a>
                    </div>
                </div>
            </section>
        @else
            <section class="bg-white py-16 sm:py-20"><div class="mx-auto max-w-7xl px-6 text-center"><h2 class="text-2xl font-bold text-slate-900">More information coming soon</h2><p class="mt-4 text-slate-600">Contact our team if you need details about this topic.</p></div></section>
        @endif
    @endif
</main>
@endsection
