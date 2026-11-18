<footer class="border-t border-gray-800 bg-black px-4 pb-8 pt-14 text-gray-400 sm:px-6 lg:px-8">
  <div class="mx-auto grid max-w-7xl grid-cols-1 gap-12 md:grid-cols-2 xl:grid-cols-5 xl:gap-10">
    <div class="xl:col-span-2">
      <a href="{{ route('frontend.index') }}" class="inline-flex items-center gap-3">
        <img src="{{ asset('assets/images/bc_bg_logo_101x40.png') }}" alt="Backend Coders India logo" width="100" height="40" loading="lazy" decoding="async" class="h-12 w-auto sm:h-14">
      </a>

      <p class="mt-4 max-w-md text-sm leading-relaxed">
        Backend Coders India is a web development company in Kanpur, India delivering custom software development, SaaS platforms, mobile apps, website development, API integrations, digital marketing, SEO, and AI-powered business solutions for Indian and international clients.
      </p>

      <div class="mt-6 flex flex-wrap gap-3 sm:gap-4">
        <a href="https://www.facebook.com/backendcoders/" target="_blank" rel="noopener noreferrer" aria-label="Facebook"
           class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-[#f1e9e9] to-[#f5f1f1] transition-all duration-300 hover:scale-110">
          <img src="{{ asset('assets/icons/facebook.png') }}" width="20" height="20" loading="lazy" decoding="async" alt="Facebook" class="h-5 w-5" aria-hidden="true">
        </a>

        <a href="https://www.instagram.com/backendcoders/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"
           class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-[#f1e9e9] to-[#f5f1f1] transition-all duration-300 hover:scale-110">
          <img src="{{ asset('assets/icons/instagram.png') }}" width="20" height="20" loading="lazy" decoding="async" alt="Instagram" class="h-5 w-5" aria-hidden="true">
        </a>

        <a href="https://www.linkedin.com/company/backendcodersindia/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"
           class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-[#f1e9e9] to-[#f5f1f1] transition-all duration-300 hover:scale-110">
          <img src="{{ asset('assets/icons/linkedin.png') }}" width="20" height="20" loading="lazy" decoding="async" class="h-5 w-5" alt="LinkedIn" aria-hidden="true">
        </a>

        <a href="https://wa.me/919140092133" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"
           class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-[#f1e9e9] to-[#f5f1f1] transition-all duration-300 hover:scale-110">
          <img src="{{ asset('assets/icons/whatsapp.png') }}" width="20" height="20" loading="lazy" decoding="async" class="h-5 w-5" alt="WhatsApp" aria-hidden="true">
        </a>

         <a href="https://x.com/backendcodersin" target="_blank" rel="noopener noreferrer" aria-label="Twitter"
           class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-[#f1e9e9] to-[#f5f1f1] transition-all duration-300 hover:scale-110">
          <img src="{{ asset('assets/icons/twitter.png') }}" width="20" height="20" loading="lazy" decoding="async" class="h-5 w-5" alt="Twitter" aria-hidden="true">
        </a>
      </div>
    </div>

    <div class="min-w-0">
      <h3 class="mb-4 font-semibold text-white">Quick Links</h3>
      <ul class="space-y-2 text-sm leading-7">
        <li><a href="{{ route('frontend.about') }}" class="hover:text-[#FD5528]">Company</a></li>
        <li><a href="{{ route('frontend.team') }}" class="hover:text-[#FD5528]">Our Team</a></li> 
        <li><a href="{{ route('frontend.office_gallery') }}" class="hover:text-[#FD5528]">Office Gallery</a></li>
        <li><a href="{{ route('frontend.process') }}" class="hover:text-[#FD5528]">Process</a></li>
        <li><a href="{{ route('frontend.career') }}" class="hover:text-[#FD5528]">Careers</a></li>
        <li><a href="{{ route('frontend.blog') }}" class="hover:text-[#FD5528]">Latest Blog</a></li>
      </ul>
    </div>

    <div class="min-w-0">
      <h3 class="mb-4 font-semibold text-white">Help</h3>
      <ul class="space-y-2 text-sm leading-7">
        <li><a href="{{ route('frontend.terms') }}" class="hover:text-[#FD5528]">Terms of Use</a></li>
        <li><a href="{{ route('frontend.privacy_policy') }}" class="hover:text-[#FD5528]">Privacy Policy</a></li>
        <li><a href="{{ route('frontend.faq') }}" class="hover:text-[#FD5528]">FAQs</a></li>
        <li><a href="{{ route('frontend.help') }}" class="hover:text-[#FD5528]">Help</a></li>
        <li><a href="{{ route('frontend.contact') }}" class="hover:text-[#FD5528]">Support</a></li>
      </ul>
    </div>

    <div class="min-w-0">
      <h3 class="mb-4 font-semibold text-white">Contact</h3>

      <ul class="space-y-5 text-sm">
        <li>
          <div class="flex items-start gap-3 sm:gap-4">
            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-white transition duration-300 hover:scale-110">
              <img src="{{ asset('assets/icons/address.png') }}" width="20" height="20" loading="lazy" decoding="async" class="h-5 w-5" alt="Office Address" aria-hidden="true">
            </div>

            <div class="flex-1">
              <h3 class="font-semibold leading-none text-white">Office Address</h3>
              <p class="mt-2 leading-relaxed text-gray-400">
                11/42, Krishna Nagar, Kanpur, UP 208007
              </p>
            </div>
          </div>
        </li>

        <li>
          <div class="flex items-start gap-3 sm:gap-4">
            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-white transition duration-300 hover:scale-110">
              <img src="{{ asset('assets/icons/call.png') }}" width="20" height="20" loading="lazy" decoding="async" class="h-5 w-5" alt="Phone" aria-hidden="true">
            </div>

            <div class="flex-1">
              <h3 class="font-semibold leading-none text-white">Phone</h3>
              <p class="mt-2 text-gray-400">
                <a href="tel:+919140092133" class="transition hover:text-[#FD5528]">+91 914 0092 133</a>
              </p>
            </div>
          </div>
        </li>

        <li>
          <div class="flex items-start gap-3 sm:gap-4">
            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-white transition duration-300 hover:scale-110">
              <svg viewBox="0 0 24 24" class="h-5 w-5 text-[#FD5528]" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16v12H4z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="m4 7 8 6 8-6" />
              </svg>
            </div>

            <div class="min-w-0 flex-1">
              <h3 class="font-semibold leading-none text-white">Email</h3>
              <div class="mt-2 flex flex-wrap items-center gap-2">
                <a href="mailto:info@backendcodersindia.com"
                   id="footer-email-link"
                   aria-label="Email info@backendcodersindia.com"
                   class="max-w-full break-all text-gray-300 transition hover:text-[#FD5528]">
                  <span id="footer-email" class="select-text leading-relaxed font-medium">info@backendcodersindia.com</span>
                </a>
               
              </div>
            </div>
          </div>
        </li>

     
      </ul>
    </div>
  </div>

  <div class="mt-12 border-t border-gray-800 pt-6 text-center text-sm text-gray-500">
    &copy; Backend Coders India Pvt. Ltd. All Rights Reserved <br>
    <span class="text-[#FD5528]">Developed by Backend Coders India</span>
  </div>
</footer>

<script>
  function copyFooterEmail(btn) {
    const email = "info@backendcodersindia.com";
    const updateUi = () => {
      const copyText = btn.querySelector('.copy-text');
      const originalText = copyText ? copyText.textContent : 'Copy';
      if (copyText) copyText.textContent = 'Copied!';
      btn.classList.add('text-emerald-400', 'border-emerald-500');
      setTimeout(() => {
        if (copyText) copyText.textContent = originalText;
        btn.classList.remove('text-emerald-400', 'border-emerald-500');
      }, 2000);
    };

    if (navigator.clipboard && window.isSecureContext) {
      navigator.clipboard.writeText(email).then(updateUi).catch(() => {
        fallbackCopy(email, updateUi);
      });
    } else {
      fallbackCopy(email, updateUi);
    }
  }

  function fallbackCopy(text, callback) {
    const input = document.createElement('input');
    input.value = text;
    document.body.appendChild(input);
    input.select();
    try {
      document.execCommand('copy');
      if (callback) callback();
    } catch (e) {
      console.warn('Copy failed', e);
    }
    document.body.removeChild(input);
  }

  document.addEventListener('DOMContentLoaded', function () {
    const emailLink = document.getElementById('footer-email-link');
    const emailText = document.getElementById('footer-email');

    if (emailLink && emailText) {
      emailText.textContent = 'info@backendcodersindia.com';
      emailLink.href = 'mailto:info@backendcodersindia.com';
      emailLink.setAttribute('aria-label', 'Email info@backendcodersindia.com');
    }
  });
</script>
