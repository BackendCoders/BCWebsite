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

const swiperEl = document.querySelector('.swiper');

if (swiperEl && window.Swiper) {
  const swiper = new Swiper(swiperEl, {
    loop: true,
    spaceBetween: 14,
    slidesPerView: 2,
    speed: 4000,
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
      768: { slidesPerView: 2 },
    },
  });

  swiperEl.addEventListener('mouseenter', () => swiper.autoplay.stop());
  swiperEl.addEventListener('mouseleave', () => swiper.autoplay.start());
}

const navLinks = document.querySelectorAll('.nav-link');

navLinks.forEach((link) => {
  link.addEventListener('click', function () {
    navLinks.forEach((navLink) => {
      navLink.classList.remove(
        'text-orange-600',
        'bg-orange-50',
        'font-semibold',
      );
    });

    this.classList.add(
      'text-orange-600',
      'bg-orange-50',
      'font-semibold',
    );
  });
});
