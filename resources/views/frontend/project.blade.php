
@extends('component.main')

@section('content')

<!-- HERO BANNER -->
<section class="bg-gradient-to-r from-[#FC5124] to-orange-600 text-white py-20">
  <div class="max-w-7xl mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">
      Our Projects
    </h1>
    <p class="text-lg text-white/90 max-w-2xl mx-auto">
      Delivering scalable, high-performance backend solutions for real-world applications.
    </p>
  </div>
</section>

<!-- FILTER BAR -->
<!-- <section class="bg-white py-6 shadow-sm sticky top-0 z-20">
  <div class="max-w-7xl mx-auto px-6 flex flex-wrap gap-3 justify-center">
    <button class="px-5 py-2 rounded-full bg-[#FC5124] text-white text-sm">All</button>
    <button class="px-5 py-2 rounded-full bg-gray-100 text-gray-700 text-sm hover:bg-[#FC5124] hover:text-white">Web Apps</button>
    <button class="px-5 py-2 rounded-full bg-gray-100 text-gray-700 text-sm hover:bg-[#FC5124] hover:text-white">API</button>
    <button class="px-5 py-2 rounded-full bg-gray-100 text-gray-700 text-sm hover:bg-[#FC5124] hover:text-white">Mobile</button>
  </div>
</section> -->

