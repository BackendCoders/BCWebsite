@extends('component.main')
@section('content')

@php
    $contactBreadcrumb = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Home',
                'item' => url('/'),
            ],
            [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => 'Contact Us',
                'item' => route('frontend.contact'),
            ],
        ],
    ];
@endphp

@push('head')
    <script type="application/ld+json">{!! json_encode($contactBreadcrumb, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
@endpush

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
            <a href="tel:+919140092133" class="text-black hover:text-[#FD5528] transition font-medium">
              +91 914 0092 133
            </a>
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
    
          </div>
        </div>

      </div>
    </li>

    <!-- GOOGLE RATING -->
    <li>
      <div class="flex items-start gap-4 group">

        <div class="w-11 h-11 flex items-center justify-center rounded-xl bg-[#FFF1EC] group-hover:scale-110 transition duration-300">
          <svg class="h-5 w-5 text-amber-500 fill-current" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        </div>

        <div class="flex-1">
          <h3 class="font-semibold text-black leading-none">
            Google Rating
          </h3>
          <p class="mt-2 text-sm text-gray-600">
            <a href="https://g.page/r/CV9oD5gxne7gEBM/review" target="_blank" rel="noopener noreferrer" class="font-medium text-[#FD5528] hover:underline">
              Review us on Google &rarr;
            </a>
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
  <div aria-labelledby="location-heading" class="mt-8 rounded-2xl overflow-hidden border border-gray-200 shadow-sm group">
      <h2 id="location-heading" class="sr-only">
        Backend Coders India Office Location
    </h2>

    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7146.187936818438!2d80.372306!3d26.420444!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1774945612057!5m2!1sen!2sin" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-[150px] border-0 transition duration-500 group-hover:scale-105"
    title="Google Map Location for Backend Coders India"></iframe>
    <div class="p-3 bg-gray-50 flex items-center justify-between border-t border-gray-200 text-xs">
      <span class="text-gray-600">11/42, Krishna Nagar, Kanpur</span>
      <a href="https://maps.google.com/?q=26.420444,80.372306" target="_blank" rel="noopener noreferrer" class="font-semibold text-[#FD5528] hover:underline flex items-center gap-1">
        Open in Google Maps &rarr;
      </a>
    </div>
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

<!-- COMPACT FAQ SECTION -->
@php
    if (!isset($contactFaqs) || empty($contactFaqs)) {
        if (class_exists(\App\Support\FaqData::class)) {
            $contactFaqs = \App\Support\FaqData::forContact();
        } elseif (method_exists(\App\Http\Controllers\HomeController::class, 'getContactFaqList')) {
            $contactFaqs = \App\Http\Controllers\HomeController::getContactFaqList();
        } else {
            $contactFaqs = [
                [
                    'id' => 1,
                    'q' => 'Where is your office, and can I visit?',
                    'a' => "Our office is at 11/42, Krishna Nagar, Kanpur, Uttar Pradesh 208007. We're open Monday to Friday, 10:00 am to 6:00 pm.",
                    'a_html' => "Our office is at 11/42, Krishna Nagar, Kanpur, Uttar Pradesh 208007. We're open Monday to Friday, 10:00 am to 6:00 pm.",
                ],
                [
                    'id' => 2,
                    'q' => 'How much does a website cost?',
                    'a' => "Business websites start from ₹7,999. The final price depends on the number of pages, the features you need, and whether you want an online store. Our packages page lists what each plan includes, and we'll give you a fixed quote before any work starts.",
                    'a_html' => 'Business websites start from ₹7,999. The final price depends on the number of pages, the features you need, and whether you want an online store. Our <a href="https://backendcodersindia.com/packages" class="font-semibold text-[#FD5528] hover:underline">packages page</a> lists what each plan includes, and we\'ll give you a fixed quote before any work starts.',
                ],
                [
                    'id' => 5,
                    'q' => 'Do you work with clients outside Kanpur or outside India?',
                    'a' => "Yes. Alongside businesses in Kanpur, we work with clients across India and in the USA and UK. We work remotely by phone, WhatsApp, email and video calls, with regular progress updates.",
                    'a_html' => "Yes. Alongside businesses in Kanpur, we work with clients across India and in the USA and UK. We work remotely by phone, WhatsApp, email and video calls, with regular progress updates.",
                ],
                [
                    'id' => 7,
                    'q' => 'Can we talk to you in Hindi?',
                    'a' => "Yes. Our team supports clients in both Hindi and English, on calls, WhatsApp and in meetings.",
                    'a_html' => "Yes. Our team supports clients in both Hindi and English, on calls, WhatsApp and in meetings.",
                ],
            ];
        }
    }
@endphp
<section class="bg-white py-16 sm:py-20 border-t border-slate-200/70" aria-label="Frequently Asked Questions">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <span class="inline-block text-xs sm:text-sm font-semibold uppercase tracking-[0.35em] text-[#FD5528] px-4 py-1.5 rounded-full bg-orange-50 border border-orange-200/60 mb-3">
                Quick Answers
            </span>
            <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">
                Frequently Asked Questions
            </h2>
            <p class="mt-2 text-sm sm:text-base text-slate-600 max-w-xl mx-auto">
                Quick answers to common questions about our office location, website costs, remote client collaboration, and language support.
            </p>
        </div>

        <div class="space-y-4" id="contact-faq-accordion">
            @foreach($contactFaqs as $faq)
                <div class="contact-faq-item rounded-2xl border border-slate-200 bg-slate-50/50 transition hover:border-[#FD5528]/40 hover:bg-white shadow-sm overflow-hidden">
                    <button
                        type="button"
                        class="contact-faq-toggle flex w-full items-center justify-between gap-4 p-5 sm:p-6 text-left transition focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FD5528]"
                        aria-expanded="false"
                        aria-controls="contact-faq-ans-{{ $faq['id'] }}"
                        id="contact-faq-btn-{{ $faq['id'] }}">
                        <h3 class="text-base sm:text-lg font-bold text-slate-900 leading-snug">
                            {{ $faq['q'] }}
                        </h3>
                        <span class="contact-faq-icon flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-orange-100 text-[#FD5528] font-bold text-lg transition-transform duration-300">
                            +
                        </span>
                    </button>

                    <div
                        id="contact-faq-ans-{{ $faq['id'] }}"
                        role="region"
                        aria-labelledby="contact-faq-btn-{{ $faq['id'] }}"
                        class="contact-faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 pb-6 sm:px-6 text-sm sm:text-base text-slate-600 leading-relaxed border-t border-slate-200/60 pt-4 bg-white">
                            {!! $faq['a_html'] !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('frontend.faq') }}" class="inline-flex items-center gap-2 font-semibold text-[#FD5528] hover:text-[#e94c20] transition group text-sm sm:text-base">
                <span>View All Frequently Asked Questions</span>
                <span class="transition-transform group-hover:translate-x-1">&rarr;</span>
            </a>
        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const toggles = document.querySelectorAll(".contact-faq-toggle");

    toggles.forEach(btn => {
        btn.addEventListener("click", () => {
            const isExpanded = btn.getAttribute("aria-expanded") === "true";
            const content = document.getElementById(btn.getAttribute("aria-controls"));
            const icon = btn.querySelector(".contact-faq-icon");

            // Close all
            toggles.forEach(otherBtn => {
                otherBtn.setAttribute("aria-expanded", "false");
                const otherContent = document.getElementById(otherBtn.getAttribute("aria-controls"));
                const otherIcon = otherBtn.querySelector(".contact-faq-icon");
                if (otherContent) otherContent.style.maxHeight = null;
                if (otherIcon) {
                    otherIcon.textContent = "+";
                    otherIcon.classList.remove("rotate-45");
                }
            });

            // If it was closed, open it
            if (!isExpanded) {
                btn.setAttribute("aria-expanded", "true");
                content.style.maxHeight = content.scrollHeight + "px";
                if (icon) {
                    icon.textContent = "×";
                    icon.classList.add("rotate-45");
                }
            }
        });
    });
});
</script>

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
