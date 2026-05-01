@extends('layout.main')

@section('content')
<x-app-layout>
    <div class="space-y-8 bg-[radial-gradient(circle_at_top_left,_rgba(253,85,40,0.10),_transparent_28%),radial-gradient(circle_at_top_right,_rgba(14,165,233,0.10),_transparent_24%),linear-gradient(180deg,_rgba(248,250,252,0.98),_white_18%,_rgba(248,250,252,0.95))]">
        <section class="relative overflow-hidden rounded-[2.5rem] border border-slate-200/70 bg-white/95 p-6 shadow-[0_24px_90px_rgba(15,23,42,0.08)] backdrop-blur-xl sm:p-8">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,_rgba(253,85,40,0.18),_transparent_32%),radial-gradient(circle_at_20%_20%,_rgba(14,165,233,0.12),_transparent_20%),radial-gradient(circle_at_bottom_left,_rgba(16,185,129,0.10),_transparent_25%)]"></div>

            <div class="relative grid gap-8 xl:grid-cols-12 xl:items-start">
                <div class="xl:col-span-8">
                    <div class="inline-flex items-center gap-2 rounded-full border border-[#FD5528]/20 bg-white/80 px-4 py-2 text-xs font-semibold uppercase tracking-[0.32em] text-[#FD5528] shadow-sm">
                        <span class="h-2 w-2 rounded-full bg-[#FD5528]"></span>
                        Admin dashboard
                    </div>

                    <h1 class="mt-5 max-w-3xl text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                        A colorful control center for pages, blogs, services, and business growth.
                    </h1>
                    <p class="mt-4 max-w-2xl text-sm leading-7 text-slate-500 sm:text-base">
                        Keep content, categories, careers, projects, services, and applications organized from one streamlined workspace with brighter status chips and polished visual hierarchy.
                    </p>

                    <div class="mt-6 flex flex-wrap gap-3">
                        <a href="{{ route('blogs.create') }}" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20]">
                            + New Blog
                        </a>
                        <a href="{{ route('categories.index') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">
                            Manage Categories
                        </a>
                        <a href="{{ route('pages.index') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">
                            View Pages
                        </a>
                    </div>

                    <div class="mt-8 grid gap-4 sm:grid-cols-2 xl:grid-cols-3">
                        <div class="rounded-[1.75rem] border border-slate-200/70 bg-white p-5 shadow-sm">
                            <div class="flex items-center justify-between">
                                <div class="rounded-2xl bg-[#FD5528]/10 p-3 text-[#FD5528]">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 7.5A2 2 0 0 1 6.5 5.5h11A2 2 0 0 1 19.5 7.5v9A2 2 0 0 1 17.5 18.5h-11a2 2 0 0 1-2-2v-9Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h8M8 13h5" />
                                    </svg>
                                </div>
                                <span class="rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">Live</span>
                            </div>
                            <p class="mt-4 text-xs uppercase tracking-[0.35em] text-slate-400">Categories</p>
                            <p class="mt-3 text-3xl font-bold text-slate-900">{{ $categoryCount }}</p>
                            <p class="mt-1 text-sm text-slate-500">Ready to assign to blog posts</p>
                        </div>

                        <div class="rounded-[1.75rem] border border-slate-200/70 bg-white p-5 shadow-sm">
                            <div class="flex items-center justify-between">
                                <div class="rounded-2xl bg-emerald-500/10 p-3 text-emerald-600">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 6.5A1.5 1.5 0 0 1 6.5 5h9l3 3V17.5A1.5 1.5 0 0 1 17 19H6.5A1.5 1.5 0 0 1 5 17.5v-11Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h7M8 13h5" />
                                    </svg>
                                </div>
                                <span class="rounded-full bg-emerald-500/10 px-3 py-1 text-xs font-semibold text-emerald-600">Published</span>
                            </div>
                            <p class="mt-4 text-xs uppercase tracking-[0.35em] text-slate-400">Blogs</p>
                            <p class="mt-3 text-3xl font-bold text-slate-900">{{ $blogCount }}</p>
                            <p class="mt-1 text-sm text-slate-500">Posts in the content library</p>
                        </div>

                        <div class="rounded-[1.75rem] border border-slate-200/70 bg-white p-5 shadow-sm">
                            <div class="flex items-center justify-between">
                                <div class="rounded-2xl bg-sky-500/10 p-3 text-sky-600">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3.5l1.9 4 4.4.6-3.2 3.1.8 4.4-3.9-2.1-3.9 2.1.8-4.4-3.2-3.1 4.4-.6L12 3.5Z" />
                                    </svg>
                                </div>
                                <span class="rounded-full bg-sky-500/10 px-3 py-1 text-xs font-semibold text-sky-600">Ready</span>
                            </div>
                            <p class="mt-4 text-xs uppercase tracking-[0.35em] text-slate-400">Services</p>
                            <p class="mt-3 text-3xl font-bold text-slate-900">{{ $serviceCount }}</p>
                            <p class="mt-1 text-sm text-slate-500">Service cards available for display</p>
                        </div>
                    </div>
                </div>

                <div class="xl:col-span-4">
                    <div class="rounded-[2rem] border border-slate-200/70 bg-gradient-to-br from-slate-50 to-white p-5 shadow-lg shadow-slate-200/40">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500">Workspace status</p>
                                <h2 class="mt-1 text-xl font-semibold text-slate-900">Quick stats</h2>
                            </div>
                            <span class="rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">Overview</span>
                        </div>

                        <div class="mt-5 grid gap-3">
                            <div class="flex items-center justify-between rounded-2xl border border-white/60 bg-white px-4 py-4 shadow-sm">
                                <div>
                                    <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Careers</p>
                                    <p class="mt-1 text-2xl font-bold text-slate-900">{{ $careerCount }}</p>
                                </div>
                                <span class="rounded-full bg-sky-500/10 px-3 py-1 text-xs font-semibold text-sky-600">Hiring</span>
                            </div>

                            <div class="flex items-center justify-between rounded-2xl border border-white/60 bg-white px-4 py-4 shadow-sm">
                                <div>
                                    <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Applications</p>
                                    <p class="mt-1 text-2xl font-bold text-slate-900">{{ $applicationCount }}</p>
                                </div>
                                <span class="rounded-full bg-amber-500/10 px-3 py-1 text-xs font-semibold text-amber-600">New</span>
                            </div>

                            <div class="flex items-center justify-between rounded-2xl border border-white/60 bg-white px-4 py-4 shadow-sm">
                                <div>
                                    <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Contacts</p>
                                    <p class="mt-1 text-2xl font-bold text-slate-900">{{ $contactCount }}</p>
                                </div>
                                <span class="rounded-full bg-sky-500/10 px-3 py-1 text-xs font-semibold text-sky-600">Inbox</span>
                            </div>

                            <div class="flex items-center justify-between rounded-2xl border border-white/60 bg-white px-4 py-4 shadow-sm">
                                <div>
                                    <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Projects</p>
                                    <p class="mt-1 text-2xl font-bold text-slate-900">{{ $projectCount }}</p>
                                </div>
                                <span class="rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">Live</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="grid gap-6 xl:grid-cols-12">
            <div class="xl:col-span-12">
                <div class="rounded-[2rem] border border-slate-200/70 bg-white/90 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-slate-500">Recent contacts</p>
                            <h3 class="mt-1 text-xl font-semibold text-slate-900">Latest contact form submissions</h3>
                        </div>
                        <a href="{{ route('contacts.index') }}" class="text-sm font-semibold text-[#FD5528]">View all</a>
                    </div>

                    <div class="mt-6 overflow-x-auto">
                        <table class="min-w-full divide-y divide-slate-200/70 text-left">
                            <thead class="text-xs uppercase tracking-[0.3em] text-slate-400">
                                <tr>
                                    <th class="py-3 pr-4 font-semibold">Name</th>
                                    <th class="py-3 pr-4 font-semibold">Email</th>
                                    <th class="py-3 pr-4 font-semibold">Phone</th>
                                    <th class="py-3 pr-4 font-semibold">Message</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200/70 text-sm">
                                @forelse($recentContacts as $contact)
                                    <tr>
                                        <td class="py-4 pr-4 font-medium text-slate-900">{{ trim($contact->first_name.' '.$contact->last_name) ?: $contact->first_name }}</td>
                                        <td class="py-4 pr-4 text-slate-500">{{ $contact->email }}</td>
                                        <td class="py-4 pr-4 text-slate-500">{{ $contact->phone }}</td>
                                        <td class="py-4 pr-4 text-slate-500">{{ \Illuminate\Support\Str::limit($contact->message, 90) }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="py-10 text-center text-slate-500">No contact submissions yet.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <section class="grid gap-6 xl:grid-cols-12">
            <div class="xl:col-span-12">
                <div class="rounded-[2rem] border border-slate-200/70 bg-white/90 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
                    <div class="flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
                        <div>
                            <p class="text-sm text-slate-500">Main menu items</p>
                            <h3 class="mt-1 text-2xl font-bold text-slate-900">Navigate the admin workspace faster</h3>
                        </div>
                        <p class="max-w-2xl text-sm leading-6 text-slate-500">
                            These shortcuts keep the essential admin areas one click away while preserving the same visual language across the dashboard.
                        </p>
                    </div>

                    <div class="mt-6 grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                        <a href="{{ route('pages.index') }}" class="group rounded-[1.75rem] border border-slate-200/70 bg-slate-50 p-5 transition hover:-translate-y-0.5 hover:border-[#FD5528]/30 hover:shadow-lg">
                            <div class="flex items-center justify-between">
                                <div class="rounded-2xl bg-[#FD5528]/10 p-3 text-[#FD5528] transition group-hover:scale-105">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 5.5A1.5 1.5 0 0 1 6 4h9l4.5 4.5V19A1.5 1.5 0 0 1 18 20.5H6A1.5 1.5 0 0 1 4.5 19V5.5Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 4v4.5h4.5" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 11h8M8 15h5" />
                                    </svg>
                                </div>
                                <span class="text-xs font-semibold uppercase tracking-[0.32em] text-slate-400">Content</span>
                            </div>
                            <h4 class="mt-4 text-lg font-semibold text-slate-900 transition group-hover:text-[#FD5528]">Pages</h4>
                            <p class="mt-2 text-sm text-slate-500">Create and edit landing pages, service pages, and sections.</p>
                        </a>

                        <a href="{{ route('categories.index') }}" class="group rounded-[1.75rem] border border-slate-200/70 bg-slate-50 p-5 transition hover:-translate-y-0.5 hover:border-[#FD5528]/30 hover:shadow-lg">
                            <div class="flex items-center justify-between">
                                <div class="rounded-2xl bg-amber-500/10 p-3 text-amber-600 transition group-hover:scale-105">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 7.5A2 2 0 0 1 6.5 5.5h11A2 2 0 0 1 19.5 7.5v9A2 2 0 0 1 17.5 18.5h-11a2 2 0 0 1-2-2v-9Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h8M8 13h5" />
                                    </svg>
                                </div>
                                <span class="text-xs font-semibold uppercase tracking-[0.32em] text-slate-400">Library</span>
                            </div>
                            <h4 class="mt-4 text-lg font-semibold text-slate-900 transition group-hover:text-[#FD5528]">Categories</h4>
                            <p class="mt-2 text-sm text-slate-500">Organize blog topics before publishing new content.</p>
                        </a>

                        <a href="{{ route('blogs.index') }}" class="group rounded-[1.75rem] border border-slate-200/70 bg-slate-50 p-5 transition hover:-translate-y-0.5 hover:border-[#FD5528]/30 hover:shadow-lg">
                            <div class="flex items-center justify-between">
                                <div class="rounded-2xl bg-emerald-500/10 p-3 text-emerald-600 transition group-hover:scale-105">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 6.5A1.5 1.5 0 0 1 6.5 5h9l3 3V17.5A1.5 1.5 0 0 1 17 19H6.5A1.5 1.5 0 0 1 5 17.5v-11Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h7M8 13h5" />
                                    </svg>
                                </div>
                                <span class="text-xs font-semibold uppercase tracking-[0.32em] text-slate-400">Publishing</span>
                            </div>
                            <h4 class="mt-4 text-lg font-semibold text-slate-900 transition group-hover:text-[#FD5528]">Blogs</h4>
                            <p class="mt-2 text-sm text-slate-500">Manage drafts, published posts, and post categories.</p>
                        </a>

                        <a href="{{ route('services.index') }}" class="group rounded-[1.75rem] border border-slate-200/70 bg-slate-50 p-5 transition hover:-translate-y-0.5 hover:border-[#FD5528]/30 hover:shadow-lg">
                            <div class="flex items-center justify-between">
                                <div class="rounded-2xl bg-sky-500/10 p-3 text-sky-600 transition group-hover:scale-105">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3.5l1.9 4 4.4.6-3.2 3.1.8 4.4-3.9-2.1-3.9 2.1.8-4.4-3.2-3.1 4.4-.6L12 3.5Z" />
                                    </svg>
                                </div>
                                <span class="text-xs font-semibold uppercase tracking-[0.32em] text-slate-400">Offerings</span>
                            </div>
                            <h4 class="mt-4 text-lg font-semibold text-slate-900 transition group-hover:text-[#FD5528]">Services</h4>
                            <p class="mt-2 text-sm text-slate-500">Keep service cards updated across the site.</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="grid gap-6 xl:grid-cols-12">
            <div class="xl:col-span-6">
                <div class="rounded-[2rem] border border-slate-200/70 bg-white/90 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-slate-500">Recent categories</p>
                            <h3 class="mt-1 text-xl font-semibold text-slate-900">Latest category entries</h3>
                        </div>
                        <a href="{{ route('categories.index') }}" class="text-sm font-semibold text-[#FD5528]">See all</a>
                    </div>

                    <div class="mt-6 space-y-3">
                        @forelse($recentCategories as $category)
                            <div class="flex items-start justify-between gap-4 rounded-2xl border border-slate-200/70 bg-slate-50 px-4 py-4">
                                <div>
                                    <p class="font-semibold text-slate-900">{{ $category->name }}</p>
                                    <p class="mt-1 text-sm leading-6 text-slate-500">
                                        {{ $category->description ? \Illuminate\Support\Str::limit($category->description, 90) : 'No description yet.' }}
                                    </p>
                                </div>
                                <span class="shrink-0 rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">ID {{ $category->id }}</span>
                            </div>
                        @empty
                            <div class="rounded-2xl border border-dashed border-slate-300 px-4 py-8 text-center text-slate-500">
                                No categories found.
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>

            <div class="xl:col-span-6">
                <div class="rounded-[2rem] border border-slate-200/70 bg-white/90 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-slate-500">Recent blogs</p>
                            <h3 class="mt-1 text-xl font-semibold text-slate-900">Latest post drafts</h3>
                        </div>
                        <a href="{{ route('blogs.index') }}" class="text-sm font-semibold text-[#FD5528]">See all</a>
                    </div>

                    <div class="mt-6 space-y-3">
                        @forelse($recentBlogs as $blog)
                            <div class="rounded-2xl border border-slate-200/70 bg-slate-50 px-4 py-4">
                                <div class="flex items-start justify-between gap-4">
                                    <div>
                                        <p class="font-semibold text-slate-900">{{ $blog->title }}</p>
                                        <p class="mt-1 text-sm leading-6 text-slate-500">
                                            {{ $blog->category?->name ?? 'Uncategorized' }} · {{ $blog->excerpt ? \Illuminate\Support\Str::limit($blog->excerpt, 70) : 'No excerpt yet.' }}
                                        </p>
                                    </div>
                                    @if($blog->is_published)
                                        <span class="shrink-0 rounded-full bg-emerald-500/10 px-3 py-1 text-xs font-semibold text-emerald-600">Published</span>
                                    @else
                                        <span class="shrink-0 rounded-full bg-amber-500/10 px-3 py-1 text-xs font-semibold text-amber-600">Draft</span>
                                    @endif
                                </div>
                            </div>
                        @empty
                            <div class="rounded-2xl border border-dashed border-slate-300 px-4 py-8 text-center text-slate-500">
                                No blog posts found.
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>

        <section class="grid gap-6 xl:grid-cols-12">
            <div class="xl:col-span-12">
                <div class="rounded-[2rem] border border-slate-200/70 bg-white/90 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-slate-500">Recent careers</p>
                            <h3 class="mt-1 text-xl font-semibold text-slate-900">Latest openings</h3>
                        </div>
                        <a href="{{ route('careers.index') }}" class="text-sm font-semibold text-[#FD5528]">See all</a>
                    </div>

                    <div class="mt-6 grid gap-3 md:grid-cols-3">
                        @forelse($recentCareers as $career)
                            <div class="rounded-2xl border border-slate-200/70 bg-slate-50 p-4">
                                <div class="flex items-start justify-between gap-3">
                                    <div>
                                        <p class="font-semibold text-slate-900">{{ $career->title }}</p>
                                        <p class="mt-1 text-sm text-slate-500">
                                            {{ collect([$career->employment_type, $career->work_mode, $career->experience])->filter()->implode(' · ') ?: 'No details yet.' }}
                                        </p>
                                    </div>
                                    @if($career->is_active)
                                        <span class="rounded-full bg-emerald-500/10 px-3 py-1 text-xs font-semibold text-emerald-600">{{ $career->cta_label ?: 'Open' }}</span>
                                    @else
                                        <span class="rounded-full bg-slate-500/10 px-3 py-1 text-xs font-semibold text-slate-500">Closed</span>
                                    @endif
                                </div>
                            </div>
                        @empty
                            <div class="rounded-2xl border border-dashed border-slate-300 px-4 py-8 text-center text-slate-500 md:col-span-3">
                                No career openings found.
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>

        <section class="grid gap-6 xl:grid-cols-12">
            <div class="xl:col-span-12">
                <div class="rounded-[2rem] border border-slate-200/70 bg-white/90 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-slate-500">Recent applications</p>
                            <h3 class="mt-1 text-xl font-semibold text-slate-900">Latest career form submissions</h3>
                        </div>
                        <a href="{{ route('leads.index') }}" class="text-sm font-semibold text-[#FD5528]">View all</a>
                    </div>

                    <div class="mt-6 overflow-x-auto">
                        <table class="min-w-full divide-y divide-slate-200/70 text-left">
                            <thead class="text-xs uppercase tracking-[0.3em] text-slate-400">
                                <tr>
                                    <th class="py-3 pr-4 font-semibold">Name</th>
                                    <th class="py-3 pr-4 font-semibold">Phone</th>
                                    <th class="py-3 pr-4 font-semibold">Email</th>
                                    <th class="py-3 pr-4 font-semibold">Position</th>
                                    <th class="py-3 pr-4 font-semibold">Resume</th>
                                    <th class="py-3 pr-4 font-semibold">About</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200/70 text-sm">
                                @forelse($recentApplications as $application)
                                    <tr>
                                        <td class="py-4 pr-4 font-medium text-slate-900">{{ $application->full_name }}</td>
                                        <td class="py-4 pr-4 text-slate-500">{{ $application->phone ?? '-' }}</td>
                                        <td class="py-4 pr-4 text-slate-500">{{ $application->email }}</td>
                                        <td class="py-4 pr-4 text-slate-500">{{ $application->position }}</td>
                                        <td class="py-4 pr-4 text-slate-500">
                                            @if($application->resume)
                                                <a href="{{ asset('storage/' . $application->resume) }}" target="_blank" class="font-semibold text-[#FD5528]">View resume</a>
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="py-4 pr-4 text-slate-500">
                                            {{ $application->about ? \Illuminate\Support\Str::limit($application->about, 90) : 'No note provided.' }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="py-10 text-center text-slate-500">No applications received yet.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <section class="grid gap-6 xl:grid-cols-12">
            <div class="xl:col-span-12">
                <div class="rounded-[2rem] border border-slate-200/70 bg-white/90 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-slate-500">Recent projects</p>
                            <h3 class="mt-1 text-xl font-semibold text-slate-900">Latest portfolio items</h3>
                        </div>
                        <a href="{{ route('projects.index') }}" class="text-sm font-semibold text-[#FD5528]">See all</a>
                    </div>

                    <div class="mt-6 grid gap-3 md:grid-cols-2 xl:grid-cols-4">
                        @forelse($recentProjects as $project)
                            <div class="rounded-2xl border border-slate-200/70 bg-slate-50 p-4">
                                <div class="flex items-start justify-between gap-3">
                                    <div>
                                        <p class="font-semibold text-slate-900">{{ $project->title }}</p>
                                        <p class="mt-1 text-sm text-slate-500">
                                            {{ $project->category ?? 'General' }} · {{ $project->client_name ?? 'No client yet' }}
                                        </p>
                                    </div>
                                    <span class="rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">{{ $project->status }}</span>
                                </div>
                            </div>
                        @empty
                            <div class="rounded-2xl border border-dashed border-slate-300 px-4 py-8 text-center text-slate-500 md:col-span-2 xl:col-span-4">
                                No projects found.
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>

        <section class="grid gap-6 xl:grid-cols-12">
            <div class="xl:col-span-12">
                <div class="rounded-[2rem] border border-slate-200/70 bg-white/90 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-slate-500">Recent services</p>
                            <h3 class="mt-1 text-xl font-semibold text-slate-900">Latest service cards</h3>
                        </div>
                        <a href="{{ route('services.index') }}" class="text-sm font-semibold text-[#FD5528]">See all</a>
                    </div>

                    <div class="mt-6 grid gap-3 md:grid-cols-2 xl:grid-cols-4">
                        @forelse($recentServices as $service)
                            <div class="rounded-2xl border border-slate-200/70 bg-slate-50 p-4">
                                <div class="flex items-start justify-between gap-3">
                                    <div>
                                        <p class="font-semibold text-slate-900">{{ $service->title }}</p>
                                        <p class="mt-1 text-sm text-slate-500">
                                            {{ $service->summary ? \Illuminate\Support\Str::limit($service->summary, 70) : 'No summary yet.' }}
                                        </p>
                                    </div>
                                    <span class="rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">{{ $service->status ? 'Active' : 'Inactive' }}</span>
                                </div>
                            </div>
                        @empty
                            <div class="rounded-2xl border border-dashed border-slate-300 px-4 py-8 text-center text-slate-500 md:col-span-2 xl:col-span-4">
                                No services found.
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>

        <section class="grid gap-6 xl:grid-cols-12">
            <div class="xl:col-span-12">
                <div class="rounded-[2rem] border border-[#FD5528]/15 bg-gradient-to-r from-[#FD5528]/10 via-white to-slate-50 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
                    <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
                        <div>
                            <p class="text-sm font-medium text-[#FD5528]">Content flow</p>
                            <h3 class="mt-1 text-2xl font-bold text-slate-900">Everything you need to keep the site moving</h3>
                            <p class="mt-2 max-w-2xl text-sm leading-6 text-slate-500">
                                Use the menu shortcuts above, then move into pages, categories, blogs, services, projects, and careers without leaving the same clean admin system.
                            </p>
                        </div>

                        <div class="grid gap-3 sm:grid-cols-3">
                            <a href="{{ route('blogs.create') }}" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20]">
                                Write Blog
                            </a>
                            <a href="{{ route('pages.create') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">
                                Create Page
                            </a>
                            <a href="{{ route('services.index') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">
                                Open Services
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
@endsection
