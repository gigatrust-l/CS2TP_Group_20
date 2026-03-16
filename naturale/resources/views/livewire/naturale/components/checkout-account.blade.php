    <div class="max-w-5xl mx-auto px-4 py-12">
 
        <p class="text-xs uppercase tracking-widest text-[var(--footer-link-hover)] mb-2">Checkout</p>
        <h1 class="text-3xl font-semibold mb-1">How would you like to continue?</h1>
        <div class="w-12 h-px bg-[var(--footer-link-hover)] opacity-40 mb-8"></div>
 
        <div class="grid grid-cols-12 gap-8">
 
            <div class="col-span-12 md:col-span-6">
                <div class="bg-white dark:bg-[var(--page)] dark:shadow-lg border-[#e5e7eb]  shadow-white shadow-sm sm:rounded-lg border p-8 h-full flex flex-col">
 
                    <h2 class="text-2xl font-semibold mb-3">Guest Checkout</h2>
 
                    <p class="mb-6 text-[var(--footer-link-hover)]">
                        You can check out without creating an account.
                        If you make an order after checking out, the order cannot be added to an account.
                    </p>
 
                    <ul class="space-y-2 mb-8 text-sm text-[var(--footer-link-hover)]">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            No account required
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            Fast &amp; simple process
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6.96967 16.4697C6.67678 16.7626 6.67678 17.2374 6.96967 17.5303C7.26256 17.8232 7.73744 17.8232 8.03033 17.5303L6.96967 16.4697ZM13.0303 12.5303C13.3232 12.2374 13.3232 11.7626 13.0303 11.4697C12.7374 11.1768 12.2626 11.1768 11.9697 11.4697L13.0303 12.5303ZM11.9697 11.4697C11.6768 11.7626 11.6768 12.2374 11.9697 12.5303C12.2626 12.8232 12.7374 12.8232 13.0303 12.5303L11.9697 11.4697ZM18.0303 7.53033C18.3232 7.23744 18.3232 6.76256 18.0303 6.46967C17.7374 6.17678 17.2626 6.17678 16.9697 6.46967L18.0303 7.53033ZM13.0303 11.4697C12.7374 11.1768 12.2626 11.1768 11.9697 11.4697C11.6768 11.7626 11.6768 12.2374 11.9697 12.5303L13.0303 11.4697ZM16.9697 17.5303C17.2626 17.8232 17.7374 17.8232 18.0303 17.5303C18.3232 17.2374 18.3232 16.7626 18.0303 16.4697L16.9697 17.5303ZM11.9697 12.5303C12.2626 12.8232 12.7374 12.8232 13.0303 12.5303C13.3232 12.2374 13.3232 11.7626 13.0303 11.4697L11.9697 12.5303ZM8.03033 6.46967C7.73744 6.17678 7.26256 6.17678 6.96967 6.46967C6.67678 6.76256 6.67678 7.23744 6.96967 7.53033L8.03033 6.46967ZM8.03033 17.5303L13.0303 12.5303L11.9697 11.4697L6.96967 16.4697L8.03033 17.5303ZM13.0303 12.5303L18.0303 7.53033L16.9697 6.46967L11.9697 11.4697L13.0303 12.5303ZM11.9697 12.5303L16.9697 17.5303L18.0303 16.4697L13.0303 11.4697L11.9697 12.5303ZM13.0303 11.4697L8.03033 6.46967L6.96967 7.53033L11.9697 12.5303L13.0303 11.4697Z"/>
                            </svg>
                            You cannot save your order after checkout
                        </li>
                    </ul>
 
                    <div class="mt-auto">
                        <a href=""
                           class="inline-flex items-center justify-center gap-2 w-full py-3 px-6 bg-gray-800 text-white text-sm font-semibold rounded hover:bg-gray-700 transition-colors duration-200">
                            Continue as Guest
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
 
                </div>
            </div>
 
            <div class="col-span-12 md:col-span-6">
                <div class="bg-white dark:bg-[var(--page)] dark:shadow-lg border-[#e5e7eb]  shadow-white shadow-sm sm:rounded-lg border p-8 h-full flex flex-col ">
 
                    <h2 class="text-2xl font-semibold mb-1">Have an Account? Login</h2>
                    <p class="text-sm text-[var(--footer-link-hover)] mb-6">
                        Sign in to access your saved addresses, orders &amp; rewards.
                    </p>

                    @if (Route::has('login'))
                        <div class=""">
                            @livewire('pages.auth.login')
                        </div>
 
                    @endif
 
                </div>
            </div>
 
        </div>
 
    </div>