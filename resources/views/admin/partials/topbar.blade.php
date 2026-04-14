<header class="flex items-center justify-between border-b border-slate-200 bg-white px-6 py-4 shadow-sm">
    <div class="flex items-center gap-4">
        <button class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 text-slate-500 transition hover:border-slate-300 hover:text-slate-700 lg:hidden">
            <span class="sr-only">Open sidebar</span>
            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <div>
            <p class="text-sm font-semibold uppercase tracking-wide text-slate-500">Admin</p>
            <p class="text-lg font-bold text-slate-900">@yield('title', 'Dashboard')</p>
        </div>
    </div>

    <div class="flex flex-1 items-center justify-end gap-3">
        <form class="hidden items-center gap-2 rounded-2xl border border-slate-200 bg-slate-50 px-3 py-2 text-sm md:flex" method="GET" onchange="this.submit()">
            <span class="text-slate-400">Search</span>
            <input type="text" name="search" placeholder="Quick search" value="{{ request('search') }}" class="w-40 bg-transparent text-sm focus:outline-none">
        </form>

        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="flex items-center gap-2 rounded-2xl border border-slate-200 px-4 py-2 text-sm font-medium text-slate-700 transition hover:border-slate-300 hover:text-slate-900">
                <span>Logout</span>
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H3m12-4l-4 4 4 4"></path>
                </svg>
            </button>
        </form>
    </div>
</header>
