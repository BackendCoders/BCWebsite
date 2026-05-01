@extends('layout.main')

@section('content')
<div class="mx-auto max-w-6xl px-4 pb-12 pt-28 sm:px-6 lg:px-8">
    <div class="relative overflow-hidden rounded-[2.25rem] border border-slate-200/70 bg-white/95 p-6 shadow-[0_24px_80px_rgba(15,23,42,0.08)] backdrop-blur-xl">
        <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_top_right,_rgba(253,85,40,0.16),_transparent_28%),radial-gradient(circle_at_bottom_left,_rgba(14,165,233,0.10),_transparent_24%)]"></div>

        <div class="relative z-10 flex flex-col gap-5 lg:flex-row lg:items-end lg:justify-between">
            <div>
                <div class="inline-flex items-center gap-2 rounded-full border border-[#FD5528]/20 bg-[#FD5528]/10 px-4 py-2 text-xs font-semibold uppercase tracking-[0.32em] text-[#FD5528]">
                    Menu
                </div>
                <h2 class="mt-4 text-3xl font-bold tracking-tight text-slate-900">Menu Management</h2>
                <p class="mt-2 max-w-2xl text-sm leading-6 text-slate-500">
                    Organize your navigation items from one colorful, easy-to-scan workspace.
                </p>
            </div>

            <a href="{{ route('menu-items.create') }}"
               class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20]">
                + Add Menu
            </a>
        </div>

        @if(session('success'))
            <div class="mt-6 rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm font-medium text-emerald-700">
                {{ session('success') }}
            </div>
        @endif

        <div class="relative z-10 mt-6 overflow-hidden rounded-[1.75rem] border border-slate-200/70 bg-white shadow-xl shadow-slate-200/40">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-slate-200/70 text-left">
                    <thead class="bg-gradient-to-r from-[#FD5528] via-orange-500 to-amber-400 text-white">
                        <tr>
                            <th class="px-6 py-4 text-xs font-semibold uppercase tracking-[0.28em]">Title</th>
                            <th class="px-6 py-4 text-xs font-semibold uppercase tracking-[0.28em]">Type</th>
                            <th class="px-6 py-4 text-xs font-semibold uppercase tracking-[0.28em]">Page</th>
                            <th class="px-6 py-4 text-xs font-semibold uppercase tracking-[0.28em] text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-slate-200/70 bg-white">
                        @forelse($menus as $menu)
                            <tr class="transition hover:bg-slate-50/80">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-[#FD5528]/10 text-[#FD5528]">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 5.5A1.5 1.5 0 0 1 6 4h9l4.5 4.5V19A1.5 1.5 0 0 1 18 20.5H6A1.5 1.5 0 0 1 4.5 19V5.5Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 4v4.5h4.5" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 11h8M8 15h5" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-slate-900">{{ $menu->title }}</p>
                                            <p class="text-xs text-slate-400">Navigation item</p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-semibold
                                        {{ \App\Models\MenuItem::normalizeType($menu->type) === \App\Models\MenuItem::TYPE_DIGITAL ? 'bg-orange-100 text-orange-700' : 'bg-slate-100 text-slate-700' }}">
                                        {{ $menu->type_label }}
                                    </span>
                                </td>

                                <td class="px-6 py-4 text-slate-600">
                                    {{ $menu->page?->title ?? 'No page' }}
                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="{{ route('menu-items.edit', $menu) }}"
                                           class="inline-flex items-center rounded-xl bg-sky-500 px-4 py-2 text-xs font-semibold text-white shadow-sm transition hover:bg-sky-600">
                                            Edit
                                        </a>

                                        <form action="{{ route('menu-items.destroy', $menu) }}" method="POST"
                                              onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="inline-flex items-center rounded-xl bg-rose-500 px-4 py-2 text-xs font-semibold text-white shadow-sm transition hover:bg-rose-600">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-10 text-center text-slate-500">
                                    No menu items found
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
