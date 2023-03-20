<?php
	session_start();
	require_once 'classes/Product.php';
	require_once 'classes/Disc.php';
	require_once 'classes/Furniture.php';
	require_once 'classes/Book.php';


    $productList = array();
    $disc1 = new Disc (1001, "lpda", 10, 250);
    $disc2 = new Disc (1002, "Los Redondos", 20, 247);
    $furniture1 = new Furniture (1005, "closet", 80, 200, 70 , 180);
    $book2 = new Book (1008, "La Sombra Del Viento", 16, 1);
    $furniture2 = new Furniture (1005, "closet", 80, 200, 70 , 180);
    $book3 = new Book (1008, "La Sombra Del Viento", 16, 1);

    array_push($productList, $disc1, $disc2, $furniture1, $book2,$furniture2, $book3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Junior Test - Mihalyczo jorge</title>
</head>
<body>
	<header>
		<h1>Product List</h1>
		<nav>
			<p><a href="addProduct.php" class="btn">ADD</a></p>
			<p><a id="delete-product-btn">MASS DELETE</a></p>
		</nav>
	</header>
	<main>
			<div class="productsContainer">
				<?php foreach($productList as $product): ?>
					<?php echo $product->getProductData(); ?>
				<?php endforeach; ?>
			</div>
	</main>
	<footer>
		<h3>Scandiweb Test assignment</h3>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>