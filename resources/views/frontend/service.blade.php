@extends('component.main')
@section('content')


<!-- HERO -->
<section class="bg-gradient-to-r from-[#FC5124] to-orange-600 text-white py-24 text-center">
  <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">
    Our Services
  </h1>
  <p class="text-lg text-white/90 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
    Delivering powerful backend solutions to scale your business efficiently and securely.
  </p>
</section>



<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="max-w-7xl mx-auto px-6">

    <!-- Heading -->
    <!-- <div class="text-center mb-16" data-aos="fade-up">
      <h2 class="text-3xl md:text-5xl font-extrabold text-gray-900">
        Our <span class="text-[#F44918]">Services</span>
      </h2>
      <p class="text-gray-500 mt-4 max-w-2xl mx-auto">
        End-to-end software development services to transform your ideas into powerful digital products.
      </p>
    </div> -->

    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- service card -->
      <div class="group bg-white p-8 rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-1 transition duration-300 relative overflow-hidden" data-aos="fade-up">
        
        <!-- Glow -->
        <div class="absolute -top-6 -right-6 w-40 h-40 bg-orange-100 blur-3xl opacity-40 group-hover:scale-110 transition"></div>

        <div class="w-12 h-12 flex items-center justify-center bg-white p-2 rounded-xl mb-5 shadow">
          <img src="https://img.icons8.com/?size=100&id=104433&format=png&color=f44918" alt="">
        </div>

        <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#F44918]">
          Backend Development
        </h3>

        <p class="mt-3 text-gray-600 text-sm">
           Build scalable and secure backend systems using modern technologies
        </p>

        <ul class="mt-4 text-sm text-gray-600 space-y-1">
          <li>• Database Optimizations</li>
          <li>• Microservices Architecture</li>
          <li>• API Security & Compliance</li>
      
        </ul>
      </div>
      <!-- service card -->
      <div class="group bg-white p-8 rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-1 transition duration-300 relative overflow-hidden" data-aos="fade-up">
        
        <!-- Glow -->
        <div class="absolute -top-6 -right-6 w-40 h-40 bg-orange-100 blur-3xl opacity-40 group-hover:scale-110 transition"></div>

        <div class="w-12 h-12 flex items-center justify-center bg-white p-2 rounded-xl mb-5 shadow">
          <img src="https://img.icons8.com/?size=100&id=104433&format=png&color=f44918" alt="">
        </div>

        <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#F44918]">
          Cloud Solutions
        </h3>

        <p class="mt-3 text-gray-600 text-sm">
           Modernize infrastructure with scalable and cost-effective cloud systems.
        </p>

        <ul class="mt-4 text-sm text-gray-600 space-y-1">
          <li>• AWS / Azure / GCP</li>
          <li>• Migration & Deployment</li>
          <li>•  Cloud Security</li>
        </ul>
      </div>
     <!-- service card -->
      <div class="group bg-white p-8 rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-1 transition duration-300 relative overflow-hidden" data-aos="fade-up">
        
        <!-- Glow -->
        <div class="absolute -top-6 -right-6 w-40 h-40 bg-orange-100 blur-3xl opacity-40 group-hover:scale-110 transition"></div>

        <div class="w-12 h-12 flex items-center justify-center bg-white p-2 rounded-xl mb-5 shadow">
          <img src="https://img.icons8.com/?size=100&id=104433&format=png&color=f44918" alt="">
        </div>

        <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#F44918]">
          API Integration
        </h3>

        <p class="mt-3 text-gray-600 text-sm">
          Seamless integration between systems and third-party services.
        </p>

        <ul class="mt-4 text-sm text-gray-600 space-y-1">
          <li>• REST & GraphQL APIs</li>
          <li>• Third-party Integration</li>
          <li>•  API Security</li>
        </ul>
      </div>

      <!-- Service Card -->
      <div class="group bg-white p-8 rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-1 transition duration-300 relative overflow-hidden" data-aos="fade-up">
        
        <!-- Glow -->
        <div class="absolute -top-6 -right-6 w-40 h-40 bg-orange-100 blur-3xl opacity-40 group-hover:scale-110 transition"></div>

        <div class="w-12 h-12 flex items-center justify-center bg-white p-2 rounded-xl mb-5 shadow">
          <img src="https://img.icons8.com/?size=100&id=104433&format=png&color=f44918" alt="">
        </div>

        <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#F44918]">
          Custom Web Development
        </h3>

        <p class="mt-3 text-gray-600 text-sm">
          Scalable web apps, SaaS platforms, dashboards, and enterprise systems.
        </p>

        <ul class="mt-4 text-sm text-gray-600 space-y-1">
          <li>• SaaS platforms</li>
          <li>• Dashboards</li>
          <li>• APIs</li>
          <li>• Enterprise systems</li>
        </ul>
      </div>

      <!-- Service -->
      <div class="group bg-white p-8 rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-1 transition duration-300 relative overflow-hidden" data-aos="fade-up" data-aos-delay="100">
        <div class="absolute -bottom-6 -left-6 w-40 h-40 bg-orange-100 blur-3xl opacity-40"></div>

        <div class="w-12 h-12 flex items-center justify-center bg-white p-2 rounded-xl mb-5 shadow">
          <img src="https://img.icons8.com/?size=100&id=sXm12ie1GUjg&format=png&color=f44918" alt="">
        </div>

        <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#F44918]">
          Website Design & Development
        </h3>

        <p class="mt-3 text-gray-600 text-sm">
          Responsive, SEO-optimized websites that convert visitors into customers.
        </p>

        <ul class="mt-4 text-sm text-gray-600 space-y-1">
          <li>• Corporate sites</li>
          <li>• Landing pages</li>
          <li>• CMS</li>
          <li>• Optimization</li>
        </ul>
      </div>

      <!-- SaaS -->
      <div class="group bg-white p-8 rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-1 transition duration-300 relative overflow-hidden" data-aos="fade-up" data-aos-delay="200">
        <div class="absolute -top-6 -left-6 w-40 h-40 bg-orange-100 blur-3xl opacity-40"></div>

        <div class="w-12 h-12 flex items-center justify-center bg-white p-2 rounded-xl mb-5 shadow">
          <img src="https://img.icons8.com/?size=100&id=SjQJcz6DkONa&format=png&color=f44918" alt="">
        </div>

        <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#F44918]">
          SaaS Development
        </h3>

        <p class="mt-3 text-gray-600 text-sm">
          Complete SaaS product development from idea to launch.
        </p>

        <ul class="mt-4 text-sm text-gray-600 space-y-1">
          <li>• Multi-tenant</li>
          <li>• Billing</li>
          <li>• Users</li>
          <li>• Analytics</li>
        </ul>
      </div>

      <!-- ERP -->
      <div class="group bg-white p-8 rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-1 transition duration-300 relative overflow-hidden" data-aos="fade-up" data-aos-delay="300">
        <div class="absolute -bottom-6 -right-6 w-40 h-40 bg-orange-100 blur-3xl opacity-40"></div>

        <div class="w-12 h-12 flex items-center justify-center bg-white p-2 rounded-xl mb-5 shadow">
          <img src="https://img.icons8.com/?size=100&id=105370&format=png&color=f44918" alt="">
        </div>

        <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#F44918]">
          ERP & POS Software
        </h3>

        <p class="mt-3 text-gray-600 text-sm">
          Custom business systems tailored to your operations.
        </p>

        <ul class="mt-4 text-sm text-gray-600 space-y-1">
          <li>• Inventory</li>
          <li>• Sales tracking</li>
          <li>• Reports</li>
          <li>• Multi-location</li>
        </ul>
      </div>

      <!-- Ecommerce -->
      <div class="group bg-white p-8 rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-1 transition duration-300 relative overflow-hidden" data-aos="fade-up" data-aos-delay="400">
        <div class="absolute -top-6 -right-6 w-40 h-40 bg-orange-100 blur-3xl opacity-40"></div>

        <div class="w-12 h-12 flex items-center justify-center bg-white p-2 rounded-xl mb-5 shadow">
          <img src="https://img.icons8.com/?size=100&id=MCNnsWTq7Zy0&format=png&color=f44918" alt="">
        </div>

        <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#F44918]">
          E-commerce Development
        </h3>

        <p class="mt-3 text-gray-600 text-sm">
          High-converting online stores and marketplaces.
        </p>

        <ul class="mt-4 text-sm text-gray-600 space-y-1">
          <li>• Storefronts</li>
          <li>• Payments</li>
          <li>• Orders</li>
          <li>• Multi-vendor</li>
        </ul>
      </div>

      <!-- Mobile -->
      <div class="group bg-white p-8 rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-1 transition duration-300 relative overflow-hidden" data-aos="fade-up" data-aos-delay="500">
        <div class="absolute -bottom-6 -left-6 w-40 h-40 bg-orange-100 blur-3xl opacity-40"></div>

        <div class="w-12 h-12 flex items-center justify-center bg-white p-2 rounded-xl mb-5 shadow">
          <img src="https://img.icons8.com/?size=100&id=TegnVFiw7OYi&format=png&color=f44918" alt="Mobile App">
        </div>

        <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#F44918]">
          Mobile App Development
        </h3>

        <p class="mt-3 text-gray-600 text-sm">
          Cross-platform apps with native performance.
        </p>

        <ul class="mt-4 text-sm text-gray-600 space-y-1">
          <li>• React Native</li>
          <li>• Flutter</li>
          <li>• Push notifications</li>
          <li>• Offline support</li>
        </ul>
      </div>

    </div>

    <!-- CTA -->
    <div class="text-center mt-16" data-aos="fade-up">
      <a href="#"
         class="inline-block bg-[#F44918] text-white px-8 py-3 rounded-xl font-semibold shadow-lg hover:bg-[#E54817] hover:scale-105 transition">
        Discuss Your Project
      </a>
    </div>

  </div>
</section>
  @endsection