@extends('component.main')

@section('content')
@php
    $sections = $page?->sections ?? collect();
    $heroSection = $sections->firstWhere('type', 'hero');
    $heroItem = $heroSection?->items?->first();
    $contentSections = $sections->reject(fn ($section) => \Illuminate\Support\Str::lower((string) $section->type) === 'hero')->values();
    $sectionAnchors = $contentSections->map(function ($section, $index) {
        return [
            'id' => 'section-' . ($section->id ?? $index),
            'label' => $section->title ?: ucfirst(str_replace(['-', '_'], ' ', (string) $section->type)),
        ];
    });

    $mediaUrl = function ($path) {
        if (! $path) {
            return null;
        }

        if (\Illuminate\Support\Str::startsWith($path, ['http://', 'https://', '//'])) {
            return $path;
        }

        if (\Illuminate\Support\Str::startsWith($path, 'storage/')) {
            return asset($path);
        }

        return asset('storage/' . ltrim($path, '/'));
    };

    $firstItem = fn ($section) => $section?->items?->first();
    $heroExtra = $heroItem?->extra ?? [];
    $pageTitle = $page->meta_title ?: $page->title;
    $pageDescription = $page->meta_description;
@endphp

<main class="bg-white">
    <!-- @auth
        <section class="border-b border-slate-200 bg-slate-50/80">
            <div class="mx-auto flex max-w-7xl flex-col gap-4 px-6 py-4 lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">CMS Links</p>
                    <h2 class="mt-1 text-lg font-semibold text-slate-900">Manage this dynamic page</h2>
                </div>

                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('pages.index') }}" class="rounded-xl border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">
                        All Pages
                    </a>
                    <a href="{{ route('pages.create') }}" class="rounded-xl bg-[#FD5528] px-4 py-2 text-sm font-semibold text-white transition hover:bg-orange-600">
                        Create Page
                    </a>
                    <a href="{{ route('pages.edit', $page->id) }}" class="rounded-xl border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">
                        Edit This Page
                    </a>
                </div>
            </div>
        </section>
    @endauth -->

    <!-- @if($sectionAnchors->isNotEmpty())
        <section class="border-b border-slate-200 bg-white/95">
            <div class="mx-auto max-w-7xl px-6 py-4">
                <div class="flex flex-wrap items-center gap-3">
                    <span class="text-xs font-semibold uppercase tracking-[0.35em] text-slate-400">Jump to section</span>
                    @foreach($sectionAnchors as $anchor)
                        <a href="#{{ $anchor['id'] }}" class="rounded-full border border-slate-200 px-4 py-2 text-sm text-slate-600 transition hover:border-[#FD5528] hover:text-[#FD5528]">
                            {{ $anchor['label'] }}
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif -->

    <section class="relative overflow-hidden py-16 text-white sm:py-20 lg:py-24">
        <div class="pointer-events-none absolute inset-0 opacity-50">
            <div class="absolute -top-20 right-0 h-72 w-72 rounded-full bg-white/10 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 h-72 w-72 rounded-full bg-[#FD5528]/25 blur-3xl"></div>
        </div>

        <div class="relative mx-auto grid max-w-7xl items-center gap-12 px-6 lg:grid-cols-2">
            <div>
                @if($heroExtra['eyebrow'] ?? null)
                    <span class="inline-flex rounded-full border border-white/20 bg-white/10 px-4 py-2 text-xs font-semibold uppercase tracking-[0.35em] text-black">
                        {{ $heroExtra['eyebrow'] }}
                    </span>
                @else
                    <span class="inline-flex rounded-full border border-white/20 bg-white/10 px-4 py-2 text-xs font-semibold uppercase tracking-[0.35em] text-black">
                        {{ $pageTitle }}
                    </span>
                @endif

                <h1 class="mt-5 text-4xl text-black font-bold leading-tight sm:text-5xl lg:text-6xl">
                    @if($heroItem && $heroItem->title)
                        {!! $heroItem->title !!}
                    @else
                        {{ $pageTitle }}
                    @endif
                </h1>

                @if($heroItem && $heroItem->description)
                    <div class="mt-6 max-w-2xl text-base leading-8 text-black sm:text-lg">
                        {!! nl2br(e($heroItem->description)) !!}
                    </div>
                @elseif($pageDescription)
                    <p class="mt-6 max-w-2xl text-base leading-8 text-black sm:text-lg">
                        {{ $pageDescription }}
                    </p>
                @endif

                @if(($heroExtra['sub_text'] ?? null) || ($heroExtra['button'] ?? null) || ($heroExtra['button_text'] ?? null))
                    <div class="mt-8 flex flex-col gap-4 sm:flex-row">
                        @if($heroExtra['button'] ?? null || $heroExtra['button_text'] ?? null)
                            <a
                                href="{{ $heroExtra['button_url'] ?? route('frontend.contact') }}"
                                target="{{ $heroExtra['button_target'] ?? '_self' }}"
                                class="inline-flex items-center justify-center rounded-xl bg-white px-6 py-3 font-semibold text-[#FD5528] shadow-lg shadow-black/10 transition hover:scale-[1.02]"
                            >
                                {{ $heroExtra['button'] ?? $heroExtra['button_text'] }}
                            </a>
                        @endif

                        @if($heroExtra['secondary_button'] ?? null)
                            <a
                                href="{{ $heroExtra['secondary_button_url'] ?? '#' }}"
                                target="{{ $heroExtra['secondary_button_target'] ?? '_self' }}"
                                class="inline-flex items-center justify-center rounded-xl border border-white/20 px-6 py-3 font-semibold text-white transition hover:bg-white/10"
                            >
                                {{ $heroExtra['secondary_button'] }}
                            </a>
                        @endif
                    </div>
                @endif
            </div>

            <div class="relative">
                @if($heroItem && $heroItem->image)
                    <img
                        src="{{ $mediaUrl($heroItem->image) }}"
                        alt="{{ $heroItem->title }}"
                        class="h-[420px] w-full rounded-[2rem] object-cover shadow-2xl shadow-black/30"
                    >
                @else
                    <div class="flex h-[420px] items-center justify-center rounded-[2rem] border border-white/10 bg-white/5 p-8 text-center backdrop-blur">
                        <div>
                            <p class="text-sm uppercase tracking-[0.4em] text-white/50">Dynamic Page</p>
                            <p class="mt-4 text-2xl font-semibold">Add a hero image in the CMS to show it here.</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    @foreach($contentSections as $section)
        @php
            $items = $section->items ?? collect();
            $sectionType = \Illuminate\Support\Str::lower((string) $section->type);
            $sectionTitle = $section->title ?: data_get($items->first(), 'extra.heading');
            $sectionId = 'section-' . ($section->id ?? $loop->index);
        @endphp

        @switch($sectionType)
            @case('about')
            @case('content')
            @case('text')
                @php $item = $firstItem($section); @endphp
                <section id="{{ $sectionId }}" class="bg-white py-16 sm:py-20">
                    <div class="mx-auto grid max-w-7xl gap-10 px-6 lg:grid-cols-2 lg:items-center">
                        <div>
                            @if($sectionTitle)
                                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">
                                    {{ $sectionTitle }}
                                </p>
                            @endif

                            @if($item && $item->title)
                                <h2 class="mt-4 text-3xl font-bold leading-tight text-slate-900 sm:text-4xl">
                                    {!! $item->title !!}
                                </h2>
                            @endif

                            @if($item && $item->description)
                                <div class="mt-6 space-y-4 text-base leading-8 text-slate-600">
                                    {!! nl2br(e($item->description)) !!}
                                </div>
                            @endif

                            @if(data_get($item, 'extra.button_text') || data_get($item, 'extra.link_text'))
                                <a
                                    href="{{ data_get($item, 'extra.button_url', route('frontend.contact')) }}"
                                    target="{{ data_get($item, 'extra.button_target', '_self') }}"
                                    class="mt-8 inline-flex items-center justify-center rounded-xl bg-[#FD5528] px-6 py-3 font-semibold text-white shadow-lg shadow-[#FD5528]/20 transition hover:bg-orange-600"
                                >
                                    {{ data_get($item, 'extra.button_text', data_get($item, 'extra.link_text', 'Learn More')) }}
                                </a>
                            @endif
                        </div>

                        <div>
                            @if($item && $item->image)
                                <img
                                    src="{{ $mediaUrl($item->image) }}"
                                    alt="{{ $item->title ?? $sectionTitle }}"
                                    class="w-full rounded-[1.75rem] object-cover shadow-2xl shadow-slate-200"
                                >
                            @endif
                        </div>
                    </div>
                </section>

                
                @break

            @case('services')
            @case('cards')
            @case('features')


                <section id="{{ $sectionId }}" class="bg-slate-50 py-16 sm:py-20">
                    <div class="mx-auto max-w-7xl px-6">
                        @if($sectionTitle)
                            <div class="mx-auto max-w-3xl text-center">
                                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">
                                    {{ $sectionTitle }}
                                </p>
                            </div>
                        @endif

                     <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">

