<div class="bg-white shadow-sm sm:rounded-lg border border-gray-100">
    <div class="p-8">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
        <style>
            input {
                background-color: #bbcba8;
                border: 1px solid var(--secondary);
                outline: none;
            }
        </style>
        <div class="relative flex w-full">
            <h2 class="text-lg font-semibold text-gray-900">
                {{ __('Address #:address', ['address' => $address->caid]) }}
            </h2>

            <a href="/dashboard/addresses"
                class="bg-gray-100 text-black px-5 py-2 rounded-lg text-xs font-bold uppercase hover:bg-gray-200 transition duration-150 ease-in-out shadow-sm inset-y-0 right-0 absolute h-8">
                &lt; Back </a>
        </div>

        <form method="post" action="{{ route('address.update', ['id' => $address->caid]) }}" class="mt-6 space-y-6"
            id="addressForm">
            @csrf
            @method('patch')
            <input type="hidden" id="name" name="caid" value="{{ $address->caid }}">
            <div class="grid grid-cols-12 gap-3">
                <div class="col-span-12">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Address Line 1</label>
                    <input type="text"
                        class="w-full border border-solid border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 address_input"
                        id="addressLine1" name="addressLine1" value="{{ $address->ca_line1 }}" required disabled>
                    @error('addressLine1') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                </div>
                <div class="col-span-12">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Address Line 2</label>
                    <input type="text"
                        class="w-full border border-solid border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 address_input"
                        id="addressLine2" name="addressLine2" value="{{ $address->ca_line2 }}" required disabled>
                    @error('addressLine2') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                </div>
                <div class="col-span-12 md:col-span-6">
                    <label class="block text-sm font-medium text-gray-700 mb-1">City</label>
                    <input type="text"
                        class="w-full border border-solid border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 address_input"
                        id="addressCity" name="addressCity" value="{{ $address->ca_city }}" required disabled>
                    @error('addressCity') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                </div>
                <div class="col-span-12 md:col-span-6">
                    <label class="block text-sm font-medium text-gray-700 mb-1">County</label>
                    <input type="text"
                        class="w-full border border-solid border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 address_input"
                        id="addressCounty" name="addressCounty" value="{{ $address->ca_county }}" required disabled>
                    @error('addressCounty') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                </div>
                <div class="col-span-12 md:col-span-6">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Postcode</label>
                    <input type="text"
                        class="w-full border border-solid border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 address_input"
                        id="addressPostcode" name="addressPostcode" value="{{ $address->ca_postcode }}" required
                        disabled>
                    @error('addressPostcode') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                </div>
                <div class="col-span-12 md:col-span-6">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Country</label>
                    <input type="text"
                        class="w-full border border-solid border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 address_input"
                        id="addressCountry" name="addressCountry" value="{{ $address->ca_country }}" required disabled>
                    @error('addressCountry') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="flex items-center gap-4">
                <x-danger-button type="button" class="bg-green-600 hover:bg-green-700 text-white hidden"
                    onclick="cancel()" id="cancelBtn">
                    {{ __('Cancel') }}
                </x-danger-button>
                <x-green-button class="bg-green-600 hover:bg-green-700 text-white hidden" id="saveBtn">
                    {{ __('Save') }}
                </x-green-button>
            </div>
        </form>
        <div class="flex items-center gap-4">
            <x-green-button class="bg-green-600 hover:bg-green-700 text-white" onclick="modify()" id="modifyBtn">
                {{ __('Modify') }}
            </x-green-button>

            @if (session('status') === 'address-updated')
                <p class="text-sm text-gray-600">Saved.</p>
            @endif
        </div>
    </div>
</div>

<script>
    function modify() {
        document.getElementById('saveBtn').classList.remove('hidden');
        document.getElementById('cancelBtn').classList.remove('hidden');
        document.getElementById('modifyBtn').classList.add('hidden');

        document.querySelectorAll('.address_input').forEach(input => {
            input.removeAttribute('disabled');
        });
    }

    function cancel() {
        document.getElementById('saveBtn').classList.add('hidden');
        document.getElementById('cancelBtn').classList.add('hidden');
        document.getElementById('modifyBtn').classList.remove('hidden');

        document.querySelectorAll('.address_input').forEach(input => {
            input.setAttribute('disabled', '');
        });

        document.getElementById('addressForm').reset();

    }
</script>