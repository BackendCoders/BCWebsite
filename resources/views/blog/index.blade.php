@extends('layout.main')

@section('content')

<div class="space-y-6">

    <div class="flex flex-col gap-3 md:flex-row md:items-center md:justify-between">
        <div>
            <h2 class="text-2xl font-semibold text-gray-800">Blog Manager</h2>
            <p class="text-sm text-gray-500">Organize articles for the services & marketing team.</p>
        </div>
        <a href="{{ route('dashboard.blog.create') }}"
           class="inline-flex items-center justify-center gap-1 rounded-full bg-gradient-to-r from-orange-500 to-orange-600 px-5 py-2 text-sm font-semibold text-white shadow-lg shadow-orange-200 transition hover:brightness-110">
            + New Blog
        </a>
    </div>

    @if(session('success'))
        <div class="rounded-xl bg-green-100 p-3 text-sm font-medium text-green-700">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-hidden rounded-2xl bg-white shadow-xl">
        <div class="overflow-x-auto">
            <table class="min-w-full text-left text-sm">
                <thead class="bg-gray-50 text-xs uppercase tracking-wide text-gray-500">
                    <tr>
                        <th class="px-4 py-3">Thumbnail</th>
                        <th class="px-4 py-3">Title</th>
                        <th class="px-4 py-3">Category</th>
                        <th class="px-4 py-3">Read Time</th>
                        <th class="px-4 py-3">Published</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    @forelse($blogs as $blog)
                        <tr class="bg-white hover:bg-gray-50">
                            <td class="px-4 py-3 align-middle">
                                <div class="flex items-center gap-3">
                                    <img src="{{ $blog->thumbnail ? asset('storage/' . $blog->thumbnail) : 'https://via.placeholder.com/96x64?text=Blog' }}"
                                         alt="thumbnail"
                                         class="h-14 w-24 rounded-lg object-cover border border-gray-100 shadow-sm">
                                    @if($blog->is_featured)
                                        <span class="text-xs font-semibold uppercase tracking-wide text-orange-500">Featured</span>
                                    @endif
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <div class="text-sm font-medium text-gray-800">{{ $blog->title }}</div>
                                <div class="text-xs text-gray-500">slug: <span class="font-semibold">{{ $blog->slug }}</span></div>
                            </td>
                            <td class="px-4 py-3">
                                <span class="text-sm font-medium text-gray-700">{{ $blog->category->name ?? 'Unassigned' }}</span>
                            </td>
                            <td class="px-4 py-3">
                                <span class="text-sm text-gray-600">{{ $blog->read_time }} min</span>
                            </td>
                            <td class="px-4 py-3">
                                <span class="text-sm text-gray-600">
                                    {{ $blog->published_at ? $blog->published_at->format('M d, Y') : 'Draft' }}
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                <span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-semibold {{ $blog->status ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600' }}">
                                    {{ $blog->status ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td class="px-4 py-3 text-center">
                                <div class="flex items-center justify-center gap-3">
                                    <a href="{{ route('dashboard.blog.edit', $blog) }}"
                                       class="text-sm font-medium text-blue-600 hover:text-blue-800">
                                        Edit
                                    </a>
                                    <form method="POST" action="{{ route('dashboard.blog.destroy', $blog) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-sm font-medium text-red-500 hover:text-red-700"
                                                onclick="return confirm('This will permanently delete the blog entry. Continue?')">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-4 py-10 text-center text-sm text-gray-500">
                                No blogs yet. Add one to get started.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($blogs->hasPages())
            <div class="border-t bg-gray-50 px-5 py-4">
                {{ $blogs->links('pagination::tailwind') }}
            </div>
        @endif
    </div>

</div>

@endsection
