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
        Privacy & <span class="text-orange-600">Policy</span><span class="text-[#FC5124] font-semibold">
     
    </h1>

    <!-- SUBTEXT -->
    <p class="mt-6 text-gray-300 text-sm sm:text-base md:text-lg max-w-2xl mx-auto">
        At BackendCodersIndia, we are committed to protecting your privacy. This Privacy Policy outlines how we collect, use, and safeguard your personal information when you visit our website.
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
      <h1 class="text-3xl sm:text-4xl font-bold text-gray-900">Privacy Policy</h1>
      <p class="text-gray-600 max-w-3xl mx-auto">
        At BackendCodersIndia, we are committed to protecting your privacy. This Privacy Policy outlines how we collect, use, and safeguard your personal information when you visit our website.
      </p>
    </div>

    <div class="grid gap-8">
      <article class="rounded-3xl border border-[#F1F5F9] bg-white/80 shadow-lg shadow-[#FD5528]/10 p-6 space-y-4">
        <div class="flex items-center gap-3">
          <img src="https://img.icons8.com/?size=100&id=P7N90lIvNYPd&format=png&color=fd5528" alt="Introduction" class="w-11 h-11">
          <h2 class="text-xl font-semibold text-gray-900">Introduction</h2>
        </div>
        <p class="text-gray-600 leading-relaxed">
         At BackendCodersIndia, we value your privacy and are committed to protecting the personal information you share with us. This Privacy Policy outlines the types of personal data we collect, how we use it, and the steps we take to safeguard it.
        </p>
        <div class="h-px bg-gradient-to-r from-[#FD5528] via-[#FD5528]/60 to-transparent"></div>
      </article>

      <article class="rounded-3xl border border-[#F1F5F9] bg-white/80 shadow-lg shadow-[#FD5528]/10 p-6 space-y-4">
        <div class="flex items-center gap-3">
          <img src="https://img.icons8.com/?size=100&id=8305&format=png&color=fd5528" alt="Eligibility" class="w-11 h-11">
          <h2 class="text-xl font-semibold text-gray-900">Information We Collect</h2>
        </div>
        <p class="text-gray-600 leading-relaxed">
         <span><strong class="text-[#FD5528]">Personal Information:</strong> Name, email address, contact details, etc.</span>
            <br>
        <span><strong class="text-[#FD5528]">Usage Data:</strong> Information on how you interact with our website and services.</span>
            <br>
         <span><strong class="text-[#FD5528]">Cookies:</strong> Small text files that track your preferences on our website.</span>
       
        </p>
        <div class="h-px bg-gradient-to-r from-[#FD5528] via-[#FD5528]/60 to-transparent"></div>
      </article>

      <article class="rounded-3xl border border-[#F1F5F9] bg-white/80 shadow-lg shadow-[#FD5528]/10 p-6 space-y-4">
        <div class="flex items-center gap-3">
          <img src="https://img.icons8.com/?size=100&id=bFE7OXFMzqMr&format=png&color=fd5528" alt="Acceptable Use" class="w-11 h-11">
          <h2 class="text-xl font-semibold text-gray-900"> How We Use Your Information</h2>
        </div>
        <ul class="text-gray-600 leading-relaxed list-disc list-inside space-y-2">
            <li>To provide and improve our services.</li>
            <li>To personalize your experience.</li>
            <li>To communicate with you, including for marketing purposes (with your consent).</li>
            <li>To detect, prevent, and address technical issues.</li>
        </ul>
        
        <div class="h-px bg-gradient-to-r from-[#FD5528] via-[#FD5528]/60 to-transparent"></div>
      </article>

      <article class="rounded-3xl border border-[#F1F5F9] bg-white/80 shadow-lg shadow-[#FD5528]/10 p-6 space-y-4">
        <div class="flex items-center gap-3">
          <img src="https://img.icons8.com/?size=100&id=QU8owwFRYCkP&format=png&color=fd5528" alt="Modifications" class="w-11 h-11">
          <h2 class="text-xl font-semibold text-gray-900">Data Security</h2>
        </div>
        <p class="text-gray-600 leading-relaxed">
         We implement various security measures to ensure the protection of your personal information, including encryption and secure server environments. However, no method of transmission over the internet is 100% secure, and we cannot guarantee absolute security.
        </p>
        <div class="h-px bg-gradient-to-r from-[#FD5528] via-[#FD5528]/60 to-transparent"></div>
      </article>

      <article class="rounded-3xl border border-[#F1F5F9] bg-white/80 shadow-lg shadow-[#FD5528]/10 p-6 space-y-4">
        <div class="flex items-center gap-3">
          <img src="https://img.icons8.com/?size=100&id=31340&format=png&color=fd5528" alt="Intellectual Property" class="w-11 h-11">
          <h2 class="text-xl font-semibold text-gray-900">Sharing Your Information</h2>
        </div>
        <p class="text-gray-600 leading-relaxed">
         With trusted third parties who assist us in operating our website or conducting our business.
        If required by law, to comply with legal processes or governmental requests.
        In the event of a merger, acquisition, or sale of assets, your information may be transferred as part of the transaction.
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
