@extends('layout.main')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h2 class="text-3xl font-bold text-slate-900">Projects</h2>
            <p class="mt-1 text-sm text-slate-500">Manage portfolio projects from the backend.</p>
        </div>

        <a href="{{ route('projects.create') }}" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20]">
            + Add Project
        </a>
    </div>

    @if(session('success'))
        <div class="rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-emerald-700">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
        @forelse($projects as $project)
            <div class="overflow-hidden rounded-[2rem] border border-slate-200/70 bg-white/80 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
                <div class="relative h-48">
                    @if($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="h-full w-full object-cover">
                    @else
                        <div class="flex h-full w-full items-center justify-center bg-slate-100 text-sm text-slate-400">No image</div>
                    @endif

                    @if($project->is_featured)
                        <span class="absolute left-4 top-4 rounded-full bg-[#FD5528] px-3 py-1 text-xs font-semibold text-white">Featured</span>
                    @endif
                </div>

                <div class="space-y-4 p-6">
                    <div>
                        <div class="flex items-center justify-between gap-3">
                            <h3 class="text-xl font-bold text-slate-900">{{ $project->title }}</h3>
                            <span class="rounded-full bg-emerald-500/10 px-3 py-1 text-xs font-semibold text-emerald-600">{{ $project->status }}</span>
                        </div>
                        <p class="mt-2 text-sm text-slate-500">
                            {{ $project->description ? \Illuminate\Support\Str::limit($project->description, 90) : 'No description yet.' }}
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-2 text-xs">
                        @foreach(array_filter(array_map('trim', explode(',', (string) $project->technologies))) as $tech)
                            <span class="rounded-full bg-[#FD5528]/10 px-3 py-1 font-semibold text-[#FD5528]">{{ $tech }}</span>
                        @endforeach
                    </div>

                    <div class="flex items-center justify-between text-sm text-slate-500">
                        <span>{{ $project->category ?? 'General' }}</span>
                        <span>{{ $project->completed_at?->format('M Y') ?? 'In progress' }}</span>
                    </div>

                    <div class="flex items-center justify-between gap-2">
                        <a href="{{ $project->live_url ?: '#' }}" target="_blank" class="font-semibold text-[#FD5528]">View live</a>
                        <div class="inline-flex gap-2">
                            <a href="{{ route('projects.edit', $project) }}" class="rounded-xl bg-sky-500/10 px-3 py-2 text-sm font-semibold text-sky-600 transition hover:bg-sky-500/20">Edit</a>
                            <form action="{{ route('projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Delete this project?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="rounded-xl bg-rose-500/10 px-3 py-2 text-sm font-semibold text-rose-600 transition hover:bg-rose-500/20">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="rounded-[2rem] border border-dashed border-slate-300 px-6 py-10 text-center text-slate-500 md:col-span-2 xl:col-span-3">
                No projects found.
            </div>
        @endforelse
    </div>
</div>
@endsection
