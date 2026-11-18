@extends('component.main')

@php
    $faqItems = $faqItems ?? (
        class_exists(\App\Support\FaqData::class)
            ? \App\Support\FaqData::all()
            : (\App\Http\Controllers\HomeController::getAllFaqList())
    );

    $faqBreadcrumb = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Home',
                'item' => 'https://backendcodersindia.com/',
            ],
            [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => 'Frequently Asked Questions',
                'item' => 'https://backendcodersindia.com/faq',
            ],
        ],
    ];

    $faqSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        '@id' => 'https://backendcodersindia.com/faq#faq',
        'url' => 'https://backendcodersindia.com/faq',
        'mainEntity' => array_map(function ($item) {
            return [
                '@type' => 'Question',
                'name' => $item['q'],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $item['a'],
                ],
            ];
        }, array_values($faqItems)),
    ];
@endphp

@push('head')
    <script type="application/ld+json">{!! json_encode($faqBreadcrumb, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
    <script type="application/ld+json">{!! json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
@endpush

@section('content')

<!-- FAQ HERO SECTION -->
<section class="relative overflow-hidden bg-gradient-to-b from-orange-50/60 via-white to-slate-50 py-16 sm:py-20 lg:py-24 border-b border-slate-200/60">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

        <!-- BADGE -->
        <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-orange-100 text-[#C2410C] text-xs sm:text-sm font-semibold uppercase tracking-wider shadow-sm mb-4">
            Help &amp; Answers
        </span>

        <!-- H1 HEADING -->
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight">
            Frequently Asked <span class="text-[#FD5528]">Questions</span>
        </h1>

        <!-- SUBTEXT -->
        <p class="mt-4 text-base sm:text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
            Find clear, verified answers about website development, SEO services, custom software, project timelines, code ownership, and ongoing technical support from Backend Coders India.
        </p>

    </div>
</section>

<!-- FAQ ACCORDION SECTION -->
<section class="py-16 sm:py-20 bg-slate-50/50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="space-y-4" id="faq-accordion-container">
            @foreach($faqItems as $item)
                <div class="faq-item rounded-2xl border border-slate-200 bg-white shadow-sm transition hover:shadow-md hover:border-[#FD5528]/40 overflow-hidden">
                    <button
                        type="button"
                        class="faq-toggle flex w-full items-center justify-between gap-4 p-5 sm:p-6 text-left transition focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FD5528]"
                        aria-expanded="false"
                        aria-controls="faq-ans-{{ $item['id'] }}"
                        id="faq-btn-{{ $item['id'] }}">
                        <h3 class="text-base sm:text-lg font-bold text-slate-900 leading-snug transition group-hover:text-[#FD5528]">
                            {{ $item['q'] }}
                        </h3>
                        <span class="faq-icon flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-orange-50 text-[#FD5528] font-bold text-xl transition-transform duration-300">
                            +
                        </span>
                    </button>

                    <div
                        id="faq-ans-{{ $item['id'] }}"
                        role="region"
                        aria-labelledby="faq-btn-{{ $item['id'] }}"
                        class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 pb-6 sm:px-6 text-sm sm:text-base text-slate-600 leading-relaxed border-t border-slate-100 pt-4">
                            {!! $item['a_html'] !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- BOTTOM CONTACT CTA -->
        <div class="mt-16 rounded-3xl bg-gradient-to-r from-slate-900 via-slate-800 to-slate-900 p-8 sm:p-12 text-center text-white shadow-xl relative overflow-hidden">
            <div class="absolute -top-12 -right-12 h-44 w-44 rounded-full bg-[#FD5528]/20 blur-2xl pointer-events-none" aria-hidden="true"></div>
            
            <h2 class="text-2xl sm:text-3xl font-extrabold text-white">
                Still Have Questions About Your Project?
            </h2>
            <p class="mt-3 text-sm sm:text-base text-slate-300 max-w-xl mx-auto leading-relaxed">
                Our Kanpur engineering team is here to help with project scoping, architecture planning, and transparent fixed-price quotes.
            </p>

            <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                <a href="tel:+919140092133" class="inline-flex items-center gap-2 rounded-xl bg-[#FD5528] px-6 py-3 text-sm font-semibold text-white shadow-md hover:bg-[#e94c20] transition active:scale-95">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    <span>Call +91 914 0092 133</span>
                </a>

                <a href="https://wa.me/919140092133?text=Hi%20Backend%20Coders%2C%20I%20have%20a%20question%20about%20a%20project" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded-xl border border-emerald-500 bg-emerald-50 px-6 py-3 text-sm font-semibold text-emerald-800 shadow-sm hover:bg-emerald-100 transition active:scale-95">
                    <img src="{{ asset('assets/icons/whatsapp.png') }}" class="h-4 w-4" alt="WhatsApp">
                    <span>WhatsApp Us</span>
                </a>

                <a href="{{ route('frontend.contact') }}" class="inline-flex items-center gap-2 rounded-xl border border-white/20 bg-white/10 px-6 py-3 text-sm font-semibold text-white hover:bg-white/20 transition active:scale-95">
                    <span>Contact Page &rarr;</span>
                </a>
            </div>
        </div>

    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const toggles = document.querySelectorAll(".faq-toggle");

    toggles.forEach(btn => {
        btn.addEventListener("click", () => {
            const isExpanded = btn.getAttribute("aria-expanded") === "true";
            const content = document.getElementById(btn.getAttribute("aria-controls"));
            const icon = btn.querySelector(".faq-icon");

            // Close all
            toggles.forEach(otherBtn => {
                otherBtn.setAttribute("aria-expanded", "false");
                const otherContent = document.getElementById(otherBtn.getAttribute("aria-controls"));
                const otherIcon = otherBtn.querySelector(".faq-icon");
                if (otherContent) otherContent.style.maxHeight = null;
                if (otherIcon) {
                    otherIcon.textContent = "+";
                    otherIcon.classList.remove("rotate-45");
                }
            });

            // If it was closed, open it
            if (!isExpanded) {
                btn.setAttribute("aria-expanded", "true");
                content.style.maxHeight = content.scrollHeight + "px";
                if (icon) {
                    icon.textContent = "×";
                    icon.classList.add("rotate-45");
                }
            }
        });
    });
});
</script>

@endsection
