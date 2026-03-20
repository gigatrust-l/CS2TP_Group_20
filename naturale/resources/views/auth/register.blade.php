<x-guest-layout>
    <button type="button" 
        class="theme-toggle-btn group flex items-center justify-center w-12 h-12 rounded-full shadow-lg border transition-all cursor-pointer"
        style="position: fixed; top: 1.5rem; right: 1.5rem; z-index: 100; border-color: var(--border); background-color: var(--bg);">
        
        <div class="absolute inset-0 rounded-full opacity-0 group-hover:opacity-100 transition-opacity" 
             style="background-color: var(--lightGreenButton);"></div>

        <i id="theme-toggle-dark-icon" class="fa-solid fa-moon text-xl relative z-10" style="color: white;"></i>
        <i id="theme-toggle-light-icon" class="fa-solid fa-sun text-xl relative z-10" style="color: white;"></i>
    </button>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Name')" style="color: var(--text);" />
            <x-text-input id="name" 
                class="block mt-1 w-full border-[var(--border)] focus:ring-[var(--bg)] dark:bg-[var(--surface)] dark:text-[var(--text)]" 
                style="background-color: var(--page);"
                type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" style="color: var(--text);" />
            <x-text-input id="email" 
                class="block mt-1 w-full border-[var(--border)] focus:ring-[var(--bg)] dark:bg-[var(--surface)] dark:text-[var(--text)]" 
                style="background-color: var(--page);"
                type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" style="color: var(--text);" />
            <x-text-input id="password" 
                class="block mt-1 w-full border-[var(--border)] focus:ring-[var(--bg)] dark:bg-[var(--surface)] dark:text-[var(--text)]" 
                style="background-color: var(--page);"
                type="password"
                name="password"
                required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" style="color: var(--text);" />
            <x-text-input id="password_confirmation" 
                class="block mt-1 w-full border-[var(--border)] focus:ring-[var(--bg)] dark:bg-[var(--surface)] dark:text-[var(--text)]" 
                style="background-color: var(--page);"
                type="password"
                name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-6">
            <a class="underline text-sm transition-colors rounded-md focus:outline-none" 
               style="color: var(--text); --hover-color: var(--page);" 
               onmouseover="this.style.color='var(--page)'" 
               onmouseout="this.style.color='var(--test)'"
               href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <button type="submit" 
                class="ms-4 inline-flex items-center px-4 py-2 text-[var(--page)] text-xs font-semibold uppercase tracking-widest rounded-md transition-all border border-[var(--border)] hover:opacity-90"
                style="background-color: var(--primary);">
                {{ __('Register') }}
            </button>
        </div>
    </form>
</x-guest-layout>