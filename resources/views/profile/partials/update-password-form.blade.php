<section class="mx-auto max-w-3xl overflow-hidden rounded-[2rem] border border-slate-200/70 bg-white shadow-2xl shadow-slate-200/50">
    <div class="border-b border-slate-200/70 bg-gradient-to-r from-[#FD5528]/10 via-white to-orange-50 px-6 py-6 sm:px-8">
        <p class="text-xs font-bold uppercase tracking-[0.35em] text-[#FD5528]">Security</p>
        <h2 class="mt-2 text-2xl font-bold text-slate-900">
            {{ __('Update Password') }}
        </h2>
        <p class="mt-1 text-sm text-slate-500">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </div>

    <div class="px-6 py-6 sm:px-8">
        <form method="post" action="{{ route('password.update') }}" class="space-y-6">
            @csrf
            @method('put')

            <div>
                <x-input-label
                    for="update_password_current_password"
                    :value="__('Current Password')"
                    class="mb-2 block text-sm font-semibold text-slate-700"
                />
                <x-text-input
                    id="update_password_current_password"
                    name="current_password"
                    type="password"
                    class="block w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:bg-white focus:ring-4 focus:ring-[#FD5528]/10"
                    autocomplete="current-password"
                />
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            </div>

            <div>
                <x-input-label
                    for="update_password_password"
                    :value="__('New Password')"
                    class="mb-2 block text-sm font-semibold text-slate-700"
                />
                <x-text-input
                    id="update_password_password"
                    name="password"
                    type="password"
                    class="block w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:bg-white focus:ring-4 focus:ring-[#FD5528]/10"
                    autocomplete="new-password"
                />
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>

            <div>
                <x-input-label
                    for="update_password_password_confirmation"
                    :value="__('Confirm Password')"
                    class="mb-2 block text-sm font-semibold text-slate-700"
                />
                <x-text-input
                    id="update_password_password_confirmation"
                    name="password_confirmation"
                    type="password"
                    class="block w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:bg-white focus:ring-4 focus:ring-[#FD5528]/10"
                    autocomplete="new-password"
                />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex flex-col gap-4 border-t border-slate-200 pt-6 sm:flex-row sm:items-center sm:justify-between">
                <x-primary-button class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20]">
                    {{ __('Save Changes') }}
                </x-primary-button>

                @if (session('status') === 'password-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm font-semibold text-emerald-600"
                    >
                        {{ __('Saved successfully.') }}
                    </p>
                @endif
            </div>
        </form>
    </div>
</section>
