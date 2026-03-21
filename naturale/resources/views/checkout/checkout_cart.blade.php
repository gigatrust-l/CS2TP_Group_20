<x-layouts.storefront title="{{ config('app.name', 'Laravel') }} - Cart">

    <x-slot:styles>
        <link rel="stylesheet" href="{{ asset('/css/cart_style.css') }}" />
    </x-slot:styles>

    <div class="max-w-[80px] flex justify-content-center mt-2">

        <div x-cloak x-data="{ show: false, message: '' }"
            x-on:notify.window="message = $event.detail.message; show = true; setTimeout(() => show = false, 4000)"
            x-show="show" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4"
            class="fixed top-4 left-1/2 z-50 flex items-center gap-3 bg-red-100 border border-red-400 text-red-800 px-4 py-3 rounded-lg shadow-lg max-w-sm ">
            <span class="text-lg">⚠️</span>
            <span class="text-sm font-medium" x-text="message"></span>
            <button @click="show = false" class="ml-auto text-red-500 hover:text-red-700 font-bold">✕</button>
        </div>


        <div x-cloak x-data="{ show: false, message: '' }"
            x-on:success.window="message = $event.detail.message; show = true; setTimeout(() => show = false, 4000)"
            x-show="show" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4"
            class="fixed top-4 left-1/2 justify-content-center z-50 flex items-center gap-3 bg-green-100 border border-green-400 text-green-800 px-4 py-3 rounded-lg shadow-lg max-w-sm ">
            <span class="text-lg">⚠️</span>
            <span class="text-sm font-medium" x-text="message"></span>
            <button @click="show = false" class="ml-auto text-green-500 hover:text-green-700 font-bold">✕</button>
        </div>

    </div>

    <div class="py-12 ">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg border border-gray-100">
                <div class="p-8">
                    <div class="relative flex w-full">
                        @if (count($cart) > 0)
                            <h3 class="text-lg font-bold text-gray-900 mb-6 ml-6  tracking-wider">Your Cart</h3>

                            <a href="/products"
                                class="bg-gray-100 text-black px-5 pl-20 py-2 rounded-lg text-xs font-bold  hover:bg-gray-200 transition duration-150 ease-in-out shadow-sm inset-y-0 right-0 absolute h-8">
                                &lt; Back to Products </a>
                        @endif
                    </div>

                    @if (count($cart) > 0)
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
                                            @foreach ($cart as [$product, $quantity])
                                                <tr>
                                                    <td class="py-4 px-4 font-medium text-sm">
                                                        <div class="flex items-center gap-3">
                                                            <img class="product-img shadow-sm h-16 w-16 object-contain flex-shrink-0 rounded"
                                                                src="{{ asset($product->p_image) }}"
                                                                alt="{{ $product->p_name }}" />
                                                            <span>{{ $product->p_name ?? 'Unknown Product' }}</span>
                                                        </div>
                                                    </td>
                                                    <td class="py-4 px-4 font-medium">

                                                        <div
                                                            class="flex items-center bg-gray-100 rounded-full overflow-hidden w-fit">

                                                            <form method="POST"
                                                                action="{{ $quantity > 1 ? route('cart.update') : route('cart.remove', $product->pid) }}">
                                                                @csrf
                                                                <input type="hidden" name="pid"
                                                                    value="{{ $product->pid }}">
                                                                @if ($quantity > 1)
                                                                    <input type="hidden" name="quantity"
                                                                        value="{{ $quantity - 1 }}">
                                                                @endif
                                                                <button type="submit"
                                                                    class="w-8 h-8 flex items-center justify-center text-xl font-light text-gray-800 hover:bg-gray-300 rounded-l-full transition-colors cursor-pointer">
                                                                    @if ($quantity > 1)
                                                                        −
                                                                    @else
                                                                        <svg version="1.2"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 512 512"
                                                                            class="h-4 pl-1 fill-red-600">
                                                                            <path fill-rule="evenodd"
                                                                                d="m338.23 41.19l32.28 51.03h61.38c11.7 0 21.11 9.93 21.11 22.26 0 12.34-9.41 22.27-21.11 22.27h-7.03v282.03c0 41.01-31.49 74.22-70.36 74.22h-197c-38.87 0-70.36-33.21-70.36-74.22v-282.03h-7.03c-11.7 0-21.11-9.93-21.11-22.27 0-12.33 9.41-22.26 21.11-22.26h61.38l32.28-51.12c9.15-14.38 24.54-23.1 40.98-23.1h82.41c16.44 0 31.84 8.72 41.07 23.19zm-129.28 24.68l-16.71 26.35h127.52l-16.71-26.35c-1.32-2.04-3.52-3.34-5.89-3.34h-82.41c-2.37 0-4.57 1.21-5.8 3.34zm-79.59 70.88v282.03c0 16.42 12.57 29.69 28.14 29.69h197c15.57 0 28.14-13.27 28.14-29.69v-282.03zm70.36 59.38v192.96c0 8.17-6.33 14.85-14.07 14.85-7.74 0-14.07-6.68-14.07-14.85v-192.96c0-8.17 6.33-14.85 14.07-14.85 7.74 0 14.07 6.68 14.07 14.85zm70.36 0v192.96c0 8.17-6.34 14.85-14.07 14.85-7.74 0-14.08-6.68-14.08-14.85v-192.96c0-8.17 6.34-14.85 14.08-14.85 7.73 0 14.07 6.68 14.07 14.85zm70.35 0v192.96c0 8.17-6.33 14.85-14.07 14.85-7.74 0-14.07-6.68-14.07-14.85v-192.96c0-8.17 6.33-14.85 14.07-14.85 7.74 0 14.07 6.68 14.07 14.85z" />
                                                                        </svg>
                                                                    @endif
                                                                </button>
                                                            </form>

                                                            <div class="w-px h-4 bg-gray-300"></div>
                                                            <span
                                                                class="w-6 text-center text-lg font-medium text-gray-900">{{ $quantity }}</span>
                                                            <div class="w-px h-4 bg-gray-300"></div>

                                                            @if ($quantity < max(1, $product->p_stock))
                                                                <form method="POST"
                                                                    action="{{ route('cart.update') }}">
                                                                    @csrf
                                                                    <input type="hidden" name="pid"
                                                                        value="{{ $product->pid }}">
                                                                    <input type="hidden" name="quantity"
                                                                        value="{{ $quantity + 1 }}">
                                                                    <button type="submit"
                                                                        class="w-8 h-8 flex items-center justify-center text-xl font-light text-gray-800 hover:bg-gray-300 rounded-r-full transition-colors cursor-pointer">
                                                                        +
                                                                    </button>
                                                                </form>
                                                            @else
                                                                <button id="maxPlus"
                                                                    class="w-8 h-8 flex items-center justify-center text-xl font-light text-gray-800 hover:bg-gray-300 rounded-r-full transition-colors cursor-pointer">
                                                                    +
                                                                </button>
                                                            @endif

                                                        </div>

                                                    </td>
                                                    <td class="py-4 px-4 font-bold text-right">
                                                        £{{ number_format($product->p_price, 2) }}</td>
                                                    <td class="py-4 px-4 font-bold text-right">
                                                        £{{ number_format($product->p_price * $quantity, 2) }}</td>
                                                    <td class="py-4 px-4 font-bold text-right">

                                                        <form action="{{ route('cart.remove', $product->pid) }}"
                                                            method="POST">
                                                            @csrf
                                                            <button
                                                                class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-gray-200 hover:bg-red-500 hover:text-white text-gray-500 transition-colors duration-200"
                                                                aria-label="Remove">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3"
                                                                    viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2.5">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
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
                                                    $runningTotal += 4.99;
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

                            <div class="empty-cart-container">
                                <img src="{{ asset('/media/media_webp/empty_cart.webp') }}" alt="Empty Cart"
                                    class="empty-cart-image">
                                <h2>Your cart is empty</h2>
                                <p>Looks like you haven’t added anything yet.</p>
                                <a href="/products" class="empty-cart-button">Start Shopping</a>
                            </div>

                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <x-slot:scripts>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                @if (session('success'))
                    window.dispatchEvent(new CustomEvent('success', {
                        detail: {
                            message: @json(session('success'))
                        }
                    }));
                @endif

                @if (session('notify'))
                    window.dispatchEvent(new CustomEvent('notify', {
                        detail: {
                            message: @json(session('notify'))
                        }
                    }));
                @endif
            });

            const element = document.getElementById("maxPlus");
            element.addEventListener("click", function() {
                window.dispatchEvent(new CustomEvent('notify', {
                    detail: {
                        message: 'You already have the maximum stock in your cart.'
                    }
                }));
            });
        </script>

    </x-slot:scripts>

</x-layouts.storefront>
