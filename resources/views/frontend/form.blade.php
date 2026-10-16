<form method="POST" action="{{ route('contact.send') }}" novalidate data-contact-form>
    @csrf

    @php
        $captchaNum1 = rand(2, 9);
        $captchaNum2 = rand(1, 9);
        $captchaSum = $captchaNum1 + $captchaNum2;
    @endphp

    <div class="w-full max-w-4xl rounded-3xl p-2 md:p-10 space-y-6">

        <div id="contact-feedback" class="space-y-4">
            @if(session('success'))
                <div class="rounded-2xl border-2 border-emerald-400 bg-emerald-50 p-5 text-emerald-900 shadow-md flex items-start gap-3.5 transition-all" role="alert">
                    <div class="p-1 rounded-full bg-emerald-100 text-emerald-600 flex-shrink-0 mt-0.5">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-base font-bold text-emerald-950">Inquiry Received!</h4>
                        <p class="text-sm font-semibold text-emerald-800 mt-0.5">
                            {{ session('success') }}
                        </p>
                        <p class="text-xs text-emerald-700 mt-1">
                            Our team has received your message. Need immediate assistance? Call us directly at <a href="tel:+919140092133" class="underline font-bold">+91 9140092133</a>.
                        </p>
                    </div>
                </div>
            @endif

            @if(session('error'))
                <div class="rounded-2xl border-2 border-red-300 bg-red-50 p-5 text-red-900 shadow-sm flex items-start gap-3.5" role="alert">
                    <div class="p-1 rounded-full bg-red-100 text-red-600 flex-shrink-0 mt-0.5">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-base font-bold text-red-950">Submission Failed</h4>
                        <p class="text-sm font-medium text-red-800 mt-0.5">
                            {{ session('error') }}
                        </p>
                    </div>
                </div>
            @endif

            @if($errors->any())
                <div class="rounded-2xl border-2 border-red-300 bg-red-50 p-5 text-red-900 shadow-sm" role="alert">
                    <div class="flex items-center gap-2 mb-2">
                        <svg class="h-5 w-5 text-red-600 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                        </svg>
                        <h4 class="text-base font-bold text-red-950">Please correct the highlighted fields:</h4>
                    </div>
                    <ul class="list-disc list-inside text-sm space-y-1 text-red-800 ml-1">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <p class="text-xs text-red-700 mt-2 font-medium">
                        Next steps: Check required fields, correct any invalid entries, or reach us at <a href="mailto:info@backendcodersindia.com" class="underline font-bold">info@backendcodersindia.com</a>.
                    </p>
                </div>
            @endif

            <div id="contactDynamicFeedback" class="hidden"></div>
        </div>

        <!-- NAME ROW -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="relative">
                <input
                    id="first_name"
                    type="text"
                    name="first_name"
                    value="{{ old('first_name') }}"
                    required
                    placeholder=" "
                    class="peer w-full px-5 pt-5 pb-2 rounded-2xl border border-gray-200"
                >

                <label
                    for="first_name"
                    class="absolute left-5 top-2 text-sm text-gray-500 transition-all
                           peer-placeholder-shown:top-4
                           peer-placeholder-shown:text-base
                           peer-focus:top-2
                           peer-focus:text-sm">
                    First Name<span class="text-red-500">*</span>
                </label>
            </div>

            <div class="relative">
                <input
                    id="last_name"
                    type="text"
                    name="last_name"
                    value="{{ old('last_name') }}"
                    placeholder=" "
                    class="peer w-full px-5 pt-5 pb-2 rounded-2xl border border-gray-200"
                >

                <label
                    for="last_name"
                    class="absolute left-5 top-2 text-sm text-gray-500 transition-all
                           peer-placeholder-shown:top-4
                           peer-placeholder-shown:text-base
                           peer-focus:top-2
                           peer-focus:text-sm">
                   Last Name
                </label>
            </div>
        </div>

        <!-- EMAIL -->
        <!-- <div>
           <div class="relative">
    <input type="email" name="email" required placeholder=" "
        class="peer w-full px-5 pt-5 pb-2 rounded-2xl border border-gray-200 bg-white focus:ring-2 focus:ring-orange-300">

    <label class="absolute left-5 top-2 text-gray-400 text-sm transition-all
        peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base
        peer-focus:top-2 peer-focus:text-sm peer-focus:text-orange-500">
        Email Address <span class="text-red-500">*</span>
    </label>
