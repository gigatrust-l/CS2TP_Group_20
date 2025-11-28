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

    <section >

        <h1>Checkout Complete!</h1>

        <h2>Cart</h2>

        <?php

        $runningTotal = 0;

        foreach($checkoutCart as $item) {
                
            try {
        
                $stmt = $db->prepare("SELECT * FROM products WHERE pid = :id");
                $stmt->execute([':id' => $item['pid']]);
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC); 
            
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

            foreach($rows as $row) {

                ?> <li> <?php echo $row['p_name'] ?> - <?php echo $row['p_price'] ?></li> <?php
                $runningTotal += $row['p_price'] * $item['quantity'];
            
            }
        
        }

        ?> 

        <h2>Total: £<?php echo $runningTotal ?></h2>
        

        
        <?php

        ?>

    </section>
    
</body>

</html>

