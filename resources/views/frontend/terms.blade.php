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
        Term of <span class="text-orange-600">Use</span><span class="text-[#FC5124] font-semibold">
     
    </h1>

    <!-- SUBTEXT -->
    <p class="mt-6 text-gray-300 text-sm sm:text-base md:text-lg max-w-2xl mx-auto">
        By using BackendCodersIndia, you agree to the policies below. Please read them carefully before continuing.
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

      Terms of Use
    </span>
      <!-- <p class="text-xs uppercase tracking-[0.6em] text-[#FD5528]">Terms of Use</p> -->
      <h1 class="text-3xl sm:text-4xl font-bold text-gray-900">Terms of Use</h1>
      <p class="text-gray-600 max-w-3xl mx-auto">
        By using BackendCodersIndia, you agree to the policies below. Please read them carefully before continuing.
      </p>
    </div>

    <div class="grid gap-8">
      <article class="rounded-3xl border border-[#F1F5F9] bg-white/80 shadow-lg shadow-[#FD5528]/10 p-6 space-y-4">
        <div class="flex items-center gap-3">
          <img src="https://img.icons8.com/?size=100&id=P7N90lIvNYPd&format=png&color=fd5528" alt="Introduction" class="w-11 h-11">
          <h2 class="text-xl font-semibold text-gray-900">Introduction</h2>
        </div>
        <p class="text-gray-600 leading-relaxed">
          Welcome to BackendCodersIndia. By accessing or using our website, you agree to be bound by these Terms of Use. If you do not agree with any part of these terms, please do not use our services.
        </p>
        <div class="h-px bg-gradient-to-r from-[#FD5528] via-[#FD5528]/60 to-transparent"></div>
      </article>

      <article class="rounded-3xl border border-[#F1F5F9] bg-white/80 shadow-lg shadow-[#FD5528]/10 p-6 space-y-4">
        <div class="flex items-center gap-3">
          <img src="https://img.icons8.com/?size=100&id=uWOKQW4wPHn6&format=png&color=fd5528" alt="Eligibility" class="w-11 h-11">
          <h2 class="text-xl font-semibold text-gray-900">Eligibility</h2>
        </div>
        <p class="text-gray-600 leading-relaxed">
          You must be at least 18 years old to use our services. By using our website, you represent and warrant that you meet this eligibility requirement.
        </p>
        <div class="h-px bg-gradient-to-r from-[#FD5528] via-[#FD5528]/60 to-transparent"></div>
      </article>

      <article class="rounded-3xl border border-[#F1F5F9] bg-white/80 shadow-lg shadow-[#FD5528]/10 p-6 space-y-4">
        <div class="flex items-center gap-3">
          <img src="https://img.icons8.com/?size=100&id=ltgbT0asZXwh&format=png&color=fd5528" alt="Acceptable Use" class="w-11 h-11">
          <h2 class="text-xl font-semibold text-gray-900">Acceptable Use</h2>
        </div>
        <p class="text-gray-600 leading-relaxed">
          Use the website for lawful purposes only. Do not harm, disrupt, or interfere with other users or our infrastructure. Activities such as data scraping, hacking, or spreading malware are strictly prohibited.
        </p>
        <div class="h-px bg-gradient-to-r from-[#FD5528] via-[#FD5528]/60 to-transparent"></div>
      </article>

      <article class="rounded-3xl border border-[#F1F5F9] bg-white/80 shadow-lg shadow-[#FD5528]/10 p-6 space-y-4">
        <div class="flex items-center gap-3">
          <img src="https://img.icons8.com/?size=100&id=53434&format=png&color=fd5528" alt="Modifications" class="w-11 h-11">
          <h2 class="text-xl font-semibold text-gray-900">Modifications to the Terms</h2>
        </div>
        <p class="text-gray-600 leading-relaxed">
          We reserve the right to modify these Terms of Use at any time. Changes become effective immediately upon posting, and continued use indicates your acceptance of the updated terms.
        </p>
        <div class="h-px bg-gradient-to-r from-[#FD5528] via-[#FD5528]/60 to-transparent"></div>
      </article>

      <article class="rounded-3xl border border-[#F1F5F9] bg-white/80 shadow-lg shadow-[#FD5528]/10 p-6 space-y-4">
        <div class="flex items-center gap-3">
          <img src="https://img.icons8.com/?size=100&id=eyAsx7EFEUAz&format=png&color=fd5528" alt="Intellectual Property" class="w-11 h-11">
          <h2 class="text-xl font-semibold text-gray-900">Intellectual Property</h2>
        </div>
        <p class="text-gray-600 leading-relaxed">
          All content on this website, including text, graphics, logos, and images, is the property of BackendCodersIndia or its licensors. You may not reproduce, distribute, or otherwise use our content without prior written consent.
        </p>
        <div class="h-px bg-gradient-to-r from-[#FD5528] via-[#FD5528]/60 to-transparent"></div>
      </article>

      <article class="rounded-3xl border border-[#F1F5F9] bg-white/80 shadow-lg shadow-[#FD5528]/10 p-6 space-y-4">
        <div class="flex items-center gap-3">
          <img src="https://img.icons8.com/?size=100&id=0ixeFLimrRnV&format=png&color=fd5528" alt="Termination" class="w-11 h-11">
          <h2 class="text-xl font-semibold text-gray-900">Termination</h2>
        </div>
        <p class="text-gray-600 leading-relaxed">
          We may terminate or suspend your access to our services at our sole discretion without prior notice if you violate these Terms of Use or engage in unlawful behavior.
        </p>
        <div class="h-px bg-gradient-to-r from-[#FD5528] via-[#FD5528]/60 to-transparent"></div>
      </article>

      <article class="rounded-3xl border border-[#F1F5F9] bg-white/80 shadow-lg shadow-[#FD5528]/10 p-6 space-y-4">
        <div class="flex items-center gap-3">
          <img src="https://img.icons8.com/?size=100&id=9730&format=png&color=fd5528" alt="Contact" class="w-11 h-11">
          <h2 class="text-xl font-semibold text-gray-900">Contact Us</h2>
        </div>
         <p class="text-gray-600 leading-relaxed">
          If you have any questions about these Terms or our practices, please contact us at 
          <br>
          <strong>Email:</strong><span class="font-semibold text-[#FD5528]">info@backendcodersindia.com</span>.
        </p>
        <div class="h-px bg-gradient-to-r from-[#FD5528] via-[#FD5528]/60 to-transparent"></div>
      </article>
    </div>
  </section>
</main>

@endsection
