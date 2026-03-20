<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('components/head-theme-script')
    <title>Naturale - Checkout Complete</title>
    
    <link rel="stylesheet" href="{{ asset('/css/index_style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/navbar_style.css') }}" />
    <link rel="icon" href="{{ asset('/media/favicon.ico') }}" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    
    {{-- Essential for the dark mode toggle to actually function --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="d-flex flex-column min-vh-100" style="background-color: var(--page); color: var(--text);">
    @include('components/nav_bar_customer')

    <section class="checkout-confirmation container my-5">
        <div class="card shadow-sm border-0" style="background-color: var(--input-bg); color: var(--text); border: 1px solid var(--border) !important;">
            <div class="card-body p-4 p-md-5">
                
                <div class="text-center mb-5">
                    <i class="fa-solid fa-circle-check fa-4x mb-3" style="color: var(--accent);"></i>
                    <h1 class="display-6 fw-bold" style="color: var(--primary);">Checkout Complete!</h1>
                    <p style="color: var(--muted);">Thank you for shopping with Naturale.</p>
                </div>

                <h2 class="h5 mb-3 fw-bold text-uppercase small tracking-wider" style="color: var(--primary);">Order Summary</h2>
                
                <ul class="list-group mb-4 shadow-sm">
                    @foreach ($cart as [$product, $quantity])
                        <li class="list-group-item d-flex justify-content-between align-items-center py-3" 
                            style="background-color: var(--page); border-color: var(--border); color: var(--text);">
                            <div>
                                <strong style="color: var(--text);">{{ $product->p_name }}</strong>
                                @if ($product->p_category !== 'shipping')
                                    <div class="small" style="color: var(--muted);">Quantity: {{ $quantity }}</div>
                                @endif
                            </div>
                            
                            <span class="fw-medium" style="color: var(--text);">
                                £{{ number_format(($product->p_category == 'shipping' ? $product->p_price : $product->p_price * $quantity), 2) }}
                            </span>
                        </li>
                    @endforeach

                    <li class="list-group-item d-flex justify-content-between align-items-center py-3" 
                        style="background-color: var(--input-bg); border-color: var(--border); border-top: 2px solid var(--primary) !important;">
                        <span class="text-uppercase fw-bold small" style="color: var(--primary);">Total (GBP)</span>
                        <strong class="h4 mb-0" style="color: var(--primary);">£{{ number_format($runningTotal, 2) }}</strong>
                    </li>
                </ul>

                <div class="text-center mt-4">
                    <a href="/products" class="btn px-4 py-2 fw-bold" 
                       style="background-color: var(--bg); color: var(--page); border: none;">
                       CONTINUE SHOPPING
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include('components/footer')
</body>
</html>