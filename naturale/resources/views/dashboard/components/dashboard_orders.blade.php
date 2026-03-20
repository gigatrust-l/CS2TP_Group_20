<div class="shadow-sm sm:rounded-lg border" style="background-color: var(--page); border-color: var(--border);">
    <div class="p-8">
        <div class="relative flex w-full">
            <h3 class="text-lg font-bold mb-6 ml-6 tracking-wider" style="color: var(--text);">My Orders</h3>
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
                    <th class="py-3 px-4">Order ID</th>
                    <th class="py-3 px-4">Customer</th>
                    <th class="py-3 px-4">Total Price</th>
                    <th class="py-3 px-4">Actions</th>
                    <th class="py-3 px-4 text-right">Status</th>
                </tr>
            </thead>
            <tbody style="divide-color: var(--border);">
                @foreach ($orders as $order)
                    <tr class="border-b" style="border-color: var(--border);">
                        <td class="py-4 px-4 font-mono text-sm" style="color: var(--text);">#{{ $order->oid }}</td>
                        <td class="py-4 px-4 font-medium" style="color: var(--text);">{{ $order->user->name ?? 'Guest' }}</td>
                        <td class="py-4 px-4 font-bold" style="color: var(--footer-link);">£{{ number_format($order->o_price, 2) }}</td>
                        <td class="py-4 px-4 font-medium">
                            <a href="/dashboard/orders/{{ $order->oid }}"
                                class="px-3 py-1 rounded-md text-sm font-medium text-white transition-colors"
                                style="background-color: var(--bg);"
                                onmouseover="this.style.backgroundColor='var(--primary)'"
                                onmouseout="this.style.backgroundColor='var(--bg)'">
                                View Details
                            </a>
                        </td>
                        <td class="py-4 px-4 text-right">
                            <span class="inline-flex px-3 py-1 rounded-full text-xs font-bold uppercase 
                                @if ($order->o_status == 'completed') 
                                    bg-green-100 text-green-700
                                @elseif($order->o_status == 'cancelled')
                                    bg-red-100 text-red-700
                                @elseif(strtolower($order->o_status) == 'refund requested')
                                    bg-amber-100 text-amber-700
                                @else 
                                    bg-blue-100 text-blue-700 
                                @endif">
                                {{ $order->o_status }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>