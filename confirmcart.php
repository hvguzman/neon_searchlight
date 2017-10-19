<?php 
session_start();
function confirm_cart(){
if(isset($_GET['remove'])){
	$remove_id = $_GET['remove'];
	unset($_SESSION['cart'][$remove_id]);
	header("location: displaycart.php");
}
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
		"<br> <a href='?remove=$id'><button class='btn btn-danger'>Remove from cart</button></a>" .
		"<a href='product1.php'><button class='btn btn-warning'>Back to Runs</button></a>" .
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
 	<?php confirm_cart(); ?>
 	<?php require_once('partials/footer.php'); ?>
</body>
</html>