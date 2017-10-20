<?php 
session_start();
require "connection.php";
if(isset($_SESSION['username']))
	$username = $_SESSION['username'];
else
	$username = "guest";

function display_account(){
	global $username;
	global $conn;
	$sql = "SELECT * FROM users WHERE username = '$username'";
	$result = mysqli_query($conn,$sql);
	while ($row = mysqli_fetch_assoc($result)){
		extract($row);
	foreach($result as $item){
		$id = $item['id'];
		$viewusername = $item['username'];
		echo "
		<div class='card col-12'>
		  <ul class='list-group list-group-flush'>
		    <li class='list-group-item'><h4 style='color: black;' class='text-right col-6'>Your User ID#:</h4><h4 class='text-left col-4' style='color: black;'>$id</h4></li>
		    <li class='list-group-item'><h4 class='text-right col-6' style='color: black;'>Your Username:</h4><h4 class='text-left col-4' style='color: black;'>$viewusername</h4></li>
			<button class='btn btn-primary' data-toggle='modal' data-target='#pwordModal'>Change Password</button>
			<button class='btn btn-danger' data-toggle='modal' data-target='#deletionModal'>Delete Account</button>
		   </ul>
		</div>
		";
}}}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>My Account</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<?php require_once('partials/header.php'); ?>
	<?php display_account(); ?>

	<!-- Modal for Account Deletion -->

	<div class='modal fade' id='deletionModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
		  <div class='modal-dialog' role='document'>
		    <div class='modal-content'>
		      <div class='modal-header'>
		        <h5 class='modal-title' id='exampleModalLabel'>Are you sure? This is permanent!</h5>
		        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
		          <span aria-hidden='true'>&times;</span>
		        </button>
		      </div>
		      <div class='modal-body'>
		      	Enter your User ID # to confirm deletion:
		      	<form method='POST' action='deleteaccount.php?=id'>
		        <input type="number" name="deletion" required>
		      </div>
		      <div class='modal-footer'>
		        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
		        <a href="deleteaccount.php"><button type='submit' class='btn btn-danger'>Delete Account</button></a>
		        </form>
		      </div>
		    </div>
		  </div>
		</div>

	<!-- Modal for Change Password -->

		<div class='modal fade' id='pwordModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
		  <div class='modal-dialog' role='document'>
		    <div class='modal-content'>
		      <div class='modal-header'>
		        <h5 class='modal-title' id='exampleModalLabel'>Change your password.</h5>
		        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
		          <span aria-hidden='true'>&times;</span>
		        </button>
		      </div>
		      <div class='modal-body'>
		      	<form method='POST' action='changepword.php?=id'>
		      	Enter your User ID # to confirm password change:
	      		<input type="number" name="changepword" required>
		      	<div class="form-group">
					<li class="list-group-item"><label class="control-label col-sm-4" for="password">New password:</label>
					<div class="col-sm-12">
						<input type="password" class="form-control" id="password" name= "password" placeholder="Enter your new password" required></input>
					</div></li>
			</div>
			<div class="form-group">
					<li class="list-group-item"><label class="control-label col-sm-4" for="password">Re-enter your new password:</label>
					<div class="col-sm-12">
						<input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm new password" required></input>
					</div></li>
			</div>
		      </div>
		      <div class='modal-footer'>
		        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
		        <a href="changepword.php"><button type='submit' class='btn btn-warning'>Change Password</button></a>
		        </form>
		      </div>
		    </div>
		  </div>
		</div>
</body>
</html>