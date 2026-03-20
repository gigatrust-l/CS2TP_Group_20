<div class="shadow-sm sm:rounded-lg border" style="background-color: var(--page); border-color: var(--border);">
    <div class="p-8">
        <div class="relative flex w-full">
            <h3 class="text-lg font-bold mb-6 ml-6 tracking-wider" style="color: var(--text);">My Addresses</h3>
            <a href="/dashboard"
                class="px-5 py-2 rounded-lg text-xs font-bold uppercase transition duration-150 ease-in-out shadow-sm inset-y-0 right-0 absolute h-8"
                style="background-color: var(--border); color: var(--text);"
                onmouseover="this.style.backgroundColor='var(--muted)'; this.style.color='white'"
                onmouseout="this.style.backgroundColor='var(--border)'; this.style.color='var(--text)'">
                &lt; Back
            </a>
        </div>
        <table class="w-full text-left">
            <thead>
                <tr class="text-xs font-semibold uppercase border-b" style="color: var(--muted); border-color: var(--border);">
                    <th class="py-3 px-4">Address ID</th>
                    <th class="py-3 px-4">Address Line 1</th>
                    <th class="py-3 px-4">Postcode</th>
                    <th class="py-3 px-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($addresses as $address)
                    <tr class="border-b" style="border-color: var(--border);">
                        <td class="py-4 px-4 font-mono text-sm" style="color: var(--text);">#{{ $address->caid }}</td>
                        <td class="py-4 px-4 font-medium" style="color: var(--text);">{{ $address->ca_line1 }}</td>
                        <td class="py-4 px-4 font-medium" style="color: var(--footer-link);">{{ $address->ca_postcode }}</td>
                        <td class="py-4 px-4 text-right">
                            <a href="/dashboard/addresses/{{ $address->caid }}"
                                class="px-3 py-1 rounded-md text-sm font-medium text-white transition-colors"
                                style="background-color: var(--bg);"
                                onmouseover="this.style.backgroundColor='var(--primary)'"
                                onmouseout="this.style.backgroundColor='var(--bg)'">
                                View Details
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>