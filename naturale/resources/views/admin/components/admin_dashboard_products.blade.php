<div class="bg-white shadow-sm sm:rounded-lg border border-gray-100">
    <div class="p-8">
        <div class="relative flex w-full">
            <h3 class="text-lg font-bold text-gray-900 mb-6 ml-6 uppercase tracking-wider">Inventory
                Management</h3>
            <a href="/portal" class="bg-gray-100 text-black px-5 py-2 rounded-lg text-xs font-bold uppercase hover:bg-gray-200 transition duration-150 ease-in-out shadow-sm inset-y-0 right-0 absolute h-8"> &lt;   Back </a>
        </div>
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
                                <input type="number" name="stock" value="{{ $product->p_stock }}" min="0"
                                    class="w-24 rounded-lg border-gray-200 focus:ring-green-500 focus:border-green-500 text-center shadow-sm">
                            </td>
                            <td class="py-4 px-4 text-right">
                                <button type="submit"
                                    class="bg-green-600 text-white px-5 py-2 rounded-lg text-xs font-bold uppercase hover:bg-green-700 transition duration-150 ease-in-out shadow-sm">
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