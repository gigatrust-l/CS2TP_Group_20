<div class="shadow-sm sm:rounded-lg border" style="background-color: var(--page); border-color: var(--border);">
    <div class="p-8">
        <div class="relative flex w-full">
            <h2 class="text-lg font-semibold" style="color: var(--text);">
                {{ __('Address #:address', ['address' => $address->caid]) }}
            </h2>
            <a href="/dashboard/addresses"
                class="px-5 py-2 rounded-lg text-xs font-bold uppercase transition duration-150 ease-in-out shadow-sm inset-y-0 right-0 absolute h-8"
                style="background-color: var(--border); color: var(--text);"
                onmouseover="this.style.backgroundColor='var(--muted)'; this.style.color='white'"
                onmouseout="this.style.backgroundColor='var(--border)'; this.style.color='var(--text)'">
                &lt; Back
            </a>
        </div>

        <form method="post" action="{{ route('address.update', ['id' => $address->caid]) }}" class="mt-6 space-y-6" id="addressForm">
            @csrf
            @method('patch')
            <input type="hidden" id="name" name="caid" value="{{ $address->caid }}">
            <div class="grid grid-cols-12 gap-3">
                <div class="col-span-12">
                    <label class="block text-sm font-medium mb-1" style="color: var(--muted);">Address Line 1</label>
                    <input type="text"
                        class="w-full rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 address_input"
                        style="background-color: var(--page); border: 1px solid var(--border); color: var(--text);"
                        id="addressLine1" name="addressLine1" value="{{ $address->ca_line1 }}" required disabled>
                    @error('addressLine1') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                </div>
                <div class="col-span-12">
                    <label class="block text-sm font-medium mb-1" style="color: var(--muted);">Address Line 2</label>
                    <input type="text"
                        class="w-full rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 address_input"
                        style="background-color: var(--page); border: 1px solid var(--border); color: var(--text);"
                        id="addressLine2" name="addressLine2" value="{{ $address->ca_line2 }}" required disabled>
                    @error('addressLine2') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                </div>
                <div class="col-span-12 md:col-span-6">
                    <label class="block text-sm font-medium mb-1" style="color: var(--muted);">City</label>
                    <input type="text"
                        class="w-full rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 address_input"
                        style="background-color: var(--page); border: 1px solid var(--border); color: var(--text);"
                        id="addressCity" name="addressCity" value="{{ $address->ca_city }}" required disabled>
                    @error('addressCity') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                </div>
                <div class="col-span-12 md:col-span-6">
                    <label class="block text-sm font-medium mb-1" style="color: var(--muted);">County</label>
                    <input type="text"
                        class="w-full rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 address_input"
                        style="background-color: var(--page); border: 1px solid var(--border); color: var(--text);"
                        id="addressCounty" name="addressCounty" value="{{ $address->ca_county }}" required disabled>
                    @error('addressCounty') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                </div>
                <div class="col-span-12 md:col-span-6">
                    <label class="block text-sm font-medium mb-1" style="color: var(--muted);">Postcode</label>
                    <input type="text"
                        class="w-full rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 address_input"
                        style="background-color: var(--page); border: 1px solid var(--border); color: var(--text);"
                        id="addressPostcode" name="addressPostcode" value="{{ $address->ca_postcode }}" required disabled>
                    @error('addressPostcode') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                </div>
                <div class="col-span-12 md:col-span-6">
                    <label class="block text-sm font-medium mb-1" style="color: var(--muted);">Country</label>
                    <input type="text"
                        class="w-full rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 address_input"
                        style="background-color: var(--page); border: 1px solid var(--border); color: var(--text);"
                        id="addressCountry" name="addressCountry" value="{{ $address->ca_country }}" required disabled>
                    @error('addressCountry') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="flex items-center gap-4">
                <x-danger-button type="button" class="hidden" onclick="cancel()" id="cancelBtn">
                    {{ __('Cancel') }}
                </x-danger-button>
                <x-green-button class="hidden" id="saveBtn">
                    {{ __('Save') }}
                </x-green-button>
            </div>
        </form>

        <div class="flex items-center gap-4">
            <x-green-button onclick="modify()" id="modifyBtn">
                {{ __('Modify') }}
            </x-green-button>
            @if (session('status') === 'address-updated')
                <p class="text-sm" style="color: var(--muted);">Saved.</p>
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