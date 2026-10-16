@extends('component.main')

@section('content')
@php
    $sections = $page?->sections ?? collect();
    $heroSection = $sections->firstWhere('type', 'hero');
    $heroItem = $heroSection?->items?->first();
    $aboutSection = $sections->firstWhere(fn ($section) => in_array(\Illuminate\Support\Str::lower((string) $section->type), ['about', 'content', 'text']));
    $aboutItem = $aboutSection?->items?->first();
    $servicesSection = $sections->firstWhere(fn ($section) => in_array(\Illuminate\Support\Str::lower((string) $section->type), ['services', 'cards']));
    $featuresSection = $sections->firstWhere(fn ($section) => in_array(\Illuminate\Support\Str::lower((string) $section->type), ['features', 'faq']));
    $ctaSection = $sections->firstWhere(fn ($section) => \Illuminate\Support\Str::lower((string) $section->type) === 'cta');

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
            return route('media.file', ['path' => $storagePath]);
        }

        if (file_exists(public_path($path))) {
            return asset($path);
        }

        return asset('assets/images/banner.png');
    };

    $defaultHero = [
        'title' => 'Build Sustainable <br><span class="text-[#FD5528]">Organic Search Visibility</span>',
        'description_1' => 'We help businesses improve how their sites appear in search by addressing technical issues, useful content, and local visibility. Work starts with your goals and the current state of your website.',
        'description_2' => 'Plans may include research, site improvements, content guidance, and progress reviews. The work and measures are agreed with you; search positions and lead volumes are not guaranteed.',
        'button_text' => 'Get a Search Consultation',
        'button_url' => route('frontend.contact'),
        'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71',
    ];

    $defaultAbout = [
        'title' => 'Search Visibility Services for Indian Businesses',
        'description' => 'We review how people find your website and identify practical improvements to its content, structure, and technical health. Recommendations depend on your audience, resources, and business goals.',
    ];

    $defaultServices = [
        ['label' => 'On-Site Optimization', 'icon' => 'https://img.icons8.com/?size=100&id=11668&format=png&color=ffffff', 'title' => 'On-page search optimization', 'description' => 'Improve how people and search engines understand your pages through clear titles, headings, useful content, and internal links.', 'tags' => ['Page titles', 'Content', 'Links']],
        ['label' => 'Authority Building', 'icon' => 'https://img.icons8.com/?size=100&id=86127&format=png&color=ffffff', 'title' => 'Off-page search optimization', 'description' => 'Build credibility through relevant mentions, useful partnerships, and links earned from appropriate sources.', 'tags' => ['Mentions', 'Partnerships', 'Links']],
        ['label' => 'Site Performance', 'icon' => 'https://img.icons8.com/?size=100&id=110249&format=png&color=ffffff', 'title' => 'Technical site optimization', 'description' => 'Address site speed, mobile usability, structured data, crawlability, and indexing issues that affect discovery and use.', 'tags' => ['Speed', 'Indexing', 'Usability']],
        ['label' => 'Local Visibility', 'icon' => 'https://img.icons8.com/?size=100&id=7880&format=png&color=ffffff', 'title' => 'Local search optimization', 'description' => 'Keep business details accurate, make location information easy to find, and help nearby customers understand your services.', 'tags' => ['Business details', 'Locations', 'Reviews']],
        ['label' => 'Online Store Growth', 'icon' => 'https://img.icons8.com/?size=100&id=85467&format=png&color=ffffff', 'title' => 'E-commerce search optimization', 'description' => 'Improve product and category pages with clear information architecture, useful descriptions, and accessible navigation.', 'tags' => ['Products', 'Categories', 'Navigation']],
        ['label' => 'Search Insights', 'icon' => 'https://img.icons8.com/?size=100&id=59873&format=png&color=ffffff', 'title' => 'Site Audit & Strategy', 'description' => 'Review site performance, competing results, and search data to identify useful next steps and build a maintainable plan.', 'tags' => ['Audit', 'Strategy', 'Analysis']],
    ];

    $defaultFeatures = [
        'Keyword Research',
        'Website Audit',
        'Content Optimization',
        'Technical Improvements',
        'Link Building',
        'Competitor Analysis',
        'On-Page Optimization',
        'Authority and link review',
        'Performance Tracking',
    ];

    $defaultCta = [
        'title' => 'Build a Search Strategy That Supports Growth',
        'description' => 'Work with an SEO team on a practical strategy for technical health, useful content, and long-term organic growth.',
        'button_text' => 'Start Your SEO Journey',
        'button_url' => route('frontend.contact'),
    ];

    $sectionAnchors = $sections->reject(fn ($section) => \Illuminate\Support\Str::lower((string) $section->type) === 'hero')->values()->map(function ($section) {
        return [
            'id' => 'section-' . $section->id,
            'label' => $section->title ?: ucfirst(str_replace(['-', '_'], ' ', (string) $section->type)),
        ];
    });
