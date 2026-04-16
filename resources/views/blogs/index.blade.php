@extends('layout.main')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h2 class="text-3xl font-bold text-slate-900 dark:text-white">Blog posts</h2>
            <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">Manage blog content from the backend.</p>
        </div>

        <a href="{{ route('blogs.create') }}" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20]">
            + Add Blog
        </a>
    </div>

    @if(session('success'))
        <div class="rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-emerald-700 dark:border-emerald-500/20 dark:bg-emerald-500/10 dark:text-emerald-300">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-hidden rounded-[2rem] border border-slate-200/70 bg-white/80 shadow-xl shadow-slate-200/40 backdrop-blur-xl dark:border-white/10 dark:bg-white/5 dark:shadow-black/20">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200/70 text-left dark:divide-white/10">
                <thead class="bg-slate-50/80 text-xs uppercase tracking-[0.3em] text-slate-400 dark:bg-white/5">
                    <tr>
                        <th class="px-6 py-4 font-semibold">Image</th>
                        <th class="px-6 py-4 font-semibold">Title</th>
                        <th class="px-6 py-4 font-semibold">Category</th>
                        <th class="px-6 py-4 font-semibold">Status</th>
                        <th class="px-6 py-4 font-semibold">Date</th>
                        <th class="px-6 py-4 font-semibold text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200/70 dark:divide-white/10">
                    @forelse($blogs as $blog)
                        <tr class="hover:bg-slate-50/70 dark:hover:bg-white/5">
                            <td class="px-6 py-4">
                                @if($blog->image)
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="h-14 w-20 rounded-2xl object-cover ring-1 ring-slate-200 dark:ring-white/10">
                                @else
                                    <div class="flex h-14 w-20 items-center justify-center rounded-2xl bg-slate-100 text-xs font-semibold text-slate-400 dark:bg-white/5">No image</div>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <p class="font-semibold text-slate-900 dark:text-white">{{ $blog->title }}</p>
                                <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">
                                    {{ $blog->excerpt ? \Illuminate\Support\Str::limit($blog->excerpt, 70) : 'No excerpt yet.' }}
                                </p>
                            </td>
                            <td class="px-6 py-4 text-slate-600 dark:text-slate-300">
                                {{ $blog->category?->name ?? 'Uncategorized' }}
                            </td>
                            <td class="px-6 py-4">
                                @if($blog->is_published)
                                    <span class="rounded-full bg-emerald-500/10 px-3 py-1 text-xs font-semibold text-emerald-600">Published</span>
                                @else
                                    <span class="rounded-full bg-amber-500/10 px-3 py-1 text-xs font-semibold text-amber-600">Draft</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-slate-500 dark:text-slate-400">
                                {{ optional($blog->published_at)->format('d M, Y') ?? $blog->created_at->format('d M, Y') }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="inline-flex gap-2">
                                    <a href="{{ route('blogs.edit', $blog) }}" class="rounded-xl bg-sky-500/10 px-3 py-2 text-sm font-semibold text-sky-600 transition hover:bg-sky-500/20">
                                        Edit
                                    </a>
                                    <form action="{{ route('blogs.destroy', $blog) }}" method="POST" onsubmit="return confirm('Delete this blog post?')">
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
                            <td colspan="6" class="px-6 py-10 text-center text-slate-500 dark:text-slate-400">No blog posts found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
