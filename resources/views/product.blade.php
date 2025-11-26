<!DOCTYPE html>
<html lang="en">

<?php

$host = config('database.connections.mysql.host');
$database = config('database.connections.mysql.database');
$username = config('database.connections.mysql.username');
$password = config('database.connections.mysql.password');

try {

	$prodid = $_SERVER['REQUEST_URI'];

	$prodid =  trim($prodid, "/products/");

	if (!is_numeric($prodid)) {
        
		header('Location: /products');
    	exit();}

	$db = new PDO("mysql:dbname=$database;host=$host", $username, $password);
	$rows = $db->query("SELECT * FROM products WHERE pid = $prodid");
	$count = 0;
	foreach ($rows as $row) {

		$count = $count + 1;
    }

	if ($count == 0) {
        // Redirect to the home page if no results
        
		header('Location: /products');
    	exit();
    }
	$rows = $db->query("SELECT * FROM products WHERE pid = $prodid");
	
	foreach ($rows as $row) {

		$name = $row["p_name"];
		$description = $row["p_description"];
		$price = $row["p_price"];
		$image = $row["p_image"];
        $stock = $row["p_stock"];
		$category = $row["p_category"];
    	$feature = $row["p_feature"];
    }
	

} catch (PDOException $e) {
	echo $e->getMessage();
}

?>


<head>
    <meta charset="UTF-8" />
    <title>Recipe Kitchen - <?php echo $name ?></title>
    <link rel="stylesheet" href="{{ asset('css/product_style.css')}}" />
	<link rel="icon" href="{{ asset('media/favicon.ico')}}" />
</head>

<body>
    @include('components/nav_bar_customer')

    <hr>


    <div class="recipe-container">

        <h1 id="recipe-title"><?php echo $name ?></h1>

        <div class="recipe-img-desc">

            <img class="recipe-img" src="../public/<?php echo $image ?>" />

            <div>

                <p><?php echo $description ?></p>

                <p>Category: <?php echo $category ?></p>

                <p>Feature: <?php echo $feature ?></p>

                <p>Stock Left: <?php echo $stock ?></p>

                <p>Price: £<?php echo $price ?></p>
 

            </div>

        </div>

        <br/>

    </div>

    <div class="seperator"></div>

    <footer id="main-footer">

        <hr />

        <div id="footer-links">

            <a href="/">
                <h2>Recipe Kitchen</h2>
            </a>

            <a href="/recipes">
                <p>Recipes</p>
            </a>

            <a href="/contact">
                <p>Contact Us</p>
            </a>

            <p class="filler">.</p>

        </div>

        <aside id="student-details">

            <p class="student-text">Ethan Marsden</p>
            <a href="mailto:240090270@aston.ac.uk">
                <p class="student-text">240090270@aston.ac.uk</p>
            </a>
            <p class="student-text">240090270</p>

        </aside>

    </footer>

    </div>


</body>

</php>