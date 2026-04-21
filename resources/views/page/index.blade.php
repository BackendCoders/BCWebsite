@extends('layout.main')
@section('content')
<div class="max-w-6xl mx-auto">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">📄 Pages</h2>

        <a href="{{ route('pages.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700">
            + Create Page
        </a>
    </div>

    <!-- Success Message -->
    @if(session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <!-- Table -->
    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-gray-200 text-gray-700">
                <tr>
                    <th class="p-3">Title</th>
                    <th class="p-3">Slug</th>
                    <th class="p-3 text-center">Sections</th>
                    <th class="p-3 text-center">Status</th>
                    <th class="p-3 text-center">Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse($pages as $page)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3 font-medium">{{ $page->title }}</td>
                    <td class="p-3 text-gray-600">{{ $page->slug }}</td>
                    <td class="p-3 text-center">{{ $page->sections_count ?? 0 }}</td>

                    <!-- Status -->
                    <td class="p-3 text-center">
                        @if($page->is_index)
                            <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-sm">
                                Index
                            </span>
                        @else
                            <span class="bg-red-100 text-red-700 px-2 py-1 rounded text-sm">
                                No Index
                            </span>
                        @endif
                    </td>

                    <!-- Actions -->
                    <td class="p-3 text-center space-x-2">

                        <a href="{{ route('pages.show', $page->id) }}"
                           class="bg-slate-700 text-white px-3 py-1 rounded hover:bg-slate-800">
                            Preview
                        </a>

                        <a href="{{ route('frontend.page', $page->slug) }}"
                           target="_blank"
                           class="bg-[#FD5528] text-white px-3 py-1 rounded hover:bg-orange-600">
                            Live
                        </a>

                        @if(auth()->user()?->isAdmin())
                            <a href="{{ route('pages.edit', $page->id) }}"
                               class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500">
                                Builder
                            </a>
                        @endif

                        <form action="{{ route('pages.destroy', $page->id) }}"
                              method="POST"
                              class="inline-block"
                              onsubmit="return confirm('Delete this page?')">
                            @csrf
                            @method('DELETE')

                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                Delete
                            </button>
                        </form>

                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center p-4 text-gray-500">
                        No pages found
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

@endsection
