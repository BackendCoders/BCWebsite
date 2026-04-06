

@php
    $activeNavClass = fn ($route) => request()->routeIs($route) ? 'text-[#FD5528]' : '';
    $activeMobileNavClass = fn ($route) => request()->routeIs($route) ? 'text-[#FD5528]' : '';
@endphp

<!-- topbar -->



<!-- TOP BAR -->
<div class="bg-[#FD5528] text-white text-sm hidden md:block lg:block">
   <!-- <div class="max-w-9xl lg:mx-24 mx-auto px-4 sm:px-6 py-2 flex items-center justify-center gap-2">
      <span>We are hiring! </span>
      <a href="{{ route('frontend.career') }}" class="underline font-medium hover:text-white/80 transition">Explore Careers</a>
   </div> -->
  <div class="max-w-9xl lg:mx-24 mx-auto px-4 sm:px-6 py-3 
              flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

    <!-- LEFT: CONTACT INFO -->
    <div class="w-full flex flex-col sm:flex-row items-center sm:items-start 
                gap-3 sm:gap-6 text-xs sm:text-sm text-center sm:text-left">

      <!-- PHONE -->
      <a href="tel:+919140092133" 
         class="flex items-center justify-center sm:justify-start gap-2 hover:text-black transition">

        <div class="w-7 h-7 flex items-center justify-center rounded-full 
        bg-gradient-to-r from-[#060000] to-[#b00000] 
        hover:from-[#b00000] hover:to-[#060000] hover:scale-110 transition-all duration-300">
          <img src="https://img.icons8.com/?size=100&id=9659&format=png&color=ffffff" 
               class="w-4 h-4">
        </div>

        <span>+91 914 0092 133</span>
      </a>

      <!-- EMAIL -->
      <a href="mailto:info@backendcodersindia.com" 
         class="flex items-center justify-center sm:justify-start gap-2 hover:text-black transition">

        <div class="w-7 h-7 flex items-center justify-center rounded-full 
         bg-gradient-to-r from-[#060000] to-[#b00000] 
        hover:from-[#b00000] hover:to-[#060000] hover:scale-110 transition-all duration-300">
          <img src="https://img.icons8.com/?size=100&id=53388&format=png&color=ffffff" 
               class="w-4 h-4">
        </div>

        <span class="break-all sm:break-normal">
          info@backendcodersindia.com
        </span>
      </a>

    </div>

    <!-- RIGHT: SOCIAL ICONS -->
    <div class="flex items-center justify-center gap-3">

      <a href="https://www.facebook.com/backendcoders/" target="_blank"
         class="w-8 h-8 flex items-center justify-center rounded-full 
        bg-gradient-to-r from-[#060000] to-[#b00000] 
        hover:from-[#b00000] hover:to-[#060000]
         hover:scale-110 transition-all duration-300">
        <img src="https://img.icons8.com/?size=100&id=118468&format=png&color=ffffff" 
             class="w-4 h-4">
      </a>

      <a href="https://www.instagram.com/backendcoders" target="_blank"
         class="w-8 h-8 flex items-center justify-center rounded-full 
        bg-gradient-to-r from-[#060000] to-[#b00000] 
        hover:from-[#b00000] hover:to-[#060000]
         hover:scale-110 transition-all duration-300">
        <img src="https://img.icons8.com/?size=100&id=32292&format=png&color=ffffff" 
             class="w-4 h-4">
      </a>

      <a href="https://www.linkedin.com/company/backendcodersindia/" target="_blank"
         class="w-8 h-8 flex items-center justify-center rounded-full 
        bg-gradient-to-r from-[#060000] to-[#b00000] 
        hover:from-[#b00000] hover:to-[#060000]
         hover:scale-110 transition-all duration-300">
        <img src="https://img.icons8.com/?size=100&id=447&format=png&color=ffffff" 
             class="w-4 h-4">
      </a>

      <a href="https://wa.me/919140092133" target="_blank"
         class="w-8 h-8 flex items-center justify-center rounded-full 
        bg-gradient-to-r from-[#060000] to-[#b00000] 
        hover:from-[#b00000] hover:to-[#060000]
         hover:scale-110 transition-all duration-300">
        <img src="https://img.icons8.com/?size=100&id=16712&format=png&color=ffffff" 
             class="w-4 h-4">
      </a>

    </div>

  </div>
</div>




<!-- navbar -->
   <header class="sticky top-0 z-40 border-b border-gray-200 bg-black/95 backdrop-blur">
    
    <div class="max-w-9xl lg:mx-24 mx-auto flex h-16 items-center justify-between px-6">

    <!-- logo -->
        <a href="{{ route('frontend.index') }}" class="flex items-center gap-3">
             <img src="{{ asset('assets/images/bc_bg.png') }}" class="h-10 w-auto" />
        </a>

        <!-- Desktop Menu -->
        <nav class="hidden lg:flex items-center gap-2 text-sm font-medium">

            <a href="{{ route('frontend.index') }}"
               class="nav-link px-3 py-2 rounded-md text-white hover:bg-orange-500 hover:text-[#FD5528] transition {{ $activeNavClass('frontend.index') }}"
               aria-current="{{ request()->routeIs('frontend.index') ? 'page' : '' }}">
                Overview
            </a>

            <a href="{{ route('frontend.about') }}"
               class="nav-link px-3 py-2 rounded-md text-white hover:bg-orange-50 hover:text-[#FD5528] transition {{ $activeNavClass('frontend.about') }}"
               aria-current="{{ request()->routeIs('frontend.about') ? 'page' : '' }}">
                Company
            </a>

            <a href="{{ route('frontend.service') }}"
               class="nav-link px-3 py-2 rounded-md text-white hover:bg-orange-50 hover:text-[#FD5528] transition {{ $activeNavClass('frontend.service') }}"
               aria-current="{{ request()->routeIs('frontend.service') ? 'page' : '' }}">
                Solutions
            </a>

            <a href="{{ route('frontend.project') }}"
               class="nav-link px-3 py-2 rounded-md text-white hover:bg-orange-50 hover:text-[#FD5528] transition {{ $activeNavClass('frontend.project') }}"
               aria-current="{{ request()->routeIs('frontend.project') ? 'page' : '' }}">
                Architecture
            </a>

            <a href="{{ route('frontend.process') }}"
               class="nav-link px-3 py-2 rounded-md text-white hover:bg-orange-50 hover:text-[#FD5528] transition {{ $activeNavClass('frontend.process') }}"
               aria-current="{{ request()->routeIs('frontend.process') ? 'page' : '' }}">
                Case Studies
            </a>

            <a href="{{route('frontend.techstack')}}"
               class="nav-link px-3 py-2 rounded-md text-white hover:bg-orange-50 hover:text-[#FD5528] transition {{ $activeNavClass('frontend.techstack') }}"
               aria-current="{{ request()->routeIs('frontend.techstack') ? 'page' : '' }}">
                Tech Stack
            </a>

            <a href="{{ route('frontend.career') }}"
               class="nav-link px-3 py-2 rounded-md text-white hover:bg-orange-50 hover:text-[#FD5528] transition {{ $activeNavClass('frontend.career') }}"
               aria-current="{{ request()->routeIs('frontend.career') ? 'page' : '' }}">
                Insights
            </a>

            <a href="{{ route('frontend.contact') }}"
               class="nav-link px-3 py-2 rounded-md text-white hover:bg-orange-50 hover:text-[#FD5528] transition {{ $activeNavClass('frontend.contact') }}"
               aria-current="{{ request()->routeIs('frontend.contact') ? 'page' : '' }}">
                Ping Us
            </a>

        </nav>

        <!-- CTA Button -->
        <div class="hidden lg:flex">
              <button type="submit"
            class="w-full bg-gradient-to-r from-[#FD5528] to-[#fbb03b] hover:from-[#fbb03b] hover:to-[#FD5528] hover:scale-110 transition-all text-white px-5 py-2 rounded-2xl font-semibold transition duration-200 ">
               <Initialize href="{{ route('frontend.contact') }}">Initialize </a>
          </button>
            <!-- <a href="{{ route('frontend.contact') }}"
               class="rounded-lg bg-[#FD5528] px-5 py-2 text-sm font-semibold text-white shadow-md transition hover:bg-orange-600">
                Initialize 
            </a> -->
        </div>

        <!-- Mobile Button -->
        <button id="mobile-menu-toggle"
            class="lg:hidden rounded-md border border-gray-300 p-2 text-white hover:bg-black transition">
            ☰
        </button>

    </div>


    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden border-t border-gray-200 bg-white lg:hidden">

        <div class="flex flex-col gap-1 px-6 py-4 text-sm">

            <a href="{{ route('frontend.index') }}"
               class="nav-link rounded-md px-3 py-2 text-black hover:bg-orange-50 {{ $activeMobileNavClass('frontend.index') }}"
               aria-current="{{ request()->routeIs('frontend.index') ? 'page' : '' }}">
                Overview
            </a>
            <a href="{{ route('frontend.about') }}"
               class="nav-link rounded-md px-3 py-2 text-black hover:bg-orange-50 {{ $activeMobileNavClass('frontend.about') }}"
               aria-current="{{ request()->routeIs('frontend.about') ? 'page' : '' }}">
                Company
            </a>
            <a href="{{ route('frontend.service') }}"
               class="nav-link rounded-md px-3 py-2 text-black hover:bg-orange-50 {{ $activeMobileNavClass('frontend.service') }}"
               aria-current="{{ request()->routeIs('frontend.service') ? 'page' : '' }}">
                Solutions
            </a>
            <a href="{{ route('frontend.project') }}"
               class="nav-link rounded-md px-3 py-2 text-black hover:bg-orange-50 {{ $activeMobileNavClass('frontend.project') }}"
               aria-current="{{ request()->routeIs('frontend.project') ? 'page' : '' }}">
                Architecture
            </a>
            <a href="{{ route('frontend.process') }}"
               class="nav-link rounded-md px-3 py-2 text-black hover:bg-orange-50 {{ $activeMobileNavClass('frontend.process') }}"
               aria-current="{{ request()->routeIs('frontend.process') ? 'page' : '' }}">
                Case Studies
            </a>
            <a href="{{ route('frontend.techstack') }}"
               class="nav-link rounded-md px-3 py-2 text-black hover:bg-orange-50 {{ $activeMobileNavClass('frontend.techstack') }}"
               aria-current="{{ request()->routeIs('frontend.techstack') ? 'page' : '' }}">
                Tech Stack
            </a>
            <a href="{{ route('frontend.career') }}"
               class="nav-link rounded-md px-3 py-2 text-black hover:bg-orange-50 {{ $activeMobileNavClass('frontend.career') }}"
               aria-current="{{ request()->routeIs('frontend.career') ? 'page' : '' }}">
                Insights
            </a>
            <a href="{{ route('frontend.contact') }}"
               class="nav-link rounded-md px-3 py-2 text-black hover:bg-orange-50 {{ $activeMobileNavClass('frontend.contact') }}"
               aria-current="{{ request()->routeIs('frontend.contact') ? 'page' : '' }}">
                Ping us
            </a>
         <!-- CTA Button -->
        <div class=" lg:hidden md:hidden block:flex py-2">
            <a href="{{ route('frontend.contact') }}"
               class=" bg-[#FD5528] px-4 py-2 text-xs text-white hover:bg-orange-600">
                Initialize 
            </a>
        </div>

        </div>
       
    </div>

</header>

<script>
    // header

document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.getElementById("mobile-menu-toggle");
  const menu = document.getElementById("mobile-menu");

  toggle.addEventListener("click", () => {
    menu.classList.toggle("hidden");
  });
});
</script>














