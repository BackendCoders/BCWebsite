document.addEventListener('DOMContentLoaded', () => {
  if (window.AOS) {
    AOS.init({
      once: true,
      duration: 750,
      easing: 'ease-out-cubic',
    });
  }

  const counters = document.querySelectorAll('[data-counter]');
  const counterObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      const element = entry.target;
      const target = parseInt(element.getAttribute('data-counter'), 10) || 0;
      let current = 0;
      const step = Math.max(1, Math.round(target / 60));
      const interval = setInterval(() => {
        current += step;
        if (current >= target) {
          element.textContent = target.toLocaleString();
          clearInterval(interval);
        } else {
          element.textContent = current.toLocaleString();
        }
      }, 30);
      observer.unobserve(element);
    });
  }, { threshold: 0.5 });

  counters.forEach((counter) => counterObserver.observe(counter));

  const activePage = document.body.dataset.page;
  if (activePage) {
    const activeLink = document.querySelector(`[data-nav="${activePage}"]`);
    if (activeLink) {
      activeLink.classList.add('text-accent', 'font-semibold');
    }
  }
});


// Counter Animation

document.addEventListener("DOMContentLoaded", () => {

  const counters = document.querySelectorAll('.counter');
  const section = document.getElementById('stats-section-pro');

  if (!section) return;

  let started = false;

  const runCounter = () => {
    if (started) return;

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
  };

  // ✅ INTERSECTION OBSERVER (BEST)
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        runCounter();
        observer.unobserve(section); // run once only
      }
    });
  }, { threshold: 0.3 });

  observer.observe(section);

});

// testimonial slider

const swiper = new Swiper('.swiper', {
  loop: true,
  spaceBetween: 14,

  slidesPerView: 2, // 👈 EXACTLY 2 CARDS

  speed: 4000, // smooth continuous

  autoplay: {
    delay: 30,
    disableOnInteraction: false,
  },

  freeMode: true,
  freeModeMomentum: false,

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  breakpoints: {
    0: { slidesPerView: 1 },
    768: { slidesPerView: 2 }, // 👈 2 on tablet+
  }
});


// our journey slider




// Pause on hover (premium feel)
const swiperEl = document.querySelector('.swiper');

swiperEl.addEventListener('mouseenter', () => swiper.autoplay.stop());
swiperEl.addEventListener('mouseleave', () => swiper.autoplay.start());


// 

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
// (function () {
//   "use strict";

//   // define variables
//   var items = document.querySelectorAll(".timeline li");

//   // check if an element is in viewport
//   // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
//   function isElementInViewport(el) {
//     var rect = el.getBoundingClientRect();
//     return (
//       rect.top >= 0 &&
//       rect.left >= 0 &&
//       rect.bottom <=
//         (window.innerHeight || document.documentElement.clientHeight) &&
//       rect.right <= (window.innerWidth || document.documentElement.clientWidth)
//     );
//   }

//   function callbackFunc() {
//     for (var i = 0; i < items.length; i++) {
//       if (isElementInViewport(items[i])) {
//         items[i].classList.add("in-view");
//       }
//     }
//   }

//   // listen for events
//   window.addEventListener("load", callbackFunc);
//   window.addEventListener("resize", callbackFunc);
//   window.addEventListener("scroll", callbackFunc);
// })();

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


const tabs = document.querySelectorAll(".tab");
const projects = document.querySelectorAll(".project");

tabs.forEach(tab => {
  tab.addEventListener("click", () => {

    // RESET ALL TABS
    tabs.forEach(t => {
      t.classList.remove("bg-orange-500", "text-white");
      t.classList.add("text-orange-600"); // default state
    });

    // ACTIVE TAB
    tab.classList.remove("text-orange-600"); // remove default
    tab.classList.add("bg-orange-500", "text-white");

    // FILTER PROJECTS
    const type = tab.dataset.tab;

    projects.forEach(p => {
      if (type === "all" || p.classList.contains(type)) {
        p.style.display = "block";
      } else {
        p.style.display = "none";
      }
    });

  });
});


document.addEventListener("DOMContentLoaded", () => {

  const items = document.querySelectorAll(".faq-item");

  items.forEach(item => {
    item.addEventListener("click", () => {

      const answer = item.querySelector(".faq-answer");
      const icon = item.querySelector(".faq-icon");

      const isOpen = answer.classList.contains("max-h-40");

      // CLOSE ALL
      items.forEach(i => {
        i.querySelector(".faq-answer").classList.remove("max-h-40");
        i.querySelector(".faq-icon").classList.remove("rotate-45");
      });

      // OPEN CURRENT
      if (!isOpen) {
        answer.classList.add("max-h-40");
        icon.classList.add("rotate-45");
      }

    });
  });

});

document.addEventListener("DOMContentLoaded", () => {

  const items = document.querySelectorAll(".faq-item");

  items.forEach(item => {
    item.addEventListener("click", () => {

      const answer = item.querySelector(".faq-answer");
      const icon = item.querySelector(".faq-icon");

      const isOpen = answer.classList.contains("max-h-40");

      // CLOSE ALL
      items.forEach(i => {
        i.querySelector(".faq-answer").classList.remove("max-h-40");
        i.querySelector(".faq-icon").classList.remove("rotate-45");
      });

      // OPEN CURRENT
      if (!isOpen) {
        answer.classList.add("max-h-40");
        icon.classList.add("rotate-45");
      }

    });
  });

});
