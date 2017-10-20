<?php 
session_start();
require "connection.php";
if(isset($_SESSION['username']))
	$username = $_SESSION['username'];
else
	$username = "guest";
function display_users(){
	global $username;
	global $conn;
	$sql = "SELECT * FROM users";
	$sql2 = "SELECT * FROM customers";
	$result = mysqli_query($conn,$sql);
	$result2 = mysqli_query($conn,$sql2);
	while ($row = mysqli_fetch_assoc($result)){
		extract($row);
	foreach($result as $item){
		$viewid = $item['id'];
		$viewusername = $item['username'];
		$role = $item['role'];
		echo "
		<div class='card col-2 float-right'>
		  <ul class='list-group list-group-flush'>
		    <li class='list-group-item'><label>User ID#:</label>$viewid</li>
		    <li class='list-group-item'><label>Username:</label>$viewusername</li>
		    <li class='list-group-item'><label>Role:</label>$role</li>
		   </ul>
		</div>
		    ";
	while ($row2 = mysqli_fetch_assoc($result2)){
		extract($row2);
	foreach($result2 as $item2){
		$firstName = $item2['firstName'];
		$lastName = $item2['lastName'];
		$birthday = $item2['birthday'];
		$city = $item2['city'];
		$lawEnf = $item2['lawEnf'];
		echo "
		<table style='width:100%''>
		  <tr class='table table-striped'>
		    <th><h4>Firstname</h4></th>
		    <th><h4>Lastname</h4></th> 
		    <th><h4>Birthday</h4></th>
		    <th><h4>City</h4></th>
		    <th><h4>Law Enforcement Status [1 = Yes, 0 = No]</h4></th>
		  </tr>
		  <tr>
		    <td><h4>$firstName</h4></td>
		    <td><h4>$lastName</h4></td> 
		    <td><h4>$birthday</h4></td>
		    <td><h4>$city</h4></td>
		    <td><h4>$lawEnf</h4></td>
		  </tr>
		</table>
		  ";
	}
}}}}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage Users</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="orders.css">
</head>
<body>
	<?php require_once('partials/header.php'); ?>
	<h1>User Log:</h1>
	<?php display_users(); ?>
</body>
</html>