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
     Contact<span class="text-[#FD5528]"> Us</span>
    </h1>

    <!-- SUBTEXT -->
    <p class="mt-6 text-gray-300 text-sm sm:text-base md:text-lg max-w-2xl mx-auto">
      Build your future with us. Work on exciting projects, grow your skills, and make an impact.
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
    <h1 class="text-4xl py-2 text-[#FD5528] md:text-5xl font-bold mb-4" text-black data-aos="fade-up">
      Get in Touch
    </h1>

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
          <img src="https://img.icons8.com/?size=100&id=3723&format=png&color=ea580c" 
               class="w-5 h-5">
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
          <img src="https://img.icons8.com/?size=100&id=9659&format=png&color=ea580c" 
               class="w-5 h-5">
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
          <img src="https://img.icons8.com/?size=100&id=53388&format=png&color=ea580c" 
               class="w-5 h-5">
        </div>

        <div class="flex-1">
          <h3 class="font-semibold text-black leading-none">
            Email
          </h3>
          <p class="text-black mt-2 break-all">
            info@backendcodersindia.com
          </p>
        </div>

      </div>
    </li>

  </ul>


    <!-- SOCIAL -->
  <div class="pt-4 border-t border-gray-100">

      <p class="text-sm text-gray-600 mb-3">Follow us</p>

      <div class="flex gap-3">

        <a href="https://www.facebook.com/backendcoders/" target="_blank" class="w-10 h-10 flex items-center justify-center rounded-xl bg-[#FFF1EC] hover:bg-[#FD5528] transition group">
          <img src="https://img.icons8.com/?size=100&id=118468&format=png&color=f44918" class="w-5 h-5 group-hover:brightness-0 group-hover:invert">
        </a>

        <a href="https://www.instagram.com/backendcoders/" class="w-10 h-10 flex items-center justify-center rounded-xl bg-[#FFF1EC] hover:bg-[#FD5528] transition group">
          <img src="https://img.icons8.com/?size=100&id=32292&format=png&color=f44918" class="w-5 h-5 group-hover:brightness-0 group-hover:invert">
        </a>

        <a href="https://www.linkedin.com/company/103738896/admin/dashboard/" class="w-10 h-10 flex items-center justify-center rounded-xl bg-[#FFF1EC] hover:bg-[#FD5528] transition group">
          <img src="https://img.icons8.com/?size=100&id=447&format=png&color=f44918" class="w-5 h-5 group-hover:brightness-0 group-hover:invert">
        </a>

        <a href="https://wa.me/919140092133?text=Hi%20I%20want%20to%20discuss%20a%20project" class="w-10 h-10 flex items-center justify-center rounded-xl bg-[#FFF1EC] hover:bg-[#FD5528] transition group">
          <img src="https://img.icons8.com/?size=100&id=16712&format=png&color=f44918" class="w-5 h-5 group-hover:brightness-0 group-hover:invert">
        </a>

      </div>
    </div>

  </div>

  <!-- MAP -->
  <div class="mt-8 rounded-2xl overflow-hidden border border-gray-200 shadow-sm group">

  <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7146.187936818438!2d80.372306!3d26.420444!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1774945612057!5m2!1sen!2sin" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade  class="w-full h-[150px] border-0 transition duration-500 group-hover:scale-105"
      loading="lazy"></iframe>
 

  </div>

</div>

      <!-- RIGHT SIDE FORM -->
      <div class="relative bg-white p-8 rounded-3xl shadow-xl border border-gray-200 overflow-hidden">

  <!-- Decorative Curve -->
  <div class="absolute -bottom-20 -right-20 w-72 h-72 bg-[#FD5528]/10 rounded-full blur-3xl"></div>

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
  <form class="relative space-y-6">

    <div class="grid sm:grid-cols-2 gap-4">
      <input type="text" placeholder="First Name"
        class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FD5528]/30">

      <input type="text" placeholder="Last Name"
        class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FD5528]/30">
    </div>

    <input type="email" placeholder="Email Address"
      class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FD5528]/30">

    <input type="text" placeholder="Subject"
      class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FD5528]/30">

    <textarea rows="4" placeholder="Your Message"
      class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FD5528]/30"></textarea>

   <div class="flex justify-center">
     <button type="submit"
      class="max-w-md px-4 py-2 bg-gradient-to-r from-[#FD5528] to-[#fbb03b] hover:from-[#fbb03b] hover:to-[#FD5528] hover:scale-110 transition-all text-white py-3 rounded-lg font-medium hover:bg-[#e04a22] shadow-md hover:shadow-lg">
      Send Message
    </button>
   </div>

  </form>

</div>

    </div>

  </div>

</section>
<!-- END contact section -->
@endsection
