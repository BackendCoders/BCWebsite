@extends('layout.main')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h2 class="text-3xl font-bold text-slate-900">Detail posts</h2>
            <p class="mt-1 text-sm text-slate-500">Manage detail content from the backend.</p>
        </div>

        <a href="{{ route('details.create') }}" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20]">
            + Add Detail
        </a>
    </div>

    @if(session('success'))
        <div class="rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-emerald-700">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-hidden rounded-[2rem] border border-slate-200/70 bg-white/80 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200/70 text-left">
                <thead class="bg-slate-50/80 text-xs uppercase tracking-[0.3em] text-slate-400">
                    <tr>
                        <th class="px-6 py-4 font-semibold">Image</th>
                        <th class="px-6 py-4 font-semibold">Title</th>
                        <th class="px-6 py-4 font-semibold">Category</th>
                        <th class="px-6 py-4 font-semibold">Status</th>
                        <th class="px-6 py-4 font-semibold">Date</th>
                        <th class="px-6 py-4 font-semibold text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200/70">
                    @forelse($details as $detail)
                        <tr class="hover:bg-slate-50/70">
                            <td class="px-6 py-4">
                                @if($detail->image)
                                    <img src="{{ asset('storage/' . $detail->image) }}" alt="{{ $detail->title }}" class="h-14 w-20 rounded-2xl object-cover ring-1 ring-slate-200">
                                @else
                                    <div class="flex h-14 w-20 items-center justify-center rounded-2xl bg-slate-100 text-xs font-semibold text-slate-400">No image</div>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <p class="font-semibold text-slate-900">{{ $detail->title }}</p>
                                <p class="mt-1 text-sm text-slate-500">
                                    {{ $detail->excerpt ? \Illuminate\Support\Str::limit($detail->excerpt, 70) : 'No excerpt yet.' }}
                                </p>
                            </td>
                            <td class="px-6 py-4 text-slate-600">
                                {{ $detail->category?->name ?? 'Uncategorized' }}
                            </td>
                            <td class="px-6 py-4">
                                @if($detail->is_published)
                                    <span class="rounded-full bg-emerald-500/10 px-3 py-1 text-xs font-semibold text-emerald-600">Published</span>
                                @else
                                    <span class="rounded-full bg-amber-500/10 px-3 py-1 text-xs font-semibold text-amber-600">Draft</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-slate-500">
                                {{ optional($detail->published_at)->format('d M, Y') ?? $detail->created_at->format('d M, Y') }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="inline-flex gap-2">
                                    <a href="{{ route('details.edit', $detail) }}" class="rounded-xl bg-sky-500/10 px-3 py-2 text-sm font-semibold text-sky-600 transition hover:bg-sky-500/20">
                                        Edit
                                    </a>
                                    <form action="{{ route('details.destroy', $detail) }}" method="POST" onsubmit="return confirm('Delete this detail post?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="rounded-xl bg-rose-500/10 px-3 py-2 text-sm font-semibold text-rose-600 transition hover:bg-rose-500/20">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-10 text-center text-slate-500">No detail posts found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
