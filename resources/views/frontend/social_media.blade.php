@extends('component.main')
@section('content')

@php
    $smmBreadcrumb = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Home',
                'item' => url('/'),
            ],
            [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => 'Services',
                'item' => route('frontend.service'),
            ],
            [
                '@type' => 'ListItem',
                'position' => 3,
                'name' => 'Social Media Management',
                'item' => 'https://backendcodersindia.com/page/social-media-management',
            ],
        ],
    ];

    $smmService = [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        '@id' => 'https://backendcodersindia.com/page/social-media-management#service',
        'name' => 'Social Media Marketing & Management Services',
        'serviceType' => 'Social Media Marketing',
        'description' => 'Targeted multi-channel social media management, brand positioning, creative graphics, Reels strategy, and paid Meta campaigns designed to convert followers into business customers.',
        'url' => 'https://backendcodersindia.com/page/social-media-management',
        'provider' => [
            '@type' => 'Organization',
            '@id' => 'https://backendcodersindia.com/#organization',
            'name' => 'Backend Coders India',
            'url' => 'https://backendcodersindia.com',
        ],
        'areaServed' => [
            ['@type' => 'City', 'name' => 'Kanpur'],
            ['@type' => 'State', 'name' => 'Uttar Pradesh'],
            ['@type' => 'Country', 'name' => 'India'],
        ],
        'offers' => [
            '@type' => 'Offer',
            'price' => '6999',
            'priceCurrency' => 'INR',
            'priceSpecification' => [
                '@type' => 'UnitPriceSpecification',
                'price' => '6999',
                'priceCurrency' => 'INR',
                'unitCode' => 'MON',
                'billingDuration' => 1,
            ],
            'description' => 'Basic Social Media Marketing Plan with 2 account channels, 5 graphic posts, 1 Reel, and monthly analytics.',
            'url' => 'https://backendcodersindia.com/packages',
        ],
    ];

    $smmFaqs = [
        [
            'question' => 'How much does social media marketing cost per month in Kanpur?',
            'answer' => 'Our monthly social media packages start at ₹6,999/month for our Starter Plan (covering 2 platforms, 8 custom graphics, 2 Reels, and basic community management). Our Growth Plan is ₹14,999/month (3 platforms, 16 graphics, 6 high-production Reels, and managed Meta ad campaigns).',
        ],
        [
            'question' => 'Which social media platforms are best for my Kanpur business?',
            'answer' => 'For retail stores, restaurants, fashion boutiques, and salons, Instagram and Facebook drive the highest visual engagement and walk-in foot traffic. For B2B manufacturers, real estate consultants, and software firms, LinkedIn and Meta lead ads generate high-ticket commercial inquiries.',
        ],
        [
            'question' => 'Do you create original Reels and short-form video content?',
            'answer' => 'Yes. Short-form video (Instagram Reels and YouTube Shorts) is currently the most effective organic reach driver. We script engaging hooks, edit high-resolution video clips with subtitles, select trending audio, and design custom cover thumbnails tailored to your brand identity.',
        ],
        [
            'question' => 'How do Meta (Facebook & Instagram) ads generate direct customer leads?',
            'answer' => 'We create targeted Meta ad campaigns using Meta Ads Manager. Using instant lead forms and direct click-to-WhatsApp messaging ads, interested prospects can request a quote or book an appointment without leaving the app, with lead notifications delivered straight to your phone.',
        ],
        [
            'question' => 'Can you help grow our followers with genuine local customers?',
            'answer' => 'Yes. We never use fake bot followers, click-farms, or engagement pods that harm your account health. All growth is achieved through consistent organic posting, high-value Reels, geo-tagged Kanpur community engagement, and hyper-targeted local Meta ad campaigns.',
        ],
    ];

    $smmFaqSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => array_map(function ($faq) {
            return [
                '@type' => 'Question',
                'name' => $faq['question'],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $faq['answer'],
                ],
            ];
        }, $smmFaqs),
    ];
@endphp

