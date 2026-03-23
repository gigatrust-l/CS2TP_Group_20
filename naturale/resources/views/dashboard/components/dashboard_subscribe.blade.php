<div class="max-w-2xl mx-auto py-10 px-4">

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-800">Delivery Subscription</h1>
        <p class="text-sm text-gray-400 mt-1">Unlimited free delivery on all your orders</p>
    </div>
    @if (session('success'))
        <div class="mb-6 flex items-center gap-2 bg-green-50 border border-green-200 text-green-700 text-sm px-4 py-3 rounded-lg">
            <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
            </svg>
            {{ session('success') }}
        </div>
    @endif
    <div class="bg-white border border-gray-100 rounded-xl shadow-sm overflow-hidden">

        @if (auth()->user()->subscribed)
            <div class="bg-green-600 px-6 py-2 flex items-center gap-2">
                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <span class="text-white text-xs font-semibold tracking-wide uppercase">Active Subscription</span>
            </div>
        @endif

        <div class="px-6 py-6 border-b border-gray-100">
            <div class="flex items-start justify-between">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-lg font-bold text-gray-800">Free Delivery Pass</h2>
                        <p class="text-xs text-gray-400 mt-0.5">Billed monthly &middot; Cancel anytime</p>
                    </div>
                </div>
                <div class="text-right">
                    <div class="flex items-end gap-1">
                        <span class="text-3xl font-bold text-gray-800">£12.99</span>
                        <span class="text-sm text-gray-400 mb-1">/mo</span>
                    </div>
                    <p class="text-xs text-green-600 font-medium">Save on every order</p>
                </div>
            </div>
        </div>

        <div class="px-6 py-5">
            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wide mb-3">What's included</p>
            <ul class="space-y-3">
                @foreach ([
                    ['icon' => 'truck',    'text' => 'Free delivery on every order, every time'],
                    ['icon' => 'lightning','text' => 'Priority dispatch — your orders ship first'],
                    ['icon' => 'bell',     'text' => 'Real-time tracking and delivery alerts'],
                    ['icon' => 'refresh',  'text' => 'Free returns on all eligible items'],
                ] as $feature)
                <li class="flex items-center gap-3">
                    <div class="w-7 h-7 rounded-lg {{ auth()->user()->subscribed ? 'bg-green-50' : 'bg-gray-50' }} flex items-center justify-center shrink-0">
                        @if ($feature['icon'] === 'truck')
                            <svg class="w-3.5 h-3.5 {{ auth()->user()->subscribed ? 'text-green-600' : 'text-gray-400' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10l2 0m8 0H9m4 0h2m2-10h1l3 5v5h-2"/>
                            </svg>
                        @elseif ($feature['icon'] === 'lightning')
                            <svg class="w-3.5 h-3.5 {{ auth()->user()->subscribed ? 'text-green-600' : 'text-gray-400' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        @elseif ($feature['icon'] === 'bell')
                            <svg class="w-3.5 h-3.5 {{ auth()->user()->subscribed ? 'text-green-600' : 'text-gray-400' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                            </svg>
                        @else
                            <svg class="w-3.5 h-3.5 {{ auth()->user()->subscribed ? 'text-green-600' : 'text-gray-400' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                            </svg>
                        @endif
                    </div>
                    <span class="text-sm {{ auth()->user()->subscribed ? 'text-gray-700' : 'text-gray-400' }}">
                        {{ $feature['text'] }}
                    </span>
                </li>
                @endforeach
            </ul>
        </div>

        <div class="mx-6 border-t border-gray-50"></div>

        <div class="px-6 py-5 bg-gray-50 flex items-center justify-between gap-4">
            @if (auth()->user()->subscribed)
                <div>
                    <p class="text-sm font-medium text-gray-700">You're saving on every delivery</p>
                    <p class="text-xs text-gray-400 mt-0.5">Your subscription renews monthly at £12.99</p>
                </div>
                <form action="{{ route('dashboard.subscription.toggle') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="bg-white hover:bg-red-50 text-red-500 border border-red-200 hover:border-red-300 px-4 py-2 rounded-md text-sm font-medium transition-colors cursor-pointer whitespace-nowrap">
                        Cancel Subscription
                    </button>
                </form>
            @else
                <div>
                    <p class="text-sm font-medium text-gray-700">Start saving on deliveries today</p>
                    <p class="text-xs text-gray-400 mt-0.5">No commitments &mdash; cancel whenever you like</p>
                </div>
                <form action="{{ route('dashboard.subscription.toggle') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-md text-sm font-semibold transition-colors cursor-pointer whitespace-nowrap">
                        Subscribe &mdash; £12.99/mo
                    </button>
                </form>
            @endif
        </div>

    </div>

    <p class="text-center text-xs text-gray-400 mt-4">
        By subscribing you agree to our <a href="#" class="underline hover:text-gray-600">Terms &amp; Conditions</a>.
        You can cancel at any time from this page.
    </p>

</div>