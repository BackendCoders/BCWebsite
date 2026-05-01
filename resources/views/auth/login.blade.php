<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="min-h-auto flex items-center justify-center bg-gradient-to-br from-orange-100 via-white to-orange-200 px-4">

    <div class="w-full max-w-md bg-white/90 backdrop-blur-xl border border-gray-200  p-8">

    <div class="bg-black p-6 ">
    <img src="{{asset('assets/images/bc_bg.png')}}" alt="" class="w-80 h-10">
</div>

        <!-- 🔥 Heading -->
        <div class="text-center my-6 ">
            <h2 class="text-3xl font-bold text-gray-800">Welcome</h2>
            <p class="text-sm text-gray-500 mt-1">Login to your dashboard</p>
        </div>

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <!-- Email -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="text-gray-700 font-medium" />

                <div class="relative mt-1">
                    <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                        <img src="https://img.icons8.com/?size=100&id=6H65NWsqha0Z&format=png&color=FA5252" alt="" class="w-6 h-6">
                    </span>

                    <x-text-input id="email"
                        class="block w-full pl-10 pr-3 py-2 rounded-lg border border-gray-300 focus:border-[#FD5528] focus:ring-2 focus:ring-[#FD5528]/20 transition"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required autofocus autocomplete="username" />
                </div>

                <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" class="text-gray-700 font-medium" />

                <div class="relative mt-1">
                    <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                        <img src="https://img.icons8.com/?size=100&id=6d4zGwJig4xF&format=png&color=FA5252" alt="" class="w-6 h-6">
                    </span>

                    <x-text-input id="password"
                        class="block w-full pl-10 pr-3 py-2 rounded-lg border border-gray-300 focus:border-[#FD5528] focus:ring-2 focus:ring-[#FD5528]/20 transition"
                        type="password"
                        name="password"
                        required autocomplete="current-password" />
                </div>

                <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm" />
            </div>

            <!-- Remember + Forgot -->
            <div class="flex items-center justify-between">
                <label for="remember_me" class="inline-flex items-center gap-2 text-sm text-gray-600">
                    <input id="remember_me"
                        type="checkbox"
                        class="rounded border-gray-300 text-[#FD5528] shadow-sm focus:ring-[#FD5528]"
                        name="remember">
                    Remember me
                </label>

                @if (Route::has('password.request'))
                    <a class="text-sm text-[#FD5528] hover:underline" href="{{ route('password.request') }}">
                        Forgot password?
                    </a>
                @endif
            </div>

            <!-- Button -->
            <div>
                <button
                    class="w-full justify-center py-2.5 text-base bg-gradient-to-r from-[#FD5528] to-[#fbb03b] hover:from-[#fbb03b] hover:to-[#FD5528] hover:scale-110 transition-all shadow-lg shadow-[#FD5528]/30">
                    {{ __('Log in') }}
                </button>
            </div>

        </form>

        <!-- Footer -->
        <p class="text-center text-xs text-gray-400 mt-6">
            © {{ date('Y') }} Backend Coders India. All rights reserved.
        </p>

    </div>

</div>

    <!-- <form method="POST" action="{{ route('login') }}"> -->
        @csrf

        <!-- Email Address -->
        <!-- <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div> -->

        <!-- Password -->
        <!-- <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div> -->

        <!-- Remember Me -->
        <!-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div> -->

        <!-- <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div> -->
    <!-- </form> -->
</x-guest-layout>
