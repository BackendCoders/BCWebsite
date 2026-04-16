@extends('layout.main')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h2 class="text-3xl font-bold text-slate-900 dark:text-white">Career openings</h2>
            <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">Manage open positions from the backend.</p>
        </div>

        <a href="{{ route('careers.create') }}" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20]">
            + Add Career
        </a>
    </div>

    @if(session('success'))
        <div class="rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-emerald-700 dark:border-emerald-500/20 dark:bg-emerald-500/10 dark:text-emerald-300">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-hidden rounded-[2rem] border border-slate-200/70 bg-white/80 shadow-xl shadow-slate-200/40 backdrop-blur-xl dark:border-white/10 dark:bg-white/5 dark:shadow-black/20">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200/70 text-left dark:divide-white/10">
                <thead class="bg-slate-50/80 text-xs uppercase tracking-[0.3em] text-slate-400 dark:bg-white/5">
                    <tr>
                        <th class="px-6 py-4 font-semibold">Title</th>
                        <th class="px-6 py-4 font-semibold">Type</th>
                        <th class="px-6 py-4 font-semibold">Mode</th>
                        <th class="px-6 py-4 font-semibold">Experience</th>
                        <th class="px-6 py-4 font-semibold">Status</th>
                        <th class="px-6 py-4 font-semibold text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200/70 dark:divide-white/10">
                    @forelse($careers as $career)
                        <tr class="hover:bg-slate-50/70 dark:hover:bg-white/5">
                            <td class="px-6 py-4">
                                <p class="font-semibold text-slate-900 dark:text-white">{{ $career->title }}</p>
                                <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">
                                    {{ $career->description ? \Illuminate\Support\Str::limit($career->description, 70) : 'No description yet.' }}
                                </p>
                            </td>
                            <td class="px-6 py-4 text-slate-600 dark:text-slate-300">{{ $career->employment_type ?? '-' }}</td>
                            <td class="px-6 py-4 text-slate-600 dark:text-slate-300">{{ $career->work_mode ?? '-' }}</td>
                            <td class="px-6 py-4 text-slate-600 dark:text-slate-300">{{ $career->experience ?? '-' }}</td>
                            <td class="px-6 py-4">
                                @if($career->is_active)
                                    <span class="rounded-full bg-emerald-500/10 px-3 py-1 text-xs font-semibold text-emerald-600">{{ $career->cta_label ?: 'Open' }}</span>
                                @else
                                    <span class="rounded-full bg-slate-500/10 px-3 py-1 text-xs font-semibold text-slate-500">Closed</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="inline-flex gap-2">
                                    <a href="{{ route('careers.edit', $career) }}" class="rounded-xl bg-sky-500/10 px-3 py-2 text-sm font-semibold text-sky-600 transition hover:bg-sky-500/20">
                                        Edit
                                    </a>
                                    <form action="{{ route('careers.destroy', $career) }}" method="POST" onsubmit="return confirm('Delete this career opening?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="rounded-xl bg-rose-500/10 px-3 py-2 text-sm font-semibold text-rose-600 transition hover:bg-rose-500/20">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-10 text-center text-slate-500 dark:text-slate-400">No career openings found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
