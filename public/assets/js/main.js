document.addEventListener("DOMContentLoaded", () => {
    if (window.AOS) {
        AOS.init({
            once: true,
            duration: 750,
            easing: "ease-out-cubic",
        });
    }

    const counters = document.querySelectorAll("[data-counter]");
    const counterObserver = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;

                const element = entry.target;
                const target =
                    parseInt(element.getAttribute("data-counter"), 10) || 0;
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
        },
        { threshold: 0.5 },
    );

    counters.forEach((counter) => counterObserver.observe(counter));

    const activePage = document.body.dataset.page;
    if (activePage) {
        const activeLink = document.querySelector(`[data-nav="${activePage}"]`);
        if (activeLink) {
            activeLink.classList.add("text-accent", "font-semibold");
        }
    }

    initTestimonials();
});

function initTestimonials() {
    document.querySelectorAll(".testimonial-card").forEach((card) => {
        const text = card.querySelector(".review-text");
        const button = card.querySelector(".read-more-btn");

        if (!text || !button) return;

        const fullText = text.dataset.full || text.textContent.trim();
        const shortText = text.dataset.short || fullText;
        const collapsedText =
            shortText.length > 170
                ? `${shortText.slice(0, 167).trimEnd()}...`
                : shortText;

        text.textContent = collapsedText;
        button.setAttribute("aria-expanded", "false");
        button.textContent = "Read more";

        button.addEventListener("click", () => {
            const isExpanded = button.getAttribute("aria-expanded") === "true";
            text.textContent = isExpanded ? collapsedText : fullText;
            button.setAttribute("aria-expanded", String(!isExpanded));
            button.textContent = isExpanded ? "Read more" : "Show less";
        });
    });
}

