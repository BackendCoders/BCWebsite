@extends('admin.layouts.app')

@php use Illuminate\Support\Str; @endphp

@section('title', 'Dashboard')

@section('content')
<div class="space-y-6">

    <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
        <x-admin.components.stat-card
            label="Total Categories"
            value="{{ number_format($stats['totalCategories']) }}"
            description="Display segments in the catalog"
            icon="<svg xmlns='http://www.w3.org/2000/svg' class='h-5 w-5' viewBox='0 0 20 20' fill='currentColor'><path d='M4 3h3v3H4V3z'/><path d='M9 3h3v3H9V3z'/><path d='M14 3h3v3h-3V3z'/><path d='M4 8h3v3H4V8z'/><path d='M9 8h3v3H9V8z'/><path d='M14 8h3v3h-3V8z'/></svg>"
            color="indigo"
        />

        <x-admin.components.stat-card
            label="Total Services"
            value="{{ number_format($stats['totalServices']) }}"
            description="Active + archived services"
            icon="<svg xmlns='http://www.w3.org/2000/svg' class='h-5 w-5' viewBox='0 0 20 20' fill='currentColor'><path d='M4 5h12v2H4V5zM4 9h12v2H4V9zM4 13h9v2H4v-2z'/></svg>"
            color="emerald"
        />

        <x-admin.components.stat-card
            label="Active Services"
            value="{{ number_format($stats['activeServices']) }}"
            description="Currently deployable"
            icon="<svg xmlns='http://www.w3.org/2000/svg' class='h-5 w-5' viewBox='0 0 20 20' fill='currentColor'><path fill-rule='evenodd' d='M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.707a1 1 0 00-1.414-1.414L9 10.586 8.121 9.707a1 1 0 00-1.414 1.414L9 13.414l4.707-4.707z' clip-rule='evenodd'/></svg>"
            color="sky"
        />

        <x-admin.components.stat-card
            label="Admins"
            value="{{ number_format($stats['adminUsers']) }}"
            description="{{ number_format($stats['activeUsers']) }} active staff"
            icon="<svg xmlns='http://www.w3.org/2000/svg' class='h-5 w-5' viewBox='0 0 20 20' fill='currentColor'><path d='M10 4a3 3 0 100 6 3 3 0 000-6z'/><path fill-rule='evenodd' d='M2 13a6 6 0 0112 0v3H2v-3zm14 0v3h2v-3a6 6 0 00-6-6h-1.5a.5.5 0 000 1H14a5 5 0 015 5z' clip-rule='evenodd'/></svg>"
            color="amber"
        />
    </div>

    <section class="space-y-4 rounded-3xl border border-slate-100 bg-white p-6 shadow-sm">
        <header class="flex flex-col gap-1 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-slate-500">Service overview</p>
                <h2 class="text-xl font-semibold text-slate-900">Recent Services</h2>
            </div>
            <span class="rounded-2xl bg-indigo-50 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-indigo-600">Updated</span>
        </header>

        @if($recentServices->isEmpty())
            <div class="rounded-2xl border border-dashed border-slate-200 p-8 text-center text-sm text-slate-500">
                <p class="mb-2">No services rolled out yet.</p>
                <div class="mx-auto h-3 w-32 animate-pulse rounded-full bg-slate-200"></div>
            </div>
        @else
            <div class="overflow-hidden rounded-2xl border border-slate-100">
                <table class="w-full text-sm text-slate-600">
                    <thead class="border-b bg-slate-50 text-xs uppercase tracking-wide text-slate-400">
                        <tr>
                            <th class="px-4 py-3 text-left">Title</th>
                            <th class="px-4 py-3 text-left">Category</th>
                            <th class="px-4 py-3 text-left">Price</th>
                            <th class="px-4 py-3 text-left">Status</th>
                            <th class="px-4 py-3 text-left">Updated</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @foreach($recentServices as $service)
                            <tr class="bg-white">
                                <td class="px-4 py-3">
                                    <p class="font-semibold text-slate-900">{{ $service->title }}</p>
                                    <p class="text-xs text-slate-400">{{ $service->duration }}</p>
                                </td>
                                <td class="px-4 py-3">
                                    <span class="text-sm text-slate-500">{{ $service->category->name }}</span>
                                </td>
                                <td class="px-4 py-3">
                                    <span class="font-semibold text-slate-900">${{ number_format($service->price, 2) }}</span>
                                </td>
                                <td class="px-4 py-3">
                                    <span data-status-badge class="rounded-full bg-slate-100 px-3 py-1 text-xs text-slate-500">
                                        {{ $service->status ? 'Active' : 'Draft' }}
                                    </span>
                                </td>
                                <td class="px-4 py-3">
                                    <span class="text-xs text-slate-400">{{ $service->updated_at->diffForHumans() }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </section>

    <section class="space-y-4 rounded-3xl border border-slate-100 bg-white p-6 shadow-sm">
        <header class="flex items-center justify-between">
            <div>
                <p class="text-sm text-slate-500">Curation line</p>
                <h2 class="text-xl font-semibold text-slate-900">Featured Categories</h2>
            </div>
            <span class="text-xs font-semibold uppercase tracking-wide text-slate-400">Priority</span>
        </header>

        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
            @forelse($featuredCategories as $category)
                <article class="rounded-2xl border border-slate-100 bg-slate-50 p-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-semibold text-slate-700">{{ $category->name }}</p>
                            <p class="text-xs text-slate-500">{{ Str::limit($category->description, 80) }}</p>
                        </div>
                        <span class="text-xs text-slate-400">#{{
                            $category->priority
                        }}</span>
                    </div>
                    <div class="mt-4 flex items-center justify-between text-xs text-slate-500">
                        <span>{{ $category->services_count ?? 0 }} services</span>
                        <span>{{ $category->status ? 'Published' : 'Hidden' }}</span>
                    </div>
                </article>
            @empty
                <div class="rounded-2xl border border-dashed border-slate-200 p-6 text-center text-sm text-slate-500">
                    <p>No featured categories yet.</p>
                    <div class="mt-3 h-2 w-24 animate-pulse rounded-full bg-slate-200"></div>
                </div>
            @endforelse
        </div>
    </section>
</div>
@endsection
