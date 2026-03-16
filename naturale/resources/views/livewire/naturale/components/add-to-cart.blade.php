<div class="col-span-12 md:col-span-3">
    <div class="p-4 bg-white dark:bg-[var(--page)] border border-gray-200 rounded-lg shadow-sm">
        <h5 class="font-semibold mb-4 text-lg">Purchase</h5>
        <p class="mb-2">
            <strong class="mr-1">Stock:</strong>
            @if ($product->p_stock > 10)
                <span class="text-green-600"> In Stock</span>
            @elseif ($product->p_stock > 0)
                <span class="text-amber-600"> Low Stock</span>
            @else
                <span class="text-red-600"> Out of Stock</span>
            @endif
        </p>
        <input type="hidden" name="pid" value="{{ $product->pid }}">
        <input type="hidden" name="quantity" id="quantityValue" value="1">

        <div x-data="{ quantity: $wire.entangle('quantity') }">

            <label class="block text-sm font-semibold mb-2">Quantity</label>

            <div
                class="flex items-center justify-between bg-gray-100 dark:bg-gray-800 rounded-full px-2 py-2 mb-4
                {{ $product->p_stock == 0 ? 'opacity-50 pointer-events-none' : '' }}">

                <button type="button" @click="quantity > 1 ? quantity-- : null"
                    class="w-9 h-9 flex items-center justify-center rounded-full bg-white dark:bg-[var(--page)] shadow text-xl font-medium hover:bg-gray-50 transition-colors">
                    −
                </button>

                <span x-text="quantity" class="text-base font-semibold w-8 text-center"></span>

                <button type="button" @click="quantity < {{ max(1, $product->p_stock) }} ? quantity++ : null"
                    class="w-9 h-9 flex items-center justify-center rounded-full bg-white dark:bg-[var(--page)] shadow text-xl font-medium hover:bg-gray-50 transition-colors">
                    +
                </button>

            </div>

            <button wire:click="addToCart" wire:loading.attr="disabled"
                class="w-full bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-md transition-colors disabled:bg-gray-400 disabled:cursor-not-allowed"
                @disabled($product->p_stock == 0)>
                <span wire:loading.remove wire:target="addToCart">
                    {{ $product->p_stock > 0 ? 'Add to Cart' : 'Unavailable' }}
                </span>
                <span wire:loading wire:target="addToCart">Adding...</span>
            </button>

        </div>
    </div>

    @if ($showWindow)
        <div x-data="{ show: false }" x-init="requestAnimationFrame(() => show = true)" x-show="show"
            x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            class="fixed inset-0 bg-black/50 z-[998]" @click="show = false; setTimeout(() => $wire.closeWindow(), 200)">
            <div x-show="show" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-[-20px]"
                x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 translate-y-[-20px]"
                class="fixed inset-0 z-[999] flex items-center justify-center p-4">
                <div class="bg-white dark:bg-[var(--page)] rounded-xl shadow-2xl w-full max-w-md p-6 relative"
                    @click.stop>
                    <button @click="show = false; setTimeout(() => $wire.closeWindow(), 200)"
                        class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 text-xl font-bold leading-none">
                        &times;
                    </button>

                    <div class="flex items-center gap-2 justify-center mb-6">
                        <svg class="w-6 h-6 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        <h2 class="text-base font-bold tracking-wide text-gray-800 dark:text-white">
                            Product Added Successfully
                        </h2>
                    </div>

                    <div
                        class="flex items-center gap-4 border border-gray-200 dark:border-gray-700 rounded-lg p-3 mb-6">
                        @if ($product->p_image)
                            <img src="{{ asset($product->p_image) }}" alt="{{ $product->p_name }}"
                                class="w-16 h-16 object-contain rounded">
                        @endif
                        <div>
                            <p class="font-semibold text-sm text-gray-800 dark:text-gray-100">{{ $product->p_name }}</p>
                            <p class="text-sm text-gray-500">Qty: {{ $quantity }}</p>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <button @click="show = false; setTimeout(() => $wire.closeWindow(), 200)"
                            class="flex-1 border border-gray-300 text-gray-700 dark:text-gray-200 font-medium py-2 px-4 rounded-md hover:bg-gray-50 dark:hover:bg-green-950 transition-colors">
                            Continue Shopping
                        </button>
                        <a href="{{ route('cart.index') }}"
                            class="flex-1 text-center bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-md transition-colors">
                            Go to Cart
                        </a>
                    </div>

                </div>
            </div>
        </div>
    @endif

    <div x-data="{ show: false, message: '' }"
        x-on:notify.window="message = $event.detail.message; show = true; setTimeout(() => show = false, 4000)"
        x-show="show" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        class="fixed top-4 left-1/2 -translate-x-1/2 z-50 flex items-center gap-3 bg-red-100 border border-red-400 text-red-800 px-4 py-3 rounded-lg shadow-lg max-w-sm w-full">
        <span class="text-lg">⚠️</span>
        <span class="text-sm font-medium" x-text="message"></span>
        <button @click="show = false" class="ml-auto text-red-500 hover:text-red-700 font-bold">✕</button>
    </div>

</div>

