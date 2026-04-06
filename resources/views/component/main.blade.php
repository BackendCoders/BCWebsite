<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Backend Coders India | Backend Engineering Collective</title>
  <meta name="description" content="Backend Coders India is a collaborative team of backend engineers building scalable digital platforms, APIs, and cloud infrastructure for ambitious businesses." />
  
 <script src="https://cdn.tailwindcss.com"></script>
<link rel="icon" type="image/svg+xml" href="{{asset('assets/images/bci_icon.png')}}" class="bg-black"/>
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
    class="absolute bottom-16 right-0 w-64 rounded-2xl shadow-xl 
           p-4 space-y-3 opacity-0 pointer-events-none translate-y-5 
           transition-all duration-300">

    <!-- PHONE -->
    <a href="tel:+919140092133"
      class="flex items-center gap-3 p-3 rounded-xl bg-gray-100 transition">
      
      <img src="https://img.icons8.com/?size=100&id=9659&format=png&color=FD5528" class="w-5 h-5">
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


document.addEventListener("DOMContentLoaded", function () {

  const code = `// Backend Coders India - Project Config

{
  "project": "enterprise-erp-v3",
  "stack": {
    "backend": ".NET Core 8.0",
    "frontend": "React 18 + TypeScript",
    "database": "SQL Server + Redis",
    "cloud": "Azure App Services",
    "ci_cd": "GitHub Actions"
  },
  "features": [
    "multi-tenant-auth",
    "real-time-sync",
    "role-based-access",
    "automated-reporting"
  ],
  "status": "production ✓"
}`;

  let i = 0;
  const speed = 30;
  const element = document.getElementById("typing-code");

  function typeWriter() {
    if (i < code.length) {
      element.innerHTML += code.charAt(i);
      i++;
      setTimeout(typeWriter, speed);
    }
  }

  typeWriter();
});

</script>

<script>
const navLinks = document.querySelectorAll(".nav-link");

navLinks.forEach(link => {
    link.addEventListener("click", function () {

        // Remove Tailwind active styles from all
        navLinks.forEach(l => {
            l.classList.remove(
                "text-orange-600",
                "bg-orange-50",
                "font-semibold"
            );
        });

        // Add Tailwind active styles to clicked one
        this.classList.add(
            "text-orange-600",
            "bg-orange-50",
            "font-semibold"
        );
    });
});

// timeline///
(function () {
  "use strict";

  // define variables
  var items = document.querySelectorAll(".timeline li");

  // check if an element is in viewport
  // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <=
        (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  function callbackFunc() {
    for (var i = 0; i < items.length; i++) {
      if (isElementInViewport(items[i])) {
        items[i].classList.add("in-view");
      }
    }
  }

  // listen for events
  window.addEventListener("load", callbackFunc);
  window.addEventListener("resize", callbackFunc);
  window.addEventListener("scroll", callbackFunc);
})();

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


const tabs = document.querySelectorAll('.tab');
const projects = document.querySelectorAll('.project');

tabs.forEach(tab => {
  tab.addEventListener('click', () => {

    // active state
    tabs.forEach(t => t.classList.remove('active'));
    tab.classList.add('active');

    const category = tab.getAttribute('data-tab');

    projects.forEach(project => {
      if (category === 'all' || project.classList.contains(category)) {
        project.style.display = 'block';
      } else {
        project.style.display = 'none';
      }
    });

  });
});



</script>
<script>
const tabs = document.querySelectorAll(".tab");
const projects = document.querySelectorAll(".project");

tabs.forEach(tab => {
  tab.addEventListener("click", () => {

    tabs.forEach(t => {
      t.classList.remove("bg-orange-500","text-white");
      t.classList.add("text-orange-600");
    });

    tab.classList.add("bg-orange-500","text-white");

    const type = tab.dataset.tab;

    projects.forEach(p => {
      if(type === "all" || p.classList.contains(type)){
        p.style.display = "block";
      } else {
        p.style.display = "none";
      }
    });

  });
});

<!-- JS -->
<script>
const counters = document.querySelectorAll('.counter');
let started = false;

function runCounter() {
  if (started) return;

  const section = document.getElementById('stats-section-pro');
  const sectionTop = section.getBoundingClientRect().top;

  if (sectionTop < window.innerHeight - 100) {
    counters.forEach(counter => {
      const target = +counter.getAttribute('data-target');
      let count = 0;

      const update = () => {
        const increment = target / 80;

        if (count < target) {
          count += increment;
          counter.innerText = Math.ceil(count) + (target !== 100 ? '+' : '%');
          requestAnimationFrame(update);
        } else {
          counter.innerText = target + (target !== 100 ? '+' : '%');
        }
      };

      update();
    });

    started = true;
  }
}

window.addEventListener('scroll', runCounter);
</script>
</script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

 <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script src="{{ asset('assets/js/main.js') }}" defer></script>
</body>
</html>
