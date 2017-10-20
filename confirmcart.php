<?php 
session_start();
require "connection.php";
if(isset($_SESSION['username']))
	$username = $_SESSION['username'];
else
	$username = "guest";
$quantity = $_POST['quantity'];
foreach ($_SESSION['cart'] as $id => $quantity){
	$sql = "SELECT * FROM products WHERE id='$id'";
	$result = mysqli_query($conn,$sql);
	$result = mysqli_fetch_assoc($result);
	// echo $result;
	// extract($result);
	// echo $result;
	// var_dump($result);
	// echo "<br>"."$id";
	// echo "<br>"."$quantity";
	// echo '<br>'.$username;
	$sql = "INSERT INTO orders (order_users, products_id, ordersQty) VALUES ('$username', '$id', '$quantity')";
	mysqli_query($conn, $sql);
	// if(mysqli_query($conn,$sql)){
	// 	echo "Order confirmed.";
	// } else{
	// 	echo "<br>Something went wrong.";
	// }
}





function confirm_cart(){
require "connection.php";
foreach ($_SESSION['cart'] as $id => $quantity) {
	$sql = "SELECT * FROM products WHERE id = '$id'";
	$result = mysqli_query($conn,$sql);
	$result = mysqli_fetch_assoc($result);
	extract($result);
	echo "
	<img style='height:10%; width:10%;' src='$productImg' alt='Image here'>
	<br>$productName <br>$productDesc <br>$quantity <br>
		Subtotal: ".($productPrice*$quantity).
		"<a href='displaycart.php'><button class='btn btn-warning'>Edit Order</button></a>" .
		"<a href='confirmcart.php'><button class='btn btn-success'>Make 'em yours.</button></a><hr>
		";
}}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Confirm Purchase</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<?php require_once('partials/header.php'); ?>
	<?php if ($username!="admin"){confirm_cart();} ?>
	<?php if ($username == "admin"){echo"<h1>You cannot make purchases with this account.</h1>";} ?>
	<?php if(mysqli_query($conn,$sql)){
		
		echo "<h1>Order confirmed. We hope you enjoy the experience.</h1>";
	} else{
		echo "<br>Something went wrong.";
	} ?>
 	<?php require_once('partials/footer.php'); ?>
</body>
</html>