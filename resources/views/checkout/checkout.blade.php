<!DOCTYPE html>
<html lang="en">

<?php

$host = config('database.connections.mysql.host');
$database = config('database.connections.mysql.database');
$username = config('database.connections.mysql.username');
$password = config('database.connections.mysql.password');

$db = new PDO("mysql:dbname=$database;host=$host", $username, $password);

$user = auth()->user();

// Saved addresses
$addresses = [];

if($user) {
    $stmt = $db->prepare("SELECT * FROM customer_address WHERE ca_cid = :uid");
    $stmt->execute([':uid' => $user['id']]);
    $rows = $stmt->fetchALL(PDO::FETCH_ASSOC);

    foreach ($rows as $row) {
        $addresses[] = [
            $row['ca_line1'],
            $row['ca_line2'],
            $row['ca_city'],
            $row['ca_county'],
            $row['ca_postcode'],
            $row['ca_country'],
        ];
    }
}

// To calculate the total price
$total = 0;

foreach ($cart as $item) {
    $stmt = $db->prepare("SELECT p_price FROM products WHERE pid = :id");
    $stmt->execute([':id' => $item['pid']]);
    $price = $stmt->fetchColumn();
    if ($price) {
        $total += $price * $item['quantity'];
    }
}

?>

<head>
    <meta charset="UTF-8" />
    <title>Naturale - Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/index_style.css')}}" />
    <link rel="icon" href="{{ asset('/media/favicon.ico')}}" />
</head>


<body>
    @include('components/nav_bar_customer')

    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Checkout form</h2>
            <p>Fill in the form below to complete checkout.</p>
        </div>

        <div class="row g-5">
            <!-- Left side: Billing, shipping and payment form -->
            <div class="col-lg-7">
                <h4 class="mb-3">Billing Address</h4>

                <form action="{{ route('checkout.confirm') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                   id="name" name="name"
                                   value="{{ old('name', $user ? $user->name : '') }}" required>
                            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                   id="email" name="email"
                                   value="{{ old('email', $user ? $user->email : '') }}" required>
                            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <!-- Saved addresses -->
                    @if($user && count($addresses) >0)
                        <div class="mt-4 mb-3">
                            <label class="form-label">Saved Addresses</label>
                            <select class="form-select" id="address_drop_down">
                                <option value="new">Use New Address</option>
                                @foreach($addresses as $index => $a)
                                    <option value="{{ $index }}">{{ implode(', ', $a) }}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif

                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Address Line 1</label>
                            <input type="text" class="form-control address_input"
                                   id="addressLine1" name="addressLine1"
                                   value="{{ old('addressLine1') }}" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Address Line 2</label>
                            <input type="text" class="form-control address_input"
                                   id="addressLine2" name="addressLine2"
                                   value="{{ old('addressLine2') }}" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">County</label>
                            <input type="text" class="form-control address_input"
                                   id="addressCounty" name="addressCounty"
                                   value="{{ old('addressCounty') }}" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Postcode</label>
                            <input type="text" class="form-control address_input"
                                   id="addressPostcode" name="addressPostcode"
                                   value="{{ old('addressPostcode') }}" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Country</label>
                            <input type="text" class="form-control address_input"
                                   id="addressCountry" name="addressCountry"
                                   value="{{ old('addressCountry') }}" required>
                        </div>
                    </div>

                    <hr class="my-4">

                    <h4 class="mb-3">Payment</h4>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Name on card</label>
                            <input type="text" class="form-control @error('card_name') is-invalid @enderror"
                                   id="cardName" name="card_name" required>
                            @error('card_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Card number</label>
                            <input type="text" class="form-control @error('card_number') is-invalid @enderror"
                                   id="cardNumber" name="card_number" required>
                            @error('card_number') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Expiry</label>
                            <input type="text" class="form-control @error('card_expiry') is-invalid @enderror"
                                   id="cardExpiry" name="card_expiry" placeholder="MM/YY" required>
                            @error('card_expiry') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">CVV</label>
                            <input type="text" class="form-control @error('card_CVV') is-invalid @enderror"
                                   id="cardCVV" name="card_CVV" required>
                            @error('card_CVV') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <button class="btn btn-success w-100 btn-lg mt-4" type="submit">Complete Checkout</button>

                </form>
            </div>

            <!-- Right side: order summary -->
            <div class="col-lg-5">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Your Cart</span>
                            <span class="badge rounded-pill text-bg-secondary">{{ array_sum(array_column($cart, 'quantity')) }}</span>
                        </h4>
                        <ul class="list-group mb-3">
                            @foreach($cart as $item)
                                    <?php
                                    $stmt = $db->prepare("SELECT * FROM products WHERE pid = :id");
                                    $stmt->execute([':id' => $item['pid']]);
                                    $product = $stmt->fetch(PDO::FETCH_ASSOC);
                                    ?>
                                @if($product)
                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                        <div>
                                            <strong>{{ $product['p_name'] }}</strong>
                                            <div class="text-muted">Quantity: {{ $item['quantity'] }}</div>
                                        </div>
                                        <span class="text-muted">£{{ number_format($product['p_price'], 2) }} per item</span>
                                    </li>
                                @endif
                            @endforeach

                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total (GBP)</span>
                                <strong>£{{ number_format($total, 2) }}</strong>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </div>

    @if($user && count($addresses) > 0)
        <script>

            var addresses = <?php echo json_encode($addresses)?>;

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

                        addressLine1.value = "";
                        addressLine2.value = "";
                        addressCity.value = "";
                        addressCounty.value = "";
                        addressPostcode.value = "";
                        addressCountry.value = "";

                }

                for (var address of addresses) {

                    if (count == addressdropdown.value) {

                        addressLine1.value = address[0];
                        addressLine2.value = address[1];
                        addressCity.value = address[2];
                        addressCounty.value = address[3];
                        addressPostcode.value = address[4];
                        addressCountry.value = address[5];

                    }

                    count = count + 1;

                }

                reset_text = true;

            });

            var inputs = document.getElementsByClassName("address_input");

            for (var input of inputs) {


                input.addEventListener("change", function() {

                    reset_text = false;

                    if (addressdropdown.value != "new") {

                        addressdropdown.value = "new";

                    }

                });

            }

        </script>
    @endif

    @include('components/footer')

</body>
</html>

