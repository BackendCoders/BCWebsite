@extends('component.main')
@section('content')
<style>
    /* Register and enforce Space Grotesk global hierarchy styling rules */
    .font-space-grotesk {
      font-family: 'Space Grotesk', system-ui, -apple-system, sans-serif !important;
    }
    
    .custom-scrollbar::-webkit-scrollbar { width: 6px; height: 6px; }
    .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
    .custom-scrollbar::-webkit-scrollbar-thumb { background: rgba(255, 255, 255, 0.1); border-radius: 99px; }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #FF5A1F; }
  </style>

@push('head')
  <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/csp@3.15.11/dist/cdn.min.js"></script>
@endpush

<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>


  <section 
    class="h-screen w-full bg-[#0a0f1d] font-sans antialiased text-slate-100 overflow-hidden relative flex flex-col"
    data-alpine-csp
    x-data="{ 
      mobileSidebarOpen: false,
      activeCategory: 'All',
      searchQuery: '',
      currentDemo: null,
      demos: [
        {title: 'Custom Solar Panel Services Website Development', url: 'https://solarnova-panels.lovable.app', category: 'Services', tech: 'Tailwind • Vite • UI/UX', desc: 'Clean energy platform featuring interactive savings calculators and system configuration decks.', image: 'assets/images/solar.jpeg'},

          {title: 'Plumbing Services Website Development', url: 'https://plumber-web-phi.vercel.app/', category: 'Services', tech: 'Tailwind • Vite • UI/UX', desc: 'A professional business website designed to help plumbing companies generate leads with a clean user interface, instant quote forms, trust badges, service pages, and mobile-friendly navigation.', image: 'assets/images/plum.png'},

        {title: 'Custom Finance Advisor Website Development', url: 'https://riseup-advisors.lovable.app', category: 'Finance', tech: 'Alpine.js • Tailwind', desc: 'Wealth management workspace displaying wealth distribution charts and investment matrices.', image: 'assets/images/finance.jpeg'},
        {title: 'Custom Hospital (Lifeline) Website Development', url: 'https://lifelinecare.lovable.app', category: 'Medical', tech: 'React • Tailwind', desc: 'Clinical patient care operational dashboard with integrated staff assignment lists.', image: 'assets/images/hospital.jpeg'},
        {title: 'Custom Insurance Pro Website Development', url: 'https://visionary-wealth-pro.lovable.app', category: 'Finance', tech: 'Tailwind • Static', desc: 'Premium coverage assessment wizard built for commercial entity risk management analytics.', image: 'assets/images/insurance.jpeg'},
        {title: 'Custom Travel Escapes Website Development', url: 'https://india-dream-escapes.lovable.app', category: 'Travel', tech: 'Tailwind • Interactive', desc: 'Immersive destination planner tool complete with dynamic itinerary timelines.', image: 'assets/images/Travel.jpeg'},
        {title: 'Custom Spa & Wellness Website Development', url: 'https://sun-and-soul-web.lovable.app', category: 'Services', tech: 'Tailwind • Elegant UI', desc: 'Luxury treatment scheduling grid configured with automated session package blocks.', image: 'assets/images/Spa.jpeg'},
        {title: 'Custom SriChandra Gold Website Development', url: 'https://srichandra-gold-exports.lovable.app', category: 'E-Commerce', tech: 'Tailwind • Commerce', desc: 'B2B international commodities trading system supporting multi-currency pricing models.', image: 'assets/images/rice.jpeg'},
        {title: 'School Campus Flow websites by backend coders india', url: 'https://ifnoss-campus-flow.lovable.app', category: 'Education', tech: 'ERP • Dashboard', desc: 'Unified institutional system managing admissions tracking data and course schedules.', image: 'assets/images/school.jpeg'},
        {title: 'luxury Restaurant by backend coders india', url: 'https://savory-bite-story.lovable.app', category: 'Food', tech: 'Tailwind • Menus', desc: 'Digital culinary catalog featuring rapid item filtering and online checkout systems.', image: 'assets/images/restro.jpeg'},

        {title: 'Luxury Recipes by backend coders india', url: 'https://burrpyz.com/', category: 'Food', tech: 'Laravel • Php', desc: 'An interactive food website where users can explore recipes, browse by category, watch cooking videos, and discover delicious dishes through a clean, intuitive interface.', image: 'assets/images/recipe.png'},

        {title: 'professional Gym websites and software by backend coders india', url: 'https://kinetic-edge-gym.lovable.app', category: 'Fitness', tech: 'Dark Theme • Tailwind', desc: 'High-contrast performance workspace logging training routines and membership tiers.', image: 'assets/images/gym.jpeg'},
        {title: 'Prime Fitness Forge by backend coders india', url: 'https://prime-fitness-forge.lovable.app', category: 'Fitness', tech: 'Tailwind • Fitness UI', desc: 'Athletic progression board managing structured coach schedules and caloric logs.', image: 'assets/images/fit.jpeg'},
        {title: 'e-commerce by backend coders india', url: 'https://fixed-route-hero.lovable.app', category: 'Services', tech: 'Maps • Tailwind', desc: 'Transit dispatch matrix displaying real-time geographical route mapping coordinates.', image: 'assets/images/taxi.jpeg'},

        {title: 'Bike Peddlers – E-Commerce Bicycle Store Website by backend coders india', url: 'https://brown-fox-437722.hostingersite.com/', category: 'E-Commerce', tech: 'React • Angular', desc: 'A responsive e-commerce platform for bicycles and cycling gear with product catalogs, workshop booking, secure checkout, and mobile-friendly shopping experience.', image: 'assets/images/mark.png'},

        
        {title: 'Srichandra Gold – Premium Rice Export Website by backend coders india', url: 'https://srichandrarice.com/', category: 'E-Commerce', tech: 'Maps • Tailwind', desc: 'A modern business website built to promote premium rice varieties, strengthen global brand presence, and connect international buyers through a clean, responsive, and conversion-focused design.', image: 'assets/images/riceweb.png'},

        {title: 'Willow Weir Accessories websites by backend coders india', url: 'https://willow-weir-luxe-design.lovable.app', category: 'E-Commerce', tech: 'Luxury UI • Tailwind', desc: 'Boutique consumer storefront containing interactive product variation cards.', image: 'assets/images/accessories.jpeg'},
        {title: 'Luxury Cars Hire websites by backend coders india', url: 'https://elegant-ride-uk.lovable.app', category: 'Services', tech: 'Premium Grid', desc: 'High-end exotic car leasing registry featuring detailed fleet specifications tables.', image: 'assets/images/car.jpeg'},
        {title: 'Gillingham Plumber websites by backend coders india', url: 'https://george-gillingham-plumb-site.lovable.app', category: 'Services', tech: 'Tailwind • Service', desc: 'Localized emergency dispatch interface handling client intake ticketing funnels.', image: 'assets/images/plumber.jpeg'},
        {title: 'Aura Herbals Ayurveda websites by backend coder india', url: 'https://aura-herbals-hub.lovable.app', category: 'Medical', tech: 'Organic UI • Tailwind', desc: 'Holistic product catalog displaying dynamic active ingredient listings profiles.', image: 'assets/images/ayur.jpeg'},
        {title: 'Child Play & Dine website by backend coders india', url: 'https://play-and-dine-dreams.lovable.app', category: 'Education', tech: 'Playful UI • Tailwind', desc: 'Family activity management dashboard coordinating event calendar timelines.', image: 'assets/images/child.jpeg'},
        {title: 'Farming website by backend coders india', url: 'https://wooly-web-whisperer.lovable.app', category: 'Services', tech: 'Tailwind • Agriculture', desc: 'Agri-business monitoring system keeping track of livestock yield metrics graphs.', image: 'assets/images/farming.jpeg'},
        {title: 'EPOS Cycle Shop System website by backend coders india', url: 'https://cycle-shop-system-alpha.lovable.app', category: 'EPOS Systems', tech: 'System • POS Front', desc: 'Retail register view configured for rapid barcode entry operations.', image: 'assets/images/epos.jpeg'},

         {title: 'GFI Traceability System website by backend coders india', url: 'https://gfiui.runasp.net/', category: 'EPOS Systems', tech: 'System • DotNet', desc: 'A modern manufacturing web application built by Backend Coders India for end-to-end product traceability, production management, inventory tracking, and real-time operational insights.', image: 'assets/images/img1.png'},

        {title: 'EPOS Admin Panel website by backend coders india', url: 'https://pos-admin-modular-look.lovable.app', category: 'EPOS Systems', tech: 'Admin Dashboard', desc: 'Master inventory controller module tracking supply chain procurement orders.', image: 'assets/images/pos.jpeg'},
        {title: 'EPOS Till View website by backend coders india', url: 'https://modern-point-nexus.lovable.app', category: 'EPOS Systems', tech: 'Point of Sale • Till', desc: 'High-throughput terminal view for handling instant payment gateway confirmations.', image: 'assets/images/admin.jpeg'},
        {title: 'Guideway Consultation website by backend coders india', url: 'https://guideway-replica-magic-wand.lovable.app', category: 'Services', tech: 'Consultancy Profile', desc: 'Corporate advisory portal mapping milestone timelines for project fulfillment metrics.', image: 'assets/images/give.jpeg'},
        {title: 'Giggle Grow Event Planner website by backend coders india', url: 'https://giggle-grow-gate.lovable.app', category: 'Services', tech: 'Tailwind • Events', desc: 'Reservation system monitoring guest accommodations listings layouts.', image: 'assets/images/event.jpeg'},
        {title: 'Social Earn Hub website by backend coders india', url: 'https://reel-income-hub.lovable.app', category: 'Finance', tech: 'Creator Economy UI', desc: 'Digital monetization analytics board charting performance streaming revenue splits.', image: 'assets/images/hub.jpeg'},
        {title: 'Talent Tadka Gig Match website by backend coders india', url: 'https://creator-gig-match.lovable.app', category: 'Services', tech: 'Job Match Matrix', desc: 'On-demand employment matching ledger filtering contractor availability statuses.', image: 'assets/images/talent.jpeg'},
        {title: 'Dr Anjali Clinic website by backend coders india', url: 'https://dranjaliclinic.lovable.app', category: 'Medical', tech: 'Doctor Consultation', desc: 'Telehealth platform coordinating direct patient diagnostics file uploads.', image: 'assets/images/dr.anjali.jpeg'},
        {title: 'QuickFix Plumber Now website by backend coders india', url: 'https://quickfix-plumber-now.lovable.app', category: 'Services', tech: 'On-Demand UI', desc: 'Geo-targeted localized emergency service interface allocating dispatch resources.', image: 'assets/images/fix.jpeg'},
        {title: 'Golden Grain Rice Export website by backend coders india', url: 'https://golden-grain-export.lovable.app', category: 'E-Commerce', tech: 'B2B Wholesale Portal', desc: 'Logistics shipping ledger managing freight tracking distribution metrics.', image: 'assets/images/rice2.jpeg'},
        {title: 'Prestige Prime Real Estate website by backend coders india', url: 'https://prestige-prime-finder.lovable.app', category: 'Real Estate', tech: 'Property Matrix', desc: 'Broker listing ecosystem showcasing map vectors and virtual tour assets.', image: 'assets/images/realestate.jpeg'},
        {title: 'BrightSmile Dental Pro website by backend coders india', url: 'https://brightsmile-clinic-pro.lovable.app', category: 'Medical', tech: 'Medical Clinic Deck', desc: 'Orthodontic scheduling pipeline parsing provider availability configurations.', image: 'assets/images/bright.jpeg'},
        {title: 'Academe Bloom University website by backend coders india', url: 'https://academe-bloom-start.lovable.app', category: 'Education', tech: 'University Portal Layout', desc: 'Student registration ledger processing curriculum catalog applications structures.', image: 'assets/images/university.jpg'},
        {title: 'Horizon Concierge Craft website by backend coders india', url: 'https://horizon-concierge-craft.lovable.app', category: 'Services', tech: 'Premium Concierge Deck', desc: 'Hospitality task management deck tracking premium client request portfolios.', image: 'assets/images/craft.jpg'},
        {title: 'DocBook Swift Medicare website by backend coders india', url: 'https://doc-book-swift.lovable.app', category: 'Medical', tech: 'Booking Flow UI', desc: 'Rapid outpatient intake wizard minimizing check-in queues.', image: 'assets/images/medi.jpeg'},
        {title: 'Jobbers Park website by backend coders india', url: 'https://hire-and-harmony.lovable.app', category: 'Services', tech: 'Recruitment Hub UI', desc: 'Talent pipeline manager mapping corporate open positions application stages.', image: 'assets/images/jobber.jpg'},

          {title: 'Aaftaab Music – Artist Website by backend coders india', url: 'https://aaftaabstudio.com/', category: 'Music', tech: 'Youtube channel', desc: 'A responsive music platform for showcasing songs, videos, playlists, and exclusive content with a modern, immersive user experience.', image: 'assets/images/aaftab.jpeg'},
      ],
      categories: ['All', 'E-Commerce', 'Finance', 'Medical', 'Services', 'Education', 'Food', 'Fitness', 'EPOS Systems', 'Real Estate','Music']
    }"
  >
    <div class="absolute top-[-10%] left-[-5%] w-[700px] h-[700px] bg-[#FF5A1F]/[0.06] rounded-full blur-[140px] pointer-events-none z-0"></div>
    <div class="absolute bottom-[-10%] right-[-5%] w-[600px] h-[600px] bg-white/[0.02] rounded-full blur-[160px] pointer-events-none z-0"></div>

    <div class="w-full px-6 md:px-8 py-4 border-b border-white/5 flex-shrink-0 bg-black/20 z-20 relative">
      <div class="flex gap-2 overflow-x-auto pb-1.5 custom-scrollbar snap-x">
        <template x-for="cat in categories" :key="cat">
          <button 
            @click="activeCategory = cat" 
            :class="activeCategory === cat 
              ? 'bg-white text-black font-bold border-white shadow-lg scale-[1.02]' 
              : 'bg-white/[0.04] text-slate-300 hover:text-white hover:bg-white/[0.08] border-white/5'" 
            class="px-4 py-2 rounded-xl text-xs font-semibold tracking-wide transition-all duration-200 focus:outline-none whitespace-nowrap snap-center border cursor-pointer" 
            x-text="cat"
          ></button>
        </template>
      </div>
    </div>

    <div class="w-full flex-1 flex overflow-hidden relative z-10">
      
    <aside class="hidden lg:flex flex-col w-[350px] border-r border-white/10 bg-[#0c1222] h-full flex-shrink-0 relative shadow-2xl">


        <div class="flex-1 overflow-y-auto p-5 custom-scrollbar bg-gradient-to-b from-transparent to-black/20">
          <div class="flex items-center justify-between px-1 mb-4 flex-shrink-0">
            <span class="text-xs font-black uppercase tracking-widest text-[#FF5A1F]">Architecture Roster</span>
            <button x-show="currentDemo" @click="currentDemo = null" class="text-xs font-bold text-white hover:text-[#FF5A1F] bg-white/5 border border-white/10 px-2.5 py-1 rounded-lg transition-all cursor-pointer">Clear Selector</button>
          </div>
          
          <div class="space-y-1.5">
            <template x-for="demo in demos" :key="demo.url">
              <div 
                x-show="(activeCategory === 'All' || demo.category === activeCategory) && (searchQuery === '' || demo.title.toLowerCase().includes(searchQuery.toLowerCase()))"
                @click="currentDemo = demo"
                :class="currentDemo && currentDemo.url === demo.url 
                  ? 'text-white bg-gradient-to-r from-[#FF5A1F]/15 to-transparent font-bold border-l-[3px] border-[#FF5A1F] pl-4 bg-black/20' 
                  : 'text-slate-400 hover:text-white hover:bg-white/[0.02] hover:border-l-[3px] hover:border-white/30 pl-4 border-l-[3px] border-transparent'"
                class="group cursor-pointer rounded-r-xl py-3 text-[13px] transition-all duration-150 truncate select-none flex items-center justify-between"
              >
                <span class="truncate tracking-wide" x-text="demo.title"></span>
                <div class="flex items-center pr-1 flex-shrink-0">
                  <span :class="currentDemo && currentDemo.url === demo.url ? 'bg-[#FF5A1F] ring-4 ring-[#FF5A1F]/20 scale-110' : 'bg-slate-700 group-hover:bg-slate-400'" class="h-2 w-2 rounded-full transition-all duration-150"></span>
                </div>
              </div>
            </template>
          </div>
        </div>
      </aside>

      <div x-show="mobileSidebarOpen" x-transition.opacity class="lg:hidden fixed inset-0 z-50 flex" style="display: none;">
        <div @click="mobileSidebarOpen = false" class="fixed inset-0 bg-black/80 backdrop-blur-md"></div>
        <div class="relative flex flex-col w-[300px] bg-[#0c1222] border-r border-white/10 p-5 h-full z-10 shadow-2xl">
          <button @click="mobileSidebarOpen = false" class="absolute top-5 right-5 text-slate-400 hover:text-white p-2 rounded-xl bg-white/5 border border-white/10 cursor-pointer">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path></svg>
          </button>

          <div class="mb-5 mt-2">
            <h2 class="text-base font-extrabold text-white uppercase tracking-wide">Application Deck</h2>
            <p class="text-xs text-slate-400 mt-0.5">Select target layout view</p>
          </div>

          <div class="mb-4">
            <input type="text" x-model="searchQuery" placeholder="Filter matrices..." class="w-full rounded-xl border border-white/10 bg-white/[0.03] px-4 py-2.5 text-sm text-white focus:outline-none focus:border-[#FF5A1F]">
          </div>

          <div class="mb-5">
            <select x-model="activeCategory" class="w-full bg-[#111a30] border border-white/10 rounded-xl px-3 py-2.5 text-xs font-medium text-slate-200 focus:outline-none focus:border-[#FF5A1F]">
              <template x-for="cat in categories" :key="cat">
                <option :value="cat" x-text="cat" :selected="activeCategory === cat"></option>
              </template>
            </select>
          </div>

          <div class="flex-1 overflow-y-auto space-y-1 custom-scrollbar">
            <template x-for="demo in demos" :key="demo.url">
              <div 
                x-show="(activeCategory === 'All' || demo.category === activeCategory) && (searchQuery === '' || demo.title.toLowerCase().includes(searchQuery.toLowerCase()))"
                @click="currentDemo = demo; mobileSidebarOpen = false"
                :class="currentDemo && currentDemo.url === demo.url ? 'text-white font-bold bg-[#FF5A1F] px-3 py-2.5' : 'text-slate-400 hover:text-white hover:bg-white/5 px-3 py-2.5'"
                class="text-xs rounded-xl cursor-pointer truncate transition-all"
                x-text="demo.title"
              ></div>
            </template>
          </div>
        </div>
      </div>

      <main class="flex-1 flex flex-col h-full overflow-hidden w-full bg-transparent">
        
        <header class="flex items-center justify-between border-b border-white/10 bg-black/10 px-4 md:px-8 py-5 backdrop-blur-md flex-shrink-0 z-20">
          <div class="flex items-center gap-4 overflow-hidden flex-1">
            <button @click="mobileSidebarOpen = true" class="lg:hidden p-2.5 rounded-xl bg-white/5 border border-white/10 text-slate-300 hover:text-white flex-shrink-0 cursor-pointer">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
            <div class="truncate">
              <h2 class="text-base font-extrabold text-white flex items-center gap-3 truncate tracking-tight">
                <span class="truncate" x-text="currentDemo ? currentDemo.title : activeCategory + ' Systems Blueprint Matrix'"></span>
                <span x-show="currentDemo" class="inline-flex items-center px-2.5 py-1 rounded-full text-[10px] font-bold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 tracking-wider uppercase whitespace-nowrap">Active Container</span>
                <span x-show="!currentDemo" class="inline-flex items-center px-2.5 py-1 rounded-full text-[10px] font-bold bg-[#FF5A1F]/10 text-[#FF5A1F] border border-[#FF5A1F]/20 tracking-wider uppercase whitespace-nowrap">Grid Overview</span>
              </h2>
            </div>
          </div>

          <div class="flex items-center gap-2 flex-shrink-0 ml-4">
            <button x-show="currentDemo" @click="currentDemo = null" class="rounded-xl border border-white/10 bg-white/5 hover:bg-white/10 px-4 py-2 text-xs font-bold text-white transition-all flex items-center gap-2 shadow-md cursor-pointer">
              <svg class="w-3.5 h-3.5 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path></svg>
              <span>Close Viewport</span>
            </button>
          </div>
        </header>

        <div class="flex-1 p-4 md:p-8 relative overflow-y-auto custom-scrollbar">
          
          <div x-show="!currentDemo" class="h-full w-full">
            <div class="mb-8">
              <h1 class="text-2xl font-black text-white tracking-tight uppercase">Website &amp; Software Development Portfolio Demos</h1>
              <h3 class="mt-2 text-sm font-bold text-[#FF5A1F] tracking-wide uppercase">System Deployments Matrix</h3>
              <p class="text-sm text-slate-400 mt-1.5 max-w-2xl leading-relaxed">Select an architectural template deck down below to initialize its sandbox execution pipeline container frame view wrapper.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 pb-24">
              <template x-for="demo in demos" :key="demo.url + '-grid'">
                <div 
                  x-show="(activeCategory === 'All' || demo.category === activeCategory) && (searchQuery === '' || demo.title.toLowerCase().includes(searchQuery.toLowerCase()))"
                  @click="currentDemo = demo"
                  class="group cursor-pointer rounded-2xl border border-white/10 bg-[#0c1222]/60 backdrop-blur-xl hover:border-[#FF5A1F] hover:bg-[#0c1222]/90 hover:-translate-y-1 transition-all duration-300 flex flex-col h-[340px] shadow-xl relative overflow-hidden"
                >
                  <div class="h-44 w-full relative overflow-hidden bg-slate-900 flex-shrink-0 border-b border-white/5">
                    <img :src="demo.image" :alt="demo.title" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 brightness-75 group-hover:brightness-95">
                    <div class="absolute top-4 right-4 bg-black/70 backdrop-blur-md border border-white/10 text-white text-[10px] uppercase font-black tracking-widest px-2.5 py-1 rounded-lg" x-text="demo.category"></div>
                  </div>

                  <div class="p-5 flex flex-col justify-between flex-1">
                    <div>
                      <h4 class="text-base font-extrabold text-white group-hover:text-[#FF5A1F] transition-colors truncate tracking-wide" x-text="demo.title"></h4>
                      <p class="text-xs font-medium text-slate-400 line-clamp-2 mt-1.5 leading-relaxed" x-text="demo.desc"></p>
                    </div>

                    <div class="border-t border-white/5 pt-3.5 flex items-center justify-between text-[11px] font-semibold">
                      <span class="text-slate-500 font-mono truncate max-w-[150px]" x-text="demo.tech"></span>
                      <span class="text-[#FF5A1F] group-hover:translate-x-1 transition-transform flex items-center gap-1.5">
                        View Demo
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                      </span>
                    </div>
                  </div>
                </div>
              </template>
            </div>
          </div>

          <div x-show="currentDemo" class="h-full flex flex-col overflow-hidden rounded-2xl border border-white/10 bg-slate-950 shadow-2xl absolute inset-4 md:inset-6" style="display: none;">
            <div class="flex items-center justify-between border-b border-white/10 bg-black/40 px-4 py-3.5 flex-shrink-0 gap-4">
              <div class="flex items-center gap-2 w-1/4">
                <span class="h-3 w-3 rounded-full bg-red-500/30 hover:bg-red-500/90 transition-colors cursor-pointer border border-red-500/20" title="Close Workspace" @click="currentDemo = null"></span>
                <span class="h-3 w-3 rounded-full bg-amber-500/20 border border-amber-500/10"></span>
                <span class="h-3 w-3 rounded-full bg-emerald-500/20 border border-emerald-500/10"></span>
              </div>
              
              <div class="w-2/4 max-w-sm flex items-center justify-center gap-2 rounded-xl bg-black/50 border border-white/5 px-4 py-1.5 text-slate-400 overflow-hidden">
                <svg class="w-3.5 h-3.5 text-emerald-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                <span class="truncate tracking-widest font-mono text-[10px] text-white uppercase font-black" x-text="currentDemo ? currentDemo.title : ''"></span>
              </div>
              
              <div class="w-1/4 flex justify-end">
                <a :href="currentDemo.url" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded-xl bg-[#FF5A1F] px-3 py-2 text-xs font-bold text-white transition hover:bg-orange-600" aria-label="Open selected demo in a new tab">
                  Open Demo
                  <svg class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"/><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"/></svg>
                </a>
              </div>
            </div>

            <div class="flex-1 overflow-y-auto bg-[radial-gradient(ellipse_at_top,_rgba(255,90,31,0.12),_transparent_50%)] p-5 md:p-10">
              <div class="mx-auto grid w-full max-w-6xl items-center gap-8 lg:grid-cols-2 lg:gap-12">
                <div class="overflow-hidden rounded-2xl border border-white/10 bg-[#0c1222] shadow-2xl">
                  <div class="flex items-center gap-2 border-b border-white/10 bg-black/40 px-4 py-3">
                    <span class="h-2.5 w-2.5 rounded-full bg-red-400/70"></span>
                    <span class="h-2.5 w-2.5 rounded-full bg-amber-300/70"></span>
                    <span class="h-2.5 w-2.5 rounded-full bg-emerald-400/70"></span>
                    <span class="ml-3 truncate rounded-md bg-black/40 px-3 py-1 font-mono text-[10px] text-slate-400" x-text="currentDemo.url"></span>
                  </div>
                  <img :src="currentDemo.image" :alt="currentDemo.title + ' preview'" class="aspect-video w-full bg-slate-900 object-cover" loading="lazy">
                </div>

                <div class="max-w-xl">
                  <span class="inline-flex rounded-full border border-[#FF5A1F]/30 bg-[#FF5A1F]/10 px-3 py-1 text-xs font-bold uppercase tracking-wider text-[#FF7A48]" x-text="currentDemo.category"></span>
                  <h3 class="mt-5 text-2xl font-black leading-tight text-white md:text-4xl" x-text="currentDemo.title"></h3>
                  <p class="mt-4 text-sm leading-7 text-slate-300 md:text-base" x-text="currentDemo.desc"></p>
                  <div class="mt-6 border-t border-white/10 pt-5">
                    <p class="text-xs font-bold uppercase tracking-widest text-slate-500">Technology</p>
                    <p class="mt-2 text-sm text-slate-300" x-text="currentDemo.tech"></p>
                  </div>
                  <p class="mt-5 text-xs leading-5 text-slate-500">This project is hosted by its provider. Open it in a new tab to use the live site; some providers prevent embedded previews.</p>
                  <a :href="currentDemo.url" target="_blank" rel="noopener noreferrer" class="mt-7 inline-flex items-center gap-2 rounded-xl bg-gradient-to-r from-[#FF5A1F] to-orange-500 px-5 py-3 text-sm font-extrabold text-white shadow-lg shadow-orange-950/30 transition hover:-translate-y-0.5 hover:from-orange-500 hover:to-[#FF5A1F]">
                    Open Live Demo
                    <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"/><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"/></svg>
                  </a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </main>
    </div>
  </section>
@endsection
