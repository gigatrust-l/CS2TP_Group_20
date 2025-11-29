<!DOCTYPE html>
<html lang="en">

<?php 
    
	$name = $_GET['name'] ?? null;
	$type = $_GET['type'] ?? null;

?>

<head>
    <meta charset="UTF-8" />
    <title>HealthSpace - Products</title>
    <link rel="stylesheet" href="{{ asset('css/products_style.css')}}" />
	<link rel="icon" href="{{ asset('media/favicon.ico')}}" />
</head>

<body>
    @include('components/nav_bar_customer')

    <hr>
    <form class="search-div" >
        <div style="display: flex; gap:10px;width:auto;">
            <div class="search-title" style="display: flex; gap:10px;width:auto;">
                <h1 >Search</h1>
        	    <input id="search-box" placeholder="Product Name..." name="name" value="<?= $name ?>"></input>
            </div>
            <div class="search-type" style="display: flex; gap:10px; width:auto;">
                <h1 style="width:auto;">Type</h1>
                <select name="type" id="search-box">
            	    <option value="" <?php if ($type == null) echo 'selected'; ?>>Any</option>
                    <?php

			        $host = config('database.connections.mysql.host');
			        $database = config('database.connections.mysql.database');
			        $username = config('database.connections.mysql.username');
			        $password = config('database.connections.mysql.password');


        	        try {
            
            		$db = new PDO("mysql:dbname=$database;host=$host", $username, $password);
            	    $rows = $db->query("SELECT * FROM products");
            
                    foreach ($rows as $row) {
                        ?>
            	    <option value="<?= $row["p_category"] ?>" <?php if ($type == $row["p_category"]) echo 'selected'; ?>><?= $row["p_category"] ?></option>

                <?php

            }

            } catch (PDOException $e) {
                echo $e->getMessage();
            }

            ?>
        
            </select>
                
                
        </div>
            
        </div>
        <nav>
            <button type="submit" id="searchbutton">Search</button>
        </nav>
    </form>

    <hr>


    <div class="product-container">
        <?php

		$host = config('database.connections.mysql.host');
		$database = config('database.connections.mysql.database');
		$username = config('database.connections.mysql.username');
		$password = config('database.connections.mysql.password');


        try {

            $db = new PDO("mysql:dbname=$database;host=$host", $username, $password);
        
        	if ($name != null && $type != null) {
        
            	$stmt = $db->prepare("SELECT * FROM products WHERE p_name LIKE :name && p_category = :type");
				$stmt->execute([':name'=>"%$name%", ':type' => $type]);
				$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);          
            
            } else if ($name != null ) {
        
            	$stmt = $db->prepare("SELECT * FROM products WHERE p_name LIKE :name");
				$stmt->execute([':name'=>"%$name%"]);
				$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);          
            
            } else if ($type != null) {
        
            	$stmt = $db->prepare("SELECT * FROM products WHERE p_category = :type");
				$stmt->execute([':type' => $type]);
				$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);          
            
            } else {
            
            	$rows = $db->query("SELECT * FROM products");
            
            }
            foreach ($rows as $row) {
                ?>

                <a href="/products/<?=$row["pid"] ?>" id="plain-link">
                
                <div class="product">

                    <h2 class="product-title"><?= $row["p_name"] ?></h2>
                    <img class="product-image" src="/public/<?= $row["p_image"] ?>">
                    <p class="product-description"><?= $row["p_description"] ?></p>
                    <p class="product-type"><?= $row["p_category"] ?></p>
                    <p class="product-type">£<?= $row["p_price"] ?></p>
                    <br>

                </div>
                
                </a>

                <br/>

                <?php

            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        ?>

    </div>

    

</body>

</php>