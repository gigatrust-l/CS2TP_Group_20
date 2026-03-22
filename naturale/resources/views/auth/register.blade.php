<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="regname" :value="__('Name')" />
            <x-text-input id="regname" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('regname')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="regemail" :value="__('Email')" />
            <x-text-input id="regemail" class="block mt-1 w-full" type="email" name="regemail" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('regemail')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="regpassword" :value="__('Password')" />

            <x-text-input id="regpassword" class="block mt-1 w-full"
                            type="password"
                            name="regpassword"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('regpassword')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="regpassword_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="regpassword_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="regpassword_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('regpassword_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-green-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" href="{{ route('login') }}">
            		{{ __('Already registered?') }}
            </a>

            <x-green-button class="ms-4">
                {{ __('Register') }}
            </x-green-button>
        </div>
    </form>
</x-guest-layout>
