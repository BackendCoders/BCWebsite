@extends("component.main")
@section("content")

<style>
.tab.active {
  background-color: #FD5528;
  color: #fff;
  border-color: #FD5528;
}
</style>


<!-- hero section  -->
<section class="relative h-[30vh] flex items-center justify-center text-center text-white overflow-hidden">

  <!-- BACKGROUND IMAGE -->
  <img 
    src="{{asset('assets/images/banner.png')}}" alt="backend coders india services and packages "
    class="absolute inset-0 w-full h-full object-cover"
  />

  <!-- DARK OVERLAY -->
  <div class="absolute inset-0 bg-black/60"></div>

  <!-- CONTENT -->
  <div class="relative z-10 max-w-4xl px-6">

  

    <!-- HEADING -->
    <h1 class="mt-6 text-4xl sm:text-5xl md:text-6xl font-bold leading-tight">
      Our Packages
    </h1>

    <!-- SUBTEXT -->
    <p class="mt-6 text-gray-300 text-sm sm:text-base md:text-lg max-w-2xl mx-auto">
      Explore our transparent packages across IT services, digital marketing, graphic design, and SEO. Each lane is designed to meet your product ambition with real commitments and predictable delivery.
    </p>

 

  </div>

</section>
<!-- end hero section  -->


