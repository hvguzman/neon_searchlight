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
	<title>Log In</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/login.css">
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
	</div>


</body>
</html>