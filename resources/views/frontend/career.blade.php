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
    Join <span class="text-[#FD5528]">Our Team</span>
    </h1>

    <!-- SUBTEXT -->
    <p class="mt-6 text-gray-300 text-sm sm:text-base md:text-lg max-w-2xl mx-auto">
      Build your future with us. Work on exciting projects, grow your skills, and make an impact.
    </p>

 

  </div>

</section>
<!-- end hero section  -->



<!-- WHY JOIN US -->
<section class="py-16">
  <div class="max-w-7xl mx-auto px-6 text-center">

    <h2 class="text-3xl font-bold mb-12" data-aos="fade-up">
      Why Work With Us
    </h2>

<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

  <!-- CARD -->
  <div class="group relative bg-white/70 backdrop-blur-lg p-6 rounded-2xl border border-gray-200 shadow-md hover:shadow-2xl transition duration-500 text-center"
       data-aos="zoom-in">

    <!-- ICON -->
    <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center rounded-full bg-[#FC5124]/10 group-hover:bg-[#FC5124] transition">
      <img src="https://img.icons8.com/?size=100&id=lXoGyxVvWmqN&format=png&color=f44918"
           class="w-8 group-hover:brightness-0 group-hover:invert transition">
    </div>

    <h3 class="font-semibold text-lg mb-2 group-hover:text-[#FC5124] transition">
      Career Growth
    </h3>

    <p class="text-sm text-gray-600">
      Continuous learning and development opportunities.
    </p>

  </div>

  <!-- CARD -->
  <div class="group relative bg-white/70 backdrop-blur-lg p-6 rounded-2xl border border-gray-200 shadow-md hover:shadow-2xl transition duration-500 text-center"
       data-aos="zoom-in" data-aos-delay="100">

    <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center rounded-full bg-[#FC5124]/10 group-hover:bg-[#FC5124] transition">
      <img src="https://img.icons8.com/ios-filled/50/FC5124/teamwork.png"
           class="w-8 group-hover:brightness-0 group-hover:invert transition">
    </div>

    <h3 class="font-semibold text-lg mb-2 group-hover:text-[#FC5124] transition">
      Great Team
    </h3>

    <p class="text-sm text-gray-600">
      Collaborative and supportive work culture.
    </p>

  </div>

  <!-- CARD -->
  <div class="group relative bg-white/70 backdrop-blur-lg p-6 rounded-2xl border border-gray-200 shadow-md hover:shadow-2xl transition duration-500 text-center"
       data-aos="zoom-in" data-aos-delay="200">

    <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center rounded-full bg-[#FC5124]/10 group-hover:bg-[#FC5124] transition">
      <img src="https://img.icons8.com/ios-filled/50/FC5124/time.png"
           class="w-8 group-hover:brightness-0 group-hover:invert transition">
    </div>

    <h3 class="font-semibold text-lg mb-2 group-hover:text-[#FC5124] transition">
      Flexible Work
    </h3>

    <p class="text-sm text-gray-600">
      Work-life balance with flexible schedules.
    </p>

  </div>

  <!-- CARD -->
  <div class="group relative bg-white/70 backdrop-blur-lg p-6 rounded-2xl border border-gray-200 shadow-md hover:shadow-2xl transition duration-500 text-center"
       data-aos="zoom-in" data-aos-delay="300">

    <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center rounded-full bg-[#FC5124]/10 group-hover:bg-[#FC5124] transition">
      <img src="https://img.icons8.com/ios-filled/50/FC5124/trophy.png"
           class="w-8 group-hover:brightness-0 group-hover:invert transition">
    </div>

    <h3 class="font-semibold text-lg mb-2 group-hover:text-[#FC5124] transition">
      Recognition
    </h3>

    <p class="text-sm text-gray-600">
      We value and reward your contributions.
    </p>

  </div>

</div>



  </div>
</section>

<!-- JOB LISTINGS -->
<section class="py-16 bg-gray-100">
  <div class="max-w-5xl mx-auto px-6">

    <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">
      Open Positions
    </h2>

    <!-- JOB CARD -->
    <div class="bg-white p-6 rounded-xl shadow mb-6 flex flex-col md:flex-row justify-between items-start md:items-center gap-4" data-aos="fade-up">
      <div>
        <h3 class="text-xl font-semibold">Backend Developer</h3>
        <p class="text-sm text-gray-600">Full Time • Remote • 2+ Years Experience</p>
      </div>
      <a href="#" class="bg-gradient-to-r from-[#FD5528] to-[#fbb03b] hover:from-[#fbb03b] hover:to-[#FD5528] text-white px-5 py-2 rounded-lg ">
        opening soon
      </a>
    </div>

    <div class="bg-white p-6 rounded-xl shadow mb-6 flex flex-col md:flex-row justify-between items-start md:items-center gap-4" data-aos="fade-up">
      <div>
        <h3 class="text-xl font-semibold">Frontend Developer</h3>
        <p class="text-sm text-gray-600">Full Time • Onsite • 1+ Years Experience</p>
      </div>
      <a href="#" class="bg-gradient-to-r from-[#FD5528] to-[#fbb03b] hover:from-[#fbb03b] hover:to-[#FD5528] text-white px-5 py-2 rounded-lg ">
        opening soon
      </a>
    </div>

    <div class="bg-white p-6 rounded-xl shadow mb-6 flex flex-col md:flex-row justify-between items-start md:items-center gap-4" data-aos="fade-up">
      <div>
        <h3 class="text-xl font-semibold">UI/UX Designer</h3>
        <p class="text-sm text-gray-600">Internship • Remote • Freshers Welcome</p>
      </div>
      <a href="#" class="bg-gradient-to-r from-[#FD5528] to-[#fbb03b] hover:from-[#fbb03b] hover:to-[#FD5528] text-white px-5 py-2 rounded-lg">
        opening soon
      </a>
    </div>

  </div>
</section>

<!-- APPLICATION FORM -->
<section class="py-16">
  <div class="max-w-3xl mx-auto px-6">

    <h2 class="text-3xl font-bold text-center mb-10" data-aos="fade-up">
      Apply Now
    </h2>

    <form class="bg-white p-8 rounded-xl shadow space-y-4" data-aos="fade-up" method="POST" action="{{ route('career.apply') }}" enctype="multipart/form-data">
      @csrf

      <input type="text" name="full_name" placeholder="Full Name"
        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FC5124]">

      <input type="text" name="phone" placeholder="Phone Number"
        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FC5124]">

      <input type="email" name="email" placeholder="Email Address"
        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FC5124]">

      <input type="text" name="position" placeholder="Position Applying For"
        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FC5124]">

      <textarea name="about" placeholder="Tell us about yourself"
        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FC5124]"></textarea>

      <input type="file" name="resume" accept=".pdf,.doc,.docx"
        class="w-full px-4 py-3 border rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-[#FC5124]">

      <button class="w-full bg-gradient-to-r from-[#FD5528] to-[#fbb03b] hover:from-[#fbb03b] hover:to-[#FD5528] text-white py-3 rounded-lg font-semibold ">
        Submit Application
      </button>

    </form>

  </div>
