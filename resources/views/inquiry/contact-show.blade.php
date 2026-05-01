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
                <h2 class="text-3xl font-bold tracking-tight text-slate-900">Contact details</h2>
                <p class="mt-1 max-w-2xl text-sm text-slate-500">Full submission data from the public contact form.</p>
            </div>
        </div>

        <div class="flex gap-3">
            <a href="{{ route('contacts.index') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 shadow-sm transition hover:border-[#FD5528] hover:text-[#FD5528]">
                Back to contacts
            </a>
            <form action="{{ route('contacts.destroy', $contact) }}" method="POST" onsubmit="return confirm('Delete this contact submission?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="inline-flex items-center justify-center rounded-2xl bg-rose-500/10 px-5 py-3 text-sm font-semibold text-rose-600 transition hover:bg-rose-500/20 hover:text-rose-700">
                    Delete
                </button>
            </form>
        </div>
    </div>

    <div class="grid gap-6 lg:grid-cols-[0.95fr_1.05fr]">
        <div class="space-y-4">
            <div class="rounded-[2rem] border border-slate-200/70 bg-white/85 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-slate-400">Sender</p>
                <h3 class="mt-2 text-2xl font-bold text-slate-900">{{ trim($contact->first_name.' '.$contact->last_name) ?: $contact->first_name }}</h3>
                <p class="mt-2 text-sm text-slate-500">Received on {{ $contact->created_at?->timezone('Asia/Kolkata')?->format('d M, Y h:i A') }}</p>
            </div>

            <div class="rounded-[2rem] border border-slate-200/70 bg-white/85 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-slate-400">Contact info</p>
                <div class="mt-4 space-y-4">
                    <div>
                        <p class="text-xs uppercase tracking-[0.25em] text-slate-400">Email</p>
                        <p class="mt-1 text-sm font-semibold text-slate-900">{{ $contact->email }}</p>
                    </div>
                    <div>
                        <p class="text-xs uppercase tracking-[0.25em] text-slate-400">Phone</p>
                        <p class="mt-1 text-sm font-semibold text-slate-900">{{ $contact->phone ?? '-' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="rounded-[2rem] border border-slate-200/70 bg-white/85 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
            <div class="flex items-center justify-between gap-3">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-slate-400">Message</p>
                    <h3 class="mt-2 text-xl font-bold text-slate-900">Full enquiry text</h3>
                </div>
                <span class="rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">Read only</span>
            </div>

            <div class="mt-4 rounded-[1.5rem] border border-slate-200 bg-slate-50 p-5">
                <p class="whitespace-pre-line text-sm leading-7 text-slate-600">{{ $contact->message ?: 'No message provided.' }}</p>
            </div>

            <div class="mt-6 grid gap-3 sm:grid-cols-2">
                <div class="rounded-2xl border border-slate-200 bg-white p-4">
                    <p class="text-xs uppercase tracking-[0.25em] text-slate-400">Created at</p>
                    <p class="mt-1 text-sm font-semibold text-slate-900">{{ $contact->created_at?->timezone('Asia/Kolkata')?->format('d M, Y h:i A') }}</p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-4">
                    <p class="text-xs uppercase tracking-[0.25em] text-slate-400">Record ID</p>
                    <p class="mt-1 text-sm font-semibold text-slate-900">#{{ $contact->id }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
