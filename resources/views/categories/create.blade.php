@extends('layout.main')

@section('content')
<div class="relative mx-auto mt-32 max-w-5xl space-y-6 overflow-hidden">
    <div class="pointer-events-none absolute inset-x-0 top-0 -z-10 h-56 bg-gradient-to-b from-[#FD5528]/10 via-transparent to-transparent blur-3xl p-4"></div>
    <div class="pointer-events-none absolute -left-24 top-20 -z-10 h-64 w-64 rounded-full bg-orange-400/10 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-24 top-28 -z-10 h-56 w-56 rounded-full bg-[#FD5528]/10 blur-3xl"></div>

    <div class="flex flex-col gap-4 rounded-[2.25rem] border border-slate-200/70 bg-white/75 p-6 shadow-2xl shadow-slate-200/40 backdrop-blur-xl lg:flex-row lg:items-center lg:justify-between">
        <div class="space-y-2">
            <span class="inline-flex items-center rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-[#FD5528]">Category Library</span>
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-slate-900">Add Category</h2>
                <p class="mt-1 max-w-2xl text-sm text-slate-500">Create a new category with a polished orange-white admin layout.</p>
            </div>
        </div>

        <div class="grid gap-3 sm:grid-cols-3">
            <div class="rounded-2xl border border-slate-200/70 bg-white px-4 py-3 shadow-sm">
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-slate-400">Step 1</p>
                <p class="mt-1 text-sm font-semibold text-slate-700">Name</p>
            </div>
            <div class="rounded-2xl border border-slate-200/70 bg-white px-4 py-3 shadow-sm">
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-slate-400">Step 2</p>
                <p class="mt-1 text-sm font-semibold text-slate-700">Slug</p>
            </div>
            <div class="rounded-2xl border border-slate-200/70 bg-white px-4 py-3 shadow-sm">
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-slate-400">Step 3</p>
                <p class="mt-1 text-sm font-semibold text-slate-700">Save</p>
            </div>
        </div>
    </div>

    <div class="grid gap-6 lg:grid-cols-1">
        <div class="rounded-[2rem] border border-slate-200/70 bg-white/85 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
            <form action="{{ route('categories.store') }}" method="POST" class="grid gap-5">
                @csrf

                <div class="grid gap-5 md:grid-cols-2">
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-slate-700">Category Name</label>
                        <input type="text" name="name" placeholder="Enter category name" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                    </div>

                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-slate-700">Slug</label>
                        <input type="text" name="slug" placeholder="Enter category slug" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700">Description</label>
                    <textarea name="description" rows="5" placeholder="Enter description" class="mt-2 w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10"></textarea>
                </div>

                <div class="flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
                    <a href="{{ route('categories.index') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 shadow-sm transition hover:border-[#FD5528] hover:text-[#FD5528]">Cancel</a>
                    <button type="submit" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20] hover:shadow-xl hover:shadow-[#FD5528]/30 active:scale-[0.98]">Save Category</button>
                </div>
            </form>
        </div>

   

    </div>
</div>
@endsection
