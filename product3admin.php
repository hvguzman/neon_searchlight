<?php 
session_start();
if(isset($_SESSION['username']) && $_SESSION['username'] == 'admin'){
	echo "Welcome, admin.";
} else {
	header('Location:index.php');
	echo "You do not have permission to view this page. <br>
		<a href='login.php'>Login as admin</a>";
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Products Page</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.js" integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
</head>
<body>
	<?php require_once('partials/header.php'); ?>

	<div class="container-fluid">
		
		<div class="headercontainer">
			<img class="img-responsive center-block sunsetsplash" src="img/factorysunsetedit.jpg">
			<div class="carousel-caption">
					<h3 class="panel-body"><span>Product 3</span></h3>
			</div>
		</div>
       
	<div class="card">
	  <ul class="list-group list-group-flush">
	    <li class="list-group-item">Cras justo odio</li>
	    <li class="list-group-item">Dapibus ac facilisis in</li>
	    <li class="list-group-item">Vestibulum at eros</li>
	  </ul>
	</div>



	</div>
	<?php require_once('partials/footer.php'); ?>
</body>
</html>