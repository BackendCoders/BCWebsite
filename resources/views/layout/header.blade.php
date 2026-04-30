<div id="sidebarBackdrop" class="fixed inset-0 z-30 hidden bg-slate-950/50 backdrop-blur-sm lg:hidden"></div>

<aside
    id="sidebar"
    class="fixed inset-y-0 left-0 z-40 flex w-72 -translate-x-full flex-col border-r border-slate-200/70 bg-white/95 px-5 py-6 shadow-2xl shadow-slate-200/50 backdrop-blur-xl transition-transform duration-300 ease-out lg:translate-x-0"
>
    <div class="flex items-center gap-3">
        <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-[#FD5528] text-base font-black text-white shadow-lg shadow-[#FD5528]/30">
            <img src="{{ asset('assets/images/bci_icon.png') }}" alt="Backend Coders logo">
        </div>
        <div>
            <p class="text-xs font-bold uppercase tracking-[0.35em] text-[#FD5528]">Backend</p>
            <h1 class="text-lg font-semibold text-slate-900">Coders India</h1>
        </div>
    </div>

    <div class="mt-8 rounded-3xl bg-slate-50 p-4 ring-1 ring-slate-200/70">

    
             <a href="{{ route('dashboard') }}" class="flex items-center gap-3 rounded-2xl bg-[#FD5528] px-4 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-white/15">
                <svg viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                    <circle cx="12" cy="12" r="3.5" />
                    <path d="M12 4.5a7.5 7.5 0 0 0-7.5 7.5v.5h2v-.5a5.5 5.5 0 1 1 11 0v.5h2v-.5A7.5 7.5 0 0 0 12 4.5Z" />
                </svg>
            </span>
            Dashboard
        </a>
            
     
    </div>

    <nav class="mt-8 flex-1 space-y-1 overflow-y-auto no-scrollbar">
        <p class="px-3 text-xs font-semibold uppercase tracking-[0.3em] text-slate-400">Menu</p>
        @if(auth()->user()?->isAdmin())
            <a href="{{ route('pages.index') }}" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
                <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-100 text-slate-500">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 5.5A1.5 1.5 0 0 1 6 4h9l4.5 4.5V19A1.5 1.5 0 0 1 18 20.5H6A1.5 1.5 0 0 1 4.5 19V5.5Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 4v4.5h4.5" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 11h8M8 15h5" />
                    </svg>
                </span>
                Pages
            </a>

            <a href="{{ route('menu-items.index') }}" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
                <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-100 text-slate-500">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14M5 12h14" />
                    </svg>
                </span>
                Menu Items
            </a>

            <a href="{{ route('sections.index') }}" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
                <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-100 text-slate-500">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 7.5h15M4.5 12h15M4.5 16.5h15" />
                    </svg>
                </span>
                Sections
            </a>
        @endif

     

        <a href="{{ route('leads.index') }}" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-100 text-slate-500">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 7h10v10H7z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 10h10M10 7v10" />
                </svg>
            </span>
            Leads
        </a>

        <a href="{{ route('projects.index') }}" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-100 text-slate-500">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 6.5h10A1.5 1.5 0 0 1 18.5 8v8A1.5 1.5 0 0 1 17 17.5H7A1.5 1.5 0 0 1 5.5 16V8A1.5 1.5 0 0 1 7 6.5Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 10h6M9 13h4" />
                </svg>
            </span>
            Projects
        </a>

        <a href="{{ route('services.index') }}" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-100 text-slate-500">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3.5l1.9 4 4.4.6-3.2 3.1.8 4.4-3.9-2.1-3.9 2.1.8-4.4-3.2-3.1 4.4-.6L12 3.5Z" />
                </svg>
            </span>
            Services
        </a>

        <a href="{{ route('categories.index') }}" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-100 text-slate-500">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 7.5A2 2 0 0 1 6.5 5.5h11A2 2 0 0 1 19.5 7.5v9A2 2 0 0 1 17.5 18.5h-11a2 2 0 0 1-2-2v-9Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h8M8 13h5" />
                </svg>
            </span>
            Categories
        </a>

        <a href="{{ route('blogs.index') }}" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-100 text-slate-500">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 6.5A1.5 1.5 0 0 1 6.5 5h9l3 3V17.5A1.5 1.5 0 0 1 17 19H6.5A1.5 1.5 0 0 1 5 17.5v-11Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h7M8 13h5" />
                </svg>
            </span>
            Blogs
        </a>

        <a href="{{ route('contacts.index') }}" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-100 text-slate-500">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 7.5A2 2 0 0 1 6.5 5.5h11A2 2 0 0 1 19.5 7.5v9A2 2 0 0 1 17.5 18.5h-11a2 2 0 0 1-2-2v-9Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 9.5l5 4 5-4" />
                </svg>
            </span>
            Contacts
        </a>

        <a href="{{ route('careers.index') }}" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-100 text-slate-500">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 6.5A2.5 2.5 0 0 1 10 4h4a2.5 2.5 0 0 1 2.5 2.5V6H19a1.5 1.5 0 0 1 1.5 1.5v2A1.5 1.5 0 0 1 19 11H5A1.5 1.5 0 0 1 3.5 9.5v-2A1.5 1.5 0 0 1 5 6h2.5v.5Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.5 11.5V18A1.5 1.5 0 0 0 5 19.5h14A1.5 1.5 0 0 0 20.5 18v-6.5" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 11v1a3 3 0 0 0 6 0v-1" />
                </svg>
            </span>
            Careers
        </a>

        <a href="{{ route('frontend.career') }}" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-100 text-slate-500">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3.5l2.2 4.5 5 .7-3.6 3.5.9 4.9-4.5-2.4-4.5 2.4.9-4.9-3.6-3.5 5-.7L12 3.5Z" />
                </svg>
            </span>
            Applications
        </a>

        <div class="pt-4">
            <p class="px-3 text-xs font-semibold uppercase tracking-[0.3em] text-slate-400">Shortcuts</p>
            <div class="mt-3 grid gap-3">
                <div class="rounded-2xl border border-slate-200/70 bg-slate-50 p-4">
                    <p class="text-xs text-slate-400">This week</p>
            <p class="mt-1 text-sm font-medium text-slate-900">{{ \App\Models\CareerApplication::count() }} new leads</p>
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
                <span class="text-xl leading-none">☰</span>
            </button>

            <div>
                <p class="text-xs font-bold uppercase tracking-[0.35em] text-[#FD5528]">Dashboard</p>
                <h2 class="text-lg font-semibold text-slate-900">Welcome, Admin</h2>
            </div>
        </div>

        <div class="flex items-center gap-3">
            <details class="relative">
                <summary class="list-none inline-flex h-11 w-11 cursor-pointer items-center justify-center rounded-2xl border border-[#FD5528]/20 bg-[#FD5528]/10 text-[#FD5528] transition hover:border-[#FD5528]/40 hover:bg-[#FD5528]/15">
                    <span class="sr-only">Open bot menu</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 10.5A4.5 4.5 0 0 1 12 6h0a4.5 4.5 0 0 1 4.5 4.5V12A4.5 4.5 0 0 1 12 16.5h0A4.5 4.5 0 0 1 7.5 12v-1.5Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 10.5h.01M15 10.5h.01" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 14.5c.8.7 1.8 1 3 1s2.2-.3 3-1" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 16.5v2m2-2v2" />
                    </svg>
                </summary>

                <div class="absolute right-0 mt-3 w-72 rounded-[1.75rem] border border-slate-200 bg-white p-4 shadow-2xl shadow-slate-200/50 dark:border-white/10 dark:bg-slate-950">
                    <div class="flex items-start gap-3 rounded-2xl bg-slate-50 p-4 dark:bg-white/5">
                        <div class="flex h-10 w-10 items-center justify-center rounded-2xl bg-[#FD5528]/10 text-[#FD5528]">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 10.5A4.5 4.5 0 0 1 12 6h0a4.5 4.5 0 0 1 4.5 4.5V12A4.5 4.5 0 0 1 12 16.5h0A4.5 4.5 0 0 1 7.5 12v-1.5Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 10.5h.01M15 10.5h.01" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-slate-900 dark:text-white">Bot assistant</p>
                            <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">Quick shortcuts for support and contact actions.</p>
                        </div>
                    </div>

                    <div class="mt-3 space-y-2">
                        <a href="#" class="flex items-center gap-3 rounded-2xl px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-white/5">
                            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-[#FD5528]/10 text-[#FD5528]">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 6.5A2 2 0 0 1 6.5 4.5h11A2 2 0 0 1 19.5 6.5v7A2 2 0 0 1 17.5 15.5H10l-4.5 4.5v-4.5h-1A2 2 0 0 1 2.5 13.5v-7Z" />
                                </svg>
                            </span>
                            Open chat assistant
                        </a>

                        <a href="https://wa.me/919140092133" target="_blank" class="flex items-center gap-3 rounded-2xl px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-white/5">
                            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-emerald-500/10 text-emerald-600">
                                <svg viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                                    <path d="M17.6 6.4A8.1 8.1 0 0 0 5.3 16.9L4 21l4.3-1.2a8.1 8.1 0 0 0 9.3-13.4Zm-5.6 12.4a6.7 6.7 0 0 1-3.4-.9l-.2-.1-2.5.7.7-2.4-.1-.2a6.7 6.7 0 1 1 5.5 2.9Zm3.9-4.9c-.2-.1-1.4-.7-1.6-.8-.2-.1-.4-.1-.5.1l-.7.8c-.1.1-.2.2-.4.1-.2-.1-.9-.3-1.8-1.1-.7-.6-1.1-1.4-1.3-1.6-.1-.2 0-.3.1-.4l.3-.4c.1-.1.2-.3.2-.4l-.2-.4c-.1-.1-.5-1.2-.7-1.6-.2-.4-.4-.4-.5-.4h-.4c-.1 0-.4.1-.6.3-.2.2-.8.8-.8 1.9 0 1.1.8 2.2.9 2.4.1.2 1.6 2.4 3.8 3.3.5.2.8.3 1.1.4.5.1.9.1 1.2.1.4-.1 1.4-.6 1.6-1.2.2-.6.2-1.1.2-1.2 0-.1-.1-.2-.3-.3Z" />
                                </svg>
                            </span>
                            WhatsApp support
                        </a>

                        <a href="tel:+919140092133" class="flex items-center gap-3 rounded-2xl px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-white/5">
                            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-sky-500/10 text-sky-600">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 4.75h3.1c.5 0 .9.3 1.1.8l.9 2.4c.2.5 0 1-.4 1.3l-1.5 1.1a11.8 11.8 0 0 0 4.8 4.8l1.1-1.5c.3-.4.8-.6 1.3-.4l2.4.9c.5.2.8.6.8 1.1v3.1c0 .8-.6 1.5-1.4 1.5C10.8 20.95 3.05 13.2 3.05 5.2c0-.8.7-1.4 1.5-1.4h2.2Z" />
                                </svg>
                            </span>
                            Call support
                        </a>
                    </div>
                </div>
            </details>

            <div class="hidden items-center gap-3 rounded-2xl border border-slate-200 bg-white px-3 py-2 sm:flex">
                <div class="text-right">
                    <p class="text-xs text-[#FD5528]">Signed in as</p>
                </div>

                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center rounded-md border border-transparent bg-white px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ms-1">
                                    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

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
        </div>
    </div>
</header>
