<?php 
session_start();
if(isset($_SESSION['username']) && $_SESSION['username'] == 'admin'){
	echo "Welcome, admin.";
} else {
	header('Location:index.php');
	echo "You do not have permission to view this page. <br>
		<a href='login.php'>Login as admin</a>";
} 

if(isset($_SESSION['username']))
	$username = $_SESSION['username'];
else
	$username = "guest";

function display_items_admin(){
	$sql = "SELECT * FROM products WHERE productName = '$productName'";
	global $sql;
	foreach($items as $item){
		$id = $item['id'];
		$productcat = $item['productcat'];
		$productname = $item['productname'];
		$description = $item['description'];
		$price = $item['price'];

		// echo "<br>" . $id . "<br>" . $productcat. "<br>" . $productname. "<br>" . $description. "<br>" . $price;

		echo "<a href='editform.php?id=$id'><button>Edit Product</button></a>
			<a href='addform.php?id=$id'><button>Add Product</button></a>
			<a href='delete.php?id=$id'><button>Delete Product</button></a>
			<div class='card'>
			  <ul class='list-group list-group-flush'>
			    <li class='list-group-item'>$id</li>
			    <li class='list-group-item'>$productcat</li>
			    <li class='list-group-item'>$productname</li>
			    <li class='list-group-item'>$description</li>
			    <li class='list-group-item'>$price</li>
			  </ul>
			</div>";

	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Products Page</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.js" integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script> -->
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
		          <h3>Food Additives</h3>
		          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
		          <a href="productsoverview.php"><button class="btn btn-group btn-outline-primary">Browse Other Products</button></a>
		        </div>
		      </div>
		</div>


	<?php display_items_admin(); ?>



	</div>
	<?php require_once('partials/footer.php'); ?>
</body>
</html>