@push('head')
    <link rel="preload" as="image" href="https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExNmRtbzAzY3I4YTNya3k3NmE0Nmd1NGgzMW9vNzdpa2NrOWZsNW5iaSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/T9EPcLFYELkKpumA6I/giphy.gif" fetchpriority="high">
    <script type="application/ld+json">{!! json_encode($smmBreadcrumb, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
    <script type="application/ld+json">{!! json_encode($smmService, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
    <script type="application/ld+json">{!! json_encode($smmFaqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
@endpush

<section class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">

    <!-- TEXT -->
    <div>
      <h1 class="text-4xl font-bold leading-tight text-gray-900">
        Social Media Marketing Agency in Kanpur <br>
        <span class="text-[#FD5528]">Drive Engagement, Leads & Brand Loyalty</span>
      </h1>

      <p class="mt-6 text-gray-600">
        Scrolling through social media? So are your customers. We make sure they scroll into your brand.
        We’re not just another digital agency—we help brands get seen, heard, and loved online.
      </p>

      <p class="mt-4 text-gray-600">
        Whether you're a startup or an established brand, we give you the creative edge and strategy
        to dominate every platform and turn engagement into revenue.
      </p>

      <a href="#contact"
        class="inline-block mt-6 bg-[#FD5528] text-white px-6 py-3 rounded-xl font-semibold shadow hover:bg-orange-600 transition">
        Contact Us
      </a>
    </div>

    <!-- IMAGE -->
    <div>
      <img src="https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExNmRtbzAzY3I4YTNya3k3NmE0Nmd1NGgzMW9vNzdpa2NrOWZsNW5iaSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/T9EPcLFYELkKpumA6I/giphy.gif"
        alt="Social media marketing and brand engagement in action"
        width="480" height="480"
        loading="eager" fetchpriority="high" decoding="async"
        class="rounded-2xl  w-full object-cover">
    </div>

  </div>
</section>


<!-- ABOUT -->
<section class="bg-gray-50 py-16">
  <div class="max-w-7xl mx-auto px-6 text-center">

    <h2 class="text-3xl font-bold text-gray-900">
      Strategic <span class="text-[#EA580C]">Social Media</span> Marketing Services
    </h2>

    <p class="mt-4 text-gray-600 max-w-3xl mx-auto">
      Over 4.5 billion people use social media. That’s your audience.
      We connect your brand with them across platforms like Facebook, Instagram, LinkedIn,
      Twitter, YouTube, and WhatsApp—turning followers into customers.
    </p>

  </div>
</section>


<!-- SERVICES -->
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-6">

    <div class="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

      <article data-aos="fade-up" data-aos-delay="100"
               class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] hover:bg-white/10 hover:backdrop-blur-[18px] text-gray-900">
        <div class="pointer-events-none absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/15 via-white/40 to-white/10 opacity-0 transition duration-500 group-hover:opacity-80 backdrop-blur-[0px] group-hover:backdrop-blur-[24px]"></div>
        <div class="relative z-10 flex flex-col items-center text-center space-y-4">
          <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">Audience Reach</span>
          <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-inner">
            <img src="https://img.icons8.com/?size=100&id=103102&format=png&color=ffffff" alt="Facebook Marketing Solutions" width="64" height="64" loading="lazy" decoding="async" class="h-16 w-16" />
          </div>
          <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">Facebook Marketing</h3>
          <p class="text-sm text-gray-600 group-hover:text-gray-900">Targeted campaigns to increase brand awareness and drive conversions.</p>
          <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Reach</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Conversion</span>
          </div>
        </div>
      </article>

      <article data-aos="fade-up" data-aos-delay="120"
               class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] hover:bg-white/10 hover:backdrop-blur-[18px] text-gray-900">
        <div class="pointer-events-none absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/15 via-white/40 to-white/10 opacity-0 transition duration-500 group-hover:opacity-80 backdrop-blur-[0px] group-hover:backdrop-blur-[24px]"></div>
        <div class="relative z-10 flex flex-col items-center text-center space-y-4">
          <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">Visual Spark</span>
          <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-inner">
            <img src="https://img.icons8.com/?size=100&id=7695&format=png&color=ffffff" alt="Instagram Growth and Engagement" width="64" height="64" loading="lazy" decoding="async" class="h-16 w-16" />
          </div>
          <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">Instagram Marketing</h3>
          <p class="text-sm text-gray-600 group-hover:text-gray-900">Reels, stories & creatives that boost engagement and followers.</p>
          <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Reels</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Engagement</span>
          </div>
        </div>
      </article>

      <article data-aos="fade-up" data-aos-delay="140"
               class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] hover:bg-white/10 hover:backdrop-blur-[18px] text-gray-900">
        <div class="pointer-events-none absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/15 via-white/40 to-white/10 opacity-0 transition duration-500 group-hover:opacity-80 backdrop-blur-[0px] group-hover:backdrop-blur-[24px]"></div>
        <div class="relative z-10 flex flex-col items-center text-center space-y-4">
          <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">Professional Impact</span>
          <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-inner">
            <img src="https://img.icons8.com/?size=100&id=7695&format=png&color=ffffff" alt="LinkedIn B2B Marketing" width="64" height="64" loading="lazy" decoding="async" class="h-16 w-16" />
          </div>
          <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">LinkedIn Marketing</h3>
          <p class="text-sm text-gray-600 group-hover:text-gray-900">B2B campaigns that generate qualified leads and visibility.</p>
          <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Leads</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Visibility</span>
          </div>
        </div>
      </article>

      <article data-aos="fade-up" data-aos-delay="160"
               class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] hover:bg-white/10 hover:backdrop-blur-[18px] text-gray-900">
        <div class="pointer-events-none absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/15 via-white/40 to-white/10 opacity-0 transition duration-500 group-hover:opacity-80 backdrop-blur-[0px] group-hover:backdrop-blur-[24px]"></div>
        <div class="relative z-10 flex flex-col items-center text-center space-y-4">
          <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">Real-time Buzz</span>
          <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-inner">
            <img src="https://img.icons8.com/?size=100&id=111463&format=png&color=ffffff" alt="Twitter Brand Marketing" width="64" height="64" loading="lazy" decoding="async" class="h-16 w-16 p-2" />
          </div>
          <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">Twitter Marketing</h3>
          <p class="text-sm text-gray-600 group-hover:text-gray-900">Trend-driven content and real-time engagement strategies.</p>
          <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Trends</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Engagement</span>
          </div>
        </div>
      </article>

      <article data-aos="fade-up" data-aos-delay="180"
               class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] hover:bg-white/10 hover:backdrop-blur-[18px] text-gray-900">
        <div class="pointer-events-none absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/15 via-white/40 to-white/10 opacity-0 transition duration-500 group-hover:opacity-80 backdrop-blur-[0px] group-hover:backdrop-blur-[24px]"></div>
        <div class="relative z-10 flex flex-col items-center text-center space-y-4">
          <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">Video Reach</span>
          <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-inner">
            <img src="https://img.icons8.com/?size=100&id=84764&format=png&color=ffffff" alt="YouTube Video Promotion" width="64" height="64" loading="lazy" decoding="async" class="h-16 w-16 p-2" />
          </div>
          <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">YouTube Marketing</h3>
          <p class="text-sm text-gray-600 group-hover:text-gray-900">Optimize videos for views, engagement and subscribers.</p>
          <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Views</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Subscribers</span>
          </div>
        </div>
      </article>

      <article data-aos="fade-up" data-aos-delay="200"
               class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] hover:bg-white/10 hover:backdrop-blur-[18px] text-gray-900">
        <div class="pointer-events-none absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/15 via-white/40 to-white/10 opacity-0 transition duration-500 group-hover:opacity-80 backdrop-blur-[0px] group-hover:backdrop-blur-[24px]"></div>
        <div class="relative z-10 flex flex-col items-center text-center space-y-4">
          <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">Direct Connect</span>
          <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-inner">
            <img src="https://img.icons8.com/?size=100&id=67475&format=png&color=ffffff" alt="WhatsApp Customer Marketing" width="64" height="64" loading="lazy" decoding="async" class="h-16 w-16" />
          </div>
          <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">WhatsApp Marketing</h3>
          <p class="text-sm text-gray-600 group-hover:text-gray-900">Direct engagement through personalized messages and campaigns.</p>
          <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Campaigns</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Sales</span>
          </div>
        </div>
      </article>

    </div>

  </div>