<section class="py-20 bg-gradient-to-br from-gray-50 via-white to-gray-100">

  <div class="max-w-7xl mx-auto px-4 text-center">

    <!-- HEADER -->
    <h2 class="text-3xl md:text-5xl font-bold">
      Our <span class="text-[#FD5528]">Pricing Plans</span>
    </h2>

    <p class="mt-4 text-gray-600 max-w-xl mx-auto">
      Choose the perfect service package tailored for your business growth.
    </p>

    <!-- TABS -->
    <div class="flex flex-wrap justify-center gap-3 mt-10">
      <button class="tab active px-5 py-2 rounded-full border border-[#FD5528] transition hover:bg-[#FD5528] hover:text-white" data-tab="it">Web Development</button>
      <button class="tab px-5 py-2 rounded-full border border-[#FD5528] transition hover:bg-[#FD5528] hover:text-white" data-tab="seo">SEO</button>
      <button class="tab px-5 py-2 rounded-full border border-[#FD5528] transition hover:bg-[#FD5528] hover:text-white" data-tab="marketing">Digital Marketing</button>
      <button class="tab px-5 py-2 rounded-full border border-[#FD5528] transition hover:bg-[#FD5528] hover:text-white" data-tab="saas">CRM / SaaS</button>
      <button class="tab px-5 py-2 rounded-full border border-[#FD5528] transition hover:bg-[#FD5528] hover:text-white" data-tab="app">App Dev</button>
      <button class="tab px-5 py-2 rounded-full border border-[#FD5528] transition hover:bg-[#FD5528] hover:text-white" data-tab="design">SMM</button>
    </div>

    <!-- CONTENT -->
    <div class="mt-14">

      <!-- IT -->
     <div class="tab-content active grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-content="it">
       
      <!-- BASIC PLAN -->
      <div class="border border-gray-700 rounded-3xl p-8 text-black flex flex-col justify-between">
        <div>
          <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-orange-100 text-[#FD5528] mb-3">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            One-Time Project • Fixed Price
          </div>

          <h3 class="text-xl font-semibold mb-2">BASIC PLAN (Starter Business)</h3>
          <p class="text-xs text-gray-500 mb-4">Ideal for local businesses and professional service landing pages.</p>

          <h2 class="text-4xl font-bold mb-6">
            ₹ 7,999/- <span class="text-base font-semibold text-orange-600 ml-1">One-Time</span>
          </h2>

          <ul class="space-y-4 mb-8 text-sm">
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> 1 Landing Page Website
            </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> Fully Mobile Responsive
            </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> 1 Year Free Domain + Hosting + SSL
            </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> Social Media Integration
            </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> Basic UI Design
            </li>
             <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> Contact Form Setup
            </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> Yearly Renewal Support (Hosting only)
            </li>
          </ul>
        </div>

        <button class="w-full bg-gradient-to-r from-[#FD5528] to-[#fbb03b] hover:from-[#fbb03b] hover:to-[#FD5528] hover:scale-105 text-white py-3 rounded-full font-medium transition cursor-pointer">
          Choose Plan
        </button>
      </div>

      <!-- STANDARD PLAN (CENTER) -->
      <div class="bg-gradient-to-r from-[#FD5528] to-[#fbb03b] rounded-3xl p-10 text-white text-center scale-105 shadow-xl flex flex-col justify-between">
        <div>
          <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-white/20 text-white mb-3">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            Most Popular • One-Time Project
          </div>

          <h3 class="text-xl font-semibold mb-2">STANDARD PLAN (Growth Business)</h3>
          <p class="text-xs text-orange-100 mb-4">Complete multi-page business website with speed and SEO setup.</p>

          <h2 class="text-4xl font-bold mb-6">
            ₹ 15,999/- <span class="text-base font-semibold text-orange-100 ml-1">One-Time</span>
          </h2>

          <ul class="space-y-4 mb-8 text-left text-sm">
            <li class="flex items-center gap-3 border-b pb-3">
              <span class="text-orange-50">✔</span> Up to 15 Pages Website
            </li>
            <li class="flex items-center gap-3 border-b pb-3">
              <span class="text-orange-50">✔</span> 1 Year Free Domain + Hosting
            </li>
            <li class="flex items-center gap-3 border-b pb-3">
              <span class="text-orange-50">✔</span> Free SSL Security
            </li>
            <li class="flex items-center gap-3 border-b pb-3">
              <span class="text-orange-50">✔</span> Mobile Responsive Design
            </li>
            <li class="flex items-center gap-3 border-b pb-3">
              <span class="text-orange-50">✔</span> Social Media Integration
            </li>
            <li class="flex items-center gap-3 border-b pb-3">
              <span class="text-orange-50">✔</span> Basic SEO Setup
            </li>
            <li class="flex items-center gap-3 border-b pb-3">
              <span class="text-orange-50">✔</span> Speed Optimization
            </li>
            <li class="flex items-center gap-3 border-b pb-3">
              <span class="text-orange-50">✔</span> Free Support (Monthly)
            </li>
            <li class="flex items-center gap-3 border-b pb-3">
              <span class="text-orange-50">✔</span> Yearly Renewal (Hosting only)
            </li>
          </ul>
        </div>

        <button class="bg-black hover:bg-slate-900 text-white px-6 py-3 rounded-full font-medium transition cursor-pointer">
          Choose Plan
        </button>
      </div>

      <!-- PREMIUM PLAN -->
       <div class="border border-gray-700 rounded-3xl p-8 text-black flex flex-col justify-between">
        <div>
          <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-orange-100 text-[#FD5528] mb-3">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            Full Code Ownership • One-Time Project
          </div>

          <h3 class="text-xl font-semibold mb-2">CUSTOMISED / PREMIUM PLAN (Scale Business)</h3>
          <p class="text-xs text-gray-500 mb-4">Enterprise portals, dynamic web apps, and custom high-traffic portals.</p>

          <h2 class="text-4xl font-bold mb-6">
            ₹ 24,999/- <span class="text-base font-semibold text-orange-600 ml-1">One-Time</span>
          </h2>

          <ul class="space-y-4 mb-8 text-sm">
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> Fully Custom Website Design
            </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> 25+ Pages / Dynamic Website
            </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> 1 Year Free Domain + Hosting + SSL
            </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> Advanced UI/UX Design
            </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> SEO + Social Media Integration
            </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> Advanced Speed Optimization
            </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> Admin Panel / CMS (Optional)
            </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> API / Third-party Integrations
            </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> Priority Support
            </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> Mobile + Tablet Optimization
            </li>
          </ul>
        </div>

        <button class="w-full bg-gradient-to-r from-[#FD5528] to-[#fbb03b] hover:from-[#fbb03b] hover:to-[#FD5528] hover:scale-105 text-white py-3 rounded-full font-medium transition cursor-pointer">
          Choose Plan
        </button>
      </div>

     
    </div>

      <!-- SEO -->
    <div class="tab-content hidden grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-content="seo">

     <!-- basic  -->
       <div class="border border-gray-600 rounded-3xl p-8 text-black">

        <h3 class="text-xl font-semibold mb-4">
          BASIC SEO PLAN (Starter Growth)
        </h3>

        <h2 class="text-4xl font-bold mb-6">
          ₹ 7,999/- <span class="text-base font-normal text-black">Monthly</span>
        </h2>

        <ul class="space-y-4 mb-8">
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Keyword Research (5 Keywords)
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> 25+ High-Quality Backlinks
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Website & Competitor Analysis
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> On-Page SEO Optimization
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Basic Technical SEO Fixes
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Meta Tags Optimization
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Google Search Console Setup
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Website Audit Report
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Weekly & Monthly Performance Report
          </li>
        </ul>

        <button class="w-full  bg-gradient-to-r from-[#FD5528] to-[#fbb03b] text-white py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>


         <!-- STANDARD PLAN (CENTER HIGHLIGHT) -->
       <div class=" bg-gradient-to-r from-[#FD5528] to-[#fbb03b] rounded-[30px] p-10 text-white text-center scale-105 shadow-2xl">

        <h3 class="text-xl font-semibold mb-4">
          STANDARD SEO PLAN (Business Growth)
        </h3>

        <h2 class="text-5xl font-bold mb-6">
          ₹ 11,999/- <span class="text-base font-normal text-white">Monthly</span>
        </h2>

        <ul class="space-y-4 mb-8 text-left">
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span>Keyword Research (10–15 Keywords)
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> 50+ High-Quality Backlinks
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span>Advanced On-Page SEO
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Technical SEO Optimization
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Competitor Analysis
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> 4–6 Blog Posts / Month
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Internal Linking Strategy
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Google Business Profile Optimization
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Weekly & Monthly Performance Report
          </li>
        </ul>

        <button class="bg-black  hover:bg-gradient-to-r hover:from-[#FD5528] hover:to-[#fbb03b] text-white px-6 py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>

          <!-- PREMIUM PLAN -->
      <div class="border border-gray-600 rounded-3xl p-8 text-black">

        <h3 class="text-xl font-semibold mb-4">
          PREMIUM SEO PLAN (Scaling & Authority)
        </h3>

        <h2 class="text-4xl font-bold mb-6">
          ₹ 15,999/- <span class="text-base font-normal text-black">Monthly</span>
        </h2>

        <ul class="space-y-4 mb-8">
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Keyword Research (20–25+ Keywords)
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> 100+ High-Authority Backlinks
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Complete On-Page + Technical SEO
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Advanced Competitor Analysis
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> 8–10 Blog Posts / Month
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span>Content Marketing Strategy
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Conversion Optimization
          </li>
           <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span>Dedicated SEO Manager
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Local SEO + GMB Optimization
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Weekly & Monthly Performance Report
          </li>
        </ul>

        <button class="w-full  bg-gradient-to-r from-[#FD5528] to-[#fbb03b] text-white py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>

    </div>

      <!-- MARKETING -->
    <div class="tab-content hidden grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-content="marketing">
          <!-- BASIC PLAN -->
      <div class="border border-gray-600 rounded-3xl p-8 text-black relative">

        <h3 class="text-xl font-semibold mb-4">
          BASIC DIGITAL MARKETING PLAN (Starter Growth)
        </h3>

        <h2 class="text-4xl font-bold mb-6">
          ₹ 6,999/- <span class="text-base font-normal text-black">Monthly</span>
        </h2>

        <ul class="space-y-4 mb-8">
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span>1 Landing Page Design (Lead Focused)
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Management of 2 Social Media Accounts
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> 5 High-Quality Graphic Posts + 1 Reel / Month
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span>Hashtag & Caption Strategy
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Basic SEO Optimization (5 Keywords)
          </li>
           <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Basic Audience Targeting Setup
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Monthly Performance Report
          </li>
        </ul>

        <button class="w-full bg-gradient-to-r from-[#FD5528] to-[#fbb03b] text-white py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>

         <!-- STANDARD PLAN (CENTER HIGHLIGHT) -->
      <div class="bg-gradient-to-r from-[#FD5528] to-[#fbb03b] rounded-[30px] p-10 text-white text-center scale-105 shadow-2xl">

        <h3 class="text-xl font-semibold mb-4">
          STANDARD DIGITAL MARKETING PLAN (Business Growth)
        </h3>

        <h2 class="text-5xl font-bold mb-6">
          ₹ 11,999/- <span class="text-base font-normal text-white">Monthly</span>
        </h2>

        <ul class="space-y-4 mb-8 text-left">
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span>5 Page Professional Website
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Management of 4 Social Media Accounts
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span>8 Creative Posts + 2 Reels / Month
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span>Meta Ads Account Setup & Optimization
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span>SEO Optimization (10 Keywords)
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Content Strategy + Hashtag Research
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> 2 SEO-Friendly Blog Posts / Month
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Monthly Performance Report
          </li>
           <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Basic Competitor Analysis
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Lead Funnel Setup (Forms / WhatsApp Integration)
          </li>
            <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Google My Business (GMB) Optimization
          </li>
          
        </ul>

        <button class="bg-black hover:bg-gradient-to-r hover:from-[#FD5528] hover:to-[#fbb03b] text-white px-6 py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>

          <!-- PREMIUM PLAN -->
      <div class="border border-gray-600 rounded-3xl p-8 text-black">

        <h3 class="text-xl font-semibold mb-4">
          PREMIUM DIGITAL MARKETING PLAN (Scale & Dominate)
        </h3>

        <h2 class="text-4xl font-bold mb-6">
          ₹ 15,999/- <span class="text-base font-normal text-black">Monthly</span>
        </h2>

        <ul class="space-y-4 mb-8">
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> 7–10 Page Advanced Website
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Full Social Media Management (All Major Platforms)
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> 12 Premium Graphic Posts + 4 Reels / Month
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span>Complete Ads Management (Google + Meta Ads)
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> SEO Optimization (15+ Keywords)
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Advanced GMB Optimization & Local SEO
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> 4 High-Quality Blog Posts / Month
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Conversion-Focused Content Strategy
          </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Advanced Audience Targeting & Retargeting
          </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Monthly Performance + Insights Report
          </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Dedicated Account Manager
          </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Lead Generation Funnel Optimization
          </li>

        </ul>

        <button class="w-full bg-gradient-to-r from-[#FD5528] to-[#fbb03b] text-white py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>
    </div>

      <!-- CRM -->
      <div class="tab-content hidden grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-content="saas">

        <!-- basic -->
        <div class="border border-gray-600 rounded-3xl p-8 text-black flex flex-col justify-between">
          <div>
            <h3 class="text-xl font-semibold mb-4">
              BASIC CRM PLAN (Starter Automation)
            </h3>

            <h2 class="text-4xl font-bold mb-6">
              ₹ 4,999/- <span class="text-base font-normal text-black">Monthly</span>
            </h2>

            <ul class="space-y-4 mb-8">
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black flex-shrink-0">✔</span>
                <span>Lead Management Dashboard</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Basic CRM Setup (Contacts + Leads)</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>1 User Access</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Data Entry & Tracking System</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Basic Reporting Dashboard</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>WhatsApp / Email Integration (Basic)</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Monthly Data Backup</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Email Support</span>
              </li>
            </ul>
          </div>

          <button class="w-full bg-gradient-to-r from-[#FD5528] to-[#fbb03b] text-white py-3 rounded-full font-medium transition cursor-pointer">
            Choose Plan
          </button>
        </div>

        <!-- STANDARD PLAN (CENTER HIGHLIGHT) -->
        <div class="bg-gradient-to-r from-[#FD5528] to-[#fbb03b] rounded-[30px] p-10 text-white text-center scale-105 shadow-2xl flex flex-col justify-between">
          <div>
            <h3 class="text-xl font-semibold mb-4">
              STANDARD CRM PLAN (Business Automation)
            </h3>

            <h2 class="text-5xl font-bold mb-6">
              ₹ 7,999/- <span class="text-base font-normal text-white">Monthly</span>
            </h2>

            <ul class="space-y-4 mb-8 text-left">
              <li class="flex items-center gap-3 border-b pb-3">
                <span class="text-orange-50 flex-shrink-0">✔</span>
                <span>3–5 User Access</span>
              </li>
              <li class="flex items-center gap-3 border-b pb-3">
                <span class="text-orange-50 flex-shrink-0">✔</span>
                <span>Multi-stage Lead Pipeline</span>
              </li>
              <li class="flex items-center gap-3 border-b pb-3">
                <span class="text-orange-50 flex-shrink-0">✔</span>
                <span>Follow-up Automation & Reminders</span>
              </li>
              <li class="flex items-center gap-3 border-b pb-3">
                <span class="text-orange-50 flex-shrink-0">✔</span>
                <span>WhatsApp & Email Automation</span>
              </li>
              <li class="flex items-center gap-3 border-b pb-3">
                <span class="text-orange-50 flex-shrink-0">✔</span>
                <span>Deals & Sales Pipeline Tracking</span>
              </li>
              <li class="flex items-center gap-3 border-b pb-3">
                <span class="text-orange-50 flex-shrink-0">✔</span>
                <span>Custom Form Integration</span>
              </li>
              <li class="flex items-center gap-3 border-b pb-3">
                <span class="text-orange-50 flex-shrink-0">✔</span>
                <span>Basic Workflow Automation</span>
              </li>
              <li class="flex items-center gap-3 border-b pb-3">
                <span class="text-orange-50 flex-shrink-0">✔</span>
                <span>Monthly Backup + Security</span>
              </li>
              <li class="flex items-center gap-3 border-b pb-3">
                <span class="text-orange-50 flex-shrink-0">✔</span>
                <span>Priority Support</span>
              </li>
            </ul>
          </div>

          <button class="bg-black hover:bg-gradient-to-r hover:from-[#FD5528] hover:to-[#fbb03b] text-white px-6 py-3 rounded-full font-medium transition cursor-pointer">
            Choose Plan
          </button>
        </div>

        <!-- PREMIUM PLAN -->
        <div class="border border-gray-600 rounded-3xl p-8 text-black flex flex-col justify-between">
          <div>
            <h3 class="text-xl font-semibold mb-4">
              PREMIUM CRM / SAAS PLAN (Advanced Automation & Scaling)
            </h3>

            <h2 class="text-4xl font-bold mb-6">
              ₹ 13,999/- <span class="text-base font-normal text-black">Monthly</span>
            </h2>

            <ul class="space-y-4 mb-8">
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Unlimited / Multi-Role Users</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Custom CRM / SaaS Dashboard</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Advanced Analytics & Reports</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Lead Scoring System</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Multi-channel Integration (WhatsApp, Email, SMS)</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Role-based Access Control</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Daily Backup + High Security</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Dedicated Account Manager</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Custom Feature Development</span>
              </li>
            </ul>
          </div>

          <button class="w-full bg-gradient-to-r from-[#FD5528] to-[#fbb03b] text-white py-3 rounded-full font-medium transition cursor-pointer">
            Choose Plan
          </button>
        </div>

      </div>
      <!-- APP -->
      <div class="tab-content hidden grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-content="app">

        <!-- basic  -->
        <div class="border border-gray-600 rounded-3xl p-8 text-black flex flex-col justify-between">
          <div>
            <h3 class="text-xl font-semibold mb-4">
              BASIC APP PLAN (Starter App)
            </h3>

            <h2 class="text-4xl font-bold mb-6">
              ₹ 19,999/- <span class="text-base font-normal text-black">One-Time</span>
            </h2>

            <ul class="space-y-4 mb-8">
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Android App (Single Platform)</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Custom Clean UI/UX Design</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Up to 5 Screens</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Static / Basic Dynamic Features</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>API Integration (Basic)</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Contact Form / Inquiry System</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Play Store Upload Guidance</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>1 Month Free Bug Support</span>
              </li>
            </ul>
          </div>

          <button class="w-full bg-gradient-to-r from-[#FD5528] to-[#fbb03b] text-white py-3 rounded-full font-medium transition cursor-pointer">
            Choose Plan
          </button>
        </div>

        <!-- STANDARD PLAN (CENTER HIGHLIGHT) -->
        <div class="bg-gradient-to-r from-[#FD5528] to-[#fbb03b] rounded-[30px] p-10 text-white text-center scale-105 shadow-2xl flex flex-col justify-between">
          <div>
            <h3 class="text-xl font-semibold mb-4">
              STANDARD APP PLAN (Business App)
            </h3>

            <h2 class="text-5xl font-bold mb-6">
              ₹ 39,999/- <span class="text-base font-normal text-white">One-Time</span>
            </h2>

            <ul class="space-y-4 mb-8 text-left">
              <li class="flex items-center gap-3 border-b pb-3">
                <span class="text-orange-50 flex-shrink-0">✔</span>
                <span>Android + iOS App (Cross Platform - Flutter/React Native)</span>
              </li>
              <li class="flex items-center gap-3 border-b pb-3">
                <span class="text-orange-50 flex-shrink-0">✔</span>
                <span>Custom UI/UX Design</span>
              </li>
              <li class="flex items-center gap-3 border-b pb-3">
                <span class="text-orange-50 flex-shrink-0">✔</span>
                <span>6–10 Screens</span>
              </li>
              <li class="flex items-center gap-3 border-b pb-3">
                <span class="text-orange-50 flex-shrink-0">✔</span>
                <span>Admin Panel (Basic Web Dashboard)</span>
              </li>
              <li class="flex items-center gap-3 border-b pb-3">
                <span class="text-orange-50 flex-shrink-0">✔</span>
                <span>API Integration (Advanced)</span>
              </li>
              <li class="flex items-center gap-3 border-b pb-3">
                <span class="text-orange-50 flex-shrink-0">✔</span>
                <span>User Login / Registration System</span>
              </li>
              <li class="flex items-center gap-3 border-b pb-3">
                <span class="text-orange-50 flex-shrink-0">✔</span>
                <span>Push Notifications</span>
              </li>
              <li class="flex items-center gap-3 border-b pb-3">
                <span class="text-orange-50 flex-shrink-0">✔</span>
                <span>Payment Gateway Integration (Optional)</span>
              </li>
              <li class="flex items-center gap-3 border-b pb-3">
                <span class="text-orange-50 flex-shrink-0">✔</span>
                <span>Play Store + App Store Deployment</span>
              </li>
              <li class="flex items-center gap-3 border-b pb-3">
                <span class="text-orange-50 flex-shrink-0">✔</span>
                <span>2 Months Free Support</span>
              </li>
            </ul>
          </div>

          <button class="bg-black hover:bg-gradient-to-r hover:from-[#FD5528] hover:to-[#fbb03b] text-white px-6 py-3 rounded-full font-medium transition cursor-pointer">
            Choose Plan
          </button>
        </div>

        <!-- PREMIUM PLAN -->
        <div class="border border-gray-600 rounded-3xl p-8 text-black flex flex-col justify-between">
          <div>
            <h3 class="text-xl font-semibold mb-4">
              PREMIUM APP PLAN (Custom Enterprise App)
            </h3>

            <h2 class="text-4xl font-bold mb-6">
              ₹ 69,999/- <span class="text-base font-normal text-black">One-Time</span>
            </h2>

            <ul class="space-y-4 mb-8">
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Fully Custom Android + iOS App</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Advanced UI/UX (Modern, Animated Design)</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Unlimited Screens / Features</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Advanced Admin Panel (Full Control System)</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Real-Time Database Integration</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>API + Third-party Integrations</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Payment Gateway + Subscription System</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Chat / Notification System</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>High-Level Security & Optimization</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>App Store Optimization (ASO)</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>3–6 Months Dedicated Support</span>
              </li>
              <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
                <span class="text-black  flex-shrink-0">✔</span>
                <span>Dedicated Project Manager</span>
              </li>
            </ul>
          </div>

          <button class="w-full bg-gradient-to-r from-[#FD5528] to-[#fbb03b] text-white py-3 rounded-full font-medium transition cursor-pointer">
            Choose Plan
          </button>
        </div>

      </div>
      <!-- DESIGN -->
    <div class="tab-content hidden grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-content="design">
        <!-- BASIC PLAN -->
      <div class="border border-gray-600 rounded-3xl p-8 text-black flex flex-col justify-between">
        <div>
          <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-orange-100 text-[#FD5528] mb-3">
            Monthly Retainer • Weekly Scheduled Delivery
          </div>

          <h3 class="text-xl font-semibold mb-2">
           BASIC DESIGN PLAN (Starter Content)
          </h3>
          <p class="text-xs text-gray-500 mb-4">Consistent branded social presence for small businesses and founders.</p>

          <h2 class="text-4xl font-bold mb-6">
            ₹ 2,999/- <span class="text-base font-semibold text-orange-600 ml-1">/ Month</span>
          </h2>

          <ul class="space-y-4 mb-8 text-sm">
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> 5 High-Quality Social Media Posts
            </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> Basic Creative Design (Static Graphics)
            </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> 1 Platform (Instagram / Facebook)
            </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> Basic Branding (Fonts + Colors)
            </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> Standard Image Editing
            </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> 2 Revisions Per Design
            </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> Delivery in JPG/PNG Format
            </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> Monthly Content Support
            </li>
          </ul>
        </div>

        <button class="w-full bg-gradient-to-r from-[#FD5528] to-[#fbb03b] hover:from-[#fbb03b] hover:to-[#FD5528] text-white py-3 rounded-full font-medium transition cursor-pointer">
          Choose Plan
        </button>
      </div>

      <!-- STANDARD PLAN (CENTER) -->
      <div class="bg-gradient-to-r from-[#FD5528] to-[#fbb03b] rounded-[30px] p-10 text-white text-center scale-105 shadow-2xl flex flex-col justify-between">
        <div>
          <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-white/20 text-white mb-3">
            Most Popular • Multi-Platform & Video
          </div>

          <h3 class="text-xl font-semibold mb-2">
           STANDARD DESIGN PLAN (Business Branding)
          </h3>
          <p class="text-xs text-orange-100 mb-4">Reels and social designs tailored for lead-generation and brand building.</p>

          <h2 class="text-5xl font-bold mb-6">
            ₹ 5,999/- <span class="text-base font-semibold text-orange-100 ml-1">/ Month</span>
          </h2>

          <ul class="space-y-4 mb-8 text-left text-sm">
            <li class="flex items-center gap-3 border-b pb-3">
              <span class="text-orange-50">✔</span> 10 Professional Social Media Posts
            </li>
            <li class="flex items-center gap-3 border-b pb-3">
              <span class="text-orange-50">✔</span> 2 Reels / Short Video Designs
            </li>
            <li class="flex items-center gap-3 border-b pb-3">
              <span class="text-orange-50">✔</span> Multi-Platform Design (Instagram + Facebook)
            </li>
            <li class="flex items-center gap-3 border-b pb-3">
              <span class="text-orange-50">✔</span> Creative & Modern Design Concepts
            </li>
            <li class="flex items-center gap-3 border-b pb-3">
              <span class="text-orange-50">✔</span> Brand Consistency (Colors, Fonts, Style)
            </li>
            <li class="flex items-center gap-3 border-b pb-3">
              <span class="text-orange-50">✔</span> 3–4 Revisions Per Design
            </li>
            <li class="flex items-center gap-3 border-b pb-3">
              <span class="text-orange-50">✔</span> Ad Creatives (Basic)
            </li>
             <li class="flex items-center gap-3 border-b pb-3">
              <span class="text-orange-50">✔</span> Priority Delivery
            </li>
             <li class="flex items-center gap-3 border-b pb-3">
              <span class="text-orange-50">✔</span> Monthly Content Planning Support
            </li>
          </ul>
        </div>

        <button class="bg-black hover:bg-slate-900 text-white px-6 py-3 rounded-full font-medium transition cursor-pointer">
          Choose Plan
        </button>
      </div>

      <!-- PREMIUM PLAN -->
      <div class="border border-gray-600 rounded-3xl p-8 text-black flex flex-col justify-between">
        <div>
          <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-orange-100 text-[#FD5528] mb-3">
            Full Production • Monthly Retainer
          </div>

          <h3 class="text-xl font-semibold mb-2">
            PREMIUM DESIGN PLAN (Creative Domination)
          </h3>
          <p class="text-xs text-gray-500 mb-4">Complete agency-grade creative pipeline with motion graphics and ad creatives.</p>

          <h2 class="text-4xl font-bold mb-6">
            ₹ 9,999/- <span class="text-base font-semibold text-orange-600 ml-1">/ Month</span>
          </h2>

          <ul class="space-y-4 mb-8 text-sm">
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> 4–6 Reels / Motion Graphics
            </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> All Platform Coverage (Instagram, Facebook, LinkedIn, etc.)
            </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> Advanced Creative Concepts (Ads + Campaigns)
            </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> Full Branding Support (Colors, Typography, Style Guide)
            </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> Unlimited Revisions
            </li>
            <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> Ad Creatives + Promotional Designs
            </li>
             <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> Fast Delivery (24–48 hrs)
            </li>
             <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
              <span class="text-orange-500">✔</span> Dedicated Designer Support
            </li>
          </ul>
        </div>

        <button class="w-full bg-gradient-to-r from-[#FD5528] to-[#fbb03b] hover:from-[#fbb03b] hover:to-[#FD5528] text-white px-6 py-3 rounded-full font-medium transition cursor-pointer">
          Choose Plan
        </button>
      </div>

    
    </div>

    </div>
  </div>
</section>



<!-- FAQ -->
<section class="relative overflow-hidden bg-gradient-to-br from-white via-slate-50 to-slate-100 py-16 sm:py-20 lg:py-24 px-4 sm:px-6">

  <div class="max-w-6xl lg:max-w-7xl mx-auto relative z-10">

    <!-- Heading -->
    <div class="text-center mb-10 sm:mb-14">
      <p 
        data-aos="fade-up"
        class="inline-block text-xs sm:text-sm font-semibold uppercase tracking-[0.35em] 
          text-[#FD5528] relative px-5 py-2 rounded-full 
          bg-white/70 backdrop-blur-md 
          shadow-[0_15px_35px_rgba(253,85,40,0.25)] 
          border border-white/60
          before:absolute before:inset-0 before:rounded-full 
          before:bg-gradient-to-r before:from-[#FD5528]/20 before:to-orange-200/30 
          before:-z-10">
        FAQ
      </p>

      <h2 class="mt-5 text-3xl sm:text-4xl md:text-5xl font-bold text-slate-900">
        Frequently Asked Questions
      </h2>

      <p class="mt-4 text-slate-500 max-w-3xl mx-auto text-base sm:text-lg">
        Everything you need to know about partnering with Backend Coders — transparency, headcount, and support wrapped in a confident delivery process.
      </p>
    </div>

   
    <!-- GRID -->
    <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-start">

      <!-- LEFT IMAGE -->
      <div class="order-1 lg:order-2 relative rounded-[32px] bg-gradient-to-br from-[#FFEDD5] via-white to-[#FEE2E2] p-6 shadow-[0_25px_60px_rgba(253,85,40,0.25)]">
        <div class="absolute inset-x-4 top-4 h-2 rounded-full bg-gradient-to-r from-[#FD5528]/60 to-orange-200/70 blur-3xl opacity-70"></div>
        <img 
          src="{{asset('assets/images/faq.png')}}"
          alt="FAQ Illustration - Backend Coders India"
          class="rounded-2xl shadow-2xl w-full h-[360px] object-cover relative z-10"
        >
      </div>

      <!-- FAQ LIST -->
      <div class="order-2 lg:order-1 space-y-4">

        <div class="max-w-6xl mx-auto px-4 grid gap-6 lg:grid-cols-1">

    <!-- COLUMN -->
    <div class="space-y-4">

      <!-- ITEM -->
      <div class="faq-item bg-gray-50 p-5 rounded-2xl transition shadow-md hover:shadow-lg">
        <button data-faq-trigger type="button" aria-expanded="false" aria-controls="faq-answer-1" class="flex w-full items-center justify-between gap-4 cursor-pointer focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#FD5528]/60 focus-visible:ring-offset-2 focus-visible:ring-offset-white">
          <span class="text-left text-base font-medium tracking-tight text-slate-900">
            What services do you offer?
          </span>
          <span class="faq-icon inline-flex h-10 w-10 items-center justify-center  text-[#FD5528]  transition duration-300">
            <span class="faq-icon-text text-3xl leading-none">+</span>
          </span>
        </button>
        <div id="faq-answer-1" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 text-sm text-gray-600 mt-3" aria-hidden="true">
          Backend engineering, API design, cloud architecture, automation, and enterprise-grade solutions that keep scaling teams aligned.
        </div>
      </div>

      <!-- ITEM -->
      <div class="faq-item bg-gray-50 p-5 rounded-2xl transition shadow-md hover:shadow-lg">
        <button data-faq-trigger type="button" aria-expanded="false" aria-controls="faq-answer-2" class="flex w-full items-center justify-between gap-4 cursor-pointer focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#FD5528]/60 focus-visible:ring-offset-2 focus-visible:ring-offset-white">
          <span class="text-left text-base font-medium tracking-tight text-slate-900">
            Which technologies do you work with?
          </span>
          <span class="faq-icon inline-flex h-10 w-10 items-center justify-center  text-[#FD5528]  transition duration-300">
            <span class="faq-icon-text text-3xl leading-none">+</span>
          </span>
        </button>
        <div id="faq-answer-2" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 text-sm text-gray-600 mt-3" aria-hidden="true">
            .NET Core, Node.js, Laravel, Go, SQL Server, PostgreSQL, Redis, Kafka, Azure, AWS, and modern DevOps pipelines.
        </div>
      </div>

    </div>

    <!-- COLUMN -->
    <div class="space-y-4">

      <div class="faq-item bg-gray-50 p-5 rounded-2xl transition shadow-md hover:shadow-lg">
        <button data-faq-trigger type="button" aria-expanded="false" aria-controls="faq-answer-3" class="flex w-full items-center justify-between gap-4 cursor-pointer focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#FD5528]/60 focus-visible:ring-offset-2 focus-visible:ring-offset-white">
          <span class="text-left text-base font-medium tracking-tight text-slate-900">
            Do you provide dedicated development teams?
          </span>
          <span class="faq-icon inline-flex h-10 w-10 items-center justify-center  text-[#FD5528]  transition duration-300">
            <span class="faq-icon-text text-3xl leading-none">+</span>
          </span>
        </button>
        <div id="faq-answer-3" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 text-sm text-gray-600 mt-3" aria-hidden="true">
          Yes, our specialists embed within your product organization with dedicated project leads and sprint reporting.
        </div>
      </div>

      <div class="faq-item bg-gray-50 p-5 rounded-2xl transition shadow-md hover:shadow-lg">
        <button data-faq-trigger type="button" aria-expanded="false" aria-controls="faq-answer-4" class="flex w-full items-center justify-between gap-4 cursor-pointer focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#FD5528]/60 focus-visible:ring-offset-2 focus-visible:ring-offset-white">
          <span class="text-left text-base font-medium tracking-tight text-slate-900">
            How do you ensure scalability and performance?
          </span>
          <span class="faq-icon inline-flex h-10 w-10 items-center justify-center  text-[#FD5528]  transition duration-300">
            <span class="faq-icon-text text-3xl leading-none">+</span>
          </span>
        </button>
        <div id="faq-answer-4" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 text-sm text-gray-600 mt-3" aria-hidden="true">
        We architect microservices, apply caching strategies, optimize storage, and add observability to catch regressions early.
        </div>
      </div>

    </div>

    <!-- COLUMN -->
    <div class="space-y-4">

      <div class="faq-item bg-gray-50 p-5 rounded-2xl transition shadow-md hover:shadow-lg">
        <button data-faq-trigger type="button" aria-expanded="false" aria-controls="faq-answer-5" class="flex w-full items-center justify-between gap-4 cursor-pointer focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#FD5528]/60 focus-visible:ring-offset-2 focus-visible:ring-offset-white">
          <span class="text-left text-base font-medium tracking-tight text-slate-900">
            What is your development process?
          </span>
          <span class="faq-icon inline-flex h-10 w-10 items-center justify-center  text-[#FD5528]  transition duration-300">
            <span class="faq-icon-text text-3xl leading-none">+</span>
          </span>
        </button>
        <div id="faq-answer-5" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 text-sm text-gray-600 mt-3" aria-hidden="true">
      We follow a structured agile cadence: discovery, roadmap, sprint-based delivery, QA, deployment, and post-launch retrospectives.
        </div>
      </div>

      <div class="faq-item bg-gray-50 p-5 rounded-2xl transition shadow-md hover:shadow-lg">
        <button data-faq-trigger type="button" aria-expanded="false" aria-controls="faq-answer-6" class="flex w-full items-center justify-between gap-4 cursor-pointer focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#FD5528]/60 focus-visible:ring-offset-2 focus-visible:ring-offset-white">
          <span class="text-left text-base font-medium tracking-tight text-slate-900">
            Do you provide post-launch support?
          </span>
          <span class="faq-icon inline-flex h-10 w-10 items-center justify-center  text-[#FD5528]  transition duration-300">
            <span class="faq-icon-text text-3xl leading-none">+</span>
          </span>
        </button>
        <div id="faq-answer-6" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 text-sm text-gray-600 mt-3" aria-hidden="true">
          Long-term maintenance, 24/7 monitoring, release planning, and scaling support are included in every retainer plan.
        </div>
      </div>

    </div>

  </div>

       

      </div>

    </div>

  </div>

  <div class="pointer-events-none absolute inset-0 opacity-50">
    <div class="absolute inset-y-0 left-0 w-1/2 bg-gradient-to-r from-[#FD5528]/5 to-transparent"></div>
    <div class="absolute inset-y-0 right-0 w-1/2 bg-gradient-l from-[#0F172A]/5 to-transparent"></div>
  </div>

</section>


<!-- PACKAGE INQUIRY & CONTACT SECTION -->
<section id="contact" class="scroll-mt-24 py-20 bg-gradient-to-br from-slate-50 via-white to-orange-50/40 relative overflow-hidden border-t border-slate-100">
  <div class="max-w-7xl mx-auto px-6">
    <div class="max-w-3xl mx-auto text-center mb-12">
      <span class="inline-block text-xs sm:text-sm font-semibold uppercase tracking-[0.35em] text-[#FD5528] relative px-5 py-2 rounded-full bg-white shadow-sm border border-orange-100 mb-4">
        Package Inquiry
      </span>
      <h2 class="text-3xl md:text-5xl font-bold text-gray-900">
        Get Started With Your <span class="text-[#FD5528]">Selected Plan</span>
      </h2>
      <p class="mt-4 text-gray-600 text-base sm:text-lg">
        Click "Choose Plan" on any package above to automatically pre-fill your inquiry, or enter your custom requirements below.
      </p>
    </div>

    <div class="max-w-4xl mx-auto bg-white rounded-3xl shadow-xl border border-gray-200 p-6 sm:p-10 relative overflow-hidden">
      <!-- Selected Plan Banner (dynamic) -->
      <div id="selectedPlanBanner" class="hidden mb-6 rounded-2xl border-2 border-[#FD5528]/30 bg-gradient-to-r from-orange-50 via-white to-orange-50/50 p-4 sm:p-5 transition-all duration-300">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-[#FD5528] text-white flex items-center justify-center font-bold text-lg shadow-sm flex-shrink-0">
              ✓
            </div>
            <div>
              <span class="text-xs uppercase font-bold tracking-wider text-[#FD5528] block" id="selectedPlanCategoryBadge">Selected Package</span>
              <h3 class="text-lg font-bold text-gray-900 leading-tight" id="selectedPlanTitleDisplay">Plan Name</h3>
              <p class="text-sm font-semibold text-gray-600" id="selectedPlanPriceDisplay">₹ 0/-</p>
            </div>
          </div>
          <button type="button" id="clearSelectedPlanBtn" class="text-xs font-semibold text-gray-500 hover:text-red-500 underline transition self-end sm:self-center">
            Clear / Change Plan
          </button>
        </div>
      </div>

      <!-- FORM -->
      <form method="POST" action="{{ route('contact.send') }}" novalidate data-contact-form id="packageContactForm">
        @csrf
        <input type="hidden" name="selected_plan" id="selectedPlanInput" value="{{ old('selected_plan') }}">

        @php
            $pkgCaptchaNum1 = rand(2, 9);
            $pkgCaptchaNum2 = rand(1, 9);
            $pkgCaptchaSum = $pkgCaptchaNum1 + $pkgCaptchaNum2;
        @endphp

        <div id="package-contact-feedback" class="space-y-4 mb-6">
          @if(session('success'))
            <div class="rounded-2xl border-2 border-emerald-400 bg-emerald-50 p-5 text-emerald-900 shadow-md flex items-start gap-3.5" role="alert">
              <div class="p-1 rounded-full bg-emerald-100 text-emerald-600 flex-shrink-0 mt-0.5">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <div>
                <h4 class="text-base font-bold text-emerald-950">Inquiry Received!</h4>
                <p class="text-sm font-semibold text-emerald-800 mt-0.5">
                  {{ session('success') }}
                </p>
                <p class="text-xs text-emerald-700 mt-1">
                  Our team will review your chosen package and get back to you shortly. For immediate inquiries, call <a href="tel:+919140092133" class="underline font-bold">+91 9140092133</a>.
                </p>
              </div>
            </div>
          @endif

          @if(session('error'))
            <div class="rounded-2xl border-2 border-red-300 bg-red-50 p-5 text-red-900 shadow-sm flex items-start gap-3.5" role="alert">
              <div class="p-1 rounded-full bg-red-100 text-red-600 flex-shrink-0 mt-0.5">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                </svg>
              </div>
              <div>
                <h4 class="text-base font-bold text-red-950">Submission Failed</h4>
                <p class="text-sm font-medium text-red-800 mt-0.5">
                  {{ session('error') }}
                </p>
              </div>
            </div>
          @endif

          @if($errors->any())
            <div class="rounded-2xl border-2 border-red-300 bg-red-50 p-5 text-red-900 shadow-sm" role="alert">
              <div class="flex items-center gap-2 mb-2">
                <svg class="h-5 w-5 text-red-600 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                </svg>
                <h4 class="text-base font-bold text-red-950">Please correct the highlighted fields:</h4>
              </div>
              <ul class="list-disc list-inside text-sm space-y-1 text-red-800 ml-1">
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
              <p class="text-xs text-red-700 mt-2 font-medium">
                Next steps: Check required fields, correct invalid entries, or email us at <a href="mailto:info@backendcodersindia.com" class="underline font-bold">info@backendcodersindia.com</a>.
              </p>
            </div>
          @endif

          <div id="packageContactDynamicFeedback" class="hidden"></div>
        </div>

        <div class="space-y-6">
          <!-- NAME ROW -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="relative">
              <input
                id="pkg_first_name"
                type="text"
                name="first_name"
                value="{{ old('first_name') }}"
                required
                placeholder=" "
                class="peer w-full px-5 pt-5 pb-2 rounded-2xl border border-gray-200 focus:ring-2 focus:ring-orange-300"
              >
              <label
                for="pkg_first_name"
                class="absolute left-5 top-2 text-sm text-gray-500 transition-all
                       peer-placeholder-shown:top-4
                       peer-placeholder-shown:text-base
                       peer-focus:top-2
                       peer-focus:text-sm">
                First Name<span class="text-red-500">*</span>
              </label>
            </div>

            <div class="relative">
              <input
                id="pkg_last_name"
                type="text"
                name="last_name"
                value="{{ old('last_name') }}"
                placeholder=" "
                class="peer w-full px-5 pt-5 pb-2 rounded-2xl border border-gray-200 focus:ring-2 focus:ring-orange-300"
              >
              <label
                for="pkg_last_name"
                class="absolute left-5 top-2 text-sm text-gray-500 transition-all
                       peer-placeholder-shown:top-4
                       peer-placeholder-shown:text-base
                       peer-focus:top-2
                       peer-focus:text-sm">
                Last Name
              </label>
            </div>
          </div>

          <!-- EMAIL & PHONE -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="relative">
              <input
                id="pkg_email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                placeholder=" "
                autocomplete="email"
                class="peer w-full px-5 pt-5 pb-2 rounded-2xl border border-gray-200 bg-white focus:ring-2 focus:ring-orange-300"
              >
              <label
                for="pkg_email"
                class="absolute left-5 top-2 text-gray-500 text-sm transition-all
                       peer-placeholder-shown:top-3.5
                       peer-placeholder-shown:text-base
                       peer-focus:top-2
                       peer-focus:text-sm
                       peer-focus:text-orange-600">
                Email Address <span class="text-red-500">*</span>
              </label>
            </div>

            <div>
              <div class="relative">
                <input
                  id="pkg_phone"
                  type="tel"
                  name="phone"
                  value="{{ old('phone') }}"
                  required
                  placeholder="  "
                  autocomplete="tel"
                  pattern="[\+]?[0-9\s\-\(\)]{7,20}"
                  class="peer w-full px-5 pt-5 pb-2 rounded-2xl border border-gray-200 bg-white focus:ring-2 focus:ring-orange-300 placeholder:text-gray-400 placeholder:opacity-0 focus:placeholder:opacity-100 transition-all"
                >
                <label
                  for="pkg_phone"
                  class="absolute left-5 top-2 text-gray-500 text-sm transition-all
                         peer-placeholder-shown:top-3.5
                         peer-placeholder-shown:text-base
                         peer-focus:top-2
                         peer-focus:text-sm
                         peer-focus:text-orange-600">
                  Phone Number <span class="text-red-500">*</span>
                </label>
              </div>
              <p class="mt-1 text-xs text-gray-500 pl-2">Include your country code, e.g. +91 for India.</p>
            </div>
          </div>

          <!-- MESSAGE -->
          <div class="relative">
            <textarea
              id="pkg_message"
              name="message"
              rows="4"
              placeholder=" "
              class="peer w-full px-5 pt-5 pb-2 rounded-2xl border border-gray-200 bg-white focus:ring-2 focus:ring-orange-300"
            >{{ old('message') }}</textarea>
            <label
              for="pkg_message"
              class="absolute left-5 top-2 text-gray-500 text-sm transition-all
                     peer-placeholder-shown:top-3.5
                     peer-placeholder-shown:text-base
                     peer-focus:top-2
                     peer-focus:text-sm
                     peer-focus:text-orange-600">
              Your Requirements / Questions
            </label>
          </div>

          <!-- CAPTCHA & SUBMIT ROW -->
          <div class="flex flex-col sm:flex-row items-end gap-4">
            <div class="w-full sm:w-1/2">
              <div class="p-4 rounded-xl shadow-sm bg-[#FFFCED] border border-[#f3e2b3]">
                <!-- QUESTION & RELOAD -->
                <div class="mb-2 flex items-center justify-between gap-2 text-sm font-bold text-gray-700">
                  <span id="captchaQuestion">
                    What is {{ $pkgCaptchaNum1 }} + {{ $pkgCaptchaNum2 }}? <span class="text-red-500 font-bold">*</span>
                  </span>
                  <button type="button" class="reload-captcha-btn inline-flex items-center gap-1 text-xs font-semibold text-orange-600 hover:text-orange-700 hover:underline transition cursor-pointer" title="Get a new math challenge">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                    Reload challenge
                  </button>
                </div>
                <!-- INPUT -->
                <input
                  type="text"
                  name="captcha"
                  id="captchaInput"
                  class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 bg-white"
                  placeholder="Enter answer"
                  autocomplete="off"
                  required
                >
                <!-- HIDDEN -->
                <input type="hidden" name="captcha_correct" id="captchaCorrect" value="{{ $pkgCaptchaSum }}">
                <!-- ERROR & RECOVERY -->
                <div id="captchaError" class="mt-2 text-xs text-red-600 font-medium hidden bg-red-50 p-2.5 rounded-lg border border-red-200">
                  <div class="flex items-center justify-between gap-2">
                    <span class="flex items-center gap-1.5">
                      <svg class="w-4 h-4 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                      </svg>
                      Wrong answer, try again.
                    </span>
                    <button type="button" class="reload-captcha-btn font-bold text-red-700 hover:text-red-900 underline cursor-pointer">
                      Reload challenge
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="w-full sm:w-1/2 flex justify-end">
              <button
                type="submit"
                class="w-full sm:w-auto bg-gradient-to-r from-[#FD5528] to-[#fbb03b] hover:from-[#fbb03b] hover:to-[#FD5528] text-white px-8 py-3.5 rounded-2xl font-bold shadow-md hover:shadow-xl hover:scale-105 transition duration-300 cursor-pointer"
              >
                Submit Package Inquiry →
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

<!-- CTA SECTION -->
<section class="relative overflow-hidden py-20 bg-gradient-to-r from-[#FC5124] via-orange-500 to-orange-400 text-white">

  <!-- BACKGROUND GLOW -->
  <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top_left,_white,_transparent_50%)]"></div>

  <div class="relative max-w-5xl mx-auto px-6 text-center">

    <!-- HEADING -->
    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 leading-tight">
      Have a Project in Mind?
    </h2>

    <!-- SUBTEXT -->
    <p class="text-white/80 text-sm sm:text-base md:text-lg max-w-2xl mx-auto mb-10">
      Let’s build something amazing together. Share your idea and we’ll turn it into a powerful digital product.
    </p>

    <!-- BUTTONS -->
    <div class="flex flex-col sm:flex-row justify-center gap-4">

      <!-- PRIMARY BUTTON -->
      <a href="{{ route('frontend.contact') }}"
         class="group inline-flex items-center justify-center bg-white text-[#FC5124] px-6 py-3 rounded-xl font-semibold shadow-lg hover:shadow-2xl hover:scale-105 transition duration-300">

        Contact Us

        <!-- ARROW -->
        <span class="ml-2 transition group-hover:translate-x-1">→</span>
      </a>

      <!-- WHATSAPP BUTTON -->
      <a href="https://wa.me/919140092133"
         target="_blank"
         rel="noopener noreferrer"
         class="group inline-flex items-center justify-center border border-white/40 px-6 py-3 rounded-xl font-semibold backdrop-blur-md hover:bg-white/10 hover:scale-105 transition duration-300">

       
        Let's Chat on WhatsApp
      </a>

    </div>

  </div>

</section>

<!-- SCRIPT -->
<script>
document.addEventListener("DOMContentLoaded", function () {

  const tabs = document.querySelectorAll(".tab");
  const contents = document.querySelectorAll(".tab-content");

  function showTab(target) {
    contents.forEach(c => {
      c.classList.toggle("hidden", c.dataset.content !== target);
    });

    tabs.forEach(t => {
      t.classList.toggle("active", t.dataset.tab === target);
    });
  }

  // click
  tabs.forEach(tab => {
    tab.addEventListener("click", function () {
      showTab(this.dataset.tab);
    });
  });

  // default load
  const defaultTab = document.querySelector(".tab.active") || tabs[0];
  if (defaultTab) showTab(defaultTab.dataset.tab);

  // Choose Plan Button Click Handler
  const planButtons = document.querySelectorAll(".tab-content button");
  const selectedPlanInput = document.getElementById("selectedPlanInput");
  const selectedPlanBanner = document.getElementById("selectedPlanBanner");
  const selectedPlanTitleDisplay = document.getElementById("selectedPlanTitleDisplay");
  const selectedPlanPriceDisplay = document.getElementById("selectedPlanPriceDisplay");
  const selectedPlanCategoryBadge = document.getElementById("selectedPlanCategoryBadge");
  const clearSelectedPlanBtn = document.getElementById("clearSelectedPlanBtn");
  const messageInput = document.getElementById("pkg_message");
  const firstNameInput = document.getElementById("pkg_first_name");

  function selectPlan(planTitle, planPrice, categoryName) {
    const fullPlanText = `${categoryName} - ${planTitle} (${planPrice})`.trim();
    if (selectedPlanInput) selectedPlanInput.value = fullPlanText;

    if (selectedPlanTitleDisplay) selectedPlanTitleDisplay.textContent = planTitle;
    if (selectedPlanPriceDisplay) selectedPlanPriceDisplay.textContent = planPrice;
    if (selectedPlanCategoryBadge) selectedPlanCategoryBadge.textContent = categoryName + " Package";
    if (selectedPlanBanner) selectedPlanBanner.classList.remove("hidden");

    if (messageInput && (!messageInput.value || messageInput.value.includes("I would like to inquire about"))) {
      messageInput.value = `I would like to inquire about the ${fullPlanText} package. Please share further details and next steps.`;
    }

    const contactSection = document.getElementById("contact");
    if (contactSection) {
      contactSection.scrollIntoView({ behavior: "smooth", block: "start" });
    }

    setTimeout(() => {
      if (firstNameInput) firstNameInput.focus();
    }, 600);
  }

  planButtons.forEach(btn => {
    if (btn.innerText.toLowerCase().includes("choose plan")) {
      btn.addEventListener("click", function (e) {
        e.preventDefault();
        const card = this.closest("[data-plan-card]") || this.closest(".tab-content > div");
        const activeTab = document.querySelector(".tab.active");
        const categoryName = activeTab ? activeTab.innerText.trim() : "Custom Service";
        const planTitle = card ? (card.querySelector("h3")?.innerText.trim() || "Selected Plan") : "Selected Plan";
        const planPrice = card ? (card.querySelector("h2")?.innerText.trim().replace(/\s+/g, ' ') || "") : "";

        selectPlan(planTitle, planPrice, categoryName);
      });
    }
  });

  if (clearSelectedPlanBtn) {
    clearSelectedPlanBtn.addEventListener("click", function () {
      if (selectedPlanInput) selectedPlanInput.value = "";
      if (selectedPlanBanner) selectedPlanBanner.classList.add("hidden");
      if (messageInput && messageInput.value.includes("I would like to inquire about")) {
        messageInput.value = "";
      }
    });
  }

  // Pre-select plan if URL query param exists (e.g. ?plan=...)
  const urlParams = new URLSearchParams(window.location.search);
  const initialPlan = urlParams.get("plan");
  if (initialPlan) {
    selectPlan(initialPlan, "", "Custom");
  }

});
</script>

@endsection
