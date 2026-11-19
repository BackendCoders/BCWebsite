@extends('layout.main')

@section('content')
<div class="relative mx-auto mt-32 max-w-7xl space-y-6 overflow-hidden">
    <div class="pointer-events-none absolute inset-x-0 top-0 -z-10 h-56 bg-gradient-to-b from-[#FD5528]/10 via-transparent to-transparent blur-3xl"></div>
    <div class="pointer-events-none absolute -right-20 top-16 -z-10 h-48 w-48 rounded-full bg-[#FD5528]/10 blur-3xl"></div>
    <div class="pointer-events-none absolute -left-24 top-28 -z-10 h-64 w-64 rounded-full bg-sky-400/10 blur-3xl"></div>

    <div class="flex flex-col gap-4 rounded-[2.25rem] border border-slate-200/70 bg-white/75 p-6 shadow-2xl shadow-slate-200/40 backdrop-blur-xl sm:flex-row sm:items-center sm:justify-between">
        <div class="space-y-2">
            <span class="inline-flex items-center rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-[#FD5528]">Office & Workplace Media</span>
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-slate-900">Office Gallery CMS</h2>
                <p class="mt-1 max-w-2xl text-sm text-slate-500">Manage real office photographs, developer workstations, team environments, and local SEO media for the /office-gallery showcase.</p>
            </div>
        </div>

        <div class="flex items-center gap-3">
            <a href="{{ route('frontend.office_gallery') }}" target="_blank" class="inline-flex items-center justify-center rounded-2xl border border-slate-300 bg-white px-4 py-2.5 text-sm font-semibold text-slate-700 shadow-sm transition hover:bg-slate-50">
                View Public Page &rarr;
            </a>
            <a href="{{ route('office-images.create') }}" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20] hover:shadow-xl hover:shadow-[#FD5528]/30 active:scale-[0.98]">
                + Upload Images
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-emerald-700 shadow-sm shadow-emerald-100/60">
            {{ session('success') }}
        </div>
    @endif

    @if(session('warning'))
        <div class="rounded-2xl border border-amber-200 bg-amber-50 px-4 py-3 text-amber-800 shadow-sm shadow-amber-100/60">
            {{ session('warning') }}
        </div>
    @endif

    @if(session('error'))
        <div class="rounded-2xl border border-rose-200 bg-rose-50 px-4 py-3 text-rose-700 shadow-sm shadow-rose-100/60">
            {{ session('error') }}
        </div>
    @endif

    <!-- Filter Bar -->
    <div class="flex flex-wrap items-center gap-2 rounded-2xl border border-slate-200/80 bg-white/80 p-3 shadow-sm">
        <a href="{{ route('office-images.index') }}" class="rounded-xl px-3.5 py-1.5 text-xs font-semibold transition {{ !request('category') ? 'bg-[#FD5528] text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">
            All Categories
        </a>
        @foreach($categories as $cat)
            <a href="{{ route('office-images.index', ['category' => $cat]) }}" class="rounded-xl px-3.5 py-1.5 text-xs font-semibold transition {{ request('category') === $cat ? 'bg-[#FD5528] text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">
                {{ $cat }}
            </a>
        @endforeach
    </div>

    <!-- Gallery Grid -->
    <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
        @forelse($images as $image)
            <div class="group overflow-hidden rounded-[2rem] border border-slate-200/70 bg-white/85 shadow-xl shadow-slate-200/40 backdrop-blur-xl transition duration-300 hover:-translate-y-1 hover:shadow-2xl">
                <div class="relative h-52 overflow-hidden bg-slate-100">
                    <img src="{{ $image->image_url }}" alt="{{ $image->alt_text }}" class="h-full w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy">
                    <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-slate-950/60 via-transparent to-transparent"></div>

                    <div class="absolute top-3 left-3 flex gap-2">
                        <span class="rounded-full bg-black/60 backdrop-blur px-2.5 py-1 text-xs font-medium text-white">
                            {{ $image->category }}
                        </span>
                        @if($image->is_featured)
                            <span class="rounded-full bg-[#FD5528] px-2.5 py-1 text-xs font-semibold text-white">
                                Featured
                            </span>
                        @endif
                    </div>

                    <div class="absolute top-3 right-3">
                        <span class="rounded-full px-2.5 py-1 text-xs font-semibold {{ $image->is_published ? 'bg-emerald-500 text-white' : 'bg-amber-500 text-white' }}">
                            {{ $image->is_published ? 'Published' : 'Draft' }}
                        </span>
                    </div>

                    <div class="absolute bottom-3 left-3 right-3 text-white">
                        <p class="text-xs text-slate-200 uppercase tracking-wider">Order: #{{ $image->order }}</p>
                        <h4 class="font-bold text-base truncate">{{ $image->title ?: 'Untitled Image' }}</h4>
                    </div>
                </div>

                <div class="p-5 space-y-4">
                    <p class="text-xs text-slate-500 line-clamp-2">
                        {{ $image->caption ?: 'No caption provided.' }}
                    </p>

                    <div class="text-xs text-slate-400 truncate">
                        <strong>ALT:</strong> {{ $image->alt_text ?: 'N/A' }}
                    </div>

                    <div class="flex items-center justify-between border-t border-slate-100 pt-4">
                        <div class="flex items-center gap-2">
                            <form action="{{ route('office-images.toggle', [$image, 'is_published']) }}" method="POST">
                                @csrf
                                <button type="submit" class="text-xs font-medium px-2.5 py-1 rounded-lg border {{ $image->is_published ? 'border-amber-300 text-amber-700 hover:bg-amber-50' : 'border-emerald-300 text-emerald-700 hover:bg-emerald-50' }}">
                                    {{ $image->is_published ? 'Unpublish' : 'Publish' }}
                                </button>
                            </form>

                            <form action="{{ route('office-images.toggle', [$image, 'is_featured']) }}" method="POST">
                                @csrf
                                <button type="submit" class="text-xs font-medium px-2.5 py-1 rounded-lg border {{ $image->is_featured ? 'border-orange-300 text-orange-700 hover:bg-orange-50' : 'border-slate-200 text-slate-600 hover:bg-slate-50' }}">
                                    {{ $image->is_featured ? 'Unfeature' : 'Feature' }}
                                </button>
                            </form>
                        </div>

                        <div class="flex items-center gap-3">
                            <a href="{{ route('office-images.edit', $image) }}" class="text-xs font-semibold text-slate-700 hover:text-[#FD5528]">
                                Edit
                            </a>

                            <form action="{{ route('office-images.destroy', $image) }}" method="POST" onsubmit="return confirm('Are you sure you want to remove this office image?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-xs font-semibold text-rose-600 hover:text-rose-800">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full rounded-2xl border border-dashed border-slate-300 p-12 text-center">
                <p class="text-slate-500">No office gallery images found in this category.</p>
                <a href="{{ route('office-images.create') }}" class="mt-4 inline-block text-sm font-semibold text-[#FD5528] hover:underline">
                    Upload your first office photograph &rarr;
                </a>
            </div>
        @endforelse
    </div>

    @if($images->hasPages())
        <div class="mt-6">
            {{ $images->links() }}
        </div>
    @endif
</div>
@endsection

