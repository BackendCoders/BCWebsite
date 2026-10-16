<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


@php
    $metaTitle = filled(data_get($page ?? null, 'meta_title')) ? $page->meta_title : ($page?->title ?? 'Backend Coders India | Web Development Company in Kanpur, India');
    $metaDescription = filled(data_get($page ?? null, 'meta_description')) ? $page->meta_description : 'Backend Coders India builds websites, custom software, ecommerce platforms, and digital products for businesses in India and abroad.';
    $rawMetaImage = data_get($page ?? null, 'og_image');
    if ($rawMetaImage) {
        $metaImage = \Illuminate\Support\Str::startsWith($rawMetaImage, ['http://', 'https://', '//'])
            ? $rawMetaImage
            : url($rawMetaImage);
    } else {
        $metaImage = asset('assets/images/banner.png');
    }
    $metaKeywords = filled(data_get($page ?? null, 'meta_keywords')) ? $page->meta_keywords : null;

    $canonicalBase = 'https://backendcodersindia.com';
    $rawPath = trim((string) request()->path(), '/');
    $normalizedPath = ($rawPath === '' || $rawPath === '/') ? '' : '/' . $rawPath;
    $selfCanonical = $canonicalBase . $normalizedPath;

    $customCanonical = trim((string) data_get($page ?? null, 'canonical_url'));
    $canonicalUrl = (filter_var($customCanonical, FILTER_VALIDATE_URL)
        && in_array(parse_url($customCanonical, PHP_URL_HOST), ['backendcodersindia.com', 'www.backendcodersindia.com', parse_url(config('app.url'), PHP_URL_HOST)]))
            ? preg_replace('#^https?://www\.backendcodersindia\.com#i', 'https://backendcodersindia.com', $customCanonical)
            : $selfCanonical;

    // Never allow an inner subpage to canonicalise to the root homepage
    if ($normalizedPath !== '' && in_array(rtrim($canonicalUrl, '/'), [$canonicalBase, rtrim(config('app.url'), '/')], true)) {
        $canonicalUrl = $selfCanonical;
    }
@endphp
<title>{{ $metaTitle }}</title>

<meta name="description" content="{{ $metaDescription }}">
@if($metaKeywords)
<meta name="keywords" content="{{ $metaKeywords }}">
@endif

<!-- Open Graph / Facebook -->
<meta property="og:type" content="{{ request()->routeIs('frontend.blog-detail') ? 'article' : 'website' }}">
<meta property="og:site_name" content="Backend Coders India">
<meta property="og:title" content="{{ $metaTitle }}">
<meta property="og:description" content="{{ $metaDescription }}">
<meta property="og:url" content="{{ $canonicalUrl }}">
<meta property="og:image" content="{{ $metaImage }}">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@backendcoders">
<meta name="twitter:title" content="{{ $metaTitle }}">
<meta name="twitter:description" content="{{ $metaDescription }}">
<meta name="twitter:image" content="{{ $metaImage }}">

<meta name="csrf-token" content="{{ csrf_token() }}">

@if(($page ?? null)?->is_index === 0)
<meta name="robots" content="noindex, nofollow">
@else
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
@endif

<link rel="canonical" href="{{ $canonicalUrl }}">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;700&display=swap" media="print" onload="this.media='all'">

