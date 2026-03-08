<!DOCTYPE html>
<html lang="en">

<?php

$host = config('database.connections.mysql.host');
$database = config('database.connections.mysql.database');
$username = config('database.connections.mysql.username');
$password = config('database.connections.mysql.password');

$db = new PDO("mysql:dbname=$database;host=$host", $username, $password);

?>

<head>
    <meta charset="UTF-8" />
    <title>Naturale</title>
    <link rel="stylesheet" href="{{ asset('/css/index_style.css') }}" />

    <link rel="icon" href="{{ asset('/media/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('/css/navbar_style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
</head>


<body>
    @include('components/nav_bar_customer')

    <section class="checkout-confirmation container my-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="mb-4 text-success">Checkout Complete!</h1>

                <h2 class="h5 text-muted">Your Cart</h2>
                <ul class="list-group mb-3">
                    @foreach ($cart as [$product, $quantity])
                        <li class='list-group-item d-flex justify-content-between align-items-center'>
                            <div>
                                <strong>{{ $product->p_name }}</strong>
                                @if (!($product->p_category == 'shipping'))
                                        <div class="text-muted">Quantity: {{ $quantity }}</div>
                                    </div>
                                    <span class="text-muted">£{{ number_format($product->p_price * $quantity, 2) }}
                                    </span>
                                @else
                                    </div>
                                    <span class="text-muted">£{{ number_format($product->p_price, 2) }}</span>
                                @endif
                        </li>
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (GBP)</span>
                        <strong>£ {{ $runningTotal }}</strong>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</body>

</html>
