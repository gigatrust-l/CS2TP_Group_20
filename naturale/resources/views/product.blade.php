<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content ="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} - {{ $product->p_name }}</title>
    <link rel="stylesheet" href="{{ asset('css/product_style.css') }}" />
    <link rel="icon" type="image/x-icon" href="/media/media_webp/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/navbar_style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column min-vh-100">
    @include('components/nav_bar_customer')

    <div class="container my-5 py-4 max bg-[var(--input-bg)] shadow-sm sm:rounded-lg border border-[var(--border)] text-[var(--text)]">
        <div class="flex items-center text-sm">
            <ol class="flex items-center">
                <li class="flex items-center">
                    <a href="/" class="breadcrum-a" style="">Naturale</a>
                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 mx-3">
                        <style>
                            .s0 {
                                fill: var(--text) !important;
                            }
                        </style>
                        <path id="Shape 1" class="s0"
                            d="m373.29 227.76c14.29 15.62 14.29 40.99 0 56.6l-182.82 199.93c-14.29 15.62-37.48 15.62-51.76 0-14.29-15.62-14.29-40.98 0-56.6l157-171.69-156.89-171.69c-14.28-15.62-14.28-40.98 0-56.6 14.28-15.62 37.48-15.62 51.76 0 0 0 182.83 199.93 182.71 200.05z" />
                    </svg>
                </li>
                <li class="flex items-center">
                    <a href="/products" class="breadcrum-a" style="">All products</a>
                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 mx-3">
                        <style>
                            .s0 {
                                fill: var(--text)
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
            <div class="col-md-3 mb-4">
                <img class="product-img shadow-sm" src="{{ asset($product->p_image) }}" alt="{{ $product->p_name }}" />
            </div>
            <!-- Product Details -->
            <div class="col-md-6">
                <h1 class="h2 mb-3">{{ $product->p_name }}</h1>
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
                            <span class="fw-semibold">{{ number_format($product->reviews_avg_r_rating, 1) }}</span>
                            <span class="text-[var(--muted)]">/5</span>
                        @else
                            <span class="text-[var(--muted)] fst-italic" style="font-size:.75rem">No
                                reviews</span>
                        @endif
                    </span>
                </div>
                <div class="mb-3">
                    <span class="h4">
                        £{{ number_format($product->p_price, 2) }}
                        @if ($product->p_volume)
                            | {{ $product->p_volume }}ml
                        @endif
                    </span>
                </div>
                <div class="mb-4">
                    <h5 class="product-section-title">Description</h5>
                    <p class="mb-2">{{ $product->p_description }}</p>
                </div>

                @if ($product->p_ingredients)
                    <div class="mb-4">
                        <h5 class="product-section-title">Ingredients</h5>
                        <p class="mb-2">{{ $product->p_ingredients }}</p>
                    </div>
                @endif

                @if ($product->p_instructions)
                    <div class="mb-4">
                        <h5 class="product-section-title">How to use</h5>
                        <p class="mb-2"> {{ $product->p_instructions }}</p>
                    </div>
                @endif

            </div>

            <div class="col-md-3">
                <div class="p-3 bg-[var(--page)] border border-[var(--border)] rounded shadow-[var(--shadow)]">
                    <h5 class="fw-semibold mb-3">Purchase</h5>
                    <p class="mb-1">
                        <strong>Stock:</strong>
                        @if ($product->p_stock > 0)
                            <span class="text-success">In Stock</span>
                        @else
                            <span class="text-danger">Out of Stock</span>
                        @endif
                    </p>
                    <form action="{{ route('cart.add') }}" method="POST" class="mt-3">
                        @csrf
                        <input type="hidden" name="pid" value="{{ $product->pid }}">
                        <label class="form-label fw-semibold text-[var(--text)]">Quantity</label>
                        <input type="number" name="quantity" class="form-control mb-3 bg-[var(--input-bg)] text-[var(--text)] border-[var(--border)]" value="1"
                            max="{{ max(1, $product->p_stock) }}" min="1" @disabled($product->p_stock == 0)>
                        <button class="btn bg-[var(--accent)] hover:opacity-90 border-0 text-white w-100" type="submit" @disabled($product->p_stock == 0)>
                            {{ $product->p_stock > 0 ? 'Add to Cart' : 'Unavailable' }}
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div id="reviews" class="container mb-5 py-5 max bg-[var(--input-bg)] shadow-[var(--shadow)] sm:rounded-lg border border-[var(--border)]">
        <div class="row g-5">

            <div name="header" class="ml-2 flex items-center justify-between flex-wrap gap-3">
                <h2 class="font-semibold text-xl text-[var(--text)] leading-tight">
                    {{ __('Reviews') }}
                    <span class="ml-2 text-sm font-normal text-[var(--muted)]">({{ $reviews->total() }})</span>
                </h2>

                <div class="flex items-center gap-2">
                    <span class="text-sm text-gray-500">{{ __('Sort by:') }}</span>

                    <a href="{{ request()->fullUrlWithQuery(['sort' => 'rid', 'direction' => 'asc']) }}#reviews"
                        class="inline-flex items-center gap-1 px-3 py-1.5 rounded-md text-sm font-medium border transition-colors
                          {{ $sort === 'rid' ? 'bg-gray-900 text-white border-gray-900' : 'bg-[var(--input-bg)] text-gray-600 border-gray-200 hover:border-gray-400 hover:text-[var(--text)]' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                        </svg>
                        {{ __('Number') }}
                    </a>

                    <a href="{{ request()->fullUrlWithQuery(['sort' => 'r_rating', 'direction' => $sort === 'r_rating' && $direction === 'desc' ? 'asc' : 'desc']) }}#reviews"
                        class="inline-flex items-center gap-1 px-3 py-1.5 rounded-md text-sm font-medium border transition-colors
                          {{ $sort === 'r_rating' ? 'bg-gray-900 text-white border-gray-900' : 'bg-[var(--input-bg)] text-gray-600 border-gray-200 hover:border-gray-400 hover:text-[var(--text)]' }}">
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
                    <div
                        class="p-4 border border-[var(--border)] rounded-lg bg-gray-50 hover:bg-[var(--input-bg)] hover:shadow-sm transition-all duration-150">
                        <div class="flex items-start justify-between gap-4">

                            <div class="flex items-center gap-3 min-w-0">
                                
                                <div class="min-w-0">
                                    <p class="text-sm font-semibold text-[var(--text)]">
                                        {{ $review->r_title ?? __('Untitled Review') }}
                                    </p>
                                    <p class="text-xs text-[var(--muted)]">
                                        {{ $review->customer->c_name }}: #{{ $review->rid }}
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
                            <p class="mt-3 text-sm text-[var(--text)] leading-relaxed opacity-90">
                                {{ $review->r_description }}
                            </p>
                        @endif
                    </div>
                @empty
                    <div class="py-12 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-3 w-10 h-10 text-gray-200"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8 10h.01M12 10h.01M16 10h.01M21 16c0 1.1-.9 2-2 2H7l-4 4V6a2 2 0 012-2h14a2 2 0 012 2v10z" />
                        </svg>
                        <p class="text-sm text-[var(--muted)]">{{ __('No reviews yet.') }}</p>
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
    <footer>
        @include('components/footer')
    </footer>
</body>

</html>
