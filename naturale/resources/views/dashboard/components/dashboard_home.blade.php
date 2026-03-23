
<div class="rounded overflow-hidden">
 
    {{-- Hero --}}
    <div class="relative bg-gradient-to-br from-green-950 via-green-900 to-green-950 overflow-hidden">
 
        {{-- Decorative top border --}}
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-green-400 to-transparent"></div>
 
        <div class="relative max-w-7xl mx-auto px-8 py-24">
            <p class="flex items-center gap-3 uppercase tracking-[0.25em] text-xs text-green-400 font-medium mb-6">
                <span class="inline-block w-6 h-px bg-green-400"></span>
                Your Account
            </p>
 
            <h1 class="font-serif text-5xl lg:text-6xl font-normal text-green-50 leading-tight">
                Welcome back,<br>
                <span class="text-green-400 italic">{{ auth()->user()->name }}.</span>
            </h1>
 
            <p class="mt-3 text-sm text-green-200/50 font-light tracking-wide">{{ auth()->user()->email }}</p>
        </div>
    </div>
 
    {{-- Cards --}}
    <div class="bg-gray-50 border-t border-green-900/10">
        <div class="max-w-7xl mx-auto px-8 py-14">
 
            <p class="uppercase tracking-[0.22em] text-xs text-gray-400 font-medium mb-7">Quick Access</p>
 
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
 
                @foreach ([
                    ['href' => '/dashboard/orders',        'icon' => 'fa-list',             'title' => 'My Orders',          'desc' => 'Track and review your past purchases'],
                    ['href' => '/dashboard/addresses',     'icon' => 'fa-location-dot',     'title' => 'Saved Addresses',    'desc' => 'Manage your delivery locations'],
                    ['href' => '/dashboard/profile',       'icon' => 'fa-circle-user',      'title' => 'My Account',         'desc' => 'Update your personal details and more'],
                    ['href' => '/dashboard/reviews',       'icon' => 'fa-star-half-stroke', 'title' => 'My Reviews',         'desc' => 'See the feedback you\'ve left on products'],
                    ['href' => '/dashboard/subscription', 'icon' => 'fa-sack-dollar',      'title' => 'My Subscriptions',   'desc' => 'Manage your recurring product deliveries'],
                ] as $card)
                    <a href="{{ $card['href'] }}" class="group relative bg-white border border-gray-200 rounded-xl p-6 overflow-hidden hover:-translate-y-1 hover:shadow-lg hover:shadow-green-900/10 hover:border-green-200 transition-all duration-200">
 
                        {{-- Top accent bar --}}
                        <div class="absolute top-0 left-0 right-0 h-0.5 bg-gradient-to-r from-green-600 to-green-400 scale-x-0 group-hover:scale-x-100 origin-left transition-transform duration-300"></div>
 
                        <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-green-50 border border-green-100 text-green-700 text-sm mb-5 group-hover:bg-green-100 group-hover:border-green-200 transition-colors duration-200">
                            <i class="fa-solid {{ $card['icon'] }}"></i>
                        </div>
 
                        <h3 class="text-sm font-semibold text-gray-900">{{ $card['title'] }}</h3>
                        <p class="text-xs text-gray-400 font-light mt-1 leading-relaxed">{{ $card['desc'] }}</p>
 
                        <span class="inline-flex items-center gap-1 mt-5 text-xs font-medium text-green-600 tracking-wide group-hover:gap-2 transition-all duration-200">
                            View <span>→</span>
                        </span>
                    </a>
                @endforeach
 
            </div>
        </div>
    </div>
 
</div>