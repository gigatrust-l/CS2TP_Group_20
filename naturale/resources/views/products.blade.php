<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} - Products</title>
<!--    <link rel="stylesheet" href="{{ asset('css/products_style.css')}}" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/x-icon" href="/media/media_webp/favicon.ico" />
    <!--This is to link google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
</head>

<body>
    @include('components/nav_bar_customer')

    <div class="container mt-5">

        <div class="text-center mb-4">
            <h1>Browse our Products</h1>
            <p class="text-muted">Find the perfect natural haircare product for your routine.</p>
        </div>
        <!-- Search and Filter Bar -->
        <form class="p-4 bg-white shadow-sm rounded mb-5" method="GET">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Search by Name</label>
                    <input type="text" class="form-control" placeholder="Product name..." name="name"
                        value="{{ request('name') }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Filter by Category</label>
                    <select name="type" class="form-select">
                        <option value="">Any</option>
                        @foreach($categories as $category)
                            <option value="{{ $category }}" {{ request('type') == $category ? 'selected' : '' }}>
                                {{ $category }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-2 d-flex align-items-end">
                    <button type="submit" class="btn btn-success w-100">Search</button>
                </div>
            </div>
        </form>

        <div class="row g-4">
            @forelse($products as $product)
                <div class="col-md-4 col-lg-3">
                    <a href="{{ route('products.show', $product->pid) }}" class="text-decoration-none">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="{{ asset($product->p_image) }}" alt="{{ $product->p_name }}" class="card-img-top"
                                style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->p_name }}</h5>

                                <p class="text-muted small mb-1">
                                    {{ $product->p_category }}
                                </p>

                                <p class="small text-secondary">
                                    {{ Str::limit($product->p_description, 60) }}
                                </p>
                            </div>

                            <div class="card-footer bg-white border-0">
                                £{{ number_format($product->p_price, 2) }}
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <p>No products found.</p>
            @endforelse
        </div>
    </div>

    @include('components/chatbot_button')
    
    @include('components/footer')

</body>

</html>
