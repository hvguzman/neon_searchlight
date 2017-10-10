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
	<script src="https://code.jquery.com/jquery-3.2.1.slim.js" integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
</head>
<body>
	<?php require_once('partials/header.php'); ?>

	<div class="container-fluid">
		<div class="bd-example">
		  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		    <ol class="carousel-indicators">
		      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		      <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
		    </ol>
		    <div class="carousel-inner" role="listbox">
		      <div class="carousel-item active">
		        <img class="d-block w-100" data-src="holder.js/900x300?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide" alt="First slide [900x300]" src="img/factorysunsetedit.jpg" data-holder-rendered="true">
		        <div class="carousel-caption d-none d-md-block">
		          <h3>Our Products</h3>
		          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
		        </div>
		      </div>
		</div>
		                
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



	</div>
	<?php require_once('partials/footer.php'); ?>
</body>
</html>