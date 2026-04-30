<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


  <!-- <title>Backend Coders India | Web Development Company in Kanpur, India | Custom Software, SaaS, SEO, Mobile App & AI Solutions</title> -->
<title>{{ $page->meta_title ?? $page->title ?? 'Backend Coders India | Web Development Company in Kanpur, India | Custom Software, SaaS, SEO, Mobile App & AI Solutions' }}</title>

<meta name="description" content="{{ $page->meta_description ?? 'Backend Coders India is a trusted web development company in Kanpur, India delivering custom software development, SaaS platforms, website design, SEO, digital marketing, mobile apps, API development, and AI solutions for Indian and international clients.' }}">

<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="canonical" href="{{ $page->canonical_url ?? url()->current() }}">

<!-- ✅ PRECONNECT (faster fonts) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>



<!-- ✅ PRELOAD FONT -->
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" as="style">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

<!-- ✅ LOCAL CSS (IMPORTANT - remove CDN tailwind) -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

<!-- ✅ AOS (deferred) -->
<link rel="preload" href="https://unpkg.com/aos@2.3.4/dist/aos.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

<!-- ✅ Swiper -->
<link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" as="style" onload="this.rel='stylesheet'">

<!-- ✅ Icons -->
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">

<link rel="icon" href="{{asset('assets/images/bci_icon.png')}}">




<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WLWCJJ7N');</script>
<!-- End Google Tag Manager -->

  <!-- <meta name="description" content="Backend Coders India is a trusted web development company in Kanpur, India delivering custom software development, SaaS platforms, website design, SEO, digital marketing, mobile apps, API development, and AI solutions for Indian and international clients." /> -->

<link rel="canonical" href="{{ $page->canonical_url ?? url()->current() }}">

  <!-- <link rel="canonical" href="{{ $page->canonical_url ?? url()->current() }}"> -->


 <script src="https://cdn.tailwindcss.com"></script>
<link rel="icon" type="image/svg+xml" alt="web development company in Kanpur" href="{{asset('assets/images/bci_icon.png')}}" class="bg-black"/>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />

  <!--  -->
 <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

  @if(optional($page)->is_index === 0)
    <meta name="robots" content="noindex, nofollow">
@endif

<style>
 
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
/* ===== HOVER ===== */
.process-section .group:hover .step-circle {
  background: #FD5528;
  color: white;
  transform: scale(1.1);
  box-shadow: 0 15px 30px rgba(253,85,40,0.3);
}

.process-section .group:hover .step-title {
  color: #FD5528;
}

/* ===== ALIGN ZIG-ZAG ===== */
.process-section .process-step:nth-child(2),
.process-section .process-step:nth-child(4),
.process-section .process-step:nth-child(6) {
  margin-top: 60px;
}

