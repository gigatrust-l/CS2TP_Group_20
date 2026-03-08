<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content ="width=device-width, initial-scale=1" >
    <title>Naturale Product Details - {{ $product->p_name }}</title>
    <link rel="stylesheet" href="{{ asset('css/product_style.css')}}" />
    <link rel="icon" type="image/x-icon" href="/media/media_webp/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    @include('components/nav_bar_customer')

    <div class="container py-5">
        <div class="row g-5">
            <!-- Product Image -->
            <div class="col-md-3 mb-4">
            	<img class="product-img shadow-sm" src="{{ asset($product->p_image) }}" alt="{{ $product->p_name }}"/>
            </div>
            <!-- Product Details -->
            <div class="col-md-5">
                <h1 class="h2 mb-3">{{ $product->p_name }}</h1>
                <div class="mb-3">
                    <span class="h4">
                        £{{ number_format($product->p_price, 2)}}
                        @if ($product->p_volume)
                            | {{ $product->p_volume }}ml
                        @endif</span>
                </div>
                <div class="mb-4">
                    <h5 class="product-section-title">Description</h5>
                    <p class="mb-2">{{ $product->p_description }}</p>
                </div>
                
                @if($product->p_ingredients)
                    <div class="mb-4">
                        <h5 class="product-section-title">Ingredients</h5>
                        <p class="mb-2">{{ $product->p_ingredients }}</p>
                    </div>
                @endif

                @if($product->p_instructions)
                    <div class="mb-4">
                        <h5 class="product-section-title">How to use</h5>
                        <p class="mb-2"> {{ $product->p_instructions }}</p>
                    </div>
                @endif

            </div>

            <div class="col-md-3">
                <div class="p-3 bg-light border rounded shadow-sm">
                    <h5 class="fw-semibold mb-3">Purchase</h5>
                    <p class="mb-1">
                        <strong>Stock:</strong>
                        @if($product->p_stock > 0)
                            <span class="text-success">In Stock</span>
                        @else
                            <span class="text-danger">Out of Stock</span>
                        @endif
                    </p>
                    <form action="{{ route('cart.add') }}" method="POST" class="mt-3">
                        @csrf
                        <input type="hidden" name="pid" value="{{ $product->pid }}">
                        <label class="form-label fw-semibold">Quantity</label>
                        <input type="number"
                               name="quantity"
                               class="form-control mb-3"
                               value="1"
                               max="{{ max(1, $product->p_stock) }}"
                        	   min="1"
                               @disabled($product->p_stock == 0)>
                        <button class="btn btn-success w-100"
                            type="submit"
                            @disabled($product->p_stock == 0)>
                            {{ $product->p_stock > 0 ? 'Add to Cart' : 'Unavailable' }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
	<footer>
    	@include('components/footer')
    </footer>
</body>

</html>
