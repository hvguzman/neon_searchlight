<?php
if(isset($_SESSION['username']))
	$username = $_SESSION['username'];
else
	$username = "anon";
if($username != "anon" and $username !="admin")
  $log = "<a class= 'log btn btn-secondary' href='myaccount.php'>My Account</a><a class= 'log btn btn-secondary' href='logout.php'>Log out</a>";
else if($username != "anon" and $username =="admin")
  $log = "<a class= 'log btn btn-secondary' href='manageusers.php'>View Users</a><a class= 'log btn btn-secondary' href='manageorders.php'>View Orders</a><a class= 'log btn btn-secondary' href='logout.php'>Log out</a>";
else
  $log = "<div class='btn-group'><a class= 'log btn btn-secondary' href='register.php'>Join us</a><a data-toggle='modal' data-target='#logIn' class= 'log btn btn-secondary' href='#' onclick='removeScanlines()'>Log in</a></div>
<div class='modal fade' id='logIn' tabindex='-1' role='dialog' aria-labelledby='logInModal' aria-hidden='true' style='z-index:9999999999999999999999999'>
<div class='modal-dialog text-right' role='document'>
<div style='color: black;' class='modal-content'>
<div class='modal-header'>
<h4 class='modal-title' id='logInModal'>Welcome back.</h4>
<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
<span aria-hidden='true'>&times;</span>
</button>
</div>
<div class='modal-body'>
 <form class='form-horizontal' action='authentication.php' method='POST'>
				<div class='form-group'>
					<li class='list-group-item'><label class='control-label col-sm-4' for='username'>
						Username:
					</label>
					<div class='col-sm-12'>
						<input class='form-control' type='text' id='username' name='username' placeholder='username' required></input>
					</div></li>
				</div>
				<div class='form-group'>
					<li class='list-group-item'><label class='control-label col-sm-4' for='password'>Password:</label>
					<div class='col-sm-12'>
						<input type='password' class='form-control' id='password' name='password' placeholder='Enter password' required></input>
</div>
<div class='modal-footer'>
        <button type='submit' name='login' class='btn btn-primary'>Log In</button>
        <button type='button' class='btn btn-secondary' data-dismiss='modal' onclick='returnScanlines()'>Close</button>
        </form>
</div>
</div>
</div>
</div>

"
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>NEON_SEARCHLIGHT_HEADER</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <script type="text/javascript">
  	function removeScanlines(){
  		// div.classList.remove("scanlines");
      document.getElementById("scan").classList.remove("scanlines");
      document.getElementById("scan1").classList.remove("scanlines");
      document.getElementById("scan2").classList.remove("scanlines");
  		document.getElementById("scan3").classList.remove("scanlines");
  	}

  	function returnScanlines(){
      document.getElementById("scan").classList.add("scanlines");
      document.getElementById("scan1").classList.add("scanlines");
      document.getElementById("scan2").classList.add("scanlines");
  		document.getElementById("scan3").classList.add("scanlines");
  	}
  </script>
</head>
<body>

<!-- <div class="container"> -->
  
<!-- <h5 class="text-right">Welcome to the revolution, <?php echo $username; ?>.</h5> -->
  <!-- <a class="navbar-brand" href="index.php"><div class="neon">>neon </div></a>
  <a class="navbar-brand" href="index.php"><div class="flux">_searchlight </div></a> -->
<!-- <a class="navbar-brand" href="index.php"><h1 class="h1-responsive">>NEON_SEARCHLIGHT</h1></a> -->
<!-- <h4>Reclaim your city.</h4> -->


<nav class="navbar navbar-toggleable-md bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon custom-toggler flux"></span>
  </button>
  <a class="navbar-brand" href="index.php"><div class="neon">>neon<div class="flux">_searchlight</div></div></a>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="product1.php">_runs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="product2.php">_kicks</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">_contact</a>
      </li>
    </ul>
  </div>
    <span class="navbar-text">
      <h6 class="text-right">Welcome to the revolution, <?php echo $username; ?>.</h6>
      <h6 class="text-right"><?php echo $log; ?></h6>
    </span>
</nav>
<div class = "searchbar">
        <div class="text-right log">
            <form class="form-inline my-2 my-lg-0 float-right">
              <button class="btn btn-outline-primary float-right" type="submit" id="sbut"><span class="fa fa-search"></span></button>
              <input class="form-control mr-sm-2 float-right" id="sbar" type="text" placeholder="Looking for something?">
            </form>
        </div>
      </div>



<!-- <button class="fa fa-shopping-cart" style="position: fixed; top: 250px; right:50px">Shopping cart</button> -->
  
</body>
</html>