@endphp

<main class="bg-white">
    @auth
        <section class="border-b border-slate-200 bg-slate-50/80">
            <div class="mx-auto flex max-w-7xl flex-col gap-4 px-6 py-4 lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">CMS Links</p>
                    <h2 class="mt-1 text-lg font-semibold text-slate-900">Manage SEO page</h2>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('pages.index') }}" class="rounded-xl border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">All Pages</a>
                    <a href="{{ route('pages.create') }}" class="rounded-xl bg-[#FD5528] px-4 py-2 text-sm font-semibold text-white transition hover:bg-orange-600">Create Page</a>
                    @if($page?->exists)
                        <a href="{{ route('pages.edit', $page->id) }}" class="rounded-xl border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">Edit This Page</a>
                    @endif
                </div>
            </div>
        </section>
    @endauth

    @if($sectionAnchors->isNotEmpty())
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
    @endif

    <section class="bg-white py-16">
        <div class="mx-auto grid max-w-7xl grid-cols-1 gap-12 px-6 lg:grid-cols-2 lg:items-center">
            <div>
                <h1 class="text-4xl font-bold leading-tight text-gray-900">
                    {!! $heroItem?->title ?: $defaultHero['title'] !!}
                </h1>

                @if($heroItem?->description || $defaultHero['description_1'])
                    <div class="mt-6 text-gray-600 space-y-3 leading-relaxed">
                        {!! $heroItem?->description ?: $defaultHero['description_1'] !!}
                    </div>
                @endif

                @if(data_get($heroItem, 'extra.sub_text', $defaultHero['description_2']))
                    <div class="mt-4 text-gray-600 space-y-3 leading-relaxed">
                        {!! data_get($heroItem, 'extra.sub_text', $defaultHero['description_2']) !!}
                    </div>
                @endif

                <a href="{{ data_get($heroItem, 'extra.button_url', $defaultHero['button_url']) }}"
                    class="mt-6 inline-block rounded-xl bg-[#FD5528] px-6 py-3 font-semibold text-white shadow transition hover:bg-orange-600">
                    {{ data_get($heroItem, 'extra.button', data_get($heroItem, 'extra.button_text', $defaultHero['button_text'])) }}
                </a>
            </div>

            <div>
                <img alt=""
                    src="{{ $heroItem?->image ? $mediaUrl($heroItem->image) : $defaultHero['image'] }}"
                    alt="{{ strip_tags((string) ($heroItem?->title ?: 'SEO')) }}"
                    class="w-full rounded-2xl object-cover shadow-lg"
                >
            </div>
        </div>
    </section>

    <section class="bg-gray-50 py-16">
        <div class="mx-auto max-w-7xl px-6 text-center">
            <h2 class="text-3xl font-bold text-gray-900">
                {!! $aboutItem?->title ?: $defaultAbout['title'] !!}
            </h2>

            @if($aboutItem?->description || $defaultAbout['description'])
                <div class="mx-auto mt-4 max-w-3xl text-gray-600 space-y-3 leading-relaxed">
                    {!! $aboutItem?->description ?: $defaultAbout['description'] !!}
                </div>
            @endif
        </div>
    </section>

    <section class="bg-white py-16">
        <div class="mx-auto max-w-7xl px-6">
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach(($servicesSection?->items ?? collect())->isNotEmpty() ? $servicesSection->items : collect($defaultServices) as $service)
                    @php
                        $serviceExtra = data_get($service, 'extra', []);
                        $serviceLabel = data_get($service, 'label', data_get($serviceExtra, 'label'));
                        $serviceIcon = data_get($service, 'image', data_get($serviceExtra, 'icon'));
                        $serviceTitle = data_get($service, 'title');
                        $serviceDescription = data_get($service, 'description');
                        $serviceTags = data_get($serviceExtra, 'tags', data_get($service, 'tags', []));
                    @endphp
                    <article class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] text-gray-900">
                        <div class="pointer-events-none absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/15 via-white/40 to-white/10 opacity-0 transition duration-500 group-hover:opacity-80 group-hover:backdrop-blur-[24px]"></div>
                        <div class="relative z-10 flex flex-col items-center text-center space-y-4">
                            @if($serviceLabel)
                                <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">{{ $serviceLabel }}</span>
                            @endif
                            <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-inner">
                                @if($serviceIcon)
                                    <img src="{{ $mediaUrl($serviceIcon) }}" class="h-14 w-14" alt="{{ strip_tags((string) $serviceTitle) }}">
                                @else
                                    <span class="text-2xl font-bold text-white">{{ strtoupper(mb_substr(strip_tags((string) $serviceTitle), 0, 1)) }}</span>
                                @endif
                            </div>
                            <h3 class="text-xl font-semibold">{{ strip_tags((string) $serviceTitle) }}</h3>
                            @if($serviceDescription)
                                <div class="text-sm text-gray-600 leading-relaxed">
                                    {!! $serviceDescription !!}
                                </div>
                            @endif
                            @if(is_array($serviceTags) && count($serviceTags))
                                <div class="flex flex-wrap justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
                                    @foreach($serviceTags as $tag)
                                        <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">{{ $tag }}</span>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-gray-50 py-16">
        <div class="mx-auto max-w-7xl px-6">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-10">
                What We Do to <span class="text-[#FD5528]">Improve Organic Search Performance</span>
            </h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach(($featuresSection?->items ?? collect())->isNotEmpty() ? $featuresSection->items : collect($defaultFeatures) as $feature)
                    @php
                        $featureTitle = is_object($feature) || is_array($feature) ? data_get($feature, 'title', data_get($feature, 'name', $feature)) : $feature;
                        $featureDescription = data_get($feature, 'description');
                    @endphp
                    <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">
                        <div class="font-medium text-gray-900">{!! $featureTitle !!}</div>
                        @if($featureDescription)
                            <div class="mt-2 text-sm text-gray-600 leading-relaxed">
                                {!! $featureDescription !!}
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-[#FD5528] py-16 text-center text-white">
        <div class="mx-auto max-w-3xl px-6">
            <h2 class="text-3xl font-bold">
                {!! $ctaSection?->items?->first()?->title ?: $defaultCta['title'] !!}
            </h2>

            @if($ctaSection?->items?->first()?->description || $defaultCta['description'])
                <div class="mt-4 text-white/95 leading-relaxed">
                    {!! $ctaSection?->items?->first()?->description ?: $defaultCta['description'] !!}
                </div>
            @endif

            <a
                href="{{ data_get($ctaSection?->items?->first(), 'extra.button_url', $defaultCta['button_url']) }}"
                class="inline-block mt-6 bg-white text-[#FD5528] px-6 py-3 rounded-xl font-semibold hover:bg-gray-100 transition">
                {{ data_get($ctaSection?->items?->first(), 'extra.button_text', 'Start Your SEO Journey') }}
            </a>
        </div>
    </section>

    @if($sections->isEmpty())
        <section class="bg-white py-16 sm:py-20">
            <div class="mx-auto max-w-3xl px-6 text-center">
                <h2 class="text-2xl font-bold text-slate-900">This page has not been built out yet.</h2>
                <p class="mt-4 text-slate-600">Add sections and section items in the CMS to render this page dynamically.</p>
            </div>
        </section>
    @endif
</main>
@endsection