function initSwiper() {
    const swiperEls = document.querySelectorAll(".swiper");
    if (!swiperEls.length || window._swiperInit) return;

    const getSlidesPerView = (swiperEl) => {
        if (!swiperEl.classList.contains("testimonials-swiper")) {
            return 1;
        }

        if (window.innerWidth >= 1024) return 3;
        if (window.innerWidth >= 768) return 2;
        return 1;
    };

    const updatePagination = (pagination, totalPages, activeIndex) => {
        if (!pagination) return;

        pagination.innerHTML = "";

        for (let i = 0; i < totalPages; i += 1) {
            const bullet = document.createElement("button");
            bullet.type = "button";
            bullet.className =
                "swiper-pagination-bullet inline-flex h-3 w-3 rounded-full transition";
            bullet.setAttribute("aria-label", `Go to slide ${i + 1}`);

            if (i === activeIndex) {
                bullet.classList.add("swiper-pagination-bullet-active");
            }

            pagination.appendChild(bullet);
        }
    };

    swiperEls.forEach((swiperEl) => {
        if (swiperEl.__swiperInitialized) return;

        const wrapper = swiperEl.querySelector(".swiper-wrapper");
        const originalSlides = Array.from(swiperEl.querySelectorAll(".swiper-slide"));
        const prevButton = swiperEl.querySelector(".swiper-button-prev");
        const nextButton = swiperEl.querySelector(".swiper-button-next");
        const pagination = swiperEl.querySelector(".swiper-pagination");

        if (!wrapper || !originalSlides.length) return;

        const slidesPerViewForCurrentWidth = () => getSlidesPerView(swiperEl);

        const clearClones = () => {
            wrapper.querySelectorAll("[data-swiper-clone='true']").forEach((node) => node.remove());
        };

        const cloneSlides = (count) => {
            const makeClone = (slide) => {
                const clone = slide.cloneNode(true);
                clone.dataset.swiperClone = "true";
                clone.setAttribute("aria-hidden", "true");
                clone.querySelectorAll("a, button, input, select, textarea, [tabindex]").forEach((el) => {
                    el.setAttribute("tabindex", "-1");
                    el.setAttribute("aria-hidden", "true");
                });
                return clone;
            };

            const before = originalSlides.slice(-count).map(makeClone);
            const after = originalSlides.slice(0, count).map(makeClone);

            before.forEach((clone) => wrapper.insertBefore(clone, wrapper.firstChild));
            after.forEach((clone) => wrapper.appendChild(clone));

            return { beforeCount: before.length, afterCount: after.length };
        };

        let slidesPerView = slidesPerViewForCurrentWidth();
        let loopOffset = 0;
        let currentIndex = 0;
        let autoplayTimer = null;
        let isAnimating = false;

        const prepare = () => {
            clearClones();
            slidesPerView = slidesPerViewForCurrentWidth();
            loopOffset = Math.min(slidesPerView, originalSlides.length);

            const totalSlides = originalSlides.length + loopOffset * 2;

            wrapper.style.display = "flex";
            wrapper.style.transition = "transform 450ms ease";
            wrapper.style.willChange = "transform";
            wrapper.style.transform = "translateX(0)";

            originalSlides.forEach((slide) => {
                slide.style.flex = `0 0 ${100 / slidesPerView}%`;
                slide.removeAttribute("aria-hidden");
            });

            cloneSlides(loopOffset);

            wrapper.querySelectorAll(".swiper-slide").forEach((slide) => {
                slide.style.flex = `0 0 ${100 / slidesPerView}%`;
            });

            currentIndex = loopOffset;

            if (pagination) {
                updatePagination(
                    pagination,
                    Math.max(1, originalSlides.length - slidesPerView + 1),
                    0,
                );
            }

            if (totalSlides <= 1) {
                stopAutoplay();
            }

            applyTransform(false);
        };

        const getPageIndex = () => {
            const pageCount = Math.max(1, originalSlides.length - slidesPerView + 1);
            return Math.min(pageCount - 1, Math.max(0, currentIndex - loopOffset));
        };

        const refreshPagination = () => {
            if (!pagination) return;

            const pageCount = Math.max(1, originalSlides.length - slidesPerView + 1);
            const activePage = getPageIndex();
            updatePagination(pagination, pageCount, activePage);
        };

        const applyTransform = (animate = true) => {
            wrapper.style.transition = animate ? "transform 450ms ease" : "none";
            wrapper.style.transform = `translateX(-${currentIndex * (100 / slidesPerView)}%)`;
            refreshPagination();
        };

        const goTo = (index, animate = true) => {
            if (originalSlides.length <= 1) return;

            currentIndex = index;
            isAnimating = animate;
            applyTransform(animate);
        };

        const goNext = () => goTo(currentIndex + 1, true);
        const goPrev = () => goTo(currentIndex - 1, true);

        const handleTransitionEnd = () => {
            if (originalSlides.length <= 1) return;

            const endIndex = loopOffset + originalSlides.length;

            if (currentIndex >= endIndex) {
                currentIndex = loopOffset;
                applyTransform(false);
            } else if (currentIndex < loopOffset) {
                currentIndex = endIndex - 1;
                applyTransform(false);
            }

            isAnimating = false;
        };

        const startAutoplay = () => {
            if (autoplayTimer || originalSlides.length <= 1) return;

            autoplayTimer = window.setInterval(() => {
                goNext();
            }, 4000);
        };

        const stopAutoplay = () => {
            if (!autoplayTimer) return;

            window.clearInterval(autoplayTimer);
            autoplayTimer = null;
        };

        prevButton?.addEventListener("click", () => {
            stopAutoplay();
            goPrev();
            startAutoplay();
        });

        nextButton?.addEventListener("click", () => {
            stopAutoplay();
            goNext();
            startAutoplay();
        });

        if (pagination) {
            pagination.addEventListener("click", (event) => {
                const bullet = event.target.closest(".swiper-pagination-bullet");
                if (!bullet) return;

                const bulletIndex = Array.from(pagination.children).indexOf(bullet);
                if (bulletIndex < 0) return;

                stopAutoplay();
                goTo(loopOffset + bulletIndex, true);
                startAutoplay();
            });
        }

        swiperEl.addEventListener("mouseenter", stopAutoplay);
        swiperEl.addEventListener("mouseleave", startAutoplay);
        swiperEl.addEventListener("transitionend", handleTransitionEnd);

        window.addEventListener("resize", () => {
            const previousSlidesPerView = slidesPerView;
            const nextSlidesPerView = slidesPerViewForCurrentWidth();

            if (previousSlidesPerView === nextSlidesPerView) return;

            prepare();
        });

        prepare();
        startAutoplay();
        swiperEl.__swiperInitialized = true;
    });

    window._swiperInit = true;
}

initSwiper();
window.initSwiper = initSwiper;

const navLinks = document.querySelectorAll(".nav-link");

navLinks.forEach((link) => {
    link.addEventListener("click", function () {
        navLinks.forEach((navLink) => {
            navLink.classList.remove(
                "text-orange-600",
                "bg-orange-50",
                "font-semibold",
            );
        });

        this.classList.add("text-orange-600", "bg-orange-50", "font-semibold");
    });
});
