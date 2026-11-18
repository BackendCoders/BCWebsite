@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="w-full">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 rounded-2xl border border-slate-200 bg-white p-4 sm:px-6 sm:py-4 shadow-sm">

            {{-- Result Summary --}}
            <div class="text-xs sm:text-sm text-slate-500 font-medium order-2 sm:order-1 text-center sm:text-left">
                Showing
                <span class="font-semibold text-slate-900">{{ $paginator->firstItem() }}</span>
                to
                <span class="font-semibold text-slate-900">{{ $paginator->lastItem() }}</span>
                of
                <span class="font-semibold text-slate-900">{{ $paginator->total() }}</span>
                results
            </div>

            {{-- Pagination Links --}}
            <div class="flex items-center gap-1.5 sm:gap-2 order-1 sm:order-2">

                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <span aria-disabled="true" aria-label="Previous page"
                          class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-100 bg-slate-50 text-slate-300 cursor-not-allowed select-none">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </span>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="Previous page"
                       class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-700 shadow-sm transition hover:border-[#FD5528] hover:bg-orange-50 hover:text-[#FD5528] active:scale-95">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <span aria-disabled="true"
                              class="inline-flex h-10 w-10 items-center justify-center text-xs sm:text-sm font-semibold text-slate-400 select-none">
                            {{ $element }}
                        </span>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span aria-current="page"
                                      class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-r from-[#FD5528] to-[#fbb03b] text-xs sm:text-sm font-bold text-white shadow-md shadow-[#FD5528]/30 select-none">
                                    {{ $page }}
                                </span>
                            @else
                                <a href="{{ $url }}" aria-label="Go to page {{ $page }}"
                                   class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 bg-white text-xs sm:text-sm font-semibold text-slate-700 shadow-sm transition hover:border-[#FD5528] hover:bg-orange-50 hover:text-[#FD5528] active:scale-95">
                                    {{ $page }}
                                </a>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="Next page"
                       class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-700 shadow-sm transition hover:border-[#FD5528] hover:bg-orange-50 hover:text-[#FD5528] active:scale-95">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                @else
                    <span aria-disabled="true" aria-label="Next page"
                          class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-100 bg-slate-50 text-slate-300 cursor-not-allowed select-none">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                @endif

            </div>

        </div>
    </nav>
@endif

