@extends('admin.layouts.app')

@section('title', 'Service Categories')

@section('content')
<div class="space-y-6">

    <div class="flex flex-col gap-3 rounded-3xl border border-slate-100 bg-white p-6 shadow-sm md:flex-row md:items-center md:justify-between">
        <div>
            <p class="text-sm text-slate-500">Segments</p>
            <h1 class="text-2xl font-semibold text-slate-900">Service Categories</h1>
        </div>
        <a href="{{ route('admin.service-categories.create') }}" class="inline-flex items-center gap-2 rounded-2xl border border-indigo-100 px-4 py-2 text-sm font-semibold text-indigo-600 transition hover:bg-indigo-50">Create category</a>
    </div>

    <form method="GET" class="grid gap-3 rounded-3xl border border-slate-100 bg-white p-6 shadow-sm md:grid-cols-2 lg:grid-cols-4">
        <input type="search" name="search" placeholder="Search by name" value="{{ request('search') }}" class="rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none" />
        <select name="status" class="rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none">
            <option value="">All statuses</option>
            <option value="1" {{ request('status') === '1' ? 'selected' : '' }}>Active</option>
            <option value="0" {{ request('status') === '0' ? 'selected' : '' }}>Inactive</option>
        </select>
        <select name="trashed" class="rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none">
            <option value="">Live only</option>
            <option value="with" {{ request('trashed') === 'with' ? 'selected' : '' }}>Include archived</option>
            <option value="only" {{ request('trashed') === 'only' ? 'selected' : '' }}>Archived only</option>
        </select>
        <select name="per_page" class="rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none">
            @foreach([12, 18, 24] as $perPageOption)
                <option value="{{ $perPageOption }}" {{ request('per_page', 12) == $perPageOption ? 'selected' : '' }}>{{ $perPageOption }} per page</option>
            @endforeach
        </select>
        <div class="flex items-center gap-2">
            <label class="text-xs uppercase tracking-wide text-slate-400">Sort</label>
            <select name="sort" class="rounded-2xl border border-slate-200 px-3 py-2 text-sm focus:border-indigo-300 focus:outline-none">
                <option value="priority" {{ request('sort') === 'priority' ? 'selected' : '' }}>Priority</option>
                <option value="name" {{ request('sort') === 'name' ? 'selected' : '' }}>Name</option>
                <option value="created_at" {{ request('sort') === 'created_at' ? 'selected' : '' }}>Created</option>
            </select>
        </div>
        <div class="flex items-center gap-2">
            <label class="text-xs uppercase tracking-wide text-slate-400">Direction</label>
            <select name="direction" class="rounded-2xl border border-slate-200 px-3 py-2 text-sm focus:border-indigo-300 focus:outline-none">
                <option value="desc" {{ request('direction') === 'desc' ? 'selected' : '' }}>Descending</option>
                <option value="asc" {{ request('direction') === 'asc' ? 'selected' : '' }}>Ascending</option>
            </select>
        </div>
        <button type="submit" class="rounded-2xl border border-indigo-100 bg-indigo-50 px-4 py-2 text-sm font-semibold text-indigo-600">Filter</button>
    </form>

    <div class="rounded-3xl border border-slate-100 bg-white p-6 shadow-sm">
        @if($serviceCategories->isEmpty())
            <div class="space-y-2 text-center text-sm text-slate-500">
                <p>No categories found for the selected filters.</p>
                <p>Try changing the search or include archived segments.</p>
            </div>
        @else
            <div class="overflow-hidden rounded-2xl border border-slate-100">
                <table class="w-full text-left text-sm text-slate-600">
                    <thead class="bg-slate-50 text-xs uppercase tracking-wide text-slate-400">
                        <tr>
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Priority</th>
                            <th class="px-4 py-3">Services</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Updated</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @foreach($serviceCategories as $category)
                            <tr class="{{ $category->trashed() ? 'bg-slate-100 text-slate-400' : 'bg-white' }}">
                                <td class="px-4 py-3">
                                    <p class="font-semibold text-slate-900">{{ $category->name }}</p>
                                    <p class="text-xs text-slate-400">{{ $category->slug }}</p>
                                </td>
                                <td class="px-4 py-3 font-semibold text-slate-900">
                                    {{ $category->priority }}
                                </td>
                                <td class="px-4 py-3">
                                    {{ $category->services_count ?? 0 }}
                                </td>
                                <td class="px-4 py-3">
                                    <button
                                        data-toggle-status="{{ route('admin.service-categories.toggle-status', $category) }}"
                                        data-current-status="{{ $category->status ? '1' : '0' }}"
                                        class="rounded-full bg-{{ $category->status ? 'emerald' : 'slate' }}-100 px-3 py-1 text-xs font-semibold text-{{ $category->status ? 'emerald' : 'slate' }}-600"
                                        type="button"
                                    >
                                        {{ $category->status ? 'Active' : 'Inactive' }}
                                    </button>
                                </td>
                                <td class="px-4 py-3 text-xs text-slate-500">
                                    {{ $category->updated_at->diffForHumans() }}
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex flex-wrap gap-2">
                                        <a href="{{ route('admin.service-categories.edit', $category) }}" class="rounded-full border border-slate-200 px-3 py-1 text-xs font-semibold text-slate-600 hover:border-slate-300 hover:text-slate-900">Edit</a>
                                        @if($category->trashed())
                                            <form method="POST" action="{{ route('admin.service-categories.restore', $category->id) }}" class="inline">
                                                @csrf
                                                <button type="submit" class="rounded-full border border-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-600">Restore</button>
                                            </form>
                                        @else
                                            <form method="POST" action="{{ route('admin.service-categories.destroy', $category) }}" data-loading class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="rounded-full border border-rose-100 px-3 py-1 text-xs font-semibold text-rose-600">Archive</button>
                                            </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-6">
                {{ $serviceCategories->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
