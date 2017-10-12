<?php 
session_start();
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
	echo "<img height='200px' width='200px' src='image' alt='Image here'>
	<br>$productName <br>$productDesc <br>$quantity <br>
		Subtotal: ".($productPrice*$quantity).
		"<br> <a href='?remove=$id'><button class='btn btn-danger'>Remove from cart</button></a>" .
		"<a href='product1.php'><button class='btn btn-default'>Back to Runs</button></a>" .
		"<a href='confirmcart.php'><button class='btn btn-default'>Check it out, ey.</button></a><hr>";
}

 ?>