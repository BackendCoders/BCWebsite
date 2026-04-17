@extends('layout.main')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h2 class="text-3xl font-bold text-slate-900">Services</h2>
            <p class="mt-1 text-sm text-slate-500">Manage service cards from the backend.</p>
        </div>

        <a href="{{ route('services.create') }}" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20]">
            + Add Service
        </a>
    </div>

    @if(session('success'))
        <div class="rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-emerald-700">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">

@foreach($services as $service)

<article data-aos="fade-up" data-aos-delay="100"
  class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] hover:bg-white/10 hover:backdrop-blur-[18px] text-gray-900">

  <div class="pointer-events-none absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/15 via-white/40 to-white/10 opacity-0 transition duration-500 group-hover:opacity-80 backdrop-blur-[0px] group-hover:backdrop-blur-[24px]"></div>

  <div class="relative z-10 flex flex-col items-center text-center space-y-4">

    <!-- LABEL -->
    <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">
      {{ $service->badge_text ?? 'Service' }}
    </span>

    <!-- ICON -->
    <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-inner">
      @if($service->icon_image)
        <img src="{{ asset('storage/'.$service->icon_image) }}" class="h-14 w-14" />
      @else
        <span class="text-white font-bold text-lg">{{ $service->icon ?? 'S' }}</span>
      @endif
    </div>

    <!-- TITLE -->
    <h3 class="text-xl font-semibold">
      {{ $service->title }}
    </h3>

    <!-- DESCRIPTION -->
    <p class="text-sm text-gray-600">
      {{ \Illuminate\Support\Str::limit($service->summary, 120) }}
    </p>

    <!-- TAGS -->
   <div class="flex flex-1 gap-2">
     <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
      @foreach(($service->highlights ?? []) as $highlight)
        <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">
          {{ $highlight }}
        </span>
      @endforeach
    </div>

    <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
            @foreach(($service->technologies ?? []) as $technology)
                <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">{{ $technology }}</span>
            @endforeach
    </div>
   </div>


    <!-- 🔥 ACTION BUTTONS -->
    <div class="flex gap-3 pt-4">

      <!-- EDIT -->
      <a href="{{ route('services.edit', $service->id) }}"
         class="px-4 py-1 text-xs font-semibold rounded-full bg-sky-500/10 text-sky-600 hover:bg-sky-500/20 transition">
        Edit
      </a>

      <!-- DELETE -->
      <form action="{{ route('services.destroy', $service->id) }}" method="POST"
            onsubmit="return confirm('Delete this service?')">
        @csrf
        @method('DELETE')

        <button type="submit"
                class="px-4 py-1 text-xs font-semibold rounded-full bg-rose-500/10 text-rose-600 hover:bg-rose-500/20 transition">
          Delete
        </button>
      </form>

    </div>

  </div>

</article>

@endforeach

        <!-- @forelse($services as $service)
            <div class="rounded-[2rem] border border-slate-200/70 bg-white/80 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
                <div class="flex items-start justify-between gap-4">
                    <div class="flex items-center gap-3">
                        <div class="flex h-12 w-12 items-center justify-center overflow-hidden rounded-2xl bg-[#FD5528]/10 text-lg font-bold text-[#FD5528]">
                            @if($service->icon_image)
                                <img src="{{ $service->icon_image }}" alt="{{ $service->title }}" class="h-full w-full object-cover">
                            @else
                                {{ $service->icon ?: 'S' }}
                            @endif
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-900">{{ $service->title }}</h3>
                            <p class="text-sm text-slate-500">Priority {{ $service->priority }}</p>
                        </div>
                    </div>

                    @if($service->status)
                        <span class="rounded-full bg-emerald-500/10 px-3 py-1 text-xs font-semibold text-emerald-600">Active</span>
                    @else
                        <span class="rounded-full bg-slate-500/10 px-3 py-1 text-xs font-semibold text-slate-500">Inactive</span>
                    @endif
                </div>

                <div class="mt-4 space-y-2">
                    @if($service->badge_text)
                        <span class="inline-flex rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">{{ $service->badge_text }}</span>
                    @endif
                    @if($service->subtitle)
                        <p class="text-sm font-medium text-slate-500">{{ $service->subtitle }}</p>
                    @endif
                </div>

                <p class="mt-4 text-sm leading-6 text-slate-500">
                    {{ $service->summary ? \Illuminate\Support\Str::limit($service->summary, 120) : 'No summary yet.' }}
                </p>

                <div class="mt-5 flex flex-wrap gap-2">
                    @foreach(($service->highlights ?? []) as $highlight)
                        <span class="rounded-full border border-[#FD5528]/30 px-3 py-1 text-xs font-semibold text-[#FD5528]">{{ $highlight }}</span>
                    @endforeach
                </div>

                <div class="mt-4 flex flex-wrap gap-2">
                    @foreach(($service->technologies ?? []) as $technology)
                        <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">{{ $technology }}</span>
                    @endforeach
                </div>

                <div class="mt-5 flex items-center justify-between gap-2">
                    <span class="rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">{{ $service->slug }}</span>
                    <div class="inline-flex gap-2">
                        <a href="{{ route('services.edit', $service) }}" class="rounded-xl bg-sky-500/10 px-3 py-2 text-sm font-semibold text-sky-600 transition hover:bg-sky-500/20">Edit</a>
                        <form action="{{ route('services.destroy', $service) }}" method="POST" onsubmit="return confirm('Delete this service?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="rounded-xl bg-rose-500/10 px-3 py-2 text-sm font-semibold text-rose-600 transition hover:bg-rose-500/20">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="rounded-[2rem] border border-dashed border-slate-300 px-6 py-10 text-center text-slate-500 md:col-span-2 xl:col-span-3">
                No services found.
            </div>
        @endforelse
    </div> -->
</div>
@endsection
