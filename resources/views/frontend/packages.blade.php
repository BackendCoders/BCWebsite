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




<section class="py-28 bg-gradient-to-br from-gray-50 via-white to-gray-100 relative overflow-hidden">

  <!-- BACKGROUND GLOW -->
  <div class="absolute top-[-100px] left-[-100px] w-[250px] h-[250px] bg-[#FD5528]/20 blur-[120px] rounded-full"></div>
  <div class="absolute bottom-[-100px] right-[-100px] w-[250px] h-[250px] bg-orange-300/20 blur-[120px] rounded-full"></div>

  <div class="max-w-7xl mx-auto px-6 text-center relative">

    <!-- HEADER -->
    <h2 class="text-3xl md:text-5xl font-bold">
      Our <span class="text-[#FD5528]">Pricing Plans</span>
    </h2>
    <p class="mt-4 text-gray-600 max-w-xl mx-auto">
      Choose the perfect service package tailored for your business growth.
    </p>

    <!-- TABS -->
    <div class="flex flex-wrap justify-center gap-3 mt-10">
      <button class="tab active px-5 py-2 rounded-full border border-[#FD5528] text-[#FD5528] transition hover:bg-[#FD5528] hover:text-white" data-tab="it">IT Services</button>
      <button class="tab px-5 py-2 rounded-full border border-[#FD5528] transition hover:bg-[#FD5528] hover:text-white" data-tab="seo">SEO</button>
      <button class="tab px-5 py-2 rounded-full border border-[#FD5528] transition hover:bg-[#FD5528] hover:text-white" data-tab="marketing">Digital Marketing</button>
      <button class="tab px-5 py-2 rounded-full border border-[#FD5528] transition hover:bg-[#FD5528] hover:text-white" data-tab="saas">CRM / SaaS</button>
      <button class="tab px-5 py-2 rounded-full border border-[#FD5528] transition hover:bg-[#FD5528] hover:text-white" data-tab="app">App Dev</button>
      <button class="tab px-5 py-2 rounded-full border border-[#FD5528] transition hover:bg-[#FD5528] hover:text-white" data-tab="design">Graphic Design</button>
    </div>

    <!-- CONTENT -->
    <div class="mt-16">

      <!-- IT SERVICES -->
        <!-- CARDS -->
    <div class="tab-content active mt-16 grid md:grid-cols-3 gap-8" data-content="it">

      <!-- BASIC PLAN -->
      <div class="border border-gray-700 rounded-3xl p-8 text-black">
        <h3 class="text-xl font-semibold mb-4">Basic Website Plan</h3>

        <h2 class="text-4xl font-bold mb-6">
          ₹ 7,999/- <span class="text-base font-normal">Monthly</span>
        </h2>

        <ul class="space-y-4 mb-8">
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Landing Page
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Mobile Freindly
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> 1 Year Free Domain / Hosting / SSL
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Social Media Integration
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Renewal Yearly
          </li>
        </ul>

        <button class="w-full  bg-gradient-to-r from-[#FD5528] to-[#fbb03b] hover:from-[#fbb03b] hover:to-[#FD5528] hover:scale-110 text-white py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>

      <!-- STANDARD PLAN (CENTER) -->
      <div class="bg-gradient-to-r from-[#FD5528] to-[#fbb03b] rounded-3xl p-10 text-white text-center scale-105 shadow-xl">
        <h3 class="text-xl font-semibold mb-4">Standard Digital Marketing Plan</h3>

        <h2 class="text-4xl font-bold mb-6">
          ₹ 15,999/- <span class="text-base font-normal">Monthly</span>
        </h2>

        <ul class="space-y-4 mb-8 text-left">
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> 1 Year Free Domain / Hosting
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> SSL Free
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> 15 Page site
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Free Support
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Social Media Integration
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Basic SEO Integration
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Mobile Freindly
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Renewal Yearly
          </li>
        </ul>

        <button class="bg-black hover:bg-[#FD5528] text-white px-6 py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>

      <!-- PREMIUM PLAN -->
      <div class="border border-gray-700 rounded-3xl p-8 text-black">
        <h3 class="text-xl font-semibold mb-4">Premium Digital Marketing Plan</h3>

        <h2 class="text-4xl font-bold mb-6">
          ₹ 24,999/- <span class="text-base font-normal">Monthly</span>
        </h2>

        <ul class="space-y-4 mb-8">
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Customize Website
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> 1 year Free Domain / Hosting / SSL
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span>Social Media / SEO Integration
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> 25 + Pages
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Renewal Yearly
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Free Support
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Mobile Freindly
          </li>
        </ul>

        <button class="w-full  bg-gradient-to-r from-[#FD5528] to-[#fbb03b] hover:from-[#fbb03b] hover:to-[#FD5528] hover:scale-110 text-white py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>


    </div>


      <!-- SEO -->
      <div class="tab-content hidden grid md:grid-cols-3 gap-8" data-content="marketing">
      

      <!-- BASIC PLAN -->
      <div class="border border-gray-600 rounded-3xl p-8 text-black relative">

        <h3 class="text-xl font-semibold mb-4">
          Basic Digital Marketing Plan
        </h3>

        <h2 class="text-4xl font-bold mb-6">
          ₹ 6,999/- <span class="text-base font-normal text-black">Monthly</span>
        </h2>

        <ul class="space-y-4 mb-8">
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> 1 Landing Page
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> 2 Smm Account Manage
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> 5 Graphical Post / 1 Reel
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Basic Lead Setup - Meta Ads Setup
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Basic SEO ( 5 Keywords )
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
          Standard Digital Marketing Plan
        </h3>

        <h2 class="text-5xl font-bold mb-6">
          ₹ 11,999/- <span class="text-base font-normal text-white">Monthly</span>
        </h2>

        <ul class="space-y-4 mb-8 text-left">
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> 5 Page Website
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> 4 Smm Account Manage
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> 8 Graphical Posts / 2 Reels
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Meta Ads Account Setup
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Basic SEO ( 10 Keywords )
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Monthly Performance Report
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> 2 Blog Post / Per Month
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-50">✔</span> Gmb
          </li>
        </ul>

        <button class="bg-black hover:bg-gradient-to-r hover:from-[#FD5528] hover:to-[#fbb03b] text-white px-6 py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>

      <!-- PREMIUM PLAN -->
      <div class="border border-gray-600 rounded-3xl p-8 text-black">

        <h3 class="text-xl font-semibold mb-4">
          Premium Digital Marketing Plan
        </h3>

        <h2 class="text-4xl font-bold mb-6">
          ₹ 15,999/- <span class="text-base font-normal text-gray-300">Monthly</span>
        </h2>

        <ul class="space-y-4 mb-8">
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> 7-10 Website Page
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Ads Account Management
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> 12 Graphical Post / 4 Reel
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Ads Account Setup ( Google, Meta )
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Basic SEO ( 15 Keywords )
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Monthly Performance Report
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> 4 Blog Post / Per Month
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> GMB
          </li>
        </ul>

        <button class="w-full bg-gradient-to-r from-[#FD5528] to-[#fbb03b] text-black py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>

 
      </div>

      <!-- MARKETING -->
      <div class="tab-content hidden grid md:grid-cols-3 gap-8" data-content="seo">

  
      <!-- SEO BASIC PLAN -->
      <div class="border border-gray-600 rounded-3xl p-8 text-black">

        <h3 class="text-xl font-semibold mb-4">
          SEO Basic Plan
        </h3>

        <h2 class="text-4xl font-bold mb-6">
          ₹ 7,999/- <span class="text-base font-normal text-gray-900">Monthly</span>
        </h2>

        <ul class="space-y-4 mb-8">
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> SEO ( 5 Main Keywords)
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> 25+ Backlinks
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Website & Competitor Analysis
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> On Page & Technical SEO
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Meta Data Creation
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Content Marketing
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Weekly & Monthly Reporting
          </li>
        </ul>

        <button class="w-full  bg-gradient-to-r from-[#FD5528] to-[#fbb03b] text-black py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>

      <!-- STANDARD SEO PLAN (CENTER) -->
      <div class=" bg-gradient-to-r from-[#FD5528] to-[#fbb03b] rounded-[30px] p-10 text-white text-center scale-105 shadow-2xl">

        <h3 class="text-xl font-semibold mb-4">
          Standard SEO Plan
        </h3>

        <h2 class="text-5xl font-bold mb-6">
          ₹ 11,999/- <span class="text-base font-normal text-gray-600">Monthly</span>
        </h2>

        <ul class="space-y-4 mb-8 text-left">
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-500">✔</span> SEO (10-15 Main Keywords )
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-500">✔</span> 50 + Backlinks
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-500">✔</span> 6 Blog Creation
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-500">✔</span> Website and Competitor Analysis
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-500">✔</span> On Page & Technical SEO
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-500">✔</span> Meta Data Creation
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-500">✔</span> Content Marketing
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-500">✔</span> Weekly & Monthly Reporting
          </li>
        </ul>

        <button class="bg-black  hover:bg-gradient-to-r hover:from-[#FD5528] hover:to-[#fbb03b] text-white px-6 py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>

      <!-- PREMIUM PLAN -->
      <div class="border border-gray-600 rounded-3xl p-8 text-black">

        <h3 class="text-xl font-semibold mb-4">
          Premium Digital Marketing Plan
        </h3>

        <h2 class="text-4xl font-bold mb-6">
          ₹ 15,999/- <span class="text-base font-normal text-gray-300">Monthly</span>
        </h2>

        <ul class="space-y-4 mb-8">
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> SEO ( 20-25 + Main Keywords )
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> 100 + Backlinks
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> 10 Blog
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Website and Competitor Analysis
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> On Page & Technical SEO
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Meta Data Creation
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Content Marketing
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Weekly & Monthly Reporting
          </li>
        </ul>

        <button class="w-full  bg-gradient-to-r from-[#FD5528] to-[#fbb03b] text-black py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>


      <div class="tab-content hidden grid md:grid-cols-3 gap-8" data-content="saas">

  
      <!-- BASIC PLAN -->
      <div class="border border-gray-600 rounded-3xl p-8 text-white">

        <h3 class="text-xl font-semibold mb-4">
          Basic Social Media Plan
        </h3>

        <h2 class="text-4xl font-bold mb-6">
          ₹ 4,999/- <span class="text-base font-normal text-gray-300">Monthly</span>
        </h2>

        <ul class="space-y-4 mb-8">
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> SMM Handling
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Page Creation - 2 Platform
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> 8 Graphical Posts/ 2 Reel
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Weekly Performance Report
          </li>
        </ul>

        <button class="w-full bg-gray-200 text-black py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>

      <!-- STANDARD PLAN (CENTER) -->
      <div class="bg-gray-200 rounded-[30px] p-10 text-black text-center scale-105 shadow-2xl">

        <h3 class="text-xl font-semibold mb-4">
          Standard Social Media Plan
        </h3>

        <h2 class="text-5xl font-bold mb-6">
          ₹ 7,999/- <span class="text-base font-normal text-gray-600">Monthly</span>
        </h2>

        <ul class="space-y-4 mb-8 text-left">
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-500">✔</span> SMM Handling
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-500">✔</span> Page Creation - 4 Platforms
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-500">✔</span> 12 Graphical Post - 4 Reels
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-500">✔</span> Performance Report
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-500">✔</span> Account Manager
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-500">✔</span> Ads account setup
          </li>
          <li class="flex items-center gap-3 border-b pb-3">
            <span class="text-orange-500">✔</span> Ads spend by your side
          </li>
        </ul>

        <button class="bg-black text-white px-6 py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>

      <!-- PREMIUM PLAN -->
      <div class="border border-gray-600 rounded-3xl p-8 text-white">

        <h3 class="text-xl font-semibold mb-4">
          Premium Social Media Plan
        </h3>

        <h2 class="text-4xl font-bold mb-6">
          ₹ 13,999/- <span class="text-base font-normal text-gray-300">Monthly</span>
        </h2>

        <ul class="space-y-4 mb-8">
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> All Platform Handling
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> 16 Graphical Post - 6 Reels
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Performance Report
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Account Manager
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Ads Setup all types
          </li>
          <li class="flex items-center gap-3 border-b border-orange-500 pb-3">
            <span class="text-orange-500">✔</span> Ads spend by your side
          </li>
        </ul>

        <button class="w-full bg-gray-200 text-black py-3 rounded-full font-medium">
          Choose Plan
        </button>
      </div>

    </div>
      </div>

    </div>

  </div>

</section>

<script>
const tabs = document.querySelectorAll(".tab");
const contents = document.querySelectorAll(".tab-content");

tabs.forEach(tab => {
  tab.addEventListener("click", () => {

    tabs.forEach(t => t.classList.remove("bg-[#FD5528]","text-white"));
    tab.classList.add("bg-[#FD5528]","text-white");

    const target = tab.dataset.tab;

    contents.forEach(c => {
      c.classList.add("hidden");
      if (c.dataset.content === target) {
        c.classList.remove("hidden");
      }
    });

  });
});
</script>

<!-- TESTIMONIAL -->
<!-- Swiper CSS -->



{{-- faq --}}
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



<!-- CTA -->
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
