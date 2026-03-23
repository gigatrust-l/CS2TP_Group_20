<x-app-layout>
    {{-- Removed x-slot:header entirely to clean up the space under the navbar --}}

    {{-- We use a URL parameter called 'view' to switch between pages --}}
    @php
        $view = request()->query('view', 'stock');
    @endphp

    <style>
        .min-h-screen {
            background-color: #f9fafb !important;
        }

        body,
        h3,
        th,
        td {
            color: #111827 !important;
        }
    </style>

    <div class="py-12 min-h-screen">
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

            @elseif(isset($reviews))

            @include('dashboard/components/dashboard_reviews')

            @elseif(isset($review))

            @include('dashboard/components/dashboard_review')

            @elseif(isset($order))

            @include('dashboard/components/dashboard_order')

            @elseif(isset($subscription))

            @include('dashboard/components/dashboard_subscribe')


            @elseif(isset($address))

            @include('dashboard/components/dashboard_address')

            @else
            @include('dashboard/components/dashboard_home')
            @endif

        </div>
    </div>

</x-app-layout>