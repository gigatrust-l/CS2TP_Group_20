<!DOCTYPE html>
<html lang="en">

<?php

	$name = $_GET['name'] ?? null;
	$type = $_GET['type'] ?? null;

?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content ="width=device-width, initial-scale=1" >
    <title>{{ config('app.name', 'Laravel') }} - Product</title>
    <link rel="stylesheet" href="{{ asset('css/products_style.css')}}" />
	<link rel="icon" href="{{ asset('media/favicon.ico')}}" />
</head>

<body>
    @include('components/nav_bar_customer')

    <div class="container mt-5">

        <div class="text-center mb-4">
            <h1>Browse our Products</h1>
            <p class="text-muted">Find the perfect natural haircare product for your routine.</p>
        </div>
        <!-- Search and Filter Bar -->
        <form class="p-4 bg-white shadow-sm rounded mb-5" method="GET">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Search by Name</label>
                    <input type="text"
                           class="form-control"
                           placeholder="Product name..."
                           name="name"
                           value="<?= htmlspecialchars($name) ?>">
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Filter by Category</label>
                    <select name="type" class="form-select">
                        <option value="">Any</option>
                        <?php
                        $host = config('database.connections.mysql.host');
                        $database = config('database.connections.mysql.database');
                        $username = config('database.connections.mysql.username');
                        $password = config('database.connections.mysql.password');

                        try {
            
            			$db = new PDO("mysql:dbname=$database;host=$host", $username, $password);
            	    	$rows = $db->query("SELECT * FROM products");
                    
                    	$categories = [];
            
                    	foreach ($rows as $row) {
                        
                        	if (!in_array($row["p_category"],$categories)) {
                        
                        		$categories[] = $row["p_category"];                            
                            
                            }

            			}
            
                    	foreach ($categories as $category) {
                        	?>
            	    		<option value="<?= $category ?>" <?php if ($type == $category) echo 'selected'; ?>><?= $category ?></option>

                			<?php

                        }

                        

                        } catch (PDOException $e) {
                            echo $e->getMessage();
                        }

                        ?>
                    </select>
                </div>

                <div class="col-md-2 d-flex align-items-end">
                    <button type="submit" class="btn btn-success w-100">Search</button>
                </div>
            </div>
        </form>

        <div class="row g-4">
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

            <div class="col-md-4 col-lg-3">
                <a href="/products/<?=$row["pid"] ?>" id="plain-link" class="text-decoration-none">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="{{ asset($row['p_image']) }}" alt="Product img" class="card-img-top" style="height: 200px; object-fit:cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row["p_name"] ?></h5>
                            <p class="text-muted small mb-1"><?= $row["p_category"] ?></p>
                            <p class="small text-secondary"><?= substr($row["p_description"], 0, 60) ?>...</p>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <span>£<?= $row["p_price"] ?></span>
                        </div>
                    </div>
                </a>
            </div>
            <?php

        }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        ?>
    </div>
    </div>
<footer>
    @include('components/footer')
</footer>
</body>
</html>