</div>
        </div> -->
        <div class="relative">
            <input
                id="email"
                type="email"
                name="email"
                required
                placeholder=" "
                autocomplete="email"
                class="peer w-full px-5 pt-5 pb-2 rounded-2xl border border-gray-200 bg-white focus:ring-2 focus:ring-orange-300"
            >

            <label
                for="email"
                class="absolute left-5 top-2 text-gray-500 text-sm transition-all
                peer-placeholder-shown:top-3.5
                peer-placeholder-shown:text-base
                peer-focus:top-2
                peer-focus:text-sm
                peer-focus:text-orange-600">
                Email Address <span class="text-red-500">*</span>
            </label>
        </div>
        <!-- PHONE -->
        <!-- <div>
        <div class="relative">
    <input type="tel" name="phone" required placeholder=" "
        pattern="[0-9]{10}"
        class="peer w-full px-5 pt-5 pb-2 rounded-2xl border border-gray-200 bg-white focus:ring-2 focus:ring-orange-300">

    <label class="absolute left-5 top-2 text-gray-400 text-sm transition-all
        peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base
        peer-focus:top-2 peer-focus:text-sm peer-focus:text-orange-500">
        Phone <span class="text-red-500">*</span>
    </label>
</div>
        </div> -->
        <div>
            <div class="relative">
                <input
                    id="phone"
                    type="tel"
                    name="phone"
                    value="{{ old('phone') }}"
                    required
                    placeholder="  "
                    autocomplete="tel"
                    pattern="[\+]?[0-9\s\-\(\)]{7,20}"
                    class="peer w-full px-5 pt-5 pb-2 rounded-2xl border border-gray-200 bg-white focus:ring-2 focus:ring-orange-300 placeholder:text-gray-400 placeholder:opacity-0 focus:placeholder:opacity-100 transition-all"
                >

                <label
                    for="phone"
                    class="absolute left-5 top-2 text-gray-500 text-sm transition-all
                    peer-placeholder-shown:top-3.5
                    peer-placeholder-shown:text-base
                    peer-focus:top-2
                    peer-focus:text-sm
                    peer-focus:text-orange-600">
                    Phone <span class="text-red-500">*</span>
                </label>
            </div>
            <p class="mt-1.5 text-xs text-gray-500 pl-2">Include your country code, e.g. +91 for India.</p>
        </div>

        <!-- MESSAGE -->
        <!-- <div>
           <div class="relative">
    <textarea name="message" rows="4" placeholder=" "
        class="peer w-full px-5 pt-5 pb-2 rounded-2xl border border-gray-200 bg-white focus:ring-2 focus:ring-orange-300"></textarea>

    <label class="absolute left-5 top-2 text-gray-400 text-sm transition-all
        peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base
        peer-focus:top-2 peer-focus:text-sm peer-focus:text-orange-500">
        Your Message
    </label>
</div>
        </div> -->
        <div class="relative">
        <textarea
            id="message"
            name="message"
            rows="4"
            placeholder=" "
            class="peer w-full px-5 pt-5 pb-2 rounded-2xl border border-gray-200 bg-white focus:ring-2 focus:ring-orange-300"
        ></textarea>

        <label
            for="message"
            class="absolute left-5 top-2 text-gray-500 text-sm transition-all
            peer-placeholder-shown:top-3.5
            peer-placeholder-shown:text-base
            peer-focus:top-2
            peer-focus:text-sm
            peer-focus:text-orange-600">
            Your Message
        </label>
        </div>
        
       <div  class="flex flex-col sm:flex-row items-end gap-4">
         <!-- CAPTCHA -->
<div class="w-full md:w-1/2">
    <div class="p-4 rounded-xl shadow-sm bg-[#FFFCED] border border-[#f3e2b3]">

        <!-- QUESTION & RELOAD -->
        <div class="mb-2 flex items-center justify-between gap-2 text-sm font-bold text-gray-700">
            <span id="captchaQuestion">
                What is {{ $captchaNum1 }} + {{ $captchaNum2 }}? <span class="text-red-500 font-bold">*</span>
            </span>
            <button type="button" class="reload-captcha-btn inline-flex items-center justify-center p-1 text-orange-600 hover:text-orange-700 transition cursor-pointer" title="Get a new math challenge" aria-label="Reload challenge">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                </svg>
            </button>
        </div>

        <!-- INPUT -->
        <input type="text"
            name="captcha"
            id="captchaInput"
            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 bg-white"
            placeholder="Enter answer"
            autocomplete="off"
            required>

        <!-- HIDDEN -->
        <input type="hidden" name="captcha_correct" id="captchaCorrect" value="{{ $captchaSum }}">

        <!-- ERROR & RECOVERY -->
        <div id="captchaError" class="mt-2 text-xs text-red-600 font-medium hidden bg-red-50 p-2.5 rounded-lg border border-red-200">
            <div class="flex items-center justify-between gap-2">
                <span class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Wrong answer, try again.
                </span>
                <button type="button" class="reload-captcha-btn font-bold text-red-700 hover:text-red-900 underline cursor-pointer">
                    Reload challenge
                </button>
            </div>
        </div>

    </div>
</div>

        <!-- BUTTON -->
        <div class="flex justify-center pt-2">
            <button type="submit"
                class="bg-gradient-to-r from-orange-500 to-yellow-400 text-white px-8 py-3 rounded-2xl font-semibold shadow-md hover:scale-105 transition cursor-pointer">
                Send Message
            </button>
        </div>
       </div>

    </div>
</form>
