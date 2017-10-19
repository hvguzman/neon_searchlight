<?php
require "connection.php";
$id = $_GET['id'];
$sql = "DELETE FROM products WHERE id = $id";
if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   echo 'Connected successfully<br>';
   $sql = "DELETE FROM products WHERE id = $id";
   
   if (mysqli_query($conn, $sql)) {
      echo "Record deleted successfully";
	  header("location: product1.php");
   } else {
      echo "Error deleting record: " . mysqli_error($conn);
   }
?>