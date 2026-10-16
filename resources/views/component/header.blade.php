@php
    $activeNavClass = fn ($route) => request()->routeIs($route) ? 'bg-white text-[#FD5528]' : 'text-white';
    $activeMobileNavClass = fn ($route) => request()->routeIs($route) ? 'bg-[#FD5528] text-white' : 'text-white';

    $digitalMenuItems = $menuItems->filter(fn ($item) =>
        \App\Models\MenuItem::normalizeType($item->type) === \App\Models\MenuItem::TYPE_DIGITAL
    );

    $softwareMenuItems = $menuItems->filter(fn ($item) =>
        \App\Models\MenuItem::normalizeType($item->type) === \App\Models\MenuItem::TYPE_SOFTWARE
    );
@endphp

<!-- TOP BAR -->
<div class="hidden bg-[#FD5528] text-sm text-white md:block lg:block">
    <div class="mx-auto flex max-w-9xl flex-col gap-4 px-4 py-3 sm:flex-row sm:items-center sm:justify-between sm:px-6">
        <div class="flex w-full flex-col items-center gap-3 text-center text-xs sm:flex-row sm:items-start sm:gap-6 sm:text-left sm:text-sm">
            <a href="tel:+91 9140092133" class="flex items-center justify-center gap-2 transition sm:justify-start">
                <div class="flex h-7 w-7 items-center justify-center rounded-full bg-gradient-to-r from-[#f1e9e9] to-[#f5f1f1] transition-all duration-300 hover:scale-110">
                    <img src="{{ asset('assets/icons/call.png') }}" alt="Phone" class="h-4 w-4" aria-hidden="true">
                </div>
                <span>+91 9140092133</span>
            </a>

            <a href="mailto:info@backendcodersindia.com"
               id="email-link"
               aria-label="Email info@backendcodersindia.com"
               class="flex items-center justify-center gap-2 transition hover:text-white/90 sm:justify-start">
                <div class="flex h-7 w-7 items-center justify-center rounded-full bg-gradient-to-r from-[#f1e9e9] to-[#f5f1f1] transition-all duration-300 hover:scale-110">
                    <img src="{{ asset('assets/icons/mail.png') }}" alt="Email" class="h-4 w-4" aria-hidden="true">
                </div>

                <span id="email" class="select-text font-medium cursor-pointer">info@backendcodersindia.com</span>
            </a>
        </div>

        <div class="flex items-center justify-center gap-3">
            <!-- <a href="https://www.facebook.com/backendcoders/" target="_blank" rel="noreferrer"
               class="flex h-8 w-8 items-center justify-center rounded-full bg-gradient-to-r from-[#f1e9e9] to-[#f5f1f1] transition-all duration-300 hover:scale-110">
                <img src="{{ asset('assets/icons/facebook.png') }}" alt="Facebook" class="h-4 w-4" aria-hidden="true">
            </a> -->
            <a href="https://www.facebook.com/backendcoders/"
                target="_blank"
                rel="noreferrer"
                aria-label="Facebook"
                class="flex h-8 w-8 items-center justify-center rounded-full bg-gradient-to-r from-[#f1e9e9] to-[#f5f1f1] transition-all duration-300 hover:scale-110">

                <img src="{{ asset('assets/icons/facebook.png') }}"
                alt="Backend Coders India Facebook"
                class="h-4 w-4">

                <span class="text-sm font-medium text-gray-700 hidden">
                    Follow us on Facebook
                </span>
            </a>

            <a href="https://www.instagram.com/backendcoders/" target="_blank" rel="noreferrer" aria-label="Instagram"
               class="flex h-8 w-8 items-center justify-center rounded-full bg-gradient-to-r from-[#f1e9e9] to-[#f5f1f1] transition-all duration-300 hover:scale-110">
                <img src="{{ asset('assets/icons/instagram.png') }}" alt="Instagram" class="h-4 w-4" aria-hidden="true">
            </a>

            <a href="https://www.linkedin.com/company/backendcodersindia/" target="_blank" rel="noreferrer" aria-label="LinkedIn"
               class="flex h-8 w-8 items-center justify-center rounded-full bg-gradient-to-r from-[#f1e9e9] to-[#f5f1f1] transition-all duration-300 hover:scale-110">
                <img src="{{ asset('assets/icons/linkedin.png') }}" alt="LinkedIn" class="h-4 w-4" aria-hidden="true">
            </a>

            <a href="https://wa.me/919140092133" target="_blank" rel="noreferrer" aria-label="WhatsApp"
               class="flex h-8 w-8 items-center justify-center rounded-full bg-gradient-to-r from-[#f1e9e9] to-[#f5f1f1] transition-all duration-300 hover:scale-110">
                <img src="{{ asset('assets/icons/whatsapp.png') }}" alt="WhatsApp" class="h-4 w-4" aria-hidden="true">
            </a>

            <a href="https://x.com/backendcodersin" target="_blank" rel="noopener noreferrer" aria-label="Twitter"
                 class="flex h-8 w-8 items-center justify-center rounded-full bg-gradient-to-r from-[#f1e9e9] to-[#f5f1f1] transition-all duration-300 hover:scale-110">
                <img src="{{ asset('assets/icons/twitter.png') }}" class="h-5 w-5" alt="Twitter" aria-hidden="true">
            </a>
        </div>
    </div>
