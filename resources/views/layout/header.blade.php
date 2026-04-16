<div id="sidebarBackdrop" class="fixed inset-0 z-30 hidden bg-slate-950/50 backdrop-blur-sm lg:hidden "></div>

<aside
    id="sidebar"
    class="fixed inset-y-0 left-0 z-40 flex w-72 -translate-x-full flex-col border-r border-slate-200/70 bg-white/95 px-5 py-6 shadow-2xl shadow-slate-200/50 backdrop-blur-xl transition-transform duration-300 ease-out dark:border-white/10 dark:bg-slate-950/95 dark:shadow-black/30 lg:translate-x-0"
>
    <div class="flex items-center gap-3">
        <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-[#FD5528] text-base font-black text-white shadow-lg shadow-[#FD5528]/30">
            <img src="{{ asset('assets/images/bci_icon.png') }}" alt="">
        </div>
        <div>
            <p class="text-xs uppercase tracking-[0.35em] text-[#FD5528] font-bold">Backend</p>
            <h1 class="text-lg font-semibold text-slate-900 dark:text-white">Coders India</h1>
        </div>
    </div>

    <div class="mt-8 rounded-3xl bg-slate-50 p-4 ring-1 ring-slate-200/70 dark:bg-white/5 dark:ring-white/10">
        <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Workspace</p>
        <div class="mt-3 flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500 dark:text-slate-300">Project health</p>
                <p class="text-2xl font-semibold text-slate-900 dark:text-white">96%</p>
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

           <a href="#" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-white/5">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-100 text-slate-500 dark:bg-white/5 dark:text-slate-300">C</span>
            Leads
        </a>

        <a href="{{ route('projects.index') }}" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-white/5">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-100 text-slate-500 dark:bg-white/5 dark:text-slate-300">P</span>
            Projects
        </a>
        <a href="{{ route('services.index') }}" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-white/5">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-100 text-slate-500 dark:bg-white/5 dark:text-slate-300">S</span>
            Services
        </a>
      
        <a href="{{ route('categories.index') }}" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-white/5">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-100 text-slate-500 dark:bg-white/5 dark:text-slate-300">K</span>
            Categories
        </a>
        <a href="{{ route('blogs.index') }}" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-white/5">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-100 text-slate-500 dark:bg-white/5 dark:text-slate-300">B</span>
            Blogs
        </a>

        <a href="{{ route('careers.index') }}" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-white/5">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-100 text-slate-500 dark:bg-white/5 dark:text-slate-300">J</span>
            Careers
        </a>

        <a href="{{ route('frontend.career') }}" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-white/5">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-100 text-slate-500 dark:bg-white/5 dark:text-slate-300">C</span>
            Applications
        </a>

        <div class="pt-4">
            <p class="px-3 text-xs font-semibold uppercase tracking-[0.3em] text-slate-400">Shortcuts</p>
            <div class="mt-3 grid gap-3">
                <div class="rounded-2xl border border-slate-200/70 bg-slate-50 p-4 dark:border-white/10 dark:bg-white/5">
                    <p class="text-xs text-slate-400">This week</p>
                    <p class="mt-1 text-sm font-medium text-slate-900 dark:text-white">18 new leads</p>
                </div>
                <div class="rounded-2xl border border-slate-200/70 bg-slate-50 p-4 dark:border-white/10 dark:bg-white/5">
                    <p class="text-xs text-slate-400">Revenue</p>
                    <p class="mt-1 text-sm font-medium text-slate-900 dark:text-white">$24.8k collected</p>
                </div>
            </div>
        </div>
    </nav>

    <div class="mt-6 rounded-3xl bg-slate-900 p-4 text-white shadow-lg shadow-slate-900/20 dark:bg-white/5">
        <p class="text-xs uppercase tracking-[0.3em] text-white/50">Need help?</p>
        <p class="mt-2 text-sm text-white/80">Track tasks, review progress, and stay on top of the workspace from one place.</p>
        <button type="button" class="mt-4 w-full rounded-2xl bg-[#FD5528] px-4 py-3 text-sm font-semibold text-white transition hover:bg-[#e94c20]">
            View insights
        </button>
    </div>
</aside>

<header class="fixed left-0 right-0 top-0 z-20 border-b border-slate-200/70 bg-white/80 backdrop-blur-xl dark:border-white/10 dark:bg-slate-950/80 lg:left-72">
    <div class="flex h-20 items-center justify-between px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-3">
            <button
                id="sidebarToggle"
                type="button"
                class="inline-flex h-11 w-11 items-center justify-center rounded-2xl border border-slate-200 bg-white text-slate-600 transition hover:border-[#FD5528] hover:text-[#FD5528] dark:border-white/10 dark:bg-white/5 dark:text-slate-200 lg:hidden"
                aria-label="Toggle sidebar"
            >
                <span class="text-xl leading-none">≡</span>
            </button>

            <div>
                <p class="text-xs uppercase tracking-[0.35em] text-[#FD5528] font-bold">Dashboard</p>
                <h2 class="text-lg font-semibold text-slate-900 dark:text-white">Welcome back, Admin</h2>
            </div>
        </div>

        <div class="hidden max-w-xl flex-1 px-8 xl:block">
            <label class="relative block">
                <span class="sr-only">Search</span>
                <span class="pointer-events-none absolute inset-y-0 left-4 flex items-center text-slate-400">⌕</span>
                <input
                    type="search"
                    placeholder="Search projects, orders, or users"
                    class="w-full rounded-2xl border border-slate-200 bg-slate-50 py-3 pl-11 pr-4 text-sm text-slate-700 outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-white/5 dark:text-slate-100 dark:placeholder:text-slate-500"
                >
            </label>
        </div>

        <div class="flex items-center gap-3">
            <!-- <button
                id="themeToggle"
                type="button"
                class="inline-flex h-11 items-center gap-2 rounded-2xl border border-slate-200 bg-white px-4 text-sm font-medium text-slate-600 transition hover:border-[#FD5528] hover:text-[#FD5528] dark:border-white/10 dark:bg-white/5 dark:text-slate-200"
                aria-label="Toggle theme"
            >
                <span id="themeIcon" class="text-base">☾</span>
                <span class="hidden sm:inline" id="themeLabel">Dark</span>
            </button> -->

            <div class="hidden items-center gap-3 rounded-2xl border border-slate-200 bg-white px-3 py-2 dark:border-white/10 dark:bg-white/5 sm:flex">
                <div class="text-right">
                    <p class="text-xs text-[#FD5528]">Signed in as</p>
                    <p class="text-sm font-medium text-slate-900 dark:text-white">Admin</p>
                </div>
                <div class="flex h-10 w-10 items-center justify-center rounded-2xl bg-[#FD5528] text-sm font-bold text-white">
                    A
                </div>
            </div>
        </div>
    </div>
</header>
