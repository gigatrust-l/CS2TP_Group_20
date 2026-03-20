<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} - {{ $product->p_name }}</title>
    
    @include('components/head-theme-script')

    <link rel="stylesheet" href="{{ asset('css/product_style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/navbar_style.css') }}" />
    <link rel="icon" type="image/x-icon" href="/media/media_webp/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="d-flex flex-column min-vh-100" style="background-color: var(--page); color: var(--text);">
    @include('components/nav_bar_customer')

    <div class="container my-5 py-4 border shadow-sm rounded-lg" 
         style="background-color: var(--input-bg); border-color: var(--border) !important;">
        
        <div class="flex items-center text-sm mb-4">
            <ol class="flex items-center p-0 m-0">
                <li class="flex items-center">
                    <a href="/" class="text-decoration-none" style="color: var(--primary);">Naturale</a>
                    <i class="fa-solid fa-chevron-right mx-3 small" style="color: var(--muted);"></i>
                </li>
                <li class="flex items-center">
                    <a href="/products" class="text-decoration-none" style="color: var(--primary);">All products</a>
                    <i class="fa-solid fa-chevron-right mx-3 small" style="color: var(--muted);"></i>
                </li>
                <li class="flex items-center">
                    <span style="color: var(--muted);">{{ $product->p_category }}</span>
                </li>
            </ol>
        </div>

        <div class="row g-5">
            <div class="col-md-4 mb-4 text-center">
                <div class="p-4 rounded-lg" style="background-color: var(--page);">
                    <img class="img-fluid" src="{{ asset($product->p_image) }}" alt="{{ $product->p_name }}" style="max-height: 400px; object-fit: contain;" />
                </div>
            </div>

            <div class="col-md-5">
                <h1 class="h2 mb-3" style="color: var(--text); font-family: 'Playfair Display', serif;">{{ $product->p_name }}</h1>
                
                <div class="mb-2">
                    @if ($product->reviews_avg_r_rating)
                        @for ($i = 1; $i <= 5; $i++)
                            <span style="color: {{ $product->reviews_avg_r_rating >= $i ? '#f5a623' : 'var(--border)' }};">★</span>
                        @endfor
                        <span class="fw-semibold ms-1">{{ number_format($product->reviews_avg_r_rating, 1) }}</span>
                        <span style="color: var(--muted);">/5</span>
                    @else
                        <span style="color: var(--muted); font-style: italic; font-size:.75rem">No reviews yet</span>
                    @endif
                </div>

                <div class="mb-4">
                    <span class="h3" style="color: var(--primary);">
                        £{{ number_format($product->p_price, 2) }}
                        @if ($product->p_volume)<span class="h5 fw-light" style="color: var(--muted);"> | {{ $product->p_volume }}ml</span>@endif
                    </span>
                </div>

                <div class="mb-4">
                    <h5 class="fw-bold text-uppercase small tracking-wider" style="color: var(--primary);">Description</h5>
                    <p style="color: var(--text); opacity: 0.9;">{{ $product->p_description }}</p>
                </div>

                @if ($product->p_ingredients)
                    <div class="mb-4">
                        <h5 class="fw-bold text-uppercase small tracking-wider" style="color: var(--primary);">Ingredients</h5>
                        <p class="small" style="color: var(--muted);">{{ $product->p_ingredients }}</p>
                    </div>
                @endif
            </div>

            <div class="col-md-3">
                <div class="p-4 border rounded shadow-sm" style="background-color: var(--page); border-color: var(--border) !important;">
                    <h5 class="fw-semibold mb-3">Purchase</h5>
                    <p class="mb-1">
                        <strong style="color: var(--muted);">Stock:</strong>
                        <span class="{{ $product->p_stock > 0 ? 'text-success' : 'text-danger' }} fw-bold">
                            {{ $product->p_stock > 0 ? 'In Stock' : 'Out of Stock' }}
                        </span>
                    </p>

                    <form action="{{ route('cart.add') }}" method="POST" class="mt-3">
                        @csrf
                        <input type="hidden" name="pid" value="{{ $product->pid }}">
                        <label class="form-label fw-semibold small" style="color: var(--muted);">Quantity</label>
                        <input type="number" name="quantity" class="form-control mb-3" 
                               style="background-color: var(--input-bg); color: var(--text); border-color: var(--border);"
                               value="1" max="{{ max(1, $product->p_stock) }}" min="1" @disabled($product->p_stock == 0)>
                        
                        <button class="btn w-100 fw-bold py-2" 
                                style="background-color: var(--primary); color: var(--page); border: none;"
                                type="submit" @disabled($product->p_stock == 0)>
                            {{ $product->p_stock > 0 ? 'ADD TO CART' : 'UNAVAILABLE' }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="reviews" class="container mb-5 py-5 border rounded-lg" 
         style="background-color: var(--input-bg); border-color: var(--border) !important;">
        
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4 px-2">
            <h2 class="h4 fw-bold mb-0">Reviews <span style="color: var(--muted); font-weight: normal;">({{ $reviews->total() }})</span></h2>

            <div class="d-flex gap-2">
                <a href="{{ request()->fullUrlWithQuery(['sort' => 'rid', 'direction' => 'asc']) }}#reviews"
                   class="btn btn-sm border" 
                   style="background: {{ $sort === 'rid' ? 'var(--primary)' : 'var(--page)' }}; color: {{ $sort === 'rid' ? 'var(--page)' : 'var(--text)' }}; border-color: var(--border);">
                   # ID
                </a>
                <a href="{{ request()->fullUrlWithQuery(['sort' => 'r_rating', 'direction' => $sort === 'r_rating' && $direction === 'desc' ? 'asc' : 'desc']) }}#reviews"
                   class="btn btn-sm border"
                   style="background: {{ $sort === 'r_rating' ? 'var(--primary)' : 'var(--page)' }}; color: {{ $sort === 'r_rating' ? 'var(--page)' : 'var(--text)' }}; border-color: var(--border);">
                   Rating ★
                </a>
            </div>
        </div>

        <div class="row g-3 px-2">
            @forelse ($reviews as $review)
                <div class="col-12">
                    <div class="p-4 border rounded-lg transition-all" 
                         style="background-color: var(--page); border-color: var(--border) !important;">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="fw-bold mb-0" style="color: var(--text);">{{ $review->r_title ?? 'Untitled Review' }}</p>
                                <p class="small mb-2" style="color: var(--muted);">{{ $review->customer->c_name }} • <span class="opacity-75">#{{ $review->rid }}</span></p>
                            </div>
                            <div class="shrink-0">
                                @for ($i = 1; $i <= 5; $i++)
                                    <span style="color: {{ $i <= $review->r_rating ? '#f5a623' : 'var(--border)' }};">★</span>
                                @endfor
                            </div>
                        </div>
                        <p class="mt-2 mb-0" style="color: var(--text); opacity: 0.85;">{{ $review->r_description }}</p>
                    </div>
                </div>
            @empty
                <div class="text-center py-4" style="color: var(--muted);">
                    <i class="fa-regular fa-comment-dots fa-2x mb-2"></i>
                    <p>No reviews yet for this product.</p>
                </div>
            @endforelse
        </div>
    </div>

    @include('components/footer')
</body>
</html>