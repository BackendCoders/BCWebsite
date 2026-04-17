<div id="sidebarBackdrop" class="fixed inset-0 z-30 hidden bg-slate-950/50 backdrop-blur-sm lg:hidden "></div>

<aside
    id="sidebar"
    class="fixed inset-y-0 left-0 z-40 flex w-72 -translate-x-full flex-col border-r border-slate-200/70 bg-white/95 px-5 py-6 shadow-2xl shadow-slate-200/50 backdrop-blur-xl transition-transform duration-300 ease-out lg:translate-x-0"
>
    <div class="flex items-center gap-3">
        <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-[#FD5528] text-base font-black text-white shadow-lg shadow-[#FD5528]/30">
            <img src="{{ asset('assets/images/bci_icon.png') }}" alt="">
        </div>
        <div>
            <p class="text-xs uppercase tracking-[0.35em] text-[#FD5528] font-bold">Backend</p>
            <h1 class="text-lg font-semibold text-slate-900">Coders India</h1>
        </div>
    </div>

    <div class="mt-8 rounded-3xl bg-slate-50 p-4 ring-1 ring-slate-200/70">
        <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Workspace</p>
        <div class="mt-3 flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500">Project health</p>
                <p class="text-2xl font-semibold text-slate-900">96%</p>
            </div>
            <div class="flex h-14 w-14 items-center justify-center rounded-full border-4 border-[#FD5528]/15 text-sm font-semibold text-[#FD5528]">
                Live
            </div>
        </div>
    </div>

    <nav class="mt-8 flex-1 space-y-1 overflow-y-auto no-scrollbar">
        <p class="px-3 text-xs font-semibold uppercase tracking-[0.3em] text-slate-400">Menu</p>
        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 rounded-2xl bg-[#FD5528] px-4 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-white/15">•</span>
            Dashboard
        </a>

           <a href="#" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-100 text-slate-500">C</span>
            Leads
        </a>

        <a href="{{ route('projects.index') }}" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-100 text-slate-500">P</span>
            Projects
        </a>
        <a href="{{ route('services.index') }}" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-100 text-slate-500">S</span>
            Services
        </a>
      
        <a href="{{ route('categories.index') }}" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-100 text-slate-500">K</span>
            Categories
        </a>
        <a href="{{ route('blogs.index') }}" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-100 text-slate-500">B</span>
            Blogs
        </a>

        <a href="{{ route('careers.index') }}" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-100 text-slate-500">J</span>
            Careers
        </a>

        <a href="{{ route('frontend.career') }}" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-100 text-slate-500">C</span>
            Applications
        </a>

        <div class="pt-4">
            <p class="px-3 text-xs font-semibold uppercase tracking-[0.3em] text-slate-400">Shortcuts</p>
            <div class="mt-3 grid gap-3">
                <div class="rounded-2xl border border-slate-200/70 bg-slate-50 p-4">
                    <p class="text-xs text-slate-400">This week</p>
                    <p class="mt-1 text-sm font-medium text-slate-900">18 new leads</p>
                </div>
                <div class="rounded-2xl border border-slate-200/70 bg-slate-50 p-4">
                    <p class="text-xs text-slate-400">Revenue</p>
                    <p class="mt-1 text-sm font-medium text-slate-900">$24.8k collected</p>
                </div>
            </div>
        </div>
    </nav>

    <div class="mt-6 rounded-3xl bg-slate-900 p-4 text-white shadow-lg shadow-slate-900/20">
        <p class="text-xs uppercase tracking-[0.3em] text-white/50">Need help?</p>
        <p class="mt-2 text-sm text-white/80">Track tasks, review progress, and stay on top of the workspace from one place.</p>
        <button type="button" class="mt-4 w-full rounded-2xl bg-[#FD5528] px-4 py-3 text-sm font-semibold text-white transition hover:bg-[#e94c20]">
            View insights
        </button>
    </div>
</aside>

<header class="fixed left-0 right-0 top-0 z-20 border-b border-slate-200/70 bg-white/80 backdrop-blur-xl lg:left-72">
    <div class="flex h-20 items-center justify-between px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-3">
            <button
                id="sidebarToggle"
                type="button"
                class="inline-flex h-11 w-11 items-center justify-center rounded-2xl border border-slate-200 bg-white text-slate-600 transition hover:border-[#FD5528] hover:text-[#FD5528] lg:hidden"
                aria-label="Toggle sidebar"
            >
                <span class="text-xl leading-none">≡</span>
            </button>

            <div>
                <p class="text-xs uppercase tracking-[0.35em] text-[#FD5528] font-bold">Dashboard</p>
                <h2 class="text-lg font-semibold text-slate-900">Welcome back, Admin</h2>
            </div>
        </div>

        <div class="hidden max-w-xl flex-1 px-8 xl:block">
            <label class="relative block">
                <span class="sr-only">Search</span>
                <span class="pointer-events-none absolute inset-y-0 left-4 flex items-center text-slate-400">⌕</span>
                <input
                    type="search"
                    placeholder="Search projects, orders, or users"
                    class="w-full rounded-2xl border border-slate-200 bg-slate-50 py-3 pl-11 pr-4 text-sm text-slate-700 outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10"
                >
            </label>
        </div>

        <div class="flex items-center gap-3">
            <!-- <button
                id="themeToggle"
                type="button"
                class="inline-flex h-11 items-center gap-2 rounded-2xl border border-slate-200 bg-white px-4 text-sm font-medium text-slate-600 transition hover:border-[#FD5528] hover:text-[#FD5528]"
                aria-label="Toggle theme"
            >
                <span id="themeIcon" class="text-base">☾</span>
                <span class="hidden sm:inline" id="themeLabel">Dark</span>
            </button> -->

            <div class="hidden items-center gap-3 rounded-2xl border border-slate-200 bg-white px-3 py-2 sm:flex">
                <div class="text-right">
                    <p class="text-xs text-[#FD5528]">Signed in as</p>
                      <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
                </div>
                <!-- <div class="flex h-10 w-10 items-center justify-center rounded-2xl bg-[#FD5528] text-sm font-bold text-white">
                    A
                </div> -->
                
            </div>
        </div>
    </div>
</header>
