<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('components/head-theme-script')
    <title>{{ config('app.name', 'Laravel') }} - Products</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    

    <link rel="stylesheet" href="{{ asset('css/products_style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/navbar_style.css') }}" />
    <link rel="icon" type="image/x-icon" href="/media/media_webp/favicon.ico" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="transition-colors duration-300" style="background-color: var(--page); color: var(--text);">
    @include('components/nav_bar_customer')

    <div class="container mt-5 pb-5">
        <div class="text-center mb-5">
            <h1 style="color: var(--text); font-family: 'Playfair Display', serif;">Store</h1>
        </div>

        <div class="row g-4">
            @include('components/sidebar')

            <div class="col-lg-9 col-md-8">
                <div class="d-flex align-items-center justify-content-between border rounded-3 px-3 py-2 mb-3 shadow-sm transition-all"
                     style="background-color: var(--page); border-color: var(--border) !important;">
                    <span style="color: var(--muted); font-size: 0.875rem;">
                        <strong style="color: var(--text);">{{ $products->total() - 1 }}</strong> products found
                    </span>
                    <div class="d-flex align-items-center gap-2">
                        <label class="small mb-0" style="color: var(--muted);">Sort:</label>
                        <select class="form-select form-select-sm w-auto border-0 fw-semibold"
                                style="background-color: transparent; color: var(--primary); cursor: pointer;"
                                onchange="document.querySelector('[name=sort]').value=this.value; document.getElementById('filterForm').submit()">
                            <option value="" {{ request('sort') == '' ? 'selected' : '' }}>Default</option>
                            <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Price ↑</option>
                            <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Price ↓</option>
                            <option value="rating" {{ request('sort') == 'rating' ? 'selected' : '' }}>Top Rated</option>
                            <option value="name_asc" {{ request('sort') == 'name_asc' ? 'selected' : '' }}>A → Z</option>
                            <option value="name_desc" {{ request('sort') == 'name_desc' ? 'selected' : '' }}>Z → A</option>
                        </select>
                    </div>
                </div>

                <div class="row g-3">
                    @forelse($products as $product)
                        @if (!($product->p_category == 'shipping'))
                            <div class="col-sm-6 col-xl-4">
                                <a href="{{ route('products.show', $product->pid) }}" class="text-decoration-none">
                                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden transition-all hover-lift"
                                         style="background-color: var(--page); border: 1px solid var(--border) !important;">
                                        
                                        <div class="p-3" style="background-color: rgba(var(--primary-rgb, 0,0,0), 0.03);">
                                            <img src="{{ asset($product->p_image) }}" alt="{{ $product->p_name }}"
                                                 class="card-img-top" style="height:180px; object-fit:contain;">
                                        </div>

                                        <div class="card-body pb-1">
                                            <span class="badge mb-1" 
                                                  style="background-color: var(--primary); color: var(--page); opacity: 0.8;">
                                                {{ $product->p_category }}
                                            </span>
                                            <h6 class="card-title fw-semibold mt-1 mb-1" style="color: var(--text);">{{ $product->p_name }}</h6>
                                            <p class="card-text small" style="color: var(--muted);">
                                                {{ Str::limit($product->p_description, 65) }}
                                            </p>
                                        </div>

                                        <div class="card-footer border-top d-flex justify-content-between align-items-center py-2"
                                             style="background-color: transparent; border-color: var(--border) !important;">
                                            <span class="small">
                                                @if ($product->reviews_avg_r_rating)
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        <span style="color: {{ $product->reviews_avg_r_rating >= $i ? '#f5a623' : 'var(--border)' }};">★</span>
                                                    @endfor
                                                    <span class="fw-semibold" style="color: var(--text);">{{ number_format($product->reviews_avg_r_rating, 1) }}</span>
                                                @else
                                                    <span style="color: var(--muted); font-style: italic; font-size:.75rem">No reviews</span>
                                                @endif
                                            </span>
                                            
                                            <span class="fw-bold" style="color: {{ $product->p_stock > 0 ? 'var(--primary)' : '#dc3545' }};">
                                                {{ $product->p_stock > 0 ? '£' . number_format($product->p_price, 2) : 'Out of Stock' }}
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @empty
                        <div class="col-12 text-center py-5" style="color: var(--muted);">
                            <p class="fs-1">🌿</p>
                            <p>No products found. Try adjusting your filters.</p>
                        </div>
                    @endforelse
                </div>

                @if (method_exists($products, 'links'))
                    <div class="mt-4 custom-pagination">
                        {{ $products->appends(request()->query())->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    @include('components/chatbot_button')
    @include('components/footer')
</body>
</html>