<!-- PROJECT GRID -->
<section class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6">

    <h2 class="text-3xl font-bold text-center mb-12">
      Featured Work
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- CARD -->

      <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden group">

        <!-- IMAGE -->
        <div class="relative overflow-hidden">
          <img src="https://backendcodersindia.com/assets/images/company-icons/page1.png"
               class="w-full h-52 object-cover group-hover:scale-110 transition duration-500">

          <span class="absolute top-3 left-3 bg-green-500 text-white text-xs px-3 py-1 rounded-full">
            Live
          </span>
        </div>

        <!-- CONTENT -->
        <div class="p-5">

          <h3 class="text-lg font-bold mb-2 text-gray-800">
           Ace Taxis UK
          </h3>

          <p class="text-gray-600 text-sm mb-4">
            Ace Taxis is U.K based cab booking and dispatch system. Performming for multiple drivers and users.
          </p>

          <!-- TECH -->
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">Node.js</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">MongoDB</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">REST API</span>
          </div>

          <!-- FOOTER -->
          <div class="flex justify-between items-center">
            <span class="text-xs text-gray-400">Jan 2025</span>
            <a href="#" class="text-[#FC5124] font-semibold text-sm hover:underline">
              View
            </a>
          </div>

        </div>
      </div>
       <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden group">

        <!-- IMAGE -->
        <div class="relative overflow-hidden">
          <img src="https://backendcodersindia.com/assets/images/company-icons/1.png"
               class="w-full h-52 object-cover group-hover:scale-110 transition duration-500">

          <span class="absolute top-3 left-3 bg-green-500 text-white text-xs px-3 py-1 rounded-full">
            Live
          </span>
        </div>

        <!-- CONTENT -->
        <div class="p-5">

          <h3 class="text-lg font-bold mb-2 text-gray-800">
           Tanning Salon Management System
          </h3>

          <p class="text-gray-600 text-sm mb-4">
           Sunkissed Tanning Salon is a UK-based tanning salon that offers both tanning bed and spray tan services. Known for providing a safe and effective way to achieve a sun-kissed glow, the salon uses top-of-the-line equipment and premium tanning products to deliver a natural-looking tan.
          </p>

          <!-- TECH -->
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">Node.js</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">MongoDB</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">REST API</span>
          </div>

          <!-- FOOTER -->
          <div class="flex justify-between items-center">
            <span class="text-xs text-gray-400">Jan 2025</span>
            <a href="#" class="text-[#FC5124] font-semibold text-sm hover:underline">
              View
            </a>
          </div>

        </div>
      </div>
    <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden group">

        <!-- IMAGE -->
        <div class="relative overflow-hidden">
          <img src="https://backendcodersindia.com/assets/images/testemonials/skydatech.png"
               class="w-full h-52 object-cover group-hover:scale-110 transition duration-500">

          <span class="absolute top-3 left-3 bg-green-500 text-white text-xs px-3 py-1 rounded-full">
            Live
          </span>
        </div>

        <!-- CONTENT -->
        <div class="p-5">

          <h3 class="text-lg font-bold mb-2 text-gray-800">
          Skydatech Technology
          </h3>

          <p class="text-gray-600 text-sm mb-4">
            Skydatech is a customer-focused and technology-driven consulting firm providing IT Consulting, staffing, product engineering, and enterprise application development services that help our customers craft value for their software development results.
          </p>

          <!-- TECH -->
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">Node.js</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">MongoDB</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">REST API</span>
          </div>

          <!-- FOOTER -->
          <div class="flex justify-between items-center">
            <span class="text-xs text-gray-400">Jan 2025</span>
            <a href="#" class="text-[#FC5124] font-semibold text-sm hover:underline">
              View
            </a>
          </div>

        </div>
      </div>
    <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden group">

        <!-- IMAGE -->
        <div class="relative overflow-hidden">
          <img src="https://backendcodersindia.com/assets/images/company-icons/childcare.png"
               class="w-full h-52 object-cover group-hover:scale-110 transition duration-500">

          <span class="absolute top-3 left-3 bg-green-500 text-white text-xs px-3 py-1 rounded-full">
            Live
          </span>
        </div>

        <!-- CONTENT -->
        <div class="p-5">

          <h3 class="text-lg font-bold mb-2 text-gray-800">
           Alberta ChildCare
          </h3>

          <p class="text-gray-600 text-sm mb-4">
            Alberta ChildCare Venture providing a nurturing environment where children can learn, play, and grow. We are committed to fostering the intellectual, social, emotional, and physical development of each child in our care.
          </p>

          <!-- TECH -->
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">Node.js</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">MongoDB</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">REST API</span>
          </div>

          <!-- FOOTER -->
          <div class="flex justify-between items-center">
            <span class="text-xs text-gray-400">Jan 2025</span>
            <a href="#" class="text-[#FC5124] font-semibold text-sm hover:underline">
              View
            </a>
          </div>

        </div>
      </div>
    <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden group">

        <!-- IMAGE -->
        <div class="relative overflow-hidden">
          <img src="https://backendcodersindia.com/assets/images/testemonials/marley.png"
               class="w-full h-52 object-cover group-hover:scale-110 transition duration-500">

          <span class="absolute top-3 left-3 bg-green-500 text-white text-xs px-3 py-1 rounded-full">
            Live
          </span>
        </div>

        <!-- CONTENT -->
        <div class="p-5">

          <h3 class="text-lg font-bold mb-2 text-gray-800">
            Marley Moves
          </h3>

          <p class="text-gray-600 text-sm mb-4">
            At Marley Moves, they are providing seamless, reliable, and stress-free relocation services for families, businesses, and individuals.
          </p>

          <!-- TECH -->
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">Node.js</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">MongoDB</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">REST API</span>
          </div>

          <!-- FOOTER -->
          <div class="flex justify-between items-center">
            <span class="text-xs text-gray-400">Jan 2025</span>
            <a href="#" class="text-[#FC5124] font-semibold text-sm hover:underline">
              View
            </a>
          </div>

        </div>
      </div>

    <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden group">

        <!-- IMAGE -->
        <div class="relative overflow-hidden">
          <img src="https://backendcodersindia.com/assets/images/testemonials/er.png"
               class="w-full h-52 object-cover group-hover:scale-110 transition duration-500">

          <span class="absolute top-3 left-3 bg-green-500 text-white text-xs px-3 py-1 rounded-full">
            Live
          </span>
        </div>

        <!-- CONTENT -->
        <div class="p-5">

          <h3 class="text-lg font-bold mb-2 text-gray-800">
          ER Data Solutionsm
          </h3>

          <p class="text-gray-600 text-sm mb-4">
         This is a small CRM system where user maintaining his profile with multiple Power BI dashboards and creating query system for end users.
          </p>

          <!-- TECH -->
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">Node.js</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">MongoDB</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">REST API</span>
          </div>

          <!-- FOOTER -->
          <div class="flex justify-between items-center">
            <span class="text-xs text-gray-400">Jan 2025</span>
            <a href="#" class="text-[#FC5124] font-semibold text-sm hover:underline">
              View
            </a>
          </div>

        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden group">

        <!-- IMAGE -->
        <div class="relative overflow-hidden">
          <img src="https://backendcodersindia.com/assets/images/company-icons/demo.png"
               class="w-full h-52 object-cover group-hover:scale-110 transition duration-500">

          <span class="absolute top-3 left-3 bg-green-500 text-white text-xs px-3 py-1 rounded-full">
            Live
          </span>
        </div>

        <!-- CONTENT -->
        <div class="p-5">

          <h3 class="text-lg font-bold mb-2 text-gray-800">
          Demo Cycle
          </h3>

          <p class="text-gray-600 text-sm mb-4">
     This is E-Commerce Sample website for our U.K based client for their undergoing E-POS project.
          </p>

          <!-- TECH -->
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">Node.js</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">MongoDB</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">REST API</span>
          </div>

          <!-- FOOTER -->
          <div class="flex justify-between items-center">
            <span class="text-xs text-gray-400">Jan 2025</span>
            <a href="#" class="text-[#FC5124] font-semibold text-sm hover:underline">
              View
            </a>
          </div>

        </div>
    </div>
  
</section>

<!-- CTA SECTION -->
<section class="bg-[#FC5124] text-white py-16 text-center">
  <h2 class="text-3xl font-bold mb-4">
    Have a Project in Mind?
  </h2>
  <p class="text-gray-300 mb-6">
    Let’s build scalable and powerful backend systems together.
  </p>

  <a href="#contact"
     class="bg-white text-[#FC5124] px-6 py-3 rounded-lg font-semibold hover:bg-orange-600">
    Contact Us
  </a>
</section>

@endsection

