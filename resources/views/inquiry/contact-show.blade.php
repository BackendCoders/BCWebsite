@extends('layout.main')

@section('content')
<div class="relative mt-32 space-y-6 overflow-hidden pb-12">
    <div class="pointer-events-none absolute inset-x-0 top-0 -z-10 h-56 bg-gradient-to-b from-[#FD5528]/10 via-transparent to-transparent blur-3xl"></div>
    <div class="pointer-events-none absolute -left-24 top-16 -z-10 h-64 w-64 rounded-full bg-orange-400/10 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-24 top-24 -z-10 h-56 w-56 rounded-full bg-[#FD5528]/10 blur-3xl"></div>

    <!-- Header Card -->
    <div class="flex flex-col gap-4 rounded-[2.25rem] border border-slate-200/70 bg-white/75 p-6 shadow-2xl shadow-slate-200/40 backdrop-blur-xl sm:flex-row sm:items-end sm:justify-between">
        <div class="space-y-2">
            <span class="inline-flex items-center gap-1.5 rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-[#FD5528]">
                <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Lead Inquiry Details
            </span>
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-slate-900">Contact Submission #{{ $contact->id }}</h2>
                <p class="mt-1 max-w-2xl text-sm text-slate-500">Verified submission payload with first-party cookie identification and server-side network telemetry.</p>
            </div>
        </div>

        <div class="flex flex-wrap gap-3">
            <a href="{{ route('submissions.index') }}" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528]/10 px-5 py-3 text-sm font-semibold text-[#FD5528] transition hover:bg-[#FD5528]/20">
                All Submissions
            </a>
            <a href="{{ route('contacts.index') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 shadow-sm transition hover:border-[#FD5528] hover:text-[#FD5528]">
                Back to Contacts
            </a>
            <form action="{{ route('contacts.destroy', $contact) }}" method="POST" onsubmit="return confirm('Delete this contact submission?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="inline-flex items-center justify-center rounded-2xl bg-rose-500/10 px-5 py-3 text-sm font-semibold text-rose-600 transition hover:bg-rose-500/20 hover:text-rose-700 cursor-pointer">
                    Delete
                </button>
            </form>
        </div>
    </div>

    <!-- Main Grid -->
    <div class="grid gap-6 lg:grid-cols-[1.1fr_0.9fr]">
        <div class="space-y-6">
            <!-- Sender Profile Card -->
            <div class="rounded-[2rem] border border-slate-200/70 bg-white/90 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
                <div class="flex items-center justify-between pb-4 border-b border-slate-100">
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-400">Client Profile</p>
                    <span class="inline-flex items-center gap-1.5 rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">
                        <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                        Active Record
                    </span>
                </div>

                <div class="mt-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div>
                        <h3 class="text-2xl font-bold text-slate-900">{{ $contact->full_name }}</h3>
                        <p class="mt-1 text-xs text-slate-500">
                            Submitted on {{ $contact->created_at?->timezone('Asia/Kolkata')?->format('d M, Y \a\t h:i A') }} IST ({{ $contact->created_at?->diffForHumans() }})
                        </p>
                    </div>
                </div>

                <div class="mt-5 grid gap-4 sm:grid-cols-2">
                    <div class="rounded-xl border border-slate-100 bg-slate-50/70 p-3.5">
                        <p class="text-[11px] font-semibold uppercase tracking-wider text-slate-400">Email Address</p>
                        <p class="mt-1 text-sm font-semibold text-slate-900 break-all">
                            <a href="mailto:{{ $contact->email }}" class="text-[#FD5528] hover:underline flex items-center gap-1.5">
                                <span>{{ $contact->email }}</span>
                                <svg class="h-3.5 w-3.5 shrink-0 opacity-70" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                        </p>
                    </div>

                    <div class="rounded-xl border border-slate-100 bg-slate-50/70 p-3.5">
                        <p class="text-[11px] font-semibold uppercase tracking-wider text-slate-400">Phone Number</p>
                        <p class="mt-1 text-sm font-semibold text-slate-900">
                            @if($contact->phone)
                                <a href="tel:{{ $contact->phone }}" class="text-slate-800 hover:text-[#FD5528] flex items-center gap-1.5">
                                    <span>{{ $contact->phone }}</span>
                                    <svg class="h-3.5 w-3.5 shrink-0 opacity-70" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </a>
                            @else
                                <span class="text-slate-400 italic">Not provided</span>
                            @endif
                        </p>
                    </div>
                </div>
            </div>

            <!-- Full Message Card -->
            <div class="rounded-[2rem] border border-slate-200/70 bg-white/90 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
                <div class="flex items-center justify-between pb-3 border-b border-slate-100">
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-400">Message Content</p>
                    <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">Raw Inquiry</span>
                </div>

                <div class="mt-4 rounded-2xl border border-slate-200/80 bg-slate-50/80 p-5">
                    <p class="whitespace-pre-line text-sm leading-relaxed text-slate-800">{{ $contact->message ?: 'No message text provided in submission.' }}</p>
                </div>
            </div>

            <!-- Diagnostics & Telemetry Event Log -->
            <div class="rounded-[2rem] border border-slate-200/70 bg-white/90 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
                <div class="flex items-center justify-between pb-4 border-b border-slate-100">
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <h4 class="text-sm font-bold text-slate-900">Technical Telemetry Event Log</h4>
                    </div>
                    <span class="text-[11px] font-mono text-slate-400">Audit Trail</span>
                </div>

                <div class="mt-4 space-y-3">
                    <div class="flex items-start gap-3 rounded-xl border border-slate-100 bg-slate-50/60 p-3 text-xs">
                        <span class="mt-0.5 flex h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
                        <div class="flex-1 space-y-0.5">
                            <div class="flex items-center justify-between">
                                <span class="font-semibold text-slate-800">Form Submission Received</span>
                                <span class="font-mono text-[10px] text-slate-400">{{ $contact->created_at?->format('H:i:s') }}</span>
                            </div>
                            <p class="text-slate-500 text-[11px]">Contact form POST validated through CSRF and mathematical CAPTCHA challenge.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 rounded-xl border border-slate-100 bg-slate-50/60 p-3 text-xs">
                        <span class="mt-0.5 flex h-2 w-2 shrink-0 rounded-full {{ $contact->ip_address ? 'bg-emerald-500' : 'bg-amber-500' }}"></span>
                        <div class="flex-1 space-y-0.5">
                            <div class="flex items-center justify-between">
                                <span class="font-semibold text-slate-800">Server-Side IP Detection</span>
                                <span class="font-mono text-[10px] text-slate-400">
                                    {{ $contact->ip_address ? '200 OK' : 'Unavailable' }}
                                </span>
                            </div>
                            <p class="text-slate-500 text-[11px]">
                                @if($contact->ip_address)
                                    Authoritative IP <span class="font-mono font-semibold text-slate-700">{{ $contact->ip_address }}</span> resolved through reverse proxy infrastructure (IPv{{ str_contains($contact->ip_address, ':') ? '6' : '4' }}).
                                @else
                                    No client IP detected by server proxy stack.
                                @endif
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 rounded-xl border border-slate-100 bg-slate-50/60 p-3 text-xs">
                        <span class="mt-0.5 flex h-2 w-2 shrink-0 rounded-full {{ $contact->visitor_id ? 'bg-emerald-500' : 'bg-slate-400' }}"></span>
                        <div class="flex-1 space-y-0.5">
                            <div class="flex items-center justify-between">
                                <span class="font-semibold text-slate-800">First-Party Cookie State</span>
                                <span class="font-mono text-[10px] text-slate-400">
                                    {{ $contact->visitor_id ? 'Matched' : 'None' }}
                                </span>
                            </div>
                            <p class="text-slate-500 text-[11px]">
                                @if($contact->visitor_id)
                                    Cookie token <span class="font-mono text-indigo-700">{{ \Illuminate\Support\Str::limit($contact->visitor_id, 16, '...') }}</span> confirmed. Associated with {{ $contact->visitor_total_submissions }} total submission(s).
                                @else
                                    No tracking cookie present (private browsing, cookies blocked, or automated agent).
                                @endif
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 rounded-xl border border-slate-100 bg-slate-50/60 p-3 text-xs">
                        <span class="mt-0.5 flex h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
                        <div class="flex-1 space-y-0.5">
                            <div class="flex items-center justify-between">
                                <span class="font-semibold text-slate-800">Database Transaction Committed</span>
                                <span class="font-mono text-[10px] text-slate-400">Record #{{ $contact->id }}</span>
                            </div>
                            <p class="text-slate-500 text-[11px]">Lead payload securely stored in table <code class="text-slate-700 font-mono">contacts</code> with full telemetry columns.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column: Premium Visitor Tracking Card -->
        <div class="space-y-6">
            <div class="rounded-[2.25rem] border border-slate-200/80 bg-white p-6 sm:p-7 shadow-xl shadow-slate-200/50">
                <!-- Card Header -->
                <div class="flex items-center justify-between pb-5 border-b border-slate-100">
                    <div class="flex items-center gap-2.5">
                        <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-gradient-to-tr from-[#FD5528] to-orange-400 text-white shadow-sm shadow-orange-500/30">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-slate-900 tracking-tight">VISITOR TRACKING</h3>
                            <p class="text-[11px] text-slate-500">Real-time network & telemetry audit</p>
                        </div>
                    </div>

                    <!-- Status Indicator -->
                    @php
                        $statusClass = 'bg-slate-100 text-slate-700 border-slate-200';
                        $statusText = 'Not Available';
                        $dotClass = 'bg-slate-400';

                        if ($contact->visitor_id && $contact->ip_address) {
                            $statusClass = 'bg-emerald-50 text-emerald-800 border-emerald-200';
                            $statusText = 'Captured';
                            $dotClass = 'bg-emerald-500';
                        } elseif ($contact->ip_address && ! $contact->visitor_id) {
                            $statusClass = 'bg-amber-50 text-amber-800 border-amber-200';
                            $statusText = 'Cookies Blocked';
                            $dotClass = 'bg-amber-500';
                        } elseif ($contact->consent_status === 'disabled') {
                            $statusClass = 'bg-slate-100 text-slate-700 border-slate-300';
                            $statusText = 'Tracking Disabled';
                            $dotClass = 'bg-slate-500';
                        }
                    @endphp
                    <span class="inline-flex items-center gap-1.5 rounded-full border px-3 py-1 text-xs font-bold {{ $statusClass }}">
                        <span class="h-2 w-2 rounded-full {{ $dotClass }} animate-pulse"></span>
                        {{ $statusText }}
                    </span>
                </div>

                <div class="mt-6 space-y-5">
                    <!-- 1. Visitor Identifier -->
                    <div class="rounded-2xl border border-slate-100 bg-slate-50/70 p-4 transition hover:border-slate-200">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-semibold uppercase tracking-wider text-slate-500 flex items-center gap-1">
                                Visitor Identifier
                                <span class="cursor-help text-slate-400 hover:text-slate-600" title="First-party non-sensitive persistent cookie identifier (bc_visitor_id)">ⓘ</span>
                            </span>
                            @if($contact->visitor_id)
                                <button type="button" onclick="copyText(this, '{{ $contact->visitor_id }}')" class="inline-flex items-center gap-1 rounded-lg bg-white px-2.5 py-1 text-[11px] font-semibold text-slate-600 border border-slate-200 shadow-xs hover:border-[#FD5528] hover:text-[#FD5528] transition cursor-pointer">
                                    <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                                    <span>Copy ID</span>
                                </button>
                            @endif
                        </div>

                        @if($contact->visitor_id)
                            <div class="mt-2.5">
                                <span class="font-mono text-xs text-indigo-900 bg-indigo-50/80 border border-indigo-200/80 rounded-xl px-3 py-2 block select-all break-all shadow-xs">
                                    {{ $contact->visitor_id }}
                                </span>
                            </div>
                            <div class="mt-2.5 flex items-center gap-2">
                                <a href="{{ route('submissions.index', ['visitor_id' => $contact->visitor_id]) }}" class="inline-flex items-center gap-1.5 rounded-xl bg-gradient-to-r from-indigo-600 to-indigo-700 px-3.5 py-1.5 text-xs font-semibold text-white shadow-xs hover:from-indigo-700 hover:to-indigo-800 transition">
                                    <span>{{ $contact->visitor_total_submissions }} {{ \Illuminate\Support\Str::plural('submission', $contact->visitor_total_submissions) }} from this visitor</span>
                                    <span>&rarr;</span>
                                </a>
                            </div>
                        @else
                            <div class="mt-2 flex items-center gap-2 text-xs text-slate-500 italic">
                                <svg class="h-4 w-4 text-slate-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                <span>No cookie tracking identifier available (client blocked or cleared cookies)</span>
                            </div>
                        @endif
                    </div>

                    <!-- 2. Server Detected IP -->
                    <div class="rounded-2xl border border-slate-100 bg-slate-50/70 p-4 transition hover:border-slate-200">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-semibold uppercase tracking-wider text-slate-500 flex items-center gap-1">
                                Server Detected IP
                                <span class="cursor-help text-slate-400 hover:text-slate-600" title="Authoritative client IP captured server-side via trusted proxy headers">ⓘ</span>
                            </span>
                            @if($contact->ip_address)
                                <div class="flex items-center gap-2">
                                    <span class="rounded-md bg-slate-200 px-2 py-0.5 font-mono text-[10px] font-bold text-slate-700">
                                        IPv{{ str_contains($contact->ip_address, ':') ? '6' : '4' }}
                                    </span>
                                    <button type="button" onclick="copyText(this, '{{ $contact->ip_address }}')" class="inline-flex items-center gap-1 rounded-lg bg-white px-2.5 py-1 text-[11px] font-semibold text-slate-600 border border-slate-200 shadow-xs hover:border-[#FD5528] hover:text-[#FD5528] transition cursor-pointer">
                                        <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                                        <span>Copy IP</span>
                                    </button>
                                </div>
                            @endif
                        </div>

                        @if($contact->ip_address)
                            <div class="mt-2.5 flex flex-wrap items-center gap-2.5">
                                <span class="font-mono text-sm font-bold text-slate-900 bg-white border border-slate-200 rounded-xl px-3.5 py-2 shadow-xs select-all">
                                    {{ $contact->ip_address }}
                                </span>
                                <a href="{{ route('submissions.index', ['ip_address' => $contact->ip_address]) }}" class="inline-flex items-center gap-1 text-xs font-semibold text-[#FD5528] hover:underline">
                                    <span>Filter submissions by IP</span>
                                    <span>&rarr;</span>
                                </a>
                            </div>
                            <p class="mt-1.5 text-[11px] text-slate-400">Verified server capture. Never populated via untrusted client-side script.</p>
                        @else
                            <div class="mt-2 flex items-center gap-2 text-xs text-slate-500 italic">
                                <svg class="h-4 w-4 text-slate-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                                <span>No IP address captured</span>
                            </div>
                        @endif
                    </div>

                    <!-- 3. Client Environment Grid -->
                    <div class="grid gap-3 sm:grid-cols-3">
                        <!-- Browser -->
                        <div class="rounded-xl border border-slate-100 bg-slate-50/70 p-3">
                            <span class="text-[10px] font-semibold uppercase tracking-wider text-slate-400 block">Browser</span>
                            <span class="mt-1 text-xs font-bold text-slate-800 block truncate" title="{{ $contact->browser ?? 'Not captured' }}">
                                {{ $contact->browser ?? 'Not captured' }}
                            </span>
                        </div>

                        <!-- OS -->
                        <div class="rounded-xl border border-slate-100 bg-slate-50/70 p-3">
                            <span class="text-[10px] font-semibold uppercase tracking-wider text-slate-400 block">Operating System</span>
                            <span class="mt-1 text-xs font-bold text-slate-800 block truncate" title="{{ $contact->os ?? 'Not captured' }}">
                                {{ $contact->os ?? 'Not captured' }}
                            </span>
                        </div>

                        <!-- Device -->
                        <div class="rounded-xl border border-slate-100 bg-slate-50/70 p-3">
                            <span class="text-[10px] font-semibold uppercase tracking-wider text-slate-400 block">Device Type</span>
                            <span class="mt-1 inline-flex items-center gap-1 text-xs font-bold text-slate-800">
                                @if(strtolower((string) $contact->device_type) === 'mobile')
                                    📱 Mobile
                                @elseif(strtolower((string) $contact->device_type) === 'tablet')
                                    📟 Tablet
                                @elseif(strtolower((string) $contact->device_type) === 'bot')
                                    🤖 Bot/Spider
                                @else
                                    💻 {{ $contact->device_type ?? 'Desktop' }}
                                @endif
                            </span>
                        </div>
                    </div>

                    <!-- 4. Navigation & Traffic Attribution -->
                    <div class="rounded-2xl border border-slate-100 bg-slate-50/70 p-4 space-y-3">
                        <div>
                            <span class="text-[11px] font-semibold uppercase tracking-wider text-slate-400 block">Referrer Source</span>
                            @if($contact->referrer)
                                <a href="{{ $contact->referrer }}" target="_blank" rel="noopener noreferrer" class="mt-1 text-xs font-semibold text-[#FD5528] hover:underline block truncate" title="{{ $contact->referrer }}">
                                    {{ $contact->referrer }}
                                </a>
                            @else
                                <span class="mt-1 text-xs text-slate-500 block">Direct / Organic Navigation (No HTTP referer)</span>
                            @endif
                        </div>

                        <div class="pt-2 border-t border-slate-200/60">
                            <span class="text-[11px] font-semibold uppercase tracking-wider text-slate-400 block">Landing / Form URL</span>
                            @if($contact->landing_page)
                                <a href="{{ $contact->landing_page }}" target="_blank" rel="noopener noreferrer" class="mt-1 text-xs font-medium text-slate-800 hover:text-[#FD5528] block truncate" title="{{ $contact->landing_page }}">
                                    {{ $contact->landing_page }}
                                </a>
                            @else
                                <span class="mt-1 text-xs text-slate-500 block">{{ url('/contact') }}</span>
                            @endif
                        </div>
                    </div>

                    <!-- 5. Submission Timestamp & Consent Summary -->
                    <div class="flex items-center justify-between rounded-xl bg-slate-100/70 px-4 py-3 text-xs text-slate-600">
                        <div>
                            <span class="font-semibold text-slate-800">Submission Date:</span>
                            <span class="font-mono text-slate-700 ml-1">{{ $contact->created_at?->timezone('Asia/Kolkata')?->format('d M, Y H:i:s') }} IST</span>
                        </div>
                        <span class="rounded-md bg-white border border-slate-200 px-2 py-0.5 text-[11px] font-bold text-slate-700 uppercase">
                            Consent: {{ $contact->consent_status ?? 'Captured' }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function copyText(btn, text) {
    if (!navigator.clipboard) {
        const input = document.createElement('textarea');
        input.value = text;
        document.body.appendChild(input);
        input.select();
        document.execCommand('copy');
        document.body.removeChild(input);
        showCopied(btn);
        return;
    }

    navigator.clipboard.writeText(text).then(() => {
        showCopied(btn);
    }).catch(err => {
        console.error('Copy failed:', err);
    });
}

function showCopied(btn) {
    const originalHtml = btn.innerHTML;
    btn.innerHTML = '<span class="text-emerald-600 font-bold">✓ Copied</span>';
    setTimeout(() => {
        btn.innerHTML = originalHtml;
    }, 2000);
}
</script>
@endsection
