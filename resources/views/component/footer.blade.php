<footer class="bg-black text-gray-400 pt-16 pb-8 px-6 border-t border-gray-800">

  <div class="max-w-7xl mx-auto grid md:grid-cols-2 lg:grid-cols-5 gap-10">

    <!-- Company -->
    <div class="lg:col-span-2">
      <a href="{{ route('frontend.index') }}" class="flex items-center gap-3">
        <img src="{{ asset('assets/images/bc_bg.png') }}" class="h-14 w-auto" />
      </a>

      <p class="mt-4 text-sm leading-relaxed max-w-md">
        Backend Coders India is a team of passionate developers building scalable,
        high-performance solutions for startups and enterprises worldwide.
      </p>

      <!-- Social Icons -->
      <div class="flex gap-4 mt-6">


      <a href="https://www.facebook.com/backendcoders/" target="_blank"
         class="w-10 h-10 flex items-center justify-center rounded-full 
         bg-gradient-to-r from-[#b00000] to-[#fb813b] 
         hover:from-[#fb813b] hover:to-[#b00000] 
         hover:scale-110 transition-all duration-300">
        <img src="https://img.icons8.com/?size=100&id=118468&format=png&color=ffffff" 
             class="w-6 h-6">
      </a>

      <a href="https://www.instagram.com/backendcoders/" target="_blank"
         class="w-10 h-10 flex items-center justify-center rounded-full 
         bg-gradient-to-r from-[#b00000] to-[#fb813b] 
         hover:from-[#fb813b] hover:to-[#b00000] 
         hover:scale-110 transition-all duration-300">
        <img src="https://img.icons8.com/?size=100&id=32292&format=png&color=ffffff" 
             class="w-6 h-6">
      </a>

      <a href="https://www.linkedin.com/company/103738896/admin/dashboard/" target="_blank"
         class="w-10 h-10 flex items-center justify-center rounded-full 
         bg-gradient-to-r from-[#b00000] to-[#fb813b] 
         hover:from-[#fb813b] hover:to-[#b00000] 
         hover:scale-110 transition-all duration-300">
        <img src="https://img.icons8.com/?size=100&id=447&format=png&color=ffffff" 
             class="w-6 h-6">
      </a>

      <a href="https://wa.me/919140092133" target="_blank"
         class="w-10 h-10 flex items-center justify-center rounded-full 
         bg-gradient-to-r from-[#b00000] to-[#fb813b] 
         hover:from-[#fb813b] hover:to-[#b00000] 
         hover:scale-110 transition-all duration-300">
        <img src="https://img.icons8.com/?size=100&id=16712&format=png&color=ffffff" 
             class="w-6 h-6">
      </a>


      </div>
   
    </div>

    <!-- Quick Links -->
    <div>
      <h4 class="text-white font-semibold mb-4">Quick Links</h4>
      <ul class="space-y-2 text-sm">
        <li><a href="{{route('frontend.about')}}" class="hover:text-[#FD5528]">Company</a></li>
        <li><a href="{{route('frontend.contact')}}" class="hover:text-[#FD5528]">Ping Us</a></li>
        <li><a href="{{route('frontend.service')}}" class="hover:text-[#FD5528]">Solutions</a></li>
        <li><a href="{{route('frontend.project')}}" class="hover:text-[#FD5528]">Architecture</a></li>
        <li><a href="{{route('frontend.blog')}}" class="hover:text-[#FD5528]">Latest Blog</a></li>
      </ul>
    </div>

    <!-- Help Links -->
    <div>
      <h4 class="text-white font-semibold mb-4">Help</h4>
      <ul class="space-y-2 text-sm">
        <li><a href="{{route('frontend.terms')}}" class="hover:text-[#FD5528]">Terms of Use</a></li>
        <li><a href="{{route('frontend.privacy_policy')}}" class="hover:text-[#FD5528]">Privacy Policy</a></li>
        <li><a href="{{route('frontend.faq')}}" class="hover:text-[#FD5528]">FAQs</a></li>
        <li><a href="{{route('frontend.help')}}" class="hover:text-[#FD5528]">Help</a></li>
        <li><a href="{{route('frontend.contact')}}" class="hover:text-[#FD5528]">Support</a></li>
      </ul>
    </div>

    <!-- Contact -->
    <div>
      <h4 class="text-white font-semibold mb-4">Contact</h4>

  <ul class="space-y-5 text-sm">

    <!-- ADDRESS -->
    <li>
      <div class="flex items-start gap-4 group">

        <!-- ICON -->
        <div class="w-11 h-11 flex items-center justify-center rounded-xl 
                    bg-white/5 group-hover:scale-110 transition duration-300">
          <img src="https://img.icons8.com/?size=100&id=3723&format=png&color=ea580c" 
               class="w-5 h-5">
        </div>

        <!-- TEXT -->
        <div class="flex-1">
          <h3 class="font-semibold text-white leading-none">
            Office Address
          </h3>
          <p class="text-gray-400 mt-2 leading-relaxed">
            11/42, Krishna Nagar, Kanpur, UP 208007
          </p>
        </div>

      </div>
    </li>

    <!-- PHONE -->
    <li>
      <div class="flex items-start gap-4 group">

        <div class="w-11 h-11 flex items-center justify-center rounded-xl 
                    bg-white/5 group-hover:scale-110 transition duration-300">
          <img src="https://img.icons8.com/?size=100&id=9659&format=png&color=ea580c" 
               class="w-5 h-5">
        </div>

        <div class="flex-1">
          <h3 class="font-semibold text-white leading-none">
            Phone
          </h3>
          <p class="text-gray-400 mt-2">
            +91 914 0092 133
          </p>
        </div>

      </div>
    </li>

    <!-- EMAIL -->
    <li>
      <div class="flex items-start gap-4 group">

        <div class="w-11 h-11 flex items-center justify-center rounded-xl 
                    bg-white/5 group-hover:scale-110 transition duration-300">
          <img src="https://img.icons8.com/?size=100&id=53388&format=png&color=ea580c" 
               class="w-5 h-5">
        </div>

        <div class="flex-1">
          <h3 class="font-semibold text-white leading-none">
            Email
          </h3>
          <p class="text-gray-400 mt-2 break-all">
            info@backendcodersindia.com
          </p>
        </div>

      </div>
    </li>

  </ul>




    
    </div>

  </div>

  <!-- Bottom -->
  <div class="mt-12 border-t border-gray-800 pt-6 text-center text-sm text-gray-500">
    © Backend Coders India Pvt. Ltd. All Rights Reserved <br>
    <span class="text-[#FD5528]">Developed by Backend Coders India</span>
  </div>

</footer>