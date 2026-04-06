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

// Pause on hover (premium feel)
const swiperEl = document.querySelector('.swiper');

swiperEl.addEventListener('mouseenter', () => swiper.autoplay.stop());
swiperEl.addEventListener('mouseleave', () => swiper.autoplay.start());
