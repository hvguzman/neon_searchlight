<?php
session_start();
require "connection.php";
if(isset($_SESSION['username']))
	$username = $_SESSION['username'];
else
	$username = "guest";
// this takes all the id's (id, productcat, productname, description, price)
// makes it into an associative array
// and allows it to become a global $id

if(isset($_POST['add_items'])){
	$id = $_POST['id'];
	$productName = $_POST['productName'];
	$productPrice = $_POST['productPrice'];
	$productDesc = $_POST['productDesc'];
	$category_id = $_POST['category_id'];
	$productQty = $_POST['productQty'];
	$sql = "INSERT INTO products (productName, category_id, productPrice, productDesc) VALUES ($productName, $category_id, $productPrice, $productDesc)";
	mysqli_query($conn,$sql) or die();
		}
?>