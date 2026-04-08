@extends("component.main")
@section("content")
<!-- hero section  -->
<section class="relative h-[30vh] flex items-center justify-center text-center text-white overflow-hidden">

  <!-- BACKGROUND IMAGE -->
  <img 
    src="{{asset('assets/images/banner.png')}}"
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
      <button class="tab active px-5 py-2 rounded-full border border-[#FD5528] transition hover:bg-[#FD5528] hover:text-white" data-tab="it">IT Services</button>
      <button class="tab px-5 py-2 rounded-full border border-[#FD5528] transition hover:bg-[#FD5528] hover:text-white" data-tab="seo">SEO</button>
      <button class="tab px-5 py-2 rounded-full border border-[#FD5528] transition hover:bg-[#FD5528] hover:text-white" data-tab="marketing">Marketing</button>
      <button class="tab px-5 py-2 rounded-full border border-[#FD5528] transition hover:bg-[#FD5528] hover:text-white" data-tab="saas">CRM / SaaS</button>
      <button class="tab px-5 py-2 rounded-full border border-[#FD5528] transition hover:bg-[#FD5528] hover:text-white" data-tab="app">App Dev</button>
      <button class="tab px-5 py-2 rounded-full border border-[#FD5528] transition hover:bg-[#FD5528] hover:text-white" data-tab="design">Graphic Design</button>
    </div>

    <!-- CONTENT -->
    <div class="mt-14">

      <!-- IT -->
     <div class="tab-content active grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-content="it">
       
      <!-- BASIC PLAN -->
      <div class="border border-gray-700 rounded-3xl p-8 text-black">
        <h3 class="text-xl font-semibold mb-4">BASIC PLAN (Starter Business)</h3>

        <h2 class="text-4xl font-bold mb-6">
          ₹ 7,999/- <span class="text-base font-normal">Monthly</span>
        </h2>

        <ul class="space-y-4 mb-8">
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
            <span class="text-orange-500">✔</span> Yearly Renewal Support
          </li>
        </ul>

        <button class="w-full  bg-gradient-to-r from-[#FD5528] to-[#fbb03b] hover:from-[#fbb03b] hover:to-[#FD5528] hover:scale-110 text-white py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>

      <!-- STANDARD PLAN (CENTER) -->
      <div class="bg-gradient-to-r from-[#FD5528] to-[#fbb03b] rounded-3xl p-10 text-white text-center scale-105 shadow-xl">
        <h3 class="text-xl font-semibold mb-4">STANDARD PLAN (Growth Business)</h3>

        <h2 class="text-4xl font-bold mb-6">
          ₹ 15,999/- <span class="text-base font-normal">Monthly</span>
        </h2>

        <ul class="space-y-4 mb-8 text-left">
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
            <span class="text-orange-50">✔</span> Free Support
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
            <span class="text-orange-50">✔</span> Yearly Renewal
          </li>
        </ul>

        <button class="bg-black hover:bg-[#FD5528] text-white px-6 py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>

      <!-- PREMIUM PLAN -->
       <div class="border border-gray-700 rounded-3xl p-8 text-black">
        <h3 class="text-xl font-semibold mb-4">CUSTOMISED / PREMIUM PLAN (Scale Business)</h3>

        <h2 class="text-4xl font-bold mb-6">
          ₹ 24,999/- <span class="text-base font-normal">Monthly</span>
        </h2>

        <ul class="space-y-4 mb-8">
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Fully Custom Website Design
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> 25+ Pages / Dynamic Website
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span>1 Year Free Domain + Hosting + SSL
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
            <span class="text-orange-500">✔</span>Admin Panel / CMS (Optional)
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> API / Third-party Integrations
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Priority Support
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span>Mobile + Tablet Optimization
          </li>
        </ul>

        <button class="w-full  bg-gradient-to-r from-[#FD5528] to-[#fbb03b] hover:from-[#fbb03b] hover:to-[#FD5528] hover:scale-110 text-white py-3 rounded-full font-medium">
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
          ₹ 7,999/- <span class="text-base font-normal text-gray-900">Monthly</span>
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
            <span class="text-orange-500">✔</span> Weekly & Monthly Reporting
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Google Search Console Setup
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Website Audit Report
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Meta Tags Optimization
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Weekly & Monthly Performance Report
          </li>
        </ul>

        <button class="w-full  bg-gradient-to-r from-[#FD5528] to-[#fbb03b] text-black py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>


         <!-- STANDARD PLAN (CENTER HIGHLIGHT) -->
       <div class=" bg-gradient-to-r from-[#FD5528] to-[#fbb03b] rounded-[30px] p-10 text-white text-center scale-105 shadow-2xl">

        <h3 class="text-xl font-semibold mb-4">
          STANDARD SEO PLAN (Business Growth)
        </h3>

        <h2 class="text-5xl font-bold mb-6">
          ₹ 11,999/- <span class="text-base font-normal text-gray-600">Monthly</span>
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
          ₹ 15,999/- <span class="text-base font-normal text-gray-300">Monthly</span>
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

        <button class="w-full  bg-gradient-to-r from-[#FD5528] to-[#fbb03b] text-black py-3 rounded-full font-medium">
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

        <button class="w-full bg-gradient-to-r from-[#FD5528] to-[#fbb03b] text-black py-3 rounded-full font-medium">
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
          ₹ 15,999/- <span class="text-base font-normal text-gray-300">Monthly</span>
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

        <button class="w-full bg-gradient-to-r from-[#FD5528] to-[#fbb03b] text-black py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>
    </div>

      <!-- CRM -->
    <div class="tab-content hidden grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-content="saas">

      <!-- basic -->
      <div class="border border-gray-600 rounded-3xl p-8 text-black">

        <h3 class="text-xl font-semibold mb-4">
          BASIC CRM PLAN (Starter Automation)
        </h3>

        <h2 class="text-4xl font-bold mb-6">
          ₹ 4,999/- <span class="text-base font-normal text-gray-900">Monthly</span>
        </h2>

        <ul class="space-y-4 mb-8">
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Lead Management Dashboard
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Basic CRM Setup (Contacts + Leads)
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> 1 User Access
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Data Entry & Tracking System
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Basic Reporting Dashboard
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> WhatsApp / Email Integration (Basic)
          </li>
           <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Monthly Data Backup
          </li>
           <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Email Support
          </li>
          

        </ul>

        <button class="w-full bg-gradient-to-r from-[#FD5528] to-[#fbb03b] text-black py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>

        <!-- STANDARD PLAN (CENTER) -->
      <div class="bg-gradient-to-r from-[#FD5528] to-[#fbb03b] rounded-[30px] p-10 text-white text-center scale-105 shadow-2xl">

        <h3 class="text-xl font-semibold mb-4">
          STANDARD CRM PLAN (Business Automation)
        </h3>

        <h2 class="text-5xl font-bold mb-6">
          ₹ 7,999/- <span class="text-base font-normal text-gray-50">Monthly</span>
        </h2>

        <ul class="space-y-4 mb-8 text-left">
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Advanced CRM Dashboard
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Multi-User Access (3–5 Users)
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Lead + Deal Pipeline Management
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Task & Follow-up Automation
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Email + WhatsApp Integration
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Custom Fields & Data Management
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Sales Reports & Analytics
          </li>
            <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Basic Workflow Automation
          </li>
            <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Monthly Backup + Security
          </li>
           <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Priority Support
          </li>
        </ul>

        <button class="bg-black hover:bg-gradient-to-r hover:from-[#FD5528] hover:to-[#fbb03b] text-white px-6 py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>

        <!-- PREMIUM PLAN -->
      <div class="border border-gray-600 rounded-3xl p-8 text-black">

        <h3 class="text-xl font-semibold mb-4">
          PREMIUM CRM / SAAS PLAN (Advanced Automation & Scaling)
        </h3>

        <h2 class="text-4xl font-bold mb-6">
          ₹ 13,999/- <span class="text-base font-normal text-gray-300">Monthly</span>
        </h2>

        <ul class="space-y-4 mb-8">
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Fully Custom CRM Dashboard
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Unlimited Users Access
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Advanced Workflow Automation
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> API Integrations (Website / Apps / Tools)
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Sales Funnel & Conversion Tracking
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Advanced Analytics & Reports
          </li>
           <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Lead Scoring System
          </li>
           <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Multi-channel Integration (WhatsApp, Email, SMS)
          </li>
           <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Role-based Access Control
          </li>
           <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Daily Backup + High Security
          </li>
           <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Dedicated Account Manager
          </li>
           <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Custom Feature Development
          </li>
        </ul>

        <button class="w-full bg-gradient-to-r from-[#FD5528] to-[#fbb03b] text-black py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>

    </div>

      <!-- APP -->
      <div class="tab-content hidden grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-content="app">
         <!-- App BASIC PLAN -->
      <div class="border border-gray-600 rounded-3xl p-8 text-black">

        <h3 class="text-xl font-semibold mb-4">
          BASIC APP PLAN (Starter App)
        </h3>

        <h2 class="text-4xl font-bold mb-6">
          ₹ 19,999<span class="text-base font-normal text-gray-900">Starting</span>
        </h2>

        <ul class="space-y-4 mb-8">
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Android App Development (Single Platform)
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Basic UI/UX Design
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> 3–5 Screens (Home, About, Contact, etc.)
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Static / Basic Dynamic Features
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> API Integration (Basic)
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Contact Form / Inquiry System
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span>Play Store Upload Guidance
          </li>
           <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span>1 Month Free Support
          </li>
          
        </ul>

        <button class="w-full  bg-gradient-to-r from-[#FD5528] to-[#fbb03b] text-black py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>

        <!-- STANDARD SEO PLAN (CENTER) -->
      <div class=" bg-gradient-to-r from-[#FD5528] to-[#fbb03b] rounded-[30px] p-10 text-white text-center scale-105 shadow-2xl">

        <h3 class="text-xl font-semibold mb-4">
         STANDARD APP PLAN (Business App)
        </h3>

        <h2 class="text-5xl font-bold mb-6">
         ₹ 39,999<span class="text-base font-normal text-gray-600">Starting</span>
        </h2>

        <ul class="space-y-4 mb-8 text-left">
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-500">✔</span> Android + iOS App (Cross Platform - Flutter/React Native)
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-500">✔</span>Custom UI/UX Design
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-500">✔</span>6–10 Screens
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-500">✔</span> Admin Panel (Basic Web Dashboard)
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-500">✔</span> API Integration (Advanced)
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-500">✔</span> User Login / Registration System
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-500">✔</span> Push Notifications
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-500">✔</span> Payment Gateway Integration (Optional)
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-500">✔</span> Play Store + App Store Deployment
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-500">✔</span> 2 Months Free Support
          </li>
        </ul>

        <button class="bg-black  hover:bg-gradient-to-r hover:from-[#FD5528] hover:to-[#fbb03b] text-white px-6 py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>

        <!-- PREMIUM PLAN -->
      <div class="border border-gray-600 rounded-3xl p-8 text-black">

        <h3 class="text-xl font-semibold mb-4">
          PREMIUM APP PLAN (Custom Enterprise App)
        </h3>

        <h2 class="text-4xl font-bold mb-6">
         ₹ 69,999<span class="text-base font-normal text-gray-600">Starting</span>
        </h2>

        <ul class="space-y-4 mb-8">
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Fully Custom Android + iOS App
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Advanced UI/UX (Modern, Animated Design)
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Unlimited Screens / Features
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Advanced Admin Panel (Full Control System)
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Real-Time Database Integration
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> API + Third-party Integrations
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Payment Gateway + Subscription System
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Chat / Notification System
          </li>
           <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> High-Level Security & Optimization
          </li>
           <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> App Store Optimization (ASO)
           <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> 3–6 Months Dedicated Support
          </li>
           <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Dedicated Project Manager
          </li>
        </ul>

        <button class="w-full  bg-gradient-to-r from-[#FD5528] to-[#fbb03b] text-black py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>

      </div>

      <!-- DESIGN -->
    <div class="tab-content hidden grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-content="design">
        <!-- BASIC PLAN -->
      <div class="border border-gray-600 rounded-3xl p-8 text-black">

        <h3 class="text-xl font-semibold mb-4">
         BASIC DESIGN PLAN (Starter Content)
        </h3>

        <h2 class="text-4xl font-bold mb-6">
          ₹ 2,999- <span class="text-base font-normal text-gray-600">Monthly</span>
        </h2>

        <ul class="space-y-4 mb-8">
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

        <button class="w-full  bg-gradient-to-r from-[#FD5528] to-[#fbb03b]  hover:bg-gradient-to-r hover:from-[#FD5528] hover:to-[#fbb03b] text-black py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>

      <!-- STANDARD PLAN (CENTER) -->
      <div class=" bg-gradient-to-r from-[#FD5528] to-[#fbb03b] rounded-[30px] p-10 text-white text-center scale-105 shadow-2xl">

        <h3 class="text-xl font-semibold mb-4">
         STANDARD DESIGN PLAN (Business Branding)
        </h3>

        <h2 class="text-5xl font-bold mb-6">
          ₹ 5,999/- <span class="text-base font-normal text-gray-600">Monthly</span>
        </h2>

        <ul class="space-y-4 mb-8 text-left">
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
            <span class="text-orange-50">✔</span>Ad Creatives (Basic)
          </li>
           <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span>Priority Delivery
          </li>
           <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span>Monthly Content Planning Support
          </li>
        </ul>

        <button class=" bg-black  hover:bg-gradient-to-r hover:from-[#FD5528] hover:to-[#fbb03b] text-white px-6 py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>

      <!-- PREMIUM PLAN -->
      <div class="border border-gray-600 rounded-3xl p-8 text-black">

        <h3 class="text-xl font-semibold mb-4">
          PREMIUM DESIGN PLAN (Creative Domination)
        </h3>

        <h2 class="text-4xl font-bold mb-6">
          ₹ 9,999/- <span class="text-base font-normal text-gray-600">Monthly</span>
        </h2>

        <ul class="space-y-4 mb-8">
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
            <span class="text-orange-500">✔</span>Ad Creatives + Promotional Designs
          </li>
           <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span>Fast Delivery (24–48 hrs)
          </li>
           <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span>Dedicated Designer Support
          </li>
        </ul>

        <button class="w-full bg-gradient-to-r from-[#FD5528] to-[#fbb03b]  hover:bg-gradient-to-r hover:from-[#FD5528] hover:to-[#fbb03b] text-white px-6 py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>
    </div>

    </div>
  </div>
