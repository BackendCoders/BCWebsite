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


<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


  <section 
    class="h-screen w-full bg-[#0a0f1d] font-sans antialiased text-slate-100 overflow-hidden relative flex flex-col"
    x-data="{ 
      mobileSidebarOpen: false,
      activeCategory: 'All',
      searchQuery: '',
      currentDemo: null,
      demos: [
        {title: 'Solar Panel Services', url: 'https://solarnova-panels.lovable.app', category: 'Services', tech: 'Tailwind • Vite • UI/UX', desc: 'Clean energy platform featuring interactive savings calculators and system configuration decks.', image: 'assets/images/solar.jpeg'},
        {title: 'Finance Advisor', url: 'https://riseup-advisors.lovable.app', category: 'Finance', tech: 'Alpine.js • Tailwind', desc: 'Wealth management workspace displaying wealth distribution charts and investment matrices.', image: 'assets/images/finance.jpeg'},
        {title: 'Hospital (Lifeline)', url: 'https://lifelinecare.lovable.app', category: 'Medical', tech: 'React • Tailwind', desc: 'Clinical patient care operational dashboard with integrated staff assignment lists.', image: 'assets/images/hospital.jpeg'},
        {title: 'Insurance Pro', url: 'https://visionary-wealth-pro.lovable.app', category: 'Finance', tech: 'Tailwind • Static', desc: 'Premium coverage assessment wizard built for commercial entity risk management analytics.', image: 'assets/images/insurance.jpeg'},
        {title: 'Travel Escapes', url: 'https://india-dream-escapes.lovable.app', category: 'Travel', tech: 'Tailwind • Interactive', desc: 'Immersive destination planner tool complete with dynamic itinerary timelines.', image: 'assets/images/Travel.jpeg'},
        {title: 'Spa & Wellness', url: 'https://sun-and-soul-web.lovable.app', category: 'Services', tech: 'Tailwind • Elegant UI', desc: 'Luxury treatment scheduling grid configured with automated session package blocks.', image: 'assets/images/Spa.jpeg'},
        {title: 'SriChandra Gold', url: 'https://srichandra-gold-exports.lovable.app', category: 'E-Commerce', tech: 'Tailwind • Commerce', desc: 'B2B international commodities trading system supporting multi-currency pricing models.', image: 'assets/images/rice.jpeg'},
        {title: 'School Campus Flow', url: 'https://ifnoss-campus-flow.lovable.app', category: 'Education', tech: 'ERP • Dashboard', desc: 'Unified institutional system managing admissions tracking data and course schedules.', image: 'assets/images/school.jpeg'},
        {title: 'Savory Bite Restaurant', url: 'https://savory-bite-story.lovable.app', category: 'Food', tech: 'Tailwind • Menus', desc: 'Digital culinary catalog featuring rapid item filtering and online checkout systems.', image: 'assets/images/restro.jpeg'},
        {title: 'Kinetic Edge Gym', url: 'https://kinetic-edge-gym.lovable.app', category: 'Fitness', tech: 'Dark Theme • Tailwind', desc: 'High-contrast performance workspace logging training routines and membership tiers.', image: 'assets/images/gym.jpeg'},
        {title: 'Prime Fitness Forge', url: 'https://prime-fitness-forge.lovable.app', category: 'Fitness', tech: 'Tailwind • Fitness UI', desc: 'Athletic progression board managing structured coach schedules and caloric logs.', image: 'assets/images/fit.jpeg'},
        {title: 'Taxi Hire Hero', url: 'https://fixed-route-hero.lovable.app', category: 'Services', tech: 'Maps • Tailwind', desc: 'Transit dispatch matrix displaying real-time geographical route mapping coordinates.', image: 'assets/images/taxi.jpeg'},
        {title: 'Willow Weir Accessories', url: 'https://willow-weir-luxe-design.lovable.app', category: 'E-Commerce', tech: 'Luxury UI • Tailwind', desc: 'Boutique consumer storefront containing interactive product variation cards.', image: 'assets/images/accessories.jpeg'},
        {title: 'Luxury Cars Hire', url: 'https://elegant-ride-uk.lovable.app', category: 'Services', tech: 'Premium Grid', desc: 'High-end exotic car leasing registry featuring detailed fleet specifications tables.', image: 'assets/images/car.jpeg'},
        {title: 'Gillingham Plumber', url: 'https://george-gillingham-plumb-site.lovable.app', category: 'Services', tech: 'Tailwind • Service', desc: 'Localized emergency dispatch interface handling client intake ticketing funnels.', image: 'assets/images/plumber.jpeg'},
        {title: 'Aura Herbals Ayurveda', url: 'https://aura-herbals-hub.lovable.app', category: 'Medical', tech: 'Organic UI • Tailwind', desc: 'Holistic product catalog displaying dynamic active ingredient listings profiles.', image: 'assets/images/ayur.jpeg'},
        {title: 'Child Play & Dine', url: 'https://play-and-dine-dreams.lovable.app', category: 'Education', tech: 'Playful UI • Tailwind', desc: 'Family activity management dashboard coordinating event calendar timelines.', image: 'assets/images/child.jpeg'},
        {title: 'Cattle Farming', url: 'https://wooly-web-whisperer.lovable.app', category: 'Services', tech: 'Tailwind • Agriculture', desc: 'Agri-business monitoring system keeping track of livestock yield metrics graphs.', image: 'assets/images/farming.jpeg'},
        {title: 'EPOS Cycle Shop System', url: 'https://cycle-shop-system-alpha.lovable.app', category: 'EPOS Systems', tech: 'System • POS Front', desc: 'Retail register view configured for rapid barcode entry operations.', image: 'assets/images/epos.jpeg'},
        {title: 'EPOS Admin Panel', url: 'https://pos-admin-modular-look.lovable.app', category: 'EPOS Systems', tech: 'Admin Dashboard', desc: 'Master inventory controller module tracking supply chain procurement orders.', image: 'assets/images/pos.jpeg'},
        {title: 'EPOS Till View', url: 'https://modern-point-nexus.lovable.app', category: 'EPOS Systems', tech: 'Point of Sale • Till', desc: 'High-throughput terminal view for handling instant payment gateway confirmations.', image: 'assets/images/admin.jpeg'},
        {title: 'Guideway Consultation', url: 'https://guideway-replica-magic-wand.lovable.app', category: 'Services', tech: 'Consultancy Profile', desc: 'Corporate advisory portal mapping milestone timelines for project fulfillment metrics.', image: 'assets/images/give.jpeg'},
        {title: 'Giggle Grow Event Planner', url: 'https://giggle-grow-gate.lovable.app', category: 'Services', tech: 'Tailwind • Events', desc: 'Reservation system monitoring guest accommodations listings layouts.', image: 'assets/images/event.jpeg'},
        {title: 'Social Earn Hub', url: 'https://reel-income-hub.lovable.app', category: 'Finance', tech: 'Creator Economy UI', desc: 'Digital monetization analytics board charting performance streaming revenue splits.', image: 'assets/images/hub.jpeg'},
        {title: 'Talent Tadka Gig Match', url: 'https://creator-gig-match.lovable.app', category: 'Services', tech: 'Job Match Matrix', desc: 'On-demand employment matching ledger filtering contractor availability statuses.', image: 'assets/images/talent.jpeg'},
        {title: 'Dr Anjali Clinic', url: 'https://dranjaliclinic.lovable.app', category: 'Medical', tech: 'Doctor Consultation', desc: 'Telehealth platform coordinating direct patient diagnostics file uploads.', image: 'assets/images/dr.anjali.jpeg'},
        {title: 'QuickFix Plumber Now', url: 'https://quickfix-plumber-now.lovable.app', category: 'Services', tech: 'On-Demand UI', desc: 'Geo-targeted localized emergency service interface allocating dispatch resources.', image: 'assets/images/fix.jpeg'},
        {title: 'Golden Grain Rice Export', url: 'https://golden-grain-export.lovable.app', category: 'E-Commerce', tech: 'B2B Wholesale Portal', desc: 'Logistics shipping ledger managing freight tracking distribution metrics.', image: 'assets/images/rice2.jpeg'},
        {title: 'Prestige Prime Real Estate', url: 'https://prestige-prime-finder.lovable.app', category: 'Real Estate', tech: 'Property Matrix', desc: 'Broker listing ecosystem showcasing map vectors and virtual tour assets.', image: 'assets/images/realestate.jpeg'},
        {title: 'BrightSmile Dental Pro', url: 'https://brightsmile-clinic-pro.lovable.app', category: 'Medical', tech: 'Medical Clinic Deck', desc: 'Orthodontic scheduling pipeline parsing provider availability configurations.', image: 'assets/images/bright.jpeg'},
        {title: 'Academe Bloom University', url: 'https://academe-bloom-start.lovable.app', category: 'Education', tech: 'University Portal Layout', desc: 'Student registration ledger processing curriculum catalog applications structures.', image: 'assets/images/university.jpg'},
        {title: 'Horizon Concierge Craft', url: 'https://horizon-concierge-craft.lovable.app', category: 'Services', tech: 'Premium Concierge Deck', desc: 'Hospitality task management deck tracking premium client request portfolios.', image: 'assets/images/craft.jpg'},
        {title: 'DocBook Swift Medicare', url: 'https://doc-book-swift.lovable.app', category: 'Medical', tech: 'Booking Flow UI', desc: 'Rapid outpatient intake wizard minimizing check-in queues.', image: 'assets/images/medi.jpeg'},
        {title: 'Jobbers Park', url: 'https://hire-and-harmony.lovable.app', category: 'Services', tech: 'Recruitment Hub UI', desc: 'Talent pipeline manager mapping corporate open positions application stages.', image: 'assets/images/jobber.jpg'},
      ],
      categories: ['All', 'E-Commerce', 'Finance', 'Medical', 'Services', 'Education', 'Food', 'Fitness', 'EPOS Systems', 'Real Estate']
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
        <!-- <div class="p-5 border-b border-white/5 flex-shrink-0 bg-black/10">
          <div class="relative group">
            <input 
              type="text" 
              x-model="searchQuery" 
              placeholder="Search core implementations..." 
              class="w-full rounded-xl border border-white/10 bg-white/[0.03] pl-11 pr-4 py-3 text-sm text-white placeholder-slate-500 group-hover:border-white/20 focus:border-[#FF5A1F] focus:bg-black/40 focus:outline-none focus:ring-2 focus:ring-[#FF5A1F]/20 transition-all duration-200"
            >
            <span class="absolute left-4 top-3.5 text-slate-400 group-focus-within:text-[#FF5A1F] transition-colors duration-200">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </span>
          </div>
        </div> -->

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
              <h3 class="text-xl font-black text-white tracking-tight uppercase">System Deployments Matrix</h3>
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
                        Launch Frame
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
                <button class="text-slate-400 hover:text-white p-1.5 rounded-xl bg-white/5 border border-white/10 transition-colors focus:outline-none cursor-pointer" title="Refresh Sandbox Frame Container" @click="if(currentDemo) document.getElementById('demo-viewport').src = currentDemo.url">
                  <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 1121.253 8H18"></path></svg>
                </button>
              </div>
            </div>

            <div class="flex-1 w-full bg-white relative">
              <template x-if="currentDemo">
                <iframe 
                  id="demo-viewport" 
                  :src="currentDemo.url" 
                  class="absolute inset-0 h-full w-full object-cover border-0 bg-white" 
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                  allowfullscreen 
                  loading="lazy"
                ></iframe>
              </template>
            </div>
          </div>

        </div>
      </main>
    </div>
  </section>
@endsection