@extends('admin.layouts.app')

@php use Illuminate\Support\Str; @endphp

@section('title', 'Services')

@section('content')
<div class="space-y-6">

    <div class="flex flex-col gap-3 rounded-3xl border border-slate-100 bg-white p-6 shadow-sm md:flex-row md:items-center md:justify-between">
        <div>
            <p class="text-sm text-slate-500">Offerings</p>
            <h1 class="text-2xl font-semibold text-slate-900">Services</h1>
        </div>
        <a href="{{ route('admin.services.create') }}" class="inline-flex items-center gap-2 rounded-2xl border border-indigo-100 px-4 py-2 text-sm font-semibold text-indigo-600 transition hover:bg-indigo-50">New service</a>
    </div>

    <form method="GET" class="grid gap-3 rounded-3xl border border-slate-100 bg-white p-6 shadow-sm md:grid-cols-2 lg:grid-cols-4">
        <input type="search" name="search" placeholder="Search by title or summary" value="{{ request('search') }}" class="rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none" />
        <select name="category" class="rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none">
            <option value="">All categories</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
        <select name="status" class="rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none">
            <option value="">Status</option>
            <option value="1" {{ request('status') === '1' ? 'selected' : '' }}>Active</option>
            <option value="0" {{ request('status') === '0' ? 'selected' : '' }}>Draft</option>
        </select>
        <select name="trashed" class="rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none">
            <option value="">Live only</option>
            <option value="with" {{ request('trashed') === 'with' ? 'selected' : '' }}>Include archived</option>
            <option value="only" {{ request('trashed') === 'only' ? 'selected' : '' }}>Archived only</option>
        </select>
        <div class="flex items-center gap-2">
            <label class="text-xs uppercase tracking-wide text-slate-400">Sort</label>
            <select name="sort" class="rounded-2xl border border-slate-200 px-3 py-2 text-sm focus:border-indigo-300 focus:outline-none">
                <option value="priority" {{ request('sort') === 'priority' ? 'selected' : '' }}>Priority</option>
                <option value="title" {{ request('sort') === 'title' ? 'selected' : '' }}>Title</option>
                <option value="price" {{ request('sort') === 'price' ? 'selected' : '' }}>Price</option>
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
        @if($services->isEmpty())
            <div class="space-y-2 text-center text-sm text-slate-500">
                <p>No services match the selected criteria.</p>
                <p>Try broadening the search or restore an archived service.</p>
            </div>
        @else
            <div class="overflow-hidden rounded-2xl border border-slate-100">
                <table class="w-full text-left text-sm text-slate-600">
                    <thead class="bg-slate-50 text-xs uppercase tracking-wide text-slate-400">
                        <tr>
                            <th class="px-4 py-3">Title</th>
                            <th class="px-4 py-3">Category</th>
                            <th class="px-4 py-3 text-center">Duration</th>
                            <th class="px-4 py-3 text-right">Price</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @foreach($services as $service)
                            <tr class="{{ $service->trashed() ? 'bg-slate-100 text-slate-400' : 'bg-white' }}">
                                <td class="px-4 py-3">
                                    <p class="font-semibold text-slate-900">{{ $service->title }}</p>
                                    <p class="text-xs text-slate-400">{{ Str::limit($service->summary, 45) }}</p>
                                </td>
                                <td class="px-4 py-3">
                                    {{ $service->category?->name }}
                                </td>
                                <td class="px-4 py-3 text-center text-xs text-slate-500">{{ $service->duration }}</td>
                                <td class="px-4 py-3 text-right font-semibold text-slate-900">${{ number_format($service->price, 2) }}</td>
                                <td class="px-4 py-3">
                                    <span class="rounded-full bg-{{ $service->status ? 'emerald' : 'slate' }}-100 px-3 py-1 text-xs font-semibold text-{{ $service->status ? 'emerald' : 'slate' }}-600">
                                        {{ $service->status ? 'Active' : 'Draft' }}
                                    </span>
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex flex-wrap gap-2">
                                        <a href="{{ route('admin.services.edit', $service) }}" class="rounded-full border border-slate-200 px-3 py-1 text-xs font-semibold text-slate-600 hover:border-slate-300 hover:text-slate-900">Edit</a>
                                        @if($service->trashed())
                                            <form method="POST" action="{{ route('admin.services.restore', $service->id) }}" class="inline">
                                                @csrf
                                                <button type="submit" class="rounded-full border border-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-600">Restore</button>
                                            </form>
                                        @else
                                            <form method="POST" action="{{ route('admin.services.destroy', $service) }}" data-loading class="inline">
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
                {{ $services->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