/* ===== SVG ANIMATION ===== */
.process-section .process-line {
  stroke-dasharray: 1;
  stroke-dashoffset: 1;
  animation: processDrawLine 3s ease forwards;
}

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
  font-size: 11px;
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
    font-size: 12px;
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
    font-size: 13px;
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
@keyframes marquee {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

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
</head>
<body>
  
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WLWCJJ7N"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    @include('component.header')

<div class="" style="font-family:Space Grotesk, sans-serif; font-body: Inter, sans-serif;
    font-mono:JetBrains Mono, monospace; muted-foreground: 215 14% 40%;">

<!-- FLOATING STACK -->
<div class="fixed right-5 bottom-6 z-[60] flex flex-col items-end gap-3">
    <div class="relative">
        <button id="contactToggle"
            type="button"
            class="flex h-14 w-14 items-center justify-center rounded-full bg-[#1aac26] text-white shadow-lg transition hover:scale-110"
            aria-label="Open contact menu">
            <img src="https://img.icons8.com/?size=100&id=122809&format=png&color=FFFFFF" class="w-8" alt="Contact">
        </button>

        <div id="contactMenu"
            class="absolute bottom-20 right-0 w-64 translate-y-5 space-y-2 rounded-2xl border bg-white p-3 opacity-0 shadow-2xl transition-all duration-300 pointer-events-none">
            <a href="tel:+919140092133" class="flex items-center gap-3 rounded-xl p-3 hover:bg-orange-50">
                <img src="https://img.icons8.com/?size=100&id=9730&format=png&color=FA5252" class="w-6" alt="">
                <span>Call Us</span>
            </a>

            <a href="https://wa.me/919140092133" target="_blank" class="flex items-center gap-3 rounded-xl p-3 hover:bg-orange-50">
                <img src="https://img.icons8.com/?size=100&id=Jneo9ShAzJw7&format=png&color=000000" class="w-6" alt="">
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
            class="absolute bottom-20 right-0 hidden w-[22rem] overflow-hidden rounded-[1.75rem] border border-slate-200 bg-white shadow-[0_24px_80px_rgba(15,23,42,0.18)]">
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
                <!-- <div class="mb-3 flex flex-wrap gap-2">
                    <button type="button" data-bot-quick="SEO" class="rounded-full border border-slate-200 px-3 py-1.5 text-xs font-semibold text-slate-600 transition hover:border-[#FD5528] hover:text-[#FD5528]">SEO</button>
                    <button type="button" data-bot-quick="Website" class="rounded-full border border-slate-200 px-3 py-1.5 text-xs font-semibold text-slate-600 transition hover:border-[#FD5528] hover:text-[#FD5528]">Website</button>
                    <button type="button" data-bot-quick="Blogs" class="rounded-full border border-slate-200 px-3 py-1.5 text-xs font-semibold text-slate-600 transition hover:border-[#FD5528] hover:text-[#FD5528]">Blogs</button>
                    <button type="button" data-bot-quick="Contact" class="rounded-full border border-slate-200 px-3 py-1.5 text-xs font-semibold text-slate-600 transition hover:border-[#FD5528] hover:text-[#FD5528]">Contact</button>
                </div> -->

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
<!-- JS -->
</div>

<style>
.stat-card {
  transition: all 0.3s ease;
}

.stat-card:hover {
  transform: translateY(-8px) scale(1.03);
  box-shadow: 0 20px 40px rgba(253, 85, 40, 0.15);
}
</style>


<script>
document.addEventListener("DOMContentLoaded", function () {

    document.querySelectorAll('.read-more-btn').forEach((btn) => {

        const text = btn.previousElementSibling;

        // Hide button if text is small
        setTimeout(() => {
            if (text.scrollHeight <= text.clientHeight) {
                btn.style.display = 'none';
            }
        }, 100);

        btn.addEventListener('click', function () {

            if (text.classList.contains('line-clamp-2')) {
                text.classList.remove('line-clamp-2');
                btn.innerText = 'Read Less';
            } else {
                text.classList.add('line-clamp-2');
                btn.innerText = 'Read More';
            }

        });

    });

});
</script>

<script>
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
      contactMenu.classList.toggle('opacity-0');
      contactMenu.classList.toggle('pointer-events-none');
      contactMenu.classList.toggle('translate-y-5');
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
      botPanel.classList.toggle('hidden');
      if (!botPanel.classList.contains('hidden')) {
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
      contactMenu.classList.add('opacity-0', 'pointer-events-none', 'translate-y-5');
    }

    if (botToggle && botPanel && !botToggle.contains(e.target) && !botPanel.contains(e.target)) {
      botPanel.classList.add('hidden');
    }
  });
});
</script>


    @yield('content') </div>

    @include('component.footer')

  
<!-- Swiper JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
<script src="{{ asset('assets/js/main.js') }}" defer></script>
<script>
function generateCaptcha() {
    let num1 = Math.floor(Math.random() * 10);
    let num2 = Math.floor(Math.random() * 10);

    document.getElementById("captchaQuestion").innerHTML =
        `What is ${num1} + ${num2}? <span style="color:red">*</span>`;

    document.getElementById("captchaCorrect").value = num1 + num2;
}

const contactForm = document.querySelector("[data-contact-form]");

if (contactForm) {
  generateCaptcha();

  contactForm.addEventListener("submit", function(e) {

    let form = this;

    // Reset error
    document.getElementById("captchaError").classList.add("hidden");

    // HTML validation
    if (!form.checkValidity()) {
        e.preventDefault();
        form.reportValidity();
        return;
    }

    // CAPTCHA validation
    let userAnswer = document.getElementById("captchaInput").value.trim();
    let correctAnswer = document.getElementById("captchaCorrect").value;

    if (userAnswer == "" || userAnswer != correctAnswer) {
        e.preventDefault();

        document.getElementById("captchaError").classList.remove("hidden");

        generateCaptcha();
        document.getElementById("captchaInput").value = "";
    }
  });
}
</script>


</body>
</html>
