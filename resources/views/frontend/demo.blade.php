@extends('component.main')

@php
    $demoBreadcrumb = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Home',
                'item' => 'https://backendcodersindia.com/',
            ],
            [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => 'Live Project Demos',
                'item' => 'https://backendcodersindia.com/demo',
            ],
        ],
    ];
@endphp

@push('head')
    <script type="application/ld+json">{!! json_encode($demoBreadcrumb, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
@endpush

@section('content')
<style>
    .font-space-grotesk {
        font-family: 'Space Grotesk', system-ui, -apple-system, sans-serif !important;
    }
    
    .custom-scrollbar::-webkit-scrollbar { width: 6px; height: 6px; }
    .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
    .custom-scrollbar::-webkit-scrollbar-thumb { background: rgba(255, 255, 255, 0.1); border-radius: 99px; }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #FF5A1F; }

    .category-btn.active {
        background-color: #ffffff !important;
        color: #000000 !important;
        font-weight: 700 !important;
        border-color: #ffffff !important;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.3);
        transform: scale(1.02);
    }
</style>

@php
$categories = ['All', 'E-Commerce', 'Finance', 'Medical', 'Services', 'Education', 'Food', 'Fitness', 'EPOS Systems', 'Real Estate', 'Music'];

$demos = [
    [
        'title' => 'Custom Solar Panel Services Website Development',
        'url' => 'https://solarnova-panels.lovable.app',
        'category' => 'Services',
        'tech' => 'Tailwind • Vite • UI/UX',
        'desc' => 'Clean energy platform featuring interactive savings calculators and system configuration decks.',
        'image' => 'assets/images/solar.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'Plumbing Services Website Development',
        'url' => 'https://plumber-web-phi.vercel.app/',
        'category' => 'Services',
        'tech' => 'Tailwind • Vite • UI/UX',
        'desc' => 'A professional business website designed to help plumbing companies generate leads with a clean user interface, instant quote forms, trust badges, service pages, and mobile-friendly navigation.',
        'image' => 'assets/images/plum.png',
        'isLive' => false,
    ],
    [
        'title' => 'Custom Finance Advisor Website Development',
        'url' => 'https://riseup-advisors.lovable.app',
        'category' => 'Finance',
        'tech' => 'Alpine.js • Tailwind',
        'desc' => 'Wealth management workspace displaying wealth distribution charts and investment matrices.',
        'image' => 'assets/images/finance.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'Custom Hospital (Lifeline) Website Development',
        'url' => 'https://lifelinecare.lovable.app',
        'category' => 'Medical',
        'tech' => 'React • Tailwind',
        'desc' => 'Clinical patient care operational dashboard with integrated staff assignment lists.',
        'image' => 'assets/images/hospital.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'Custom Insurance Pro Website Development',
        'url' => 'https://visionary-wealth-pro.lovable.app',
        'category' => 'Finance',
        'tech' => 'Tailwind • Static',
        'desc' => 'Premium coverage assessment wizard built for commercial entity risk management analytics.',
        'image' => 'assets/images/insurance.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'Custom Travel Escapes Website Development',
        'url' => 'https://india-dream-escapes.lovable.app',
        'category' => 'Travel',
        'tech' => 'Tailwind • Interactive',
        'desc' => 'Immersive destination planner tool complete with dynamic itinerary timelines.',
        'image' => 'assets/images/Travel.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'Custom Spa & Wellness Website Development',
        'url' => 'https://sun-and-soul-web.lovable.app',
        'category' => 'Services',
        'tech' => 'Tailwind • Elegant UI',
        'desc' => 'Luxury treatment scheduling grid configured with automated session package blocks.',
        'image' => 'assets/images/Spa.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'Custom SriChandra Gold Website Development',
        'url' => 'https://srichandra-gold-exports.lovable.app',
        'category' => 'E-Commerce',
        'tech' => 'Tailwind • Commerce',
        'desc' => 'B2B international commodities trading system supporting multi-currency pricing models.',
        'image' => 'assets/images/rice.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'School Campus Flow websites by backend coders india',
        'url' => 'https://ifnoss-campus-flow.lovable.app',
        'category' => 'Education',
        'tech' => 'ERP • Dashboard',
        'desc' => 'Unified institutional system managing admissions tracking data and course schedules.',
        'image' => 'assets/images/school.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'luxury Restaurant by backend coders india',
        'url' => 'https://savory-bite-story.lovable.app',
        'category' => 'Food',
        'tech' => 'Tailwind • Menus',
        'desc' => 'Digital culinary catalog featuring rapid item filtering and online checkout systems.',
        'image' => 'assets/images/restro.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'Luxury Recipes by backend coders india',
        'url' => 'https://burrpyz.com/',
        'category' => 'Food',
        'tech' => 'Laravel • Php',
        'desc' => 'An interactive food website where users can explore recipes, browse by category, watch cooking videos, and discover delicious dishes through a clean, intuitive interface.',
        'image' => 'assets/images/recipe.png',
        'isLive' => true,
    ],
    [
        'title' => 'professional Gym websites and software by backend coders india',
        'url' => 'https://kinetic-edge-gym.lovable.app',
        'category' => 'Fitness',
        'tech' => 'Dark Theme • Tailwind',
        'desc' => 'High-contrast performance workspace logging training routines and membership tiers.',
        'image' => 'assets/images/gym.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'Prime Fitness Forge by backend coders india',
        'url' => 'https://prime-fitness-forge.lovable.app',
        'category' => 'Fitness',
        'tech' => 'Tailwind • Fitness UI',
        'desc' => 'Athletic progression board managing structured coach schedules and caloric logs.',
        'image' => 'assets/images/fit.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'e-commerce by backend coders india',
        'url' => 'https://fixed-route-hero.lovable.app',
        'category' => 'Services',
        'tech' => 'Maps • Tailwind',
        'desc' => 'Transit dispatch matrix displaying real-time geographical route mapping coordinates.',
        'image' => 'assets/images/taxi.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'Bike Peddlers – E-Commerce Bicycle Store Website by backend coders india',
        'url' => 'https://brown-fox-437722.hostingersite.com/',
        'category' => 'E-Commerce',
        'tech' => 'React • Angular',
        'desc' => 'A responsive e-commerce platform for bicycles and cycling gear with product catalogs, workshop booking, secure checkout, and mobile-friendly shopping experience.',
        'image' => 'assets/images/mark.png',
        'isLive' => false,
    ],
    [
        'title' => 'Srichandra Gold – Premium Rice Export Website by backend coders india',
        'url' => 'https://srichandrarice.com/',
        'category' => 'E-Commerce',
        'tech' => 'Maps • Tailwind',
        'desc' => 'A modern business website built to promote premium rice varieties, strengthen global brand presence, and connect international buyers through a clean, responsive, and conversion-focused design.',
        'image' => 'assets/images/riceweb.png',
        'isLive' => true,
    ],
    [
        'title' => 'Willow Weir Accessories websites by backend coders india',
        'url' => 'https://willow-weir-luxe-design.lovable.app',
        'category' => 'E-Commerce',
        'tech' => 'Luxury UI • Tailwind',
        'desc' => 'Boutique consumer storefront containing interactive product variation cards.',
        'image' => 'assets/images/accessories.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'Luxury Cars Hire websites by backend coders india',
        'url' => 'https://elegant-ride-uk.lovable.app',
        'category' => 'Services',
        'tech' => 'Premium Grid',
        'desc' => 'High-end exotic car leasing registry featuring detailed fleet specifications tables.',
        'image' => 'assets/images/car.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'Gillingham Plumber websites by backend coders india',
        'url' => 'https://george-gillingham-plumb-site.lovable.app',
        'category' => 'Services',
        'tech' => 'Tailwind • Service',
        'desc' => 'Localized emergency dispatch interface handling client intake ticketing funnels.',
        'image' => 'assets/images/plumber.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'Aura Herbals Ayurveda websites by backend coder india',
        'url' => 'https://aura-herbals-hub.lovable.app',
        'category' => 'Medical',
        'tech' => 'Organic UI • Tailwind',
        'desc' => 'Holistic product catalog displaying dynamic active ingredient listings profiles.',
        'image' => 'assets/images/ayur.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'Child Play & Dine website by backend coders india',
        'url' => 'https://play-and-dine-dreams.lovable.app',
        'category' => 'Education',
        'tech' => 'Playful UI • Tailwind',
        'desc' => 'Family activity management dashboard coordinating event calendar timelines.',
        'image' => 'assets/images/child.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'Farming website by backend coders india',
        'url' => 'https://wooly-web-whisperer.lovable.app',
        'category' => 'Services',
        'tech' => 'Tailwind • Agriculture',
        'desc' => 'Agri-business monitoring system keeping track of livestock yield metrics graphs.',
        'image' => 'assets/images/farming.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'EPOS Cycle Shop System website by backend coders india',
        'url' => 'https://cycle-shop-system-alpha.lovable.app',
        'category' => 'EPOS Systems',
        'tech' => 'System • POS Front',
        'desc' => 'Retail register view configured for rapid barcode entry operations.',
        'image' => 'assets/images/epos.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'GFI Traceability System website by backend coders india',
        'url' => 'https://gfiui.runasp.net/',
        'category' => 'EPOS Systems',
        'tech' => 'System • DotNet',
        'desc' => 'A modern manufacturing web application built by Backend Coders India for end-to-end product traceability, production management, inventory tracking, and real-time operational insights.',
        'image' => 'assets/images/img1.png',
        'isLive' => true,
    ],
    [
        'title' => 'EPOS Admin Panel website by backend coders india',
        'url' => 'https://pos-admin-modular-look.lovable.app',
        'category' => 'EPOS Systems',
        'tech' => 'Admin Dashboard',
        'desc' => 'Master inventory controller module tracking supply chain procurement orders.',
        'image' => 'assets/images/pos.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'EPOS Till View website by backend coders india',
        'url' => 'https://modern-point-nexus.lovable.app',
        'category' => 'EPOS Systems',
        'tech' => 'Point of Sale • Till',
        'desc' => 'High-throughput terminal view for handling instant payment gateway confirmations.',
        'image' => 'assets/images/admin.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'Guideway Consultation website by backend coders india',
        'url' => 'https://guideway-replica-magic-wand.lovable.app',
        'category' => 'Services',
        'tech' => 'Consultancy Profile',
        'desc' => 'Corporate advisory portal mapping milestone timelines for project fulfillment metrics.',
        'image' => 'assets/images/give.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'Giggle Grow Event Planner website by backend coders india',
        'url' => 'https://giggle-grow-gate.lovable.app',
        'category' => 'Services',
        'tech' => 'Tailwind • Events',
        'desc' => 'Reservation system monitoring guest accommodations listings layouts.',
        'image' => 'assets/images/event.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'Social Earn Hub website by backend coders india',
        'url' => 'https://reel-income-hub.lovable.app',
        'category' => 'Finance',
        'tech' => 'Creator Economy UI',
        'desc' => 'Digital monetization analytics board charting performance streaming revenue splits.',
        'image' => 'assets/images/hub.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'Talent Tadka Gig Match website by backend coders india',
        'url' => 'https://creator-gig-match.lovable.app',
        'category' => 'Services',
        'tech' => 'Job Match Matrix',
        'desc' => 'On-demand employment matching ledger filtering contractor availability statuses.',
        'image' => 'assets/images/talent.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'Dr Anjali Clinic website by backend coders india',
        'url' => 'https://dranjaliclinic.lovable.app',
        'category' => 'Medical',
        'tech' => 'Doctor Consultation',
        'desc' => 'Telehealth platform coordinating direct patient diagnostics file uploads.',
        'image' => 'assets/images/dr.anjali.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'QuickFix Plumber Now website by backend coders india',
        'url' => 'https://quickfix-plumber-now.lovable.app',
        'category' => 'Services',
        'tech' => 'On-Demand UI',
        'desc' => 'Geo-targeted localized emergency service interface allocating dispatch resources.',
        'image' => 'assets/images/fix.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'Golden Grain Rice Export website by backend coders india',
        'url' => 'https://golden-grain-export.lovable.app',
        'category' => 'E-Commerce',
        'tech' => 'B2B Wholesale Portal',
        'desc' => 'Logistics shipping ledger managing freight tracking distribution metrics.',
        'image' => 'assets/images/rice2.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'Prestige Prime Real Estate website by backend coders india',
        'url' => 'https://prestige-prime-finder.lovable.app',
        'category' => 'Real Estate',
        'tech' => 'Property Matrix',
        'desc' => 'Broker listing ecosystem showcasing map vectors and virtual tour assets.',
        'image' => 'assets/images/realestate.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'BrightSmile Dental Pro website by backend coders india',
        'url' => 'https://brightsmile-clinic-pro.lovable.app',
        'category' => 'Medical',
        'tech' => 'Medical Clinic Deck',
        'desc' => 'Orthodontic scheduling pipeline parsing provider availability configurations.',
        'image' => 'assets/images/bright.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'Academe Bloom University website by backend coders india',
        'url' => 'https://academe-bloom-start.lovable.app',
        'category' => 'Education',
        'tech' => 'University Portal Layout',
        'desc' => 'Student registration ledger processing curriculum catalog applications structures.',
        'image' => 'assets/images/university.jpg',
        'isLive' => false,
    ],
    [
        'title' => 'Horizon Concierge Craft website by backend coders india',
        'url' => 'https://horizon-concierge-craft.lovable.app',
        'category' => 'Services',
        'tech' => 'Premium Concierge Deck',
        'desc' => 'Hospitality task management deck tracking premium client request portfolios.',
        'image' => 'assets/images/craft.jpg',
        'isLive' => false,
    ],
    [
        'title' => 'DocBook Swift Medicare website by backend coders india',
        'url' => 'https://doc-book-swift.lovable.app',
        'category' => 'Medical',
        'tech' => 'Booking Flow UI',
        'desc' => 'Rapid outpatient intake wizard minimizing check-in queues.',
        'image' => 'assets/images/medi.jpeg',
        'isLive' => false,
    ],
    [
        'title' => 'Jobbers Park website by backend coders india',
        'url' => 'https://hire-and-harmony.lovable.app',
        'category' => 'Services',
        'tech' => 'Recruitment Hub UI',
        'desc' => 'Talent pipeline manager mapping corporate open positions application stages.',
        'image' => 'assets/images/jobber.jpg',
        'isLive' => false,
    ],
    [
        'title' => 'Aaftaab Music – Artist Website by backend coders india',
        'url' => 'https://aaftaabstudio.com/',
        'category' => 'Music',
        'tech' => 'Youtube channel',
        'desc' => 'A responsive music platform for showcasing songs, videos, playlists, and exclusive content with a modern, immersive user experience.',
        'image' => 'assets/images/aaftab.jpeg',
        'isLive' => true,
    ],
];
@endphp

<section class="h-screen w-full bg-[#0a0f1d] font-sans antialiased text-slate-100 overflow-hidden relative flex flex-col">
    <!-- Ambient Background Lighting -->
    <div class="absolute top-[-10%] left-[-5%] w-[700px] h-[700px] bg-[#FF5A1F]/[0.06] rounded-full blur-[140px] pointer-events-none z-0"></div>
    <div class="absolute bottom-[-10%] right-[-5%] w-[600px] h-[600px] bg-white/[0.02] rounded-full blur-[160px] pointer-events-none z-0"></div>

    <!-- Top Horizontal Category Filter Navigation -->
    <div class="w-full px-4 md:px-8 py-3.5 border-b border-white/5 flex-shrink-0 bg-black/20 z-20 relative">
        <div class="flex gap-2 overflow-x-auto pb-1 custom-scrollbar snap-x">
            @foreach($categories as $cat)
                <button 
                    type="button"
                    onclick="filterCategory('{{ $cat }}')"
                    data-category-btn="{{ $cat }}"
                    class="category-btn px-4 py-2 rounded-xl text-xs font-semibold tracking-wide transition-all duration-200 focus:outline-none whitespace-nowrap snap-center border cursor-pointer {{ $cat === 'All' ? 'active bg-white text-black font-bold border-white' : 'bg-white/[0.04] text-slate-300 hover:text-white hover:bg-white/[0.08] border-white/5' }}"
                >
                    {{ $cat }}
                </button>
            @endforeach
        </div>
    </div>

    <!-- Main Workspace Area -->
    <div class="w-full flex-1 flex overflow-hidden relative z-10">
        
        <!-- Left Sidebar: Architecture Roster (Desktop) -->
        <aside class="hidden lg:flex flex-col w-[350px] border-r border-white/10 bg-[#0c1222] h-full flex-shrink-0 relative shadow-2xl">
            <div class="p-5 border-b border-white/5 flex-shrink-0">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-xs font-black uppercase tracking-widest text-[#FF5A1F]">Architecture Roster</span>
                    <button 
                        id="clear-sidebar-btn" 
                        onclick="closeDemo()" 
                        style="display: none;" 
                        class="text-xs font-bold text-white hover:text-[#FF5A1F] bg-white/5 border border-white/10 px-2.5 py-1 rounded-lg transition-all cursor-pointer"
                    >
                        Clear Selector
                    </button>
                </div>
                <div class="relative">
                    <input 
                        type="text" 
                        id="sidebar-search-input" 
                        oninput="onSearchInput(this.value)" 
                        placeholder="Search roster..." 
                        class="w-full rounded-xl border border-white/10 bg-white/[0.04] px-3.5 py-2 text-xs text-white placeholder-slate-500 focus:outline-none focus:border-[#FF5A1F]"
                    >
                </div>
            </div>

            <div class="flex-1 overflow-y-auto p-4 custom-scrollbar bg-gradient-to-b from-transparent to-black/20">
                <div class="space-y-1" id="sidebar-roster-list">
                    @foreach($demos as $index => $demo)
                        <div 
                            onclick="openDemo({{ $index }})"
                            data-sidebar-index="{{ $index }}"
                            data-category="{{ $demo['category'] }}"
                            data-title="{{ strtolower($demo['title']) }}"
                            class="sidebar-demo-item group cursor-pointer rounded-r-xl py-2.5 px-3 text-[13px] transition-all duration-150 truncate select-none flex items-center justify-between text-slate-400 hover:text-white hover:bg-white/[0.03] border-l-[3px] border-transparent"
                        >
                            <span class="truncate tracking-wide">{{ $demo['title'] }}</span>
                            <div class="flex items-center pl-2 flex-shrink-0">
                                <span class="sidebar-status-dot h-2 w-2 rounded-full bg-slate-700 group-hover:bg-slate-400 transition-all duration-150"></span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </aside>

        <!-- Mobile Drawer Sidebar -->
        <div id="mobile-sidebar-modal" class="lg:hidden fixed inset-0 z-50 flex" style="display: none;">
            <div onclick="toggleMobileSidebar(false)" class="fixed inset-0 bg-black/80 backdrop-blur-md"></div>
            <div class="relative flex flex-col w-[300px] bg-[#0c1222] border-r border-white/10 p-5 h-full z-10 shadow-2xl">
                <button type="button" onclick="toggleMobileSidebar(false)" class="absolute top-5 right-5 text-slate-400 hover:text-white p-2 rounded-xl bg-white/5 border border-white/10 cursor-pointer">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>

                <div class="mb-5 mt-2">
                    <h2 class="text-base font-extrabold text-white uppercase tracking-wide">Application Deck</h2>
                    <p class="text-xs text-slate-400 mt-0.5">Select target layout view</p>
                </div>

                <div class="mb-4">
                    <input 
                        type="text" 
                        oninput="onSearchInput(this.value)" 
                        placeholder="Filter matrices..." 
                        class="w-full rounded-xl border border-white/10 bg-white/[0.03] px-4 py-2.5 text-sm text-white focus:outline-none focus:border-[#FF5A1F]"
                    >
                </div>

                <div class="mb-5">
                    <select onchange="filterCategory(this.value)" class="w-full bg-[#111a30] border border-white/10 rounded-xl px-3 py-2.5 text-xs font-medium text-slate-200 focus:outline-none focus:border-[#FF5A1F]">
                        @foreach($categories as $cat)
                            <option value="{{ $cat }}">{{ $cat }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex-1 overflow-y-auto space-y-1 custom-scrollbar">
                    @foreach($demos as $index => $demo)
                        <div 
                            onclick="openDemo({{ $index }}); toggleMobileSidebar(false);"
                            data-mobile-index="{{ $index }}"
                            data-category="{{ $demo['category'] }}"
                            data-title="{{ strtolower($demo['title']) }}"
                            class="mobile-demo-item text-xs rounded-xl cursor-pointer truncate transition-all text-slate-400 hover:text-white hover:bg-white/5 px-3 py-2.5"
                        >
                            {{ $demo['title'] }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Main Display Column -->
        <main class="flex-1 flex flex-col h-full overflow-hidden w-full bg-transparent">
            
            <!-- Sticky Sub-Header -->
            <header class="flex items-center justify-between border-b border-white/10 bg-black/10 px-4 md:px-8 py-4 backdrop-blur-md flex-shrink-0 z-20">
                <div class="flex items-center gap-4 overflow-hidden flex-1">
                    <button type="button" onclick="toggleMobileSidebar(true)" class="lg:hidden p-2.5 rounded-xl bg-white/5 border border-white/10 text-slate-300 hover:text-white flex-shrink-0 cursor-pointer">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </button>
                    <div class="truncate">
                        <h2 class="text-base font-extrabold text-white flex items-center gap-3 truncate tracking-tight">
                            <span id="header-matrix-title" class="truncate">All Systems Blueprint Matrix</span>
                            <span id="status-badge-grid" class="inline-flex items-center px-2.5 py-1 rounded-full text-[10px] font-bold bg-[#FF5A1F]/10 text-[#FF5A1F] border border-[#FF5A1F]/20 tracking-wider uppercase whitespace-nowrap">Grid Overview</span>
                            <span id="status-badge-active" style="display: none;" class="inline-flex items-center px-2.5 py-1 rounded-full text-[10px] font-bold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 tracking-wider uppercase whitespace-nowrap">Active Container</span>
                        </h2>
                    </div>
                </div>

                <div class="flex items-center gap-2 flex-shrink-0 ml-4">
                    <button 
                        type="button"
                        id="close-viewport-btn" 
                        onclick="closeDemo()" 
                        style="display: none;" 
                        class="rounded-xl border border-white/10 bg-white/5 hover:bg-white/10 px-4 py-2 text-xs font-bold text-white transition-all flex items-center gap-2 shadow-md cursor-pointer"
                    >
                        <svg class="w-3.5 h-3.5 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path></svg>
                        <span>Close Viewport</span>
                    </button>
                </div>
            </header>

            <!-- Scrollable Workspace Canvas -->
            <div class="flex-1 p-4 md:p-8 relative overflow-y-auto custom-scrollbar">
                
                <!-- 1. Grid of Portfolio Cards (Server-Side Rendered) -->
                <div id="demo-grid-view" class="h-full w-full">
                    <div class="mb-8">
                        <h1 class="text-2xl font-black text-white tracking-tight uppercase">Website &amp; Software Development Portfolio Demos</h1>
                        <h3 class="mt-2 text-sm font-bold text-[#FF5A1F] tracking-wide uppercase">System Deployments Matrix</h3>
                        <p class="text-sm text-slate-400 mt-1.5 max-w-2xl leading-relaxed">Select an architectural template deck down below to initialize its sandbox execution pipeline container frame view wrapper.</p>
                    </div>

                    <!-- Cards Grid Container -->
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 pb-24" id="cards-container">
                        @foreach($demos as $index => $demo)
                            <div 
                                onclick="openDemo({{ $index }})"
                                data-card-index="{{ $index }}"
                                data-category="{{ $demo['category'] }}"
                                data-title="{{ strtolower($demo['title']) }}"
                                class="demo-card group cursor-pointer rounded-2xl border border-white/10 bg-[#0c1222]/60 backdrop-blur-xl hover:border-[#FF5A1F] hover:bg-[#0c1222]/90 hover:-translate-y-1 transition-all duration-300 flex flex-col h-[340px] shadow-xl relative overflow-hidden"
                            >
                                <div class="h-44 w-full relative overflow-hidden bg-slate-900 flex-shrink-0 border-b border-white/5">
                                    <img 
                                        src="{{ asset($demo['image']) }}" 
                                        alt="{{ $demo['title'] }}" 
                                        loading="lazy" 
                                        onerror="this.onerror=null; this.src='{{ asset('assets/images/banner.png') }}';"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 brightness-75 group-hover:brightness-95"
                                    >
                                    <div class="absolute top-3 left-3 px-2 py-0.5 rounded text-[9px] font-bold uppercase tracking-wider backdrop-blur-md border {{ $demo['isLive'] ? 'bg-emerald-950/80 text-emerald-300 border-emerald-500/40' : 'bg-black/60 text-slate-300 border-white/10' }}">
                                        {{ $demo['isLive'] ? 'Live Client Site' : 'UI/UX Concept Prototype' }}
                                    </div>
                                    <div class="absolute top-3 right-3 bg-black/70 backdrop-blur-md border border-white/10 text-white text-[10px] uppercase font-black tracking-widest px-2.5 py-1 rounded-lg">
                                        {{ $demo['category'] }}
                                    </div>
                                </div>

                                <div class="p-5 flex flex-col justify-between flex-1">
                                    <div>
                                        <h4 class="text-base font-extrabold text-white group-hover:text-[#FF5A1F] transition-colors truncate tracking-wide">
                                            {{ $demo['title'] }}
                                        </h4>
                                        <p class="text-xs font-medium text-slate-400 line-clamp-2 mt-1.5 leading-relaxed">
                                            {{ $demo['desc'] }}
                                        </p>
                                    </div>

                                    <div class="border-t border-white/5 pt-3.5 flex items-center justify-between text-[11px] font-semibold">
                                        <span class="text-slate-500 font-mono truncate max-w-[150px]">{{ $demo['tech'] }}</span>
                                        <button
                                            type="button"
                                            onclick="event.stopPropagation(); openDemo({{ $index }});"
                                            class="text-[#FF5A1F] group-hover:translate-x-1 transition-transform flex items-center gap-1.5 cursor-pointer font-bold focus:outline-none"
                                        >
                                            <span>View Demo</span>
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- No Results Fallback -->
                    <div id="no-results-state" style="display: none;" class="py-16 text-center">
                        <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-white/5 border border-white/10 text-slate-400 mb-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <h3 class="text-base font-bold text-white">No Matching Demos Found</h3>
                        <p class="text-xs text-slate-400 mt-1">Try selecting another category or clearing your search term.</p>
                        <button type="button" onclick="filterCategory('All')" class="mt-4 px-4 py-2 rounded-xl bg-[#FF5A1F] text-white text-xs font-bold hover:bg-[#e04810] transition-colors cursor-pointer">
                            Reset Filters
                        </button>
                    </div>
                </div>

                <!-- 2. Active Demo Container with Embedded Iframe (URL Masked) -->
                <div id="demo-iframe-view" style="display: none;" class="h-full flex flex-col overflow-hidden rounded-2xl border border-white/10 bg-slate-950 shadow-2xl absolute inset-4 md:inset-6">
                    <!-- Window Control Header (URL Masked) -->
                    <div class="flex items-center justify-between border-b border-white/10 bg-black/60 px-4 py-3 flex-shrink-0 gap-4">
                        <div class="flex items-center gap-2.5">
                            <button type="button" onclick="closeDemo()" class="h-3 w-3 rounded-full bg-red-500/80 hover:bg-red-500 transition-colors border border-red-500/30 cursor-pointer" title="Close Preview"></button>
                            <span class="h-3 w-3 rounded-full bg-amber-500/40 border border-amber-500/20"></span>
                            <span class="h-3 w-3 rounded-full bg-emerald-500/40 border border-emerald-500/20"></span>
                            <span id="iframe-category-badge" class="ml-2 hidden sm:inline-flex items-center px-2 py-0.5 rounded text-[10px] font-bold uppercase tracking-wider bg-white/5 text-slate-300 border border-white/10">Services</span>
                        </div>
                        
                        <!-- Center: Protected Mock Address Bar (URL Strictly Hidden, Project Title Shown) -->
                        <div class="flex-1 max-w-md mx-auto flex items-center justify-center gap-2 rounded-xl bg-black/50 border border-white/10 px-4 py-1.5 text-slate-300 overflow-hidden">
                            <svg class="w-3.5 h-3.5 text-emerald-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 0 1-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                            <span id="mock-address-bar-title" class="truncate font-mono text-[11px] text-white font-bold tracking-wider">Interactive Live Preview</span>
                        </div>
                        
                        <!-- Right: Reload, Launch New Window, and Close Controls -->
                        <div class="flex items-center gap-2">
                            <button
                                type="button"
                                onclick="reloadDemo()"
                                class="rounded-lg border border-white/10 bg-white/5 hover:bg-white/10 p-1.5 text-slate-300 hover:text-white transition cursor-pointer"
                                title="Reload Live Demo"
                            >
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                            </button>
                            <button
                                type="button"
                                onclick="openDemoInNewWindow()"
                                class="rounded-lg border border-white/10 bg-white/5 hover:bg-white/10 p-1.5 text-slate-300 hover:text-white transition cursor-pointer"
                                title="Open Live Site in Full Window"
                            >
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                            </button>
                            <a
                                href="{{ route('frontend.demo') }}"
                                onclick="event.preventDefault(); closeDemo();"
                                class="inline-flex items-center gap-1.5 rounded-xl border border-white/10 bg-white/5 px-3 py-1.5 text-xs font-bold text-white transition hover:bg-white/10 hover:border-white/20 cursor-pointer"
                                title="Close Preview"
                            >
                                <svg class="w-3.5 h-3.5 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path></svg>
                                <span class="hidden sm:inline">Close</span>
                            </a>
                        </div>
                    </div>

                    <!-- Full-Height Live Interactive Iframe with Visual Loading Spinner -->
                    <div class="relative flex-1 w-full h-full bg-slate-950 overflow-hidden">
                        <!-- Loading Overlay -->
                        <div id="demo-iframe-loader" class="absolute inset-0 flex flex-col items-center justify-center bg-slate-950 z-20 transition-opacity p-4">
                            <div class="h-10 w-10 border-4 border-[#FF5A1F]/20 border-t-[#FF5A1F] rounded-full animate-spin"></div>
                            <p class="mt-4 text-xs font-bold uppercase tracking-widest text-slate-300">Loading Interactive Demo...</p>
                            <p id="loader-demo-title" class="mt-1 text-[11px] font-medium text-slate-500 max-w-sm truncate text-center px-4"></p>
                            
                            <!-- Remote Host Fallback Notice if framing is delayed or blocked -->
                            <div id="iframe-fallback-notice" style="display: none;" class="mt-6 flex flex-col items-center max-w-md text-center p-4 rounded-xl bg-white/[0.04] border border-white/10">
                                <p class="text-xs text-slate-300">If the remote site does not render inside the frame wrapper:</p>
                                <button type="button" onclick="openDemoInNewWindow()" class="mt-2.5 inline-flex items-center gap-1.5 px-4 py-2 rounded-xl bg-[#FF5A1F] text-white text-xs font-bold hover:bg-[#e04810] transition-colors cursor-pointer">
                                    <span>Launch Live Site Directly</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                </button>
                            </div>
                        </div>

                        <!-- Embedded Interactive Iframe -->
                        <iframe
                            id="demo-viewport-iframe"
                            src="about:blank"
                            title="Live Demo Preview"
                            referrerpolicy="no-referrer"
                            onload="onIframeLoaded()"
                            onerror="onIframeError()"
                            class="w-full h-full border-0 bg-white"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>
                    </div>
                </div>

            </div>
        </main>
    </div>
</section>

<script>
    const allDemos = @json($demos);
    let currentCategory = 'All';
    let searchQuery = '';
    let currentDemoIndex = null;

    function filterCategory(cat) {
        currentCategory = cat;

        // Update top category buttons
        document.querySelectorAll('.category-btn').forEach(btn => {
            const btnCat = btn.getAttribute('data-category-btn');
            if (btnCat === cat) {
                btn.classList.add('active', 'bg-white', 'text-black', 'font-bold', 'border-white');
                btn.classList.remove('bg-white/[0.04]', 'text-slate-300', 'border-white/5');
            } else {
                btn.classList.remove('active', 'bg-white', 'text-black', 'font-bold', 'border-white');
                btn.classList.add('bg-white/[0.04]', 'text-slate-300', 'border-white/5');
            }
        });

        // Update header title if in grid view
        if (currentDemoIndex === null) {
            const titleEl = document.getElementById('header-matrix-title');
            if (titleEl) {
                titleEl.textContent = cat === 'All' ? 'All Systems Blueprint Matrix' : cat + ' Systems Blueprint Matrix';
            }
        }

        applyFilters();
    }

    function onSearchInput(val) {
        searchQuery = (val || '').trim().toLowerCase();
        applyFilters();
    }

    function applyFilters() {
        let visibleCount = 0;

        // Filter cards in grid
        document.querySelectorAll('.demo-card').forEach(card => {
            const cardCat = card.getAttribute('data-category');
            const cardTitle = card.getAttribute('data-title') || '';
            const matchCat = (currentCategory === 'All' || cardCat === currentCategory);
            const matchSearch = (searchQuery === '' || cardTitle.includes(searchQuery));

            if (matchCat && matchSearch) {
                card.style.display = 'flex';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        // Filter sidebar roster items
        document.querySelectorAll('.sidebar-demo-item').forEach(item => {
            const itemCat = item.getAttribute('data-category');
            const itemTitle = item.getAttribute('data-title') || '';
            const matchCat = (currentCategory === 'All' || itemCat === currentCategory);
            const matchSearch = (searchQuery === '' || itemTitle.includes(searchQuery));

            item.style.display = (matchCat && matchSearch) ? 'flex' : 'none';
        });

        // Filter mobile drawer items
        document.querySelectorAll('.mobile-demo-item').forEach(item => {
            const itemCat = item.getAttribute('data-category');
            const itemTitle = item.getAttribute('data-title') || '';
            const matchCat = (currentCategory === 'All' || itemCat === currentCategory);
            const matchSearch = (searchQuery === '' || itemTitle.includes(searchQuery));

            item.style.display = (matchCat && matchSearch) ? 'block' : 'none';
        });

        // Show/hide empty state
        const emptyState = document.getElementById('no-results-state');
        if (emptyState) {
            emptyState.style.display = (visibleCount === 0) ? 'block' : 'none';
        }
    }

    function openDemo(index) {
        const demo = allDemos[index];
        if (!demo) return;

        currentDemoIndex = index;

        // Switch workspace views
        const gridView = document.getElementById('demo-grid-view');
        const iframeView = document.getElementById('demo-iframe-view');
        const closeBtn = document.getElementById('close-viewport-btn');
        const clearSidebarBtn = document.getElementById('clear-sidebar-btn');
        const statusGrid = document.getElementById('status-badge-grid');
        const statusActive = document.getElementById('status-badge-active');
        const headerTitle = document.getElementById('header-matrix-title');

        if (gridView) gridView.style.display = 'none';
        if (iframeView) iframeView.style.display = 'flex';
        if (closeBtn) closeBtn.style.display = 'inline-flex';
        if (clearSidebarBtn) clearSidebarBtn.style.display = 'inline-block';
        if (statusGrid) statusGrid.style.display = 'none';
        if (statusActive) statusActive.style.display = 'inline-flex';
        if (headerTitle) headerTitle.textContent = demo.title;

        // Highlight active item in sidebar roster
        document.querySelectorAll('.sidebar-demo-item').forEach(el => {
            const idx = parseInt(el.getAttribute('data-sidebar-index'), 10);
            const dot = el.querySelector('.sidebar-status-dot');
            if (idx === index) {
                el.classList.add('text-white', 'bg-gradient-to-r', 'from-[#FF5A1F]/15', 'to-transparent', 'font-bold', 'border-l-[3px]', 'border-[#FF5A1F]', 'pl-4', 'bg-black/20');
                el.classList.remove('text-slate-400', 'border-transparent');
                if (dot) {
                    dot.classList.add('bg-[#FF5A1F]', 'ring-4', 'ring-[#FF5A1F]/20', 'scale-110');
                    dot.classList.remove('bg-slate-700');
                }
            } else {
                el.classList.remove('text-white', 'bg-gradient-to-r', 'from-[#FF5A1F]/15', 'to-transparent', 'font-bold', 'border-[#FF5A1F]', 'pl-4', 'bg-black/20');
                el.classList.add('text-slate-400', 'border-transparent');
                if (dot) {
                    dot.classList.remove('bg-[#FF5A1F]', 'ring-4', 'ring-[#FF5A1F]/20', 'scale-110');
                    dot.classList.add('bg-slate-700');
                }
            }
        });

        // Set mock address bar title (Masking URL completely)
        const addressTitle = document.getElementById('mock-address-bar-title');
        if (addressTitle) addressTitle.textContent = demo.title;

        const categoryBadge = document.getElementById('iframe-category-badge');
        if (categoryBadge) categoryBadge.textContent = demo.category;

        const loaderTitle = document.getElementById('loader-demo-title');
        if (loaderTitle) loaderTitle.textContent = demo.title;

        // Reset fallback notice and schedule timer if remote host is slow or blocked by CSP
        const fallbackNotice = document.getElementById('iframe-fallback-notice');
        if (fallbackNotice) fallbackNotice.style.display = 'none';

        clearTimeout(window.iframeFallbackTimer);
        window.iframeFallbackTimer = setTimeout(() => {
            const loaderEl = document.getElementById('demo-iframe-loader');
            if (loaderEl && loaderEl.style.display !== 'none' && fallbackNotice) {
                fallbackNotice.style.display = 'flex';
            }
        }, 3500);

        // Show loader and set iframe source
        const loader = document.getElementById('demo-iframe-loader');
        if (loader) loader.style.display = 'flex';

        const iframe = document.getElementById('demo-viewport-iframe');
        if (iframe) {
            iframe.src = demo.url;
        }
    }

    function openDemoInNewWindow() {
        if (currentDemoIndex !== null && allDemos[currentDemoIndex]) {
            const demo = allDemos[currentDemoIndex];
            window.open(demo.url, '_blank', 'noopener,noreferrer');
        }
    }

    function onIframeError() {
        const fallbackNotice = document.getElementById('iframe-fallback-notice');
        if (fallbackNotice) fallbackNotice.style.display = 'flex';
    }

    function closeDemo() {
        currentDemoIndex = null;
        clearTimeout(window.iframeFallbackTimer);

        const gridView = document.getElementById('demo-grid-view');
        const iframeView = document.getElementById('demo-iframe-view');
        const closeBtn = document.getElementById('close-viewport-btn');
        const clearSidebarBtn = document.getElementById('clear-sidebar-btn');
        const statusGrid = document.getElementById('status-badge-grid');
        const statusActive = document.getElementById('status-badge-active');
        const headerTitle = document.getElementById('header-matrix-title');
        const fallbackNotice = document.getElementById('iframe-fallback-notice');
        if (fallbackNotice) fallbackNotice.style.display = 'none';

        if (iframeView) iframeView.style.display = 'none';
        if (gridView) gridView.style.display = 'block';
        if (closeBtn) closeBtn.style.display = 'none';
        if (clearSidebarBtn) clearSidebarBtn.style.display = 'none';
        if (statusGrid) statusGrid.style.display = 'inline-flex';
        if (statusActive) statusActive.style.display = 'none';

        if (headerTitle) {
            headerTitle.textContent = currentCategory === 'All' ? 'All Systems Blueprint Matrix' : currentCategory + ' Systems Blueprint Matrix';
        }

        // Reset sidebar roster highlighting
        document.querySelectorAll('.sidebar-demo-item').forEach(el => {
            el.classList.remove('text-white', 'bg-gradient-to-r', 'from-[#FF5A1F]/15', 'to-transparent', 'font-bold', 'border-[#FF5A1F]', 'pl-4', 'bg-black/20');
            el.classList.add('text-slate-400', 'border-transparent');
            const dot = el.querySelector('.sidebar-status-dot');
            if (dot) {
                dot.classList.remove('bg-[#FF5A1F]', 'ring-4', 'ring-[#FF5A1F]/20', 'scale-110');
                dot.classList.add('bg-slate-700');
            }
        });

        // Clear iframe to release memory
        const iframe = document.getElementById('demo-viewport-iframe');
        if (iframe) {
            iframe.src = 'about:blank';
        }
    }

    function reloadDemo() {
        if (currentDemoIndex !== null && allDemos[currentDemoIndex]) {
            const loader = document.getElementById('demo-iframe-loader');
            if (loader) loader.style.display = 'flex';

            const iframe = document.getElementById('demo-viewport-iframe');
            if (iframe) {
                iframe.src = allDemos[currentDemoIndex].url;
            }
        }
    }

    function onIframeLoaded() {
        const loader = document.getElementById('demo-iframe-loader');
        if (loader) loader.style.display = 'none';
    }

    function toggleMobileSidebar(show) {
        const modal = document.getElementById('mobile-sidebar-modal');
        if (modal) {
            modal.style.display = show ? 'flex' : 'none';
        }
    }

    // Keyboard shortcut: Press Escape to close preview
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && currentDemoIndex !== null) {
            closeDemo();
        }
    });
</script>
@endsection
