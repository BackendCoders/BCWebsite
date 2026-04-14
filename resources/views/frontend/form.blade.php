<form class="relative space-y-6" method="POST" action="{{ route('contact.send') }}">
             @csrf
          <div class="grid sm:grid-cols-2 gap-4">
            <input type="text" name="first_name" placeholder="First Name"
              class="w-full px-4 py-3 border border-gray-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#FD5528]/40 transition duration-200">

            <input type="text" name="last_name" placeholder="Last Name"
              class="w-full px-4 py-3 border border-gray-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#FD5528]/40 transition duration-200">
          </div>

          <input type="email" name="email" placeholder="Email Address"
            class="w-full px-4 py-3 border border-gray-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#FD5528]/40 transition duration-200">

          <input type="text" name="phone" placeholder="Phone"
            class="w-full px-4 py-3 border border-gray-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#FD5528]/40 transition duration-200">

          <textarea rows="4" name="message" placeholder="Your Message"
            class="w-full px-4 py-3 border border-gray-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#FD5528]/40 transition duration-200"></textarea>

        <div class="relative flex justify-center">
            <button type="submit"
            class="max-w-md bg-gradient-to-r from-[#FD5528] to-[#fbb03b] hover:from-[#fbb03b] hover:to-[#FD5528] hover:scale-110  text-white py-3 px-4 rounded-2xl font-semibold shadow-[0_20px_45px_rgba(253,85,40,0.4)] transition duration-200 hover:shadow-[0_25px_60px_rgba(253,85,40,0.5)]">
            Send Message
          </button>
        </div>

        </form>