</section>



<!-- SCRIPT -->
<script>
const tabs = document.querySelectorAll(".tab");
const contents = document.querySelectorAll(".tab-content");

tabs.forEach(tab => {
  tab.addEventListener("click", () => {

    tabs.forEach(t => t.classList.remove("active"));
    tab.classList.add("active");

    const target = tab.getAttribute("data-tab");

    contents.forEach(c => {
      if (c.getAttribute("data-content") === target) {
        c.classList.remove("hidden");
      } else {
        c.classList.add("hidden");
      }
    });

  });
});
</script>


<!-- TESTIMONIAL -->
<!-- Swiper CSS -->

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

    <!-- Stats -->
    {{-- <div class="mb-10 grid sm:grid-cols-3 gap-4">
      <div class="bg-white/90 border border-white shadow-lg rounded-2xl px-6 py-4 text-center backdrop-blur">
        <p class="text-sm uppercase tracking-[0.3em] text-slate-400">Teams</p>
        <p class="mt-2 text-2xl font-semibold text-slate-900">40+</p>
        <p class="text-xs text-slate-500">Dedicated squads on standby</p>
      </div>
      <div class="bg-white/90 border border-white shadow-lg rounded-2xl px-6 py-4 text-center backdrop-blur">
        <p class="text-sm uppercase tracking-[0.3em] text-slate-400">Projects</p>
        <p class="mt-2 text-2xl font-semibold text-slate-900">200+</p>
        <p class="text-xs text-slate-500">Enterprise-grade rollouts</p>
      </div>
      <div class="bg-white/90 border border-white shadow-lg rounded-2xl px-6 py-4 text-center backdrop-blur">
        <p class="text-sm uppercase tracking-[0.3em] text-slate-400">Coverage</p>
        <p class="mt-2 text-2xl font-semibold text-slate-900">24/7</p>
        <p class="text-xs text-slate-500">Monitoring + support windows</p>
      </div>
    </div> --}}

    <!-- GRID -->
    <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-start">

      <!-- LEFT IMAGE -->
      <div class="order-1 lg:order-2 relative rounded-[32px] bg-gradient-to-br from-[#FFEDD5] via-white to-[#FEE2E2] p-6 shadow-[0_25px_60px_rgba(253,85,40,0.25)]">
        <div class="absolute inset-x-4 top-4 h-2 rounded-full bg-gradient-to-r from-[#FD5528]/60 to-orange-200/70 blur-3xl opacity-70"></div>
        <img 
          src="{{asset('assets/images/faq.png')}}"
          alt="FAQ Illustration"
          class="rounded-2xl shadow-2xl w-full h-[360px] object-cover relative z-10"
        >
      </div>

      <!-- FAQ LIST -->
      <div class="order-2 lg:order-1 space-y-4">

        @php
          $faqs = [
            ['title' => 'What services do you offer?', 'description' => 'Backend engineering, API design, cloud architecture, automation, and enterprise-grade solutions that keep scaling teams aligned.'],
            ['title' => 'Which technologies do you work with?', 'description' => '.NET Core, Node.js, Laravel, Go, SQL Server, PostgreSQL, Redis, Kafka, Azure, AWS, and modern DevOps pipelines.'],
            ['title' => 'Do you provide dedicated development teams?', 'description' => 'Yes, our specialists embed within your product organization with dedicated project leads and sprint reporting.'],
            ['title' => 'How do you ensure scalability and performance?', 'description' => 'We architect microservices, apply caching strategies, optimize storage, and add observability to catch regressions early.'],
            ['title' => 'What is your development process?', 'description' => 'We follow a structured agile cadence: discovery, roadmap, sprint-based delivery, QA, deployment, and post-launch retrospectives.'],
            ['title' => 'Do you provide post-launch support?', 'description' => 'Long-term maintenance, 24/7 monitoring, release planning, and scaling support are included in every retainer plan.'],
          ];
        @endphp

        @foreach ($faqs as $faq)
          <details class="group bg-white border border-gray-200 rounded-2xl p-5 shadow-sm open:shadow-md transition duration-300">
            <summary class="flex justify-between items-center cursor-pointer list-none">
              <span class="font-medium text-slate-900 text-base md:text-lg">
                {{ $faq['title'] }}
              </span>
              <span class="text-[#FD5528] text-2xl transition-transform duration-300 group-open:rotate-45">
                +
              </span>
            </summary>
            <p class="mt-3 text-sm text-slate-500 leading-relaxed">
              {{ $faq['description'] }}
            </p>
          </details>
        @endforeach

       

      </div>

    </div>

  </div>

  <div class="pointer-events-none absolute inset-0 opacity-50">
    <div class="absolute inset-y-0 left-0 w-1/2 bg-gradient-to-r from-[#FD5528]/5 to-transparent"></div>
    <div class="absolute inset-y-0 right-0 w-1/2 bg-gradient-to-l from-[#0F172A]/5 to-transparent"></div>
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
      <a href="#contact"
         class="group inline-flex items-center justify-center bg-white text-[#FC5124] px-6 py-3 rounded-xl font-semibold shadow-lg hover:shadow-2xl hover:scale-105 transition duration-300">

        Contact Us

        <!-- ARROW -->
        <span class="ml-2 transition group-hover:translate-x-1">→</span>
      </a>

      <!-- WHATSAPP BUTTON -->
      <a href="#contact"
         class="group inline-flex items-center justify-center border border-white/40 px-6 py-3 rounded-xl font-semibold backdrop-blur-md hover:bg-white/10 hover:scale-105 transition duration-300">

       
        Let's Chat on WhatsApp
      </a>

    </div>

  </div>

</section>
@endsection
