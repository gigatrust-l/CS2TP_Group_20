<x-app-layout>
    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg border border-gray-100 overflow-hidden">
                <div class="p-8">
                    
                    <div class="relative flex w-full items-center mb-8">
                        <h3 class="text-xl font-bold text-gray-900 tracking-wider">
                            Admin Control: Order #{{ $order->oid }}
                        </h3>
                        <a href="/portal/order" 
                            class="ml-auto bg-gray-100 text-black px-5 py-2 rounded-lg text-xs font-bold uppercase hover:bg-gray-200 transition shadow-sm h-8 flex items-center">
                            &lt; Back to Portal
                        </a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-10 pb-10 border-b border-gray-100">
                        <div>
                            <h4 class="text-sm font-bold text-gray-400 uppercase tracking-widest mb-4">Order Details</h4>
                            <div class="space-y-3">
                                <p><span class="font-semibold">Customer:</span> {{ $order->user->name ?? 'Guest' }}</p>
                                <p><span class="font-semibold">Total Price:</span> £{{ number_format($order->o_price, 2) }}</p>
                                <p>
                                    <span class="font-semibold mr-2">Status:</span>
                                    <span class="px-3 py-1 rounded-full text-xs font-bold uppercase 
                                        @if($order->o_status == 'completed') bg-green-100 text-green-700
                                        @elseif($order->o_status == 'cancelled') bg-red-100 text-red-700
                                        @elseif(strtolower($order->o_status) == 'refund requested') bg-orange-100 text-orange-700
                                        @else bg-blue-100 text-blue-700 @endif">
                                        {{ $order->o_status }}
                                    </span>
                                </p>
                            </div>
                        </div>

                        <div>
                            <h4 class="text-sm font-bold text-gray-400 uppercase tracking-widest mb-4">Shipping To</h4>
                            <div class="text-gray-600">
                                {{-- Using the address variable passed from the controller --}}
                                <p class="font-medium text-gray-900">{{ $address->ca_line1 }}</p>
                                @if($address->ca_line2)<p>{{ $address->ca_line2 }}</p>@endif
                                <p>{{ $address->ca_city }}, {{ $address->ca_postcode }}</p>
                                <p>{{ $address->ca_country }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 pt-8">
                        <h4 class="text-sm font-bold text-gray-400 uppercase tracking-widest mb-4">Manage Refund</h4>
                        
                        {{-- Admin Action: Only visible when a refund is requested --}}
                        @if(strtolower($order->o_status) == 'refund requested')
                            <div class="flex space-x-4">
                                
                                <form action="{{ route('admin.orders.updateStatus', $order->oid) }}" method="POST">
                                    @csrf
                                    @method('PATCH') {{-- Best practice for updates --}}
                                    <input type="hidden" name="status" value="refund accepted">
                                    <x-danger-button type="submit" class="bg-green-600 hover:bg-green-700 text-white border-none">
                                        {{ __('Accept Refund') }}
                                    </x-danger-button>
                                </form>

                                <form action="{{ route('admin.orders.updateStatus', $order->oid) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="status" value="refund declined">
                                    <x-secondary-button type="submit" class="bg-red-600 hover:bg-red-700 text-white border-none">
                                        {{ __('Decline Refund') }}
                                    </x-secondary-button>
                                </form>
                                
                            </div>
                        @else
                            <div class="p-4 bg-gray-100 rounded-lg text-sm text-gray-500 italic">
                                No active refund requests for this order.
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>