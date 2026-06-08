@extends('component.main')

@section('content')
@php
    $sections = $page?->sections ?? collect();
    $heroSection = $sections->firstWhere('type', 'hero');
    $heroItem = $heroSection?->items?->first();
    $contentSections = $sections->reject(fn ($section) => \Illuminate\Support\Str::lower((string) $section->type) === 'hero')->values();
    $sectionAnchors = $contentSections->map(function ($section, $index) {
        return [
            'id' => 'section-' . ($section->id ?? $index),
            'label' => $section->title ?: ucfirst(str_replace(['-', '_'], ' ', (string) $section->type)),
        ];
    });

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

        $storagePath = \Illuminate\Support\Str::startsWith($path, 'storage/')
            ? \Illuminate\Support\Str::after($path, 'storage/')
            : $path;

        if (\Illuminate\Support\Facades\Storage::disk('public')->exists($storagePath)) {
            $mimeType = \Illuminate\Support\Facades\Storage::disk('public')->mimeType($storagePath) ?: 'image/jpeg';
            $contents = \Illuminate\Support\Facades\Storage::disk('public')->get($storagePath);

            if ($contents !== false && $contents !== null) {
                return 'data:' . $mimeType . ';base64,' . base64_encode($contents);
            }
        }

        if (file_exists(public_path($path))) {
            return asset($path);
        }

        if (file_exists(public_path('storage/' . $storagePath))) {
            return asset('storage/' . $storagePath);
        }

        return asset('assets/images/banner.png');
    };

    $firstItem = fn ($section) => $section?->items?->first();
    $heroExtra = $heroItem?->extra ?? [];
    $pageTitle = $page->meta_title ?: $page->title;
    $pageDescription = $page->meta_description;
    $faqSections = $sections->filter(fn ($section) => \Illuminate\Support\Str::lower((string) $section->type) === 'faq');
    $faqSchema = $faqSections->flatMap(function ($section) {
        return ($section->items ?? collect())->map(function ($item) {
            return [
                'question' => trim(strip_tags((string) ($item->title ?? ''))),
                'answer' => trim(strip_tags((string) ($item->description ?? ''))),
            ];
        });
    })->filter(fn ($item) => filled($item['question']) && filled($item['answer']))->values();
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
@endphp

