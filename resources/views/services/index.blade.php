@extends('layout.main')

@section('content')
<div class="relative mt-32 space-y-6 overflow-hidden">
    <div class="pointer-events-none absolute inset-x-0 top-0 -z-10 h-56 bg-gradient-to-b from-[#FD5528]/10 via-transparent to-transparent blur-3xl"></div>
    <div class="pointer-events-none absolute -left-24 top-16 -z-10 h-64 w-64 rounded-full bg-orange-400/10 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-24 top-24 -z-10 h-56 w-56 rounded-full bg-[#FD5528]/10 blur-3xl"></div>

    <div class="flex flex-col gap-4 rounded-[2.25rem] border border-slate-200/70 bg-white/75 p-6 shadow-2xl shadow-slate-200/40 backdrop-blur-xl sm:flex-row sm:items-center sm:justify-between">
        <div class="space-y-2">
            <span class="inline-flex items-center rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-[#FD5528]">Service Library</span>
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-slate-900">Services</h2>
                <p class="mt-1 max-w-2xl text-sm text-slate-500">Manage service cards from the backend with an orange and white visual style that feels clean and premium.</p>
            </div>
        </div>

        <a href="{{ route('services.create') }}" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20] hover:shadow-xl hover:shadow-[#FD5528]/30 active:scale-[0.98]">
            + Add Service
        </a>
    </div>

    @if(session('success'))
        <div class="rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-emerald-700 shadow-sm shadow-emerald-100/60">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
        @forelse($services as $service)
            <article data-aos="fade-up" data-aos-delay="100" class="group relative overflow-hidden rounded-[2rem] border border-orange-200/80 bg-white/90 p-7 shadow-xl shadow-orange-100/60 backdrop-blur-xl transition duration-300 hover:-translate-y-1 hover:shadow-2xl hover:shadow-orange-200/70">
                <div class="pointer-events-none absolute inset-0 bg-gradient-to-br from-[#FD5528]/10 via-white/30 to-orange-50 opacity-0 transition duration-300 group-hover:opacity-100"></div>
                <div class="relative z-10 flex h-full flex-col text-center">
                    <div class="space-y-4">
                        <span class="inline-flex items-center justify-center rounded-full bg-[#FD5528]/10 px-3 py-1 text-[0.65rem] font-semibold uppercase tracking-[0.35em] text-[#FD5528]">
                            {{ $service->badge_text ?? 'Service' }}
                        </span>

                        <div class="mx-auto flex h-20 w-20 items-center justify-center overflow-hidden rounded-full bg-gradient-to-br from-[#FD5528] to-[#ff8a3d] shadow-lg shadow-[#FD5528]/25 ring-4 ring-white">
                            @if($service->icon_image)
                                <img src="{{ asset('storage/'.$service->icon_image) }}" alt="{{ $service->title }}" class="h-14 w-14 object-contain">
                            @else
                                <span class="text-lg font-bold text-white">{{ $service->icon ?? 'S' }}</span>
                            @endif
                        </div>

                        <div class="space-y-2">
                            <h3 class="text-xl font-bold tracking-tight text-slate-900">{{ $service->title }}</h3>
                            <p class="text-sm leading-6 text-slate-500">
                                {{ $service->summary ? \Illuminate\Support\Str::limit($service->summary, 120) : 'No summary yet.' }}
                            </p>
                        </div>
                    </div>

                    <div class="mt-5 flex flex-1 flex-col justify-between gap-4">
                        <div class="space-y-3">
                            <div class="flex flex-wrap items-center justify-center gap-2">
                                @foreach(($service->highlights ?? []) as $highlight)
                                    <span class="rounded-full border border-[#FD5528]/25 bg-[#FD5528]/5 px-3 py-1 text-xs font-semibold text-[#FD5528]">
                                        {{ $highlight }}
                                    </span>
                                @endforeach
                            </div>

                            <div class="flex flex-wrap items-center justify-center gap-2">
                                @foreach(($service->technologies ?? []) as $technology)
                                    <span class="rounded-full bg-orange-50 px-3 py-1 text-xs font-semibold text-orange-700 ring-1 ring-orange-200">
                                        {{ $technology }}
                                    </span>
                                @endforeach
                            </div>
                        </div>

                        <div class="flex items-center justify-center gap-3 pt-4">
                            <a href="{{ route('services.edit', $service->id) }}" class="inline-flex items-center justify-center rounded-xl bg-sky-500/10 px-4 py-2 text-xs font-semibold text-sky-700 transition hover:bg-sky-500/20 hover:text-sky-800">
                                Edit
                            </a>
                            <form action="{{ route('services.destroy', $service->id) }}" method="POST" onsubmit="return confirm('Delete this service?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-flex items-center justify-center rounded-xl bg-rose-500/10 px-4 py-2 text-xs font-semibold text-rose-600 transition hover:bg-rose-500/20 hover:text-rose-700">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </article>
        @empty
            <div class="rounded-[2rem] border border-dashed border-orange-200 bg-white/75 px-6 py-12 text-center text-slate-500 shadow-lg shadow-orange-50 md:col-span-2 xl:col-span-3">
                <div class="mx-auto mb-3 flex h-14 w-14 items-center justify-center rounded-full bg-[#FD5528]/10 text-lg font-bold text-[#FD5528]">
                    +
                </div>
                <p class="text-base font-semibold text-slate-700">No services found.</p>
                <p class="mt-1 text-sm text-slate-500">Add your first service to start building the backend portfolio.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
