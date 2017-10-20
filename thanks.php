<?php 
session_start();
require "connection.php";
if(isset($_SESSION['username']))
	$username = $_SESSION['username'];
else
	$username = "guest";
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
	<?php if ($username == "admin"){echo"<h1>You cannot make purchases with this account.</h1>";} ?>
	<?php if(mysqli_query($conn,$sql)){
		echo "<h1>Order confirmed. We hope you enjoy the experience.</h1>";
	} else{
		echo "<br>Something went wrong.";
	} ?>
 	<?php require_once('partials/footer.php'); ?>
</body>
</html>