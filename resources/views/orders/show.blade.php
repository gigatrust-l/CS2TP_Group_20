<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Order Details') }} #{{ $order->oid }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <!-- Order Basic Info -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Order Information</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <span class="font-semibold">Order ID:</span> {{ $order->oid }}
                        </div>
                        <div>
                            <span class="font-semibold">Price:</span> £{{ number_format($order->o_price, 2) }}
                        </div>
                        <div>
                            <span class="font-semibold">Status:</span> 
                            @php
                                $statusColor = match($order->o_status) {
                                    'Complete' => 'bg-green-100 text-green-800',
                                    'Processing' => 'bg-yellow-100 text-yellow-800',
                                    'Cancelled' => 'bg-red-100 text-red-800',
                                    default => 'bg-gray-100 text-gray-800',
                                };
                            @endphp
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $statusColor }}">
                                {{ $order->o_status }}
                            </span>
                        </div>
                        <div>
                            <span class="font-semibold">Address:</span> {{ $order->o_address }}
                        </div>
                    </div>
                </div>

                <!-- Order Items (if you have them) -->
                @if(isset($order->items) && $order->items->count())
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-700 mb-2">Items</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-green-600">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Product</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Quantity</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Price</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-green-400 divide-y divide-gray-200">
                                    @foreach($order->items as $item)
                                        <tr class="hover:bg-green-300 transition-colors">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white ">{{ $item->product->p_name ?? 'Unknown Product' }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white ">{{ $item->oi_quantity }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white ">£{{ number_format($item->oi_ind_price, 2) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif

                <!-- Back Button -->
                <a href="{{ route('orders') }}" class="inline-block mt-4 bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md transition-colors">
                    Back to Orders
                </a>

            </div>
        </div>
    </div>
</x-app-layout>
