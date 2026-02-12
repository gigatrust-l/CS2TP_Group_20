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
        <div class="img-comp-container">
                <div class="slider-labels">
    <span>Before use</span>
    <span>After use</span>
  </div>
  <div class="img-comp-img">
    <img src="/media/products/after.jpg" width="500" height="300">
  </div>
  <div class="img-comp-img img-comp-overlay">
    <img src="/media/products/before.jpg" width="500" height="300">
  </div>
</div>

</style>
<script>
function initComparisons() {
  var x, i;
  x = document.getElementsByClassName("img-comp-overlay");
  for (i = 0; i < x.length; i++) {
    compareImages(x[i]);
  }
  function compareImages(img) {
    var slider, img, clicked = 0, w, h;
    w = img.offsetWidth;
    h = img.offsetHeight;
    img.style.width = (w / 2) + "px";
    slider = document.createElement("DIV");
    slider.setAttribute("class", "img-comp-slider");
    img.parentElement.insertBefore(slider, img);
    slider.style.top = (h / 2) - (slider.offsetHeight / 2) + "px";
    slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";
    slider.addEventListener("mousedown", slideReady);
    window.addEventListener("mouseup", slideFinish);
    slider.addEventListener("touchstart", slideReady);
    window.addEventListener("touchend", slideFinish);
    function slideReady(e) {
      e.preventDefault();
      clicked = 1;
      window.addEventListener("mousemove", slideMove);
      window.addEventListener("touchmove", slideMove);
    }
    function slideFinish() {
      clicked = 0;
    }
    function slideMove(e) {
      var pos;
      if (clicked == 0) return false;
      pos = getCursorPos(e)
      if (pos < 0) pos = 0;
      if (pos > w) pos = w;
      slide(pos);
    }
    function getCursorPos(e) {
      var a, x = 0;
      e = (e.changedTouches) ? e.changedTouches[0] : e;
      a = img.getBoundingClientRect();
      x = e.pageX - a.left;
      x = x - window.pageXOffset;
      return x;
    }
    function slide(x) {
      img.style.width = x + "px";
      slider.style.left = img.offsetWidth - (slider.offsetWidth / 2) + "px";
    }
  }
}
</script>

     <script>initComparisons();
    </script> 
	<footer>
    	@include('components/footer')
    </footer>
</body>

</html>
