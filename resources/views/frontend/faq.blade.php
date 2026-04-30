@extends('component.main')
@section('content')
<!-- test page -->
<!-- PREMIUM FAQ SECTION -->
<section class="bg-gradient-to-b from-white via-orange-50 to-white py-20">

  <div class="max-w-6xl mx-auto px-6 text-center mb-14">
    <p class="text-xs uppercase tracking-[0.5em] text-[#FD5528]">FAQs</p>

    <h2 class="text-4xl font-bold text-gray-900 mt-3">
      Frequently Asked Questions
    </h2>

    <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
      Everything you need to know about our services, pricing, and support.
    </p>
  </div>

  <div class="max-w-5xl mx-auto px-6 space-y-5">

    <!-- ITEM -->
    <div class="faq-item group border border-[#FD5528]/20 bg-white rounded-2xl p-5 shadow-md hover:shadow-xl transition cursor-pointer">

      <div class="flex justify-between items-center">
        <h3 class="font-semibold text-gray-900 group-hover:text-[#FD5528] transition">
          What SEO services do you offer?
        </h3>

        <span class="faq-icon text-[#FD5528] text-xl transition-transform duration-300">
          +
        </span>
      </div>

      <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500">
        <p class="mt-4 text-sm text-gray-600 leading-relaxed">
          We provide complete SEO services including On-Page SEO, Technical SEO, Local SEO, Link Building, and SEO Audits to improve your website rankings and traffic.
        </p>
      </div>
    </div>

    <!-- ITEM -->
    <div class="faq-item group border border-[#FD5528]/20 bg-white rounded-2xl p-5 shadow-md hover:shadow-xl transition cursor-pointer">
      <div class="flex justify-between items-center">
        <h3 class="font-semibold text-gray-900 group-hover:text-[#FD5528] transition">
          How long does SEO take to show results?
        </h3>
        <span class="faq-icon text-[#FD5528] text-xl transition-transform duration-300">+</span>
      </div>

      <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500">
        <p class="mt-4 text-sm text-gray-600">
          SEO typically takes 3 to 6 months to show significant results depending on competition, industry, and current website condition.
        </p>
      </div>
    </div>

    <!-- ITEM -->
    <div class="faq-item group border border-[#FD5528]/20 bg-white rounded-2xl p-5 shadow-md hover:shadow-xl transition cursor-pointer">
      <div class="flex justify-between items-center">
        <h3 class="font-semibold text-gray-900 group-hover:text-[#FD5528] transition">
          Do you provide custom software development?
        </h3>
        <span class="faq-icon text-[#FD5528] text-xl transition-transform duration-300">+</span>
      </div>

      <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500">
        <p class="mt-4 text-sm text-gray-600">
          Yes, we build custom web and mobile applications tailored to your business needs, ensuring scalability, performance, and security.
        </p>
      </div>
    </div>

    <!-- ITEM -->
    <div class="faq-item group border border-[#FD5528]/20 bg-white rounded-2xl p-5 shadow-md hover:shadow-xl transition cursor-pointer">
      <div class="flex justify-between items-center">
        <h3 class="font-semibold text-gray-900 group-hover:text-[#FD5528] transition">
          What industries do you work with?
        </h3>
        <span class="faq-icon text-[#FD5528] text-xl transition-transform duration-300">+</span>
      </div>

      <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500">
        <p class="mt-4 text-sm text-gray-600">
          We work with startups, eCommerce businesses, healthcare, education, real estate, and enterprise-level companies across various industries.
        </p>
      </div>
    </div>

    <!-- ITEM -->
    <div class="faq-item group border border-[#FD5528]/20 bg-white rounded-2xl p-5 shadow-md hover:shadow-xl transition cursor-pointer">
      <div class="flex justify-between items-center">
        <h3 class="font-semibold text-gray-900 group-hover:text-[#FD5528] transition">
          Do you offer support after project delivery?
        </h3>
        <span class="faq-icon text-[#FD5528] text-xl transition-transform duration-300">+</span>
      </div>

      <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500">
        <p class="mt-4 text-sm text-gray-600">
          Yes, we provide ongoing maintenance, updates, and technical support to ensure your project runs smoothly.
        </p>
      </div>
    </div>

  </div>

</section>

<script>
document.addEventListener("DOMContentLoaded", () => {

  const items = document.querySelectorAll(".faq-item");

  items.forEach(item => {
    item.addEventListener("click", () => {

      const answer = item.querySelector(".faq-answer");
      const icon = item.querySelector(".faq-icon");

      const isOpen = answer.style.maxHeight;

      // close all
      document.querySelectorAll(".faq-answer").forEach(el => {
        el.style.maxHeight = null;
      });

      document.querySelectorAll(".faq-icon").forEach(el => {
        el.classList.remove("rotate-45");
      });

      // open current
      if (!isOpen) {
        answer.style.maxHeight = answer.scrollHeight + "px";
        icon.classList.add("rotate-45");
      }

    });
  });

});
</script>

@endsection
