<div class="bg-white shadow-sm sm:rounded-lg border border-gray-100">
    <div class="p-8">
        <div class="relative flex w-full">
            <h3 class="text-lg font-bold text-gray-900 mb-6 ml-6 uppercase tracking-wider">Customer Orders</h3>
            <a href="/portal" class="bg-gray-100 text-black px-5 py-2 rounded-lg text-xs font-bold uppercase hover:bg-gray-200 transition duration-150 ease-in-out shadow-sm inset-y-0 right-0 absolute h-8"> &lt;   Back </a>
        </div>
        <table class="w-full text-left">
            <thead>
                <tr class="text-xs font-semibold text-gray-400 uppercase border-b">
                    <th class="py-3 px-4">Order ID</th>
                    <th class="py-3 px-4">Order Date</th>
                    <th class="py-3 px-4">Customer</th>
                    <th class="py-3 px-4">Total Price</th>
                    <th class="py-3 px-4">Actions</th>
                    <th class="py-3 px-4 text-right">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50">
                @foreach($orders as $order)
                    <tr>
                        <td class="py-4 px-4 font-mono text-sm">#{{ $order->oid }}</td> {{-- --}}
                        <td class="py-4 px-4 font-medium">{{ \Carbon\Carbon::parse($order->o_timestamp)->format('d/m/Y') }}</td> {{-- --}}
                        <td class="py-4 px-4 font-medium">{{ $order->user->name ?? 'Guest' }}</td> {{-- --}}
                        <td class="py-4 px-4 text-green-600 font-bold">£{{ number_format($order->o_price, 2) }}
                        </td>
                        <td class="py-4 px-4 font-medium">
                            <a href="/portal/order/{{$order->oid }}"
                                class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded-md text-sm font-medium transition-colors">
                                View Details
                            </a>
                        </td>
                        <td class="py-4 px-4 text-right">
                            <span class="inline-flex px-3 py-1 rounded-full text-xs font-bold uppercase 
                            @if($order->o_status == 'completed')
                            bg-green-100 text-green-700
                            @elseif($order->o_status == 'refund accepted')
                            bg-green-100 text-green-700
                            @elseif($order->o_status == 'cancelled')
                            bg-red-100 text-red-700
                            @elseif($order->o_status == 'refund declined')
                            bg-red-100 text-red-700
                            @elseif(strtolower($order->o_status) == 'refund requested') bg-orange-100 text-orange-700
                            @else 
                            bg-blue-100 text-blue-700
                            @endif
                            ">
                                {{ $order->o_status }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>