<!-- Organization & WebSite Structured Data -->
<script type="application/ld+json">
{!! json_encode([
  '@@context' => 'https://schema.org',
  '@graph' => [
    [
      '@type' => 'WebSite',
      '@id' => 'https://backendcodersindia.com/#website',
      'url' => 'https://backendcodersindia.com',
      'name' => 'Backend Coders India',
      'description' => 'Custom Software Development, Web Development, SaaS, Mobile Apps & SEO Services in Kanpur, India',
      'publisher' => [
        '@id' => 'https://backendcodersindia.com/#organization'
      ],
      'potentialAction' => [
        [
          '@type' => 'SearchAction',
          'target' => [
            '@type' => 'EntryPoint',
            'urlTemplate' => 'https://backendcodersindia.com/blog?q={search_term_string}'
          ],
          'query-input' => 'required name=search_term_string'
        ]
      ],
      'inLanguage' => 'en'
    ],
    [
      '@type' => ['ProfessionalService', 'Organization'],
      '@id' => 'https://backendcodersindia.com/#organization',
      'name' => 'Backend Coders India',
      'alternateName' => 'Backend Coders',
      'url' => 'https://backendcodersindia.com',
      'logo' => [
        '@type' => 'ImageObject',
        '@id' => 'https://backendcodersindia.com/#logo',
        'url' => 'https://backendcodersindia.com/assets/images/bci_icon.png',
        'caption' => 'Backend Coders India'
      ],
      'image' => 'https://backendcodersindia.com/assets/images/banner.png',
      'telephone' => '+91 914 0092 133',
      'email' => 'info@backendcodersindia.com',
      'priceRange' => '$$',
      'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => '11/42, Krishna Nagar',
        'addressLocality' => 'Kanpur',
        'addressRegion' => 'Uttar Pradesh',
        'postalCode' => '208007',
        'addressCountry' => 'IN'
      ],
      'geo' => [
        '@type' => 'GeoCoordinates',
        'latitude' => '26.4499',
        'longitude' => '80.3319'
      ],
      'openingHoursSpecification' => [
        [
          '@type' => 'OpeningHoursSpecification',
          'dayOfWeek' => [
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday'
          ],
          'opens' => '09:30',
          'closes' => '18:30'
        ]
      ],
      'sameAs' => [
        'https://www.linkedin.com/company/backendcodersindia/',
        'https://www.facebook.com/backendcoders/',
        'https://www.instagram.com/backendcoders/',
        'https://x.com/backendcodersin'
      ]
    ]
  ]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>

@stack('head')

@vite([ 'resources/js/app.js'])

@php
$manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
$appCss = asset('build/'.$manifest['resources/css/app.css']['file']);
@endphp

<link rel="stylesheet" href="{{ $appCss }}">
@include('layout.blog-content-styles')

<link rel="icon" type="image/svg+xml" alt="web development company in Kanpur" href="{{asset('assets/images/bci_icon.png')}}" class="bg-black"/>

@if(request()->routeIs('frontend.index'))
<link rel="preload" as="image" href="{{ asset('assets/images/backend_coders_split_1.webp.webp') }}" fetchpriority="high">
@endif

<style>
body {
  margin: 0;
  font-family: 'Space Grotesk', 'Inter', sans-serif;
}

h1, h2, h3, h4, h5, h6 {
  font-family: 'Space Grotesk', 'Inter', sans-serif;
}

.active-link {
    color: #EA580C;
    background-color: #FFF7F2;
    font-weight: 600;
    box-shadow: 0 2px 8px rgba(255, 109, 11, 0.15);
}

  #typing-code::after {
  content: "|";
  animation: blink 1s infinite;
  margin-left: 4px;
}

@keyframes blink {
  0%, 50%, 100% { opacity: 1; }
  25%, 75% { opacity: 0; }
}

@keyframes marquee {
  from { transform: translateX(0); }
  to { transform: translateX(-50%); }
}

.marquee-wrapper {
  overflow: hidden;
  width: 100%;
  position: relative;
  gap: 20px;
}

.marquee-track {
  display: flex;
  width: max-content;
  animation: marqueeScroll 25s linear infinite;
}

.marquee-content {
  display: flex;
  gap: 20px;
}

/* KEY FIX: seamless loop */
@keyframes marqueeScroll {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-50%);
  }
}

/* HORIZONTAL DIRECTION */

.step-circle {
  width: 60px;
  height: 60px;
  margin: 0 auto;
  border-radius: 9999px;
  background: white;
  border: 2px solid #FD5528;
  color: #FD5528;
  font-weight: 700;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 10px 25px rgba(0,0,0,0.05);
  transition: all 0.4s ease;
  position: relative;
  z-index: 2;
}

/* ===== TEXT ===== */
.step-title {
  margin-top: 14px;
  font-size: 16px;
  font-weight: 600;
  color: #111827;
}

.step-desc {
  margin-top: 6px;
  font-size: 14px;
  color: #6B7280;
}

/* ===== HOVER ===== */
.group:hover .step-circle {
  background: #FD5528;
  color: white;
  transform: scale(1.1);
  box-shadow: 0 15px 30px rgba(253,85,40,0.3);
}

.group:hover .step-title {
  color: #FD5528;
}

