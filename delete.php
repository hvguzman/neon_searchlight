<?php 

require "connection.php";

$id = $_GET['id'];

$sql = "DELETE FROM products WHERE id = $id";
mysqli_query($conn,$sql) or die();

header("location: product1.php");
?>