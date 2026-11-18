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
            'contentUrl' => $img->image_url,
            'thumbnailUrl' => $img->image_url,
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
@endphp

@push('head')
    <script type="application/ld+json">{!! json_encode($galleryBreadcrumb, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
    <script type="application/ld+json">{!! json_encode($gallerySchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
@endpush

@section('content')

<main class="min-h-screen bg-[#fafbfc] pt-28 sm:pt-32 pb-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- ================================================================= -->
        <!-- HEADER & CATEGORY FILTER TABS                                     -->
        <!-- ================================================================= -->
        <header class="mb-12 border-b border-slate-200 pb-8">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
                <div>
                    <nav aria-label="Breadcrumb" class="mb-2 text-xs font-semibold text-slate-400">
                        <a href="{{ url('/') }}" class="hover:text-slate-700 transition">Home</a>
                        <span class="mx-1.5 text-slate-300">/</span>
                        <span class="text-[#FD5528]">Office Gallery</span>
                    </nav>
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-slate-900">
                        Life at Backend Coders India
                    </h1>
                    <p class="mt-2 text-sm sm:text-base text-slate-600 max-w-2xl">
                        Our workspace, team events, festive celebrations, and engineering culture in Kanpur.
                    </p>
                </div>

                <!-- Category Filter Pills -->
                <div class="flex flex-wrap items-center gap-2">
                    <button 
                        type="button" 
                        data-section-filter="all" 
                        class="gallery-filter-pill active rounded-full px-5 py-2.5 text-xs font-bold transition bg-[#FD5528] text-white shadow-md shadow-[#FD5528]/25"
                    >
                        All Moments
                    </button>
                    <button 
                        type="button" 
                        data-section-filter="workspace" 
                        class="gallery-filter-pill rounded-full px-5 py-2.5 text-xs font-bold transition bg-white text-slate-700 border border-slate-200 hover:bg-slate-100 shadow-sm"
                    >
                        🏢 Workspace &amp; Office
                    </button>
                    <button 
                        type="button" 
                        data-section-filter="events" 
                        class="gallery-filter-pill rounded-full px-5 py-2.5 text-xs font-bold transition bg-white text-slate-700 border border-slate-200 hover:bg-slate-100 shadow-sm"
                    >
                        🎉 Events &amp; Fun Activities
                    </button>
                    <button 
                        type="button" 
                        data-section-filter="team" 
                        class="gallery-filter-pill rounded-full px-5 py-2.5 text-xs font-bold transition bg-white text-slate-700 border border-slate-200 hover:bg-slate-100 shadow-sm"
                    >
                        👥 People &amp; Leadership
                    </button>
                </div>
            </div>
        </header>

        <!-- ================================================================= -->
        <!-- SECTION 1: WORKSPACE & OFFICE BENTO SHOWCASE                      -->
        <!-- ================================================================= -->
        <section id="section-workspace" class="gallery-category-block mb-20" aria-label="Workspace and Office Gallery">
            <div class="mb-8">
                <span class="inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-[#FD5528]">
                    <span class="h-2 w-2 rounded-full bg-[#FD5528]"></span>
                    Development Hub
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-1">
                    Our Workspace &amp; Engineering Labs
                </h2>
                <p class="text-sm text-slate-500 mt-1 max-w-2xl">
                    Take a look inside our primary development wing at 11/42 Krishna Nagar, Kanpur.
                </p>
            </div>

            <!-- Bento Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                @php
                    $heroWorkspace = $workspaceImages->first();
                    $otherWorkspace = $workspaceImages->skip(1);
                @endphp
                @if($heroWorkspace)
                    <div 
                        class="lg:col-span-8 gallery-card group relative overflow-hidden rounded-3xl bg-slate-900 border border-slate-200 shadow-lg cursor-pointer"
                        data-full-src="{{ $heroWorkspace->image_url }}"
                        data-title="{{ $heroWorkspace->title ?? 'Engineering Workstation Wing' }}"
                        data-alt="{{ $heroWorkspace->alt_text ?? 'Backend Coders India main office development hall' }}"
                        tabindex="0"
                        role="button"
                        aria-label="View {{ $heroWorkspace->title ?? 'office photo' }} in full screen"
                    >
                        <div class="relative aspect-[16/10] sm:aspect-[16/9] w-full overflow-hidden">
                            <img 
                                src="{{ $heroWorkspace->image_url }}" 
                                alt="{{ $heroWorkspace->alt_text ?? 'Backend Coders India office workspace in Kanpur' }}" 
                                class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                                fetchpriority="high"
                                decoding="async"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/20 to-transparent opacity-80 group-hover:opacity-90 transition"></div>
                            
                            <div class="absolute bottom-5 left-5 right-5 flex items-end justify-between text-white">
                                <div>
                                    <span class="inline-block rounded-full bg-[#FD5528] px-3 py-0.5 text-xs font-bold uppercase tracking-wider mb-1.5 shadow">
                                        Primary Engineering Floor
                                    </span>
                                    <h3 class="text-lg sm:text-2xl font-bold">
                                        {{ $heroWorkspace->title ?? 'Main Development Wing' }}
                                    </h3>
                                </div>
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-white/20 backdrop-blur text-white opacity-0 group-hover:opacity-100 transition duration-300">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7" /></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Right Stack (4 Cols - 2 Rows) -->
                <div class="lg:col-span-4 flex flex-col gap-6 justify-between">
                    @foreach($otherWorkspace->take(2) as $wImg)
                        <div 
                            class="gallery-card group relative overflow-hidden rounded-2xl bg-slate-900 border border-slate-200 shadow-md cursor-pointer flex-1"
                            data-full-src="{{ $wImg->image_url }}"
                            data-title="{{ $wImg->title ?? 'Workspace View' }}"
                            data-alt="{{ $wImg->alt_text ?? 'Backend Coders India workspace photograph' }}"
                            tabindex="0"
                            role="button"
                            aria-label="View {{ $wImg->title ?? 'workspace photo' }} in full screen"
                        >
                            <div class="relative aspect-[16/9] w-full h-full overflow-hidden">
                                <img 
                                    src="{{ $wImg->image_url }}" 
                                    alt="{{ $wImg->alt_text ?? 'Workspace photo' }}" 
                                    class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                                    loading="lazy"
                                    decoding="async"
                                />
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/75 via-transparent to-transparent opacity-75 group-hover:opacity-90 transition"></div>
                                <div class="absolute bottom-4 left-4 right-4 text-white">
                                    <h4 class="font-bold text-sm sm:text-base line-clamp-1">
                                        {{ $wImg->title ?? 'Office Workspace' }}
                                    </h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Additional Workspace Photos Row -->
                @if($otherWorkspace->count() > 2)
                    <div class="lg:col-span-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($otherWorkspace->skip(2) as $extraW)
                            <div 
                                class="gallery-card group relative overflow-hidden rounded-2xl bg-slate-900 border border-slate-200 shadow-sm cursor-pointer"
                                data-full-src="{{ $extraW->image_url }}"
                                data-title="{{ $extraW->title ?? 'Workspace Area' }}"
                                data-alt="{{ $extraW->alt_text ?? 'Backend Coders workspace' }}"
                                tabindex="0"
                                role="button"
                                aria-label="View {{ $extraW->title ?? 'photo' }} in full screen"
                            >
                                <div class="relative aspect-[16/10] w-full overflow-hidden">
                                    <img 
                                        src="{{ $extraW->image_url }}" 
                                        alt="{{ $extraW->alt_text ?? 'Workspace photograph' }}" 
                                        class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                                        loading="lazy"
                                        decoding="async"
                                    />
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-75 group-hover:opacity-90 transition"></div>
                                    <div class="absolute bottom-4 left-4 right-4 text-white">
                                        <h4 class="font-bold text-sm line-clamp-1">
                                            {{ $extraW->title ?? 'Office Area' }}
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </section>

        <!-- ================================================================= -->
        <!-- SECTION 2: EVENTS, CELEBRATIONS & FUN ACTIVITIES                  -->
        <!-- ================================================================= -->
        <section id="section-events" class="gallery-category-block mb-20" aria-label="Team Events and Fun Activities">
            <div class="mb-8">
                <span class="inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-[#FD5528]">
                    <span class="h-2 w-2 rounded-full bg-[#FD5528]"></span>
                    🎉 Life At Backend Coders
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-1">
                    Team Events, Celebrations &amp; Fun Activities
                </h2>
                <p class="text-sm text-slate-500 mt-1.5 max-w-2xl">
                    Festivals, milestone gatherings, and fun moments with the engineering team.
                </p>
            </div>

            <!-- Events Grid (Balanced Multi-Column) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                @foreach($eventImages as $evImg)
                    <div 
                        class="gallery-card group relative overflow-hidden rounded-3xl bg-slate-900 border border-slate-200 shadow-lg hover:shadow-2xl transition duration-500 cursor-pointer"
                        data-full-src="{{ $evImg->image_url }}"
                        data-title="{{ $evImg->title ?? 'Team Celebration' }}"
                        data-alt="{{ $evImg->alt_text ?? 'Backend Coders India team celebration event' }}"
                        tabindex="0"
                        role="button"
                        aria-label="View {{ $evImg->title ?? 'event photo' }} in full screen"
                    >
                        <div class="relative aspect-[16/10] w-full overflow-hidden">
                            <img 
                                src="{{ $evImg->image_url }}" 
                                alt="{{ $evImg->alt_text ?? 'Team celebration and event at Backend Coders India' }}" 
                                class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                                loading="lazy"
                                decoding="async"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/30 to-transparent opacity-80 group-hover:opacity-90 transition"></div>
                            
                            <div class="absolute top-4 left-4">
                                <span class="rounded-full bg-black/60 backdrop-blur-md px-3 py-1 text-xs font-bold text-white border border-white/10">
                                    🎉 Team Celebration
                                </span>
                            </div>

                            <div class="absolute bottom-5 left-5 right-5 flex items-end justify-between text-white">
                                <div>
                                    <h3 class="text-base sm:text-lg font-bold">
                                        {{ $evImg->title ?? 'Team Gathering & Milestone' }}
                                    </h3>
                                    <p class="text-xs text-slate-300 mt-1 line-clamp-1">
                                        {{ $evImg->caption ?? 'Cultural celebrations and milestone moments at our Kanpur office.' }}
                                    </p>
                                </div>
                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#FD5528] text-white shadow-lg opacity-90 group-hover:opacity-100 transition duration-300">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7" /></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- ================================================================= -->
        <!-- SECTION 3: PEOPLE & LEADERSHIP CULTURE                            -->
        <!-- ================================================================= -->
        <section id="section-team" class="gallery-category-block" aria-label="People and Leadership Culture">
            <div class="mb-8">
                <span class="inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-[#FD5528]">
                    <span class="h-2 w-2 rounded-full bg-[#FD5528]"></span>
                    👥 Engineering Minds
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-1">
                    People &amp; Leadership Culture
                </h2>
                <p class="text-sm text-slate-500 mt-1.5 max-w-2xl">
                    The software architects, full-stack engineers, and leaders behind our digital products.
                </p>
            </div>

            <!-- Balanced Compact 5-Column Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 sm:gap-6">
                @foreach($teamImages as $tImg)
                    <div 
                        class="gallery-card group relative overflow-hidden rounded-2xl bg-white border border-slate-200/90 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1 cursor-pointer flex flex-col"
                        data-full-src="{{ $tImg->image_url }}"
                        data-title="{{ $tImg->title ?? 'Team Member' }}"
                        data-alt="{{ $tImg->alt_text ?? 'Backend Coders India team member' }}"
                        tabindex="0"
                        role="button"
                        aria-label="View {{ $tImg->title ?? 'team member' }} in full screen"
                    >
                        <div class="relative aspect-square w-full overflow-hidden bg-slate-100">
                            <img 
                                src="{{ $tImg->image_url }}" 
                                alt="{{ $tImg->alt_text ?? 'Team member at Backend Coders India' }}" 
                                class="h-full w-full object-cover object-top transition duration-500 group-hover:scale-105"
                                loading="lazy"
                                decoding="async"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-60 group-hover:opacity-90 transition"></div>
                            
                            <div class="absolute top-2.5 right-2.5 flex h-7 w-7 items-center justify-center rounded-full bg-black/40 backdrop-blur text-white opacity-0 group-hover:opacity-100 transition duration-200">
                                <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7" /></svg>
                            </div>

                            <div class="absolute bottom-3 left-3 right-3 text-white">
                                <h4 class="font-bold text-xs sm:text-sm line-clamp-1">
                                    {{ Str::before($tImg->title ?? 'Team Member', '–') }}
                                </h4>
                                <p class="text-[11px] text-slate-300 font-medium line-clamp-1">
                                    {{ Str::contains($tImg->title, '–') ? trim(Str::after($tImg->title, '–')) : 'Engineering Team' }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

    </div>
</main>

<!-- ========================================================================= -->
<!-- UNIVERSAL FULLSCREEN LIGHTBOX                                             -->
<!-- ========================================================================= -->
<div 
    id="galleryLightbox" 
    class="fixed inset-0 z-50 hidden bg-slate-950/95 backdrop-blur-md flex items-center justify-center p-3 sm:p-6 transition-opacity duration-300"
    role="dialog"
    aria-modal="true"
    aria-label="Fullscreen Image Viewer"
>
    <!-- Close Button -->
    <button 
        type="button" 
        id="lightboxClose" 
        class="absolute top-4 right-4 sm:top-6 sm:right-6 z-30 flex h-11 w-11 items-center justify-center rounded-full bg-white/10 text-white hover:bg-white/20 active:scale-95 transition focus:outline-none"
        aria-label="Close Lightbox (Esc)"
    >
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <!-- Prev Button -->
    <button 
        type="button" 
        id="lightboxPrev" 
        class="absolute left-3 sm:left-6 z-30 flex h-12 w-12 items-center justify-center rounded-full bg-white/10 text-white hover:bg-white/20 active:scale-95 transition focus:outline-none"
        aria-label="Previous Image (Left Arrow)"
    >
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
    </button>

    <!-- Next Button -->
    <button 
        type="button" 
        id="lightboxNext" 
        class="absolute right-3 sm:right-6 z-30 flex h-12 w-12 items-center justify-center rounded-full bg-white/10 text-white hover:bg-white/20 active:scale-95 transition focus:outline-none"
        aria-label="Next Image (Right Arrow)"
    >
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </button>

    <!-- Image Display Container -->
    <div class="relative max-w-6xl w-full max-h-[92vh] flex flex-col items-center justify-center select-none" id="lightboxContent">
        <div class="relative max-h-[82vh] max-w-full flex items-center justify-center overflow-hidden">
            <img 
                id="lightboxImg" 
                src="" 
                alt="" 
                class="max-h-[82vh] max-w-full w-auto h-auto object-contain rounded-xl shadow-2xl transition duration-200"
            />
        </div>

        <!-- Minimal Title & Counter Bar -->
        <div class="mt-3 text-center text-white/90">
            <p id="lightboxTitle" class="text-sm font-bold tracking-tight"></p>
            <p id="lightboxCounter" class="text-xs text-white/50 font-mono mt-0.5">1 / 1</p>
        </div>
    </div>
</div>

<!-- ========================================================================= -->
<!-- JAVASCRIPT: FILTER TABS & LIGHTBOX                                        -->
<!-- ========================================================================= -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    // -------------------------------------------------------------
    // 1. Interactive Section Filter Tabs
    // -------------------------------------------------------------
    const filterPills = document.querySelectorAll('.gallery-filter-pill');
    const categoryBlocks = {
        'workspace': document.getElementById('section-workspace'),
        'events': document.getElementById('section-events'),
        'team': document.getElementById('section-team'),
    };

    filterPills.forEach(pill => {
        pill.addEventListener('click', function () {
            filterPills.forEach(p => {
                p.classList.remove('active', 'bg-[#FD5528]', 'text-white', 'shadow-md', 'shadow-[#FD5528]/25');
                p.classList.add('bg-white', 'text-slate-700', 'border', 'border-slate-200');
            });

            this.classList.add('active', 'bg-[#FD5528]', 'text-white', 'shadow-md', 'shadow-[#FD5528]/25');
            this.classList.remove('bg-white', 'text-slate-700', 'border', 'border-slate-200');

            const filter = this.getAttribute('data-section-filter');

            if (filter === 'all') {
                Object.values(categoryBlocks).forEach(block => {
                    if (block) block.style.display = 'block';
                });
            } else {
                Object.entries(categoryBlocks).forEach(([key, block]) => {
                    if (block) {
                        if (key === filter) {
                            block.style.display = 'block';
                            block.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        } else {
                            block.style.display = 'none';
                        }
                    }
                });
            }
        });
    });

    // -------------------------------------------------------------
    // 2. Lightbox Interaction
    // -------------------------------------------------------------
    const cards = Array.from(document.querySelectorAll('.gallery-card'));
    const lightbox = document.getElementById('galleryLightbox');
    const lightboxImg = document.getElementById('lightboxImg');
    const lightboxTitle = document.getElementById('lightboxTitle');
    const lightboxCounter = document.getElementById('lightboxCounter');
    const closeBtn = document.getElementById('lightboxClose');
    const prevBtn = document.getElementById('lightboxPrev');
    const nextBtn = document.getElementById('lightboxNext');

    if (!cards.length || !lightbox) return;

    let currentIndex = 0;
    let touchStartX = 0;
    let touchEndX = 0;

    function getVisibleCards() {
        return cards.filter(c => {
            const block = c.closest('.gallery-category-block');
            return !block || block.style.display !== 'none';
        });
    }

    function openLightbox(index) {
        const visible = getVisibleCards();
        if (!visible.length) return;

        currentIndex = index;
        updateLightbox();
        lightbox.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        lightbox.classList.add('hidden');
        document.body.style.overflow = '';
    }

    function updateLightbox() {
        const visible = getVisibleCards();
        if (!visible.length) return;

        const item = visible[currentIndex];
        if (!item) return;

        const src = item.getAttribute('data-full-src');
        const title = item.getAttribute('data-title') || '';
        const alt = item.getAttribute('data-alt') || 'Office photograph';

        lightboxImg.src = src;
        lightboxImg.alt = alt;
        lightboxTitle.textContent = title;
        lightboxCounter.textContent = `${currentIndex + 1} / ${visible.length}`;
    }

    function showNext() {
        const visible = getVisibleCards();
        if (!visible.length) return;
        currentIndex = (currentIndex + 1) % visible.length;
        updateLightbox();
    }

    function showPrev() {
        const visible = getVisibleCards();
        if (!visible.length) return;
        currentIndex = (currentIndex - 1 + visible.length) % visible.length;
        updateLightbox();
    }

    cards.forEach(card => {
        card.addEventListener('click', function () {
            const visible = getVisibleCards();
            const idx = visible.indexOf(this);
            if (idx !== -1) {
                openLightbox(idx);
            }
        });

        card.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                this.click();
            }
        });
    });

    closeBtn.addEventListener('click', closeLightbox);
    nextBtn.addEventListener('click', showNext);
    prevBtn.addEventListener('click', showPrev);

    lightbox.addEventListener('click', function (e) {
        if (e.target === lightbox || e.target.id === 'lightboxContent') {
            closeLightbox();
        }
    });

    document.addEventListener('keydown', function (e) {
        if (lightbox.classList.contains('hidden')) return;

        if (e.key === 'Escape') {
            closeLightbox();
        } else if (e.key === 'ArrowRight') {
            showNext();
        } else if (e.key === 'ArrowLeft') {
            showPrev();
        }
    });

    // Touch Swipe for Mobile
    lightbox.addEventListener('touchstart', function (e) {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    lightbox.addEventListener('touchend', function (e) {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    }, { passive: true });

    function handleSwipe() {
        const threshold = 50;
        if (touchEndX < touchStartX - threshold) {
            showNext();
        } else if (touchEndX > touchStartX + threshold) {
            showPrev();
        }
    }
});
</script>

@endsection
