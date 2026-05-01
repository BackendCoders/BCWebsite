@extends('layout.main')

@section('content')
<div class="space-y-6 mt-32 relative overflow-hidden">
    <div class="pointer-events-none absolute inset-x-0 top-0 -z-10 h-56 bg-gradient-to-b from-[#FD5528]/10 via-transparent to-transparent blur-3xl"></div>
    <div class="pointer-events-none absolute -right-20 top-16 -z-10 h-48 w-48 rounded-full bg-[#FD5528]/10 blur-3xl"></div>
    <div class="pointer-events-none absolute -left-24 top-28 -z-10 h-64 w-64 rounded-full bg-sky-400/10 blur-3xl"></div>

    <div class="flex flex-col gap-4 rounded-[2.25rem] border border-slate-200/70 bg-white/75 p-6 shadow-2xl shadow-slate-200/40 backdrop-blur-xl sm:flex-row sm:items-center sm:justify-between">
        <div class="space-y-2">
            <span class="inline-flex items-center rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-[#FD5528]">Portfolio Manager</span>
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-slate-900">Projects</h2>
                <p class="mt-1 max-w-2xl text-sm text-slate-500">Manage portfolio projects from the backend with a clean overview of live work, featured items, and delivery status.</p>
            </div>
        </div>

        <a href="{{ route('projects.create') }}" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20] hover:shadow-xl hover:shadow-[#FD5528]/30 active:scale-[0.98]">
            + Add Project
        </a>
    </div>

    @if(session('success'))
        <div class="rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-emerald-700 shadow-sm shadow-emerald-100/60">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
        @forelse($projects as $project)
            <div class="group overflow-hidden rounded-[2rem] border border-slate-200/70 bg-white/85 shadow-xl shadow-slate-200/40 backdrop-blur-xl transition duration-300 hover:-translate-y-1 hover:shadow-2xl hover:shadow-slate-300/40">
                <div class="relative h-48 overflow-hidden">
                    @if($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                    @else
                        <div class="flex h-full w-full items-center justify-center bg-gradient-to-br from-slate-100 to-slate-200 text-sm font-medium text-slate-400">No image</div>
                    @endif

                    <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-slate-950/40 via-transparent to-transparent"></div>

                    @if($project->is_featured)
                        <span class="absolute left-4 top-4 rounded-full bg-[#FD5528] px-3 py-1 text-xs font-semibold text-white shadow-lg shadow-[#FD5528]/30">Featured</span>
                    @endif

                    <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between gap-3">
                        <span class="inline-flex items-center rounded-full bg-white/90 px-3 py-1 text-xs font-semibold text-slate-700 backdrop-blur">
                            {{ $project->category ?? 'General' }}
                        </span>
                        <span class="inline-flex items-center rounded-full bg-emerald-500/90 px-3 py-1 text-xs font-semibold text-white backdrop-blur">
                            {{ $project->status }}
                        </span>
                    </div>
                </div>

                <div class="space-y-4 p-6">
                    <div>
                        <div class="flex items-start justify-between gap-3">
                            <div class="space-y-1">
                                <h3 class="text-xl font-bold tracking-tight text-slate-900">{{ $project->title }}</h3>
                                <p class="text-xs font-medium uppercase tracking-[0.18em] text-slate-400">{{ $project->completed_at?->format('M Y') ?? 'In progress' }}</p>
                            </div>
                            <span class="rounded-full bg-emerald-500/10 px-3 py-1 text-xs font-semibold text-emerald-600">{{ $project->status }}</span>
                        </div>
                        <p class="mt-2 text-sm leading-6 text-slate-500">
                            {{ $project->description ? \Illuminate\Support\Str::limit($project->description, 90) : 'No description yet.' }}
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-2 text-xs">
                        @foreach(array_filter(array_map('trim', explode(',', (string) $project->technologies))) as $tech)
                            <span class="rounded-full bg-[#FD5528]/10 px-3 py-1 font-semibold text-[#FD5528] ring-1 ring-[#FD5528]/10">{{ $tech }}</span>
                        @endforeach
                    </div>

                    <div class="flex items-center justify-between rounded-2xl bg-slate-50 px-4 py-3 text-sm text-slate-500">
                        <span class="font-medium text-slate-600">{{ $project->category ?? 'General' }}</span>
                        <span class="font-medium text-slate-600">{{ $project->completed_at?->format('M Y') ?? 'In progress' }}</span>
                    </div>

                    <div class="flex items-center justify-between gap-2">
                        <a href="{{ $project->live_url ?: '#' }}" target="_blank" class="inline-flex items-center gap-2 font-semibold text-[#FD5528] transition hover:text-[#e94c20]">
                            <span>View live</span>
                            <span aria-hidden="true">-&gt;</span>
                        </a>
                        <div class="inline-flex gap-2">
                            <a href="{{ route('projects.edit', $project) }}" class="rounded-xl bg-sky-500/10 px-3 py-2 text-sm font-semibold text-sky-600 transition hover:bg-sky-500/20 hover:text-sky-700">Edit</a>
                            <form action="{{ route('projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Delete this project?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="rounded-xl bg-rose-500/10 px-3 py-2 text-sm font-semibold text-rose-600 transition hover:bg-rose-500/20 hover:text-rose-700">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="rounded-[2rem] border border-dashed border-slate-300 bg-white/70 px-6 py-14 text-center text-slate-500 shadow-lg shadow-slate-100/40 md:col-span-2 xl:col-span-3">
                <div class="mx-auto mb-3 flex h-14 w-14 items-center justify-center rounded-full bg-[#FD5528]/10 text-lg font-bold text-[#FD5528]">
                    +
                </div>
                <p class="text-base font-semibold text-slate-700">No projects found.</p>
                <p class="mt-1 text-sm text-slate-500">Add your first project to showcase work here.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
