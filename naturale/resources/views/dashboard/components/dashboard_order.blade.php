<div class="bg-white shadow-sm sm:rounded-lg border border-gray-100">
    <div class="p-8">

        <div class="relative flex w-full">
            <h3 class="text-lg font-bold text-gray-900 mb-6 ml-2 tracking-wider"> {{ __('My Orders > Order') }}
                #{{ $order->oid }}</h3>
            <a href="/dashboard/orders"
                class="bg-gray-100 text-black px-5 py-2 rounded-lg text-xs font-bold uppercase hover:bg-gray-200 transition duration-150 ease-in-out shadow-sm inset-y-0 right-0 absolute h-8">
                &lt; Back </a>
        </div>


        <div>

            <!-- Order Basic Info -->
            <div class="mb-6">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Order Information</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="grid grid-cols-1">
                        <div> <span class="font-semibold">Order ID:</span> {{ $order->oid }}</div>
                        <div> <span class="font-semibold">Price:</span> £{{ number_format($order->o_price, 2) }} </div>
                        <div>
                            <span class="font-semibold">Status:</span>
                            <span class="inline-flex px-3 py-1 rounded-full text-xs font-bold uppercase 
                            @if($order->o_status == 'completed')
                                bg-green-100 text-green-700
                            @elseif($order->o_status == 'cancelled')
                                bg-red-100 text-red-700
                            @elseif(strtolower($order->o_status) == 'refund requested')
                                bg-orange-100 text-orange-700
                            @else 
                                bg-blue-100 text-blue-700
                            @endif
                            ">
                                {{ $order->o_status }}
                            </span>
                        </div>
                    </div>
                    <div>
                        <span class="font-semibold">Address:</span>
                        <div class="grid grid-cols-1 grid-span-2">
                            <span>{{ $address->ca_line1 }}</span>
                            <span>{{ $address->ca_line2 }}</span>
                            <span>{{ $address->ca_city }}</span>
                            <span>{{ $address->ca_county }}</span>
                            <span>{{ $address->ca_country }}</span>
                            <span>{{ $address->ca_postcode }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Items (if you have them) -->
            @if(isset($order->items) && $order->items->count())
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Items</h3>
                    <div class="overflow-x-auto">

                        <table class="w-full text-left">
                            <thead>
                                <tr class="text-xs font-semibold text-gray-400 uppercase border-b">
                                    <th class="py-3 px-4">Product</th>
                                    <th class="py-3 px-4">Quantity</th>
                                    <th class="py-3 px-4 text-right">Price</th>
                                    <th class="py-3 px-4 text-right">Total Price</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50">
                                @foreach($order->items as $item)
                                    <tr>
                                        <td class="py-4 px-4 font-medium text-sm">
                                            {{ $item->product->p_name ?? 'Unknown Product' }}
                                        </td> {{-- --}}
                                        <td class="py-4 px-4 font-medium">{{ $item->oi_quantity }}</td> {{-- --}}
                                        <td class="py-4 px-4 text-green-600 font-bold text-right">
                                            £{{ number_format($item->oi_ind_price, 2) }}</td>
                                        <td class="py-4 px-4 text-green-600 font-bold text-right">
                                            £{{ number_format(($item->oi_ind_price) * $item->oi_quantity, 2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <table class="w-full text-left">
                            <thead>
                                <tr class="font-semibold text-gray-400  border-t">
                                    <th class="py-3 px-4 "></th> {{-- --}}
                                    <th class="py-3 px-4 "></th> {{-- --}}
                                    <th class="py-3 px-4 text-right"></th>
                                    <th class="py-4 px-4 text-green-600 font-bold text-right">
                                        £{{ number_format($order->o_price, 2) }}</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            @endif

            <div class="mb-6">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Actions</h3>
                
                {{-- Button for Processing orders --}}
                @if(strtolower($order->o_status) == 'processing')
                    <form action="{{ route('orders.updateStatus', $order->oid) }}" method="POST">
                        @csrf
                        <input type="hidden" name="status" value="cancelled">
                        <x-danger-button type="submit" class="bg-red-600 hover:bg-red-700 text-white">
                            {{ __('Cancel Order') }}
                        </x-danger-button>
                    </form>

                {{-- Button for Completed orders --}}
                @elseif(strtolower($order->o_status) == 'completed')
                    <form action="{{ route('orders.updateStatus', $order->oid) }}" method="POST">
                        @csrf
                        <input type="hidden" name="status" value="refund requested">
                        <x-danger-button type="submit" class="bg-green-600 hover:bg-green-700 text-white">
                            {{ __('Request Refund') }}
                        </x-danger-button>
                    </form>
                @endif
            </div>

        </div>
    </div>
</div>