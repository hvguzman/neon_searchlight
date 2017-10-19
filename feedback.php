<?php
session_start();
require "connection.php";
if(isset($_POST['feedback'])){
	$fname = $_POST['fname'];
	$femail = $_POST['femail'];
	$fmessage = $_POST['fmessage'];
	$flag = true;
	// $sql = "SELECT * FROM users WHERE username = '$username'";
	$sql = "SELECT * FROM feedback";
	$result = mysqli_query($conn,$sql);

	// This function returns the number of rows.
	// mysqli_num_rows($result);
	// As long as this returns a result, then it means that the username already exists.

	// if(mysqli_num_rows($result)>0){
	// 	// echo $sql;
	// 	$flag = false;
	// 	echo "This username is already taken. Please choose a new one.";
	// 	echo "<a href='register.php' class='btn'>Back to Registration<a>";
	// }
	// if($password != $password2){
	// 	$flag = false;
	// 	echo "Passwords do not match.";
	// 	echo "<a href='register.php' class='btn'>Back to Registration<a>";
	// }
	if($flag){
		$sql = "INSERT INTO feedback (name,email,message) VALUES ('$fname', '$femail', '$fmessage')";
		if(mysqli_query($conn,$sql))
			// echo "ey";
			// var_dump($conn);
			// echo $sql;
			echo "We love feedback. You'll hear from us very soon.";
	}
}

 ?>