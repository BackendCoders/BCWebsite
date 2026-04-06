@extends('component.main')
@section('content')

<!-- hero section  -->
 <section class="relative h-[30vh] flex items-center justify-center text-center text-white overflow-hidden">

  <!-- BACKGROUND IMAGE -->
  <img 
    src="{{asset('assets/images/banner.png')}}"
    class="absolute inset-0 w-full h-full object-cover"
  />

  <!-- DARK OVERLAY -->
  <div class="absolute inset-0 bg-black/60"></div>

  <!-- CONTENT -->
  <div class="relative z-10 max-w-4xl px-6">

  

    <!-- HEADING -->
    <h1 class="mt-6 text-4xl sm:text-5xl md:text-6xl font-bold leading-tight">
         Help<span class="text-orange-600">Center</span><span class="text-[#FC5124] font-semibold">
     
    </h1>

    <!-- SUBTEXT -->
    <p class="mt-6 text-gray-300 text-sm sm:text-base md:text-lg max-w-2xl mx-auto">
        Find answers to your questions and get support from our team.
    </p>

 

  </div>

</section>
<!-- end hero section  -->



<main class="min-h-screen bg-gradient-to-b from-gray-50 via-white to-white py-16">
  <section class="max-w-6xl mx-auto px-4 md:px-8 lg:px-10">
    <div class="text-center space-y-3 mb-10">
        <!-- BADGE -->
      <span 
    
      data-aos="fade-up"
      class="inline-block text-xs sm:text-sm font-semibold uppercase tracking-[0.35em] 
         text-[#FD5528] relative px-5 py-2 rounded-full 
         bg-white/60 backdrop-blur-md 
         shadow-[0_8px_20px_rgba(0,0,0,0.08)] 
         border border-white/40
         before:absolute before:inset-0 before:rounded-full 
         before:bg-gradient-to-r before:from-[#FD5528]/20 before:to-orange-200/30 
         before:-z-10">

     Help Center
    </span>
      <!-- <p class="text-xs uppercase tracking-[0.6em] text-[#FD5528]">Terms of Use</p> -->
      <h1 class="text-3xl sm:text-4xl font-bold text-gray-900">Help Center</h1>
      <p class="text-gray-600 max-w-3xl mx-auto">
        Find answers to your questions and get support from our team.
      </p>
    </div>

    <div class="grid gap-8">
      <article class="rounded-3xl border border-[#F1F5F9] bg-white/80 shadow-lg shadow-[#FD5528]/10 p-6 space-y-4">
        <div class="flex items-center gap-3">
          <img src="https://img.icons8.com/?size=100&id=P7N90lIvNYPd&format=png&color=fd5528" alt="Introduction" class="w-11 h-11">
          <h2 class="text-xl font-semibold text-gray-900">Frequently Asked Questions (FAQs)</h2>
        </div>
        <p class="text-gray-600 leading-relaxed">
         Find answers to the most commonly asked questions about our services:
        </p>
        <ul>
              <div class="max-w-6xl mx-auto px-4 grid gap-6 lg:grid-cols-1">

    <!-- COLUMN -->
    <div class="space-y-4">

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

      <!-- ITEM -->
      <div class="faq-item bg-gray-50 p-5 rounded-2xl cursor-pointer transition hover:shadow-lg">
        <div class="flex justify-between items-center">
          <h3 class="font-medium"> Where can I view my account details?</h3>
          <span class="faq-icon text-[#FD5528] text-xl transition-transform duration-300">+</span>
        </div>
        <p class="faq-answer max-h-0 overflow-hidden transition-all duration-500 text-sm text-gray-600 mt-3">
          Click on your profile icon in the top right corner and select "Account Settings".
        </p>
      </div>

    </div>

    <!-- COLUMN -->
    <div class="space-y-4">

      <div class="faq-item bg-gray-50 p-5 rounded-2xl cursor-pointer transition hover:shadow-lg">
        <div class="flex justify-between items-center">
          <h3 class="font-medium">How do I contact customer support?</h3>
          <span class="faq-icon text-[#FD5528] text-xl transition-transform duration-300">+</span>
        </div>
        <p class="faq-answer max-h-0 overflow-hidden transition-all duration-500 text-sm text-gray-600 mt-3">
          You can reach out to us via email at info@backendcodersindia.com. We typically respond within 24-48 hours.
        </p>
      </div>


    </div>

  
  </div>

        </ul>
        <div class="h-px bg-gradient-to-r from-[#FD5528] via-[#FD5528]/60 to-transparent"></div>
      </article>

      <article class="rounded-3xl border border-[#F1F5F9] bg-white/80 shadow-lg shadow-[#FD5528]/10 p-6 space-y-4">
        <div class="flex items-center gap-3">
          <img src="https://img.icons8.com/?size=100&id=uWOKQW4wPHn6&format=png&color=fd5528" alt="Eligibility" class="w-11 h-11">
          <h2 class="text-xl font-semibold text-gray-900">Contact Support</h2>
        </div>
        <p class="text-gray-600 leading-relaxed">
        Need additional help? Feel free to reach out to our support team:
        </p>
        <ul>
            <li><strong>Email:</strong> info@backendcodersindia.com</li>
            <li><strong>Phone:</strong> +91-1234567890</li>
            <li><strong>Working Hours:</strong> Monday to Friday, 10:00 AM to 6:00 PM (IST)</li>
        </ul>
        <div class="h-px bg-gradient-to-r from-[#FD5528] via-[#FD5528]/60 to-transparent"></div>
      </article>

      <article class="rounded-3xl border border-[#F1F5F9] bg-white/80 shadow-lg shadow-[#FD5528]/10 p-6 space-y-4">
        <div class="flex items-center gap-3">
          <img src="https://img.icons8.com/?size=100&id=ltgbT0asZXwh&format=png&color=fd5528" alt="Acceptable Use" class="w-11 h-11">
          <h2 class="text-xl font-semibold text-gray-900">How to Use Our Services</h2>
        </div>
        <p class="text-gray-600 leading-relaxed">
         Follow these steps to make the most of our platform:
        </p>
        <ul>
            <li>1. Register for an account using your email address.</li>
            <li>2. Explore the features and functionalities available on our platform.</li>
            <li>3. Reach out to our support team if you have any questions or need assistance.</li>
        </ul>
        <div class="h-px bg-gradient-to-r from-[#FD5528] via-[#FD5528]/60 to-transparent"></div>
      </article>

      <article class="rounded-3xl border border-[#F1F5F9] bg-white/80 shadow-lg shadow-[#FD5528]/10 p-6 space-y-4">
        <div class="flex items-center gap-3">
          <img src="https://img.icons8.com/?size=100&id=53434&format=png&color=fd5528" alt="Community Forums" class="w-11 h-11">
          <h2 class="text-xl font-semibold text-gray-900">Community Forums</h2>
        </div>
        <p class="text-gray-600 leading-relaxed">
          Join our community forums to connect with other users, share experiences, and get help from our team.
        </p>
        <span class="text-[#FD5528] font-semibold">Visit: <a href="/community-forums" class="underline">Community Forum</a></span>
        <div class="h-px bg-gradient-to-r from-[#FD5528] via-[#FD5528]/60 to-transparent"></div>
      </article>
    </div>
  </section>
</main>

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



@endsection
