@extends('layout.main')

@section('content')
<div class="relative mt-32 space-y-6 overflow-hidden">
    <div class="pointer-events-none absolute inset-x-0 top-0 -z-10 h-56 bg-gradient-to-b from-[#FD5528]/10 via-transparent to-transparent blur-3xl"></div>
    <div class="pointer-events-none absolute -left-24 top-16 -z-10 h-64 w-64 rounded-full bg-orange-400/10 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-24 top-24 -z-10 h-56 w-56 rounded-full bg-[#FD5528]/10 blur-3xl"></div>

    <div class="flex flex-col gap-4 rounded-[2.25rem] border border-slate-200/70 bg-white/75 p-6 shadow-2xl shadow-slate-200/40 backdrop-blur-xl sm:flex-row sm:items-center sm:justify-between">
        <div class="space-y-2">
            <span class="inline-flex items-center rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-[#FD5528]">Category Library</span>
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-slate-900">Category List</h2>
                <p class="mt-1 max-w-2xl text-sm text-slate-500">Manage your categories with a clean orange-white admin view.</p>
            </div>
        </div>

        <a href="{{ route('categories.create') }}" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20] hover:shadow-xl hover:shadow-[#FD5528]/30 active:scale-[0.98]">
            + Add Category
        </a>
    </div>

    @if(session('success'))
        <div class="rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-emerald-700 shadow-sm shadow-emerald-100/60">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-hidden rounded-[2rem] border border-slate-200/70 bg-white/85 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
        <div class="flex flex-col gap-3 border-b border-slate-200/70 p-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h3 class="text-lg font-semibold text-slate-900">All categories</h3>
                <p class="text-sm text-slate-500">Search and review category records at a glance.</p>
            </div>

            <div class="w-full sm:w-auto">
                <input type="text" placeholder="Search category..." class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 sm:w-80">
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gradient-to-r from-orange-50 to-white text-xs uppercase tracking-[0.2em] text-slate-500">
                    <tr>
                        <th class="p-4 font-semibold">ID</th>
                        <th class="p-4 font-semibold">Name</th>
                        <th class="p-4 font-semibold">Slug</th>
                        <th class="p-4 text-center font-semibold">Action</th>
                    </tr>
                </thead>

                <tbody class="text-slate-700">
                    @forelse($categories as $category)
                        <tr class="border-t border-slate-100 transition hover:bg-orange-50/40">
                            <td class="p-4 font-medium text-slate-500">{{ $category->id }}</td>

                            <td class="p-4">
                                <div class="space-y-1">
                                    <div class="font-semibold text-slate-900">{{ $category->name }}</div>
                                </div>
                            </td>

                            <td class="p-4">
                                <span class="inline-flex rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528] ring-1 ring-[#FD5528]/10">
                                    {{ $category->slug }}
                                </span>
                            </td>

                            <td class="p-4">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="{{ route('categories.edit', $category->id) }}" class="inline-flex items-center justify-center rounded-xl bg-sky-500/10 px-3 py-2 text-sm font-semibold text-sky-700 transition hover:bg-sky-500/20 hover:text-sky-800">
                                        Edit
                                    </a>

                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline" onsubmit="return confirm('Delete this category?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="inline-flex items-center justify-center rounded-xl bg-rose-500/10 px-3 py-2 text-sm font-semibold text-rose-600 transition hover:bg-rose-500/20 hover:text-rose-700">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-14 text-center">
                                <div class="mx-auto mb-3 flex h-14 w-14 items-center justify-center rounded-full bg-[#FD5528]/10 text-lg font-bold text-[#FD5528]">
                                    +
                                </div>
                                <p class="text-base font-semibold text-slate-700">No categories found.</p>
                                <p class="mt-1 text-sm text-slate-500">Create your first category to get started.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection
