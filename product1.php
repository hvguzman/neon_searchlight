<?php 
session_start();
require "connection.php";
if(isset($_SESSION['username']))
	$username = $_SESSION['username'];
else
	$username = "guest";

function display_items(){
	global $username;
	global $conn;
	// $sql = "SELECT * FROM products WHERE productName = '$productName'";
	$sql = "SELECT * FROM products";
	$result = mysqli_query($conn,$sql);
	while ($row = mysqli_fetch_assoc($result)){
		extract($row);
	// var_dump($row);
	// var_dump($result);
	foreach($result as $item){
		$id = $item['id'];
		$productName = $item['productName'];
		$productPrice = $item['productPrice'];
		$productDesc = $item['productDesc'];
		$category_id = $item['category_id'];
		$productQty = $item['productQty'];

		if($username=="admin"){
			echo "<a href='editform.php?id=$id'><button>Edit Product</button></a>
			<a href='addform.php?id=$id'><button>Add Product</button></a>
			<a href='delete.php?id=$id'><button>Delete Product</button></a>
			<div class='card'>
			  <ul class='list-group list-group-flush'>
			    <li class='list-group-item'><label>Product ID:</label>$id</li>
			    <li class='list-group-item'><label>Product Name:</label>$productName</li>
			    <li class='list-group-item'><label>Price:</label>$productPrice</li>
			    <li class='list-group-item'><label>Description:</label>$productDesc</li>
			    <li class='list-group-item'><label>Category ID:</label>$category_id</li>
			    <li class='list-group-item'><label>Quantity Available:</label>$productQty</li>
			  </ul>
			</div>";
		} else {

		echo "
		<div class='card'>
		  <ul class='list-group list-group-flush'>
		    <li class='list-group-item'><label>Product ID:</label>$id</li>
		    <li class='list-group-item'><label>Product Name:</label>$productName</li>
		    <li class='list-group-item'><label>Price:</label>$productPrice</li>
		    <li class='list-group-item'><label>Description:</label>$productDesc</li>
			<li class='list-group-item'><label>Category ID:</label>$category_id</li>
			<li class='list-group-item'><label>Quantity Available:</label>$productQty</li>
		  </ul>
		</div>";
		}


	}
	
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

		<?php display_items(); ?>

	</div>
	<?php require_once('partials/footer.php'); ?>
</body>
</html>