/* ===== ALIGN ZIG-ZAG (SCOPED) ===== */
.process-section .process-step:nth-child(2),
.process-section .process-step:nth-child(4),
.process-section .process-step:nth-child(6) {
  margin-top: 60px;
}

/* ===== SVG ANIMATION (SCOPED) ===== */
.process-section .process-line {
  stroke-dasharray: 1;
  stroke-dashoffset: 1;
  animation: processDrawLine 3s ease forwards;
}

/* Animation renamed */
@keyframes processDrawLine {
  to {
    stroke-dashoffset: 0;
  }
}

@media (min-width: 768px) {
  .process-section .process-step:nth-child(2),
  .process-section .process-step:nth-child(4),
  .process-section .process-step:nth-child(6) {
    margin-top: 60px;
  }
}

/* Prevent AOS from hiding critical hero content before JS executes (improves LCP) */
#hero, #hero [data-aos], .hero-section, .hero-section [data-aos] {
  opacity: 1 !important;
  transform: none !important;
  visibility: visible !important;
}

.service-card {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;

  padding: 14px 10px;
  border-radius: 16px;

  background: white;
  border: 1px solid #e5e7eb;

  transition: all 0.3s ease;
}

.service-card img {
  width: 26px;
  height: 26px;
  margin-bottom: 8px;
}

.service-card p {
  font-size: 13px;
  line-height: 1.4;
  font-weight: 600;
  color: #374151;
  text-align: center;
}

/* HOVER */
.service-card:hover {
  transform: translateY(-6px);
  border-color: #FD5528;
  box-shadow: 0 12px 30px rgba(253,85,40,0.25);
  color: #FD5528;
}

/* SM */
@media (min-width: 640px) {
  .service-card {
    padding: 16px 12px;
  }
  .service-card img {
    width: 30px;
    height: 30px;
  }
  .service-card p {
    font-size: 13px;
  }
}

/* MD */
@media (min-width: 768px) {
  .service-card {
    padding: 18px;
  }
  .service-card img {
    width: 34px;
    height: 34px;
  }
  .service-card p {
    font-size: 14px;
  }
}

/* LG+ */
@media (min-width: 1024px) {
  .service-card img {
    width: 38px;
    height: 38px;
  }
  .service-card p {
    font-size: 14px;
  }
}
/*  */

.animate-marquee {
    animation: marquee 20s linear infinite;
}

.animate-marquee-reverse {
    animation: marquee 20s linear infinite reverse;
}

/* client */
.logo {
  min-width: 160px;
  height: 90px;
  display: flex;
  align-items: center;
  justify-content: center;


  border: 1px solid rgba(255,255,255,0.1);
  border-radius: 12px;

  transition: all 0.3s ease;
}

.logo img {
  height: 200px;
 
 
  transition: all 0.3s ease;
}



</style>
<style>
.stat-card {
  transition: all 0.3s ease;
}

.stat-card:hover {
  transform: translateY(-8px) scale(1.03);
  box-shadow: 0 20px 40px rgba(253, 85, 40, 0.15);
}
</style>

<style>
    .flip-card {
        perspective: 1500px;
        height: 240px;
    }

    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        transition: transform 0.8s cubic-bezier(.4,.2,.2,1);
        transform-style: preserve-3d;
    }

    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-front,
    .flip-back {
        position: absolute;
        inset: 0;
        backface-visibility: hidden;
        -webkit-backface-visibility: hidden;
        border-radius: 1.75rem;
        overflow: hidden;
    }

    .flip-back {
        transform: rotateY(180deg);
    }
</style>


</head>
<body>
  
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WLWCJJ7N"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <!-- Site Preloader -->
    <div id="site-preloader" class="fixed inset-0 z-[9999] flex items-center justify-center bg-white transition-opacity duration-500">
        <img src="{{ asset('assets/images/bci_icon.png') }}" alt="Backend Coders India" width="80" height="80" fetchpriority="high" decoding="sync" class="h-20 w-20 animate-pulse object-contain">
    </div>
    <noscript>
        <style>#site-preloader { display: none !important; }</style>
    </noscript>

    @include('component.header')

