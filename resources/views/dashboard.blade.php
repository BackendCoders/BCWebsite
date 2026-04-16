@extends('layout.main')

@section('content')
<div class="space-y-6">
    <section class="grid gap-6 xl:grid-cols-12">
        <div class="xl:col-span-8">
            <div class="rounded-[2rem] border border-slate-200/70 bg-white/80 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl dark:border-white/10 dark:bg-white/5 dark:shadow-black/20 sm:p-8">
                <div class="flex flex-col gap-6 lg:flex-row lg:items-start lg:justify-between">
                    <div class="max-w-2xl">
                        <span class="inline-flex items-center gap-2 rounded-full border border-[#FD5528]/20 bg-[#FD5528]/10 px-4 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
                            <span class="h-2 w-2 rounded-full bg-[#FD5528]"></span>
                            Backend overview
                        </span>
                        <h1 class="mt-5 text-3xl font-bold tracking-tight text-slate-900 dark:text-white sm:text-4xl">
                            Manage categories and blog content from one clean dashboard.
                        </h1>
                        <p class="mt-4 max-w-xl text-sm leading-6 text-slate-500 dark:text-slate-300 sm:text-base">
                            This workspace shows live counts from your database, recent categories, and the latest blog posts while keeping the orange, white, and gray theme consistent.
                        </p>

                         <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 rounded-[1.75rem] bg-slate-50 p-4 ring-1 ring-slate-200/70 dark:bg-white/5 dark:ring-white/10">
                        <div class="flex items-center justify-between rounded-2xl bg-white p-4 shadow-sm dark:bg-slate-950/40">
                            <div>
                                <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Categories</p>
                                <p class="mt-1 text-2xl font-bold text-slate-900 dark:text-white">{{ $categoryCount }}</p>
                            </div>
                            <span class="rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">Live</span>
                        </div>
                        <div class="flex items-center justify-between rounded-2xl bg-white p-4 shadow-sm dark:bg-slate-950/40">
                            <div>
                                <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Blogs</p>
                                <p class="mt-1 text-2xl font-bold text-slate-900 dark:text-white">{{ $blogCount }}</p>
                            </div>
                            <span class="rounded-full bg-emerald-500/10 px-3 py-1 text-xs font-semibold text-emerald-600">Published</span>
                        </div>
                        <div class="flex items-center justify-between rounded-2xl bg-white p-4 shadow-sm dark:bg-slate-950/40">
                            <div>
                                <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Careers</p>
                                <p class="mt-1 text-2xl font-bold text-slate-900 dark:text-white">{{ $careerCount }}</p>
                            </div>
                            <span class="rounded-full bg-sky-500/10 px-3 py-1 text-xs font-semibold text-sky-600">Hiring</span>
                        </div>
                        <div class="flex items-center justify-between rounded-2xl bg-white p-4 shadow-sm dark:bg-slate-950/40">
                            <div>
                                <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Applications</p>
                                <p class="mt-1 text-2xl font-bold text-slate-900 dark:text-white">{{ $applicationCount }}</p>
                            </div>
                            <span class="rounded-full bg-amber-500/10 px-3 py-1 text-xs font-semibold text-amber-600">New</span>
                        </div>
                        <div class="flex items-center justify-between rounded-2xl bg-white p-4 shadow-sm dark:bg-slate-950/40">
                            <div>
                                <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Projects</p>
                                <p class="mt-1 text-2xl font-bold text-slate-900 dark:text-white">{{ $projectCount }}</p>
                            </div>
                            <span class="rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">Live</span>
                        </div>
                        <div class="flex items-center justify-between rounded-2xl bg-white p-4 shadow-sm dark:bg-slate-950/40">
                            <div>
                                <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Services</p>
                                <p class="mt-1 text-2xl font-bold text-slate-900 dark:text-white">{{ $serviceCount }}</p>
                            </div>
                            <span class="rounded-full bg-emerald-500/10 px-3 py-1 text-xs font-semibold text-emerald-600">Ready</span>
                        </div>
                    </div>
                    </div>

                    <!-- <div class="grid min-w-[240px] gap-4 rounded-[1.75rem] bg-slate-50 p-4 ring-1 ring-slate-200/70 dark:bg-white/5 dark:ring-white/10">
                        <div class="flex items-center justify-between rounded-2xl bg-white p-4 shadow-sm dark:bg-slate-950/40">
                            <div>
                                <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Categories</p>
                                <p class="mt-1 text-2xl font-bold text-slate-900 dark:text-white">{{ $categoryCount }}</p>
                            </div>
                            <span class="rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">Live</span>
                        </div>
                        <div class="flex items-center justify-between rounded-2xl bg-white p-4 shadow-sm dark:bg-slate-950/40">
                            <div>
                                <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Blogs</p>
                                <p class="mt-1 text-2xl font-bold text-slate-900 dark:text-white">{{ $blogCount }}</p>
                            </div>
                            <span class="rounded-full bg-emerald-500/10 px-3 py-1 text-xs font-semibold text-emerald-600">Published</span>
                        </div>
                        <div class="flex items-center justify-between rounded-2xl bg-white p-4 shadow-sm dark:bg-slate-950/40">
                            <div>
                                <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Careers</p>
                                <p class="mt-1 text-2xl font-bold text-slate-900 dark:text-white">{{ $careerCount }}</p>
                            </div>
                            <span class="rounded-full bg-sky-500/10 px-3 py-1 text-xs font-semibold text-sky-600">Hiring</span>
                        </div>
                        <div class="flex items-center justify-between rounded-2xl bg-white p-4 shadow-sm dark:bg-slate-950/40">
                            <div>
                                <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Applications</p>
                                <p class="mt-1 text-2xl font-bold text-slate-900 dark:text-white">{{ $applicationCount }}</p>
                            </div>
                            <span class="rounded-full bg-amber-500/10 px-3 py-1 text-xs font-semibold text-amber-600">New</span>
                        </div>
                        <div class="flex items-center justify-between rounded-2xl bg-white p-4 shadow-sm dark:bg-slate-950/40">
                            <div>
                                <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Projects</p>
                                <p class="mt-1 text-2xl font-bold text-slate-900 dark:text-white">{{ $projectCount }}</p>
                            </div>
                            <span class="rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">Live</span>
                        </div>
                        <div class="flex items-center justify-between rounded-2xl bg-white p-4 shadow-sm dark:bg-slate-950/40">
                            <div>
                                <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Services</p>
                                <p class="mt-1 text-2xl font-bold text-slate-900 dark:text-white">{{ $serviceCount }}</p>
                            </div>
                            <span class="rounded-full bg-emerald-500/10 px-3 py-1 text-xs font-semibold text-emerald-600">Ready</span>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

        <div class="grid gap-6 sm:grid-cols-2 xl:col-span-4 xl:grid-cols-1">
            <div class="rounded-[2rem] border border-slate-200/70 bg-white/80 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl dark:border-white/10 dark:bg-white/5 dark:shadow-black/20">
                <p class="text-sm text-slate-500 dark:text-slate-300">Quick action</p>
                <h3 class="mt-2 text-2xl font-bold text-slate-900 dark:text-white">Start a new blog</h3>
                <p class="mt-3 text-sm leading-6 text-slate-500 dark:text-slate-400">
                    Create posts, assign a category, and publish when ready.
                </p>
                <a href="{{ route('blogs.create') }}" class="mt-5 inline-flex rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20]">
                    + Add Blog
                </a>
            </div>

            <div class="rounded-[2rem] border border-slate-200/70 bg-white/80 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl dark:border-white/10 dark:bg-white/5 dark:shadow-black/20">
                <p class="text-sm text-slate-500 dark:text-slate-300">Quick action</p>
                <h3 class="mt-2 text-2xl font-bold text-slate-900 dark:text-white">Review categories</h3>
                <p class="mt-3 text-sm leading-6 text-slate-500 dark:text-slate-400">
                    Keep the category list organized before adding new posts.
                </p>
                <a href="{{ route('categories.index') }}" class="mt-5 inline-flex rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528] dark:border-white/10 dark:bg-slate-950/40 dark:text-slate-200">
                    View Categories
                </a>
            </div>
        </div>
    </section>

    <section class="grid gap-6 xl:grid-cols-12">
        <div class="xl:col-span-6">
            <div class="rounded-[2rem] border border-slate-200/70 bg-white/80 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl dark:border-white/10 dark:bg-white/5 dark:shadow-black/20">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Recent categories</p>
                        <h3 class="mt-1 text-xl font-semibold text-slate-900 dark:text-white">Latest category entries</h3>
                    </div>
                    <a href="{{ route('categories.index') }}" class="text-sm font-semibold text-[#FD5528]">See all</a>
                </div>

                <div class="mt-6 space-y-3">
                    @forelse($recentCategories as $category)
                        <div class="flex items-center justify-between rounded-2xl border border-slate-200/70 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-slate-950/40">
                            <div>
                                <p class="font-semibold text-slate-900 dark:text-white">{{ $category->name }}</p>
                                <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">
                                    {{ $category->description ? \Illuminate\Support\Str::limit($category->description, 80) : 'No description yet.' }}
                                </p>
                            </div>
                            <span class="rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">ID {{ $category->id }}</span>
                        </div>
                    @empty
                        <div class="rounded-2xl border border-dashed border-slate-300 px-4 py-8 text-center text-slate-500 dark:border-white/10 dark:text-slate-400">
                            No categories found.
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

        <div class="xl:col-span-6">
            <div class="rounded-[2rem] border border-slate-200/70 bg-white/80 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl dark:border-white/10 dark:bg-white/5 dark:shadow-black/20">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Recent blogs</p>
                        <h3 class="mt-1 text-xl font-semibold text-slate-900 dark:text-white">Latest post drafts</h3>
                    </div>
                    <a href="{{ route('blogs.index') }}" class="text-sm font-semibold text-[#FD5528]">See all</a>
                </div>

                <div class="mt-6 space-y-3">
                    @forelse($recentBlogs as $blog)
                        <div class="rounded-2xl border border-slate-200/70 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-slate-950/40">
                            <div class="flex items-start justify-between gap-4">
                                <div>
                                    <p class="font-semibold text-slate-900 dark:text-white">{{ $blog->title }}</p>
                                    <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">
                                        {{ $blog->category?->name ?? 'Uncategorized' }} · {{ $blog->excerpt ? \Illuminate\Support\Str::limit($blog->excerpt, 70) : 'No excerpt yet.' }}
                                    </p>
                                </div>
                                @if($blog->is_published)
                                    <span class="rounded-full bg-emerald-500/10 px-3 py-1 text-xs font-semibold text-emerald-600">Published</span>
                                @else
                                    <span class="rounded-full bg-amber-500/10 px-3 py-1 text-xs font-semibold text-amber-600">Draft</span>
                                @endif
                            </div>
                        </div>
                    @empty
                        <div class="rounded-2xl border border-dashed border-slate-300 px-4 py-8 text-center text-slate-500 dark:border-white/10 dark:text-slate-400">
                            No blog posts found.
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

   

    <section class="grid gap-6 xl:grid-cols-12">
        <div class="xl:col-span-12">
            <div class="rounded-[2rem] border border-slate-200/70 bg-white/80 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl dark:border-white/10 dark:bg-white/5 dark:shadow-black/20">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Recent careers</p>
                        <h3 class="mt-1 text-xl font-semibold text-slate-900 dark:text-white">Latest openings</h3>
                    </div>
                    <a href="{{ route('careers.index') }}" class="text-sm font-semibold text-[#FD5528]">See all</a>
                </div>

                <div class="mt-6 grid gap-3 md:grid-cols-3">
                    @forelse($recentCareers as $career)
                        <div class="rounded-2xl border border-slate-200/70 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-slate-950/40">
                            <div class="flex items-start justify-between gap-3">
                                <div>
                                    <p class="font-semibold text-slate-900 dark:text-white">{{ $career->title }}</p>
                                    <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">
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
                        <div class="rounded-2xl border border-dashed border-slate-300 px-4 py-8 text-center text-slate-500 dark:border-white/10 dark:text-slate-400 md:col-span-3">
                            No career openings found.
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <section class="grid gap-6 xl:grid-cols-12">
        <div class="xl:col-span-12">
            <div class="rounded-[2rem] border border-slate-200/70 bg-white/80 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl dark:border-white/10 dark:bg-white/5 dark:shadow-black/20">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Recent applications</p>
                        <h3 class="mt-1 text-xl font-semibold text-slate-900 dark:text-white">Latest career form submissions</h3>
                    </div>
                </div>

                <div class="mt-6 overflow-x-auto">
                    <table class="min-w-full divide-y divide-slate-200/70 text-left dark:divide-white/10">
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
                        <tbody class="divide-y divide-slate-200/70 text-sm dark:divide-white/10">
                            @forelse($recentApplications as $application)
                                <tr>
                                    <td class="py-4 pr-4 font-medium text-slate-900 dark:text-white">{{ $application->full_name }}</td>
                                    <td class="py-4 pr-4 text-slate-500 dark:text-slate-300">{{ $application->phone ?? '-' }}</td>
                                    <td class="py-4 pr-4 text-slate-500 dark:text-slate-300">{{ $application->email }}</td>
                                    <td class="py-4 pr-4 text-slate-500 dark:text-slate-300">{{ $application->position }}</td>
                                    <td class="py-4 pr-4 text-slate-500 dark:text-slate-300">
                                        @if($application->resume)
                                            <a href="{{ asset('storage/' . $application->resume) }}" target="_blank" class="font-semibold text-[#FD5528]">View resume</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="py-4 pr-4 text-slate-500 dark:text-slate-300">
                                        {{ $application->about ? \Illuminate\Support\Str::limit($application->about, 90) : 'No note provided.' }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="py-10 text-center text-slate-500 dark:text-slate-400">No applications received yet.</td>
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
            <div class="rounded-[2rem] border border-slate-200/70 bg-white/80 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl dark:border-white/10 dark:bg-white/5 dark:shadow-black/20">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Recent projects</p>
                        <h3 class="mt-1 text-xl font-semibold text-slate-900 dark:text-white">Latest portfolio items</h3>
                    </div>
                    <a href="{{ route('projects.index') }}" class="text-sm font-semibold text-[#FD5528]">See all</a>
                </div>

                <div class="mt-6 grid gap-3 md:grid-cols-2 xl:grid-cols-4">
                    @forelse($recentProjects as $project)
                        <div class="rounded-2xl border border-slate-200/70 bg-slate-50 p-4 dark:border-white/10 dark:bg-slate-950/40">
                            <div class="flex items-start justify-between gap-3">
                                <div>
                                    <p class="font-semibold text-slate-900 dark:text-white">{{ $project->title }}</p>
                                    <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">
                                        {{ $project->category ?? 'General' }} · {{ $project->client_name ?? 'No client yet' }}
                                    </p>
                                </div>
                                <span class="rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">{{ $project->status }}</span>
                            </div>
                        </div>
                    @empty
                        <div class="rounded-2xl border border-dashed border-slate-300 px-4 py-8 text-center text-slate-500 dark:border-white/10 dark:text-slate-400 md:col-span-2 xl:col-span-4">
                            No projects found.
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <section class="grid gap-6 xl:grid-cols-12">
        <div class="xl:col-span-12">
            <div class="rounded-[2rem] border border-slate-200/70 bg-white/80 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl dark:border-white/10 dark:bg-white/5 dark:shadow-black/20">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Recent services</p>
                        <h3 class="mt-1 text-xl font-semibold text-slate-900 dark:text-white">Latest service cards</h3>
                    </div>
                    <a href="{{ route('services.index') }}" class="text-sm font-semibold text-[#FD5528]">See all</a>
                </div>

                <div class="mt-6 grid gap-3 md:grid-cols-2 xl:grid-cols-4">
                    @forelse($recentServices as $service)
                        <div class="rounded-2xl border border-slate-200/70 bg-slate-50 p-4 dark:border-white/10 dark:bg-slate-950/40">
                            <div class="flex items-start justify-between gap-3">
                                <div>
                                    <p class="font-semibold text-slate-900 dark:text-white">{{ $service->title }}</p>
                                    <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">
                                        {{ $service->summary ? \Illuminate\Support\Str::limit($service->summary, 70) : 'No summary yet.' }}
                                    </p>
                                </div>
                                <span class="rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">{{ $service->status ? 'Active' : 'Inactive' }}</span>
                            </div>
                        </div>
                    @empty
                        <div class="rounded-2xl border border-dashed border-slate-300 px-4 py-8 text-center text-slate-500 dark:border-white/10 dark:text-slate-400 md:col-span-2 xl:col-span-4">
                            No services found.
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
