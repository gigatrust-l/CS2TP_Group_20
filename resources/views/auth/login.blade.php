<x-guest-layout>
    <!-- Logo -->
    <div class="flex justify-center mb-6">
        <img src="{{ asset('images/naturvale-logo.png') }}" alt="Naturvale Logo" class="w-24 h-24">
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-green-800" />
            <x-text-input id="email" class="block mt-1 w-full border-green-300 focus:ring-green-500 focus:border-green-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-green-600" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-green-800" />
            <x-text-input id="password" class="block mt-1 w-full border-green-300 focus:ring-green-500 focus:border-green-500" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-green-600" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-green-300 text-green-600 shadow-sm focus:ring-green-500" name="remember">
                <span class="ms-2 text-sm text-green-700">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mt-4 space-y-2 sm:space-y-0">
            <a class="underline text-sm text-green-700 hover:text-green-900" href="{{ route('register') }}">
                {{ __('New Customer? Sign Up') }}
            </a>

            @if (Route::has('password.request'))
                <a class="underline text-sm text-green-700 hover:text-green-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3 bg-green-700 hover:bg-green-800 focus:ring-green-500">
                {{ __('Log in') }}
            </x-primarybutton>
        </div>
    </form>
</x-guest-layout>