<!-- FLOATING STACK -->
<div class="fixed right-5 bottom-6 z-[60] flex flex-col items-end gap-3">
    <div class="relative">
        <button id="contactToggle"
            type="button"
            class="flex h-14 w-14 items-center justify-center rounded-full bg-[#1aac26] text-white shadow-lg transition hover:scale-110"
            aria-label="Open contact menu">
            <img src="{{asset('assets/icons/person.png')}}" class="w-6 h-6" alt="Contact">
        </button>

        <div id="contactMenu"
            class="absolute bottom-20 right-0 w-64 space-y-2 rounded-2xl border bg-white p-3 opacity-0 shadow-2xl transition-all duration-300 pointer-events-none invisible translate-y-5 scale-95 origin-bottom-right">
            <a href="tel:+919140092133" class="flex items-center gap-3 rounded-xl p-3 hover:bg-orange-50" aria-label="Call Us">
                <img src="{{ asset('assets/icons/phone.png') }}" class="w-6 h-6" alt=" connect with us">
                <span>Call Us</span>
            </a>

            <a href="https://wa.me/919140092133" target="_blank" class="flex items-center gap-3 rounded-xl p-3 hover:bg-orange-50" aria-label="Chat on WhatsApp">
                <img src="{{ asset('assets/icons/whatsapp.png') }}" class="w-6 h-6" alt="Chat on WhatsApp">
                <span>WhatsApp</span>
            </a>
        </div>
    </div>


    

    <div class="relative">
        <button id="botToggle"
            type="button"
            class="flex h-14 w-14 items-center justify-center rounded-full bg-[#FD5528] text-white shadow-lg shadow-[#FD5528]/30 transition hover:scale-110"
            aria-label="Open chatbot">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 6.5A2 2 0 0 1 6.5 4.5h11A2 2 0 0 1 19.5 6.5v7A2 2 0 0 1 17.5 15.5H10l-4.5 4.5v-4.5h-1A2 2 0 0 1 2.5 13.5v-7Z" />
            </svg>
        </button>

        <div id="botPanel"
            class="absolute bottom-20 right-0 w-[22rem] overflow-hidden rounded-[1.75rem] border border-slate-200 bg-white opacity-0 shadow-[0_24px_80px_rgba(15,23,42,0.18)] transition-all duration-300 invisible translate-y-4 scale-95 pointer-events-none origin-bottom-right">
            <div class="flex items-center justify-between bg-gradient-to-r from-[#FD5528] to-[#f97316] px-4 py-4 text-white">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.35em] text-white/70">Chatbot</p>
                    <h3 class="mt-1 text-lg font-semibold">Backend Coders Assistant</h3>
                </div>
                <div class="flex h-10 w-10 items-center justify-center rounded-full bg-white/15">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 10.5A4.5 4.5 0 0 1 12 6h0a4.5 4.5 0 0 1 4.5 4.5V12A4.5 4.5 0 0 1 12 16.5h0A4.5 4.5 0 0 1 7.5 12v-1.5Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 10.5h.01M15 10.5h.01" />
                    </svg>
                </div>
            </div>

            <div id="botMessages" class="max-h-80 space-y-3 overflow-y-auto bg-slate-50 p-4">
                <div class="max-w-[85%] rounded-2xl rounded-bl-md border border-slate-200 bg-white px-4 py-3 text-sm text-slate-700">
                    {{ config('laravel-chatbot.welcome_message', 'Hello! How can I help you today?') }}
                </div>
            </div>

            <div class="border-t border-slate-200 bg-white p-4">
          
                <div class="flex gap-2">
                    <input
                        id="botInput"
                        type="text"
                        placeholder="Type a message..."
                        class="w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10"
                    >
                    <button
                        id="botSend"
                        type="button"
                        class="inline-flex shrink-0 items-center justify-center rounded-2xl bg-[#FD5528] px-4 py-3 text-sm font-semibold text-white transition hover:bg-[#e94c20]"
                    >
                        Send
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
    @yield('content')

    @include('component.footer')
<script>
function dismissSitePreloader() {
    const preloader = document.getElementById('site-preloader');
    if (preloader && !preloader.__dismissed) {
        preloader.__dismissed = true;
        preloader.classList.add('opacity-0');
        setTimeout(() => {
            preloader.classList.add('hidden');
            preloader.style.display = 'none';
        }, 400);
    }
}

if (document.readyState === 'complete' || document.readyState === 'interactive') {
    dismissSitePreloader();
} else {
    document.addEventListener('DOMContentLoaded', dismissSitePreloader);
}
window.addEventListener('load', dismissSitePreloader);
setTimeout(dismissSitePreloader, 800);

