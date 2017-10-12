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
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
	<?php require_once('partials/header.php'); ?>

	<div class="container-fluid">

		<div class="bd-example">
		  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		    <!-- <ol class="carousel-indicators">
		      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		      <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
		    </ol> -->
		    <div class="carousel-inner" role="listbox">
		      <div class="carousel-item active">
		        <img class="d-block w-100" data-src="holder.js/900x300?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide" alt="First slide [900x300]" src="img/factorysunsetedit.jpg" data-holder-rendered="true">
		        <div class="carousel-caption d-none d-md-block">
		          <h3>Cleaning Products</h3>
		          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
		          <a href="productsoverview.php"><button>Browse Other Products</button></a>
		        </div>
		      </div>
		</div>

		                
	<div class="card">
	  <ul class="list-group list-group-flush">
	    <li class="list-group-item">Cras justo odio<button>Edit</button> <button>Delete</button></li>
	    <li class="list-group-item">Dapibus ac facilisis in<button>Edit</button> <button>Delete</button></li>
	    <li class="list-group-item">Vestibulum at eros<button>Edit</button> <button>Delete</button></li>
	  </ul>
	</div>



	</div>
	<?php require_once('partials/footer.php'); ?>
</body>
</html>