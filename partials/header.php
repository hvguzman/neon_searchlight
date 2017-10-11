<?php 
// session_start();
if(isset($_SESSION['username']))
	$username = $_SESSION['username'];
else
	$username = "anon";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>NEON_SEARCHLIGHT_HEADER</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>

<!-- <div class="container"> -->
	
<a class="navbar-brand" href="index.php"><h1 class="h1-responsive">NEON_SEARCHLIGHT</h1></a>
<h4>Think you know the City?</h4>
<h4>You don't know this place like we do.</h4>
<!-- <div class="jumbotron jumbotron-fluid"> -->


<nav class="navbar navbar-expand-sm navbar-light bg-faded">

<!-- Brand -->
<h5 class="text-right">Welcome to the revolution, <?php echo $username; ?>.</h5>
<button class="navbar-toggler btn-block" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<!-- Links -->
<div class="collapse navbar-collapse" id="nav-content"> 
<ul class="navbar-nav mr-auto nav-fill">
<li class="nav-item">
<a class="nav-link" href="index.php">home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="product1.php">runs</a>
</li>
<li class="nav-item">
<a class="nav-link" href="product2.php">kicks</a>
</li>
<li class="nav-item">
<a class="nav-link" href="product3.php">the Spooks</a>
</li>
<li class="nav-item">
<a class="nav-link" href="login.php">log in</a>
</li>
<li class="nav-item">
<a class="nav-link" href="register.php">register</a>
<li class="nav-item">
<a class="nav-link" href="logout.php">log out</a>
</li>
</li>
</ul>

<!-- Search -->
<form class="form-inline" role="search">
<input type="text" class="form-control col-12">
<button type="submit" class="btn btn-secondary btn-block">Search</button>
</form>
</nav>
	
<!-- </div> -->

	
</body>
</html>
