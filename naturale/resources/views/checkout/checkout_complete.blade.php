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
    <link rel="stylesheet" href="{{ asset('/css/index_style.css')}}" />
    
    <link rel="icon" href="{{ asset('/media/favicon.ico')}}" />
</head>


<body>
    @include('components/nav_bar_customer')

    <section class="checkout-confirmation container my-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="mb-4 text-success">Checkout Complete!</h1>

                <h2 class="h5 text-muted">Your Cart</h2>
                <ul class="list-group mb-3">
                    <?php
                    $runningTotal = 0;

                    foreach($checkoutCart as $item) {
                        try {
                            $stmt = $db->prepare("SELECT * FROM products WHERE pid = :id");
                            $stmt->execute([':id' => $item['pid']]);
                            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC); 
                        } catch (PDOException $e) {
                            echo "<li class='list-group-item text-danger'>Error: {$e->getMessage()}</li>";
                        }

                        foreach($rows as $row) {
                            $price = number_format($row['p_price'], 2);
                            echo "
                                <li class='list-group-item d-flex justify-content-between align-items-center'>
                                    <div>
                                        <strong>{$row['p_name']}</strong>
                                        <div class='text-muted'>Quantity: {$item['quantity']}</div>
                                    </div>
                                    <span class='text-muted'>£{$price} per item</span>
                                </li>
                            ";
                            $runningTotal += $row['p_price'] * $item['quantity'];
                        }
                    }
                    ?>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (GBP)</span>
                        <strong>£<?php echo number_format($runningTotal, 2); ?></strong>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</body>
</html>