<?php
session_start();
$id = $_GET['id'];
$quantity = $_POST['quantity'];
// code below, translated into human:
// if the superglobal ['cart']
// and data from variable $id are NOT set
// (if cart doesn't exist yet)
// then array cart[$id] = quantity
// So for example, cart[1] = 5
// in cart, there is 5 of the product with the id of 1
if(!isset($_SESSION['cart'][$id]))
	$_SESSION['cart'][$id] = $quantity;
else
	$_SESSION['cart'][$id] += $quantity;
header("location: displaycart.php");
 ?>