<?php
$host = 'localhost';
$username = 'root';
$password = "";
// $dbname = 'insertyourdatabasenamehere';
$dbname = 'neon_searchlight';
$conn = mysqli_connect($host,$username,$password,$dbname);
// Don't put mysqli_close($conn);
// This means you didn't use your database
?>