</div>

<!-- NAVBAR -->
<header class="sticky
top-0
z-40
h-20
overflow-visible
bg-black/95
backdrop-blur">
    <div class=" max-w-7xl mx-auto h-full flex items-center justify-between px-4">
        <a href="{{ route('frontend.index') }}" class="flex items-center gap-3" aria-label="Backend Coders India">
            <img src="{{ asset('assets/images/bc_bg_logo_101x40.png') }}"  
                 width="180"
                 height="48"
                 alt="Backend Coders India"
                 fetchpriority="high"
                 decoding="sync"
                 class="w-[180px] h-12 object-contain">
        </a>

        <!-- Desktop Menu -->
        <nav class="hidden items-center gap-2 lg:flex min-w-[700px] text-sm font-medium ">
            <a href="{{ route('frontend.index') }}"
               class="nav-link rounded-md px-3 py-2 transition hover:bg-orange-50 hover:text-[#FD5528] {{ $activeNavClass('frontend.index') }}"
               aria-current="{{ request()->routeIs('frontend.index') ? 'page' : '' }}">
                Overview
            </a>

            <a href="{{ route('frontend.about') }}"
               class="nav-link rounded-md px-3 py-2 transition hover:bg-orange-50 hover:text-[#FD5528] {{ $activeNavClass('frontend.about') }}"
               aria-current="{{ request()->routeIs('frontend.about') ? 'page' : '' }}">
                Company
            </a>

            <div class="relative">
                <button id="mega-menu-toggle"
                        type="button"
                        class="nav-link flex items-center gap-1 rounded-md px-3 py-2 transition hover:bg-orange-50 hover:text-[#FD5528] {{ $activeNavClass('frontend.service') }}"
                        aria-expanded="false"
                        aria-controls="mega-menu-panel">
                    Solutions
                    <svg class="h-4 w-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div id="mega-menu-panel"
                     class="hidden absolute left-1/2 top-full z-[90] mt-3 max-h-[70vh] w-[min(100vw-2rem,850px)] -translate-x-1/2 overflow-hidden rounded-2xl bg-white p-6 shadow-2xl ring-1 ring-black/10"
                     role="menu"
                     aria-hidden="true">
                    <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
                        <div class="space-y-3">
                            <p class="text-xs font-semibold uppercase tracking-wider text-[#FD5528]">Digital Marketing</p>
                            <ul class="space-y-2 text-sm text-slate-700">
                                @forelse($digitalMenuItems as $item)
                                    @if($item->page)
                                        <li class="rounded-lg px-3 py-2 transition hover:bg-orange-50 hover:text-[#FD5528]">
                                            <a class="block" href="{{ $item->page->slug === 'seo-services' ? route('frontend.seo') : route('frontend.page', $item->page->slug) }}">
                                                {{ $item->title }}
                                            </a>
                                        </li>
                                    @endif
                                @empty
                                    <li class="px-3 py-2 text-slate-500">No digital services available.</li>
                                @endforelse
                            </ul>
                        </div>

                        <div class="space-y-3">
                            <p class="text-xs font-semibold uppercase tracking-wider text-[#FD5528]">Software Development</p>
                            <ul class="mt-3 space-y-2 text-sm text-slate-700">
                                @forelse($softwareMenuItems as $item)
                                    @if($item->page)
                                        <li class="rounded-lg px-3 py-2 transition hover:bg-orange-50 hover:text-[#FD5528]">
                                            <a class="block" href="{{ $item->page->slug === 'seo-services' ? route('frontend.seo') : route('frontend.page', $item->page->slug) }}">
                                                {{ $item->title }}
                                            </a>
                                        </li>
                                    @endif
                                @empty
                                    <li class="px-3 py-2 text-slate-500">No software services available.</li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <a href="{{ route('frontend.project') }}"
               class="nav-link rounded-md px-3 py-2 transition hover:bg-orange-50 hover:text-[#FD5528] {{ $activeNavClass('frontend.project') }}"
               aria-current="{{ request()->routeIs('frontend.project') ? 'page' : '' }}">
                Portfolio
            </a>

            <a href="{{ route('frontend.process') }}"
               class="nav-link rounded-md px-3 py-2 transition hover:bg-orange-50 hover:text-[#FD5528] {{ $activeNavClass('frontend.process') }}"
               aria-current="{{ request()->routeIs('frontend.process') ? 'page' : '' }}">
                Process
            </a>

            <a href="{{ route('frontend.demo') }}"
               class="nav-link rounded-md px-3 py-2 transition hover:bg-orange-50 hover:text-[#FD5528] {{ $activeNavClass('frontend.demo') }}"
               aria-current="{{ request()->routeIs('frontend.demo') ? 'page' : '' }}">
                Live Demos
            </a>

            <a href="{{ route('frontend.blog') }}"
               class="nav-link rounded-md px-3 py-2 transition hover:bg-orange-50 hover:text-[#FD5528] {{ $activeNavClass('frontend.blog') }}"
               aria-current="{{ request()->routeIs('frontend.blog') ? 'page' : '' }}">
                Blog
            </a>

            <a href="{{ route('frontend.packages') }}"
               class="nav-link rounded-md px-3 py-2 transition hover:bg-orange-50 hover:text-[#FD5528] {{ $activeNavClass('frontend.packages') }}"
               aria-current="{{ request()->routeIs('frontend.packages') ? 'page' : '' }}">
                Packages
            </a>

            <a href="{{ route('frontend.career') }}"
               class="nav-link rounded-md px-3 py-2 transition hover:bg-orange-50 hover:text-[#FD5528] {{ $activeNavClass('frontend.career') }}"
               aria-current="{{ request()->routeIs('frontend.career') ? 'page' : '' }}">
                Careers
            </a>

            <a href="{{ route('frontend.contact') }}"
               class="nav-link rounded-md px-3 py-2 transition hover:bg-orange-50 hover:text-[#FD5528] {{ $activeNavClass('frontend.contact') }}"
               aria-current="{{ request()->routeIs('frontend.contact') ? 'page' : '' }}">
                Contact
            </a>
        </nav>

        <div class="hidden lg:flex">
            <a href="tel:+91 9140092133"
               class="inline-flex items-center justify-center rounded-2xl bg-gradient-to-r from-[#FD5528] to-[#fbb03b] px-5 py-2 font-semibold text-white transition-all duration-200 hover:scale-105 hover:from-[#fbb03b] hover:to-[#FD5528]">
                Initialize
            </a>
        </div>

        <button id="mobile-menu-toggle"
                type="button"
                class="rounded-md border border-white/30 p-2 text-white transition hover:bg-white/10 lg:hidden"
                aria-controls="mobile-menu"
                aria-expanded="false">
            &#9776;
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu"
         class="hidden fixed inset-x-0 top-16 z-50 h-[calc(100dvh-4rem)] w-screen border-t border-white/10 bg-black/95 shadow-2xl backdrop-blur lg:hidden">
        <div class="flex h-full min-h-0 flex-col gap-2 overflow-y-auto overscroll-contain px-3 py-3 text-sm sm:px-4 sm:py-4">
            <a href="{{ route('frontend.index') }}"
               data-mobile-menu-link
               class="nav-link w-full rounded-md px-4 py-3 text-[15px] transition hover:bg-orange-50 sm:text-sm {{ $activeMobileNavClass('frontend.index') }}"
               aria-current="{{ request()->routeIs('frontend.index') ? 'page' : '' }}">
                Overview
            </a>

            <a href="{{ route('frontend.about') }}"
               data-mobile-menu-link
               class="nav-link w-full rounded-md px-4 py-3 text-[15px] transition hover:bg-orange-50 sm:text-sm {{ $activeMobileNavClass('frontend.about') }}"
               aria-current="{{ request()->routeIs('frontend.about') ? 'page' : '' }}">
                Company
            </a>

            <div class="w-full pt-2">
                <button type="button"
                        id="mobile-solution-btn"
                        class="flex w-full items-center justify-between rounded-lg px-4 py-3.5 text-left text-white transition hover:bg-white/10">
                    <span>Solutions</span>
                    <span id="mobile-arrow" class="transition-transform duration-200" aria-hidden="true">
                        <svg class="h-4 w-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </span>
                </button>

                <div id="mobile-service-menu" class="hidden mt-3 space-y-3 pr-1">
                    <div class="w-full rounded-2xl border border-white/10 bg-white/95 p-3 shadow-sm sm:p-4">
                        <div class="mb-2 flex items-center justify-between">
                            <p class="text-[13px] font-semibold text-slate-800 sm:text-sm">Digital Marketing</p>
                            <span class="text-xs text-[#FD5528]">{{ $digitalMenuItems->count() }} services</span>
                        </div>

                        <div class="grid max-h-40 gap-2 overflow-y-auto overscroll-contain pr-1 text-sm text-slate-700 sm:max-h-48">
                            @forelse($digitalMenuItems as $item)
                                @if($item->page)
                                    <a href="{{ $item->page->slug === 'seo-services' ? route('frontend.seo') : route('frontend.page', $item->page->slug) }}"
                                       data-mobile-menu-link
                                       class="block rounded-lg px-3 py-2.5 text-[14px] leading-snug transition hover:bg-orange-50 hover:text-[#FD5528] sm:py-2">
                                        {{ $item->title }}
                                    </a>
                                @endif
                            @empty
                                <span class="px-3 py-2 text-slate-500">No digital services available.</span>
                            @endforelse
                        </div>
                    </div>

                    <div class="w-full rounded-2xl border border-white/10 bg-white/95 p-3 shadow-sm sm:p-4">
                        <div class="mb-2 flex items-center justify-between">
                            <p class="text-[13px] font-semibold text-slate-800 sm:text-sm">Software Development</p>
                            <span class="text-xs text-[#FD5528]">{{ $softwareMenuItems->count() }} services</span>
                        </div>

                        <div class="grid max-h-40 gap-2 overflow-y-auto overscroll-contain pr-1 text-sm text-slate-700 sm:max-h-48">
                            @forelse($softwareMenuItems as $item)
                                @if($item->page)
                                    <a href="{{ $item->page->slug === 'seo-services' ? route('frontend.seo') : route('frontend.page', $item->page->slug) }}"
                                       data-mobile-menu-link
                                       class="block rounded-lg px-3 py-2.5 text-[14px] leading-snug transition hover:bg-orange-50 hover:text-[#FD5528] sm:py-2">
                                        {{ $item->title }}
                                    </a>
                                @endif
                            @empty
                                <span class="px-3 py-2 text-slate-500">No software services available.</span>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>

            <a href="{{ route('frontend.project') }}"
               data-mobile-menu-link
               class="nav-link w-full rounded-md px-4 py-3 text-[15px] transition hover:bg-orange-50 sm:text-sm {{ $activeMobileNavClass('frontend.project') }}"
               aria-current="{{ request()->routeIs('frontend.project') ? 'page' : '' }}">
                Portfolio
            </a>

            <a href="{{ route('frontend.process') }}"
               data-mobile-menu-link
               class="nav-link w-full rounded-md px-4 py-3 text-[15px] transition hover:bg-orange-50 sm:text-sm {{ $activeMobileNavClass('frontend.process') }}"
               aria-current="{{ request()->routeIs('frontend.process') ? 'page' : '' }}">
                Process
            </a>

            <a href="{{ route('frontend.demo') }}"
               data-mobile-menu-link
               class="nav-link w-full rounded-md px-4 py-3 text-[15px] transition hover:bg-orange-50 sm:text-sm {{ $activeMobileNavClass('frontend.demo') }}"
               aria-current="{{ request()->routeIs('frontend.demo') ? 'page' : '' }}">
                Live Demos
            </a>

            <a href="{{ route('frontend.blog') }}"
               data-mobile-menu-link
               class="nav-link w-full rounded-md px-4 py-3 text-[15px] transition hover:bg-orange-50 sm:text-sm {{ $activeMobileNavClass('frontend.blog') }}"
               aria-current="{{ request()->routeIs('frontend.blog') ? 'page' : '' }}">
                Blog
            </a>

            <a href="{{ route('frontend.packages') }}"
               data-mobile-menu-link
               class="nav-link w-full rounded-md px-4 py-3 text-[15px] transition hover:bg-orange-50 sm:text-sm {{ $activeMobileNavClass('frontend.packages') }}"
               aria-current="{{ request()->routeIs('frontend.packages') ? 'page' : '' }}">
                Packages
            </a>

            <a href="{{ route('frontend.career') }}"
               data-mobile-menu-link
               class="nav-link w-full rounded-md px-4 py-3 text-[15px] transition hover:bg-orange-50 sm:text-sm {{ $activeMobileNavClass('frontend.career') }}"
               aria-current="{{ request()->routeIs('frontend.career') ? 'page' : '' }}">
                Careers
            </a>

            <a href="{{ route('frontend.contact') }}"
               data-mobile-menu-link
               class="nav-link w-full rounded-md px-4 py-3 text-[15px] transition hover:bg-orange-50 sm:text-sm {{ $activeMobileNavClass('frontend.contact') }}"
               aria-current="{{ request()->routeIs('frontend.contact') ? 'page' : '' }}">
                Contact
            </a>

            <div class="py-2 sm:py-3 space-y-2">
                <a href="tel:+919140092133"
                   class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-[#FD5528] px-4 py-3 text-sm font-semibold text-white transition hover:bg-orange-600">
                    <img src="{{ asset('assets/icons/call.png') }}" alt="Phone" class="h-4 w-4" aria-hidden="true">
                    <span>Call: +91 9140092133</span>
                </a>
                <a href="mailto:info@backendcodersindia.com"
                   class="inline-flex w-full items-center justify-center gap-2 rounded-xl border border-white/20 bg-white/5 px-4 py-3 text-sm font-semibold text-white transition hover:bg-white/10 hover:border-white/40">
                    <img src="{{ asset('assets/icons/mail.png') }}" alt="Email" class="h-4 w-4" aria-hidden="true">
                    <span>Email: info@backendcodersindia.com</span>
                </a>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const mobileMenuToggle = document.getElementById("mobile-menu-toggle");
        const menu = document.getElementById("mobile-menu");
        const mobileLinks = document.querySelectorAll("[data-mobile-menu-link]");
        const mobileSolutionBtn = document.getElementById("mobile-solution-btn");
        const mobileServiceMenu = document.getElementById("mobile-service-menu");
        const mobileArrow = document.getElementById("mobile-arrow");

        const closeMobileMenu = () => {
            menu?.classList.add("hidden");
            mobileMenuToggle?.setAttribute("aria-expanded", "false");
            document.body.classList.remove("overflow-hidden");
        };

        const closeMobileSolutions = () => {
            mobileServiceMenu?.classList.add("hidden");
            mobileArrow?.classList.remove("rotate-180");
        };

        mobileMenuToggle?.addEventListener("click", () => {
            const isHidden = menu?.classList.toggle("hidden");
            mobileMenuToggle.setAttribute("aria-expanded", String(!isHidden));
            document.body.classList.toggle("overflow-hidden", !isHidden);

            if (isHidden) {
                closeMobileSolutions();
            }
        });

        mobileLinks.forEach((link) => {
            link.addEventListener("click", () => {
                closeMobileMenu();
                closeMobileSolutions();
            });
        });

        mobileSolutionBtn?.addEventListener("click", function (e) {
            e.stopPropagation();
            mobileServiceMenu?.classList.toggle("hidden");
            mobileArrow?.classList.toggle("rotate-180");
        });

        document.addEventListener("keydown", function (e) {
            if (e.key === "Escape") {
                closeMobileMenu();
                closeMobileSolutions();
            }
        });

        window.addEventListener("resize", function () {
            if (window.innerWidth >= 1024) {
                closeMobileMenu();
                closeMobileSolutions();
            }
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const emailLink = document.getElementById("email-link");
        const emailText = document.getElementById("email");

        if (emailLink && emailText) {
            emailText.textContent = "info@backendcodersindia.com";
            emailLink.href = "mailto:info@backendcodersindia.com";
            emailLink.setAttribute("aria-label", "Email info@backendcodersindia.com");
        }
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const megaToggle = document.getElementById("mega-menu-toggle");
        const megaPanel = document.getElementById("mega-menu-panel");
        const megaArrow = megaToggle?.querySelector("svg");

        const closeMega = () => {
            if (!megaPanel?.classList.contains("hidden")) {
                megaPanel.classList.add("hidden");
                megaToggle?.setAttribute("aria-expanded", "false");
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
    });
</script>