@push('head')
    @if($faqSchema->isNotEmpty())
        <script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => $faqSchema->map(function ($faq) {
        return [
            '@type' => 'Question',
            'name' => $faq['question'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['answer'],
            ],
        ];
    })->values(),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
        </script>
    @endif

    <script type="application/ld+json">
{!! json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

<main class="bg-white">
    <!-- @auth
        <section class="border-b border-slate-200 bg-slate-50/80">
            <div class="mx-auto flex max-w-7xl flex-col gap-4 px-6 py-4 lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">CMS Links</p>
                    <h2 class="mt-1 text-lg font-semibold text-slate-900">Manage this dynamic page</h2>
                </div>

                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('pages.index') }}" class="rounded-xl border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">
                        All Pages
                    </a>
                    <a href="{{ route('pages.create') }}" class="rounded-xl bg-[#FD5528] px-4 py-2 text-sm font-semibold text-white transition hover:bg-orange-600">
                        Create Page
                    </a>
                    <a href="{{ route('pages.edit', $page->id) }}" class="rounded-xl border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">
                        Edit This Page
                    </a>
                </div>
            </div>
        </section>
    @endauth -->

    <!-- @if($sectionAnchors->isNotEmpty())
        <section class="border-b border-slate-200 bg-white/95">
            <div class="mx-auto max-w-7xl px-6 py-4">
                <div class="flex flex-wrap items-center gap-3">
                    <span class="text-xs font-semibold uppercase tracking-[0.35em] text-slate-400">Jump to section</span>
                    @foreach($sectionAnchors as $anchor)
                        <a href="#{{ $anchor['id'] }}" class="rounded-full border border-slate-200 px-4 py-2 text-sm text-slate-600 transition hover:border-[#FD5528] hover:text-[#FD5528]">
                            {{ $anchor['label'] }}
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif -->

    <section class="relative overflow-hidden bg-[linear-gradient(135deg,#fff7f2_0%,#ffffff_45%,#fff1eb_100%)] py-16 text-white sm:py-20 lg:py-24">
        <div class="pointer-events-none absolute inset-0 opacity-50">
            <div class="absolute -top-20 right-0 h-72 w-72 rounded-full bg-white/50 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 h-72 w-72 rounded-full bg-[#FD5528]/15 blur-3xl"></div>
        </div>

        <div class="relative mx-auto grid max-w-7xl items-center gap-12 px-6 lg:grid-cols-2">
            <div>
                
                <h1 class="mt-5 text-4xl font-bold leading-tight text-black sm:text-5xl lg:text-6xl pb-4">
                    @if($heroItem && $heroItem->title)
                        {!! $heroItem->title !!}
                    @else
                        {{ $pageTitle }}
                    @endif
                </h1>

                @if($heroExtra['eyebrow'] ?? null)
                    <p class="my-4 text-sm font-semibold uppercase tracking-[0.25em] text-[#FD5528]">
                        {{ $heroExtra['eyebrow'] }}
                    </p>
                @else
                    <p class="my-4 text-sm font-semibold uppercase tracking-[0.25em] text-[#FD5528]">
                        {{ $pageTitle }}
                    </p>
                @endif

                @if($heroItem && $heroItem->description)
                    <div class="mt-6 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">
                        {!! $heroItem->description !!}
                    </div>
                @elseif($pageDescription)
                    <p class="mt-6 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">
                        {{ $pageDescription }}
                    </p>
                @endif

                @if(($heroExtra['sub_text'] ?? null) || ($heroExtra['button'] ?? null) || ($heroExtra['button_text'] ?? null))
                    <div class="mt-8 flex flex-col gap-4 sm:flex-row">
                        @if($heroExtra['button'] ?? null || $heroExtra['button_text'] ?? null)
                            <a
                                href="{{ $heroExtra['button_url'] ?? route('frontend.contact') }}"
                                target="{{ $heroExtra['button_target'] ?? '_self' }}"
                                class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-6 py-3 font-semibold text-white shadow-[0_16px_36px_rgba(253,85,40,0.24)] transition hover:-translate-y-0.5 hover:bg-[#e94c20]"
                            >
                                {{ $heroExtra['button'] ?? $heroExtra['button_text'] }}
                            </a>
                        @endif

                        @if($heroExtra['secondary_button'] ?? null)
                            <a
                                href="{{ $heroExtra['secondary_button_url'] ?? '#' }}"
                                target="{{ $heroExtra['secondary_button_target'] ?? '_self' }}"
                                class="inline-flex items-center justify-center rounded-2xl border border-slate-300 bg-white px-6 py-3 font-semibold text-slate-700 shadow-sm transition hover:-translate-y-0.5 hover:border-[#FD5528] hover:text-[#FD5528]"
                            >
                                {{ $heroExtra['secondary_button'] }}
                            </a>
                        @endif
                    </div>
                @endif
            </div>

            <div class="relative">
                @if($heroItem && $heroItem->image)
                    <img
                        src="{{ $mediaUrl($heroItem->image) }}"
                        alt="{{ $heroItem->title }}"
                        class="h-[420px] w-full rounded-[2.25rem] object-cover shadow-[0_30px_80px_rgba(15,23,42,0.18)] ring-1 ring-black/5"
                    >
                @else
                    <div class="flex h-[420px] items-center justify-center rounded-[2.25rem] border border-slate-200 bg-white p-8 text-center shadow-[0_20px_60px_rgba(15,23,42,0.08)]">
                        <div>
                            <p class="text-sm uppercase tracking-[0.4em] text-[#FD5528]/70">Dynamic Page</p>
                            <p class="mt-4 text-2xl font-semibold text-slate-900">Add a hero image in the CMS to show it here.</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    @foreach($contentSections as $section)
        @php
            $items = $section->items ?? collect();
            $sectionType = \Illuminate\Support\Str::lower((string) $section->type);
            $sectionTitle = $section->title ?: data_get($items->first(), 'extra.heading');
            $sectionSubtitle = data_get($items->first(), 'extra.subtitle') ?: data_get($items->first(), 'extra.sub_text') ?: data_get($section, 'extra.subtitle') ?: null;
            $sectionId = 'section-' . ($section->id ?? $loop->index);
        @endphp

        @switch($sectionType)
            @case('social-media-content-strategy')
                @php
                    $leadItem = $firstItem($section);
                    $featureItems = $items->slice(1)->values();
                    $leadTitle = $sectionTitle ?: data_get($leadItem, 'title', 'Content Strategy and Planning');
                    $leadDescription = data_get($leadItem, 'description');
                    $leadImage = $section->image ?: data_get($leadItem, 'image') ?: data_get($items->first(), 'image');
                    $leadImageAlt = data_get($leadItem, 'title', $leadTitle);
                @endphp

                <section id="{{ $sectionId }}" class="bg-white py-20 sm:py-24">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="grid items-center gap-10 lg:grid-cols-[0.95fr_1.05fr] lg:gap-14">
                            <div class="order-2 lg:order-1">
                                <div class="overflow-hidden rounded-[2rem] border border-slate-200 bg-slate-50 shadow-[0_25px_70px_rgba(15,23,42,0.10)]">
                                    @if($leadImage)
                                        <img
                                            src="{{ $mediaUrl($leadImage) }}"
                                            alt="{{ $leadImageAlt }}"
                                            class="h-[320px] w-full object-cover sm:h-[420px] lg:h-[560px]"
                                        >
                                    @else
                                        <div class="flex h-[320px] items-center justify-center bg-[linear-gradient(135deg,#fff7f2_0%,#fff_60%,#fff1eb_100%)] px-8 text-center sm:h-[420px] lg:h-[560px]">
                                            <div>
                                                <p class="text-sm font-semibold uppercase tracking-[0.35em] text-[#FD5528]">Content Strategy</p>
                                                <p class="mt-4 text-2xl font-bold text-slate-900">Add an image to highlight this section.</p>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="order-1 text-center lg:order-2 lg:text-left">
                                <div class="mx-auto max-w-4xl lg:mx-0">
                                    <span class="inline-flex rounded-full bg-orange-50 px-4 py-2 text-xs font-semibold uppercase tracking-[0.25em] text-[#FD5528]">
                                        Content Strategy
                                    </span>

                                    <h2 class="mt-6 text-4xl font-black leading-tight text-slate-900 md:text-5xl">
                                        {{ $leadTitle }}
                                    </h2>

                                    @if($leadDescription)
                                        <div class="mx-auto mt-6 max-w-7xl space-y-4 text-lg leading-8 text-slate-600 lg:mx-0">
                                            {!! $leadDescription !!}
                                        </div>
                                    @endif

                                    @if($leadItem && $leadItem->title && $leadItem->title !== $leadTitle)
                                        <p class="mt-6 text-base leading-8 text-slate-600">
                                            {!! $leadItem->title !!}
                                        </p>
                                    @endif
                                </div>

                                <div class="mt-12 grid gap-5 sm:grid-cols-2 xl:grid-cols-3">
                                    @forelse($featureItems as $item)
                                        <div class="rounded-3xl border border-slate-100 bg-white p-7 text-center shadow-sm">
                                            <h3 class="text-lg font-bold text-slate-900">
                                                {{ $item->title }}
                                            </h3>
                                            @if($item->description)
                                                <div class="mt-3 text-sm leading-7 text-slate-600">
                                                    {!! $item->description !!}
                                                </div>
                                            @endif
                                        </div>
                                    @empty
                                        <div class="hidden rounded-3xl border border-slate-100 bg-white p-7 text-center text-slate-500 shadow-sm sm:col-span-2 xl:col-span-3">
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @break

            @case('social-media-reels-strategy')
                @php
                    $leadItem = $firstItem($section);
                    $featureItems = $items->slice(1)->values();
                    $leadTitle = $sectionTitle ?: data_get($leadItem, 'title', 'Reels and Creative Content Strategy');
                    $leadDescription = data_get($leadItem, 'description');
                @endphp

                <section id="{{ $sectionId }}" class="relative overflow-hidden bg-white py-20 sm:py-28">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(253,85,40,0.05),transparent_30%)]"></div>

                    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="mx-auto max-w-4xl text-center">
                            <span class="inline-flex rounded-full border border-[#FD5528]/10 bg-[#FD5528]/5 px-5 py-2 text-xs font-semibold uppercase tracking-[0.28em] text-[#FD5528]">
                                Creative Content
                            </span>

                            <h2 class="mt-7 text-4xl font-black leading-[1.08] tracking-tight text-black md:text-5xl xl:text-6xl">
                                {{ $leadTitle }}
                            </h2>

                            @if($leadDescription)
                                <div class="mx-auto mt-8 max-w-7xl space-y-5 text-lg leading-8 text-slate-600">
                                    {!! $leadDescription !!}
                                </div>
                            @endif
                        </div>

                        <div class="mt-12 grid justify-items-center gap-6 sm:grid-cols-2 xl:grid-cols-3">
                            @forelse($featureItems as $item)
                                <div class="group relative w-full max-w-sm overflow-hidden rounded-[2rem] border border-slate-200 bg-white p-8 text-center shadow-[0_12px_45px_rgba(15,23,42,0.05)] transition-all duration-300 hover:-translate-y-1 hover:border-[#FD5528]/20 hover:shadow-[0_25px_70px_rgba(253,85,40,0.10)]">
                                    <div class="absolute right-0 top-0 h-28 w-28 translate-x-10 -translate-y-10 rounded-full bg-[#FD5528]/5 blur-3xl transition-all duration-300 group-hover:bg-[#FD5528]/10"></div>

                                    <div class="relative">
                                        <div class="mb-5 inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-[#FD5528]/10 text-sm font-bold text-[#FD5528]">
                                            {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                                        </div>

                                        <h3 class="text-xl font-black leading-snug text-black">
                                            {{ $item->title }}
                                        </h3>

                                        @if($item->description)
                                            <div class="mt-4 text-sm leading-7 text-slate-600">
                                                {!! $item->description !!}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @empty
                                <div class="hidden w-full rounded-[2rem] border border-slate-200 bg-white p-8 text-center text-slate-500 shadow-[0_12px_45px_rgba(15,23,42,0.05)] sm:col-span-2 xl:col-span-3">
                                 
                                </div>
                            @endforelse
                        </div>
                    </div>
                </section>
                @break

            @case('social-media-paid-campaigns')
                @php
                    $leadItem = $firstItem($section);
                    $featureItems = $items->slice(1)->values();
                    $leadTitle = $sectionTitle ?: data_get($leadItem, 'title', 'Paid Social Media Campaign Management');
                    $leadDescription = data_get($leadItem, 'description');
                @endphp

                <section id="{{ $sectionId }}" class="bg-white py-20 sm:py-24">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="mx-auto max-w-4xl text-center">
                            <span class="inline-flex rounded-full bg-orange-50 px-4 py-2 text-xs font-semibold uppercase tracking-[0.25em] text-[#FD5528]">
                                Paid Social Media
                            </span>

                            <h2 class="mt-6 text-4xl font-black leading-tight text-slate-900 md:text-5xl">
                                {{ $leadTitle }}
                            </h2>

                            @if($leadDescription)
                                <div class="mx-auto mt-6 max-w-7xl space-y-4 text-lg leading-8 text-slate-600">
                                    {!! $leadDescription !!}
                                </div>
                            @endif
                        </div>

                        <div class="mt-12 grid justify-items-center gap-5 sm:grid-cols-2 xl:grid-cols-3">
                            @forelse($featureItems as $item)
                                <div class="w-full max-w-sm rounded-3xl border border-slate-100 bg-white p-7 text-center shadow-sm">
                                    <h3 class="text-lg font-bold text-slate-900">
                                        {{ $item->title }}
                                    </h3>
                                    @if($item->description)
                                        <div class="mt-3 text-sm leading-7 text-slate-600">
                                            {!! $item->description !!}
                                        </div>
                                    @endif
                                </div>
                            @empty
                                <div class="hidden w-full rounded-3xl border border-slate-100 bg-white p-7 text-center text-slate-500 shadow-sm sm:col-span-2 xl:col-span-3">
                                 
                                </div>
                            @endforelse
                        </div>
                    </div>
                </section>
                @break

            @case('about')
            @case('content')
            @case('text')
                @php $item = $firstItem($section); @endphp
                <!-- <section id="{{ $sectionId }}" class="bg-white py-16 sm:py-20">
                    <div class="mx-auto grid max-w-7xl gap-10 px-6 lg:grid-cols-2 lg:items-center">
                        <div class="">
                            @if($sectionTitle)
                                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">
                                    {{ $sectionTitle }}
                                </p>
                            @endif

                            @if($item && $item->title)
                                <h2 class="mt-4 text-3xl font-bold leading-tight text-slate-900 sm:text-4xl">
                                    {!! $item->title !!}
                                </h2>
                            @endif

                            @if($item && $item->description)
                                <div class="mt-6 space-y-4 text-base leading-8 text-slate-600">
                                    {!! nl2br(e($item->description)) !!}
                                </div>
                            @endif

                            @if(data_get($item, 'extra.button_text') || data_get($item, 'extra.link_text'))
                                <a
                                    href="{{ data_get($item, 'extra.button_url', route('frontend.contact')) }}"
                                    target="{{ data_get($item, 'extra.button_target', '_self') }}"
                                    class="mt-8 inline-flex items-center justify-center rounded-xl bg-[#FD5528] px-6 py-3 font-semibold text-white shadow-lg shadow-[#FD5528]/20 transition hover:bg-orange-600"
                                >
                                    {{ data_get($item, 'extra.button_text', data_get($item, 'extra.link_text', 'Learn More')) }}
                                </a>
                            @endif
                        </div>

                        <div>
                            @if($item && $item->image)
                                <img
                                    src="{{ $mediaUrl($item->image) }}"
                                    alt="{{ $item->title ?? $sectionTitle }}"
                                    class="w-full rounded-[1.75rem] object-cover shadow-2xl shadow-slate-200"
                                >
                            @endif
                        </div>
                    </div>
                </section> -->

                @php $item = $firstItem($section); @endphp

<section id="{{ $sectionId }}" class="bg-white py-16 sm:py-20">

    @if($sectionType === 'content')
        <!-- ✅ CENTERED LAYOUT -->
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
                        class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-6 py-3 font-semibold text-white shadow-[0_16px_36px_rgba(253,85,40,0.18)] transition hover:-translate-y-0.5 hover:bg-[#e94c20]"
                    >
                        {{ data_get($item, 'extra.button_text', data_get($item, 'extra.link_text', 'Learn More')) }}
                    </a>
                </div>
            @endif

        </div>

    @else
        <!-- ✅ DEFAULT (LEFT + IMAGE) -->
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
                        class="mt-8 inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-6 py-3 font-semibold text-white shadow-[0_16px_36px_rgba(253,85,40,0.18)] transition hover:-translate-y-0.5 hover:bg-[#e94c20]"
                    >
                        {{ data_get($item, 'extra.button_text', data_get($item, 'extra.link_text', 'Learn More')) }}
                    </a>
                @endif
            </div>

            <div>
                @if($item && $item->image)
                    <img
                        src="{{ $mediaUrl($item->image) }}"
                        alt="{{ $item->title ?? $sectionTitle }}"
                        class="w-full rounded-[1.75rem] object-cover shadow-2xl shadow-slate-200"
                    >
                @endif
            </div>

        </div>
    @endif

</section>
                @break
                

            @case('services')
            @case('cards')
            @case('features')


                <section id="{{ $sectionId }}" class="bg-slate-50 py-16 sm:py-20">
                    <div class="mx-auto max-w-7xl px-6 py-4 ">
                        @if($sectionTitle)
                            <div class="mx-auto max-w-7xl text-center">
                                <p class="text-2xl font-bold p-2 text-[#FD5528] my-12">
                                    {{ $sectionTitle }}
                                </p>
                                @if($sectionSubtitle)
                                    <p class="mx-auto max-w-3xl text-base leading-7 text-[#000000] mb-4">
                                        {{ $sectionSubtitle }}
                                    </p>
                                @endif
                            </div>
                        @endif

                        

                     <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">

@foreach($items as $item)

@php
    $extra = $item->extra ?? [];
@endphp

<article data-aos="fade-up"
  class="group relative overflow-hidden rounded-[2rem] border border-orange-100 bg-white p-7 shadow-[0_16px_40px_rgba(15,23,42,0.08)] transition duration-500 hover:-translate-y-1 hover:shadow-[0_24px_60px_rgba(253,85,40,0.12)] text-gray-900">

  <div class="relative z-10 flex flex-col items-center text-center space-y-4">

    <!-- LABEL -->
    <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">
      {{ data_get($extra, 'label', 'Service') }}
    </span>

    <!-- ICON -->
    <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-inner">

      @if($item->image)
        <img src="{{ $mediaUrl($item->image) }}" class="h-14 w-14 object-contain" />
      @else
        <img src="{{ asset('assets/images/bci_icon.png') }}" alt="" class="h-12 w-12 object-contain" />
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

            @case('faq')
                <section id="{{ $sectionId }}" class="bg-white py-16 sm:py-20">
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
                                            <span>{!! $item->title !!}</span>
                                            <span class="text-2xl leading-none text-[#FD5528] group-open:rotate-45">+</span>
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

            @case('stats')
            @case('metrics')
            <section id="{{ $sectionId }}" class="bg-gradient-to-br from-slate-50 via-slate-100 to-[#fff4f0] py-16 sm:py-20">

                <div class="mx-auto max-w-7xl px-6 text-center">
      <!-- SECTION HEADER -->
        <div class="mx-auto mb-16 max-w-4xl text-center">

            <span
                class="inline-flex items-center rounded-full
                       border border-[#FD5528]/20
                       bg-[#FD5528]/10
                       px-5 py-2
                       text-xs font-semibold uppercase
                       tracking-[0.35em]
                       text-[#FD5528]"
            >
                {{ $sectionTitle }}
            </span>

            <h2 class="mt-6 text-4xl font-bold tracking-tight text-slate-900 lg:text-5xl">
                PPC Services Designed To
                <span class="text-[#FD5528]">Drive Results</span>
            </h2>

            <p class="mx-auto mt-5 max-w-5xl text-lg leading-8 text-slate-600">
                Strategic campaign planning, optimization and conversion-focused
                advertising solutions designed to increase visibility,
                generate leads and improve return on ad spend.
            </p>

        </div>
                    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

                        @foreach($items as $item)
                            @php $itemExtra = $item->extra ?? []; @endphp

                            <div
                                class="group relative overflow-hidden rounded-[28px]
                                    border border-slate-200
                                    bg-white
                                    p-7
                                    shadow-[0_12px_40px_rgba(15,23,42,0.08)]
                                    transition-all duration-500
                                    hover:-translate-y-2
                                    hover:border-[#FD5528]/30
                                    hover:shadow-[0_25px_60px_rgba(253,85,40,0.15)]"
                            >

                                <!-- Top Accent -->
                                <div class="absolute left-0 top-0 h-1 w-full bg-gradient-to-r from-[#020000] via-[#0e0300] to-[#000000]"></div>

                                <!-- Background Glow -->
                                <div
                                    class="absolute -right-10 -top-10 h-32 w-32 rounded-full
                                        bg-[#FD5528]/5 blur-3xl
                                        transition-all duration-500
                                        group-hover:bg-[#FD5528]/10"
                                ></div>

                                <!-- Label -->
                                <!-- @if($sectionTitle)
                                    <span
                                        class="relative inline-flex items-center rounded-full
                                           px-4 py-2
                                            text-[11px] font-semibold uppercase
                                            tracking-[0.25em] text-[#FD5528]"
                                    >
                                        {{ $sectionTitle }}
                                    </span>
                                @endif -->

                                <!-- Value -->
                                <div class="relative mt-5">

                                    <p
                                        class="text-xl lg:text-3xl
                                            font-extrabold tracking-tight
                                            text-[#FD5528]"
                                    >
                                        {{ data_get($itemExtra, 'value', $item->title) }}
                                    </p>

                                </div>

                                <!-- Divider -->
                                <div class="mt-5 h-px w-full bg-gradient-to-r from-[#FD5528]/20 via-slate-200 to-transparent"></div>

                                <!-- Description -->
                                @if($item->description)
                                    <div
                                        class="mt-5 text-sm leading-7
                                            text-slate-600 text-start"
                                    >
                                        {!! $item->description !!}
                                    </div>
                                @endif

                                <!-- Hover Bottom Bar -->
                                <div
                                    class="absolute bottom-0 left-0 h-1 w-0
                                        bg-[#FD5528]
                                        transition-all duration-500
                                        group-hover:w-full"
                                ></div>

                            </div>

                        @endforeach

                    </div>

                </div>

            </section>
                @break

            @case('timeline')
            @case('process')
            @case('steps')
                <section id="{{ $sectionId }}" class="bg-slate-50 py-16 sm:py-20">
                    <div class="mx-auto max-w-7xl px-6">
                        @if($sectionTitle)
                            <div class="text-center">
                                <p class="text-xl font-bold  text-[#FD5528]">{{ $sectionTitle }}</p>
                                @if($sectionSubtitle)
                                    <p class="mt-2 text-medium leading-6 text-slate-600">{{ $sectionSubtitle }}</p>
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

            @case('gallery')
                <section id="{{ $sectionId }}" class="bg-white py-16 sm:py-20">
                    <div class="mx-auto max-w-7xl px-6">
                          <div class="flex flex-col items-center text-center">
               
                     
                        @if($sectionTitle)
                            <div class="text-center">
                                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">{{ $sectionTitle }}</p>
                                @if($sectionSubtitle)
                                    <p class="mt-2 text-sm leading-6 text-slate-600">{{ $sectionSubtitle }}</p>
                                @endif
                            </div>
                        @endif

                        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            @foreach($items as $item)
                                <div class="overflow-hidden rounded-[1.75rem]">
                                    @if($item->image)
                                        <img src="{{ $mediaUrl($item->image) }}" alt="{{ $item->title }}" class="h-60 w-full object-cover">
                                    @endif
                                    <div 
    class="group relative overflow-hidden rounded-[1.75rem] border border-orange-100 bg-white p-7 shadow-[0_12px_40px_rgba(15,23,42,0.06)] transition duration-500 hover:-translate-y-2 hover:border-[#F19737]/30 hover:shadow-[0_20px_60px_rgba(241,151,55,0.16)]"
    data-aos="zoom-in"
>

    <!-- CONTENT -->
    <div class="relative z-10 mt-6 text-center">

        @if($item->title)

            <h3 
                class="text-xl sm:text-2xl font-medium leading-tight text-[#2C2B44] transition duration-300 group-hover:text-[#F19737]"
            >

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

    <!-- HOVER LINE -->
    <div class="absolute bottom-0 left-0 h-1 w-0 bg-gradient-to-r from-[#F19737] to-[#da7840] transition-all duration-500 group-hover:w-full"></div>

</div>
                                    <!-- <div class="p-5">
                                        @if($item->title)
                                            <h3 class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">{{ $item->title }}</h3>
                                        @endif
                                        @if($item->description)
                                            <p class="mt-2 text-sm leading-7 text-slate-600">{{ $item->description }}</p>
                                        @endif
                                    </div> -->
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                @break



                
            @case('cta')
                @php $cta = $items->first(); @endphp
                <section id="{{ $sectionId }}" class="relative overflow-hidden bg-gradient-to-r from-[#FC5124] via-[#FD5528] to-orange-400 py-20 text-white">
                    <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top_left,_white,_transparent_50%)]"></div>
                    <div class="relative mx-auto max-w-5xl px-6 text-center">
                        @if($cta && $cta->title)
                            <h2 class="text-3xl font-bold tracking-tight sm:text-4xl md:text-5xl">
                                {!! $cta->title !!}
                            </h2>
                        @endif

                        @if($cta && $cta->description)
                            <div class="mx-auto mt-4 max-w-6xl text-sm leading-8 text-white/85 sm:text-base md:text-lg">
                                {!! $cta->description !!}
                            </div>
                        @endif

                        @if($cta && (data_get($cta, 'extra.button_text') || data_get($cta, 'extra.button') || data_get($cta, 'extra.link_text')))
                         <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">

    <!-- Contact Button -->
    <a
        href="{{ data_get($cta, 'extra.button_url', route('frontend.contact')) }}"
        target="{{ data_get($cta, 'extra.button_target', '_self') }}"
        class="inline-flex min-w-[180px] items-center justify-center rounded-xl bg-white px-6 py-3 font-semibold text-[#FC5124] shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
    >
        {{ data_get($cta, 'extra.button_text', data_get($cta, 'extra.button', data_get($cta, 'extra.link_text', 'Contact Us'))) }}
    </a>

    <!-- WhatsApp Button -->
    <a
        href="https://wa.me/919839774652"
        target="_blank"
        class="inline-flex min-w-[180px] items-center justify-center gap-2 rounded-xl border border-white/20 bg-[#25D366] px-6 py-3 font-semibold text-white shadow-lg transition-all duration-300 hover:-translate-y-1 hover:bg-[#20c55a] hover:shadow-xl"
    >
        <svg xmlns="http://www.w3.org/2000/svg"
             width="18"
             height="18"
             fill="currentColor"
             viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 8.004 0C3.589 0 .004 3.584.004 8c0 1.41.368 2.788 1.067 4.004L0 16l4.104-1.063A7.965 7.965 0 0 0 8.004 16c4.415 0 8-3.584 8-8a7.95 7.95 0 0 0-2.403-5.674ZM8.004 14.5a6.47 6.47 0 0 1-3.297-.903l-.236-.14-2.435.63.65-2.37-.154-.244A6.44 6.44 0 0 1 1.504 8c0-3.584 2.916-6.5 6.5-6.5 1.736 0 3.366.675 4.593 1.9A6.456 6.456 0 0 1 14.504 8c0 3.584-2.916 6.5-6.5 6.5Zm3.565-4.886c-.195-.098-1.153-.57-1.331-.635-.178-.065-.308-.098-.438.098-.13.195-.503.635-.617.765-.113.13-.227.146-.422.049-.195-.098-.824-.304-1.57-.97-.58-.517-.972-1.155-1.086-1.35-.114-.195-.012-.3.086-.397.088-.087.195-.227.292-.34.097-.114.13-.195.195-.325.065-.13.032-.244-.016-.341-.049-.098-.438-1.056-.6-1.446-.158-.38-.319-.329-.438-.335l-.373-.006c-.13 0-.341.049-.52.244-.178.195-.682.667-.682 1.625 0 .959.699 1.885.796 2.015.098.13 1.378 2.104 3.339 2.95.467.202.832.322 1.116.412.469.149.896.128 1.234.078.376-.056 1.153-.471 1.315-.926.162-.454.162-.844.114-.926-.049-.081-.178-.13-.373-.227Z"/>
        </svg>

        WhatsApp
    </a>

</div>
                        @endif

<!--                         
                    <a href="{{ route('frontend.contact') }}"
                    class="inline-block mt-6 rounded-2xl bg-white px-6 py-3 font-semibold text-[#FD5528] transition hover:bg-gray-100 hover:-translate-y-0.5">
                    Start Now
                    </a> -->
                    </div>
                </section>
                @break

            @default
                <section id="{{ $sectionId }}" class="bg-white py-16 sm:py-20">
                    <div class="mx-auto max-w-7xl px-6">
                        @if($sectionTitle)
                            <div class="text-center">
                                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">{{ $sectionTitle }}</p>
                                @if($sectionSubtitle)
                                    <p class="mt-2 text-sm leading-6 text-slate-600">{{ $sectionSubtitle }}</p>
                                @endif
                            </div>
                        @endif

                        <div class="mt-10 space-y-8">
                            @foreach($items as $item)
                                <div class="grid gap-8 rounded-[2rem] border border-slate-200 bg-white p-6 shadow-[0_14px_40px_rgba(15,23,42,0.06)] lg:grid-cols-2 lg:items-center">
                                    <div>
                                        @if($item->title)
                                            <h3 class="text-2xl font-bold text-slate-950">{!! $item->title !!}</h3>
                                        @endif
                                        @if($item->description)
                                            <div class="mt-4 text-base leading-8 text-slate-600">{!! $item->description !!}</div>
                                        @endif
                                    </div>

                                    @if($item->image)
                                        <img src="{{ $mediaUrl($item->image) }}" alt="{{ $item->title }}" class="w-full rounded-[1.5rem] object-cover shadow-[0_16px_36px_rgba(15,23,42,0.10)]">
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
        @endswitch
    @endforeach

    @if($contentSections->isEmpty())
        <section class="bg-white py-16 sm:py-20">
            <div class="mx-auto max-w-7xl px-6 text-center">
                <h2 class="text-2xl font-bold text-slate-900">This page has not been built out yet.</h2>
                <p class="mt-4 text-slate-600">
                    Add sections and section items in the CMS to render this page dynamically.
                </p>
            </div>
        </section>
    @endif
</main>
@endsection