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
    <title>{{ config('app.name', 'Laravel') }} - Cart</title>
    <link rel="stylesheet" href="{{ asset('/css/index_style.css')}}" />
    
    <link rel="icon" href="{{ asset('/media/favicon.ico')}}" />
</head>


<body>
    @include('components/nav_bar_customer')

    <section>

        <h1>Your Cart</h1>

        <?php if (isset($cart)){if (count(value: $cart) > 0) {?>

        <form action="{{ route('cart.clear') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Clear Cart</button>
        </form>

        <table>

            <tr>

                <th>Product Name</th>
                <th>Quantity</th>
                <th>Product Price</th>
                <th>Actions</th>

            </tr>

            <?php $runningTotal = 0;

            $stock = true;
            
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
                    <?php 
                    if ($row['p_stock'] == 0) {
                        $stock=false;
                        echo "<p> Out Of Stock</p>";
                    } else if ($row['p_stock'] < $item['quantity']) {
                        $stock=false;
                        echo "<p> Not enough stock for order</p>"; ?>
                        <form action="{{ route('cart.update') }}" method="post">
                            @csrf
                            <input type="hidden" name="pid" value="{{ $item['pid'] }}">
                            <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" max="<?php echo $row['p_stock']; ?>">
                            <button type="submit">Update</button>

                        </form>

                    <?php } else {
                        ?>


                        <form action="{{ route('cart.update') }}" method="post">
                            @csrf
                            <input type="hidden" name="pid" value="{{ $item['pid'] }}">
                            <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" max="<?php echo $row['p_stock']; ?>">
                            <button type="submit">Update</button>

                        </form>

                        <?php
                    } 
                    ?>
                </td>
                <td>£<?php echo $row['p_price'] * $item['quantity'];?></td>
                <td>
                    <form action="{{ route('cart.remove', $item['pid']) }}" method="POST">
                        @csrf
                        <button type="submit">Remove</button>
                    </form>

                </td>

                </tr>

            <?php 
                if ($row['p_stock'] == 0) {$stock=false;}
                $runningTotal += $row['p_price'] * $item['quantity'];
        
            }} ?>

        </table>

        <h2>Total: £<?php echo $runningTotal ?></h2>

        <?php if ($stock) { ?>

        <a href="/checkout" >Checkout Now</a>

        <?php } else { ?>

        <p>Error In Basket</p>

        <?php } ?>

        <?php } else { ?>

            <p>Your cart is empty.</p>

        <?php }} ?>

    </section>
    
</body>

</html>
