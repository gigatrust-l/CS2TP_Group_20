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

    <section>

        <h1>Checkout</h1>

        <?php

        $user = auth()->user();

        echo $user;

        ?>

        <form action="{{ route('checkout.confirm') }}" method="post">
            <div name="Personal details">

                <?php if ($user == null) {?>

                <p>Full Name</p>
                <input type="text" name="name"/>
                <p>Email Address</p>
                <input type="email" name="email"/>

                <?php } else { ?>

                <p>Full Name</p>
                <input type="text" name="name" value="<?php echo $user['name'] ?>"/>
                <p>Email Address</p>
                <input type="email" name="email" value="<?php echo $user['email'] ?>"/>

                
                <?php } ?>

            </div>

            <div name="address">
                <?php
                
                if ($user) {

                $addresses = [];
        
            	$stmt = $db->prepare("SELECT * FROM customer_address WHERE ca_cid = :uid");
				$stmt->execute([':uid' => $user['id']]);
				$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);   

                $count = 0;

                foreach ($rows as $row) {

                    if ($row != null) {

                        $addresses[$count] = [$row['ca_line1'],$row['ca_line2'], $row['ca_city'], $row['ca_county'], $row['ca_postcode'], $row['ca_country']];

                    }

                    $count++;

                }

                foreach ($addresses as $address) {

                    echo '<pre>'; print_r($address); echo '</pre>';

                }

                }?>

            </div>

        </form>

    </section>
    
</body>

</html>
