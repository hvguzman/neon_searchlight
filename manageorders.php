<?php 
session_start();
require "connection.php";
if(isset($_SESSION['username']))
	$username = $_SESSION['username'];
else
	$username = "guest";
function display_users(){
	global $username;
	global $conn;
	$sql = "SELECT * FROM orders";
	$result = mysqli_query($conn,$sql);
	while ($row = mysqli_fetch_assoc($result)){
		extract($row);
	foreach($result as $item){
		$order_users = $item['order_users'];
		echo "
		<h4>$order_users</h4>
		";
		}
	}
}


function display_productid(){
	global $username;
	global $conn;
	$sql = "SELECT * FROM orders";
	$result = mysqli_query($conn,$sql);
	while ($row = mysqli_fetch_assoc($result)){
		extract($row);
		foreach($result as $item){
		$products_id = $item['products_id'];
		echo "
		<h4>$products_id</h4>
		";
		}
	}
}


function display_productname(){
	global $username;
	global $conn;
	$sql2 = "SELECT p.productName FROM products p, orders o WHERE p.id = o.products_id";
	$result2 = mysqli_query($conn,$sql2);
	while ($row2 = mysqli_fetch_assoc($result2)){
		extract($row2);
		foreach($result2 as $item){
		$productName = $item['productName'];
		echo "
		<h4>$productName</h4>
		";
			}
	}
}


function display_qty(){
	global $username;
	global $conn;
	$sql = "SELECT * FROM orders";
	$result = mysqli_query($conn,$sql);
	while ($row = mysqli_fetch_assoc($result)){
		extract($row);
	foreach($result as $item){
		$ordersQty = $item['ordersQty'];
		echo "
		<h4>$ordersQty</h4>
		";
		}
	}
}







// function display_orders(){
// 	global $username;
// 	global $conn;
// 	$sql = "SELECT * FROM orders";
// 	$sql2 = "SELECT * FROM products";
// 	$result = mysqli_query($conn,$sql);
// 	$result2 = mysqli_query($conn,$sql2);
// 	while ($row = mysqli_fetch_assoc($result)){
// 		extract($row);
// 	foreach($result as $item){
// 		$order_users = $item['order_users'];
// 		$ordersQty = $item['ordersQty'];
// 		$products_id = $item['products_id'];
// 		echo "
// 		<div class='card col-12 float-right'>
// 		  <ul class='list-group list-group-flush'>
// 		    <li class='list-group-item'><label>Customer Username:</label>$order_users</li>
// 		    <li class='list-group-item'><label>Product ID#:</label>$products_id</li>
// 		    <li class='list-group-item'><label>Quantity Ordered:</label>$ordersQty</li>
// 		   </ul>
// 		</div>
// 		    ";

// }	while ($row2 = mysqli_fetch_assoc($result2)){
// 		extract($row2);
// 		foreach($result2 as $item){
// 			// $products_id = $item['products_id'];
// 			$productName = $item['productName'];
// 			echo "
// 			<div class='card col-2 float-right'>
// 			  <ul class='list-group list-group-flush'>
// 			    <li class='list-group-item'><label>Product Name:</label>$productName</li>
// 			   </ul>
// 			</div>
// 			";}
// }}}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage Orders</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<?php require_once('partials/header.php'); ?>
	<h1>Order log:</h1>
<table class='table table-bordered'>
  <tr class='table-striped'>
    <th class='text-center table-striped'><h4>User</h4></th>
    <th class='text-center table-striped'><h4>Product ID#</h4></th> 
    <th class='text-center table-striped'><h4>Product Name</h4></th>
    <th class='text-center table-striped'><h4>Quantity Ordered</h4></th>
  </tr>
  <tr class='table-striped'>
    <td class='text-center table-striped'><?php display_users(); ?></td>
    <td class='text-center table-striped'><?php display_productid(); ?></td> 
    <td class='text-center table-striped'><?php display_productName(); ?></td>
    <td class='text-center table-striped'><?php display_qty(); ?></td>
  </tr>
</table>


</body>
</html>