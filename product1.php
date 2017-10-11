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
			<a href='addform.php'><button>Add Product</button></a>
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
	<?php require_once('partials/header.php'); ?>


		<?php display_items(); ?>

	<?php require_once('partials/footer.php'); ?>
</body>
</html>