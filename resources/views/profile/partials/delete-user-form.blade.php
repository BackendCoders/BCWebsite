<section class="mx-auto max-w-3xl overflow-hidden rounded-[2rem] border border-rose-200/70 bg-white shadow-2xl shadow-slate-200/50">
    <div class="border-b border-rose-200/70 bg-gradient-to-r from-rose-100 via-white to-orange-50 px-6 py-6 sm:px-8">
        <p class="text-xs font-bold uppercase tracking-[0.35em] text-rose-600">Danger Zone</p>
        <h2 class="mt-2 text-2xl font-bold text-slate-900">
            {{ __('Delete Account') }}
        </h2>
        <p class="mt-1 text-sm text-slate-500">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </div>

    <div class="px-6 py-6 sm:px-8">
        <div class="rounded-2xl border border-rose-200 bg-rose-50 px-4 py-4">
            <p class="text-sm font-semibold text-rose-700">
                {{ __('Deleting your account is permanent and cannot be undone.') }}
            </p>
            <p class="mt-1 text-sm text-rose-600/90">
                {{ __('Please make sure you have downloaded anything you want to keep before continuing.') }}
            </p>
        </div>

        <div class="mt-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <button
                type="button"
                x-data=""
                x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                class="inline-flex items-center justify-center rounded-2xl bg-rose-600 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-rose-200 transition hover:bg-rose-700"
            >
                {{ __('Delete Account') }}
            </button>

            <p class="text-sm text-slate-500">
                {{ __('You will be asked to confirm your password before the account is removed.') }}
            </p>
        </div>
    </div>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6 sm:p-8">
            @csrf
            @method('delete')

            <div class="rounded-3xl border border-rose-200/70 bg-white p-6 shadow-xl shadow-slate-200/50">
                <p class="text-xs font-bold uppercase tracking-[0.35em] text-rose-600">
                    {{ __('Confirm Deletion') }}
                </p>
                <h3 class="mt-2 text-xl font-bold text-slate-900">
                    {{ __('Are you sure you want to delete your account?') }}
                </h3>
                <p class="mt-2 text-sm text-slate-500">
                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                </p>

                <div class="mt-6">
                    <x-input-label for="password" :value="__('Password')" class="mb-2 block text-sm font-semibold text-slate-700" />

                    <x-text-input
                        id="password"
                        name="password"
                        type="password"
                        class="block w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-rose-500 focus:bg-white focus:ring-4 focus:ring-rose-100"
                        placeholder="{{ __('Password') }}"
                    />

                    <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                </div>

                <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:justify-end">
                    <button
                        type="button"
                        x-on:click="$dispatch('close')"
                        class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:border-slate-300 hover:bg-slate-50"
                    >
                        {{ __('Cancel') }}
                    </button>

                    <button
                        type="submit"
                        class="inline-flex items-center justify-center rounded-2xl bg-rose-600 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-rose-200 transition hover:bg-rose-700"
                    >
                        {{ __('Delete Account') }}
                    </button>
                </div>
            </div>
        </form>
    </x-modal>
</section>
