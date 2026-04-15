<form method="POST" action="{{ route('contact.send') }}" novalidate>
    @csrf

    <div class="w-full max-w-4xl  rounded-3xl p-8 md:p-10 space-y-6">


        <!-- NAME ROW -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="relative">
    <input type="text" name="first_name" required placeholder=" "
        class="peer w-full px-5 pt-5 pb-2 rounded-2xl border border-gray-200 bg-white focus:ring-2 focus:ring-orange-300">

    <label
        class="absolute left-5 top-2 text-gray-400 text-sm transition-all
        peer-placeholder-shown:top-3.5 
        peer-placeholder-shown:text-base 
        peer-placeholder-shown:text-gray-400
        peer-focus:top-2 
        peer-focus:text-sm 
        peer-focus:text-orange-500">

        First Name <span class="text-red-500">*</span>
    </label>
</div>

           <div class="relative">
    <input type="text" name="last_name" placeholder=" "
        class="peer w-full px-5 pt-5 pb-2 rounded-2xl border border-gray-200 bg-white focus:ring-2 focus:ring-orange-300">

    <label class="absolute left-5 top-3 text-gray-400 transition-all
        peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base
        peer-focus:top-2 peer-focus:text-sm peer-focus:text-orange-500">
        Last Name
    </label>
</div>
        </div>

        <!-- EMAIL -->
        <div>
           <div class="relative">
    <input type="email" name="email" required placeholder=" "
        class="peer w-full px-5 pt-5 pb-2 rounded-2xl border border-gray-200 bg-white focus:ring-2 focus:ring-orange-300">

    <label class="absolute left-5 top-2 text-gray-400 text-sm transition-all
        peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base
        peer-focus:top-2 peer-focus:text-sm peer-focus:text-orange-500">
        Email Address <span class="text-red-500">*</span>
    </label>
</div>
        </div>

        <!-- PHONE -->
        <div>
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
        </div>

        <!-- MESSAGE -->
        <div>
           <div class="relative">
    <textarea name="message" rows="4" placeholder=" "
        class="peer w-full px-5 pt-5 pb-2 rounded-2xl border border-gray-200 bg-white focus:ring-2 focus:ring-orange-300"></textarea>

    <label class="absolute left-5 top-2 text-gray-400 text-sm transition-all
        peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base
        peer-focus:top-2 peer-focus:text-sm peer-focus:text-orange-500">
        Your Message
    </label>
</div>
        </div>

       <div  class="flex flex-col sm:flex-row items-end gap-4">
         <!-- CAPTCHA -->
<div class="w-full md:w-1/2">
    <div class="p-4 rounded-xl shadow-sm bg-[#FFFCED] border border-[#f3e2b3]">

        <!-- QUESTION -->
        <div class="mb-2 font-bold text-gray-600" id="captchaQuestion">
            Loading...
        </div>

        <!-- INPUT -->
        <input type="text"
            name="captcha"
            id="captchaInput"
            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400"
            placeholder="Enter answer"
            required>

        <!-- HIDDEN -->
        <input type="hidden" name="captcha_correct" id="captchaCorrect">

        <!-- ERROR -->
        <small id="captchaError" class="text-red-500 hidden">
            Wrong answer, try again.
        </small>

    </div>
</div>

        <!-- BUTTON -->
        <div class="flex justify-center pt-2">
            <button type="submit"
                class="bg-gradient-to-r from-orange-500 to-yellow-400 text-white px-8 py-3 rounded-2xl font-semibold shadow-md hover:scale-105 transition">
                Send Message
            </button>
        </div>
       </div>

    </div>
</form>