<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="css/login.css">
<html>

<?php 
session_start();
if(isset($_SESSION['username']))
	$username = $_SESSION['username'];
else
	$username = "guest";

// $string = file_get_contents("items.json");
// $items = json_decode($string, true);

 ?>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>
	<?php require_once('partials/header.php'); ?>

	<div class="container-fluid">
		<div class="card col-sm-6 mx-auto">
			<h4 class="card-header">Log In</h4>
			<form class="form-horizontal" action="authentication.php" method="POST">
				<div class="form-group">
					<li class="list-group-item"><label class="control-label col-sm-4" for="username">
						Username:
					</label>
					<div class="col-sm-12">
						<input class="form-control" type="text" id="username" name="username" placeholder="username"></input>
					</div></li>
				</div>
				<div class="form-group">
					<li class="list-group-item"><label class="control-label col-sm-4" for="password">Password:</label>
					<div class="col-sm-12">
						<input type="password" class="form-control" id="password" name="password" placeholder="Enter password"></input>
							<label><input type="checkbox" name="remember">Remember me</label>
							<button type="submit" name="login" class="btn btn-group btn-primary btn-block"><span class="text-center">Log In</span></button>
					</div></li>
				</div>
			</form>	
		</div>
	<?php require_once('partials/footer.php'); ?>
	</div>


</body>
</html>