@foreach($items as $item)

@php
    $extra = $item->extra ?? [];
@endphp

<article data-aos="fade-up"
  class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] text-gray-900">

  <div class="relative z-10 flex flex-col items-center text-center space-y-4">

    <!-- LABEL -->
    <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">
      {{ data_get($extra, 'label', 'Service') }}
    </span>

    <!-- ICON -->
    <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b]">

      @if($item->image)
        <img src="{{ $mediaUrl($item->image) }}" class="h-14 w-14 object-contain" />
      @else
        <img src="https://img.icons8.com/fluency/48/marker.png" class="h-12 w-12" />
      @endif

    </div>

    <!-- TITLE -->
    <h3 class="text-xl font-semibold">
      {{ $item->title }}
    </h3>

    <!-- DESCRIPTION -->
    <p class="text-sm text-gray-600">
      {{ $item->description }}
    </p>

    <!-- TAGS -->
    @php $tags = data_get($extra, 'tags', []); @endphp
    @if(is_array($tags) && count($tags))
      <div class="flex flex-wrap justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
        @foreach($tags as $tag)
          <span class="rounded-full border px-3 py-1">
            {{ $tag }}
          </span>
        @endforeach
      </div>
    @endif

  </div>

</article>

@endforeach

</div>
                    </div>
                </section>
                @break

            @case('faq')
                <section id="{{ $sectionId }}" class="bg-white py-16 sm:py-20">
                    <div class="mx-auto max-w-5xl px-6">
                        @if($sectionTitle)
                            <div class="text-center">
                                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">{{ $sectionTitle }}</p>
                            </div>
                        @endif

                        <div class="mt-10 space-y-4">
                            @foreach($items as $item)
                                <details class="group rounded-2xl border border-slate-200 bg-slate-50 p-5 shadow-sm">
                                    <summary class="cursor-pointer list-none font-medium text-slate-900">
                                        <span class="flex items-center justify-between gap-4">
                                            <span>{!! $item->title !!}</span>
                                            <span class="text-2xl leading-none text-[#FD5528] group-open:rotate-45">+</span>
                                        </span>
                                    </summary>
                                    @if($item->description)
                                        <div class="mt-4 text-sm leading-7 text-slate-600">
                                            {{ $item->description }}
                                        </div>
                                    @endif
                                </details>
                            @endforeach
                        </div>
                    </div>
                </section>
                @break

            @case('stats')
            @case('metrics')
                <section id="{{ $sectionId }}" class="bg-gradient-to-r from-slate-950 to-[#FD5528] py-16 text-white sm:py-20">
                    <div class="mx-auto max-w-7xl px-6">
                        @if($sectionTitle)
                            <div class="text-center">
                                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-white/70">{{ $sectionTitle }}</p>
                            </div>
                        @endif

                        <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                            @foreach($items as $item)
                                @php $itemExtra = $item->extra ?? []; @endphp
                                <div class="rounded-3xl border border-white/10 bg-white/10 p-6 backdrop-blur">
                                    <p class="text-4xl font-bold">{{ data_get($itemExtra, 'value', $item->title) }}</p>
                                    @if($item->description)
                                        <p class="mt-2 text-sm text-black">{{ $item->description }}</p>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                @break

            @case('timeline')
            @case('process')
            @case('steps')
                <section id="{{ $sectionId }}" class="bg-slate-50 py-16 sm:py-20">
                    <div class="mx-auto max-w-7xl px-6">
                        @if($sectionTitle)
                            <div class="text-center">
                                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">{{ $sectionTitle }}</p>
                            </div>
                        @endif

                        <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
                            @foreach($items as $index => $item)
                                <div class="rounded-[1.75rem] border border-slate-200 bg-white p-6 shadow-sm">
                                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-[#FD5528] font-bold text-white">
                                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                    </div>
                                    @if($item->title)
                                        <h3 class="mt-5 text-lg font-semibold text-slate-900">{{ $item->title }}</h3>
                                    @endif
                                    @if($item->description)
                                        <p class="mt-3 text-sm leading-7 text-slate-600">{{ $item->description }}</p>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                @break

            @case('gallery')
                <section id="{{ $sectionId }}" class="bg-white py-16 sm:py-20">
                    <div class="mx-auto max-w-7xl px-6">
                        @if($sectionTitle)
                            <div class="text-center">
                                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">{{ $sectionTitle }}</p>
                            </div>
                        @endif

                        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            @foreach($items as $item)
                                <div class="overflow-hidden rounded-[1.75rem] border border-slate-200 bg-slate-50 shadow-sm">
                                    @if($item->image)
                                        <img src="{{ $mediaUrl($item->image) }}" alt="{{ $item->title }}" class="h-60 w-full object-cover">
                                    @endif
                                    <div class="p-5">
                                        @if($item->title)
                                            <h3 class="text-lg font-semibold text-slate-900">{{ $item->title }}</h3>
                                        @endif
                                        @if($item->description)
                                            <p class="mt-2 text-sm leading-7 text-slate-600">{{ $item->description }}</p>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                @break

            @case('cta')
                @php $cta = $items->first(); @endphp
                <section id="{{ $sectionId }}" class="relative overflow-hidden bg-gradient-to-r from-[#FC5124] via-[#FD5528] to-orange-400 py-20 text-white">
                    <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top_left,_white,_transparent_50%)]"></div>
                    <div class="relative mx-auto max-w-5xl px-6 text-center">
                        @if($cta && $cta->title)
                            <h2 class="text-3xl font-bold sm:text-4xl md:text-5xl">
                                {!! $cta->title !!}
                            </h2>
                        @endif

                        @if($cta && $cta->description)
                            <p class="mx-auto mt-4 max-w-2xl text-sm text-white/80 sm:text-base md:text-lg">
                                {{ $cta->description }}
                            </p>
                        @endif

                        <!-- @if($cta && (data_get($cta, 'extra.button_text') || data_get($cta, 'extra.button') || data_get($cta, 'extra.link_text')))
                            <div class="mt-10">
                                <a
                                    href="{{ data_get($cta, 'extra.button_url', route('frontend.contact')) }}"
                                    target="{{ data_get($cta, 'extra.button_target', '_self') }}"
                                    class="inline-flex items-center justify-center rounded-xl bg-white px-6 py-3 font-semibold text-[#FC5124] shadow-lg transition hover:scale-105"
                                >
                                    {{ data_get($cta, 'extra.button_text', data_get($cta, 'extra.button', data_get($cta, 'extra.link_text', 'Contact Us'))) }}
                                </a>
                            </div>
                        @endif -->

                        
                    <a href="{{ route('frontend.contact') }}"
                    class="inline-block mt-6 bg-white text-[#FD5528] px-6 py-3 rounded-xl font-semibold hover:bg-gray-100 transition">
                    Start Now
                    </a>
                    </div>
                </section>
                @break

            @default
                <section id="{{ $sectionId }}" class="bg-white py-16 sm:py-20">
                    <div class="mx-auto max-w-7xl px-6">
                        @if($sectionTitle)
                            <div class="text-center">
                                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">{{ $sectionTitle }}</p>
                            </div>
                        @endif

                        <div class="mt-10 space-y-8">
                            @foreach($items as $item)
                                <div class="grid gap-8 lg:grid-cols-2 lg:items-center">
                                    <div>
                                        @if($item->title)
                                            <h3 class="text-2xl font-bold text-slate-900">{!! $item->title !!}</h3>
                                        @endif
                                        @if($item->description)
                                            <p class="mt-4 text-base leading-8 text-slate-600">{{ $item->description }}</p>
                                        @endif
                                    </div>

                                    @if($item->image)
                                        <img src="{{ $mediaUrl($item->image) }}" alt="{{ $item->title }}" class="w-full rounded-[1.5rem] object-cover shadow-lg">
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
        @endswitch
    @endforeach

    @if($contentSections->isEmpty())
        <section class="bg-white py-16 sm:py-20">
            <div class="mx-auto max-w-3xl px-6 text-center">
                <h2 class="text-2xl font-bold text-slate-900">This page has not been built out yet.</h2>
                <p class="mt-4 text-slate-600">
                    Add sections and section items in the CMS to render this page dynamically.
                </p>
            </div>
        </section>
    @endif
</main>
@endsection