document.addEventListener('DOMContentLoaded', function () {
  const contactToggle = document.getElementById('contactToggle');
  const contactMenu = document.getElementById('contactMenu');
  const botToggle = document.getElementById('botToggle');
  const botPanel = document.getElementById('botPanel');
  const botInput = document.getElementById('botInput');
  const botSend = document.getElementById('botSend');
  const botMessages = document.getElementById('botMessages');
  const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content || '';

  if (contactToggle && contactMenu) {
    contactToggle.addEventListener('click', (e) => {
      e.stopPropagation();
      const isHidden = contactMenu.classList.contains('opacity-0');

      contactMenu.classList.toggle('opacity-0');
      contactMenu.classList.toggle('pointer-events-none');
      contactMenu.classList.toggle('invisible');
      contactMenu.classList.toggle('translate-y-5');
      contactMenu.classList.toggle('scale-95');
      contactMenu.classList.toggle('scale-100');
      contactToggle.setAttribute('aria-expanded', String(isHidden));
    });
  }

  const appendBotMessage = (text, type = 'bot') => {
    if (!botMessages) return;

    const bubble = document.createElement('div');
    bubble.className = type === 'user'
      ? 'ml-auto max-w-[85%] rounded-2xl rounded-br-md bg-[#FD5528] px-4 py-3 text-sm text-white'
      : 'max-w-[85%] rounded-2xl rounded-bl-md border border-slate-200 bg-white px-4 py-3 text-sm text-slate-700';
    bubble.textContent = text;
    botMessages.appendChild(bubble);
    botMessages.scrollTop = botMessages.scrollHeight;
  };

  const sendBotMessage = async (value = '') => {
    if (!botInput || !botMessages) return;

    const text = (value || botInput.value).trim();
    if (!text) return;

    appendBotMessage(text, 'user');
    botInput.value = '';

    try {
      const response = await fetch('{{ route('botman.controller-web-chat') }}', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json',
          'X-CSRF-TOKEN': csrfToken,
        },
        credentials: 'same-origin',
        body: JSON.stringify({ message: text }),
      });

      const data = await response.json();
      appendBotMessage(data.text || 'I did not get that.');
    } catch (error) {
      appendBotMessage('Sorry, the chatbot is unavailable right now.');
    }
  };

  const fillBotInput = (value) => {
    if (!botInput) return;

    botInput.value = value;
    botInput.focus();
    botInput.setSelectionRange(botInput.value.length, botInput.value.length);
  };

  if (botToggle && botPanel && botInput && botSend) {
    botToggle.addEventListener('click', (e) => {
      e.stopPropagation();
      const isHidden = botPanel.classList.contains('opacity-0');

      botPanel.classList.toggle('opacity-0');
      botPanel.classList.toggle('pointer-events-none');
      botPanel.classList.toggle('invisible');
      botPanel.classList.toggle('translate-y-4');
      botPanel.classList.toggle('scale-95');
      botPanel.classList.toggle('scale-100');
      botToggle.setAttribute('aria-expanded', String(isHidden));

      if (isHidden) {
        botInput.focus();
        if (botMessages) {
          botMessages.scrollTop = botMessages.scrollHeight;
        }
      }
    });

    botSend.addEventListener('click', () => sendBotMessage());

    botInput.addEventListener('keydown', (event) => {
      if (event.key === 'Enter') {
        event.preventDefault();
        sendBotMessage();
      }
    });

    botMessages.querySelectorAll('[data-bot-quick]').forEach((button) => {
      button.addEventListener('click', () => fillBotInput(button.getAttribute('data-bot-quick') || ''));
    });
  }

  document.addEventListener('click', (e) => {
    if (contactToggle && contactMenu && !contactToggle.contains(e.target) && !contactMenu.contains(e.target)) {
      contactMenu.classList.add('opacity-0', 'pointer-events-none', 'invisible', 'translate-y-5', 'scale-95');
      contactMenu.classList.remove('scale-100');
      contactToggle.setAttribute('aria-expanded', 'false');
    }

    if (botToggle && botPanel && !botToggle.contains(e.target) && !botPanel.contains(e.target)) {
      botPanel.classList.add('opacity-0', 'pointer-events-none', 'invisible', 'translate-y-4', 'scale-95');
      botPanel.classList.remove('scale-100');
      botToggle.setAttribute('aria-expanded', 'false');
    }
  });
});

  // timeline////
