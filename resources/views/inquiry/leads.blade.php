@extends('layout.main')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <p class="text-sm font-semibold uppercase tracking-[0.35em] text-slate-400">Applications</p>
            <h2 class="mt-2 text-3xl font-bold text-slate-900">Career submissions</h2>
            <p class="mt-1 text-sm text-slate-500">Every application sent from the public career form appears here.</p>
        </div>

        <a href="{{ route('dashboard') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">
            Back to dashboard
        </a>
    </div>

    <div class="grid gap-4 sm:grid-cols-3">
        <div class="rounded-[1.75rem] border border-slate-200/70 bg-white p-5 shadow-sm">
            <p class="text-xs uppercase tracking-[0.35em] text-slate-400">Total submissions</p>
            <p class="mt-3 text-3xl font-bold text-slate-900">{{ $applicationCount ?? $recentApplications->count() }}</p>
        </div>
        <div class="rounded-[1.75rem] border border-slate-200/70 bg-white p-5 shadow-sm">
            <p class="text-xs uppercase tracking-[0.35em] text-slate-400">Latest update</p>
            <p class="mt-3 text-lg font-semibold text-slate-900">
                {{ optional($recentApplications->first())->created_at?->format('d M, Y h:i A') ?? 'No submissions yet' }}
            </p>
        </div>
        <div class="rounded-[1.75rem] border border-slate-200/70 bg-white p-5 shadow-sm">
            <p class="text-xs uppercase tracking-[0.35em] text-slate-400">Newest role</p>
            <p class="mt-3 text-lg font-semibold text-slate-900">
                {{ optional($recentApplications->first())->position ?? 'No submissions yet' }}
            </p>
        </div>
    </div>

    <div class="overflow-hidden rounded-[2rem] border border-slate-200/70 bg-white/80 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200/70 text-left">
                <thead class="bg-slate-50/80 text-xs uppercase tracking-[0.3em] text-slate-400">
                    <tr>
                        <th class="px-6 py-4 font-semibold">Name</th>
                        <th class="px-6 py-4 font-semibold">Phone</th>
                        <th class="px-6 py-4 font-semibold">Email</th>
                        <th class="px-6 py-4 font-semibold">Position</th>
                        <th class="px-6 py-4 font-semibold">Resume</th>
                        <th class="px-6 py-4 font-semibold">Submitted</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200/70">
                    @forelse($recentApplications as $application)
                        <tr class="hover:bg-slate-50/70">
                            <td class="px-6 py-4 font-semibold text-slate-900">{{ $application->full_name }}</td>
                            <td class="px-6 py-4 text-slate-600">{{ $application->phone ?? '-' }}</td>
                            <td class="px-6 py-4 text-slate-600">{{ $application->email }}</td>
                            <td class="px-6 py-4 text-slate-600">{{ $application->position }}</td>
                            <td class="px-6 py-4 text-slate-600">
                                @if($application->resume)
                                    <a href="{{ asset('storage/' . $application->resume) }}" target="_blank" class="font-semibold text-[#FD5528] hover:underline">View resume</a>
                                @else
                                    -
                                @endif
                            </td>
                            <td class="px-6 py-4 text-slate-500">
                                {{ $application->created_at?->format('d M, Y h:i A') }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-10 text-center text-slate-500">No applications received yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
