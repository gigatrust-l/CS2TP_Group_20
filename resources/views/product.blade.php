<!DOCTYPE html>
<html lang="en">

<?php

$host = config('mysql.DATABASE.MYSQL_HOST');
$database = config('mysql.DATABASE.MYSQL_DATABASE');
$user = config('mysql.DATABASE.MYSQL_USERNAME');
$password = config('mysql.DATABASE.MYSQL_PASSWORD');

try {

	$recid = $_SERVER['REQUEST_URI'];

	$recid =  trim($recid, "/recipes/");

	if (!is_numeric($recid)) {
        
		header('Location: /recipes');
    	exit();}

	$db = new PDO("mysql:dbname=$database;host=$host", $user, $password);
	$rows = $db->query("SELECT * FROM recipes WHERE rid = $recid");
	$count = 0;
	foreach ($rows as $row) {

		$count = $count + 1;
    }

	if ($count == 0) {
        // Redirect to the home page if no results
        
		header('Location: /recipes');
    	exit();
    }
	$rows = $db->query("SELECT * FROM recipes WHERE rid = $recid");
	
	foreach ($rows as $row) {

		$name = $row["name"];
		$description = $row["description"];
		$type = $row["type"];
		$Cookingtime = $row["Cookingtime"];
		$ingredients = $row["ingredients"];
		$instructions = $row["instructions"];
		$image = $row["image"];
		$uid = $row["uid"];
    }
	$rows = $db->query("SELECT * FROM users WHERE uid = $uid");
	
	foreach ($rows as $row) {
	
	$username = $row["username"];
    
    }

	$ingredients = preg_split("/\r\n|\n|\r/", $ingredients);
	

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
    <header class="main-header">
        <a class="logo">
            <img src="{{ asset('/public/media/rk_logo_white.png')}}" alt="Recipe Kitchen Logo">
            <h1 id="header-name"><em>Recipe Kitchen</em></h1>
        </a>
        <nav>
            <a href="/">Home</a>
            <a href="/recipes">Recipes</a>
            <a href="/contact">Contact</a>

			<?php 

				$user = auth()->user();

				if ($user == null) { 
                	echo '<a href="/login">Login</a>'; 
                } else { 
                	echo '<a href="/dashboard">Dashboard</a>'; 
                }

			?>
        </nav>
    </header>

    <hr>


    <div class="recipe-container">

        <h1 id="recipe-title"><?php echo $name ?></h1>

        <div class="recipe-img-desc">

            <img class="recipe-img" src="../public/<?php echo $image ?>" />

            <div>

                <p><?php echo $description ?></p>

                <p>Cuisine type: <?php echo $type ?></p>

                <p>Cooking time: <?php echo $Cookingtime ?> minutes</p>

                <p>Contributed by: <?php echo $username ?></p>

            </div>

        </div>

        <br>

        <div class="recipe-ingr-inst">

            <div class="recipe-ingrs">

                <h3 id="recipe-ingr-title">Ingredients</h3>

                <ul id="recipe-ingr-list">

					<?php foreach($ingredients as $ingredient) {
						?>
                        
						<li class="recipe-ingr"><?php echo trim($ingredient); ?></li>
                        
                    <?php } ?>
                        
                </ul>

            </div>

            <div class="recipe-insts">

                <h2>Instructions</h2>

                <pre style="white-space: pre-wrap; word-wrap: break-word; overflow-wrap: break-word; max-width: 100%; overflow: auto;"><?php echo $instructions ?></pre>

            </div>

        </div>

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