</section>

<!-- CTA -->
<!-- CTA SECTION -->
<section class="relative overflow-hidden py-20 bg-gradient-to-r from-[#FC5124] via-orange-500 to-orange-400 text-white">

  <!-- BACKGROUND GLOW -->
  <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top_left,_white,_transparent_50%)]"></div>

  <div class="relative max-w-5xl mx-auto px-6 text-center">

    <!-- HEADING -->
    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 leading-tight">
      Don’t See a Role That Fits?
    </h2>

    <!-- SUBTEXT -->
    <p class="text-white/80 text-sm sm:text-base md:text-lg max-w-2xl mx-auto mb-10">
      Send us your resume — we’d love to hear from you.
    </p>

    <!-- BUTTONS -->
    <div class="flex flex-col sm:flex-row justify-center gap-4">

      <!-- PRIMARY BUTTON -->
      <a href="tel:+91 914 0092 133"
         class="group inline-flex items-center justify-center bg-white text-[#FC5124] px-6 py-3 rounded-xl font-semibold shadow-lg hover:shadow-2xl hover:scale-105 transition duration-300">

        Contact Hr

        <!-- ARROW -->
        <span class="ml-2 transition group-hover:translate-x-1">→</span>
      </a>

      <!-- WHATSAPP BUTTON -->
      <a href="{{ route('frontend.contact') }}"
         class="group inline-flex items-center justify-center border border-white/40 px-6 py-3 rounded-xl font-semibold backdrop-blur-md hover:bg-white/10 hover:scale-105 transition duration-300">
        Chat with Us
      </a>

    </div>

  </div>

</section>



@endsection
