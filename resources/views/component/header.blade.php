

@php
    $activeNavClass = fn ($route) => request()->routeIs($route) ? 'text-[#FD5528]' : '';
    $activeMobileNavClass = fn ($route) => request()->routeIs($route) ? 'text-[#FD5528]' : '';
@endphp

   <header class="sticky top-0 z-40 border-b border-gray-200 bg-black/95 backdrop-blur">
    
    <div class="max-w-7xl mx-auto flex h-16 items-center justify-between px-6">

    <!-- logo -->
        <a href="#hero" class="flex items-center gap-3">
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
            <a href="{{ route('frontend.contact') }}"
               class="rounded-lg bg-[#FD5528] px-5 py-2 text-sm font-semibold text-white shadow-md transition hover:bg-orange-600">
                Initialize 
            </a>
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
