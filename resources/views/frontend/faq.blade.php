@extends('component.main')
@section('content')

<main class="min-h-screen bg-gradient-to-b from-gray-50 via-white to-white">


<section class="bg-white text-black py-16 sm:py-20">
  <div class="max-w-5xl mx-auto px-4 text-center mb-10 sm:mb-16">
    <p class="text-xs uppercase tracking-[0.7em] text-[#FD5528]">Frequently Asked Questions</p>
    <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mt-2">
      Get answers before you ask
    </h1>
    <p class="text-gray-600 max-w-3xl mx-auto mt-3">
      Everything you need to know about accounts, support, billing, and contacting our team.
    </p>
  </div>

  <div class="max-w-6xl mx-auto px-4 grid gap-6 lg:grid-cols-1">

    <!-- COLUMN -->
    <div class="space-y-4">

      <!-- ITEM -->
      <div class="faq-item bg-gray-50 p-5 rounded-2xl cursor-pointer transition hover:shadow-lg">
        <div class="flex justify-between items-center">
          <h3 class="font-medium">How do I create an account?</h3>
          <span class="faq-icon text-[#FD5528] text-xl transition-transform duration-300">+</span>
        </div>
        <p class="faq-answer max-h-0 overflow-hidden transition-all duration-500 text-sm text-gray-600 mt-3">
          Click the "Sign Up" button and follow the steps to create your account.
        </p>
      </div>

      <!-- ITEM -->
      <div class="faq-item bg-gray-50 p-5 rounded-2xl cursor-pointer transition hover:shadow-lg">
        <div class="flex justify-between items-center">
          <h3 class="font-medium">How can I reset my password?</h3>
          <span class="faq-icon text-[#FD5528] text-xl transition-transform duration-300">+</span>
        </div>
        <p class="faq-answer max-h-0 overflow-hidden transition-all duration-500 text-sm text-gray-600 mt-3">
          Click "Forgot Password" on the login page and follow instructions.
        </p>
      </div>

    </div>

    <!-- COLUMN -->
    <div class="space-y-4">

      <div class="faq-item bg-gray-50 p-5 rounded-2xl cursor-pointer transition hover:shadow-lg">
        <div class="flex justify-between items-center">
          <h3 class="font-medium">What should I do if I face an error?</h3>
          <span class="faq-icon text-[#FD5528] text-xl transition-transform duration-300">+</span>
        </div>
        <p class="faq-answer max-h-0 overflow-hidden transition-all duration-500 text-sm text-gray-600 mt-3">
          Clear cache and refresh. Contact support if issue persists.
        </p>
      </div>

      <div class="faq-item bg-gray-50 p-5 rounded-2xl cursor-pointer transition hover:shadow-lg">
        <div class="flex justify-between items-center">
          <h3 class="font-medium">Which browsers are supported?</h3>
          <span class="faq-icon text-[#FD5528] text-xl transition-transform duration-300">+</span>
        </div>
        <p class="faq-answer max-h-0 overflow-hidden transition-all duration-500 text-sm text-gray-600 mt-3">
          Chrome, Firefox, Safari, and Edge (latest versions).
        </p>
      </div>

    </div>

    <!-- COLUMN -->
    <div class="space-y-4">

      <div class="faq-item bg-gray-50 p-5 rounded-2xl cursor-pointer transition hover:shadow-lg">
        <div class="flex justify-between items-center">
          <h3 class="font-medium">What payment methods do you accept?</h3>
          <span class="faq-icon text-[#FD5528] text-xl transition-transform duration-300">+</span>
        </div>
        <p class="faq-answer max-h-0 overflow-hidden transition-all duration-500 text-sm text-gray-600 mt-3">
          Credit cards, debit cards, UPI, and net banking.
        </p>
      </div>

      <div class="faq-item bg-gray-50 p-5 rounded-2xl cursor-pointer transition hover:shadow-lg">
        <div class="flex justify-between items-center">
          <h3 class="font-medium">Can I upgrade later?</h3>
          <span class="faq-icon text-[#FD5528] text-xl transition-transform duration-300">+</span>
        </div>
        <p class="faq-answer max-h-0 overflow-hidden transition-all duration-500 text-sm text-gray-600 mt-3">
          Yes, you can upgrade anytime based on your needs.
        </p>
      </div>

    </div>

  </div>

</section>

<!-- JS -->
<script>
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
</script>
</main>

@endsection
