@extends('component.main')
@section('content')

<!-- HERO -->
<section class="bg-gradient-to-r from-[#FC5124] to-orange-600 text-white py-24 text-center">
  <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">
    Join Our Team
  </h1>
  <p class="text-lg text-white/90 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
    Build your future with us. Work on exciting projects, grow your skills, and make an impact.
  </p>
</section>

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
      <a href="#" class="bg-[#FC5124] text-white px-5 py-2 rounded-lg hover:bg-orange-600">
        Apply Now
      </a>
    </div>

    <div class="bg-white p-6 rounded-xl shadow mb-6 flex flex-col md:flex-row justify-between items-start md:items-center gap-4" data-aos="fade-up">
      <div>
        <h3 class="text-xl font-semibold">Frontend Developer</h3>
        <p class="text-sm text-gray-600">Full Time • Onsite • 1+ Years Experience</p>
      </div>
      <a href="#" class="bg-[#FC5124] text-white px-5 py-2 rounded-lg hover:bg-orange-600">
        Apply Now
      </a>
    </div>

    <div class="bg-white p-6 rounded-xl shadow mb-6 flex flex-col md:flex-row justify-between items-start md:items-center gap-4" data-aos="fade-up">
      <div>
        <h3 class="text-xl font-semibold">UI/UX Designer</h3>
        <p class="text-sm text-gray-600">Internship • Remote • Freshers Welcome</p>
      </div>
      <a href="#" class="bg-[#FC5124] text-white px-5 py-2 rounded-lg hover:bg-orange-600">
        Apply Now
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

    <form class="bg-white p-8 rounded-xl shadow space-y-4" data-aos="fade-up">

      <input type="text" placeholder="Full Name"
        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FC5124]">

      <input type="email" placeholder="Email Address"
        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FC5124]">

      <input type="text" placeholder="Position Applying For"
        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FC5124]">

      <textarea placeholder="Tell us about yourself"
        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FC5124]"></textarea>

      <button class="w-full bg-[#FC5124] text-white py-3 rounded-lg font-semibold hover:bg-orange-600">
        Submit Application
      </button>

    </form>

  </div>
</section>

<!-- CTA -->
<section class="bg-[#FC5124] text-white py-16 text-center">
  <h2 class="text-3xl font-bold mb-4">Don’t See a Role That Fits?</h2>
  <p class="text-gray-100 mb-6">Send us your resume — we’d love to hear from you.</p>
  <button class="bg-white text-[#FC5124] px-6 py-3 rounded-lg font-semibold hover:bg-gray-200">
    Contact HR
  </button>
</section>




@endsection