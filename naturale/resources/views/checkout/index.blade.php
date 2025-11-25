<!DOCTYPE php>
<php lang="en">

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

    <section>

        <h1>Your Cart</h1>

        <?php if (isset($cart)){if (count(value: $cart) > 0) {?>

        <a href="{{ route('cart.clear') }}">Clear Cart</a>

        <table>

            <tr>

                <th>Product Name</th>
                <th>Quantity</th>
                <th>Product Price</th>
                <th>Actions</th>

            </tr>

            <?php $runningTotal = 0;
            
            foreach($cart as $item) {
                
                try {
        
            	    $stmt = $db->prepare("SELECT * FROM products WHERE pid = :id");
				    $stmt->execute([':id' => $item['pid']]);
    				$rows = $stmt->fetchAll(PDO::FETCH_ASSOC); 
            
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }

                foreach($rows as $row) {
                
                ?>

                <tr>
                <td><?= $row["p_name"] ?></td>
                <td>
                    <form action="{{ route('cart.update') }}" method="post">
                        @csrf
                        <input type="hidden" name="pid" value="{{ $item['pid'] }}">
                        <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1">
                        <button type="submit">Update</button>

                    </form>
                </td>
                <td>£<?php echo $row['p_price'] * $item['quantity'];?></td>
                <td>
                    <a href="{{ route('cart.remove', $item['pid']) }}">Remove Item</a>
                </td>

                </tr>

            <?php 
                $runningTotal += $row['p_price'] * $item['quantity'];
        
            }} ?>

        </table>

        <H2>Total: £<?echo $runningTotal?></h2>

        <a href="/checkout">Checkout Now</a>

        <?php } else { ?>

            <p>Your cart is empty.</p>

        <?php }} ?>

    </section>
    
</body>

</php>
