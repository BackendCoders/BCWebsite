@extends('layout.main')

@section('content')

<div class="space-y-6">
    <div class="flex flex-col gap-2 md:flex-row md:items-center md:justify-between">
        <div>
            <h2 class="text-2xl font-semibold text-gray-800">Service Categories</h2>
            <p class="text-sm text-gray-500">Organize service offerings before publishing them.</p>
        </div>
        <a href="{{ route('dashboard.service-categories.create') }}"
           class="inline-flex items-center justify-center gap-2 rounded-full bg-gradient-to-r from-orange-500 to-orange-600 px-5 py-2 text-sm font-semibold text-white shadow-lg shadow-orange-200 transition hover:brightness-110">
            + Add Category
        </a>
    </div>

    @if(session('success'))
        <div class="rounded-2xl bg-green-50 p-3 text-sm font-medium text-green-700">
            {{ session('success') }}
        </div>
    @endif

    @php
        $badgeColors = [
            'orange' => 'bg-orange-500 text-white',
            'blue' => 'bg-blue-500 text-white',
            'green' => 'bg-emerald-500 text-white',
            'purple' => 'bg-purple-500 text-white',
            'slate' => 'bg-slate-500 text-white',
        ];
    @endphp

    <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
        @forelse($serviceCategories as $serviceCategory)
            <article class="group flex flex-col justify-between overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-sm transition hover:shadow-xl">
                <header class="px-6 pt-6">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-500">Priority {{ $serviceCategory->priority }}</span>
                        <span class="text-2xl">{{ $serviceCategory->icon ?? '🧩' }}</span>
                    </div>
                    <h3 class="mt-3 text-lg font-semibold text-gray-800">{{ $serviceCategory->name }}</h3>
                    <p class="mt-2 text-sm text-gray-500">{{ \Illuminate\Support\Str::limit($serviceCategory->description, 120, '...') }}</p>
                </header>

                    <div class="mt-4 flex items-center justify-between px-6 pb-4">
                        <span class="text-xs font-semibold uppercase tracking-widest text-gray-500">Color badge</span>
                        @php
                            $badge = $badgeColors[$serviceCategory->color] ?? $badgeColors['orange'];
                        @endphp
                        <span class="rounded-full px-3 py-1 text-xs font-semibold uppercase tracking-widest {{ $badge }}">
                            {{ $serviceCategory->color ?? 'orange' }}
                        </span>
                    </div>

                <footer class="flex flex-col gap-3 px-6 pb-6">
                    <div class="flex items-center justify-between">
                        <span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-semibold {{ $serviceCategory->status ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600' }}">
                            {{ $serviceCategory->status ? 'Live' : 'Draft' }}
                        </span>
                        <span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-semibold {{ $serviceCategory->is_featured ? 'bg-orange-100 text-orange-600' : 'bg-gray-100 text-gray-600' }}">
                            {{ $serviceCategory->is_featured ? 'Featured' : 'Standard' }}
                        </span>
                    </div>
                    <div class="flex flex-wrap gap-3 text-xs font-semibold uppercase tracking-wide">
                        <a href="{{ route('dashboard.service-categories.edit', $serviceCategory) }}"
                           class="rounded-full border border-orange-200 px-4 py-2 text-orange-600 transition hover:bg-orange-50">
                            Edit
                        </a>
                        <form method="POST" action="{{ route('dashboard.service-categories.destroy', $serviceCategory) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="rounded-full border border-rose-200 px-4 py-2 text-rose-600 hover:bg-rose-50"
                                    onclick="return confirm('Remove this service category?')">
                                Delete
                            </button>
                        </form>
                    </div>
                </footer>
            </article>
        @empty
            <div class="col-span-full rounded-2xl border border-dashed border-gray-300 bg-white/50 p-8 text-center text-sm text-gray-500">
                No service categories yet. Start by adding one.
            </div>
        @endforelse
    </div>
</div>

@endsection
