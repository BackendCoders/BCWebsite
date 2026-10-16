@extends('component.main')
@section('content')


<!-- hero section  -->
<section class="relative h-[30vh] flex items-center justify-center text-center text-white overflow-hidden">

  <!-- BACKGROUND IMAGE -->
  <img 
    src="{{asset('assets/images/banner_bci.png')}}" alt="contact banner "
    class="absolute inset-0 w-full h-full object-cover" width="1920"
height="800"
fetchpriority="high"
decoding="async"
  />

  <!-- DARK OVERLAY -->
  <div class="absolute inset-0 bg-black/60"></div>

  <!-- CONTENT -->
  <div class="relative z-10 max-w-4xl px-6">

  

    <!-- HEADING -->
    <h1 class="mt-6 text-4xl sm:text-5xl md:text-6xl font-bold leading-tight">
    Contact <span class="text-[#FD5528]">Us</span>
    </h1>

    <h2 class="text-md text-[#FD5528] font-bold uppercase tracking-[0.35em] ">
    Let’s Talk About Your Project
    </h2>
    <!-- SUBTEXT -->

    Connect with Backend Coders India for software, web, app, and digital growth discussions built around your business goals.
    </p>

 

  </div>

</section>
<!-- end hero section  -->




<!-- contact section -->
<section id="contact" class="bg-[#F9FAFB] py-24 px-6 relative overflow-hidden">

  <div class="max-w-7xl mx-auto">

       <!-- Heading -->
       <div class="text-center max-w-2xl mx-auto mb-16">
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

        Contact us
      </span>

       
 <!-- Heading -->
    <h2 class="text-4xl py-2 text-[#FD5528] md:text-5xl font-bold mb-4" text-black data-aos="fade-up">
      Get in Touch
    </h2>

       <!-- Subheading -->
    <p class="text-lg text-black max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
      Have a project in mind or need backend solutions?  
      Our team at <span class="text-[#FC5124] font-semibold">Backend Coders</span> is here to help you build scalable systems.
    </p>

    </div>

    <!-- Main Layout -->
    <div class="grid lg:grid-cols-2 gap-12 items-stretch">

      <!-- LEFT SIDE -->
  <div class="relative bg-white rounded-3xl shadow-xl border border-gray-200 p-8 overflow-hidden">


      <!-- CONTENT -->
      <div class="relative space-y-8">

  <ul class="space-y-5 text-sm">

    <!-- ADDRESS -->
    <li>
      <div class="flex items-start gap-4 group">

        <!-- ICON -->
        <div class="w-11 h-11 flex items-center justify-center rounded-xl bg-[#FFF1EC]   group-hover:scale-110 transition duration-300">
          <img src="{{ asset('assets/icons/address.png') }}" alt="address"
               class="w-5 h-5" width="16" height="16">
        </div>

        <!-- TEXT -->
        <div class="flex-1">
          <h3 class="font-semibold text-black leading-none">
            Office Address
          </h3>
          <p class="text-black mt-2 leading-relaxed">
            11/42, Krishna Nagar, Kanpur, UP 208007
          </p>
        </div>

      </div>
    </li>

    <!-- PHONE -->
    <li>
      <div class="flex items-start gap-4 group">

        <div class="w-11 h-11 flex items-center justify-center rounded-xl bg-[#FFF1EC]   group-hover:scale-110 transition duration-300">
          <img src="{{ asset('assets/icons/call.png') }}" alt="phone"
               class="w-5 h-5" width="16" height="16">
        </div>

        <div class="flex-1">
          <h3 class="font-semibold text-black leading-none">
            Phone
          </h3>
          <p class="text-black mt-2">
            +91 914 0092 133
          </p>
        </div>

      </div>
    </li>

    <!-- EMAIL -->
    <li>
      <div class="flex items-start gap-4 group">

        <div class="w-11 h-11 flex items-center justify-center rounded-xl bg-[#FFF1EC]   group-hover:scale-110 transition duration-300">
          <img src="{{ asset('assets/icons/mail.png') }}" alt="email"
               class="w-5 h-5" width="16" height="16">
        </div>

        <div class="flex-1">
          <h3 class="font-semibold text-black leading-none">
            Email
          </h3>
          <div class="mt-2 flex flex-wrap items-center gap-2">
            <a href="mailto:info@backendcodersindia.com" class="text-black hover:text-[#FD5528] transition break-all font-medium select-text">
              info@backendcodersindia.com
            </a>
            <button type="button"
                    onclick="copyContactEmail(this)"
                    class="inline-flex items-center gap-1 rounded border border-gray-300 bg-gray-50 px-2 py-0.5 text-xs font-medium text-gray-700 hover:bg-gray-100 hover:text-black transition cursor-pointer"
                    title="Copy email address"
                    aria-label="Copy email address">
              <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
              </svg>
              <span class="copy-text">Copy</span>
            </button>
          </div>
        </div>

      </div>
    </li>

  </ul>


    <!-- SOCIAL -->
  <div class="pt-4 border-t border-gray-100">

      <p class="text-sm text-gray-600 mb-3">Follow us</p>

      <div class="flex gap-3">

        <a href="https://www.facebook.com/backendcoders/" target="_blank" class="w-10 h-10 flex items-center justify-center rounded-xl bg-[#FFF1EC] hover:bg-[#FD5528] transition group">
          <img src="{{ asset('assets/icons/facebook.png') }}" alt="facebook" class="w-5 h-5 group-hover:brightness-0 group-hover:invert" width="16" height="16">
        </a>

        <a href="https://www.instagram.com/backendcoders/" class="w-10 h-10 flex items-center justify-center rounded-xl bg-[#FFF1EC] hover:bg-[#FD5528] transition group">
          <img src="{{ asset('assets/icons/instagram.png') }}" alt="instagram" class="w-5 h-5 group-hover:brightness-0 group-hover:invert" width="16" height="16">
        </a>

        <a href="https://www.linkedin.com/company/backendcodersindia/" target="_blank" rel="noopener noreferrer" class="w-10 h-10 flex items-center justify-center rounded-xl bg-[#FFF1EC] hover:bg-[#FD5528] transition group">
          <img src="{{ asset('assets/icons/linkedin.png') }}" alt="linkedin" class="w-5 h-5 group-hover:brightness-0 group-hover:invert" width="16" height="16">
        </a>

        <a href="https://wa.me/919140092133?text=Hi%20I%20want%20to%20discuss%20a%20project" class="w-10 h-10 flex items-center justify-center rounded-xl bg-[#FFF1EC] hover:bg-[#FD5528] transition group">
          <img src="{{ asset('assets/icons/whatsapp.png') }}" alt="whatsapp" class="w-5 h-5 group-hover:brightness-0 group-hover:invert" width="16" height="16">
        </a>

      </div>
    </div>

  </div>

  <!-- MAP -->
  <div aria-labelledby="location-heading"  class="mt-8 rounded-2xl overflow-hidden border border-gray-200 shadow-sm group">
      <h2 id="location-heading" class="sr-only">
        Backend Coders India Office Location
    </h2>


  <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7146.187936818438!2d80.372306!3d26.420444!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1774945612057!5m2!1sen!2sin" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade  class="w-full h-[150px] border-0 transition duration-500 group-hover:scale-105"
  title="Google Map Location for Backend Coders India"></iframe>
 

  </div>