</section>


<!-- FEATURES -->
<section class="bg-gray-50 py-16">
  <div class="max-w-7xl mx-auto px-6">

    <h2 class="text-3xl font-bold text-center text-gray-900 mb-10">
      What We Do to <span class ="text-[#FD5528]">Improve Your Social Media</span>
    </h2>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Increased Brand Awareness</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Social Media Audit</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Audience Engagement</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Competitor Analysis</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">SEO Improvement</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Goal Setting</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Lead Generation</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Content Calendar</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Retargeting Ads</div>

    </div>

  </div>
</section>


<!-- CONTENT & REELS EXECUTION FRAMEWORK -->
<section class="py-20 bg-slate-50 border-t border-slate-200">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <span class="text-xs font-bold uppercase tracking-[0.3em] text-[#FD5528]">Creative Execution That Stops The Scroll</span>
      <h2 class="text-3xl font-bold text-gray-900 mt-3 sm:text-4xl">
        How We Turn Social Media Into A Predictable Revenue Engine
      </h2>
      <p class="mt-4 text-gray-600 leading-relaxed">
        Random posting gets random results. We replace guesswork with a data-informed editorial calendar, scroll-stopping graphic design, dynamic Reels production, and performance-driven Meta advertising.
      </p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-white rounded-2xl p-7 border border-slate-200 shadow-sm flex flex-col justify-between">
        <div>
          <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-100 text-[#FD5528] font-bold text-lg mb-5">
            01
          </div>
          <h3 class="text-lg font-bold text-slate-900">Content Planning &amp; Custom Branding</h3>
          <p class="mt-3 text-sm text-slate-600 leading-relaxed">
            Every piece of content is custom designed to match your brand palette, typography, and positioning. We construct monthly content calendars balancing educational carousels, customer testimonials, behind-the-scenes stories, and promotional offers.
          </p>
        </div>
        <ul class="mt-6 pt-5 border-t border-slate-100 space-y-2 text-xs text-slate-700">
          <li class="flex items-center gap-2">✓ Monthly editorial calendar mapped 15 days in advance</li>
          <li class="flex items-center gap-2">✓ Multi-slide informational carousel design</li>
          <li class="flex items-center gap-2">✓ Persuasive caption copywriting with hashtags &amp; CTAs</li>
        </ul>
      </div>

      <div class="bg-white rounded-2xl p-7 border border-slate-200 shadow-sm flex flex-col justify-between">
        <div>
          <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-100 text-[#FD5528] font-bold text-lg mb-5">
            02
          </div>
          <h3 class="text-lg font-bold text-slate-900">Reels &amp; Short-Form Video Strategy</h3>
          <p class="mt-3 text-sm text-slate-600 leading-relaxed">
            Reels drive 10x more organic reach than static images on Instagram. Our video specialists script attention-grabbing hooks within the first 3 seconds, sync edits to trending audio, and add clean dynamic subtitles to maximize watch-time and algorithmic distribution.
          </p>
        </div>
        <ul class="mt-6 pt-5 border-t border-slate-100 space-y-2 text-xs text-slate-700">
          <li class="flex items-center gap-2">✓ 3-second hook scripting &amp; viral storytelling formats</li>
          <li class="flex items-center gap-2">✓ High-retention jump cuts, zooms &amp; animated subtitles</li>
          <li class="flex items-center gap-2">✓ Custom on-brand cover thumbnails for grid aesthetic</li>
        </ul>
      </div>

      <div class="bg-white rounded-2xl p-7 border border-slate-200 shadow-sm flex flex-col justify-between">
        <div>
          <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-100 text-[#FD5528] font-bold text-lg mb-5">
            03
          </div>
          <h3 class="text-lg font-bold text-slate-900">Meta Paid Ads &amp; Lead Generation</h3>
          <p class="mt-3 text-sm text-slate-600 leading-relaxed">
            Reach exactly who matters across Facebook and Instagram. We deploy Meta Ads Manager campaigns using instant lead forms, WhatsApp message triggers, and Pixel retargeting to convert interested casual scrollers into verified phone inquiries.
          </p>
        </div>
        <ul class="mt-6 pt-5 border-t border-slate-100 space-y-2 text-xs text-slate-700">
          <li class="flex items-center gap-2">✓ Direct Click-to-WhatsApp messaging ads</li>
          <li class="flex items-center gap-2">✓ Native in-app instant lead generation forms</li>
          <li class="flex items-center gap-2">✓ Meta Pixel custom audience retargeting funnels</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- LOCAL KANPUR SMM INDUSTRY APPLICATIONS -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <span class="text-xs font-bold uppercase tracking-[0.3em] text-[#FD5528]">Tailored To The Kanpur Market</span>
      <h2 class="text-3xl font-bold text-gray-900 mt-3 sm:text-4xl">
        Social Media Strategies for Kanpur Businesses
      </h2>
      <p class="mt-4 text-gray-600 leading-relaxed">
        Building trust in Kanpur requires localized cultural relevance, Hindi and English bilingual communications, and visual credibility that resonates with local buyers.
      </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
      <div class="p-6 rounded-2xl border border-slate-200 bg-orange-50/30 shadow-sm">
        <h3 class="text-base font-bold text-slate-900">Fashion &amp; Bridal Boutiques</h3>
        <p class="mt-1 text-xs text-[#FD5528] font-semibold">Birhana Road, Naveen Market &amp; Gumti No. 5</p>
        <p class="mt-3 text-xs text-slate-600 leading-relaxed">
          High-aesthetic collection showcases, bridal styling Reels, and seasonal wedding promotion campaigns driving local walk-ins and direct WhatsApp inquiries.
        </p>
      </div>

      <div class="p-6 rounded-2xl border border-slate-200 bg-orange-50/30 shadow-sm">
        <h3 class="text-base font-bold text-slate-900">Cafes, Restaurants &amp; Bakeries</h3>
        <p class="mt-1 text-xs text-[#FD5528] font-semibold">Civil Lines, Swaroop Nagar &amp; Kakadeo</p>
        <p class="mt-3 text-xs text-slate-600 leading-relaxed">
          Mouth-watering food videography, weekend vibe Reels, festive menu announcements, and targeted student &amp; family promotions to pack tables.
        </p>
      </div>

      <div class="p-6 rounded-2xl border border-slate-200 bg-orange-50/30 shadow-sm">
        <h3 class="text-base font-bold text-slate-900">Healthcare &amp; Skin Clinics</h3>
        <p class="mt-1 text-xs text-[#FD5528] font-semibold">Sarvodaya Nagar, Swaroop Nagar &amp; Kidwai Nagar</p>
        <p class="mt-3 text-xs text-slate-600 leading-relaxed">
          Doctor authority videos, myth-busting health tips, and patient outcome testimonials building deep community trust and clinic consultation appointments.
        </p>
      </div>

      <div class="p-6 rounded-2xl border border-slate-200 bg-orange-50/30 shadow-sm">
        <h3 class="text-base font-bold text-slate-900">B2B Manufacturers &amp; Exporters</h3>
        <p class="mt-1 text-xs text-[#FD5528] font-semibold">Dada Nagar, Panki &amp; Jajmau</p>
        <p class="mt-3 text-xs text-slate-600 leading-relaxed">
          LinkedIn executive positioning, factory capability walkthrough videos, and international export buyer outreach establishing corporate manufacturing credibility.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- PRICING & PACKAGES -->
<section class="py-20 bg-slate-900 text-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <span class="text-xs font-bold uppercase tracking-[0.3em] text-orange-400">Predictable Monthly Growth</span>
      <h2 class="text-3xl font-bold mt-3 sm:text-4xl text-white">
        Social Media Marketing Packages &amp; Pricing
      </h2>
      <p class="mt-4 text-slate-400 leading-relaxed">
        Transparent monthly retainers with complete creative ownership, regular review meetings, and measurable engagement reports.
      </p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      <div class="rounded-3xl border border-slate-800 bg-slate-950 p-8 flex flex-col justify-between">
        <div>
          <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Starter SMM Plan</span>
          <div class="mt-4 flex items-baseline gap-2">
            <span class="text-3xl font-black text-white">₹6,999</span>
            <span class="text-xs text-slate-400">/ month</span>
          </div>
          <p class="mt-4 text-xs text-slate-400 leading-relaxed">
            Designed for local shops, emerging startups, and single-location businesses establishing an active brand presence.
          </p>
          <ul class="mt-6 space-y-3 text-xs text-slate-300">
            <li class="flex items-center gap-2">✓ 2 Platforms (Instagram &amp; Facebook)</li>
            <li class="flex items-center gap-2">✓ 8 Custom branded graphic posts</li>
            <li class="flex items-center gap-2">✓ 2 High-engagement video Reels</li>
            <li class="flex items-center gap-2">✓ Hashtag research &amp; bio optimization</li>
            <li class="flex items-center gap-2">✓ Monthly performance summary</li>
          </ul>
        </div>
        <div class="mt-8 pt-6 border-t border-slate-800">
          <a href="#contact" class="block w-full py-3 rounded-xl text-center text-xs font-bold text-white bg-slate-800 hover:bg-slate-700 transition">Get Started</a>
        </div>
      </div>

      <div class="rounded-3xl border-2 border-[#FD5528] bg-slate-950 p-8 flex flex-col justify-between relative shadow-2xl">
        <div class="absolute -top-3 left-1/2 -translate-x-1/2 rounded-full bg-[#FD5528] px-4 py-1 text-[10px] font-bold uppercase tracking-widest text-white">
          Most Popular
        </div>
        <div>
          <span class="text-xs font-bold uppercase tracking-wider text-orange-400">Growth Brand &amp; Lead Plan</span>
          <div class="mt-4 flex items-baseline gap-2">
            <span class="text-3xl font-black text-white">₹14,999</span>
            <span class="text-xs text-slate-400">/ month</span>
          </div>
          <p class="mt-4 text-xs text-slate-400 leading-relaxed">
            For growing businesses, clinics, and multi-location retail brands ready to dominate local feeds and capture direct leads.
          </p>
          <ul class="mt-6 space-y-3 text-xs text-slate-300">
            <li class="flex items-center gap-2">✓ 3 Platforms (Instagram, Facebook &amp; LinkedIn)</li>
            <li class="flex items-center gap-2">✓ 16 Custom branded graphic posts &amp; stories</li>
            <li class="flex items-center gap-2">✓ 6 High-production video Reels with subtitles</li>
            <li class="flex items-center gap-2">✓ Managed Meta Click-to-WhatsApp / Lead Ad setup</li>
            <li class="flex items-center gap-2">✓ Active comment &amp; DM inquiry forwarding</li>
            <li class="flex items-center gap-2">✓ Bi-weekly analytics &amp; strategy review</li>
          </ul>
        </div>
        <div class="mt-8 pt-6 border-t border-slate-800">
          <a href="#contact" class="block w-full py-3 rounded-xl text-center text-xs font-bold text-white bg-[#FD5528] hover:bg-[#e94c20] transition">Select Growth Plan</a>
        </div>
      </div>

      <div class="rounded-3xl border border-slate-800 bg-slate-950 p-8 flex flex-col justify-between">
        <div>
          <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Custom Enterprise Retainer</span>
          <div class="mt-4 flex items-baseline gap-2">
            <span class="text-3xl font-black text-white">Custom</span>
            <span class="text-xs text-slate-400">tailored SLA</span>
          </div>
          <p class="mt-4 text-xs text-slate-400 leading-relaxed">
            For large enterprises, corporate institutions, and national brands requiring dedicated video teams and omnichannel social presence.
          </p>
          <ul class="mt-6 space-y-3 text-xs text-slate-300">
            <li class="flex items-center gap-2">✓ Omnichannel coverage (Instagram, FB, LinkedIn, X, YouTube)</li>
            <li class="flex items-center gap-2">✓ On-site video shoot and podcast production support</li>
            <li class="flex items-center gap-2">✓ Local influencer collaboration management</li>
            <li class="flex items-center gap-2">✓ Dedicated creative director &amp; community manager</li>
            <li class="flex items-center gap-2">✓ Weekly performance steering &amp; crisis management</li>
          </ul>
        </div>
        <div class="mt-8 pt-6 border-t border-slate-800">
          <a href="#contact" class="block w-full py-3 rounded-xl text-center text-xs font-bold text-white bg-slate-800 hover:bg-slate-700 transition">Discuss Enterprise Plan</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FREQUENTLY ASKED QUESTIONS -->
<section class="py-20 bg-white">
  <div class="max-w-4xl mx-auto px-6">
    <div class="text-center mb-16">
      <span class="text-xs font-bold uppercase tracking-[0.3em] text-[#FD5528]">Common Questions</span>
      <h2 class="text-3xl font-bold text-gray-900 mt-3 sm:text-4xl">
        Social Media Marketing FAQs
      </h2>
      <p class="mt-4 text-gray-600">
        Clear answers about our social media management process, content creation, ad setups, and reporting in Kanpur.
      </p>
    </div>

    <div class="space-y-6">
      @foreach($smmFaqs as $faq)
        <div class="rounded-2xl border border-slate-200 bg-slate-50/50 p-6 shadow-sm">
          <h3 class="text-base font-bold text-slate-900 flex items-start gap-3">
            <span class="text-[#FD5528] font-bold">Q.</span>
            <span>{{ $faq['question'] }}</span>
          </h3>
          <p class="mt-3 text-sm text-slate-600 leading-relaxed pl-6">
            {{ $faq['answer'] }}
          </p>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- CONTACT ENQUIRY FORM -->
<section id="contact" class="bg-[#F9FAFB] py-20 px-6 relative overflow-hidden">
  <div class="max-w-4xl mx-auto">
    <div class="text-center max-w-2xl mx-auto mb-12">
      <span class="inline-block text-xs sm:text-sm font-semibold uppercase tracking-[0.35em] text-[#FD5528] px-5 py-2 rounded-full bg-white/80 border border-orange-200/50 shadow-sm">
        Start Growing Your Brand
      </span>
      <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mt-4">
        Request a Social Media Marketing Consultation
      </h2>
      <p class="mt-3 text-slate-600 text-sm sm:text-base">
        Speak with our social media strategists to get a free account audit and a customized content plan for your business.
      </p>
    </div>

    <div class="bg-white rounded-3xl border border-slate-200/80 shadow-xl p-4 sm:p-8">
      @include('frontend.form')
    </div>
  </div>
</section>

<!-- CTA -->
<section class="relative overflow-hidden py-20 bg-gradient-to-r from-[#FC5124] via-orange-500 to-orange-400 text-white">

  <!-- BACKGROUND GLOW -->
  <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top_left,_white,_transparent_50%)]"></div>

  <div class="relative max-w-5xl mx-auto px-6 text-center">

    <!-- HEADING -->
    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 leading-tight">
      Have a Project in Mind?
    </h2>

    <!-- SUBTEXT -->
    <p class="text-white/80 text-sm sm:text-base md:text-lg max-w-2xl mx-auto mb-10">
      Let’s build something amazing together. Share your idea and we’ll turn it into a powerful digital product.
    </p>

    <!-- BUTTONS -->
    <div class="flex flex-col sm:flex-row justify-center gap-4">

      <!-- PRIMARY BUTTON -->
      <a href="{{ route('frontend.contact') }}"
         class="group inline-flex items-center justify-center bg-white text-[#FC5124] px-6 py-3 rounded-xl font-semibold shadow-lg hover:shadow-2xl hover:scale-105 transition duration-300">

        Contact Us

        <!-- ARROW -->
        <span class="ml-2 transition group-hover:translate-x-1">→</span>
      </a>

      <!-- WHATSAPP BUTTON -->
      <a href="https://wa.me/+919140092133" target="_blank"
         class="group inline-flex items-center justify-center border border-white/40 px-6 py-3 rounded-xl font-semibold backdrop-blur-md hover:bg-white/10 hover:scale-105 transition duration-300">

       
        Let's Chat on WhatsApp
      </a>

    </div>

  </div>

</section>

@endsection
