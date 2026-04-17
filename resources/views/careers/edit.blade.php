@extends('layout.main')

@section('content')
<div class="mx-auto max-w-4xl space-y-6">
    <div>
        <h2 class="text-3xl font-bold text-slate-900">Edit career opening</h2>
        <p class="mt-1 text-sm text-slate-500">Update the role details.</p>
    </div>

    <div class="rounded-[2rem] border border-slate-200/70 bg-white/80 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
        <form action="{{ route('careers.update', $career) }}" method="POST" class="grid gap-5">
            @csrf
            @method('PUT')

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Title</label>
                    <input type="text" name="title" value="{{ old('title', $career->title) }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Employment type</label>
                    <input type="text" name="employment_type" value="{{ old('employment_type', $career->employment_type) }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                </div>
            </div>

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Work mode</label>
                    <input type="text" name="work_mode" value="{{ old('work_mode', $career->work_mode) }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Experience</label>
                    <input type="text" name="experience" value="{{ old('experience', $career->experience) }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                </div>
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Description</label>
                <textarea name="description" rows="5" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">{{ old('description', $career->description) }}</textarea>
            </div>

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Button label</label>
                    <input type="text" name="cta_label" value="{{ old('cta_label', $career->cta_label) }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                </div>

                <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3">
                    <input id="is_active" type="checkbox" name="is_active" value="1" class="h-5 w-5 rounded border-slate-300 text-[#FD5528] focus:ring-[#FD5528]" @checked(old('is_active', $career->is_active))>
                    <label for="is_active" class="text-sm font-medium text-slate-700">Show as active opening</label>
                </div>
            </div>

            <div class="flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
                <a href="{{ route('careers.index') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">
                    Cancel
                </a>
                <button type="submit" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20]">
                    Update Career
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
