<x-guest-layout>
    <button type="button" 
        class="theme-toggle-btn group flex items-center justify-center w-12 h-12 rounded-full shadow-lg border transition-all cursor-pointer"
        style="position: fixed; top: 1.5rem; right: 1.5rem; z-index: 100; border-color: var(--border); background-color: var(--bg);">
        
        <div class="absolute inset-0 rounded-full opacity-0 group-hover:opacity-100 transition-opacity" 
             style="background-color: var(--lightGreenButton);"></div>

        <i id="theme-toggle-dark-icon" class="fa-solid fa-moon text-xl relative z-10" style="color: white;"></i>
        <i id="theme-toggle-light-icon" class="fa-solid fa-sun text-xl relative z-10" style="color: white;"></i>
    </button>

    <div class="mb-4 text-sm text-[var(--text)] dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-green-button>
                {{ __('Email Password Reset Link') }}
            </x-green-button>
        </div>
    </form>
</x-guest-layout>
