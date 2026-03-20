<x-app-layout>

    <button type="button" 
        class="theme-toggle-btn group flex items-center justify-center w-12 h-12 rounded-full shadow-lg border transition-all cursor-pointer"
        style="position: fixed; top: 1.5rem; right: 1.5rem; z-index: 100; border-color: var(--border); background-color: var(--bg);">
        
        <div class="absolute inset-0 rounded-full opacity-0 group-hover:opacity-100 transition-opacity" 
             style="background-color: var(--lightGreenButton);"></div>

        <i id="theme-toggle-dark-icon" class="fa-solid fa-moon text-xl relative z-10" style="color: white;"></i>
        <i id="theme-toggle-light-icon" class="fa-solid fa-sun text-xl relative z-10" style="color: white;"></i>
    </button>

    @php
        $view = request()->query('view', 'stock');
    @endphp

    <style>
        .dashboard-wrapper {
            background-color: var(--page);
            min-height: 100vh;
        }
        .dashboard-wrapper h3,
        .dashboard-wrapper th,
        .dashboard-wrapper td {
            color: var(--text);
        }
    </style>

    <div class="dashboard-wrapper py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-lg shadow-sm">
                    {{ session('success') }}
                </div>
            @endif

            @if(isset($products))
                @include('dashboard/components/dashboard_products')
            @elseif(isset($orders))
                @include('dashboard/components/dashboard_orders')
            @elseif(isset($user))
                @include('dashboard/components/dashboard_profile')
            @elseif(isset($addresses))
                @include('dashboard/components/dashboard_addresses')
            @elseif(isset($order))
                @include('dashboard/components/dashboard_order')
            @elseif(isset($address))
                @include('dashboard/components/dashboard_address')
            @else
                @include('dashboard/components/dashboard_home')
            @endif
        </div>
    </div>
</x-app-layout>