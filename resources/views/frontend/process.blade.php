
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
  <div class="relative z-10 max-w-6xl px-6">

  

    <!-- HEADING -->
    <h1 class="mt-6 text-4xl sm:text-5xl md:text-6xl font-bold leading-tight">
        Our Software Development <span class="text-[#FC5124] font-semibold"> Process</span> <span class="text-[#FD5528] font-semibold">

    </h1>

    <!-- SUBTEXT -->
    <p class="mt-6 text-gray-300 text-sm sm:text-base md:text-lg max-w-6xl mx-auto">
            A clear process that takes ideas from planning to delivery with better visibility and execution.
        Backend Coders India follows a structured workflow that helps startups, SMEs, and enterprises move forward with clarity, collaboration, and reliable project delivery.
    </p>

 

  </div>

</section>
<!-- end hero section  -->



<!-- process-directions -->
<section class="relative overflow-hidden py-16 sm:py-20 lg:py-24 bg-[#F9FAFB]">

  <div class="max-w-7xl mx-auto px-6">

    <!-- Heading -->
    <div class="text-center md:mb-16">
         <p 
      data-aos="fade-up"
      class="inline-block text-xs sm:text-sm font-semibold uppercase tracking-[0.35em] 
         text-[#FD5528] relative px-5 py-2 rounded-full 
         bg-white/60 backdrop-blur-md 
         shadow-[0_8px_20px_rgba(0,0,0,0.08)] 
         border border-white/40
         before:absolute before:inset-0 before:rounded-full 
         before:bg-gradient-to-r before:from-[#FD5528]/20 before:to-orange-200/30 
         before:-z-10">

         Process

    </p>
    
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3">
        Predictable Delivery
      </h2>
      <p class="text-gray-500 mt-3 max-w-xl mx-auto">
        Structured milestones that keep your project moving forward.
      </p>
    </div>

    <div class="relative">

      <!-- 🔴 MOBILE LINE (BEHIND CONTENT) -->
      <div class="absolute left-6 top-0 h-full border-l-2 border-dashed border-[#FD5528]/30 z-0 lg:hidden"></div>

      <!-- 🔴 DESKTOP LINE -->
      <div class="hidden lg:block absolute top-6 left-0 w-full border-t-2 border-dashed border-[#FD5528]/40"></div>

      <!-- STEPS -->
      <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-y-12 relative z-10">

        <!-- STEP -->
        <div class="flex items-start gap-4 lg:flex-col lg:items-center text-left lg:text-center group">

          <!-- CIRCLE -->
          <div class="min-w-[48px] h-12 flex items-center justify-center rounded-full border-2 border-[#FD5528] bg-white text-[#FD5528] font-semibold transition     ">
            01
          </div>

          <!-- TEXT -->
          <div>
            <h3 class="font-semibold text-gray-900 group-hover:text-[#FD5528]">
              Discovery
            </h3>
            <p class="text-sm text-gray-500 mt-1">
              Understanding goals & defining scope
            </p>
          </div>

        </div>

        <!-- STEP -->
        <div class="flex items-start gap-4 lg:flex-col lg:items-center text-left lg:text-center group">
          <div class="min-w-[48px] h-12 flex items-center justify-center rounded-full border-2 border-[#FD5528] bg-white text-[#FD5528] font-semibold transition ] ">
            02
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 group-hover:text-[#FD5528]">
              UI / UX
            </h3>
            <p class="text-sm text-gray-500 mt-1">
              Designing intuitive experiences
            </p>
          </div>
        </div>

        <!-- STEP -->
        <div class="flex items-start gap-4 lg:flex-col lg:items-center text-left lg:text-center group">
          <div class="min-w-[48px] h-12 flex items-center justify-center rounded-full border-2 border-[#FD5528] bg-white text-[#FD5528] font-semibold transition ] ">
            03
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 group-hover:text-[#FD5528]">
              Development
            </h3>
            <p class="text-sm text-gray-500 mt-1">
              Building scalable applications
            </p>
          </div>
        </div>

        <!-- STEP -->
        <div class="flex items-start gap-4 lg:flex-col lg:items-center text-left lg:text-center group">
          <div class="min-w-[48px] h-12 flex items-center justify-center rounded-full border-2 border-[#FD5528] bg-white text-[#FD5528] font-semibold transition ] ">
            04
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 group-hover:text-[#FD5528]">
              Testing
            </h3>
            <p class="text-sm text-gray-500 mt-1">
              Ensuring quality & performance
            </p>
          </div>
        </div>

        <!-- STEP -->
        <div class="flex items-start gap-4 lg:flex-col lg:items-center text-left lg:text-center group">
          <div class="min-w-[48px] h-12 flex items-center justify-center rounded-full border-2 border-[#FD5528] bg-white text-[#FD5528] font-semibold transition  ">
            05
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 group-hover:text-[#FD5528]">
              Deployment
            </h3>
            <p class="text-sm text-gray-500 mt-1">
              Launching production-ready apps
            </p>
          </div>
        </div>

        <!-- STEP -->
        <div class="flex items-start gap-4 lg:flex-col lg:items-center text-left lg:text-center group">
          <div class="min-w-[48px] h-12 flex items-center justify-center rounded-full border-2 border-[#FD5528] bg-white text-[#FD5528] font-semibold transition ">
            06
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 group-hover:text-[#FD5528]">
              Support
            </h3>
            <p class="text-sm text-gray-500 mt-1">
              Continuous improvements
            </p>
          </div>
        </div>

      </div>

    </div>

  </div>

</section>
<!-- pr -->

<!-- SOFTWARE DEVELOPMENT PROCESS SECTION -->
<section class="relative bg-white py-24 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-0 left-0 w-72 h-72 bg-orange-100 rounded-full blur-3xl opacity-60"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-orange-50 rounded-full blur-3xl opacity-80"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

        <!-- Header -->
        <div class="max-w-4xl mx-auto text-center">
            <span class="inline-flex items-center px-5 py-2 rounded-full bg-orange-100 text-[#FD5528] font-semibold text-sm tracking-wide">
                Our Development Methodology
            </span>

            <h2 class="mt-6 text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight">
                 Projects That Reflect
                <span class="text-[#FD5528]">   Real Execution and Business Impact</span>
            </h2>

            <p class="mt-6 text-lg text-gray-600 leading-relaxed">
                A clear, structured approach that helps ideas move from planning to delivery
                with better visibility, stronger execution, and long-term reliability.
            </p>

            <p class="mt-4 text-base md:text-lg text-gray-500 leading-relaxed">
       
Explore selected work from Backend Coders India across software, web, ecommerce, mobile, ERP, SaaS, and custom digital solutions.
We partner with startups, SMEs, and growing businesses to deliver technology solutions that solve operational challenges, support business growth, and improve digital performance. Each project reflects practical thinking, technical capability, and a focus on building systems that work in real business environments.

            </p>
        </div>


    </div>
</section>


<!-- DELIVERY PROCESS SECTION -->
<section class="relative bg-white py-24 overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-20 -left-20 w-72 h-72 bg-orange-100 rounded-full blur-3xl opacity-60"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-orange-50 rounded-full blur-3xl opacity-80"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- LEFT CONTENT -->
            <div>

                <span class="inline-flex items-center px-5 py-2 rounded-full bg-orange-100 text-[#FD5528] text-sm font-semibold tracking-wide">
                    Our Delivery Framework
                </span>

                <h2 class="mt-6 text-4xl lg:text-5xl font-extrabold text-gray-900 leading-tight">
                   A Delivery Process Built Around 
                    <span class="text-[#FD5528]">Clarity and Execution</span>
                </h2>

                <p class="mt-6 text-lg text-gray-600 leading-relaxed">
                    Successful digital products are not built through guesswork. They come from structured planning, focused execution, and steady communication throughout the project lifecycle.
                </p>

                <p class="mt-5 text-gray-600 leading-relaxed">
                
                  At Backend Coders India, our delivery philosophy is centered on understanding requirements clearly, planning with purpose, building in stages, and maintaining visibility across every milestone. This helps clients make better decisions, manage scope more effectively, and move forward with confidence.

                </p>

           

            </div>

            <!-- RIGHT IMAGE -->
            <div class="relative">

                <!-- Main Image -->
                <div class="relative overflow-hidden rounded-[2rem] border border-orange-100 bg-white shadow-[0_30px_80px_rgba(15,23,42,0.12)]">
                    <img
                        src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1200&q=80"
                        alt="Software Development Process"
                        class="w-full h-full object-cover">
                </div>

             

            </div>

        </div>

    </div>
</section>

<!-- Development Process -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <!-- Heading -->
        <div class="max-w-4xl mx-auto text-center">
            <span
                class="inline-flex items-center rounded-full bg-orange-50 px-5 py-2 text-sm font-semibold text-[#FD5528] border border-orange-100">
                Development Process
            </span>

            <h2 class="mt-6 text-4xl md:text-5xl font-bold tracking-tight text-gray-900">
                Our End-to-End Development Process
            </h2>

            <p class="mt-6 text-lg leading-relaxed text-gray-600">
                A structured and transparent workflow designed to transform ideas into
                scalable digital solutions while maintaining quality, visibility, and
                business alignment at every stage.
            </p>
        </div>

        <!-- Timeline -->
        <div class="relative mt-20">

            <!-- Desktop Connector -->
            <div
                class="hidden lg:block absolute top-10 left-0 right-0 h-[2px] bg-gradient-to-r from-orange-200 via-orange-300 to-orange-200">
            </div>

            <div class="grid gap-8 md:grid-cols-2 xl:grid-cols-3">

                <!-- Card 1 -->
                <div
                    class="group relative rounded-3xl border border-gray-100 bg-white p-8 shadow-sm transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">


                    <h3 class="mt-8 text-2xl font-bold text-[#FD5528]">
                         Discovery and Consultation
                    </h3>

                    <p class="mt-4 leading-relaxed text-gray-600">
                      
                    understand idea and goals

                    </p>
                </div>

                <!-- Card 2 -->
                <div
                    class="group relative rounded-3xl bg-[#111111] p-8 shadow-xl transition-all duration-500 hover:-translate-y-2">

                   

                    <h3 class="mt-8 text-2xl font-bold text-[#FD5528]">
                          Requirement Analysis
                    </h3>

                    <p class="mt-4 leading-relaxed text-gray-600">
                     
                          define scope and features

                    </p>
                </div>

                <!-- Card 3 -->
                <div
                    class="group relative rounded-3xl border border-gray-100 bg-white p-8 shadow-sm transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">

                  

                    <h3 class="mt-8 text-2xl font-bold text-[#FD5528]">
                       Planning and Strategy
                    </h3>

                    <p class="mt-4 leading-relaxed text-gray-600">
                                             
                        create the roadmap

                    </p>
                </div>

                <!-- Card 4 -->
                <div
                    class="group relative rounded-3xl border border-gray-100 bg-white p-8 shadow-sm transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">

                

                    <h3 class="mt-8 text-2xl font-bold text-[#FD5528]">
                        UI and UX Design
                    </h3>

                    <p class="mt-4 leading-relaxed text-gray-600">
                       
                    shape the user experience

                    </p>
                </div>

                <!-- Card 5 -->
                <div
                    class="group relative rounded-3xl bg-[#111111] p-8 shadow-xl transition-all duration-500 hover:-translate-y-2">

               

                    <h3 class="mt-8 text-2xl font-bold text-[#FD5528]">
                        Development
                    </h3>

                    <p class="mt-4 leading-relaxed text-gray-600">
                     
                      build in agile stages

                    </p>
                </div>

                <!-- Card 6 -->
                <div
                    class="group relative rounded-3xl border border-gray-100 bg-white p-8 shadow-sm transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">

              

                    <h3 class="mt-8 text-2xl font-bold text-[#FD5528]">
                       Testing and Quality Assurance
                    </h3>

                    <p class="mt-4 leading-relaxed text-gray-600">
                      
                    test quality and performance

                    </p>
                </div>

                <!-- Card 7 -->
                <div
                    class="group relative rounded-3xl border border-gray-100 bg-white p-8 shadow-sm transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">

              

                    <h3 class="mt-8 text-2xl font-bold text-[#FD5528]">
                           Deployment and Launch
                    </h3>

                    <p class="mt-4 leading-relaxed text-gray-600">
                      prepare and launch the solution

                    </p>
                </div>

                <!-- Card 8-->
                <div
                    class="group relative rounded-3xl border border-gray-100 bg-white p-8 shadow-sm transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">

              

                    <h3 class="mt-8 text-2xl font-bold text-[#FD5528]">
                           Ongoing Support
                    </h3>

                    <p class="mt-4 leading-relaxed text-gray-600">
                   
                      provide ongoing updates and support.


                    </p>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- COLLABORATION & WHY OUR PROCESS WORKS -->
<section class="relative bg-white py-24 overflow-hidden">
    <!-- Background Blur -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-0 right-0 w-80 h-80 bg-orange-50 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-72 h-72 bg-orange-100/50 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 lg:px-6">

        <div class="grid lg:grid-cols-2 gap-12">

            <!-- LEFT IMAGE -->
            <div class="relative">

                <div class="relative overflow-hidden rounded-[2rem] border border-orange-100 shadow-[0_25px_80px_rgba(15,23,42,0.10)]">
                    <img
                        src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1200&q=80"
                        alt="Project Collaboration and Communication"
                        class="w-full h-full object-cover">
                </div>

              
                <!-- Decorative Circle -->
                <div class="absolute -top-8 -left-8 w-32 h-32 rounded-full border-[18px] border-orange-100"></div>

            </div>

            <!-- RIGHT CONTENT -->
            <div>

                <span class="inline-flex items-center px-5 py-2 rounded-full bg-orange-50 border border-orange-100 text-[#FD5528] text-sm font-semibold">
                    Collaboration & Communication
                </span>

                <h2 class="mt-6 text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
                   Collaboration and Communication 
                    <span class="text-[#FD5528]">Throughout the Project</span>
                </h2>

                <p class="mt-6 text-lg text-gray-600 leading-relaxed">
                   
                  A strong process depends on more than technical delivery. It also depends on how well a project is communicated, reviewed, and managed along the way.
                  Our workflow supports project visibility through milestone tracking, feedback loops, and clear communication at each stage. Clients stay involved in key decisions without needing to manage every technical detail. This creates a more transparent development workflow, better alignment, and fewer surprises during execution.

                </p>
            </div>

        </div>

        <!-- WHY OUR PROCESS WORKS -->
        <div class="mt-28">

            <div class="relative overflow-hidden rounded-[2rem] bg-[#111111] p-10 lg:p-16">

                <div class="absolute top-0 right-0 w-80 h-80 bg-[#FD5528]/20 rounded-full blur-3xl"></div>

                <div class="relative">

                    <div class="max-w-3xl">
                        <span class="inline-flex items-center px-5 py-2 rounded-full bg-white/10 text-[#FD5528] text-sm font-semibold">
                            Why Clients Choose Us
                        </span>

                        <h2 class="mt-6 text-4xl lg:text-5xl font-bold text-black">
                           Why Our Process Works
                        </h2>

                        <p class="mt-6 text-lg text-black leading-relaxed">
                      
                          Our process works because it balances planning, execution, quality control, and collaboration in a practical way.
                          Clients trust Backend Coders India for:

                        </p>
                    </div>

                    <!-- Benefits Grid -->
                    <div class="mt-12 grid md:grid-cols-2 lg:grid-cols-4 gap-5">

                        <div class="bg-white/5 border border-white/10 rounded-2xl p-5">
                            <h3 class="font-semibold text-black">
                                •	clear project structure
                            </h3>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-2xl p-5">
                            <h3 class="font-semibold text-black">
                             •	transparent communication
                            </h3>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-2xl p-5">
                            <h3 class="font-semibold text-black">
                            •	agile and milestone-based execution
                            </h3>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-2xl p-5">
                            <h3 class="font-semibold text-black">
                              •	better requirement alignment
                            </h3>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-2xl p-5">
                            <h3 class="font-semibold text-black">
                              •	quality-focused delivery
                            </h3>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-2xl p-5">
                            <h3 class="font-semibold text-black">
                              •	scalable implementation thinking
                            </h3>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-2xl p-5">
                            <h3 class="font-semibold text-black">
                            •	continued support after launch
                            </h3>
                        </div>

                    </div>

                    <!-- Bottom Text -->
                    <p class="mt-10 text-black leading-relaxed max-w-4xl">
                     This approach helps reduce project risk, improve accountability, and create solutions that are more reliable in real business use.
                    </p>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- TECHNOLOGIES -->
<section id="technologies" class="bg-[#F9FAFB] px-6 py-16 sm:py-20 lg:py-24">

  <div class="max-w-7xl mx-auto">

    <!-- Heading -->
    <div class="text-center max-w-3xl mx-auto mb-12">
      <p
        data-aos="fade-up"
        class="inline-block text-xs sm:text-sm font-semibold uppercase tracking-[0.35em] text-[#FD5528] relative px-5 py-2 rounded-full bg-white/70 backdrop-blur-md shadow-[0_8px_20px_rgba(0,0,0,0.08)] border border-white/40 before:absolute before:inset-0 before:rounded-full before:bg-gradient-to-r before:from-[#FD5528]/20 before:to-orange-200/30 before:-z-10"
      >
        Development Expertise
      </p>

      <h2 class="mt-4 text-3xl font-bold text-gray-900 md:text-4xl" data-aos="fade-up" data-aos-delay="100">
        Technologies We Love
      </h2>

      <p class="mt-4 text-sm sm:text-base text-gray-600" data-aos="fade-up" data-aos-delay="200">
        A modern stack for scalable apps, polished interfaces, and reliable cloud delivery.
      </p>
    </div>

    <div class="grid gap-8 lg:grid-cols-[0.95fr_1.05fr] items-stretch">

      <div class="rounded-[2rem] border border-white/80 bg-white/95 p-8 shadow-[0_30px_80px_rgba(253,85,40,0.12)]" data-aos="fade-right" data-aos-delay="300">
        <span class="inline-block text-xs sm:text-sm font-semibold uppercase tracking-[0.35em] 
         text-[#FD5528] relative px-5 py-2 rounded-full 
         bg-white/60 backdrop-blur-md 
         shadow-[0_8px_20px_rgba(0,0,0,0.08)] 
         border border-white/40
         before:absolute before:inset-0 before:rounded-full 
         before:bg-gradient-to-r before:from-[#FD5528]/20 before:to-orange-200/30 
         before:-z-10">
          Core expertise
        </span>

        <h3 class="mt-6 text-2xl sm:text-3xl fontffffffbold text-gray-900">
          Build faster with proven tools
        </h3>

        <p class="mt-4 text-gray-600 leading-relaxed">
          We combine backend power, frontend polish, and cloud infrastructure to deliver fast, secure, and scalable digital products.
        </p>

        <div class="mt-10 grid gap-4 sm:grid-cols-2">
          <div class="rounded-3xl border border-gray-200 bg-[#FFF7F0] p-5">
            <p class="font-semibold text-gray-900">Backend & APIs</p>
            <p class="mt-2 text-sm text-gray-600">.NET Core, Node.js, Laravel</p>
          </div>
          <div class="rounded-3xl border border-gray-200 bg-[#EFF7FF] p-5">
            <p class="font-semibold text-gray-900">Frontend</p>
            <p class="mt-2 text-sm text-gray-600">React, Next.js, TypeScript</p>
          </div>
          <div class="rounded-3xl border border-gray-200 bg-[#EFFCF5] p-5">
            <p class="font-semibold text-gray-900">Cloud & Data</p>
            <p class="mt-2 text-sm text-gray-600">AWS, Firebase, MongoDB, SQL Server</p>
          </div>
          <div class="rounded-3xl border border-gray-200 bg-[#FFF5F7] p-5">
            <p class="font-semibold text-gray-900">Delivery</p>
            <p class="mt-2 text-sm text-gray-600">SaaS, eCommerce, enterprise-grade products</p>
          </div>
        </div>
      </div>

      <div class="rounded-[2rem] bg-white border border-gray-200 shadow-xl overflow-hidden" data-aos="fade-left" data-aos-delay="400">
        <div class="p-6 sm:p-8 bg-gradient-to-br from-white via-[#FFF6F0] to-[#FFF2ED]">
          <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
              <span class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">Tech gallery</span>
              <h3 class="mt-3 text-2xl font-bold text-gray-900">Loved by product teams</h3>
            </div>
            <span class="inline-flex items-center rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">
              Responsive layout
            </span>
          </div>

          <!-- <div class="mt-8 grid gap-4 grid-cols-2 sm:grid-cols-3 xl:grid-cols-4">
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition  hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/dotnetcore/dotnetcore-original.svg" class="w-12 h-12" alt="Dotnet Core">
              <span class="text-sm font-semibold text-gray-900">.NET Core</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" class="w-12 h-12" alt="React">
              <span class="text-sm font-semibold text-gray-900">React</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" class="w-12 h-12" alt="Node.js">
              <span class="text-sm font-semibold text-gray-900">Node.js</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg" class="w-12 h-12" alt="MongoDB">
              <span class="text-sm font-semibold text-gray-900">MERN</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-original.svg" class="w-12 h-12" alt="WordPress">
              <span class="text-sm font-semibold text-gray-900">WordPress</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.simpleicons.org/spotify/1DB954" class="w-12 h-12" alt="Shopify">
              <span class="text-sm font-semibold text-gray-900">Shopify</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" class="w-12 h-12" alt="Laravel">
              <span class="text-sm font-semibold text-gray-900">Laravel</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/microsoftsqlserver/microsoftsqlserver-plain.svg" class="w-12 h-12" alt="SQL Server">
              <span class="text-sm font-semibold text-gray-900">SQL Server</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/firebase/firebase-plain.svg" class="w-12 h-12" alt="Firebase">
              <span class="text-sm font-semibold text-gray-900">Firebase</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/amazonwebservices/amazonwebservices-original-wordmark.svg" class="w-12 h-12" alt="AWS">
              <span class="text-sm font-semibold text-gray-900">AWS</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg" class="w-12 h-12" alt="TypeScript">
              <span class="text-sm font-semibold text-gray-900">TypeScript</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nextjs/nextjs-original.svg" class="w-12 h-12 bg-white p-1 rounded" alt="Next.js">
              <span class="text-sm font-semibold text-gray-900">Next.js</span>
            </div>
          </div> -->
           <div class="mt-8 grid gap-4 grid-cols-3 sm:grid-cols-3 xl:grid-cols-4">
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition  hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/dotnetcore/dotnetcore-original.svg" class="w-12 h-12" alt="Dotnet Core">
              <span class="text-sm font-semibold text-gray-900">.NET Core</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" class="w-12 h-12" alt="React">
              <span class="text-sm font-semibold text-gray-900">React</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" class="w-12 h-12" alt="Node.js">
              <span class="text-sm font-semibold text-gray-900">Node.js</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg" class="w-12 h-12" alt="MongoDB">
              <span class="text-sm font-semibold text-gray-900">MERN</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-original.svg" class="w-12 h-12" alt="WordPress">
              <span class="text-sm font-semibold text-gray-900">WordPress</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.simpleicons.org/spotify/1DB954" class="w-12 h-12" alt="Shopify">
              <span class="text-sm font-semibold text-gray-900">Shopify</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" class="w-12 h-12" alt="Laravel">
              <span class="text-sm font-semibold text-gray-900">Laravel</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/microsoftsqlserver/microsoftsqlserver-plain.svg" class="w-12 h-12" alt="SQL Server">
              <span class="text-sm font-semibold text-gray-900">SQL Server</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/firebase/firebase-plain.svg" class="w-12 h-12" alt="Firebase">
              <span class="text-sm font-semibold text-gray-900">Firebase</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/amazonwebservices/amazonwebservices-original-wordmark.svg" class="w-12 h-12" alt="AWS">
              <span class="text-sm font-semibold text-gray-900">AWS</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg" class="w-12 h-12" alt="TypeScript">
              <span class="text-sm font-semibold text-gray-900">TypeScript</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nextjs/nextjs-original.svg" class="w-12 h-12 bg-white p-1 rounded" alt="Next.js">
              <span class="text-sm font-semibold text-gray-900">Next.js</span>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END TECHNOLOGIES -->




<!-- CTA SECTION -->
<section class="relative overflow-hidden py-20 bg-gradient-to-r from-[#FC5124] via-[#FD5528] to-orange-400 text-white">

  <!-- BACKGROUND GLOW -->
  <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top_left,_white,_transparent_50%)]"></div>

  <div class="relative max-w-5xl mx-auto px-6 text-center">

    <!-- HEADING -->
    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 leading-tight">
    Ready to Start Your Project?
    </h2>

    <!-- SUBTEXT -->
    <p class="text-white/80 text-sm sm:text-base md:text-lg max-w-2xl mx-auto mb-10">
        Need a software team with a clear and reliable process? Backend Coders India is ready to help.
        Get in touch with our team to build your project with clarity and confidence.

    </p>

    <!-- BUTTONS -->
    <div class="flex flex-col sm:flex-row justify-center gap-4">

      <!-- PRIMARY BUTTON -->
      <a href="{{ route('frontend.contact') }}"
         class="group inline-flex items-center justify-center bg-white text-[#FC5124] px-6 py-3 rounded-xl font-semibold shadow-lg hover:shadow-2xl hover:scale-105 transition duration-300">

        Contact Us

        <!-- ARROW -->
        <span class="ml-2 transition group-hover:translate-x-1">→</span>
      </a>

      <!-- WHATSAPP BUTTON -->
      <a href="https://wa.me/+919140092133" target="_blank"
         class="group inline-flex items-center justify-center border border-white/40 px-6 py-3 rounded-xl font-semibold backdrop-blur-md hover:bg-white/10 hover:scale-105 transition duration-300">

       
        Let's Chat on WhatsApp
      </a>

    </div>

  </div>

</section>

@endsection