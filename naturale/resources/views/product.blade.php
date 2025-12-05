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

<body class="d-flex flex-column min-vh-100">
    @include('components/nav_bar_customer')

    <div class="container py-5">
        <div class="row g-5">
            <!-- Product Image -->
            <div class="col-md-3 mb-4">
            	<img class="product-img shadow-sm" src="{{ asset($image) }}" />
            </div>
            <!-- Product Details -->
            <div class="col-md-5">
                <h1 class="h2 mb-3"><?php echo $name ?></h1>
                <div class="mb-3">
                    <span class="h4">£<?php echo $price ?> <?php if ($volume != null) { ?>| <?php echo $volume ?>ml <?php } ?></span>
                </div>
                <div class="mb-4">
                    <h5 class="product-section-title">Description</h5>
                    <p class="mb-2"><?php echo $description ?></p>
                </div>
                    
                <?php if ($ingredients != null) { ?>
                <div class="mb-4">
                    <h5 class="product-section-title">Ingredients</h5>
                    <p class="mb-2"><?php echo $ingredients ?></p>
                </div>
                
                <?php 
                                                 
                }

				if ($instructions != null) {
                
				?>
                <div class="mb-4">
                    <h5 class="product-section-title">How to use</h5>
                    <p class="mb-2"><?php echo $instructions ?></p>
                </div>
                
                <?php 
                } 
				?>
            </div>

            <div class="col-md-3">
                <div class="p-3 bg-light border rounded shadow-sm">
                    <h5 class="fw-semibold mb-3">Purchase</h5>
                    <p class="mb-1">
                        <strong>Stock:</strong>
                            <?php if ($stock > 0): ?>
                        <span class="text-success">In Stock</span>
                        <?php else: ?>
                            <span class="text-danger">Out of Stock</span>
                        <?php endif; ?>
                    </p>
                    <form action="{{ route('cart.add') }}" method="POST" class="mt-3">
                        @csrf
                        <input type="hidden" name="pid" value="{{ $prodid }}">
                        <label class="form-label fw-semibold">Quantity</label>
                        <input type="number"
                               name="quantity"
                               class="form-control mb-3"
                               value="1"
                               max="<?php echo max(1, $stock); ?>"
                        	   min="1"
                               <?php if ($stock == 0) echo 'disabled'; ?>>
                        <button class="btn btn-success w-100" type="submit"
                            <?php if ($stock == 0) echo 'disabled'; ?>>
                            <?php echo ($stock > 0) ? "Add to Cart" : "Unavailable"; ?>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
	<footer>
    	@include('components/footer')
    </footer>
</body>

</html>