document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".timeline-item");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.remove("opacity-0", "translate-y-10");
        entry.target.classList.add("opacity-100", "translate-y-0");
      }
    });
  }, { threshold: 0.2 });

  items.forEach(item => observer.observe(item));
});


document.addEventListener('DOMContentLoaded', () => {
  const items = document.querySelectorAll('.faq-item');

  items.forEach((item) => {
    const trigger = item.querySelector('[data-faq-trigger]');
    const answer = item.querySelector('.faq-answer');
    const icon = item.querySelector('.faq-icon-text');

    if (!trigger || !answer || !icon) return;

    const closeAll = () => {
      items.forEach((i) => {
        const ans = i.querySelector('.faq-answer');
        const ic = i.querySelector('.faq-icon-text');
        const trg = i.querySelector('[data-faq-trigger]');

        i.classList.remove('faq-open');
        ans.style.maxHeight = null;
        ans.setAttribute('aria-hidden', 'true');
        trg.setAttribute('aria-expanded', 'false');
        ic.textContent = '+';
      });
    };

    const openItem = () => {
      closeAll();

      item.classList.add('faq-open');
      answer.style.maxHeight = answer.scrollHeight + "px";
      answer.setAttribute('aria-hidden', 'false');
      trigger.setAttribute('aria-expanded', 'true');
      icon.textContent = icon.querySelector('.vertical').style.opacity = '0';
    };

    trigger.addEventListener('click', () => {
      const isOpen = item.classList.contains('faq-open');

      if (isOpen) {
        closeAll();
      } else {
        openItem();
      }
    });

    // Accessibility (keyboard)
    trigger.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        trigger.click();
      }
    });
  });
});


// DROIPDOWN:::

function toggleDropdown() {
    const dropdown = document.getElementById("serviceDropdown");
    dropdown.classList.toggle("hidden");
}

// 🔥 CLOSE ON OUTSIDE CLICK
document.addEventListener("click", function (e) {
    const dropdown = document.getElementById("serviceDropdown");

    if (!e.target.closest(".relative")) {
        dropdown.classList.add("hidden");
    }
});



