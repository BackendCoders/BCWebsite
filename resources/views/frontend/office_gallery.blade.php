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
        .workspace-bento-hero-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }
        @media (min-width: 860px) {
            .workspace-bento-hero-grid {
                grid-template-columns: 1.85fr 1fr;
                align-items: stretch;
            }
        }
        .bento-hero-card {
            position: relative;
            border-radius: 1.5rem;
            overflow: hidden;
            background-color: #0f172a;
            box-shadow: 0 10px 25px -5px rgba(15, 23, 42, 0.1);
            height: 100%;
            min-height: 380px;
        }
        @media (min-width: 860px) {
            .bento-hero-card {
                min-height: 480px;
            }
        }
        .bento-side-stack {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
            height: 100%;
        }
        @media (min-width: 640px) and (max-width: 859px) {
            .bento-side-stack {
                grid-template-columns: 1fr 1fr;
            }
        }
        @media (min-width: 860px) {
            .bento-side-stack {
                grid-template-rows: 1fr 1fr;
                height: 100%;
            }
        }
        .bento-side-card {
            position: relative;
            border-radius: 1.25rem;
            overflow: hidden;
            background-color: #0f172a;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            height: 100%;
            min-height: 220px;
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

        /* ================================================================= */
        /* FULLSCREEN CINEMA-GRADE LIGHTBOX - BULLETPROOF FIXED OVERLAY      */
        /* ================================================================= */
        #galleryLightbox {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            bottom: 0 !important;
            width: 100vw !important;
            height: 100vh !important;
            height: 100dvh !important;
            z-index: 999999999 !important; /* Above site header (z-40/90) and floating stack (z-[60]) */
            background-color: #030712 !important; /* 100% OPAQUE DEEP SLATE/BLACK - ZERO BLEED-THROUGH */
            display: none;
            overflow: hidden !important;
            opacity: 0;
            transition: opacity 0.25s ease-out;
        }

        #galleryLightbox.lb-active {
            display: block !important;
            opacity: 1 !important;
        }

        /* Top Bar */
        .lb-chrome-top {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            height: 68px !important;
            padding: 0 24px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
            z-index: 1000000001 !important;
            background: linear-gradient(to bottom, rgba(3, 7, 18, 0.95), transparent) !important;
        }

        /* Center Stage Container */
        .lb-chrome-stage {
            position: fixed !important;
            top: 68px !important;
            bottom: 90px !important;
            left: 0 !important;
            right: 0 !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            padding: 10px 80px !important;
            box-sizing: border-box !important;
            user-select: none !important;
            -webkit-user-select: none !important;
            z-index: 1000000000 !important;
        }

        @media (max-width: 640px) {
            .lb-chrome-stage {
                padding: 10px 16px !important;
                bottom: 110px !important;
            }
        }

        #lbImage {
            max-width: 100% !important;
            max-height: 100% !important;
            object-fit: contain !important;
            border-radius: 12px !important;
            box-shadow: 0 25px 60px -15px rgba(0, 0, 0, 0.95), 0 0 0 1px rgba(255, 255, 255, 0.1) !important;
            transition: opacity 0.18s ease, transform 0.18s ease !important;
        }

        /* Bottom Caption Bar */
        .lb-chrome-bottom {
            position: fixed !important;
            bottom: 0 !important;
            left: 0 !important;
            right: 0 !important;
            min-height: 90px !important;
            padding: 16px 24px 20px !important;
            text-align: center !important;
            z-index: 1000000001 !important;
            background: linear-gradient(to top, rgba(3, 7, 18, 0.98) 60%, transparent) !important;
            pointer-events: none !important;
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            justify-content: center !important;
        }

        .lb-chrome-bottom > * {
            pointer-events: auto !important;
        }

        /* Fixed Viewport Navigation Arrows */
        .lb-nav-arrow {
            position: fixed !important;
            top: 50% !important;
            transform: translateY(-50%) !important;
            z-index: 1000000002 !important;
            width: 52px !important;
            height: 52px !important;
            border-radius: 9999px !important;
            background: rgba(15, 23, 42, 0.85) !important;
            border: 1px solid rgba(255, 255, 255, 0.25) !important;
            color: #ffffff !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            cursor: pointer !important;
            transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.6) !important;
        }

        .lb-nav-arrow:hover {
            background: #FD5528 !important;
            border-color: #FD5528 !important;
            transform: translateY(-50%) scale(1.12) !important;
        }

        .lb-nav-arrow:active {
            transform: translateY(-50%) scale(0.95) !important;
        }

        .lb-nav-prev {
            left: 24px !important;
        }

        .lb-nav-next {
            right: 24px !important;
        }

        @media (max-width: 640px) {
            .lb-nav-arrow {
                width: 42px !important;
                height: 42px !important;
            }
            .lb-nav-prev { left: 10px !important; }
            .lb-nav-next { right: 10px !important; }
        }

        /* Close Button */
        .lb-close-pill {
            display: inline-flex !important;
            align-items: center !important;
            gap: 8px !important;
            height: 40px !important;
            padding: 0 16px !important;
            border-radius: 9999px !important;
            background: rgba(255, 255, 255, 0.12) !important;
            border: 1px solid rgba(255, 255, 255, 0.22) !important;
            color: #ffffff !important;
            font-size: 13px !important;
            font-weight: 600 !important;
            cursor: pointer !important;
            transition: all 0.2s ease !important;
            backdrop-filter: blur(8px) !important;
        }

        .lb-close-pill:hover {
            background: #FD5528 !important;
            border-color: #FD5528 !important;
            transform: scale(1.05) !important;
        }

        /* Hide external widgets when lightbox is active */
        body.lb-open {
            overflow: hidden !important;
        }
        body.lb-open #contactToggle,
        body.lb-open #contactMenu,
        body.lb-open .fixed.right-5.bottom-6 {
            display: none !important;
            visibility: hidden !important;
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

            <!-- Bento Showcase Layout (Pixel-Perfect Match to Reference) -->
            @php
                $heroWork = $workspaceImages->first();
                $sideWork = $workspaceImages->skip(1)->take(2);
                $gridWork = $workspaceImages->skip(3)->take(3);
                $extraWork = $workspaceImages->skip(6);
            @endphp

            <!-- Top Bento Row: Hero + Side Stack -->
            <div class="workspace-bento-hero-grid">
                @if($heroWork)
                    <div 
                        class="bento-hero-card gallery-card gallery-card-hover gallery-shimmer group relative overflow-hidden border border-slate-200 cursor-pointer"
                        data-full-src="{{ $heroWork->image_url ?? asset($heroWork->image_path ?? '') }}"
                        data-title="{{ $heroWork->title }}"
                        data-category="Workspace &amp; Labs"
                        data-alt="{{ $heroWork->alt_text }}"
                        tabindex="0"
                        role="button"
                    >
                        <img 
                            src="{{ $heroWork->image_url ?? asset($heroWork->image_path ?? '') }}" 
                            alt="{{ $heroWork->alt_text }}" 
                            class="gallery-img-zoom h-full w-full object-cover"
                            fetchpriority="high"
                            decoding="async"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/95 via-slate-950/30 to-transparent"></div>
                        
                        <!-- Top-Left Badge -->
                        <div class="absolute top-5 left-5 z-10">
                            <span class="inline-flex items-center gap-2 rounded-full bg-white px-3.5 py-1.5 text-xs font-bold text-slate-800 shadow-md">
                                <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                                Primary Development Hall
                            </span>
                        </div>

                        <!-- Bottom Content -->
                        <div class="absolute inset-x-0 bottom-0 p-6 sm:p-8 flex items-end justify-between gap-4">
                            <div class="max-w-xl">
                                <h3 class="text-xl sm:text-2xl font-bold text-white tracking-tight">
                                    {{ $heroWork->title }}
                                </h3>
                                <p class="mt-1.5 text-xs sm:text-sm text-slate-300 leading-relaxed">
                                    {{ $heroWork->caption }}
                                </p>
                            </div>
                            <div class="shrink-0 flex h-12 w-12 items-center justify-center rounded-full bg-[#FD5528] text-white shadow-lg transition-transform duration-300 group-hover:scale-110">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Side Stack (2 Cards) -->
                <div class="bento-side-stack">
                    @foreach($sideWork as $sImg)
                        <div 
                            class="bento-side-card gallery-card gallery-card-hover gallery-shimmer group relative overflow-hidden border border-slate-200 cursor-pointer"
                            data-full-src="{{ $sImg->image_url ?? asset($sImg->image_path ?? '') }}"
                            data-title="{{ $sImg->title }}"
                            data-category="Workspace &amp; Labs"
                            data-alt="{{ $sImg->alt_text }}"
                            tabindex="0"
                            role="button"
                        >
                            <img 
                                src="{{ $sImg->image_url ?? asset($sImg->image_path ?? '') }}" 
                                alt="{{ $sImg->alt_text }}" 
                                class="gallery-img-zoom h-full w-full object-cover"
                                loading="lazy"
                                decoding="async"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/95 via-slate-950/40 to-transparent"></div>
                            <div class="absolute inset-x-0 bottom-0 p-5">
                                <h4 class="font-bold text-base text-white line-clamp-1">
                                    {{ $sImg->title }}
                                </h4>
                                <p class="mt-1 text-xs text-slate-300 line-clamp-1">
                                    {{ $sImg->caption }}
                                </p>
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
    role="dialog" 
    aria-modal="true" 
    aria-label="Image Preview Lightbox"
>
    <!-- Top Chrome -->
    <div class="lb-chrome-top">
        <div class="flex items-center gap-3">
            <span class="inline-flex items-center gap-1.5 rounded-full bg-white/10 px-3.5 py-1 text-xs font-bold text-orange-400 border border-white/15 backdrop-blur-md" id="lbCategory">
                Office Gallery
            </span>
            <span class="text-xs font-semibold text-slate-400" id="lbCounter">
                1 / {{ $totalImages }}
            </span>
        </div>

        <div>
            <button 
                type="button" 
                id="lbClose" 
                class="lb-close-pill"
                aria-label="Close Lightbox (Esc)"
            >
                <span>Close</span>
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Center Stage Container (Clicking empty background closes lightbox) -->
    <div class="lb-chrome-stage" id="lbStage">
        <img 
            id="lbImage" 
            src="" 
            alt="" 
        />
    </div>

    <!-- Pinned Viewport Navigation Buttons -->
    <button 
        type="button" 
        id="lbPrev" 
        class="lb-nav-arrow lb-nav-prev"
        aria-label="Previous Image (Left Arrow)"
    >
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
    </button>

    <button 
        type="button" 
        id="lbNext" 
        class="lb-nav-arrow lb-nav-next"
        aria-label="Next Image (Right Arrow)"
    >
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
        </svg>
    </button>

    <!-- Bottom Caption Chrome -->
    <div class="lb-chrome-bottom">
        <h3 id="lbTitle" class="text-base sm:text-lg font-bold text-white tracking-tight line-clamp-1 max-w-3xl"></h3>
        <p id="lbCaption" class="mt-1 text-xs sm:text-sm text-slate-300 max-w-2xl line-clamp-2"></p>
        <div class="text-[11px] text-slate-500 mt-2 hidden sm:flex items-center gap-2">
            <span>Press <kbd class="px-1.5 py-0.5 rounded bg-white/10 text-slate-300 font-mono text-[10px]">Esc</kbd> to close</span>
            <span>•</span>
            <span>Use <kbd class="px-1.5 py-0.5 rounded bg-white/10 text-slate-300 font-mono text-[10px]">←</kbd> <kbd class="px-1.5 py-0.5 rounded bg-white/10 text-slate-300 font-mono text-[10px]">→</kbd> to navigate</span>
        </div>
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
    const lbStage = document.getElementById("lbStage");

    // Move lightbox to document.body to break out of any container stacking context
    if (lightbox && lightbox.parentElement !== document.body) {
        document.body.appendChild(lightbox);
    }

    const cards = Array.from(document.querySelectorAll(".gallery-card"));
    let currentIndex = 0;

    function openLightbox(index) {
        if (!cards.length) return;
        if (index < 0) index = cards.length - 1;
        if (index >= cards.length) index = 0;
        currentIndex = index;

        const card = cards[currentIndex];
        const src = card.getAttribute("data-full-src");
        const title = card.getAttribute("data-title") || "";
        const cat = card.getAttribute("data-category") || "Office Gallery";
        const alt = card.getAttribute("data-alt") || "";

        // Subtle quick transition
        lbImg.style.opacity = "0.3";
        lbImg.style.transform = "scale(0.98)";

        const loader = new Image();
        loader.onload = () => {
            lbImg.src = src;
            lbImg.alt = alt;
            lbTitle.textContent = title;
            lbCaption.textContent = alt;
            lbCategory.textContent = cat;
            lbCounter.textContent = (currentIndex + 1) + " / " + cards.length;
            requestAnimationFrame(() => {
                lbImg.style.opacity = "1";
                lbImg.style.transform = "scale(1)";
            });
        };
        loader.onerror = () => {
            lbImg.src = src;
            lbImg.alt = alt;
            lbTitle.textContent = title;
            lbCaption.textContent = alt;
            lbCategory.textContent = cat;
            lbCounter.textContent = (currentIndex + 1) + " / " + cards.length;
            lbImg.style.opacity = "1";
            lbImg.style.transform = "scale(1)";
        };
        loader.src = src;

        lightbox.classList.add("lb-active");
        document.body.classList.add("lb-open");
    }

    function closeLightbox() {
        lightbox.classList.remove("lb-active");
        document.body.classList.remove("lb-open");
        setTimeout(() => {
            if (!lightbox.classList.contains("lb-active")) {
                lbImg.src = "";
            }
        }, 250);
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

    if (lbClose) lbClose.addEventListener("click", closeLightbox);
    if (lbStage) {
        lbStage.addEventListener("click", (e) => {
            if (e.target === lbStage) closeLightbox();
        });
    }

    if (lbPrev) lbPrev.addEventListener("click", (e) => { e.stopPropagation(); openLightbox(currentIndex - 1); });
    if (lbNext) lbNext.addEventListener("click", (e) => { e.stopPropagation(); openLightbox(currentIndex + 1); });

    document.addEventListener("keydown", (e) => {
        if (!lightbox || !lightbox.classList.contains("lb-active")) return;
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
