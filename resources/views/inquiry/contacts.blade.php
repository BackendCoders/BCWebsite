@extends('layout.main')

@section('content')
<div class="relative mt-32 space-y-6 overflow-hidden">
    <div class="pointer-events-none absolute inset-x-0 top-0 -z-10 h-56 bg-gradient-to-b from-[#FD5528]/10 via-transparent to-transparent blur-3xl"></div>
    <div class="pointer-events-none absolute -left-24 top-16 -z-10 h-64 w-64 rounded-full bg-orange-400/10 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-24 top-24 -z-10 h-56 w-56 rounded-full bg-[#FD5528]/10 blur-3xl"></div>

    <div class="flex flex-col gap-4 rounded-[2.25rem] border border-slate-200/70 bg-white/75 p-6 shadow-2xl shadow-slate-200/40 backdrop-blur-xl sm:flex-row sm:items-end sm:justify-between">
        <div class="space-y-2">
            <span class="inline-flex items-center rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-[#FD5528]">Contacts</span>
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-slate-900">Contact submissions</h2>
                <p class="mt-1 max-w-2xl text-sm text-slate-500">Messages sent from the public contact form with server-side IP detection and visitor tracking.</p>
            </div>
        </div>

        <div class="flex items-center gap-3">
            <a href="{{ route('submissions.index') }}" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528]/10 px-5 py-3 text-sm font-semibold text-[#FD5528] transition hover:bg-[#FD5528]/20">
                All Submissions
            </a>
            <a href="{{ route('dashboard') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 shadow-sm transition hover:border-[#FD5528] hover:text-[#FD5528]">
                Back to dashboard
            </a>
        </div>
    </div>

    <div class="grid gap-4 sm:grid-cols-3">
        <div class="rounded-[1.75rem] border border-slate-200/70 bg-white p-5 shadow-lg shadow-slate-100/60">
            <p class="text-xs uppercase tracking-[0.35em] text-slate-400">Total contacts</p>
            <p class="mt-3 text-3xl font-bold text-slate-900">{{ $contactCount ?? $recentContacts->total() }}</p>
            <p class="mt-1 text-sm text-slate-500">All submissions in the inbox</p>
        </div>
        <div class="rounded-[1.75rem] border border-slate-200/70 bg-white p-5 shadow-lg shadow-slate-100/60">
            <p class="text-xs uppercase tracking-[0.35em] text-slate-400">Latest message</p>
            <p class="mt-3 text-lg font-semibold text-slate-900">
                {{ optional($recentContacts->first()?->created_at?->timezone('Asia/Kolkata'))->format('d M, Y h:i A') ?? 'No submissions yet' }}
            </p>
            <p class="mt-1 text-sm text-slate-500">Most recent contact timestamp</p>
        </div>
        <div class="rounded-[1.75rem] border border-slate-200/70 bg-white p-5 shadow-lg shadow-slate-100/60">
            <p class="text-xs uppercase tracking-[0.35em] text-slate-400">Latest sender</p>
            <p class="mt-3 text-lg font-semibold text-slate-900">
                {{ optional($recentContacts->first())->full_name ?? 'No submissions yet' }}
            </p>
            <p class="mt-1 text-sm text-slate-500">Who contacted you last</p>
        </div>
    </div>

    <div class="overflow-hidden rounded-[2rem] border border-slate-200/70 bg-white/85 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
        <div class="flex flex-col gap-3 border-b border-slate-200/70 p-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h3 class="text-lg font-semibold text-slate-900">Contact inbox</h3>
                <p class="text-sm text-slate-500">Review submissions, visitor logs, and remove spam when needed.</p>
            </div>
            <form method="GET" action="{{ route('contacts.index') }}" class="flex items-center gap-2 w-full sm:w-auto">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search name, email, IP, visitor ID..." class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-2.5 text-sm text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 sm:w-80">
                @if(request()->filled('search'))
                    <a href="{{ route('contacts.index') }}" class="rounded-xl border border-slate-200 bg-white px-3 py-2 text-xs font-semibold text-slate-500 hover:text-slate-700">Clear</a>
                @endif
                <button type="submit" class="rounded-2xl bg-[#FD5528] px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-[#e94c20]">
                    Search
                </button>
            </form>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200/70 text-left">
                <thead class="bg-gradient-to-r from-orange-50 to-white text-xs uppercase tracking-[0.2em] text-slate-500">
                    <tr>
                        <th class="px-5 py-4 font-semibold">ID</th>
                        <th class="px-5 py-4 font-semibold">Name</th>
                        <th class="px-5 py-4 font-semibold">Contact</th>
                        <th class="px-5 py-4 font-semibold">IP Address</th>
                        <th class="px-5 py-4 font-semibold">Visitor ID</th>
                        <th class="px-5 py-4 font-semibold">Message</th>
                        <th class="px-5 py-4 font-semibold">Submitted</th>
                        <th class="px-5 py-4 font-semibold text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200/70 text-sm">
                    @forelse($recentContacts as $contact)
                        <tr class="transition hover:bg-orange-50/40">
                            <td class="px-5 py-4 font-mono font-bold text-slate-800">
                                #{{ $contact->id }}
                            </td>
                            <td class="px-5 py-4 font-semibold text-slate-900">
                                {{ $contact->full_name }}
                            </td>
                            <td class="px-5 py-4">
                                <div class="text-slate-700">{{ $contact->email }}</div>
                                <div class="text-xs text-slate-400 font-mono">{{ $contact->phone }}</div>
                            </td>
                            <td class="px-5 py-4">
                                @if($contact->ip_address)
                                    <span class="font-mono text-xs font-medium text-slate-800 bg-slate-100 rounded-md px-2 py-0.5">
                                        {{ $contact->ip_address }}
                                    </span>
                                @else
                                    <span class="text-xs text-slate-400 italic">-</span>
                                @endif
                            </td>
                            <td class="px-5 py-4">
                                @if($contact->visitor_id)
                                    <div class="space-y-0.5">
                                        <span class="font-mono text-[11px] text-indigo-700 bg-indigo-50 border border-indigo-100 rounded-md px-2 py-0.5" title="{{ $contact->visitor_id }}">
                                            {{ \Illuminate\Support\Str::limit($contact->visitor_id, 12, '...') }}
                                        </span>
                                        <div>
                                            <a href="{{ route('submissions.index', ['visitor_id' => $contact->visitor_id]) }}" class="inline-flex items-center rounded-full bg-indigo-100 px-2 py-0.5 text-[10px] font-semibold text-indigo-800 hover:bg-indigo-200">
                                                {{ $contact->visitor_total_submissions }} {{ \Illuminate\Support\Str::plural('submission', $contact->visitor_total_submissions) }}
                                            </a>
                                        </div>
                                    </div>
                                @else
                                    <span class="text-xs text-slate-400 italic">-</span>
                                @endif
                            </td>
                            <td class="px-5 py-4 text-slate-600">
                                {{ \Illuminate\Support\Str::limit($contact->message, 80) }}
                            </td>
                            <td class="px-5 py-4 text-slate-500 text-xs">
                                {{ $contact->created_at?->timezone('Asia/Kolkata')?->format('d M, Y h:i A') }}
                            </td>
                            <td class="px-5 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('contacts.show', $contact) }}" class="inline-flex items-center justify-center rounded-xl bg-[#FD5528]/10 px-3.5 py-1.5 text-xs font-semibold text-[#FD5528] transition hover:bg-[#FD5528]/20">
                                        View
                                    </a>
                                    <form action="{{ route('contacts.destroy', $contact) }}" method="POST" onsubmit="return confirm('Delete this contact submission?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-flex items-center justify-center rounded-xl bg-rose-500/10 px-3 py-1.5 text-xs font-semibold text-rose-600 transition hover:bg-rose-500/20">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="px-6 py-14 text-center">
                                <div class="mx-auto mb-3 flex h-14 w-14 items-center justify-center rounded-full bg-[#FD5528]/10 text-lg font-bold text-[#FD5528]">
                                    +
                                </div>
                                <p class="text-base font-semibold text-slate-700">No contact submissions found.</p>
                                <p class="mt-1 text-sm text-slate-500">New messages from the public form will appear here.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($recentContacts instanceof \Illuminate\Pagination\LengthAwarePaginator && $recentContacts->hasPages())
            <div class="border-t border-slate-200/70 bg-slate-50/50 p-4">
                {{ $recentContacts->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
