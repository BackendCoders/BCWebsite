<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Backend Coders India | Backend Engineering Collective</title>
  <meta name="description" content="Backend Coders India is a collaborative team of backend engineers building scalable digital platforms, APIs, and cloud infrastructure for ambitious businesses." />
  @vite('resources/css/app.css')
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

    
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
  <link rel="stylesheet" href="assets/css/style.css" />
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
</style>
    @include('component.header')

    <div class="" style="font-family:Space Grotesk, sans-serif; font-body: Inter, sans-serif;
    font-mono:JetBrains Mono, monospace; muted-foreground: 215 14% 40%;">
    @yield('content')</div>

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




</script>
 <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script src="assets/js/main.js" defer></script>
</body>
</html>
