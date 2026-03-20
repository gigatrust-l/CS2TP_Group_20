<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('components/head-theme-script')
    <title>Naturale - Your Cart</title>
    
    <link rel="icon" href="{{ asset('/media/favicon.ico')}}" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/navbar_style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/index_style.css') }}" />
    
    {{-- Ensure theme scripts run --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">

    <style>
        /* Overriding Tailwind's hardcoded whites/grays with your variables */
        .cart-container { background-color: var(--input-bg); color: var(--text); border-color: var(--border); }
        .table-header { border-bottom: 1px solid var(--border); color: var(--muted); }
        .table-row { border-bottom: 1px solid var(--border); }
        .summary-card { background-color: var(--page); border: 1px solid var(--border); }
        
        /* Fix for the "Back to Products" and "Remove" buttons */
        .btn-secondary-theme { background-color: var(--bg); color: var(--page); }
        .btn-secondary-theme:hover { opacity: 0.8; }
    </style>
</head>

<body style="background-color: var(--page); color: var(--text);">
    @include('components/nav_bar_customer')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="cart-container shadow-sm sm:rounded-lg border p-8">
                <div class="relative flex w-full items-center mb-6">
                    <h3 class="text-xl font-bold tracking-wider" style="color: var(--primary);">Your Cart</h3>

                    @if(count($cart) > 0)
                        <a href="/products"
                            class="btn-secondary-theme px-4 py-2 rounded-lg text-xs font-bold transition duration-150 shadow-sm absolute right-0">
                            <i class="fa-solid fa-arrow-left me-2"></i>Back to Products
                        </a>
                    @endif
                </div>

                @if(count($cart) > 0)
                    <div class="flex flex-col lg:flex-row items-start gap-6 min-h-[60vh]">
                        <div class="overflow-x-auto flex-1 w-full">
                            <table class="w-full text-left">
                                <thead>
                                    <tr class="table-header text-xs font-semibold uppercase">
                                        <th class="py-3 px-4">Product</th>
                                        <th class="py-3 px-4">Quantity</th>
                                        <th class="py-3 px-4 text-right">Price</th>
                                        <th class="py-3 px-4 text-right">Total</th>
                                        <th class="py-3 px-4"></th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y" style="border-color: var(--border);">
                                    @foreach($cart as [$product, $quantity])
                                        <tr class="table-row">
                                            <td class="py-4 px-4">
                                                <div class="flex items-center gap-3">
                                                    <img class="shadow-sm h-16 w-16 object-contain rounded p-1"
                                                        style="background-color: var(--page); border: 1px solid var(--border);"
                                                        src="{{ asset($product->p_image) }}"
                                                        alt="{{ $product->p_name }}" />
                                                    <span class="font-medium">{{ $product->p_name ?? 'Unknown Product' }}</span>
                                                </div>
                                            </td>
                                            <td class="py-4 px-4 font-medium">{{ $quantity }}</td>
                                            <td class="py-4 px-4 font-bold text-right">£{{ number_format($product->p_price, 2) }}</td>
                                            <td class="py-4 px-4 font-bold text-right">£{{ number_format(($product->p_price * $quantity), 2) }}</td>
                                            <td class="py-4 px-4 text-right">
                                                <form action="{{ route('cart.remove', $product->pid) }}" method="POST">
                                                    @csrf
                                                    <button class="inline-flex items-center justify-center w-8 h-8 rounded-full transition-colors"
                                                        style="background-color: var(--bg); color: var(--page);"
                                                        onmouseover="this.style.backgroundColor='#ef4444'; this.style.color='white'"
                                                        onmouseout="this.style.backgroundColor='var(--bg)'; this.style.color='var(--page)'">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <aside class="w-full lg:w-80 space-y-4">
                            <div class="summary-card sticky top-8 rounded-xl p-6 shadow-lg">
                                <h2 class="mb-4 border-b pb-3 text-2xl font-bold" style="color: var(--primary); border-color: var(--border);">
                                    Order Summary
                                </h2>
                                <div class="mb-2 flex justify-between" style="color: var(--muted);">
                                    <span>Subtotal:</span>
                                    <span>£{{ number_format($runningTotal, 2) }}</span>
                                </div>
                                <div class="mb-4 flex justify-between border-b pb-4" style="color: var(--muted); border-color: var(--border);">
                                    <span>Shipping:</span>
                                    @if (auth()->user()?->isSubscriber() == 1)
                                        <span class="font-semibold" style="color: var(--accent);">Free</span>
                                    @else
                                        <span class="font-semibold">£4.99</span>
                                        @php $runningTotal += 4.99 @endphp
                                    @endif
                                </div>
                                <div class="mb-6 flex justify-between text-xl font-extrabold">
                                    <span>Total:</span>
                                    <span style="color: var(--primary);">£{{ number_format($runningTotal, 2) }}</span>
                                </div>

                                <a href="/checkout"
                                    class="block w-full rounded-lg p-3 text-center text-lg font-bold text-[var(--page)] shadow-lg transition duration-200"
                                    style="background-color: var(--bg);">
                                    Go to Checkout
                                </a>
                            </div>
                        </aside>
                    </div>

                @else
                    <div class="text-center py-20">
                        <i class="fa-solid fa-cart-shopping fa-3x mb-4" style="color: var(--border);"></i>
                        <p class="text-xl mb-6">Your cart is empty.</p>
                        <a href="/products"
                            class="inline-block rounded-lg px-8 py-3 text-lg font-bold text-[var(--text)] shadow-lg transition duration-200"
                            style="background-color: var(--bg);">
                            Go to Store
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>

    @include('components/footer')
</body>
</html>