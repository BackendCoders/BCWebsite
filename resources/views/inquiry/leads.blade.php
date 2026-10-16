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
                    Candidate job applications with server-side IP tracking and visitor analytics.
                </p>
            </div>

            <div class="flex items-center gap-3">
                <a href="{{ route('submissions.index') }}" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528]/10 px-5 py-3 text-sm font-semibold text-[#FD5528] transition hover:bg-[#FD5528]/20">
                    All Submissions
                </a>
                <a href="{{ route('dashboard') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">
                    Back to dashboard
                </a>
            </div>
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
                <p class="mt-3 text-3xl font-bold text-slate-900">{{ $applicationCount ?? $recentApplications->total() }}</p>
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
        <div class="flex flex-col gap-3 border-b border-slate-200/70 p-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h3 class="text-lg font-semibold text-slate-900">Applications List</h3>
                <p class="text-sm text-slate-500">Manage candidate applications and IP/visitor tracking data.</p>
            </div>
            <form method="GET" action="{{ route('leads.index') }}" class="flex items-center gap-2 w-full sm:w-auto">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search name, role, IP, visitor ID..." class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-2.5 text-sm text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 sm:w-80">
                @if(request()->filled('search'))
                    <a href="{{ route('leads.index') }}" class="rounded-xl border border-slate-200 bg-white px-3 py-2 text-xs font-semibold text-slate-500 hover:text-slate-700">Clear</a>
                @endif
                <button type="submit" class="rounded-2xl bg-[#FD5528] px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-[#e94c20]">
                    Search
                </button>
            </form>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200/70 text-left">
                <thead class="bg-gradient-to-r from-[#FD5528] via-orange-500 to-amber-400 text-xs uppercase tracking-[0.3em] text-white">
                    <tr>
                        <th class="px-5 py-4 font-semibold">ID</th>
                        <th class="px-5 py-4 font-semibold">Candidate</th>
                        <th class="px-5 py-4 font-semibold">Contact Info</th>
                        <th class="px-5 py-4 font-semibold">Position</th>
                        <th class="px-5 py-4 font-semibold">IP Address</th>
                        <th class="px-5 py-4 font-semibold">Visitor ID</th>
                        <th class="px-5 py-4 font-semibold">Resume</th>
                        <th class="px-5 py-4 font-semibold">Submitted</th>
                        <th class="px-5 py-4 font-semibold text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200/70 bg-white text-sm">
                    @forelse($recentApplications as $application)
                        <tr class="transition hover:bg-slate-50/80">
                            <td class="px-5 py-4 font-mono font-bold text-slate-800">
                                #{{ $application->id }}
                            </td>
                            <td class="px-5 py-4">
                                <div class="font-semibold text-slate-900">{{ $application->full_name }}</div>
                            </td>
                            <td class="px-5 py-4">
                                <div class="text-slate-700">{{ $application->email }}</div>
                                <div class="text-xs text-slate-400 font-mono">{{ $application->phone ?? '-' }}</div>
                            </td>
                            <td class="px-5 py-4">
                                <span class="inline-flex rounded-full bg-sky-500/10 px-3 py-1 text-xs font-semibold text-sky-600">
                                    {{ $application->position }}
                                </span>
                            </td>
                            <td class="px-5 py-4">
                                @if($application->ip_address)
                                    <span class="font-mono text-xs font-medium text-slate-800 bg-slate-100 rounded-md px-2 py-0.5">
                                        {{ $application->ip_address }}
                                    </span>
                                @else
                                    <span class="text-xs text-slate-400 italic">-</span>
                                @endif
                            </td>
                            <td class="px-5 py-4">
                                @if($application->visitor_id)
                                    <div class="space-y-0.5">
                                        <span class="font-mono text-[11px] text-indigo-700 bg-indigo-50 border border-indigo-100 rounded-md px-2 py-0.5" title="{{ $application->visitor_id }}">
                                            {{ \Illuminate\Support\Str::limit($application->visitor_id, 12, '...') }}
                                        </span>
                                        <div>
                                            <a href="{{ route('submissions.index', ['visitor_id' => $application->visitor_id]) }}" class="inline-flex items-center rounded-full bg-indigo-100 px-2 py-0.5 text-[10px] font-semibold text-indigo-800 hover:bg-indigo-200">
                                                {{ $application->visitor_total_submissions }} {{ \Illuminate\Support\Str::plural('submission', $application->visitor_total_submissions) }}
                                            </a>
                                        </div>
                                    </div>
                                @else
                                    <span class="text-xs text-slate-400 italic">-</span>
                                @endif
                            </td>
                            <td class="px-5 py-4 text-slate-600">
                                @if($application->resume)
                                    <a href="{{ asset('storage/' . $application->resume) }}" target="_blank" class="inline-flex items-center gap-1 font-semibold text-[#FD5528] transition hover:underline text-xs">
                                        <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                        View Resume
                                    </a>
                                @else
                                    <span class="text-xs text-slate-400">-</span>
                                @endif
                            </td>
                            <td class="px-5 py-4 text-slate-500 text-xs">
                                {{ $application->created_at?->format('d M, Y h:i A') }}
                            </td>
                            <td class="px-5 py-4">
                                <div class="flex justify-center">
                                    <form action="{{ route('leads.destroy', $application) }}" method="POST" onsubmit="return confirm('Delete this application?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-flex items-center rounded-xl border border-rose-200 bg-white px-3 py-1.5 text-xs font-semibold text-rose-600 transition hover:bg-rose-50">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="px-6 py-10 text-center text-slate-500">No applications found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($recentApplications instanceof \Illuminate\Pagination\LengthAwarePaginator && $recentApplications->hasPages())
            <div class="border-t border-slate-200/70 bg-slate-50/50 p-4">
                {{ $recentApplications->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
