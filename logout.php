<?php 
session_start();
unset($_SESSION['username']);
unset($_SESSION['cart']);
session_destroy();
header("location: index.php");
?>