</div>

      <!-- RIGHT SIDE FORM -->
      <div class="relative bg-white p-8 rounded-3xl shadow-xl border border-gray-200 overflow-hidden">

  <!-- Decorative Curve -->
  <!-- <div class="absolute -bottom-20 -right-20 w-72 h-72 bg-[#FD5528]/10 rounded-full blur-3xl"></div> -->

  <!-- HEADING -->
  <div class="relative mb-6">
    <h2 class="text-2xl font-semibold text-gray-900">
      Contact Us
    </h2>
    <p class="text-sm text-gray-500 mt-1">
      Fill out the form and we’ll get back to you shortly.
    </p>
  </div>

  <!-- FORM -->

  @include('frontend.form')

</div>

    </div>

  </div>

</section>
<!-- END contact section -->

<script>
  function copyContactEmail(btn) {
    const email = "info@backendcodersindia.com";
    const updateUi = () => {
      const copyText = btn.querySelector('.copy-text');
      const originalText = copyText ? copyText.textContent : 'Copy';
      if (copyText) copyText.textContent = 'Copied!';
      btn.classList.add('border-emerald-500', 'text-emerald-700', 'bg-emerald-50');
      setTimeout(() => {
        if (copyText) copyText.textContent = originalText;
        btn.classList.remove('border-emerald-500', 'text-emerald-700', 'bg-emerald-50');
      }, 2000);
    };

    if (navigator.clipboard && window.isSecureContext) {
      navigator.clipboard.writeText(email).then(updateUi).catch(() => {
        const input = document.createElement('input');
        input.value = email;
        document.body.appendChild(input);
        input.select();
        try { document.execCommand('copy'); updateUi(); } catch (e) {}
        document.body.removeChild(input);
      });
    } else {
      const input = document.createElement('input');
      input.value = email;
      document.body.appendChild(input);
      input.select();
      try { document.execCommand('copy'); updateUi(); } catch (e) {}
      document.body.removeChild(input);
    }
  }
</script>
@endsection
