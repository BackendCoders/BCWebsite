

@php
    $activeNavClass = fn ($route) => request()->routeIs($route) ? 'bg-white text-[#FD5528]' : 'text-white';
    $activeMobileNavClass = fn ($route) => request()->routeIs($route) ? 'bg-[#FD5528] text-white' : 'text-black';
@endphp

<!-- topbar -->



<!-- TOP BAR -->
<div class="bg-[#FD5528] text-white text-sm hidden md:block lg:block">
  
  <div class="max-w-9xl mx-auto px-4 sm:px-6 py-3 
              flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

    <!-- LEFT: CONTACT INFO -->
    <div class="w-full flex flex-col sm:flex-row items-center sm:items-start 
                gap-3 sm:gap-6 text-xs sm:text-sm text-center sm:text-left">

      <!-- PHONE -->
      <a href="tel:+91 9140092133" 
         class="flex items-center justify-center sm:justify-start gap-2 transition">

        <div class="w-7 h-7 flex items-center justify-center rounded-full 
        bg-gradient-to-r from-[#f1e9e9] to-[#f5f1f1] 
        hover:scale-110 transition-all duration-300">
          <img src="https://img.icons8.com/?size=100&id=9730&format=png&color=fd5528" 
               class="w-4 h-4">
        </div>

        <span>+91 9140092133</span>
      </a>

      <!-- EMAIL -->
      <a href="mailto:info@backendcodersindia.com" 
         class="flex items-center justify-center sm:justify-start gap-2 transition">

        <div class="w-7 h-7 flex items-center justify-center rounded-full 
        bg-gradient-to-r from-[#f1e9e9] to-[#f5f1f1]  hover:scale-110 transition-all duration-300">
          <img src="https://img.icons8.com/?size=100&id=2848&format=png&color=fd5528" 
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
       bg-gradient-to-r from-[#f1e9e9] to-[#f5f1f1]
         hover:scale-110 transition-all duration-300">
        <img src="https://img.icons8.com/?size=100&id=106163&format=png&color=fd5528" 
             class="w-4 h-4">
      </a>

      <a href="https://www.instagram.com/backendcoders/" target="_blank"
         class="w-8 h-8 flex items-center justify-center rounded-full 
       bg-gradient-to-r from-[#f1e9e9] to-[#f5f1f1]
         hover:scale-110 transition-all duration-300">
        <img src="https://img.icons8.com/?size=100&id=32309&format=png&color=fd5528" 
             class="w-4 h-4">
      </a>

      <a href="https://www.linkedin.com/company/103738896/admin/dashboard/" target="_blank"
         class="w-8 h-8 flex items-center justify-center rounded-full 
       bg-gradient-to-r from-[#f1e9e9] to-[#f5f1f1]
         hover:scale-110 transition-all duration-300">
        <img src="https://img.icons8.com/?size=100&id=34349&format=png&color=fd5528" 
             class="w-4 h-4">
      </a>

      <a href="https://wa.me/919140092133" target="_blank"
         class="w-8 h-8 flex items-center justify-center rounded-full 
       bg-gradient-to-r from-[#f1e9e9] to-[#f5f1f1]
         hover:scale-110 transition-all duration-300">
        <img src="https://img.icons8.com/?size=100&id=16733&format=png&color=fd5528" 
             class="w-4 h-4">
      </a>

    </div>

  </div>
</div>




<!-- navbar -->
   <header class="sticky top-0 z-40 border-b border-gray-200 bg-black/95 backdrop-blur">
    
    <div class="max-w-9xl mx-auto flex h-16 items-center justify-between px-6">

    <!-- logo -->
        <a href="{{ route('frontend.index') }}" class="flex items-center gap-3">
             <img src="{{ asset('assets/images/bc_bg.png') }}" class="h-10 w-auto" />
        </a>

        <!-- Desktop Menu -->
        <nav class="hidden lg:flex items-center gap-2 text-sm font-medium">

            <a href="{{ route('frontend.index') }}"
               class="nav-link px-3 py-2 rounded-md hover:bg-orange-50 hover:text-[#FD5528] transition {{ $activeNavClass('frontend.index') }}"
               aria-current="{{ request()->routeIs('frontend.index') ? 'page' : '' }}">
                Overview
            </a>

            <a href="{{ route('frontend.about') }}"
               class="nav-link px-3 py-2 rounded-md hover:bg-orange-50 hover:text-[#FD5528] transition {{ $activeNavClass('frontend.about') }}"
               aria-current="{{ request()->routeIs('frontend.about') ? 'page' : '' }}">
                Company
            </a>

            <div class="relative isolate">

                <button id="mega-menu-toggle"
                    type="button"
                    class="nav-link flex items-center gap-1 px-3 py-2 rounded-md hover:bg-orange-50 hover:text-[#FD5528] transition {{ $activeNavClass('frontend.service') }}"
                    aria-expanded="false" aria-controls="mega-menu-panel">
                    Solutions
                    <svg class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div id="mega-menu-panel"
                    class="hidden absolute left-0 top-full z-40 mt-3 max-h-[70vh] w-[min(100vw-2rem,850px)] overflow-visible rounded-2xl bg-white p-6 shadow-2xl ring-1 ring-black/10 transition duration-200 origin-top-left"
                    role="menu" aria-hidden="true">

                @php
                    $digitalMarketingItems = $menuItems->filter(fn($item) => strtolower(trim($item->type)) === 'digital marketing');
                    $softwareDevelopmentItems = $menuItems->filter(fn($item) => strtolower(trim($item->type)) === 'software development');
                @endphp

                <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:items-start">

                        <div class="left flex flex-col items-start space-y-3 min-w-0">
                            <p class="text-xs font-semibold uppercase tracking-wider text-[#FD5528]">Digital Marketing</p>
                           <!-- DIGITAL MARKETING -->
                                <ul class="flex w-full flex-col gap-2 text-sm text-slate-700">
                                    @foreach($digitalMarketingItems as $item)
                                        <li class="w-full rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">

                                    @if($item->page)
                                        <a href="{{ route('frontend.page', $item->page->slug) }}" class="block w-full">
                                            {{ $item->title }}
                                        </a>
                                    @endif

                                        </li>
                                    @endforeach
                                </ul>
                           <!-- <ul class="space-y-2 text-sm text-slate-700">
                                <li><a href="{{ route('frontend.social_media') }}" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">Social Media Management</a></li>
                                <li><a href="{{ route('frontend.seo') }}" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">SEO Services</a></li>
                                <li><a href="{{ route('frontend.ads') }}" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">PPC Ads / Google Ads</a></li>
                                <li><a href="{{ route('frontend.meta_ads') }}" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">Meta Ads</a></li>
                                <li><a href="{{ route('frontend.content_marketing') }}" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">Content Marketing</a></li>
                                <li><a href="{{ route('frontend.local_seo') }}" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">Local SEO</a></li>
                            </ul>  -->
  
                        </div>

                        <div class="right flex flex-col items-start space-y-3 min-w-0">
                                            <p class="text-xs font-semibold uppercase tracking-wider text-[#FD5528]">
                            Software Development
                        </p>

                <ul class="mt-3 flex w-full flex-col gap-4 text-sm text-slate-700">
                                    @foreach($softwareDevelopmentItems as $item)
                                        <li class="w-full rounded-lg px-3 py-2 hover:bg-orange-50 transition">
                                            @if($item->page)
                                                <a href="{{ route('frontend.page', $item->page->slug) }}"
                                                class="block w-full hover:text-[#FD5528]">
                                                    {{ $item->title }}
                                                </a>
                                            @else
                                                <span class="block w-full font-medium text-slate-800">
                                                    {{ $item->title }}
                                                </span>
                                            @endif

                                            @if($item->children->isNotEmpty())
                                                <ul class="mt-3 flex w-full flex-col gap-2 border-l border-slate-200 pl-4 text-sm text-slate-600">
                                                    @foreach($item->children as $child)
                                                        <li class="w-full">
                                                            @if($child->page)
                                                                <a href="{{ route('frontend.page', $child->page->slug) }}"
                                                                   class="block w-full rounded-md px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">
                                                                    {{ $child->title }}
                                                                </a>
                                                            @else
                                                                <span class="block w-full rounded-md px-3 py-2">
                                                                    {{ $child->title }}
                                                                </span>
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                        </ul>
                                                    <!-- <ul class="space-y-2 text-sm text-slate-700">
                                                        <li><a href="/custom-web-application-development" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">Custom Web Applications</a></li>
                                                        <li><a href="/website-design-development" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">Website Design & Development</a></li>
                                                        <li><a href="/saas-development" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">SaaS Development</a></li>
                                                        <li><a href="/erp-pos-software-development" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">ERP & POS Software</a></li>
                                                        <li><a href="/ecommerce-development" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">Ecommerce Development</a></li>
                                                        <li><a href="/mobile-app-development" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">Mobile App Development</a></li>
                                                        <li><a href="/api-development" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">API Development</a></li>
                                                        <li><a href="/startup-mvp-development" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">Startup MVP Development</a></li>
                                                    </ul>  -->
                        </div>

                    </div>
                </div>
        





            </div>

            <a href="{{ route('frontend.project') }}"
               class="nav-link px-3 py-2 rounded-md hover:bg-orange-50 hover:text-[#FD5528] transition {{ $activeNavClass('frontend.project') }}"
               aria-current="{{ request()->routeIs('frontend.project') ? 'page' : '' }}">
                Architecture
            </a>

            <a href="{{ route('frontend.process') }}"
               class="nav-link px-3 py-2 rounded-md hover:bg-orange-50 hover:text-[#FD5528] transition {{ $activeNavClass('frontend.process') }}"
               aria-current="{{ request()->routeIs('frontend.process') ? 'page' : '' }}">
                Case Studies
            </a>

              <a href="{{ route('frontend.blog') }}"
               class="nav-link px-3 py-2 rounded-md hover:bg-orange-50 hover:text-[#FD5528] transition {{ $activeNavClass('frontend.blog') }}"
               aria-current="{{ request()->routeIs('frontend.blog') ? 'page' : '' }}">
                BLog
            </a>

            <a href="{{route('frontend.packages')}}"
               class="nav-link px-3 py-2 rounded-md hover:bg-orange-50 hover:text-[#FD5528] transition {{ $activeNavClass('frontend.packages') }}"
               aria-current="{{ request()->routeIs('frontend.packages') ? 'page' : '' }}">
                Packages
            </a>

            <a href="{{ route('frontend.career') }}"
               class="nav-link px-3 py-2 rounded-md hover:bg-orange-50 hover:text-[#FD5528] transition {{ $activeNavClass('frontend.career') }}"
               aria-current="{{ request()->routeIs('frontend.career') ? 'page' : '' }}">
                Insights
            </a>

            <a href="{{ route('frontend.contact') }}"
               class="nav-link px-3 py-2 rounded-md hover:bg-orange-50 hover:text-[#FD5528] transition {{ $activeNavClass('frontend.contact') }}"
               aria-current="{{ request()->routeIs('frontend.contact') ? 'page' : '' }}">
                Ping Us
            </a>

        </nav>

        <!-- CTA Button -->
        <div class="hidden lg:flex">
              <button type="submit"
            class="w-full bg-gradient-to-r from-[#FD5528] to-[#fbb03b] hover:from-[#fbb03b] hover:to-[#FD5528] hover:scale-110 transition-all text-white px-5 py-2 rounded-2xl font-semibold transition duration-200 ">
               <a href="tel:+91 9140092133">Initialize </a>
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
               class="nav-link rounded-md px-3 py-2 hover:bg-orange-50 {{ $activeMobileNavClass('frontend.index') }}"
               aria-current="{{ request()->routeIs('frontend.index') ? 'page' : '' }}">
                Overview
            </a>
            <a href="{{ route('frontend.about') }}"
               class="nav-link rounded-md px-3 py-2 hover:bg-orange-50 {{ $activeMobileNavClass('frontend.about') }}"
               aria-current="{{ request()->routeIs('frontend.about') ? 'page' : '' }}">
                Company
            </a>
            <!-- <a href="{{ route('frontend.service') }}"
               class="nav-link rounded-md px-3 py-2 hover:bg-orange-50 {{ $activeMobileNavClass('frontend.service') }}"
               aria-current="{{ request()->routeIs('frontend.service') ? 'page' : '' }}">
                Solutions
            </a> -->
        <div class="w-full">

            <button type="button" id="mobile-solution-btn"
                class="w-full flex justify-between items-center px-3 py-2 rounded-md hover:bg-orange-50 transition">
                <span>Solutions</span>
                <span id="mobile-arrow" class="transition-transform" aria-hidden="true">
                   <svg class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </span>
            </button>

            <div id="mobile-service-menu" class="hidden mt-4 space-y-4 max-h-[60vh] overflow-y-auto pr-1">
                <div class="rounded-2xl border border-[#FD5528]/30 bg-white/90 p-4 shadow-sm">
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-semibold text-slate-800">Digital Marketing</p>
                        <span class="text-xs text-[#FD5528]">6 services</span>
                    </div>
                    <div class="grid gap-2 text-sm text-slate-700">
                        <a href="{{ route('frontend.social_media') }}" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">Social Media Management</a>
                        <a href="{{ route('frontend.seo') }}" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">SEO Services</a>
                        <a href="/google-ads-ppc-services" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">PPC Ads / Google Ads</a>
                        <a href="/meta-ads-services" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">Meta Ads</a>
                        <a href="/content-marketing-services" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">Content Marketing</a>
                        <a href="/local-seo-services" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">Local SEO</a>
                    </div>
                </div>

                <div class="rounded-2xl border border-[#FD5528]/30 bg-white/90 p-4 shadow-sm">
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-semibold text-slate-800">Software Development</p>
                        <span class="text-xs text-[#FD5528]">8 services</span>
                    </div>
                    <div class="grid gap-2 text-sm text-slate-700">
                        <a href="/custom-web-application-development" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">Custom Web Applications</a>
                        <a href="/website-design-development" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">Website Design & Development</a>
                        <a href="/saas-development" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">SaaS Development</a>
                        <a href="/erp-pos-software-development" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">ERP & POS Software</a>
                        <a href="/ecommerce-development" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">Ecommerce Development</a>
                        <a href="/mobile-app-development" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">Mobile App Development</a>
                        <a href="/api-development" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">API Development</a>
                        <a href="/startup-mvp-development" class="block rounded-lg px-3 py-2 hover:bg-orange-50 hover:text-[#FD5528] transition">Startup MVP Development</a>
                    </div>
                </div>
            </div>
        </div>
            <a href="{{ route('frontend.project') }}"
               class="nav-link rounded-md px-3 py-2 hover:bg-orange-50 {{ $activeMobileNavClass('frontend.project') }}"
               aria-current="{{ request()->routeIs('frontend.project') ? 'page' : '' }}">
                Architecture
            </a>
            <a href="{{ route('frontend.process') }}"
               class="nav-link rounded-md px-3 py-2 hover:bg-orange-50 {{ $activeMobileNavClass('frontend.process') }}"
               aria-current="{{ request()->routeIs('frontend.process') ? 'page' : '' }}">
                Case Studies
            </a>
              <a href="{{ route('frontend.blog') }}"
                class="nav-link rounded-md px-3 py-2 hover:bg-orange-50 {{ $activeMobileNavClass('frontend.blog') }}"
                aria-current="{{ request()->routeIs('frontend.blog') ? 'page' : '' }}">
                  BLog
              </a>
            <a href="{{ route('frontend.packages') }}"
               class="nav-link rounded-md px-3 py-2 hover:bg-orange-50 {{ $activeMobileNavClass('frontend.packages') }}"
               aria-current="{{ request()->routeIs('frontend.packages') ? 'page' : '' }}">
                Packages
            </a>
            <a href="{{ route('frontend.career') }}"
               class="nav-link rounded-md px-3 py-2 hover:bg-orange-50 {{ $activeMobileNavClass('frontend.career') }}"
               aria-current="{{ request()->routeIs('frontend.career') ? 'page' : '' }}">
                Insights
            </a>
            <a href="{{ route('frontend.contact') }}"
               class="nav-link rounded-md px-3 py-2 hover:bg-orange-50 {{ $activeMobileNavClass('frontend.contact') }}"
               aria-current="{{ request()->routeIs('frontend.contact') ? 'page' : '' }}">
                Ping us
            </a>
         <!-- CTA Button -->
        <div class=" lg:hidden md:hidden block:flex py-2">
            <a href="tel:+91 9140092133"
               class=" bg-[#FD5528] px-4 py-2 text-xs text-white hover:bg-orange-600">
                Initialize 
            </a>
        </div>

        </div>
       
    </div>

</header>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const mobileMenuToggle = document.getElementById("mobile-menu-toggle");
        const menu = document.getElementById("mobile-menu");

        mobileMenuToggle?.addEventListener("click", () => {
            menu?.classList.toggle("hidden");
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const megaToggle = document.getElementById("mega-menu-toggle");
        const megaPanel = document.getElementById("mega-menu-panel");
        const megaArrow = megaToggle?.querySelector("svg");

        const closeMega = () => {
            if (!megaPanel?.classList.contains("hidden")) {
                megaPanel?.classList.add("hidden");
                megaToggle?.setAttribute("aria-expanded", "false");
                megaToggle?.classList.remove("bg-white");
                megaArrow?.classList.remove("rotate-180");
                megaPanel?.setAttribute("aria-hidden", "true");
            }
        };

        megaToggle?.addEventListener("click", function (e) {
            e.preventDefault();
            megaPanel?.classList.toggle("hidden");
            const isOpen = !megaPanel?.classList.contains("hidden");
            megaToggle.setAttribute("aria-expanded", String(Boolean(isOpen)));
            megaPanel?.setAttribute("aria-hidden", String(!isOpen));
            megaArrow?.classList.toggle("rotate-180");
        });

        document.addEventListener("click", function (e) {
            if (megaPanel?.contains(e.target) || megaToggle?.contains(e.target)) {
                return;
            }
            closeMega();
        });

        window.addEventListener("resize", closeMega);
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const btn = document.getElementById("mobile-solution-btn");
        const menu = document.getElementById("mobile-service-menu");
        const arrow = document.getElementById("mobile-arrow");

        if (btn && menu) {
            btn.addEventListener("click", function (e) {
                e.stopPropagation(); // prevents parent conflicts

                menu.classList.toggle("hidden");
                arrow?.classList.toggle("rotate-180");
            });

            document.addEventListener("click", function (e) {
                if (!menu.contains(e.target) && e.target !== btn && !btn.contains(e.target)) {
                    if (!menu.classList.contains("hidden")) {
                        menu.classList.add("hidden");
                        arrow?.classList.remove("rotate-180");
                    }
                }
            });
        }
    });
</script>
