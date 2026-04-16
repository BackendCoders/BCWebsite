@extends('layout.main')

@section('content')
<div class="mx-auto max-w-4xl space-y-6">
    <div>
        <h2 class="text-3xl font-bold text-slate-900 dark:text-white">Add career opening</h2>
        <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">Create a new role for the careers page.</p>
    </div>

    <div class="rounded-[2rem] border border-slate-200/70 bg-white/80 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl dark:border-white/10 dark:bg-white/5 dark:shadow-black/20">
        <form action="{{ route('careers.store') }}" method="POST" class="grid gap-5">
            @csrf

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Title</label>
                    <input type="text" name="title" value="{{ old('title') }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-white">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Employment type</label>
                    <input type="text" name="employment_type" value="{{ old('employment_type') }}" placeholder="Full Time" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-white">
                </div>
            </div>

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Work mode</label>
                    <input type="text" name="work_mode" value="{{ old('work_mode') }}" placeholder="Remote / Onsite" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-white">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Experience</label>
                    <input type="text" name="experience" value="{{ old('experience') }}" placeholder="2+ Years Experience" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-white">
                </div>
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Description</label>
                <textarea name="description" rows="5" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-white">{{ old('description') }}</textarea>
            </div>

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Button label</label>
                    <input type="text" name="cta_label" value="{{ old('cta_label', 'opening soon') }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-white">
                </div>

                <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 dark:border-white/10 dark:bg-slate-950/40">
                    <input id="is_active" type="checkbox" name="is_active" value="1" class="h-5 w-5 rounded border-slate-300 text-[#FD5528] focus:ring-[#FD5528]" @checked(old('is_active', true))>
                    <label for="is_active" class="text-sm font-medium text-slate-700 dark:text-slate-200">Show as active opening</label>
                </div>
            </div>

            <div class="flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
                <a href="{{ route('careers.index') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528] dark:border-white/10 dark:bg-slate-950/40 dark:text-slate-200">
                    Cancel
                </a>
                <button type="submit" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20]">
                    Save Career
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
