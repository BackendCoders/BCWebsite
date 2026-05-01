<section class="mx-auto max-w-3xl overflow-hidden rounded-[2rem] border border-slate-200/70 bg-white shadow-2xl shadow-slate-200/50">
    <div class="border-b border-slate-200/70 bg-gradient-to-r from-[#FD5528]/10 via-white to-orange-50 px-6 py-6 sm:px-8">
        <p class="text-xs font-bold uppercase tracking-[0.35em] text-[#FD5528]">Profile</p>
        <h2 class="mt-2 text-2xl font-bold text-slate-900">Profile Information</h2>
        <p class="mt-1 text-sm text-slate-500">
            Update your account details and email address.
        </p>
    </div>

    <!-- Verification Form -->
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <!-- Main Form -->
    <div class="px-6 py-6 sm:px-8">
        <form method="post" action="{{ route('profile.update') }}" class="space-y-6">
            @csrf
            @method('patch')

            <div class="grid gap-6">
                <div>
                    <label for="name" class="mb-2 block text-sm font-semibold text-slate-700">
                        Name
                    </label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        value="{{ old('name', $user->name) }}"
                        class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:bg-white focus:ring-4 focus:ring-[#FD5528]/10"
                        required
                        autofocus
                    />

                    @error('name')
                        <p class="mt-2 text-sm font-medium text-rose-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="mb-2 block text-sm font-semibold text-slate-700">
                        Email
                    </label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        value="{{ old('email', $user->email) }}"
                        class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:bg-white focus:ring-4 focus:ring-[#FD5528]/10"
                        required
                    />

                    @error('email')
                        <p class="mt-2 text-sm font-medium text-rose-600">{{ $message }}</p>
                    @enderror

                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                        <div class="mt-4 rounded-2xl border border-amber-200 bg-amber-50 px-4 py-4">
                            <p class="text-sm font-semibold text-amber-800">
                                Your email is not verified.
                            </p>

                            <button
                                form="send-verification"
                                class="mt-3 text-sm font-semibold text-[#FD5528] transition hover:text-[#e94c20] hover:underline"
                            >
                                Resend verification email
                            </button>

                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 text-sm font-medium text-emerald-600">
                                    Verification link sent successfully.
                                </p>
                            @endif
                        </div>
                    @endif
                </div>
            </div>

            <div class="flex flex-col gap-4 border-t border-slate-200 pt-6 sm:flex-row sm:items-center sm:justify-between">
                <button
                    type="submit"
                    class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20]"
                >
                    Save Changes
                </button>

                @if (session('status') === 'profile-updated')
                    <span
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm font-semibold text-emerald-600"
                    >
                        Saved successfully
                    </span>
                @endif
            </div>
        </form>
    </div>
</section>
