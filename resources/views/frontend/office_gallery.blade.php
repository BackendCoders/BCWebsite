@extends('component.main')

@php
    $galleryBreadcrumb = [
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
                'name' => 'Office Gallery',
                'item' => route('frontend.office_gallery'),
            ],
        ],
    ];

    $imageSchemaList = [];
    foreach ($images as $index => $img) {
        $imageSchemaList[] = [
            '@type' => 'ImageObject',
            'position' => $index + 1,
            'name' => $img->title ?? 'Backend Coders India Kanpur Office',
            'description' => $img->alt_text ?? 'Backend Coders India workspace, team events, and office in Kanpur',
            'contentUrl' => $img->image_url ?? asset($img->image_path ?? ''),
            'thumbnailUrl' => $img->image_url ?? asset($img->image_path ?? ''),
            'author' => [
                '@type' => 'Organization',
                'name' => 'Backend Coders India',
            ],
        ];
    }

    $gallerySchema = [
        '@context' => 'https://schema.org',
        '@type' => 'ImageGallery',
        '@id' => url('/office-gallery') . '#gallery',
        'name' => 'Backend Coders India Office Gallery, Events & Culture',
        'description' => 'Photographs of Backend Coders India workspace, developer workstations, festival celebrations, team events, and engineering culture in Kanpur.',
        'url' => route('frontend.office_gallery'),
        'image' => $imageSchemaList,
    ];

    $totalImages = $images->count();
    $workspaceCount = $workspaceImages->count();
    $eventCount = $eventImages->count();
    $teamCount = $teamImages->count();
@endphp

