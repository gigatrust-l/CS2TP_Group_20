<div class="flex flex-col min-h-screen">
    <div
        class="px-6 rounded-lg mx-auto max-w-[1320px] shadow-sm border border-[#e5e7eb] bg-white dark:bg-[var(--page)] dark:shadow-lg  shadow-white py-6 my-12">
        <div class="flex items-center text-sm">
            <ol class="flex items-center pl-8">
                <li class="flex items-center">
                    <a href="/"
                        class="text-[var(--footer-link)] hover:text-[var(--footer-link-hover)]  transition-colors"
                        style="">Naturale</a>
                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                        class="w-4 h-4 mx-3 fill-black dark:fill-white">
                        <path id="Shape 1" class="s0"
                            d="m373.29 227.76c14.29 15.62 14.29 40.99 0 56.6l-182.82 199.93c-14.29 15.62-37.48 15.62-51.76 0-14.29-15.62-14.29-40.98 0-56.6l157-171.69-156.89-171.69c-14.28-15.62-14.28-40.98 0-56.6 14.28-15.62 37.48-15.62 51.76 0 0 0 182.83 199.93 182.71 200.05z" />
                    </svg>
                </li>
                <li class="flex items-center">
                    <a href="/products"
                        class="text-[var(--footer-link)] hover:text-[var(--footer-link-hover)]  transition-colors"
                        style="">All products</a>
                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                        class="w-4 h-4 mx-3 fill-black dark:fill-white">
                        <path id="Shape 1" class="s0"
                            d="m373.29 227.76c14.29 15.62 14.29 40.99 0 56.6l-182.82 199.93c-14.29 15.62-37.48 15.62-51.76 0-14.29-15.62-14.29-40.98 0-56.6l157-171.69-156.89-171.69c-14.28-15.62-14.28-40.98 0-56.6 14.28-15.62 37.48-15.62 51.76 0 0 0 182.83 199.93 182.71 200.05z" />
                    </svg>
                </li>
                <li class="flex items-center">
                    <a href="/products?type={{ $product->p_category }}"
                        class="text-[var(--footer-link)] hover:text-[var(--footer-link-hover)]  transition-colors "
                        style="">{{ $product->p_category }}</a>
                </li>
            </ol>
        </div>
        <div class="grid grid-cols-12 gap-8 mt-6">

            <!-- Product Image -->
            <div class="col-span-12 md:col-span-3 mb-6">
                <img class="product-img shadow-sm w-full h-auto rounded" src="{{ asset($product->p_image) }}"
                    alt="{{ $product->p_name }}" />
            </div>

            <!-- Product Details -->
            <div class="col-span-12 md:col-span-6">
                <h1 class="text-3xl font-semibold mb-4">{{ $product->p_name }}</h1>
                <div class="mb-3">
                    <span>
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
                            <span class="font-semibold">{{ number_format($product->reviews_avg_r_rating, 1) }}</span>
                            <span class="text-[var(--footer-link-hover)]">/5</span>
                        @else
                            <span class="text-[var(--footer-link-hover)] italic text-xs">No reviews</span>
                        @endif
                    </span>
                </div>
                <div class="mb-4">
                    <span class="text-2xl font-normal">
                        £{{ number_format($product->p_price, 2) }}
                        @if ($product->p_volume)
                            | {{ $product->p_volume }}ml
                        @endif
                    </span>
                </div>
                <div class="mb-6">
                    <h5 class="product-section-title text-lg font-semibold mb-2">Description</h5>
                    <p class="mb-2 text-[var(--footer-link-hover)]">{{ $product->p_description }}</p>
                </div>

                @if ($product->p_ingredients)
                    <div class="mb-6">
                        <h5 class="product-section-title text-lg font-semibold mb-2">Ingredients</h5>
                        <p class="mb-2 text-[var(--footer-link-hover)]">{{ $product->p_ingredients }}</p>
                    </div>
                @endif

                @if ($product->p_instructions)
                    <div class="mb-6">
                        <h5 class="product-section-title text-lg font-semibold mb-2">How to use</h5>
                        <p class="mb-2 text-[var(--footer-link-hover)]">{{ $product->p_instructions }}</p>
                    </div>
                @endif

            </div>

            <!-- Purchase Box -->
            <div class="col-span-12 md:col-span-3">
                <div class="p-4 bg-white dark:bg-[var(--page)] border border-gray-200 rounded-lg shadow-sm">
                    <h5 class="font-semibold mb-4 text-lg">Purchase</h5>
                    <p class="mb-2 ">
                        <strong class="mr-1">Stock:</strong>
                        @if ($product->p_stock > 0)
                            <span class="text-green-600"> In Stock</span>
                        @else
                            <span class="text-red-600"> Out of Stock</span>
                        @endif
                    </p>
                    <form action=""class="mt-4">
                        @csrf
                        <input type="hidden" name="pid" value="{{ $product->pid }}">
                        <label class="block text-sm font-semibold mb-2">Quantity</label>
                        <input type="number" name="quantity"
                            class="w-full px-3 py-2 border border-gray-300 bg-white dark:bg-[var(--page)] rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent mb-4 disabled:bg-gray-100 disabled:cursor-not-allowed"
                            value="1" max="{{ max(1, $product->p_stock) }}" min="1"
                            @disabled($product->p_stock == 0)>
                        <button
                            class="w-full bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-md transition-colors disabled:bg-gray-400 disabled:cursor-not-allowed"
                            type="submit" @disabled($product->p_stock == 0)>
                            {{ $product->p_stock > 0 ? 'Add to Cart' : 'Unavailable' }}
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div id="reviews"
        class="px-6 rounded-lg mx-auto w-[1320px] shadow-sm border border-[#e5e7eb] bg-white dark:bg-[var(--page)] dark:shadow-lg  shadow-white py-6 ">
        <div class="row g-5">

            <div name="header" class="ml-2 flex items-center justify-between flex-wrap gap-3">
                <h2 class="font-semibold text-xl text-[var(--text)] leading-tight">
                    {{ __('Reviews') }}
                    <span class="ml-2 text-sm font-normal text-gray-400">({{ $reviews->total() }})</span>
                </h2>

                <div class="flex items-center gap-2">
                    <span class="text-sm text-[var(--footer-link-hover)]">{{ __('Sort by:') }}</span>

                    <button wire:click="setSort('rid')"
                        class="inline-flex items-center gap-1 px-3 py-1.5 rounded-md text-sm font-medium border transition-colors border-[#e5e7eb]
                        {{ $sort === 'rid' ? 'bg-[var(--footer-link)] text-white ' : 'bg-[var(--page)] text-gray-600 dark:text-white  hover:border-gray-300 hover:text-gray-900 dark:hover:text-gray-300' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                        </svg>
                        {{ __('Number') }}
                    </button>

                    <button wire:click="setSort('r_rating')"
                        class="inline-flex items-center gap-1 px-3 py-1.5 rounded-md text-sm font-medium border transition-colors
                        {{ $sort === 'r_rating' ? 'bg-[var(--footer-link)] text-white ' : 'bg-[var(--page)] text-gray-600 dark:text-white  hover:border-gray-300 hover:text-gray-900 dark:hover:text-gray-300' }}">
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
                    </button>
                </div>
            </div>

            <div class=" mt-4 space-y-4">
                @forelse ($reviews as $review)
                    <div
                        class="p-4 border border-gray-100 rounded-lg hover:bg-white hover:shadow-sm transition-all duration-150 bg-white dark:bg-[var(--page)] dark:shadow-lg">
                        <div class="flex items-start justify-between gap-4">

                            <div class="flex items-center gap-3 min-w-0">

                                <div class="min-w-0">
                                    <p class="text-sm font-semibold text-[var(--footer-link)] truncate mb-2">
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
                            <p class="mt-3 text-sm text-[var(--footer-link-hover)] leading-relaxed">
                                {{ $review->r_description }}
                            </p>
                        @endif
                    </div>
                @empty
                    <div class="py-12 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="mx-auto mb-3 w-10 h-10 text-[var(--footer-link-hover)]" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8 10h.01M12 10h.01M16 10h.01M21 16c0 1.1-.9 2-2 2H7l-4 4V6a2 2 0 012-2h14a2 2 0 012 2v10z" />
                        </svg>
                        <p class="text-sm text-[var(--footer-link-hover)]">{{ __('No reviews yet.') }}</p>
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
