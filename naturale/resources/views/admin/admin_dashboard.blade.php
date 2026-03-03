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
        body, h3, th, td {
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

            {{-- Display STOCK if view is 'stock' --}}
            @if($view === 'stock')
                <div class="bg-white shadow-sm sm:rounded-lg border border-gray-100">
                    <div class="p-8">
                        <h3 class="text-lg font-bold text-gray-900 mt-4 mb-6 ml-6 uppercase tracking-wider">Inventory Management</h3>
                        <table class="w-full text-left">
                            <thead>
                                <tr class="text-xs font-semibold text-gray-400 uppercase border-b">
                                    <th class="py-3 px-4">Product Name</th>
                                    <th class="py-3 px-4">Category</th>
                                    <th class="py-3 px-4 text-center">Current Stock</th>
                                    <th class="py-3 px-4 text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50">
                                @foreach($products as $product)
                                <tr>
                                    <td class="py-4 px-4 font-medium">{{ $product->p_name }}</td> {{-- --}}
                                    <td class="py-4 px-4 text-gray-500 text-sm">{{ $product->p_category }}</td>
                                    <form action="{{ route('admin.stock.update', $product->pid) }}" method="POST">
                                        @csrf
                                        <td class="py-4 px-4 text-center">
                                            <input type="number" name="stock" value="{{ $product->p_stock }}" 
                                                class="w-24 rounded-lg border-gray-200 focus:ring-green-500 focus:border-green-500 text-center shadow-sm">
                                        </td>
                                        <td class="py-4 px-4 text-right">
                                            <button type="submit" class="bg-green-600 text-white px-5 py-2 rounded-lg text-xs font-bold uppercase hover:bg-green-700 transition duration-150 ease-in-out shadow-sm">
                                                Save
                                            </button>
                                        </td>
                                    </form>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            {{-- Display ORDERS if view is 'orders' --}}
            @elseif($view === 'orders')
                <div class="bg-white shadow-sm sm:rounded-lg border border-gray-100">
                    <div class="p-8">
                        <h3 class="text-lg font-bold text-gray-900 mt-4 mb-6 uppercase tracking-wider">Customer Orders</h3>
                        <table class="w-full text-left">
                            <thead>
                                <tr class="text-xs font-semibold text-gray-400 uppercase border-b">
                                    <th class="py-3 px-4">Order ID</th>
                                    <th class="py-3 px-4">Customer</th>
                                    <th class="py-3 px-4">Total Price</th>
                                    <th class="py-3 px-4 text-right">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50">
                                @foreach($orders as $order)
                                <tr>
                                    <td class="py-4 px-4 font-mono text-sm">#{{ $order->oid }}</td> {{-- --}}
                                    <td class="py-4 px-4 font-medium">{{ $order->user->name ?? 'Guest' }}</td> {{-- --}}
                                    <td class="py-4 px-4 text-green-600 font-bold">£{{ number_format($order->o_price, 2) }}</td>
                                    <td class="py-4 px-4 text-right">
                                        <span class="inline-flex px-3 py-1 rounded-full text-xs font-bold uppercase {{ $order->o_status == 'completed' ? 'bg-green-100 text-green-700' : 'bg-blue-100 text-blue-700' }}">
                                            {{ $order->o_status }}
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif

        </div>
    </div>
</x-app-layout>