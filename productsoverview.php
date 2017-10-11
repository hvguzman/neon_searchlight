<!DOCTYPE html>
<html>
<?php 
session_start();
if(isset($_SESSION['username']))
	$username = $_SESSION['username'];
else
	$username = "guest";

$string = file_get_contents("items.json");
$items = json_decode($string, true);

 ?>
<head>
	<title>Products Page</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

	<?php require_once('partials/header.php'); ?>
		                
	<div class="card-group">
		
		<div class="card col" id="card_sponsor">
	        <div class="card-body">
	            <div class="row p-3">
	                <div class="col-12">
	                    <h3 class="text-center">Product 1</h3>
	                    <img src="//unsplash.it/400x200" class="img-fluid">
	                    <hr>
	                    <p class="">Shiny, shiny. Varius azdipiscing elit. Duis pharetra codeply varius quam sit amet vulputate. Ovi lipsim diro?</p>
	                    <a href="product1.php"><button class="btn btn-secondary btn-block">View</button></a>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="card col" id="card_sponsor">
	        <div class="card-body">
	            <div class="row p-3">
	                <div class="col-12">
	                    <h3 class="text-center">Product 2</h3>
	                    <img src="//unsplash.it/400x200" class="img-fluid">
	                    <hr>
	                    <p class="">Shiny, shiny. Varius azdipiscing elit. Duis pharetra codeply varius quam sit amet vulputate. Ovi lipsim diro?</p>
	                    <a href="product2.php"><button class="btn btn-secondary btn-block">View</button></a>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="card col" id="card_sponsor">
	        <div class="card-body">
	            <div class="row p-3">
	                <div class="col-12">
	                    <h3 class="text-center">Product 3</h3>
	                    <img src="//unsplash.it/400x200" class="img-fluid">
	                    <hr>
	                    <p class="">Shiny, shiny. Varius azdipiscing elit. Duis pharetra codeply varius quam sit amet vulputate. Ovi lipsim diro?</p>
	                    <a href="product3.php"><button class="btn btn-secondary btn-block">View</button></a>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<?php require_once('partials/footer.php'); ?>
</body>
</html>