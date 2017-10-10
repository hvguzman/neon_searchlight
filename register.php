<!DOCTYPE html>
<html>
<?php 
session_start();
if(isset($_SESSION['username']))
	$username = $_SESSION['username'];
else
	$username = "guest";
 ?>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<?php require_once('header.php'); ?>

	<div class="container-fluid">
		<div class="card col-sm-6 mx-auto">
			<h4 class="card-header">Register</h4>
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
					</div></li>
			</div>
			<div class="form-group">
					<li class="list-group-item"><label class="control-label col-sm-4" for="password">Password:</label>
					<div class="col-sm-12">
						<input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm password"></input>
					</div></li>
			</div>
			<div class="form-group">
					<div class="col-sm-12">
						<button type="submit" name="register" class="btn btn-group btn-primary btn-block"><span class="text-center">Register</span></button>
					</div></li>
			</div>
		</form>	
	</div>
	</div>

</body>
</html>