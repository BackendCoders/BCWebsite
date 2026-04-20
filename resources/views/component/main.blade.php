<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


  <!-- <title>Backend Coders India | Web Development Company in Kanpur, India | Custom Software, SaaS, SEO, Mobile App & AI Solutions</title> -->
<title>{{ $page->meta_title ?? $page->title ?? 'Backend Coders India | Web Development Company in Kanpur, India | Custom Software, SaaS, SEO, Mobile App & AI Solutions' }}</title>

<meta name="description" content="{{ $page->meta_description ?? 'Backend Coders India is a trusted web development company in Kanpur, India delivering custom software development, SaaS platforms, website design, SEO, digital marketing, mobile apps, API development, and AI solutions for Indian and international clients.' }}">

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

    
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

 
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
<!-- FLOATING CONTACT BUTTON -->
<div class="fixed right-5 bottom-6 z-50">

  <!-- TOGGLE BUTTON -->
  <button id="contactToggle"
    class="w-14 h-14 flex items-center justify-center rounded-full 
           bg-[#1aac26] p-2 text-white shadow-lg hover:scale-110 transition">
    
    <img src="https://img.icons8.com/?size=100&id=16712&format=png&color=ffffff" alt="">
  </button>

  <!-- MENU -->
  <div id="contactMenu"
    class="absolute bottom-16 right-0 w-64
           p-4 space-y-3 opacity-0 pointer-events-none translate-y-5 
           transition-all duration-300">

    <!-- PHONE -->
    <a href="tel:+919140092133"
      class="flex items-center gap-3 p-3 rounded-xl bg-gray-100 transition">
      
      <img src="https://img.icons8.com/?size=100&id=9730&format=png&color=fd5528" class="w-5 h-5">
      <span class="text-sm font-medium text-gray-700">Call Us</span>
    </a>

    <!-- WHATSAPP -->
    <a href="https://wa.me/919140092133"
      target="_blank"
      class="flex items-center gap-3 p-3 rounded-xl bg-gray-100 transition">
      
      <img src="https://img.icons8.com/?size=100&id=16713&format=png&color=FD5528" class="w-5 h-5">
      <span class="text-sm font-medium text-gray-700">WhatsApp</span>
    </a>



  </div>

</div>

<!-- JS -->
<script>
  const toggleBtn = document.getElementById('contactToggle');
  const menu = document.getElementById('contactMenu');

  toggleBtn.addEventListener('click', () => {
    menu.classList.toggle('opacity-0');
    menu.classList.toggle('pointer-events-none');
    menu.classList.toggle('translate-y-5');
  });

  // Close when clicking outside
  document.addEventListener('click', (e) => {
    if (!toggleBtn.contains(e.target) && !menu.contains(e.target)) {
      menu.classList.add('opacity-0', 'pointer-events-none', 'translate-y-5');
    }
  });
</script>


    @yield('content') </div>

    @include('component.footer')

  <script src="scripts/site.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
AOS.init({
  duration: 1000,
  once: true
});


// tabs
document.addEventListener("DOMContentLoaded", () => {

  const tabs = document.querySelectorAll(".tab");
  const projects = document.querySelectorAll(".project");

  if (!tabs.length || !projects.length) return; // safety check

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {

      // RESET ALL TABS
      tabs.forEach(t => {
        t.classList.remove("bg-orange-500", "text-white");
      
      });

      // ACTIVE TAB
      tab.classList.remove("text-orange-600");
      tab.classList.add("bg-orange-500", "text-white");

      // FILTER PROJECTS
      const type = tab.dataset.tab;

      projects.forEach(p => {
        if (type === "all" || p.classList.contains(type)) {
          p.style.display = "";
        } else {
          p.style.display = "none";
        }
      });

    });
  });

});


</script>
</script>
<script>
  
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

</script>
<script>
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
</script>

<script>
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
</script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

 <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script src="{{ asset('assets/js/main.js') }}" defer></script>
<script>
function generateCaptcha() {
    let num1 = Math.floor(Math.random() * 10);
    let num2 = Math.floor(Math.random() * 10);

    document.getElementById("captchaQuestion").innerHTML =
        `What is ${num1} + ${num2}? <span style="color:red">*</span>`;

    document.getElementById("captchaCorrect").value = num1 + num2;
}

generateCaptcha();

document.querySelector("form").addEventListener("submit", function(e) {

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
</script>
</body>
</html>