function initContactFormCaptcha() {
    const forms = document.querySelectorAll("[data-contact-form], #packageContactForm");
    if (!forms.length) return;

    forms.forEach(function(form) {
        if (form.__captchaInitialized) return;
        form.__captchaInitialized = true;

        const questionEl = form.querySelector("#captchaQuestion");
        const correctInput = form.querySelector("#captchaCorrect, input[name='captcha_correct']");
        const captchaInput = form.querySelector("#captchaInput, input[name='captcha']");
        const errorEl = form.querySelector("#captchaError");
        const reloadBtns = form.querySelectorAll(".reload-captcha-btn");

        function refreshCaptcha() {
            const num1 = Math.floor(Math.random() * 8) + 2;
            const num2 = Math.floor(Math.random() * 9) + 1;
            if (questionEl) {
                questionEl.innerHTML = `What is ${num1} + ${num2}? <span class="text-red-500 font-bold">*</span>`;
            }
            if (correctInput) {
                correctInput.value = (num1 + num2).toString();
            }
            if (captchaInput) {
                captchaInput.value = "";
                captchaInput.focus();
            }
            if (errorEl) {
                errorEl.classList.add("hidden");
            }
        }

        // If for any reason captcha was not pre-populated server-side, populate it now
        if (correctInput && (!correctInput.value || correctInput.value.trim() === "")) {
            refreshCaptcha();
        }

        // Bind reload challenge buttons
        reloadBtns.forEach(function(btn) {
            btn.addEventListener("click", function(e) {
                e.preventDefault();
                refreshCaptcha();
            });
        });

        // Clear error message when user starts typing
        if (captchaInput) {
            captchaInput.addEventListener("input", function() {
                if (errorEl) {
                    errorEl.classList.add("hidden");
                }
            });
        }

        // Auto-scroll to feedback if page reloaded with success or error
        const feedbackContainer = form.querySelector("#contact-feedback, #package-contact-feedback");
        if (feedbackContainer && (feedbackContainer.querySelector("[role='alert']") || window.location.hash.includes("feedback"))) {
            setTimeout(function() {
                feedbackContainer.scrollIntoView({ behavior: "smooth", block: "center" });
            }, 300);
        }

        const dynamicFeedback = form.querySelector("#contactDynamicFeedback, #packageContactDynamicFeedback");

        // Form submission handling
        form.addEventListener("submit", function(e) {
            if (errorEl) {
                errorEl.classList.add("hidden");
            }
            if (dynamicFeedback) {
                dynamicFeedback.classList.add("hidden");
                dynamicFeedback.innerHTML = "";
            }

            // HTML5 native validation
            if (!form.checkValidity()) {
                e.preventDefault();
                form.reportValidity();
                return;
            }

            // CAPTCHA check
            const userAnswer = captchaInput ? captchaInput.value.trim() : "";
            const correctAnswer = correctInput ? correctInput.value.trim() : "";

            if (!userAnswer || !correctAnswer || userAnswer !== correctAnswer) {
                e.preventDefault();
                refreshCaptcha();
                if (errorEl) {
                    errorEl.classList.remove("hidden");
                }
                return;
            }

            e.preventDefault();

            // Visual feedback on submission
            const submitBtn = form.querySelector("button[type='submit']");
            const originalBtnHtml = submitBtn ? submitBtn.innerHTML : "Send Message";

            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.style.pointerEvents = "none";
                submitBtn.style.opacity = "0.85";
                submitBtn.innerHTML = `
                    <span class="inline-flex items-center gap-2">
                        <svg class="animate-spin h-4 w-4 text-white inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        Sending...
                    </span>
                `;
            }

            const formData = new FormData(form);

            fetch(form.action, {
                method: "POST",
                body: formData,
                headers: {
                    "Accept": "application/json",
                    "X-Requested-With": "XMLHttpRequest"
                }
            })
            .then(async function(res) {
                const data = await res.json().catch(() => null);

                if (res.ok && data && data.success) {
                    if (dynamicFeedback) {
                        dynamicFeedback.innerHTML = `
                            <div class="rounded-2xl border-2 border-emerald-400 bg-emerald-50 p-5 text-emerald-900 shadow-md flex items-start gap-3.5 transition-all" role="alert">
                                <div class="p-1 rounded-full bg-emerald-100 text-emerald-600 flex-shrink-0 mt-0.5">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-base font-bold text-emerald-950">Inquiry Received!</h4>
                                    <p class="text-sm font-semibold text-emerald-800 mt-0.5">${data.message || "Thanks! We'll reply within 24 hours."}</p>
                                    <p class="text-xs text-emerald-700 mt-1">
                                        Our team will get back to you shortly. Need immediate assistance? Call us directly at <a href="tel:+919140092133" class="underline font-bold">+91 9140092133</a>.
                                    </p>
                                </div>
                            </div>
                        `;
                        dynamicFeedback.classList.remove("hidden");
                        dynamicFeedback.scrollIntoView({ behavior: "smooth", block: "center" });
                    }
                    form.reset();
                    refreshCaptcha();
                } else {
                    let errMsg = (data && data.message) ? data.message : "Unable to submit your inquiry.";
                    if (data && data.errors) {
                        const errorList = Object.values(data.errors).flat().join(" ");
                        if (errorList) errMsg = errorList;
                    }
                    if (dynamicFeedback) {
                        dynamicFeedback.innerHTML = `
                            <div class="rounded-2xl border-2 border-red-300 bg-red-50 p-5 text-red-900 shadow-sm flex items-start gap-3.5" role="alert">
                                <div class="p-1 rounded-full bg-red-100 text-red-600 flex-shrink-0 mt-0.5">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-base font-bold text-red-950">Submission Failed</h4>
                                    <p class="text-sm font-medium text-red-800 mt-0.5">${errMsg}</p>
                                    <p class="text-xs text-red-700 mt-1">
                                        Next steps: Check your input details, try again, or email us at <a href="mailto:info@backendcodersindia.com" class="underline font-bold">info@backendcodersindia.com</a>.
                                    </p>
                                </div>
                            </div>
                        `;
                        dynamicFeedback.classList.remove("hidden");
                        dynamicFeedback.scrollIntoView({ behavior: "smooth", block: "center" });
                    }
                    refreshCaptcha();
                }
            })
            .catch(function(err) {
                console.warn("Async contact submission failed, falling back to standard submit:", err);
                form.submit();
            })
            .finally(function() {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.style.pointerEvents = "";
                    submitBtn.style.opacity = "";
                    submitBtn.innerHTML = originalBtnHtml;
                }
            });
        });
    });
}

