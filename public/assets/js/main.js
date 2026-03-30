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
