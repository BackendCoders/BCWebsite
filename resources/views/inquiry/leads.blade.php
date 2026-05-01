@extends('layout.main')

@section('content')
@php
    $latestApplication = $recentApplications->first();
@endphp

<div class="mx-auto max-w-7xl px-4 pb-12 pt-28 sm:px-6 lg:px-8">
    <div class="relative overflow-hidden rounded-[2.25rem] border border-slate-200/70 bg-white/95 p-6 shadow-[0_24px_80px_rgba(15,23,42,0.08)] backdrop-blur-xl sm:p-8">
        <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_top_right,_rgba(253,85,40,0.15),_transparent_28%),radial-gradient(circle_at_bottom_left,_rgba(14,165,233,0.10),_transparent_24%)]"></div>

        <div class="relative flex flex-col gap-5 lg:flex-row lg:items-end lg:justify-between">
            <div>
                <div class="inline-flex items-center gap-2 rounded-full border border-[#FD5528]/20 bg-[#FD5528]/10 px-4 py-2 text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">
                    Applications
                </div>
                <h2 class="mt-4 text-3xl font-bold tracking-tight text-slate-900">Career submissions</h2>
                <p class="mt-3 max-w-2xl text-sm leading-6 text-slate-500">
                    Every application sent from the public career form appears here.
                </p>
            </div>

            <a href="{{ route('dashboard') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">
                Back to dashboard
            </a>
        </div>

        <div class="relative mt-6 grid gap-4 sm:grid-cols-3">
            <div class="rounded-[1.75rem] border border-slate-200/70 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <div class="rounded-2xl bg-amber-500/10 p-3 text-amber-600">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 6.5A2.5 2.5 0 0 1 10 4h4a2.5 2.5 0 0 1 2.5 2.5V6H19a1.5 1.5 0 0 1 1.5 1.5v2A1.5 1.5 0 0 1 19 11H5A1.5 1.5 0 0 1 3.5 9.5v-2A1.5 1.5 0 0 1 5 6h2.5v.5Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.5 11.5V18A1.5 1.5 0 0 0 5 19.5h14A1.5 1.5 0 0 0 20.5 18v-6.5" />
                        </svg>
                    </div>
                    <span class="rounded-full bg-amber-500/10 px-3 py-1 text-xs font-semibold text-amber-600">Live</span>
                </div>
                <p class="mt-4 text-xs uppercase tracking-[0.35em] text-slate-400">Total submissions</p>
                <p class="mt-3 text-3xl font-bold text-slate-900">{{ $applicationCount ?? $recentApplications->count() }}</p>
                <p class="mt-1 text-sm text-slate-500">Collected from the public career form</p>
            </div>

            <div class="rounded-[1.75rem] border border-slate-200/70 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <div class="rounded-2xl bg-[#FD5528]/10 p-3 text-[#FD5528]">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l2.5 1.5" />
                            <circle cx="12" cy="12" r="7.5" />
                        </svg>
                    </div>
                    <span class="rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">Latest</span>
                </div>
                <p class="mt-4 text-xs uppercase tracking-[0.35em] text-slate-400">Latest update</p>
                <p class="mt-3 text-lg font-semibold text-slate-900">
                    {{ optional($latestApplication)->created_at?->format('d M, Y h:i A') ?? 'No submissions yet' }}
                </p>
                <p class="mt-1 text-sm text-slate-500">Most recent application timestamp</p>
            </div>

            <div class="rounded-[1.75rem] border border-slate-200/70 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <div class="rounded-2xl bg-sky-500/10 p-3 text-sky-600">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 6.5A2.5 2.5 0 0 1 10 4h4a2.5 2.5 0 0 1 2.5 2.5V6H19a1.5 1.5 0 0 1 1.5 1.5v2A1.5 1.5 0 0 1 19 11H5A1.5 1.5 0 0 1 3.5 9.5v-2A1.5 1.5 0 0 1 5 6h2.5v.5Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 11v1a3 3 0 0 0 6 0v-1" />
                        </svg>
                    </div>
                    <span class="rounded-full bg-sky-500/10 px-3 py-1 text-xs font-semibold text-sky-600">Role</span>
                </div>
                <p class="mt-4 text-xs uppercase tracking-[0.35em] text-slate-400">Newest role</p>
                <p class="mt-3 text-lg font-semibold text-slate-900">
                    {{ optional($latestApplication)->position ?? 'No submissions yet' }}
                </p>
                <p class="mt-1 text-sm text-slate-500">Role from the latest submission</p>
            </div>
        </div>
    </div>

    <div class="mt-6 overflow-hidden rounded-[2rem] border border-slate-200/70 bg-white/90 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200/70 text-left">
                <thead class="bg-gradient-to-r from-[#FD5528] via-orange-500 to-amber-400 text-xs uppercase tracking-[0.3em] text-white">
                    <tr>
                        <th class="px-6 py-4 font-semibold">Name</th>
                        <th class="px-6 py-4 font-semibold">Phone</th>
                        <th class="px-6 py-4 font-semibold">Email</th>
                        <th class="px-6 py-4 font-semibold">Position</th>
                        <th class="px-6 py-4 font-semibold">Resume</th>
                        <th class="px-6 py-4 font-semibold">Submitted</th>
                        <th class="px-6 py-4 font-semibold text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200/70 bg-white">
                    @forelse($recentApplications as $application)
                        <tr class="transition hover:bg-slate-50/80">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="flex h-10 w-10 items-center justify-center rounded-2xl bg-[#FD5528]/10 text-[#FD5528]">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 12.5a4 4 0 1 0-4-4 4 4 0 0 0 4 4Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19a7.5 7.5 0 0 1 15 0" />
                                        </svg>
                                    </div>
                                    <span class="font-semibold text-slate-900">{{ $application->full_name }}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-slate-600">{{ $application->phone ?? '-' }}</td>
                            <td class="px-6 py-4 text-slate-600">{{ $application->email }}</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex rounded-full bg-sky-500/10 px-3 py-1 text-xs font-semibold text-sky-600">
                                    {{ $application->position }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-slate-600">
                                @if($application->resume)
                                    <a href="{{ asset('storage/' . $application->resume) }}" target="_blank" class="font-semibold text-[#FD5528] transition hover:underline">View resume</a>
                                @else
                                    -
                                @endif
                            </td>
                            <td class="px-6 py-4 text-slate-500">
                                {{ $application->created_at?->format('d M, Y h:i A') }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-center">
                                    <form action="{{ route('leads.destroy', $application) }}" method="POST" onsubmit="return confirm('Delete this application?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-flex items-center rounded-xl border border-rose-200 bg-white px-4 py-2 text-xs font-semibold text-rose-600 transition hover:bg-rose-50">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-10 text-center text-slate-500">No applications received yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
