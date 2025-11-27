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

    <section style="float: left;">

        <h1>Checkout</h1>

        <?php

        $user = auth()->user();

        ?>

        <form action="{{ route('checkout.confirm') }}" method="post">
            @csrf
            <div name="Personal details">
                <h2>Personal Details</h2>

                <?php if ($user == null) {?>

                <p>Full Name</p>
                <input type="text" name="name" required/>
                <p>Email Address</p>
                <input type="email" name="email" required/>

                <?php } else { ?>

                <p>Full Name</p>
                <input type="text" name="name" value="<?php echo $user['name'] ?>" required/>
                <p>Email Address</p>
                <input type="email" name="email" value="<?php echo $user['email'] ?>" required/>

                
                <?php } ?>

            </div>

            <div name="address">
                <h2>Address</h2>
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
                ?> 
                
                    <label for="address_drop_down">Choose Your addresss</label>
                    <select name="addresses" id="address_drop_down">
                        <option value="new">New Address</option>
                
                <?php
                $count = 0;
                foreach ($addresses as $address) {
                    ?>
                    <option value="{{ $count }}">{{ print_r(implode(', ', $address)) }}</option>
                    <?php
                    $count++;
                }

                echo "</select>";

                }?>
                <p name="newline delete once formated"></p>
                <label for="address_drop_down">Address Line 1</label>
                <input type="text" class="address_input" id="addressLine1" name="addressLine1" required/>
                <p name="newline delete once formated"></p>
                <label for="address_drop_down">Address Line 2</label>
                <input type="text" class="address_input" id="addressLine2" name="addressLine2" required/>
                <p name="newline delete once formated"></p>
                <label for="address_drop_down">City</label>
                <input type="text" class="address_input" id="addressCity" name="addressCity" required/>
                <p name="newline delete once formated"></p>
                <label for="address_drop_down">County</label>
                <input type="text" class="address_input" id="addressCounty" name="addressCounty" required/>
                <p name="newline delete once formated"></p>
                <label for="address_drop_down">Postcode</label>
                <input type="text" class="address_input" id="addressPostcode" name="addressPostcode" required/>
                <p name="newline delete once formated"></p>
                <label for="address_drop_down">Country</label>
                <input type="text" class="address_input" id="addressCountry" name="addressCountry" required/>
                <p name="newline delete once formated"></p>

            </div>

            <div name="payment">

                <h2>Payment Details</h2>
                
                <label for="card_number">Name on Card</label>
                <input name="card_name" value="L M Placeholder">
                <p name="newline delete once formated"></p>
                
                <label for="card_number">Card Number</label>
                <input name="card_number" value="0000">
                <input name="card_number" value="0000">
                <input name="card_number" value="0000">
                <input name="card_number" value="0000">
                <p name="newline delete once formated"></p>
                
                <label for="card_number">Card Expiry</label>
                <input name="card_expiry" value="01">
                <label>/</label>
                <input name="card_expiry" value="10">
                <p name="newline delete once formated"></p>
                
                <label for="card_number">CCV</label>
                <input name="card_CCV" value="123">

            </div>

            <button type="submit">Complete Checkout</button>

        </form>

    </section>

    <aside style="float: right;">

        <h2>Cart</h2>

        <?php

        foreach($cart as $item) {
                
            try {
        
                $stmt = $db->prepare("SELECT * FROM products WHERE pid = :id");
                $stmt->execute([':id' => $item['pid']]);
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC); 
            
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

            foreach($rows as $row) {

                ?> <li>{{ $row['p_name']}}</li> <?php
            
            }
        
        }

        ?>

    </aside>
    
</body>

</html>

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
