<div class="bg-white shadow-sm sm:rounded-lg border border-gray-100">
    <div class="p-8">
        <div class="relative flex w-full">
            <h3 class="text-lg font-bold text-gray-900 mb-6 ml-6 tracking-wider">My Addresses</h3>

            <a href="/dashboard"
                class="bg-gray-100 text-black px-5 py-2 rounded-lg text-xs font-bold uppercase hover:bg-gray-200 transition duration-150 ease-in-out shadow-sm inset-y-0 right-0 absolute h-8">
                &lt; Back </a>
        </div>

        <table class="w-full text-left">
            <thead>
                <tr class="text-xs font-semibold text-gray-400 uppercase border-b">
                    <th class="py-3 px-4">Address ID</th>
                    <th class="py-3 px-4">Address Line 1</th>
                    <th class="py-3 px-4">Postcode</th>
                    <th class="py-3 px-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50">
                @foreach($addresses as $address)
                    <tr>
                        <td class="py-4 px-4 font-mono text-sm">#{{ $address->caid }}</td> {{-- --}}
                        <td class="py-4 px-4 font-medium">{{ $address->ca_line1 }}</td> {{-- --}}
                        <td class="py-4 px-4 text-green-600 ">{{ $address->ca_postcode}}
                        </td>
                        <td class="py-4 px-4 text-right">
                            <a href="/dashboard/addresses/{{ $address->caid }}"
                                class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded-md text-sm font-medium transition-colors">
                                View Details
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>