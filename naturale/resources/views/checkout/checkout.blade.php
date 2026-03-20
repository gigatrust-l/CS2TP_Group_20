<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('components/head-theme-script')
    <title>Naturale - Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/index_style.css') }}" />
    <link rel="icon" href="{{ asset('/media/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('/css/navbar_style.css') }}" />
    {{-- Added Vite for JS functionality --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">

    <style>
        /* This ensures all form elements respect your theme variables */
        .form-control, .form-select {
            background-color: var(--input-bg) !important;
            color: var(--text) !important;
            border-color: var(--border) !important;
        }
        .form-control:focus, .form-select:focus {
            background-color: var(--input-bg) !important;
            color: var(--text) !important;
            border-color: var(--primary) !important;
            box-shadow: 0 0 0 0.25rem rgba(var(--primary-rgb, 13, 110, 253), .25);
        }
        .form-label {
            color: var(--text);
            font-weight: 500;
        }
        hr {
            border-color: var(--border);
            opacity: 0.2;
        }
    </style>
</head>

<body style="background-color: var(--page); color: var(--text);">
    @include('components/nav_bar_customer')

    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color: var(--primary);">Checkout form</h2>
            <p style="color: var(--muted);">Fill in the form below to complete checkout.</p>
        </div>

        <div class="row g-5">
            <div class="col-lg-7">
                <h4 class="mb-3" style="color: var(--text);">Billing Address</h4>

                <form action="{{ route('checkout.confirm') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                id="name" name="name"
                                value="{{ old('name', auth()->user() ? auth()->user()->name : '') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" name="email"
                                value="{{ old('email', auth()->user() ? auth()->user()->email : '') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    @if (auth()->user() && count($addresses) > 0)
                        <div class="mt-4 mb-3">
                            <label class="form-label">Saved Addresses</label>
                            <select class="form-select" id="address_drop_down">
                                <option value="new">Use New Address</option>
                                @foreach ($addresses as $index => $a)
                                    <option value="{{ $index }}">{{ implode(', ', $a) }}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif

                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Address Line 1</label>
                            <input type="text" class="form-control address_input" id="addressLine1"
                                name="addressLine1" value="{{ old('addressLine1') }}" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Address Line 2</label>
                            <input type="text" class="form-control address_input" id="addressLine2"
                                name="addressLine2" value="{{ old('addressLine2') }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">City</label>
                            <input type="text" class="form-control address_input" id="addressCity" name="addressCity"
                                value="{{ old('addressCity') }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">County</label>
                            <input type="text" class="form-control address_input" id="addressCounty"
                                name="addressCounty" value="{{ old('addressCounty') }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Postcode</label>
                            <input type="text" class="form-control address_input" id="addressPostcode"
                                name="addressPostcode" value="{{ old('addressPostcode') }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Country</label>
                            <input type="text" class="form-control address_input" id="addressCountry"
                                name="addressCountry" value="{{ old('addressCountry') }}" required>
                        </div>
                    </div>

                    <hr class="my-4">

                    <h4 class="mb-3" style="color: var(--text);">Payment</h4>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Name on card</label>
                            <input type="text" class="form-control @error('card_name') is-invalid @enderror"
                                id="cardName" name="card_name" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Card number</label>
                            <input type="text" class="form-control @error('card_number') is-invalid @enderror"
                                id="cardNumber" name="card_number" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Expiry</label>
                            <input type="text" class="form-control @error('card_expiry') is-invalid @enderror"
                                id="cardExpiry" name="card_expiry" placeholder="MM/YY" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">CVV</label>
                            <input type="text" class="form-control @error('card_CVV') is-invalid @enderror"
                                id="cardCVV" name="card_CVV" required>
                        </div>
                    </div>

                    <button class="btn btn-lg mt-4 w-100 fw-bold" type="submit" 
                            style="background-color: var(--bg); color: var(--page); border: none;">
                        Complete Checkout
                    </button>

                </form>
            </div>

            <div class="col-lg-5">
                <div class="card shadow-sm border-0" style="background-color: var(--input-bg); border: 1px solid var(--border) !important;">
                    <div class="card-body">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span style="color: var(--primary);">Your Cart</span>
                            <span class="badge rounded-pill" style="background-color: var(--primary); color: var(--page);">{{ $totalQuantity }}</span>
                        </h4>
                        <ul class="list-group mb-3">
                            @foreach ($cart as [$product, $quantity])
                                <li class="list-group-item d-flex justify-content-between lh-condensed" 
                                    style="background-color: var(--page); border-color: var(--border); color: var(--text);">
                                    <div>
                                        <strong style="color: var(--text);">{{ $product->p_name }}</strong>
                                        @if ($product->p_category != 'shipping')
                                            <div style="color: var(--muted); font-size: 0.85rem;">Quantity: {{ $quantity }}</div>
                                        @endif
                                    </div>
                                    <span style="color: var(--text);">£{{ number_format(($product->p_category == 'shipping' ? $product->p_price : $product->p_price * $quantity), 2) }}</span>
                                </li>
                            @endforeach
                            
                            @if (!(auth()->user() && auth()->user()->isSubscriber()))
                                <li class="list-group-item d-flex justify-content-between" style="background-color: var(--page); border-color: var(--border); color: var(--text);">
                                    <strong style="color: var(--text);">Shipping</strong>
                                    <span style="color: var(--text);">£4.99</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between" style="background-color: var(--input-bg); border-color: var(--border);">
                                    <span style="color: var(--primary); font-weight: bold;">Total (GBP)</span>
                                    <strong style="color: var(--primary); font-size: 1.2rem;">£{{ number_format($runningTotal + 4.99, 2) }}</strong>
                                </li>
                            @else
                                <li class="list-group-item d-flex justify-content-between" style="background-color: var(--input-bg); border-color: var(--border);">
                                    <span style="color: var(--primary); font-weight: bold;">Total (GBP)</span>
                                    <strong style="color: var(--primary); font-size: 1.2rem;">£{{ number_format($runningTotal, 2) }}</strong>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (auth()->user() && count($addresses) > 0)
        <script>
            // ... (Your existing JavaScript remains exactly the same) ...
            var addresses = <?php echo json_encode($addresses); ?>;
            var reset_text = true;
            const addressdropdown = document.getElementById("address_drop_down");
            const addressLine1 = document.getElementById("addressLine1");
            const addressLine2 = document.getElementById("addressLine2");
            const addressCity = document.getElementById("addressCity");
            const addressCounty = document.getElementById("addressCounty");
            const addressPostcode = document.getElementById("addressPostcode");
            const addressCountry = document.getElementById("addressCountry");

            addressdropdown.addEventListener("change", function() {
                var count = 0;
                if (addressdropdown.value == "new" && reset_text == true) {
                    addressLine1.value = ""; addressLine2.value = ""; addressCity.value = "";
                    addressCounty.value = ""; addressPostcode.value = ""; addressCountry.value = "";
                }
                for (var address of addresses) {
                    if (count == addressdropdown.value) {
                        addressLine1.value = address[0]; addressLine2.value = address[1];
                        addressCity.value = address[2]; addressCounty.value = address[3];
                        addressPostcode.value = address[4]; addressCountry.value = address[5];
                    }
                    count = count + 1;
                }
                reset_text = true;
            });

            var inputs = document.getElementsByClassName("address_input");
            for (var input of inputs) {
                input.addEventListener("change", function() {
                    reset_text = false;
                    if (addressdropdown.value != "new") { addressdropdown.value = "new"; }
                });
            }
        </script>
    @endif

    @include('components/footer')
</body>
</html>