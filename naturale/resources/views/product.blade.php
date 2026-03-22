<x-layouts.storefront title="{{ config('app.name', 'Laravel') }} - {{ $product->p_name }}">

    <x-slot:styles>
        <link rel="stylesheet" href="{{ asset('css/product_style.css') }}" />
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

    </div>

    @if ($showWindow)
        <div x-cloak x-data="{ show: true, visible: true }" x-show="show" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black/50 z-[998]"
            @click="visible = false; setTimeout(() => show = false, 200)"
            @close-window.window="visible = false; setTimeout(() => show = false, 200)">
            <div x-cloak x-show="visible" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-[-20px]"
                x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 translate-y-[-20px]"
                class="fixed inset-0 z-[999] flex items-center justify-center p-4">
                <div class="div-bg border rounded-3 shadow-2xl min-w-96 p-6 relative " @click.stop>
                    <button @click="visible = false; setTimeout(() => show = false, 200)"
                        class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 text-xl font-bold leading-none">
                        &times;
                    </button>

                    <div class="flex items-center gap-2 justify-center mb-6">
                        <svg class="w-6 h-6 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        <h2 class="text-base font-bold tracking-wide">
                            Product Added Successfully
                        </h2>
                    </div>

                    <div class="flex items-center gap-4 div-bg border rounded-3 p-3 mb-6">
                        @if ($product->p_image)
                            <img src="{{ asset($product->p_image) }}" alt="{{ $product->p_name }}"
                                class="w-16 h-16 object-contain rounded">
                        @endif
                        <div>
                            <p class="font-semibold text-sm ">{{ $product->p_name }}</p>
                            <p class="text-sm text-gray-400">Qty: {{ $quantity }}</p>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <button @click="visible = false; setTimeout(() => show = false, 200)"
                            class="flex-1 div-bg border rounded-3 font-medium py-2 px-4 hover:bg-gray-50 dark:hover:bg-green-950 transition-colors">
                            Continue Shopping
                        </button>
                        <a href="{{ route('cart.view') }}"
                            class="flex-1 flex items-center justify-center bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-md transition-colors"
                            style="text-decoration: none;">
                            Go to Cart
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="d-flex flex-column min-vh-100">
        <div class="container border rounded-3 div-bg">
            <div class="flex items-center text-sm pt-4">
                <ol class="flex items-center">
                    <li class="flex items-center">
                        <a href="/" class="breadcrum-a" style="">Naturale</a>
                        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                            class="w-4 h-4 mx-3">
                            <style>
                                .s0 {
                                    fill: var(--footer-main)
                                }
                            </style>
                            <path id="Shape 1" class="s0"
                                d="m373.29 227.76c14.29 15.62 14.29 40.99 0 56.6l-182.82 199.93c-14.29 15.62-37.48 15.62-51.76 0-14.29-15.62-14.29-40.98 0-56.6l157-171.69-156.89-171.69c-14.28-15.62-14.28-40.98 0-56.6 14.28-15.62 37.48-15.62 51.76 0 0 0 182.83 199.93 182.71 200.05z" />
                        </svg>
                    </li>
                    <li class="flex items-center">
                        <a href="/products" class="breadcrum-a" style="">All products</a>
                        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                            class="w-4 h-4 mx-3">
                            <style>
                                .s0 {
                                    fill: var(--footer-main)
                                }
                            </style>
                            <path id="Shape 1" class="s0"
                                d="m373.29 227.76c14.29 15.62 14.29 40.99 0 56.6l-182.82 199.93c-14.29 15.62-37.48 15.62-51.76 0-14.29-15.62-14.29-40.98 0-56.6l157-171.69-156.89-171.69c-14.28-15.62-14.28-40.98 0-56.6 14.28-15.62 37.48-15.62 51.76 0 0 0 182.83 199.93 182.71 200.05z" />
                        </svg>
                    </li>
                    <li class="flex items-center">
                        <a href="/products?type={{ $product->p_category }}" class="breadcrum-a "
                            style="">{{ $product->p_category }}</a>
                    </li>
                </ol>
            </div>
            <div class="row g-5">

                <!-- Product Image -->
                <div class="col-md-6">
                    <div class="product-image-wrapper">
                        <img class="product-img" src="{{ asset($product->p_image) }}" alt="{{ $product->p_name }}" />
                    </div>
                </div>
                <!-- Product Details -->
                <div class="col-md-6 product-info">
                    @if ($product->p_stock > 0)
                        <span class="in-stock product-pill">In Stock</span>
                    @else
                        <span class="out-stock product-pill" style="background: #f67676; color: white;">Out Of
                            Stock</span>
                    @endif

                    <h1 class="product-title">{{ $product->p_name }}</h1>

                    <div class="mb-2">
                        <span class="">
                            @if ($product->reviews_avg_r_rating)
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($product->reviews_avg_r_rating >= $i)
                                        <span style="color: #f5a623;">★</span>
                                    @elseif ($product->reviews_avg_r_rating >= $i - 0.5)
                                        <span style="position: relative; display: inline-block;">
                                            <span style="color: #ccc;">★</span>
                                            <span
                                                style="position: absolute; left: 0; width: 50%; overflow: hidden; color: #f5a623;">★</span>
                                        </span>
                                    @else
                                        <span style="color: #ccc;">★</span>
                                    @endif
                                @endfor
                                <span
                                    class="fw-semibold">{{ number_format($product->reviews_avg_r_rating, 1) }}</span>
                                <span class="text-muted">/5</span>
                            @else
                                <span class="text-muted fst-italic" style="font-size:.75rem">No
                                    reviews</span>
                            @endif
                        </span>
                    </div>

                    <p class="product-price">
                        £{{ number_format($product->p_price, 2) }}
                        @if ($product->p_volume)
                            <span class="product-volume">| {{ number_format($product->p_volume) }}ml</span>
                        @endif
                    </p>

                    <p class="product-description">{{ $product->p_description }}</p>

                    <!-- Purchase -->
                    <div class="purchase-box">
                        <form action="{{ route('product.cart.add') }}" method="POST" class="product-actions">
                            @csrf
                            <input type="hidden" name="pid" value="{{ $product->pid }}">

                            <input type="number" name="quantity" value="1" min="1"
                                max="{{ max(1, $product->p_stock) }}" @disabled($product->p_stock == 0)>

                            <button type="submit" @disabled($product->p_stock == 0)
                                class="{{ $product->p_stock == 0 ? 'product-actions-button-disabled' : 'product-actions-button' }}">
                                {{ $product->p_stock > 0 ? 'Add to Cart' : 'Unavailable' }}
                            </button>
                        </form>
                    </div>

                    <!-- Features -->
                    <div class="product-features">
                        <div class="feature-item">
                            <span><i class="fa-solid fa-truck" style="color: rgb(76, 175, 114);"></i></span>
                            <p>£4.99 Shipping</p>
                        </div>
                        <div class="feature-item">
                            <span><i class="fa-solid fa-rotate-right" style="color: rgb(76, 175, 114);"></i></span>
                            <p>Easy Returns</p>
                        </div>
                        <div class="feature-item">
                            <span><i class="fa-regular fa-heart" style="color: rgb(76, 175, 114);"></i></span>
                            <p>Cruelty-Free</p>
                        </div>
                    </div>
                </div>

                <div class="container pb-3 info-cards">
                    <div class="row g-4">
                        <!-- How to Use -->
                        @if ($product->p_instructions)
                            <div class="col-md-6">
                                <div class="info-card border rounded-3">
                                    <h4>How to use</h4>
                                    <p>{{ $product->p_instructions }}</p>
                                </div>
                            </div>
                        @endif

                        <!-- Ingredients -->
                        @if ($product->p_ingredients)
                            <div class="col-md-6">
                                <div class="info-card  border rounded-3">
                                    <h4>Ingredients</h4>
                                    <p>{{ $product->p_ingredients }}</p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div id="reviews" class="container mb-5 py-5 border rounded-3 div-bg">
            <div class="row g-5 mx-2">

                <div name="header" class="ml-2 flex items-center justify-between flex-wrap gap-3">
                    <h2 class="font-semibold text-xl leading-tight">
                        {{ __('Reviews') }}
                        <span class="ml-2 text-sm font-normal text-gray-300">({{ $reviews->total() }})</span>
                    </h2>

                    <div class="flex items-center gap-2">
                        <span class="text-sm text-gray-500">{{ __('Sort by:') }}</span>

                        <a href="{{ request()->fullUrlWithQuery(['sort' => 'rid', 'direction' => 'asc']) }}#reviews"
                            class="inline-flex items-center gap-1 px-3 py-1.5 rounded-md text-sm font-medium border transition-colors
                            {{ $sort === 'rid' ? 'sort-active' : 'sort-inactive' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                            </svg>
                            {{ __('Number') }}
                        </a>

                        <a href="{{ request()->fullUrlWithQuery(['sort' => 'r_rating', 'direction' => $sort === 'r_rating' && $direction === 'desc' ? 'asc' : 'desc']) }}#reviews"
                            class="inline-flex items-center gap-1 px-3 py-1.5 rounded-md text-sm font-medium border transition-colors
                          {{ $sort === 'r_rating' ? 'sort-active' : 'sort-inactive' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            {{ __('Rating') }}
                            @if ($sort === 'r_rating')
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    @if ($direction === 'desc')
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    @else
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                    @endif
                                </svg>
                            @endif
                        </a>
                    </div>
                </div>

                <div class=" mt-4 space-y-4">
                    @forelse ($reviews as $review)
                        @if ($review->isVerified())
                            <div
                                class="p-4  border-gray-100 rounded-lg bg-gray-50 hover:bg-white hover:shadow-sm transition-all duration-150 border rounded-3 div-bg">
                                <div class="flex items-start justify-between gap-4">

                                    <div class="flex items-center gap-3 min-w-0">

                                        <div class="min-w-0">
                                            <p class="text-sm font-semibold truncate">
                                                {{ $review->r_title ?? __('Untitled Review') }}
                                            </p>
                                            <p class="text-xs text-gray-400">
                                                @if ($review->r_anonymous)
                                                    Verified Customer
                                                @else
                                                    {{ $review->customer->c_name }}
                                                @endif
                                            </p>
                                        </div>
                                    </div>

                                    <div class="flex items-center gap-0.5 shrink-0"
                                        aria-label="{{ __(':rating out of 5 stars', ['rating' => $review->r_rating]) }}">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-4 h-4 {{ $i <= $review->r_rating ? 'text-amber-400' : 'text-gray-200' }}"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        @endfor
                                    </div>
                                </div>

                                @if (!empty($review->r_description))
                                    <p class="mt-3 text-sm  leading-relaxed">
                                        {{ $review->r_description }}
                                    </p>
                                @endif
                            </div>
                        @endif
                    @empty
                        <div class="py-12 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-3 w-10 h-10 text-gray-200"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8 10h.01M12 10h.01M16 10h.01M21 16c0 1.1-.9 2-2 2H7l-4 4V6a2 2 0 012-2h14a2 2 0 012 2v10z" />
                            </svg>
                            <p class="text-sm text-gray-400">{{ __('No reviews yet.') }}</p>
                        </div>
                    @endforelse
                </div>

                {{-- Pagination --}}
                @if ($reviews->hasPages())
                    <div class="mt-4">
                        {{ $products->appends(request()->query())->links() }}
                    </div>
                @endif

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
        </script>
    </x-slot:scripts>

</x-layouts.storefront>
