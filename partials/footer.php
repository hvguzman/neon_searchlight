<?php 
// session_start();
if(isset($_SESSION['username']))
	$username = $_SESSION['username'];
else
	$username = "guest";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>FOOTER</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<!-- 
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/footer.css"> -->
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
</head>
<body>




	<div class="nav navbar-default fixed-bottom">
			
			<div class="navbar-header">
				<div>
				<a class="navbar-brand col-md-4 offset-md-4" href="index.php">CompanyLogo</a>
				</div>
			</div>
			<div class="pos-f-t">
			  <div class="collapse" id="navbarToggleExternalContent">
			    <div class="bg-dark p-4">
			      <ul class="nav navbar navbar-dark bg-dark collapse" id="navbarToggleExternalContent">
					<li class="nav-link"><a href="index.php">Home</a></li>
					<li class="nav-link"><a href="about.php">About</a></li>
					<li class="nav-link"><a href="productsoverview.php">Products</a></li>
					<li class="nav-link"><a href="register.php">Register</a></li>
					<li class="nav-link"><a href="login.php">Log In</a></li>
					<li class="nav-link"><a href="logout.php">Log Out</a></li>
					<li class="nav-link"><a href="contact.php">Inquire Today</a></li>
			      	<li class="nav-link"><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      			  	<li class="nav-link"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				  </ul>
			    </div>
			  </div>
			  <nav class="navbar navbar-dark bg-dark">
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>Menu
			    </button>
				<h6 class="text-left" style="color: white">Welcome, <?php echo $username; ?>!</h6>
			  </nav>
			</div>
	</div>


</body>
</html>