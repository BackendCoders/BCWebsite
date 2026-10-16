@extends('layout.main')

@section('content')
<div class="relative mt-28 space-y-6 overflow-hidden pb-12">
    <!-- Background Accents -->
    <div class="pointer-events-none absolute inset-x-0 top-0 -z-10 h-56 bg-gradient-to-b from-[#FD5528]/10 via-transparent to-transparent blur-3xl"></div>
    <div class="pointer-events-none absolute -left-24 top-16 -z-10 h-64 w-64 rounded-full bg-orange-400/10 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-24 top-24 -z-10 h-56 w-56 rounded-full bg-[#FD5528]/10 blur-3xl"></div>

    <!-- Header Section -->
    <div class="flex flex-col gap-4 rounded-[2.25rem] border border-slate-200/70 bg-white/85 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl sm:flex-row sm:items-end sm:justify-between">
        <div class="space-y-2">
            <span class="inline-flex items-center gap-1.5 rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-[#FD5528]">
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Submission Dashboard
            </span>
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-slate-900">Form Submissions & Visitor Tracking</h2>
                <p class="mt-1 max-w-2xl text-sm text-slate-500">
                    Review and filter incoming contact enquiries and career applications with server-side IP tracking and unique visitor analytics.
                </p>
            </div>
        </div>

        <div class="flex items-center gap-2">
            <a href="{{ route('dashboard') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 shadow-sm transition hover:border-[#FD5528] hover:text-[#FD5528]">
                Back to Dashboard
            </a>
        </div>
    </div>

    <!-- Metric Cards -->
    <div class="grid gap-4 sm:grid-cols-4">
        <div class="rounded-[1.75rem] border border-slate-200/70 bg-white p-5 shadow-lg shadow-slate-100/60">
            <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Total Submissions</p>
            <p class="mt-3 text-3xl font-bold text-slate-900">{{ $contactCount + $applicationCount }}</p>
            <p class="mt-1 text-xs text-slate-500">All submissions recorded</p>
        </div>
        <div class="rounded-[1.75rem] border border-slate-200/70 bg-white p-5 shadow-lg shadow-slate-100/60">
            <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Contact Forms</p>
            <p class="mt-3 text-3xl font-bold text-[#FD5528]">{{ $contactCount }}</p>
            <p class="mt-1 text-xs text-slate-500">Public contact form leads</p>
        </div>
        <div class="rounded-[1.75rem] border border-slate-200/70 bg-white p-5 shadow-lg shadow-slate-100/60">
            <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Career Applications</p>
            <p class="mt-3 text-3xl font-bold text-emerald-600">{{ $applicationCount }}</p>
            <p class="mt-1 text-xs text-slate-500">Candidate job applications</p>
        </div>
        <div class="rounded-[1.75rem] border border-slate-200/70 bg-white p-5 shadow-lg shadow-slate-100/60">
            <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Filtered Results</p>
            <p class="mt-3 text-3xl font-bold text-indigo-600">{{ $totalCount }}</p>
            <p class="mt-1 text-xs text-slate-500">Matching current criteria</p>
        </div>
    </div>

    <!-- Filter & Search Controls -->
    <div class="rounded-[2rem] border border-slate-200/70 bg-white/90 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
        <div class="flex items-center justify-between pb-4 border-b border-slate-100">
            <div class="flex items-center gap-2">
                <svg class="h-5 w-5 text-[#FD5528]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                </svg>
                <h3 class="text-base font-bold text-slate-900">Search & Filter Criteria</h3>
            </div>
            @if(request()->anyFilled(['search', 'form_type', 'ip_address', 'visitor_id', 'name', 'email', 'submission_id', 'date_from', 'date_to']))
                <a href="{{ route('submissions.index') }}" class="text-xs font-semibold text-rose-500 hover:text-rose-600 hover:underline">
                    Clear All Filters
                </a>
            @endif
        </div>

        <form method="GET" action="{{ route('submissions.index') }}" class="mt-5 space-y-4">
            <!-- First Row of Filters -->
            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-500 mb-1.5">Quick Search</label>
                    <input type="text" name="search" value="{{ $filters['search'] }}" placeholder="Search all fields..." class="w-full rounded-xl border border-slate-200 bg-white px-3.5 py-2.5 text-sm text-slate-800 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-2 focus:ring-[#FD5528]/10">
                </div>
                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-500 mb-1.5">Form Type</label>
                    <select name="form_type" class="w-full rounded-xl border border-slate-200 bg-white px-3.5 py-2.5 text-sm text-slate-800 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-2 focus:ring-[#FD5528]/10">
                        <option value="all" {{ $filters['form_type'] === 'all' ? 'selected' : '' }}>All Forms</option>
                        <option value="contact" {{ $filters['form_type'] === 'contact' ? 'selected' : '' }}>Contact Form</option>
                        <option value="career" {{ $filters['form_type'] === 'career' ? 'selected' : '' }}>Career Application</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-500 mb-1.5">IP Address</label>
                    <input type="text" name="ip_address" value="{{ $filters['ip_address'] }}" placeholder="e.g. 103.xxx.xxx.xxx" class="w-full rounded-xl border border-slate-200 bg-white px-3.5 py-2.5 text-sm font-mono text-slate-800 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-2 focus:ring-[#FD5528]/10">
                </div>
                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-500 mb-1.5">Visitor ID</label>
                    <input type="text" name="visitor_id" value="{{ $filters['visitor_id'] }}" placeholder="e.g. 8f7c2a91-xxxx..." class="w-full rounded-xl border border-slate-200 bg-white px-3.5 py-2.5 text-sm font-mono text-slate-800 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-2 focus:ring-[#FD5528]/10">
                </div>
            </div>

            <!-- Second Row of Filters -->
            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-5">
                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-500 mb-1.5">Submission ID</label>
                    <input type="text" name="submission_id" value="{{ $filters['submission_id'] }}" placeholder="ID (e.g. 1)" class="w-full rounded-xl border border-slate-200 bg-white px-3.5 py-2.5 text-sm text-slate-800 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-2 focus:ring-[#FD5528]/10">
                </div>
                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-500 mb-1.5">Name</label>
                    <input type="text" name="name" value="{{ $filters['name'] }}" placeholder="Sender or Applicant" class="w-full rounded-xl border border-slate-200 bg-white px-3.5 py-2.5 text-sm text-slate-800 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-2 focus:ring-[#FD5528]/10">
                </div>
                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-500 mb-1.5">Email</label>
                    <input type="text" name="email" value="{{ $filters['email'] }}" placeholder="email@example.com" class="w-full rounded-xl border border-slate-200 bg-white px-3.5 py-2.5 text-sm text-slate-800 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-2 focus:ring-[#FD5528]/10">
                </div>
                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-500 mb-1.5">From Date</label>
                    <input type="date" name="date_from" value="{{ $filters['date_from'] }}" class="w-full rounded-xl border border-slate-200 bg-white px-3.5 py-2.5 text-sm text-slate-800 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-2 focus:ring-[#FD5528]/10">
                </div>
                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-500 mb-1.5">To Date</label>
                    <input type="date" name="date_to" value="{{ $filters['date_to'] }}" class="w-full rounded-xl border border-slate-200 bg-white px-3.5 py-2.5 text-sm text-slate-800 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-2 focus:ring-[#FD5528]/10">
                </div>
            </div>

            <div class="flex items-center justify-end gap-3 pt-2">
                <a href="{{ route('submissions.index') }}" class="rounded-xl border border-slate-200 bg-white px-4 py-2 text-sm font-semibold text-slate-600 transition hover:bg-slate-50">
                    Reset
                </a>
                <button type="submit" class="inline-flex items-center gap-2 rounded-xl bg-[#FD5528] px-6 py-2.5 text-sm font-semibold text-white shadow-md shadow-[#FD5528]/25 transition hover:bg-[#e94c20]">
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-4.35-4.35" />
                    </svg>
                    Apply Filters
                </button>
            </div>
        </form>
    </div>

    <!-- Submissions Table Section -->
    <div class="overflow-hidden rounded-[2rem] border border-slate-200/70 bg-white/95 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200/70 text-left">
                <thead class="bg-gradient-to-r from-slate-900 via-slate-800 to-slate-900 text-[11px] uppercase tracking-[0.2em] text-white">
                    <tr>
                        <th class="px-5 py-4 font-semibold">Submission ID</th>
                        <th class="px-5 py-4 font-semibold">Form Type</th>
                        <th class="px-5 py-4 font-semibold">Name</th>
                        <th class="px-5 py-4 font-semibold">Email</th>
                        <th class="px-5 py-4 font-semibold">IP Address</th>
                        <th class="px-5 py-4 font-semibold">Visitor ID</th>
                        <th class="px-5 py-4 font-semibold">Submitted At</th>
                        <th class="px-5 py-4 font-semibold">Status</th>
                        <th class="px-5 py-4 font-semibold text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200/70 bg-white text-sm">
                    @forelse($submissions as $sub)
                        <tr class="transition hover:bg-slate-50/90">
                            <!-- Submission ID -->
                            <td class="px-5 py-4 font-mono font-bold text-slate-900">
                                @if($sub->type === 'Contact')
                                    <span class="inline-flex items-center rounded-lg bg-orange-100 px-2.5 py-1 text-xs font-bold text-[#FD5528]">
                                        CNT-#{{ $sub->id }}
                                    </span>
                                @else
                                    <span class="inline-flex items-center rounded-lg bg-emerald-100 px-2.5 py-1 text-xs font-bold text-emerald-700">
                                        APP-#{{ $sub->id }}
                                    </span>
                                @endif
                            </td>

                            <!-- Form Type -->
                            <td class="px-5 py-4">
                                @if($sub->type === 'Contact')
                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-orange-50 px-3 py-1 text-xs font-medium text-[#FD5528] ring-1 ring-inset ring-orange-500/20">
                                        <span class="h-1.5 w-1.5 rounded-full bg-[#FD5528]"></span>
                                        Contact Form
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-3 py-1 text-xs font-medium text-emerald-700 ring-1 ring-inset ring-emerald-600/20">
                                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-600"></span>
                                        Career App
                                    </span>
                                @endif
                            </td>

                            <!-- Name -->
                            <td class="px-5 py-4">
                                <div class="font-semibold text-slate-900">{{ $sub->name }}</div>
                                @if($sub->phone)
                                    <div class="text-xs text-slate-400 font-mono">{{ $sub->phone }}</div>
                                @endif
                            </td>

                            <!-- Email -->
                            <td class="px-5 py-4 text-slate-700">
                                <a href="mailto:{{ $sub->email }}" class="hover:text-[#FD5528] transition">{{ $sub->email }}</a>
                            </td>

                            <!-- IP Address -->
                            <td class="px-5 py-4">
                                @if($sub->ip_address)
                                    <div class="flex items-center gap-2">
                                        <span class="font-mono text-xs font-medium text-slate-800 bg-slate-100 rounded-md px-2 py-0.5" title="Server-side captured IP">
                                            {{ $sub->ip_address }}
                                        </span>
                                        <a href="{{ route('submissions.index', ['ip_address' => $sub->ip_address]) }}" title="Filter by this IP" class="text-slate-400 hover:text-[#FD5528] transition">
                                            <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <span class="text-[10px] text-slate-400 block mt-0.5">Network identifier</span>
                                @else
                                    <span class="text-xs text-slate-400 italic">Not available</span>
                                @endif
                            </td>

                            <!-- Visitor ID -->
                            <td class="px-5 py-4">
                                @if($sub->visitor_id)
                                    <div class="space-y-1">
                                        <div class="flex items-center gap-1.5">
                                            <span class="font-mono text-[11px] text-indigo-700 bg-indigo-50 border border-indigo-100 rounded-md px-2 py-0.5 select-all" title="{{ $sub->visitor_id }}">
                                                {{ \Illuminate\Support\Str::limit($sub->visitor_id, 14, '...') }}
                                            </span>
                                            <a href="{{ route('submissions.index', ['visitor_id' => $sub->visitor_id]) }}" title="View all submissions from this visitor" class="text-indigo-400 hover:text-indigo-700 transition">
                                                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="{{ route('submissions.index', ['visitor_id' => $sub->visitor_id]) }}" class="inline-flex items-center gap-1 rounded-full bg-indigo-100/70 px-2.5 py-0.5 text-[10px] font-semibold text-indigo-800 hover:bg-indigo-200 transition">
                                                <span>{{ $sub->visitor_count }} {{ \Illuminate\Support\Str::plural('submission', $sub->visitor_count) }}</span>
                                            </a>
                                        </div>
                                    </div>
                                @else
                                    <span class="text-xs text-slate-400 italic">None</span>
                                @endif
                            </td>

                            <!-- Submitted At -->
                            <td class="px-5 py-4 text-slate-600">
                                <div class="font-medium text-slate-900 text-xs">
                                    {{ $sub->created_at?->timezone('Asia/Kolkata')?->format('d M, Y h:i A') }}
                                </div>
                                <div class="text-[11px] text-slate-400">
                                    {{ $sub->created_at?->diffForHumans() }}
                                </div>
                            </td>

                            <!-- Status -->
                            <td class="px-5 py-4">
                                <span class="inline-flex items-center rounded-full bg-slate-100 px-2.5 py-0.5 text-xs font-semibold uppercase tracking-wider text-slate-700">
                                    {{ $sub->status ?? 'new' }}
                                </span>
                            </td>

                            <!-- Actions -->
                            <td class="px-5 py-4 text-right">
                                <div class="flex items-center justify-end gap-1.5">
                                    @if($sub->type === 'Contact')
                                        <a href="{{ $sub->detail_url }}" class="inline-flex items-center justify-center rounded-lg bg-[#FD5528]/10 px-3 py-1.5 text-xs font-semibold text-[#FD5528] transition hover:bg-[#FD5528]/20">
                                            View
                                        </a>
                                    @elseif($sub->detail_url)
                                        <a href="{{ $sub->detail_url }}" target="_blank" class="inline-flex items-center justify-center rounded-lg bg-emerald-50 px-3 py-1.5 text-xs font-semibold text-emerald-700 transition hover:bg-emerald-100">
                                            Resume
                                        </a>
                                    @endif

                                    <form action="{{ $sub->delete_url }}" method="POST" onsubmit="return confirm('Delete this {{ strtolower($sub->type) }} submission?');" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-flex items-center justify-center rounded-lg bg-rose-50 px-2.5 py-1.5 text-xs font-semibold text-rose-600 transition hover:bg-rose-100" title="Delete record">
                                            <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="px-6 py-16 text-center">
                                <div class="mx-auto mb-3 flex h-14 w-14 items-center justify-center rounded-full bg-slate-100 text-xl font-bold text-slate-400">
                                    <svg class="h-6 w-6 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </div>
                                <p class="text-base font-semibold text-slate-700">No submissions match your search/filter criteria.</p>
                                <p class="mt-1 text-sm text-slate-500">Try adjusting your filters or search keywords.</p>
                                <a href="{{ route('submissions.index') }}" class="mt-4 inline-flex items-center rounded-xl bg-[#FD5528] px-4 py-2 text-xs font-semibold text-white transition hover:bg-[#e94c20]">
                                    Clear Filters
                                </a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($submissions->hasPages())
            <div class="border-t border-slate-200/70 bg-slate-50/50 p-4">
                {{ $submissions->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
