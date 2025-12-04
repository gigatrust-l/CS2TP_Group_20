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
        $ingredients = $row["p_ingredients"];
        $instructions = $row["p_instructions"];
        $volume = $row["p_volume"];
    }


} catch (PDOException $e) {
	echo $e->getMessage();
}

?>


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content ="width=device-width, initial-scale=1" >
    <title>Naturale Product Details - <?php echo $name ?></title>
    <link rel="stylesheet" href="{{ asset('css/product_style.css')}}" />
	<link rel="icon" href="{{ asset('media/favicon.ico')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @include('components/nav_bar_customer')

    <div class="container py-5">
        <div class="row">
            <!-- Product Image -->
            <div class="col-md-3 mb-4">
            	<img class="recipe-img" src="{{ asset($image) }}" />
            </div>
            <!-- Product Details -->
            <div class="col-md-6">
                <h1 class="h2 mb-3"><?php echo $name ?></h1>
                <div class="mb-3">
                    <span class="h4">£<?php echo $price ?> <?php if ($volume != null) { ?>| <?php echo $volume ?>ml <?php } ?></span>
                </div>
                <h5 class="my-1">Description</h5>
                <p class="mb-2"><?php echo $description ?></p>
                <?php if ($ingredients != null) { ?>
                <h5 class="my-1">Ingredients</h5>
                <p class="mb-2"><?php echo $ingredients ?></p>
                <?php } 
				if ($instructions != null) { 	
				?>
                <h5 class="my-1">How to use</h5>
                <p class="mb-2"><?php echo $instructions ?></p>
                <?php } ?>
            </div>

            <div class="col-md-3">
                <h1 class="h2 mb-3">Quantity</h1>
                <form action="{{ route('cart.add') }}" method="post">
                    @csrf
                    <input type="hidden" name="pid" value="{{ $prodid }}">
                    <input type="number" name="quantity" value="1" min="1" max="<?php echo $stock; ?>">
                    <button class="btn btn-success" type="submit"<?php if ($stock == 0) {echo "disabled";}?>>Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
@include('components/footer')
</body>

</html>
