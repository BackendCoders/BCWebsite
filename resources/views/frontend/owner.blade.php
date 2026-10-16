@extends('component.main')

@section('content')
@php
    $ownerSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'Person',
        '@id' => 'https://backendcodersindia.com/owner#ravindra-verma',
        'name' => 'Ravindra Verma',
        'jobTitle' => 'Founder and Chief Executive Officer',
        'image' => asset('assets/images/ceo.webp'),
        'email' => 'info@backendcodersindia.com',
        'worksFor' => [
            '@type' => 'Organization',
            'name' => 'Backend Coders India',
            'url' => 'https://backendcodersindia.com',
        ],
        'address' => [
            '@type' => 'PostalAddress',
            'addressLocality' => 'Kanpur',
            'addressRegion' => 'Uttar Pradesh',
            'addressCountry' => 'IN',
        ],
        'description' => 'Ravindra Verma is the Founder and CEO of Backend Coders India, leading the company’s work in scalable software platforms, AI workflows, and strategic digital solutions.',
        'knowsAbout' => ['Software architecture', 'Scalable software platforms', 'AI workflows', 'Digital solutions'],
        'sameAs' => ['https://www.linkedin.com/in/ravindra-verma-55801a210/'],
    ];
@endphp

<main class="overflow-hidden bg-white font-sans text-slate-900 selection:bg-[#FD5528] selection:text-white">
    <script type="application/ld+json">{!! json_encode($ownerSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>

    {{-- Executive profile --}}
    <section aria-labelledby="owner-heading" class="relative isolate overflow-hidden bg-[#fbfaf9]">
        <div aria-hidden="true" class="pointer-events-none absolute inset-0 -z-10">
            <div class="absolute -right-32 -top-36 h-[30rem] w-[30rem] rounded-full bg-orange-200/50 blur-[110px]"></div>
            <div class="absolute -bottom-48 left-0 h-[28rem] w-[28rem] rounded-full bg-rose-100/70 blur-[120px]"></div>
            <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-orange-300/70 to-transparent"></div>
        </div>

        <div class="mx-auto grid max-w-7xl grid-cols-1 items-center gap-10 px-5 py-14 sm:px-8 sm:py-20 lg:grid-cols-2 lg:gap-16 lg:px-12 lg:py-24">
            <div data-aos="fade-right">
                <div class="flex flex-wrap items-center gap-x-3 gap-y-2 text-[11px] font-bold uppercase tracking-[.18em] text-slate-500">
                    <span class="inline-flex items-center gap-2 text-[#FD5528]"><span class="h-2 w-2 rounded-full bg-[#FD5528] p-1"></span>Founder </span>
                    <span class="hidden h-1 w-1 rounded-full bg-slate-300 sm:block"></span>
                    
                    <span class="hidden h-1 w-1 p-1 rounded-full bg-slate-300 sm:block"></span>
                    <span> Kanpur, India</span>
                </div>

                <h1 id="owner-heading" class="mt-6 max-w-3xl text-4xl font-black leading-[1.06] tracking-tight text-slate-950 sm:text-5xl lg:text-6xl">
                    Ravindra <span class="text-[#FD5528]">Verma</span>
                </h1>
                <p class="mt-4 text-lg font-semibold text-slate-700 sm:text-xl">Founder &amp; Chief Executive Officer <span class="text-slate-400">at</span> Backend Coders India</p>
                <p class="mt-6 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">
                    Ravindra leads Backend Coders India with a focus on scalable software platforms, AI workflows, and strategic digital solutions. He guides the company’s direction from understanding a business challenge to shaping technology that can support its next stage of growth.
                </p>

                <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                    <a href="{{ route('frontend.contact') }}" class="group inline-flex min-h-12 items-center justify-center rounded-xl bg-[#FD5528] px-6 py-3 text-sm font-bold text-white shadow-lg shadow-orange-900/15 transition hover:-translate-y-0.5 hover:bg-[#e9471c] hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-[#FD5528] focus:ring-offset-2">
                        Discuss your project
                        <svg class="ml-2 h-4 w-4 transition-transform group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-7-7 7 7-7 7" /></svg>
                    </a>
                    <a href="{{ route('frontend.team') }}" class="inline-flex min-h-12 items-center justify-center rounded-xl border border-slate-300 bg-white/80 px-6 py-3 text-sm font-semibold text-slate-800 transition hover:border-slate-400 hover:bg-white focus:outline-none focus:ring-2 focus:ring-slate-400 focus:ring-offset-2">Meet the team</a>
                </div>

                <a href="https://www.linkedin.com/in/ravindra-verma-55801a210/" target="_blank" rel="noopener noreferrer" aria-label="View Ravindra Verma's LinkedIn profile (opens in a new tab)" class="group mt-5 inline-flex min-h-12 items-center gap-3 rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-left shadow-sm transition duration-200 hover:-translate-y-0.5 hover:border-[#0A66C2]/30 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-[#0A66C2] focus:ring-offset-2">
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-[#0A66C2] text-white transition group-hover:bg-[#084f99]" aria-hidden="true">
                        <svg viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.024-3.037-1.85-3.037-1.851 0-2.134 1.445-2.134 2.939v5.667H9.355V9h3.414v1.561h.049c.476-.9 1.637-1.85 3.37-1.85 3.602 0 4.268 2.37 4.268 5.455v6.286ZM5.337 7.433a2.062 2.062 0 1 1 0-4.124 2.062 2.062 0 0 1 0 4.124ZM3.56 20.452h3.558V9H3.56v11.452ZM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003Z"/></svg>
                    </span>
                    <span>
                        <span class="block text-sm font-bold text-slate-900">Connect on LinkedIn</span>
                        <span class="mt-0.5 block text-xs text-slate-500">Ravindra Verma · Founder &amp; CEO</span>
                    </span>
                    <svg class="ml-2 h-4 w-4 text-slate-400 transition group-hover:translate-x-0.5 group-hover:text-[#0A66C2]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17 17 7M7 7h10v10"/></svg>
                </a>

                <div class="mt-10 border-t border-slate-200 pt-6">
                    <p class="text-xs font-bold uppercase tracking-[.16em] text-slate-500">Leadership focus</p>
                    <ul class="mt-4 flex flex-wrap gap-2.5" aria-label="Leadership focus areas">
                        @foreach(['Scalable software', 'AI workflows', 'Digital strategy', 'Business outcomes'] as $focus)
                            <li class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-3.5 py-2 text-xs font-semibold text-slate-700 shadow-sm sm:text-sm"><span class="h-1.5 w-1.5 rounded-full bg-[#FD5528]"></span>{{ $focus }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="relative mx-auto w-full max-w-[440px]" data-aos="fade-left">
                <div aria-hidden="true" class="absolute -inset-4 rounded-[2rem] bg-gradient-to-br from-orange-200/70 via-white to-rose-100/70 blur-xl"></div>
                <article class="relative rounded-[1.6rem] border border-white bg-white p-3 shadow-[0_24px_70px_rgba(15,23,42,.13)] sm:p-4">
                    <div class="relative overflow-hidden rounded-[1.2rem] bg-slate-100">
                        <img src="{{ asset('assets/images/ceo.webp') }}" alt="Ravindra Verma, Founder and CEO of Backend Coders India" width="640" height="800" fetchpriority="high" decoding="async" class="aspect-[4/4.25] w-full object-cover object-top">
                        <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-slate-950/90 via-slate-950/45 to-transparent px-5 pb-5 pt-20 sm:px-7 sm:pb-7">
                            <span class="inline-flex rounded-full border border-white/20 bg-white/15 px-3 py-1 text-[10px] font-bold uppercase tracking-[.16em] text-white backdrop-blur">Founder &amp; CEO</span>
                            <h2 class="mt-2 text-2xl font-extrabold tracking-tight text-white sm:text-3xl">Ravindra Verma</h2>
                            <p class="mt-1 text-sm text-white/80">Backend Coders India</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-3 px-1 pb-1 pt-4 sm:gap-5 sm:px-2 sm:pb-2">
                        <div class="rounded-xl bg-slate-50 px-4 py-3">
                            <p class="text-[10px] font-bold uppercase tracking-[.15em] text-slate-500">Location</p>
                            <p class="mt-1 text-sm font-bold text-slate-900">Kanpur, India</p>
                        </div>
                        <div class="rounded-xl bg-orange-50 px-4 py-3">
                            <p class="text-[10px] font-bold uppercase tracking-[.15em] text-slate-500">Company</p>
                            <p class="mt-1 text-sm font-bold text-slate-900">Backend Coders India</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    {{-- Leadership manifesto --}}
    <section aria-labelledby="manifesto-heading" class="border-y border-slate-200/80 bg-white px-5 py-16 sm:px-8 sm:py-20 lg:px-12 lg:py-24">
        <div class="mx-auto grid max-w-7xl grid-cols-1 items-start gap-8 lg:grid-cols-12 lg:gap-16">
            <div class="lg:col-span-5" data-aos="fade-up">
                <p class="text-xs font-bold uppercase tracking-[.2em] text-[#FD5528]">Engineering manifesto</p>
                <h2 id="manifesto-heading" class="mt-4 max-w-xl text-3xl font-black leading-tight tracking-tight text-slate-950 sm:text-4xl">Build for the business behind the brief.</h2>
            </div>
            <div class="lg:col-span-7" data-aos="fade-up" data-aos-delay="100">
                <p class="text-base leading-8 text-slate-600 sm:text-lg">Under Ravindra’s leadership, the team brings technology and business thinking together. The work begins with listening: understanding the people, processes, and goals behind a project. From there, the team can plan and build software that solves the right problem and leaves room for change.</p>
                <blockquote class="mt-7 rounded-r-2xl border-l-4 border-[#FD5528] bg-orange-50/70 px-5 py-5 text-lg font-semibold leading-relaxed text-slate-800 sm:px-7 sm:py-6 sm:text-xl">
                    “We build technology with purpose. True engineering is not only about writing code, but crafting dependable architectures that empower real businesses to scale fearlessly.”
                    <footer class="mt-4 text-sm font-bold not-italic text-slate-500">Ravindra Verma <span class="font-medium text-slate-400">· Founder &amp; CEO</span></footer>
                </blockquote>
            </div>
        </div>
    </section>

    {{-- Principles --}}
    <section aria-labelledby="principles-heading" class="bg-[#f7f8fa] px-5 py-16 sm:px-8 sm:py-20 lg:px-12 lg:py-24">
        <div class="mx-auto max-w-7xl">
            <div class="mx-auto max-w-2xl text-center" data-aos="fade-up">
                <p class="text-xs font-bold uppercase tracking-[.2em] text-[#FD5528]">How we work</p>
                <h2 id="principles-heading" class="mt-3 text-3xl font-black tracking-tight text-slate-950 sm:text-4xl">Leadership that stays close to the work</h2>
                <p class="mt-4 leading-7 text-slate-600">Ravindra’s approach is reflected in a few simple principles that guide how Backend Coders India works with its clients.</p>
            </div>

            <div class="mt-10 grid gap-5 md:grid-cols-3">
                <article class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-orange-200 hover:shadow-xl hover:shadow-slate-900/5 sm:p-8" data-aos="fade-up">
                    <span class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-orange-50 text-sm font-black text-[#FD5528] ring-1 ring-orange-100">01</span>
                    <h3 class="mt-6 text-xl font-bold text-slate-950">Start with understanding</h3>
                    <p class="mt-3 text-sm leading-7 text-slate-600">Take time to understand a client’s context and users before settling on a technical direction.</p>
                </article>
                <article class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-orange-200 hover:shadow-xl hover:shadow-slate-900/5 sm:p-8" data-aos="fade-up" data-aos-delay="100">
                    <span class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-orange-50 text-sm font-black text-[#FD5528] ring-1 ring-orange-100">02</span>
                    <h3 class="mt-6 text-xl font-bold text-slate-950">Choose technology with care</h3>
                    <p class="mt-3 text-sm leading-7 text-slate-600">Make practical engineering choices that fit the product, the team, and the business goals.</p>
                </article>
                <article class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-orange-200 hover:shadow-xl hover:shadow-slate-900/5 sm:p-8" data-aos="fade-up" data-aos-delay="200">
                    <span class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-orange-50 text-sm font-black text-[#FD5528] ring-1 ring-orange-100">03</span>
                    <h3 class="mt-6 text-xl font-bold text-slate-950">Keep growth in view</h3>
                    <p class="mt-3 text-sm leading-7 text-slate-600">Build a useful foundation today while considering how needs may evolve over time.</p>
                </article>
            </div>
        </div>
    </section>

    {{-- Credentials & Experience --}}
    <section aria-labelledby="credentials-heading" class="bg-white px-5 py-16 sm:px-8 sm:py-20 lg:px-12 lg:py-24">
        <div class="mx-auto max-w-7xl">
            <div class="max-w-2xl" data-aos="fade-up">
                <p class="text-xs font-bold uppercase tracking-[.2em] text-[#FD5528]">Background & Expertise</p>
                <h2 id="credentials-heading" class="mt-3 text-3xl font-black tracking-tight text-slate-950 sm:text-4xl">Credentials & Proven Track Record</h2>
                <div class="mt-4 leading-7 text-slate-600 seo-content-div">
                    <p>Ravindra brings over <strong>10+ years of experience</strong> in software engineering and strategic digital solutions. With a robust educational background holding a <strong>Master's in Computer Science</strong>, his technical foundations are rock-solid.</p>
                </div>
            </div>
            
            <div class="mt-10 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div data-aos="fade-up">
                    <h3 class="text-xl font-bold text-slate-950">Experience & Education</h3>
                    <ul class="mt-4 space-y-4 text-slate-600">
                        <li class="flex gap-3">
                            <span class="mt-1 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-orange-100 text-[#FD5528]"><svg class="h-3 w-3" viewBox="0 0 16 16" fill="currentColor"><path d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"/></svg></span>
                            <span><strong>20+ Years of Experience</strong> in software engineering, scalable architectures, and business leadership.</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="mt-1 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-orange-100 text-[#FD5528]"><svg class="h-3 w-3" viewBox="0 0 16 16" fill="currentColor"><path d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"/></svg></span>
                            <span><strong>Master's Degree</strong> with a focus on advanced algorithms and system design.</span>
                        </li>
                    </ul>
                </div>

                <div data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-xl font-bold text-slate-950">Certifications</h3>
                    <ul class="mt-4 space-y-4 text-slate-600">
                        <li class="flex gap-3">
                            <span class="mt-1 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-orange-100 text-[#FD5528]"><svg class="h-3 w-3" viewBox="0 0 16 16" fill="currentColor"><path d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"/></svg></span>
                            <span><strong>AWS Certified Solutions Architect</strong> – Validating expertise in designing distributed systems.</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="mt-1 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-orange-100 text-[#FD5528]"><svg class="h-3 w-3" viewBox="0 0 16 16" fill="currentColor"><path d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"/></svg></span>
                            <span><strong>Certified Scrum Professional (CSP)</strong> – Emphasizing agile and efficient project delivery.</span>
                        </li>
                    </ul>
                </div>

                <div data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-xl font-bold text-slate-950">Key Projects & Results</h3>
                    <ul class="mt-4 space-y-4 text-slate-600">
                        <li class="flex gap-3">
                            <span class="mt-1 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-orange-100 text-[#FD5528]"><svg class="h-3 w-3" viewBox="0 0 16 16" fill="currentColor"><path d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"/></svg></span>
                            <span><strong>Enterprise E-Commerce Scale-Up:</strong> Led architecture redesign for a major retail client, improving page load times by 40% and increasing conversion rates by 25%.</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="mt-1 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-orange-100 text-[#FD5528]"><svg class="h-3 w-3" viewBox="0 0 16 16" fill="currentColor"><path d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"/></svg></span>
                            <span><strong>AI Integration Platform:</strong> Developed an automated AI workflow system for a logistics firm, reducing operational delays by 30%.</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="sr-only seo-div" aria-hidden="true">
                <h2>About the Author - Ravindra Verma Credentials</h2>
                <p>Ravindra Verma is an experienced software architect, full-stack developer, and the CEO of Backend Coders India. With over a decade (10+ years) of hands-on experience, he holds certifications like AWS Certified Solutions Architect and a Master's degree in Computer Science. His expertise encompasses building scalable software platforms, AI workflows, and achieving remarkable business outcomes like a 40% increase in load performance and 25% better conversion rates.</p>
            </div>
        </div>
    </section>

    <!-- <section aria-labelledby="selected-work-heading" class="bg-white px-5 py-16 sm:px-8 sm:py-20 lg:px-12 lg:py-24">
        <div class="mx-auto max-w-7xl">
            <div class="max-w-2xl">
                <p class="text-xs font-bold uppercase tracking-[.2em] text-[#FD5528]">Project portfolio</p>
                <h2 id="selected-work-heading" class="mt-3 text-3xl font-black tracking-tight text-slate-950 sm:text-4xl">Selected work from the company portfolio</h2>
                <p class="mt-4 leading-7 text-slate-600">These examples are drawn from Backend Coders India’s project records. Each project page describes its scope and the technologies recorded for delivery.</p>
            </div>
            <div class="mt-8 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                @forelse($projects as $project)
                    <article class="rounded-2xl border border-slate-200 bg-slate-50 p-6 transition hover:-translate-y-1 hover:border-orange-200 hover:shadow-lg">
                        <p class="text-xs font-bold uppercase tracking-[.16em] text-[#FD5528]">{{ $project->category ?: 'Project' }}{{ $project->client_name ? ' · '.$project->client_name : '' }}</p>
                        <h3 class="mt-3 text-xl font-bold text-slate-950">{{ $project->title }}</h3>
                        <p class="mt-3 line-clamp-4 text-sm leading-7 text-slate-600">{{ \Illuminate\Support\Str::limit(strip_tags((string) $project->description), 240) }}</p>
                        @if($project->technologies_array)
                            <p class="mt-4 text-xs font-semibold text-slate-500">{{ implode(' · ', $project->technologies_array) }}</p>
                        @endif
                        <a class="mt-5 inline-flex font-semibold text-[#FD5528] hover:underline" href="{{ route('frontend.project-detail', $project->slug) }}">View project details <span class="ml-2" aria-hidden="true">→</span></a>
                    </article>
                @empty
                    <p class="rounded-2xl border border-dashed border-slate-300 p-6 text-slate-600">Project examples will appear here when project records are published.</p>
                @endforelse
            </div>
            <p class="mt-5 text-xs leading-6 text-slate-500">Client names and measured outcomes are shown only when the corresponding project record contains them.</p>
        </div>
    </section> -->

    {{-- Contact --}}
    <section aria-labelledby="connect-heading" class="relative isolate overflow-hidden bg-[#f2f3f5] px-5 py-16 text-white sm:px-8 sm:py-20 lg:px-12">
        <div aria-hidden="true" class="absolute -left-32 -top-40 -z-10 h-96 w-96 rounded-full bg-[#FD5528]/20 blur-[120px]"></div>
        <div class="mx-auto flex max-w-7xl flex-col gap-8 md:flex-row md:items-center md:justify-between">
            <div class="max-w-2xl">
                <p class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[.2em] text-orange-300"><span class="h-2 w-2 rounded-full bg-[#FD5528]"></span>Get in touch</p>
                <h2 id="connect-heading" class="mt-3 text-3xl font-black text-black tracking-tight sm:text-4xl">Have a challenge worth solving?</h2>
                <p class="mt-4 leading-7 text-slate-800">Share your goals with Backend Coders India and start a conversation with the team in Kanpur.</p>
            </div>
            <div class="flex w-full flex-col gap-3 sm:w-auto sm:flex-row">
                <a href="mailto:info@backendcodersindia.com" class="inline-flex min-h-12 items-center justify-center rounded-xl border border-white/20 px-5 py-3 text-sm font-semibold text-white transition hover:border-white/40 hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-white/50">Email the team</a>
                <a href="{{ route('frontend.contact') }}" class="inline-flex min-h-12 items-center justify-center rounded-xl bg-[#FD5528] px-6 py-3 text-sm font-bold text-white shadow-lg shadow-black/20 transition hover:-translate-y-0.5 hover:bg-[#e9471c] focus:outline-none focus:ring-2 focus:ring-orange-300 focus:ring-offset-2 focus:ring-offset-[#151619]">Contact us <span class="ml-2" aria-hidden="true">→</span></a>
            </div>
        </div>
    </section>
</main>
@endsection
