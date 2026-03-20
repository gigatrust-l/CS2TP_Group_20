<section class="space-y-6">
    <header>
        <h2 class="text-lg font-semibold" style="color: var(--text);">
            {{ __('Delete Account') }}
        </h2>
        <p class="mt-1 text-sm" style="color: var(--muted);">
            {{ __('Once your account is deleted, all data will be permanently removed.') }}
        </p>
    </header>
    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="bg-red-600 hover:bg-red-700 text-white">
        {{ __('Delete Account') }}
    </x-danger-button>
    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6 space-y-6"
            style="background-color: var(--page);">
            @csrf
            @method('delete')
            <h2 class="text-lg font-semibold" style="color: var(--text);">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>
            <p class="text-sm" style="color: var(--muted);">
                {{ __('Enter your password to confirm deletion.') }}
            </p>
            <div>
                <x-input-label for="password" value="Password" />
                <x-text-input id="password" name="password" type="password"
                    class="mt-1 block w-3/4 focus:border-green-500 focus:ring-green-500"
                    style="background-color: var(--page); border-color: var(--border); color: var(--text);"
                    placeholder="Password" />
                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>
            <div class="flex justify-end gap-3">
                <x-secondary-button style="border-color: var(--border); color: var(--text);">
                    {{ __('Cancel') }}
                </x-secondary-button>
                <x-danger-button class="bg-red-600 hover:bg-red-700 text-white">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>