<nav x-data="{ open: false }" class="bg-page border-b border-brand-border transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="{{ Auth::user()->isAdmin() ? route('portal') : route('index') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-brand-text" />
                    </a>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6 space-x-6">
                <i class="fa-solid fa-magnifying-glass cursor-pointer text-lg text-brand-text hover:text-brand-bg transition-colors"></i>

                <i class="fa-solid fa-shop cursor-pointer text-lg text-brand-text hover:text-brand-bg transition-colors"></i>

                <button id="theme-toggle" type="button" class="relative w-10 h-10 flex items-center justify-center rounded-lg hover:bg-brand-bg/20 transition-all focus:outline-none">
                    <i id="theme-toggle-dark-icon" class="fa-solid fa-moon text-xl"></i>
                    <i id="theme-toggle-light-icon" class="fa-solid fa-sun text-xl hidden"></i>
                </button>

                @if(Auth::user()->isAdmin())
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="px-4 py-2 bg-red-600 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 transition">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                @else
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-brand-bg hover:opacity-90 transition">
                                <div>{{ Auth::user()->name }}</div>
                                <i class="fa-solid fa-chevron-down ms-2 text-xs"></i>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link href="/dashboard/orders">{{ __('My Orders') }}</x-dropdown-link>
                            <x-dropdown-link href="/dashboard/profile">{{ __('My Profile') }}</x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @endif
            </div>

            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-brand-text hover:bg-brand-bg/20 focus:outline-none transition">
                    <i :class="{'hidden': open, 'inline-block': ! open }" class="fa-solid fa-bars text-xl"></i>
                    <i :class="{'hidden': ! open, 'inline-block': open }" class="fa-solid fa-xmark text-xl hidden"></i>
                </button>
            </div>
        </div>
    </div>
</nav>