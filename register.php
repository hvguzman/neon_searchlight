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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<?php require_once('partials/header.php'); ?>

	<div class="container">
		<div class="card col-sm-12 mx-auto">
			<h1 class="card-header">Register</h1>
			<h5 class="sub">You are free to withhold some information, but fields with brackets are [required].</h5>
			<form class="form-horizontal" action="authentication.php" method="POST">
			<div class="form-group">
				<li class="list-group-item"><label class="control-label col-sm-4" for="username">
					[Username]:
				</label>
				<div class="col-sm-12">
					<input class="form-control" type="text" id="username" name="username" placeholder="Enter a username" required></input>
				</div></li>
			</div>
			<div class="form-group">
					<li class="list-group-item"><label class="control-label col-sm-4" for="password">[Password]:</label>
					<div class="col-sm-12">
						<input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required></input>
					</div></li>
			</div>
			<div class="form-group">
					<li class="list-group-item"><label class="control-label col-sm-4" for="password">[Re-enter your password]:</label>
					<div class="col-sm-12">
						<input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm password" required></input>
					</div></li>
			</div>
			<div class="form-group">
					<li class="list-group-item"><label class="control-label col-sm-4" for="password">First Name:</label>
					<div class="col-sm-12">
						<input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter your first name"></input>
					</div></li>
			</div>
			<div class="form-group">
					<li class="list-group-item"><label class="control-label col-sm-4" for="password">Surname:</label>
					<div class="col-sm-12">
						<input type="text" class="form-control" id="surname" name="surname" placeholder="Enter your surname"></input>
					</div></li>
			</div>
			<div class="form-group">
					<li class="list-group-item"><label class="control-label col-sm-4" for="password">[Birthday]</label>
					<div class="col-sm-12">
						<input type="date" class="form-control" id="bday" name="bday" required></input>
					</div></li>
			</div>
			<div class="form-group">
					<li class="list-group-item"><label class="control-label col-sm-4" for="password">City</label>
					<div class="col-sm-12">
						<input type="text" class="form-control" id="city" name="city" placeholder="Your current city of residence"></input>
					</div></li>
			</div>
			<div class="form-group">
					<li class="list-group-item"><label class="control-label col-sm-12" for="password">[Do you have current or prior experience working for law enforcement?]</label>
					<div class="col-sm-12">
						<select name="lawenf" class="col-sm-12">
							<option id="lawenfy" name="lawenf" value='1'>Yes</option>
							<option id="lawenfn" name="lawenf" value='0'>No</option>
						</select>
					</div></li>
			</div>
			<div class="form-group">
					<div class="col-sm-12">
						<button type="submit" name="register" class="btn btn-group btn-primary btn-block"><span class="text-center col-12">Register</span></button>
					</div></li>
			</div>
		</form>	
	</div>
	</div>

</body>
</html>