window.generateCaptcha = function() {
    const forms = document.querySelectorAll("[data-contact-form], #packageContactForm");
    forms.forEach(function(form) {
        const questionEl = form.querySelector("#captchaQuestion");
        const correctInput = form.querySelector("#captchaCorrect, input[name='captcha_correct']");
        const num1 = Math.floor(Math.random() * 8) + 2;
        const num2 = Math.floor(Math.random() * 9) + 1;
        if (questionEl) questionEl.innerHTML = `What is ${num1} + ${num2}? <span class="text-red-500 font-bold">*</span>`;
        if (correctInput) correctInput.value = (num1 + num2).toString();
    });
};

if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initContactFormCaptcha);
} else {
    initContactFormCaptcha();
}

document.addEventListener("DOMContentLoaded", function () {

    const counters = document.querySelectorAll(".counter");

    const runCounter = (counter) => {

        const target = Number(counter.getAttribute("data-target"));

        // Read the real value already present in HTML
        const start = Number(
            counter.textContent.replace(/[^\d.-]/g, "")
        );

        // Safety check
        if (isNaN(target) || isNaN(start)) {
            return;
        }

        // If already at target, don't animate
        if (start >= target) {
            counter.textContent = `${target}+`;
            return;
        }

        const duration = 1500;
        const startTime = performance.now();

        const update = (currentTime) => {

            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);

            // Smooth easing
            const easedProgress =
                1 - Math.pow(1 - progress, 3);

            const currentValue = Math.floor(
                start + (target - start) * easedProgress
            );

            counter.textContent = `${currentValue}+`;

            if (progress < 1) {
                requestAnimationFrame(update);
            } else {
                counter.textContent = `${target}+`;
            }
        };

        requestAnimationFrame(update);
    };

    const observer = new IntersectionObserver(
        (entries, observer) => {

            entries.forEach(entry => {

                if (entry.isIntersecting) {

                    runCounter(entry.target);

                    observer.unobserve(entry.target);
                }

            });

        },
        {
            threshold: 0.3
        }
    );

    counters.forEach(counter => {
        observer.observe(counter);
    });

});




// hero grid
function initHeroVideoCards() {
    const cards = document.querySelectorAll('.video-card');
    if (!cards.length) return;

    cards.forEach(card => {
        if (card.__videoInitialized) return;
        card.__videoInitialized = true;

        const img = card.querySelector('img');
        const video = card.querySelector('video');
        if (!video) return;

        // Ensure proper attributes for cross-browser autoplay
        video.muted = true;
        video.defaultMuted = true;
        video.playsInline = true;

        let isHovered = false;

        const showVideo = () => {
            video.style.opacity = '1';
            if (img) img.style.opacity = '0';
        };

        const showImage = () => {
            video.style.opacity = '0';
            if (img) img.style.opacity = '1';
        };

        const play = () => {
            isHovered = true;
            video.muted = true;
            const sources = video.querySelectorAll('source[data-src]');
            sources.forEach(source => {
                source.src = source.dataset.src;
                delete source.dataset.src;
            });
            if (sources.length) video.load();

            const playPromise = video.play();
            if (playPromise !== undefined && typeof playPromise.then === 'function') {
                playPromise.then(() => {
                    if (isHovered) {
                        showVideo();
                    } else {
                        video.pause();
                        showImage();
                    }
                }).catch(() => {
                    showImage();
                });
            } else {
                showVideo();
            }
        };

        const pause = () => {
            isHovered = false;
            video.pause();
            showImage();
        };

        card.addEventListener('mouseenter', play);
        card.addEventListener('mouseleave', pause);

        // Mobile touch interaction
        card.addEventListener('touchstart', (e) => {
            if (isHovered) {
                pause();
            } else {
                play();
            }
        }, { passive: true });
    });
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initHeroVideoCards);
} else {
    initHeroVideoCards();
}
</script>




@php
  $mainJs = asset('assets/js/main.js') . '?v=' . filemtime(public_path('assets/js/main.js'));
@endphp

<script src="{{ $mainJs }}" defer></script>

</body>
</html>
