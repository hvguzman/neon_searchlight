<?php
session_start();
require "connection.php";
$id = $_POST['deletion'];
$sql = "DELETE FROM users WHERE id = $id";
if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   echo 'Connected successfully<br>';
   $sql = "DELETE FROM users WHERE id = $id";
   mysqli_query($conn, $sql);
   $sql = "DELETE FROM customers WHERE id = $id";
   mysqli_query($conn, $sql);
     //  echo "Record deleted successfully";
   session_destroy();
     header("location: index.php");
   // else {
   //    echo "Error deleting record: " . mysqli_error($conn);
   // }
?>