@push('head')
    <script type="application/ld+json">{!! json_encode($galleryBreadcrumb, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
    <script type="application/ld+json">{!! json_encode($gallerySchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
    <style>
        /* Scoped Premium Gallery Styling */
        .gallery-bento-hero {
            grid-column: span 1;
        }
        @media (min-width: 1024px) {
            .gallery-bento-hero {
                grid-column: span 8;
            }
            .gallery-bento-side {
                grid-column: span 4;
            }
        }
        .gallery-card-hover {
            transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .gallery-card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 35px -10px rgba(15, 23, 42, 0.15), 0 10px 15px -8px rgba(253, 85, 40, 0.08);
        }
        .gallery-img-zoom {
            transition: transform 0.7s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .gallery-card-hover:hover .gallery-img-zoom {
            transform: scale(1.06);
        }
        .filter-btn-active {
            background-color: #FD5528 !important;
            color: #ffffff !important;
            border-color: #FD5528 !important;
            box-shadow: 0 10px 20px -5px rgba(253, 85, 40, 0.35) !important;
        }
        .gallery-shimmer {
            position: relative;
            overflow: hidden;
        }
        .gallery-shimmer::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 50%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.15), transparent);
            transform: skewX(-20deg);
            transition: left 0.75s ease;
            pointer-events: none;
        }
        .gallery-card-hover:hover .gallery-shimmer::after {
            left: 150%;
        }
    </style>
@endpush

@section('content')

<main class="min-h-screen bg-[#f8fafc] pt-28 sm:pt-32 pb-24 text-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- ================================================================= -->
        <!-- PREMIUM HERO & NAVIGATION HEADER                                  -->
        <!-- ================================================================= -->
        <header class="relative mb-14 text-center max-w-4xl mx-auto pt-4">
            <!-- Breadcrumbs -->
            <nav aria-label="Breadcrumb" class="inline-flex items-center gap-2 rounded-full bg-white px-4 py-1.5 text-xs font-semibold text-slate-500 border border-slate-200 shadow-sm mb-4">
                <a href="{{ url('/') }}" class="hover:text-slate-900 transition">Home</a>
                <span class="text-slate-300">/</span>
                <span class="text-[#FD5528] font-bold">Office Gallery</span>
            </nav>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-slate-900 leading-tight">
                Life at Backend Coders India
            </h1>

            <p class="mt-3.5 text-sm sm:text-base lg:text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
                Take an exclusive look into our Kanpur engineering labs, dual-screen workstations, festive celebrations, and the brilliant minds behind our digital products.
            </p>

            <!-- Interactive Category Filter Pill Bar -->
            <div class="mt-8 flex flex-wrap items-center justify-center gap-2 sm:gap-3" id="galleryFilterNav">
                <button 
                    type="button" 
                    data-filter="all" 
                    class="filter-pill filter-btn-active inline-flex items-center gap-2 rounded-full px-5 py-2.5 text-xs sm:text-sm font-bold transition-all border border-transparent bg-white text-slate-700 shadow-sm cursor-pointer"
                >
                    <span>All Moments</span>
                    <span class="rounded-full bg-white/20 px-2 py-0.5 text-[11px] font-extrabold">{{ $totalImages }}</span>
                </button>

                <button 
                    type="button" 
                    data-filter="workspace" 
                    class="filter-pill inline-flex items-center gap-2 rounded-full px-5 py-2.5 text-xs sm:text-sm font-bold transition-all border border-slate-200 bg-white text-slate-700 hover:border-slate-300 shadow-sm cursor-pointer"
                >
                    <span>🏢 Workspace &amp; Labs</span>
                    <span class="rounded-full bg-slate-100 px-2 py-0.5 text-[11px] text-slate-600">{{ $workspaceCount }}</span>
                </button>

                <button 
                    type="button" 
                    data-filter="events" 
                    class="filter-pill inline-flex items-center gap-2 rounded-full px-5 py-2.5 text-xs sm:text-sm font-bold transition-all border border-slate-200 bg-white text-slate-700 hover:border-slate-300 shadow-sm cursor-pointer"
                >
                    <span>🎉 Events &amp; Culture</span>
                    <span class="rounded-full bg-slate-100 px-2 py-0.5 text-[11px] text-slate-600">{{ $eventCount }}</span>
                </button>

                <button 
                    type="button" 
                    data-filter="team" 
                    class="filter-pill inline-flex items-center gap-2 rounded-full px-5 py-2.5 text-xs sm:text-sm font-bold transition-all border border-slate-200 bg-white text-slate-700 hover:border-slate-300 shadow-sm cursor-pointer"
                >
                    <span>👥 Leadership &amp; Team</span>
                    <span class="rounded-full bg-slate-100 px-2 py-0.5 text-[11px] text-slate-600">{{ $teamCount }}</span>
                </button>
            </div>
        </header>

        <!-- ================================================================= -->
        <!-- SECTION 1: WORKSPACE & ENGINEERING LABS (8 Photos Bento Grid)     -->
        <!-- ================================================================= -->
        <section id="section-workspace" class="gallery-category-section mb-20 scroll-mt-36" aria-label="Workspace & Labs Gallery">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-7 pb-4 border-b border-slate-200">
                <div>
                    <span class="inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-widest text-[#FD5528]">
                        <span class="h-2 w-2 rounded-full bg-[#FD5528] animate-pulse"></span>
                        Engineering Floor &amp; Infrastructure
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-1">
                        Our Workspace &amp; Engineering Labs
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-500 mt-1">
                        Located at 11/42 Krishna Nagar, Kanpur. Designed for focused coding sprints, dual-display rigs, and high-performance engineering.
                    </p>
                </div>
                <div class="shrink-0 text-xs font-semibold text-slate-400">
                    {{ $workspaceCount }} Authentic Photographs
                </div>
            </div>

            <!-- Bento Showcase Layout -->
            @php
                $heroWork = $workspaceImages->first();
                $sideWork = $workspaceImages->skip(1)->take(2);
                $gridWork = $workspaceImages->skip(3)->take(3);
                $extraWork = $workspaceImages->skip(6);
            @endphp

            <!-- Top Bento Row: 8 Cols Hero + 4 Cols Side Stack -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 mb-6">
                @if($heroWork)
                    <div 
                        class="gallery-bento-hero gallery-card gallery-card-hover gallery-shimmer group relative overflow-hidden rounded-3xl bg-slate-900 border border-slate-200 shadow-sm cursor-pointer"
                        data-full-src="{{ $heroWork->image_url ?? asset($heroWork->image_path ?? '') }}"
                        data-title="{{ $heroWork->title }}"
                        data-category="Workspace &amp; Labs"
                        data-alt="{{ $heroWork->alt_text }}"
                        tabindex="0"
                        role="button"
                    >
                        <div class="relative aspect-[16/10] sm:aspect-[16/9] w-full overflow-hidden">
                            <img 
                                src="{{ $heroWork->image_url ?? asset($heroWork->image_path ?? '') }}" 
                                alt="{{ $heroWork->alt_text }}" 
                                class="gallery-img-zoom h-full w-full object-cover"
                                fetchpriority="high"
                                decoding="async"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/25 to-transparent"></div>
                            
                            <!-- Badges -->
                            <div class="absolute top-4 left-4">
                                <span class="inline-flex items-center gap-1.5 rounded-full bg-white/90 backdrop-blur-md px-3.5 py-1 text-xs font-extrabold text-slate-900 shadow-md">
                                    <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                                    Primary Development Hall
                                </span>
                            </div>

                            <div class="absolute bottom-5 left-5 right-5 flex items-end justify-between text-white">
                                <div>
                                    <h3 class="text-lg sm:text-2xl font-black tracking-tight">
                                        {{ $heroWork->title }}
                                    </h3>
                                    <p class="mt-1 text-xs sm:text-sm text-slate-300 max-w-xl line-clamp-2">
                                        {{ $heroWork->caption }}
                                    </p>
                                </div>
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-[#FD5528] text-white shadow-lg transition duration-300 group-hover:scale-110">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7" /></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Side Stack (2 Cards) -->
                <div class="gallery-bento-side flex flex-col sm:flex-row lg:flex-col gap-6">
                    @foreach($sideWork as $sImg)
                        <div 
                            class="gallery-card gallery-card-hover gallery-shimmer group relative overflow-hidden rounded-2xl bg-slate-900 border border-slate-200 shadow-sm cursor-pointer flex-1"
                            data-full-src="{{ $sImg->image_url ?? asset($sImg->image_path ?? '') }}"
                            data-title="{{ $sImg->title }}"
                            data-category="Workspace &amp; Labs"
                            data-alt="{{ $sImg->alt_text }}"
                            tabindex="0"
                            role="button"
                        >
                            <div class="relative aspect-[16/10] sm:aspect-[16/9] lg:aspect-[16/10] w-full h-full overflow-hidden">
                                <img 
                                    src="{{ $sImg->image_url ?? asset($sImg->image_path ?? '') }}" 
                                    alt="{{ $sImg->alt_text }}" 
                                    class="gallery-img-zoom h-full w-full object-cover"
                                    loading="lazy"
                                    decoding="async"
                                />
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/20 to-transparent"></div>
                                <div class="absolute bottom-4 left-4 right-4 flex items-end justify-between text-white">
                                    <div>
                                        <h4 class="font-bold text-sm sm:text-base line-clamp-1">
                                            {{ $sImg->title }}
                                        </h4>
                                        <p class="text-[11px] text-slate-300 line-clamp-1 mt-0.5">
                                            {{ $sImg->caption }}
                                        </p>
                                    </div>
                                    <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-white/20 backdrop-blur text-white opacity-0 group-hover:opacity-100 transition">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Middle Row: 3 Symmetrical Cards -->
            @if($gridWork->isNotEmpty())
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                    @foreach($gridWork as $gImg)
                        <div 
                            class="gallery-card gallery-card-hover gallery-shimmer group relative overflow-hidden rounded-2xl bg-slate-900 border border-slate-200 shadow-sm cursor-pointer"
                            data-full-src="{{ $gImg->image_url ?? asset($gImg->image_path ?? '') }}"
                            data-title="{{ $gImg->title }}"
                            data-category="Workspace &amp; Labs"
                            data-alt="{{ $gImg->alt_text }}"
                            tabindex="0"
                            role="button"
                        >
                            <div class="relative aspect-[16/10] w-full overflow-hidden">
                                <img 
                                    src="{{ $gImg->image_url ?? asset($gImg->image_path ?? '') }}" 
                                    alt="{{ $gImg->alt_text }}" 
                                    class="gallery-img-zoom h-full w-full object-cover"
                                    loading="lazy"
                                    decoding="async"
                                />
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/20 to-transparent"></div>
                                <div class="absolute bottom-4 left-4 right-4 flex items-end justify-between text-white">
                                    <div>
                                        <h4 class="font-bold text-sm sm:text-base line-clamp-1">
                                            {{ $gImg->title }}
                                        </h4>
                                        <p class="text-[11px] text-slate-300 line-clamp-1 mt-0.5">
                                            {{ $gImg->caption }}
                                        </p>
                                    </div>
                                    <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-white/20 backdrop-blur text-white opacity-0 group-hover:opacity-100 transition">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            <!-- Bottom Row: 2 Wide Balanced Cards -->
            @if($extraWork->isNotEmpty())
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach($extraWork as $eImg)
                        <div 
                            class="gallery-card gallery-card-hover gallery-shimmer group relative overflow-hidden rounded-2xl bg-slate-900 border border-slate-200 shadow-sm cursor-pointer"
                            data-full-src="{{ $eImg->image_url ?? asset($eImg->image_path ?? '') }}"
                            data-title="{{ $eImg->title }}"
                            data-category="Workspace &amp; Labs"
                            data-alt="{{ $eImg->alt_text }}"
                            tabindex="0"
                            role="button"
                        >
                            <div class="relative aspect-[16/9] w-full overflow-hidden">
                                <img 
                                    src="{{ $eImg->image_url ?? asset($eImg->image_path ?? '') }}" 
                                    alt="{{ $eImg->alt_text }}" 
                                    class="gallery-img-zoom h-full w-full object-cover"
                                    loading="lazy"
                                    decoding="async"
                                />
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/20 to-transparent"></div>
                                <div class="absolute bottom-4 left-4 right-4 flex items-end justify-between text-white">
                                    <div>
                                        <h4 class="font-bold text-sm sm:text-base line-clamp-1">
                                            {{ $eImg->title }}
                                        </h4>
                                        <p class="text-[11px] text-slate-300 line-clamp-1 mt-0.5">
                                            {{ $eImg->caption }}
                                        </p>
                                    </div>
                                    <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-white/20 backdrop-blur text-white opacity-0 group-hover:opacity-100 transition">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </section>

        <!-- ================================================================= -->
        <!-- SECTION 2: TEAM EVENTS, CELEBRATIONS & FUN ACTIVITIES (6 Photos)  -->
        <!-- ================================================================= -->
        <section id="section-events" class="gallery-category-section mb-20 scroll-mt-36" aria-label="Team Events & Culture Gallery">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-7 pb-4 border-b border-slate-200">
                <div>
                    <span class="inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-widest text-[#FD5528]">
                        <span class="h-2 w-2 rounded-full bg-[#FD5528]"></span>
                        🎉 Culture, Festivals &amp; Celebrations
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-1">
                        Team Events, Celebrations &amp; Fun Activities
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-500 mt-1">
                        Celebrating cultural festivals, client delivery milestones, cake cuttings, and the vibrant bonds that power our teamwork.
                    </p>
                </div>
                <div class="shrink-0 text-xs font-semibold text-slate-400">
                    {{ $eventCount }} Curated Celebrations
                </div>
            </div>

            <!-- Balanced 3-Column Symmetrical Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-7">
                @foreach($eventImages as $evImg)
                    <div 
                        class="gallery-card gallery-card-hover gallery-shimmer group relative overflow-hidden rounded-3xl bg-slate-900 border border-slate-200 shadow-sm cursor-pointer flex flex-col"
                        data-full-src="{{ $evImg->image_url ?? asset($evImg->image_path ?? '') }}"
                        data-title="{{ $evImg->title }}"
                        data-category="Events &amp; Culture"
                        data-alt="{{ $evImg->alt_text }}"
                        tabindex="0"
                        role="button"
                    >
                        <div class="relative aspect-[16/10] w-full overflow-hidden">
                            <img 
                                src="{{ $evImg->image_url ?? asset($evImg->image_path ?? '') }}" 
                                alt="{{ $evImg->alt_text }}" 
                                class="gallery-img-zoom h-full w-full object-cover"
                                loading="lazy"
                                decoding="async"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/25 to-transparent"></div>
                            
                            <div class="absolute top-4 left-4">
                                <span class="rounded-full bg-slate-900/80 backdrop-blur-md px-3 py-1 text-[11px] font-bold text-amber-300 border border-amber-300/20 shadow">
                                    ★ Team Celebration
                                </span>
                            </div>

                            <div class="absolute bottom-4 left-4 right-4 flex items-end justify-between text-white">
                                <div>
                                    <h3 class="font-bold text-base sm:text-lg line-clamp-1">
                                        {{ $evImg->title }}
                                    </h3>
                                    <p class="text-xs text-slate-300 mt-1 line-clamp-1">
                                        {{ $evImg->caption }}
                                    </p>
                                </div>
                                <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-[#FD5528] text-white shadow-md transition duration-300 group-hover:scale-110">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- ================================================================= -->
        <!-- SECTION 3: PEOPLE & LEADERSHIP CULTURE (5 Executive Portraits)    -->
        <!-- ================================================================= -->
        <section id="section-team" class="gallery-category-section scroll-mt-36" aria-label="Leadership & Team Gallery">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-7 pb-4 border-b border-slate-200">
                <div>
                    <span class="inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-widest text-[#FD5528]">
                        <span class="h-2 w-2 rounded-full bg-[#FD5528]"></span>
                        👥 Leadership &amp; Engineering Minds
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-1">
                        People &amp; Leadership Culture
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-500 mt-1">
                        Meet the leadership and full-stack software architects behind Backend Coders India.
                    </p>
                </div>
                <div class="shrink-0 text-xs font-semibold text-slate-400">
                    {{ $teamCount }} Executive Portraits
                </div>
            </div>

            <!-- Balanced 5-Column Grid with Luxury Glass Cards -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 sm:gap-6">
                @foreach($teamImages as $tImg)
                    @php
                        $isExecutive = in_array($tImg->order ?? 0, [15, 16], true) || str_contains($tImg->title ?? '', 'CEO') || str_contains($tImg->title ?? '', 'Managing Director');
                    @endphp
                    <div 
                        class="gallery-card gallery-card-hover group relative overflow-hidden rounded-2xl bg-white border {{ $isExecutive ? 'border-orange-300 shadow-md shadow-orange-500/5' : 'border-slate-200/90 shadow-sm' }} cursor-pointer flex flex-col"
                        data-full-src="{{ $tImg->image_url ?? asset($tImg->image_path ?? '') }}"
                        data-title="{{ $tImg->title }}"
                        data-category="Leadership &amp; Team"
                        data-alt="{{ $tImg->alt_text }}"
                        tabindex="0"
                        role="button"
                    >
                        <!-- Portrait Box -->
                        <div class="relative aspect-[4/5] w-full overflow-hidden bg-slate-100">
                            <img 
                                src="{{ $tImg->image_url ?? asset($tImg->image_path ?? '') }}" 
                                alt="{{ $tImg->alt_text }}" 
                                class="gallery-img-zoom h-full w-full object-cover object-top"
                                loading="lazy"
                                decoding="async"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent opacity-60 group-hover:opacity-85 transition"></div>

                            @if($isExecutive)
                                <div class="absolute top-2.5 left-2.5">
                                    <span class="rounded-full bg-[#FD5528] px-2.5 py-0.5 text-[10px] font-extrabold uppercase tracking-wider text-white shadow">
                                        Executive
                                    </span>
                                </div>
                            @endif

                            <div class="absolute top-2.5 right-2.5 flex h-7 w-7 items-center justify-center rounded-full bg-black/40 backdrop-blur text-white opacity-0 group-hover:opacity-100 transition">
                                <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                            </div>
                        </div>

                        <!-- Card Info Footer -->
                        <div class="p-3.5 bg-white border-t border-slate-100 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="font-bold text-xs sm:text-sm text-slate-900 group-hover:text-[#FD5528] transition line-clamp-1">
                                    {{ Str::before($tImg->title, '–') }}
                                </h3>
                                <p class="text-[11px] font-semibold text-slate-500 mt-0.5 line-clamp-1">
                                    {{ trim(Str::after($tImg->title, '–')) }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

    </div>
</main>

<!-- ===================================================================== -->
<!-- UNIVERSAL ULTRA-LUXURY FULLSCREEN LIGHTBOX                            -->
<!-- ===================================================================== -->
<div 
    id="galleryLightbox" 
    class="fixed inset-0 z-50 hidden bg-slate-950/95 backdrop-blur-2xl transition-opacity duration-300 opacity-0 flex flex-col justify-between"
    role="dialog" 
    aria-modal="true" 
    aria-label="Image Preview"
>
    <!-- Top Bar -->
    <div class="flex items-center justify-between p-4 sm:p-6 text-white z-10">
        <div class="flex items-center gap-3">
            <span class="rounded-full bg-white/10 px-3 py-1 text-xs font-semibold backdrop-blur text-orange-400" id="lbCategory">
                Office Gallery
            </span>
            <span class="text-xs text-slate-400" id="lbCounter">
                1 / {{ $totalImages }}
            </span>
        </div>

        <div class="flex items-center gap-2">
            <!-- Close Button -->
            <button 
                type="button" 
                id="lbClose" 
                class="flex h-10 w-10 items-center justify-center rounded-full bg-white/10 hover:bg-white/20 text-white transition cursor-pointer"
                aria-label="Close Preview (Escape)"
            >
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>
        </div>
    </div>

    <!-- Center Stage (Image + Arrows) -->
    <div class="relative flex-1 flex items-center justify-center p-4 sm:p-8 overflow-hidden select-none" id="lbBackdrop">
        <!-- Prev Button -->
        <button 
            type="button" 
            id="lbPrev" 
            class="absolute left-3 sm:left-8 top-1/2 -translate-y-1/2 flex h-12 w-12 items-center justify-center rounded-full bg-black/60 hover:bg-[#FD5528] text-white border border-white/20 transition-all duration-200 hover:scale-110 z-20 cursor-pointer"
            aria-label="Previous Image (Left Arrow)"
        >
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" /></svg>
        </button>

        <!-- Image Container -->
        <div class="relative max-w-5xl max-h-[75vh] sm:max-h-[80vh] flex items-center justify-center">
            <img 
                id="lbImage" 
                src="" 
                alt="" 
                class="max-h-[75vh] sm:max-h-[80vh] max-w-full rounded-2xl object-contain shadow-2xl transition duration-300"
            />
        </div>

        <!-- Next Button -->
        <button 
            type="button" 
            id="lbNext" 
            class="absolute right-3 sm:right-8 top-1/2 -translate-y-1/2 flex h-12 w-12 items-center justify-center rounded-full bg-black/60 hover:bg-[#FD5528] text-white border border-white/20 transition-all duration-200 hover:scale-110 z-20 cursor-pointer"
            aria-label="Next Image (Right Arrow)"
        >
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" /></svg>
        </button>
    </div>

    <!-- Bottom Caption Bar -->
    <div class="p-4 sm:p-6 text-center text-white z-10 bg-gradient-to-t from-slate-950/90 to-transparent">
        <h3 id="lbTitle" class="text-base sm:text-xl font-bold tracking-tight"></h3>
        <p id="lbCaption" class="mt-1 text-xs sm:text-sm text-slate-400 max-w-2xl mx-auto"></p>
    </div>
</div>

<!-- ===================================================================== -->
<!-- INTERACTIVE SCRIPTS: FILTERING, SMOOTH SCROLL & LIGHTBOX              -->
<!-- ===================================================================== -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const filterBtns = document.querySelectorAll("#galleryFilterNav .filter-pill");
    const sections = {
        workspace: document.getElementById("section-workspace"),
        events: document.getElementById("section-events"),
        team: document.getElementById("section-team")
    };

    // Filter pill click behavior
    filterBtns.forEach(btn => {
        btn.addEventListener("click", function () {
            filterBtns.forEach(b => {
                b.classList.remove("filter-btn-active");
                b.classList.add("border-slate-200", "bg-white", "text-slate-700");
            });

            this.classList.add("filter-btn-active");
            this.classList.remove("border-slate-200", "bg-white", "text-slate-700");

            const filter = this.getAttribute("data-filter");

            if (filter === "all") {
                Object.values(sections).forEach(sec => {
                    if (sec) sec.style.display = "";
                });
                window.scrollTo({ top: 0, behavior: 'smooth' });
            } else {
                Object.entries(sections).forEach(([key, sec]) => {
                    if (sec) {
                        if (key === filter) {
                            sec.style.display = "";
                            sec.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        } else {
                            sec.style.display = "none";
                        }
                    }
                });
            }
        });
    });

    // Lightbox Functionality
    const lightbox = document.getElementById("galleryLightbox");
    const lbImg = document.getElementById("lbImage");
    const lbTitle = document.getElementById("lbTitle");
    const lbCaption = document.getElementById("lbCaption");
    const lbCategory = document.getElementById("lbCategory");
    const lbCounter = document.getElementById("lbCounter");
    const lbClose = document.getElementById("lbClose");
    const lbPrev = document.getElementById("lbPrev");
    const lbNext = document.getElementById("lbNext");
    const lbBackdrop = document.getElementById("lbBackdrop");

    const cards = Array.from(document.querySelectorAll(".gallery-card"));
    let currentIndex = 0;

    function openLightbox(index) {
        if (index < 0) index = cards.length - 1;
        if (index >= cards.length) index = 0;
        currentIndex = index;

        const card = cards[currentIndex];
        const src = card.getAttribute("data-full-src");
        const title = card.getAttribute("data-title") || "";
        const cat = card.getAttribute("data-category") || "Office Gallery";
        const alt = card.getAttribute("data-alt") || "";

        lbImg.src = src;
        lbImg.alt = alt;
        lbTitle.textContent = title;
        lbCaption.textContent = alt;
        lbCategory.textContent = cat;
        lbCounter.textContent = (currentIndex + 1) + " / " + cards.length;

        lightbox.classList.remove("hidden");
        requestAnimationFrame(() => {
            lightbox.classList.remove("opacity-0");
            lightbox.classList.add("opacity-100");
        });
        document.body.style.overflow = "hidden";
    }

    function closeLightbox() {
        lightbox.classList.remove("opacity-100");
        lightbox.classList.add("opacity-0");
        setTimeout(() => {
            lightbox.classList.add("hidden");
            lbImg.src = "";
            document.body.style.overflow = "";
        }, 300);
    }

    cards.forEach((card, idx) => {
        card.addEventListener("click", () => openLightbox(idx));
        card.addEventListener("keydown", (e) => {
            if (e.key === "Enter" || e.key === " ") {
                e.preventDefault();
                openLightbox(idx);
            }
        });
    });

    lbClose.addEventListener("click", closeLightbox);
    lbBackdrop.addEventListener("click", (e) => {
        if (e.target === lbBackdrop) closeLightbox();
    });

    lbPrev.addEventListener("click", () => openLightbox(currentIndex - 1));
    lbNext.addEventListener("click", () => openLightbox(currentIndex + 1));

    document.addEventListener("keydown", (e) => {
        if (lightbox.classList.contains("hidden")) return;
        if (e.key === "Escape") closeLightbox();
        if (e.key === "ArrowLeft") openLightbox(currentIndex - 1);
        if (e.key === "ArrowRight") openLightbox(currentIndex + 1);
    });

    // Touch swipe support for mobile
    let touchStartX = 0;
    let touchEndX = 0;
    lightbox.addEventListener("touchstart", (e) => {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });
    lightbox.addEventListener("touchend", (e) => {
        touchEndX = e.changedTouches[0].screenX;
        if (touchStartX - touchEndX > 50) {
            openLightbox(currentIndex + 1);
        } else if (touchEndX - touchStartX > 50) {
            openLightbox(currentIndex - 1);
        }
    }, { passive: true });
});
</script>

@endsection
