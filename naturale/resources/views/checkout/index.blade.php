<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Naturale</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--
    <link rel="stylesheet" href="{{ asset('/css/cart_style.css')}}" /> --}}
    <link rel="icon" href="{{ asset('/media/favicon.ico')}}" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/navbar_style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
</head>


<body>
    @include('components/nav_bar_customer')

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg border border-gray-100">
                <div class="p-8">
                    <div class="relative flex w-full">
                        <h3 class="text-lg font-bold text-gray-900 mb-6 ml-6  tracking-wider">Your Cart</h3>

                        @if(count($cart) > 0)
                            <a href="/products"
                                class="bg-gray-100 text-black px-5 pl-20 py-2 rounded-lg text-xs font-bold  hover:bg-gray-200 transition duration-150 ease-in-out shadow-sm inset-y-0 right-0 absolute h-8">
                                &lt; Back to Products </a>
                        @endif
                    </div>

                    @if(count($cart) > 0)
                        <div class="">

                            <div class="flex items-start gap-6 min-h-screen ">
                                <div class="overflow-x-auto flex-1">

                                    <table class="w-full text-left">
                                        <thead>
                                            <tr class="text-xs font-semibold text-gray-400 uppercase border-b">
                                                <th class="py-3 px-4">Product</th>
                                                <th class="py-3 px-4">Quantity</th>
                                                <th class="py-3 px-4 text-right">Product Price</th>
                                                <th class="py-3 px-4 text-right">Item Total</th>
                                                <th class="py-3 px-4 text-right"></th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-50">
                                            @foreach($cart as [$product, $quantity])
                                                <tr>
                                                    <td class="py-4 px-4 font-medium text-sm">
                                                        <div class="flex items-center gap-3">
                                                            <img class="product-img shadow-sm h-16 w-16 object-contain flex-shrink-0 rounded"
                                                                src="{{ asset($product->p_image) }}"
                                                                alt="{{ $product->p_name }}" />
                                                            <span>{{ $product->p_name ?? 'Unknown Product' }}</span>
                                                        </div>
                                                    </td>
                                                    <td class="py-4 px-4 font-medium">{{ $quantity }}</td>
                                                    <td class="py-4 px-4 font-bold text-right">
                                                        £{{ number_format($product->p_price, 2) }}</td>
                                                    <td class="py-4 px-4 font-bold text-right">
                                                        £{{ number_format(($product->p_price * $quantity), 2) }}</td>
                                                    <td class="py-4 px-4 font-bold text-right">

                                                        <form action="{{ route('cart.remove', $product->pid) }}" method="POST">
                                                            @csrf
                                                            <button
                                                                class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-gray-200 hover:bg-red-500 hover:text-white text-gray-500 transition-colors duration-200"
                                                                aria-label="Remove">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3"
                                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                    stroke-width="2.5">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M6 18L18 6M6 6l12 12" />
                                                                </svg>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <aside class="w-65 space-y-4">
                                    <div class="sticky top-8 rounded-xl border border-gray-200 bg-white p-6 shadow-lg">
                                        <h2 class="mb-4 border-b pb-3 text-2xl font-bold text-gray-800">
                                            Order Summary
                                        </h2>
                                        <div class="mb-2 flex justify-between text-gray-600">
                                            <span>Subtotal:</span>
                                            <span>£{{ $runningTotal }}</span>
                                        </div>
                                        <div class="mb-4 flex justify-between border-b pb-4 text-gray-600">
                                            <span>Shipping:</span>
                                            @if (auth()->user()?->isSubscriber() == 1)
                                                <span class="font-semibold">Free</span>
                                            @else
                                                <span class="font-semibold">£4.99</span>
                                                @php
                                                    $runningTotal += 4.99
                                                @endphp
                                            @endif
                                        </div>
                                        <div class="mb-6 flex justify-between text-xl font-extrabold text-gray-800">
                                            <span>Order Total:</span>
                                            <span>£{{ number_format($runningTotal, 2) }}</span>
                                        </div>

                                        <a href="/checkout"
                                            class="block w-full rounded-lg bg-green-600 p-3 text-center text-lg font-bold text-white
                                                                                shadow-lg transition duration-200 hover:bg-green-700">
                                            Go to Checkout
                                        </a>
                                    </div>
                                </aside>
                            </div>
                        </div>

                    @else

                            <div class="gap-6  ">
                                <div class="overflow-x-auto grid grid-cols-1"></div>

                                <p>Your cart is empty.</p>

                                <a href="/products"
                                    class="block w-full rounded-lg bg-green-600 p-3 text-center text-lg font-bold text-white
                                                                                    shadow-lg transition duration-200 hover:bg-green-700">
                                    Go to Store
                                </a>
                            </div>
                        </div>

                    @endif
            </div>
        </div>
    </div>
    </div>

    <footer>
        @include('components/footer')
    </footer>

</body>

</html>