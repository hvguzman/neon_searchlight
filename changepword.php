<?php
session_start();
require "connection.php";
$id = $_POST['changepword'];
$cpassword = sha1($_POST['password']);
$sql = "UPDATE users SET password = '$cpassword' WHERE id = $id";
if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   echo 'Connected successfully<br>';
   $sql = "UPDATE users SET password = '$cpassword' WHERE id = $id";
   mysqli_query($conn, $sql);
      echo "Password updated successfully";
      session_destroy();
     header("location: index.php");
   // else {
   //    echo "Error deleting record: " . mysqli_error($conn);
   // }
?>