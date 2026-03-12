<header
    class="sticky top-0 z-50 py-[20px] bg-[var(--bg)] border-b border-[var(--border)] shadow-sm transition-colors duration-300">
    <div class=" max-h-[60px] mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between gap-6">

        <a href="/" class="shrink-0">
            <x-application-logo class="h-[60px]" />
        </a>

        <nav class="flex items-center gap-3 ">
            <form action="/products" method="GET" aria-label="Search"
                class="flex-1 max-w-md hidden sm:flex items-center gap-2
                     bg-[var(--input-bg)] border border-black dark:border-white
                     rounded-full px-4 py-1.5 focus-within:ring-2 focus-within:ring-[var(--secondary)] transition">
                <input type="search" name="name" placeholder="Search products..."
                    class="bg-transparent flex-1 text-sm text-black dark:text-white placeholder-black dark:placeholder-white
                          outline-none min-w-0 border-none use focus-visible:ring-0 ">
                <button title="Search" aria-label="Search"
                    class="p-2 rounded-full hover:bg-green-400/20 transition"></a>
                    <svg class="w-4 h-4 text-black dark:text-white shrink-0" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24" aria-label="Search">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-4.35-4.35M17 11A6 6 0 1 1 5 11a6 6 0 0 1 12 0z" />
                    </svg>
                </button>
            </form>

            <a href="" class="sm:hidden p-2 rounded-full hover:bg-green-400/20 transition" title="Search"
                aria-label="Search">
                <svg class="w-5 h-5 text-black dark:text-white" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-4.35-4.35M17 11A6 6 0 1 1 5 11a6 6 0 0 1 12 0z" />
                </svg>
            </a>

            <a href="/products" title="Shop" aria-label="Shop"
                class="p-2 rounded-full hover:bg-green-400/20 transition">
                <svg class="w-5 h-5 text-black dark:text-white" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9m12-9l2 9M9 21h6" />
                </svg>
            </a>

            <a href="/cart" title="Cart" aria-label="Cart"
                class="p-2 rounded-full hover:bg-green-400/20 transition">
                <svg class="w-5 h-5 text-black dark:text-white" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4zM3 6h18M16 10a4 4 0 01-8 0" />
                </svg>
            </a>

            @if (auth()->user() === null)
                <a href="/login" title="My Account" aria-label="My Account"
                    class="p-2 rounded-full hover:bg-green-400/20 transition">
                    <svg class="w-5 h-5 text-black dark:text-white" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2M12 11a4 4 0 100-8 4 4 0 000 8z" />
                    </svg>
                </a>
            @else
                {{-- User dropdown (Alpine.js) --}}
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" @keydown.escape="open = false"
                        class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-[var(--secondary)] hover:bg-[var(--light-green-button)] text-white text-sm font-medium transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2M12 11a4 4 0 100-8 4 4 0 000 8z" />
                        </svg>
                        <span class="hidden sm:inline">{{ Auth::user()->name }}</span>
                        <svg class="w-3 h-3 transition-transform duration-200" :class="open ? 'rotate-180' : ''"
                            fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div x-show="open" x-transition:enter="transition ease-out duration-150"
                        x-transition:enter-start="opacity-0 scale-95 -translate-y-1"
                        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-100"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                        @click.outside="open = false"
                        class="absolute right-0 mt-2 w-52 bg-[var(--secondary)] rounded-xl shadow-lg
                                ring-1 ring-black/10 overflow-hidden origin-top-right z-50"
                        style="display: none;">

                        <div class="px-4 py-3 border-b border-[var(--light-green-button)]">
                            <p class="text-white font-semibold text-sm">{{ Auth::user()->name }}</p>
                        </div>

                        <a href="/portal"
                            class="flex items-center gap-2 px-4 py-2.5 text-sm text-white hover:bg-[var(--light-green-button)] transition">
                            Dashboard
                        </a>
                        <a href="/dashboard/orders"
                            class="flex items-center gap-2 px-4 py-2.5 text-sm text-white hover:bg-[var(--light-green-button)] transition">
                            My Orders
                        </a>
                        <a href="/dashboard/addresses"
                            class="flex items-center gap-2 px-4 py-2.5 text-sm text-white hover:bg-[var(--light-green-button)] transition">
                            My Addresses
                        </a>
                        <a href="/dashboard/profile"
                            class="flex items-center gap-2 px-4 py-2.5 text-sm text-white hover:bg-[var(--light-green-button)] transition">
                            My Profile
                        </a>

                        <div class="border-t border-[var(--light-green-button)]">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="w-full text-left px-4 py-2.5 text-sm text-white hover:bg-[var(--light-green-button)] transition">
                                    Log Out
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endif

            {{-- Dark mode toggle --}}
            <button type="button" x-data="{ theme: Theme.get() }"
                class="relative overflow-hidden flex items-center justify-center w-9 h-9 rounded-full hover:bg-green-400/20 transition-colors text-black dark:text-white"
                @click="theme = theme === 'light' ? 'dark' : 'light'; Theme.set(theme);" title="Toggle Theme" aria-label="Toggle Theme">

                {{-- Sun --}}
                <svg id="icon-sun" class="absolute w-5 h-5 transition-transform duration-500 ease-in-out"
                    :class="theme === 'light' ? 'translate-y-0' : 'translate-y-10'" fill="none"
                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" >
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707 M17.657 17.657l-.707-.707M6.343 6.343l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z" />
                </svg>

                {{-- Moon --}}
                <svg id="icon-moon" class="absolute w-5 h-5 transition-transform duration-500 ease-in-out"
                    :class="theme === 'dark' ? 'translate-y-0' : 'translate-y-10'" fill="none"
                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
                </svg>
            </button>
        </nav>
    </div>
</header>
