<?php 
session_start();
require "connection.php";
if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = sha1($_POST['password']);
	$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		$result = mysqli_fetch_assoc($result);
		// echo $result;
		$_SESSION['username'] = $username;
		// $_SESSION['role'] = $result['role'];
		header("location: index.php");
	}else {
		echo "Username and Password do not match. <br>";
		echo "<a href='login.php'>Login here</a>";
		echo $sql;
	}
}

if(isset($_POST['register'])){
	$username = $_POST['username'];
	$password = sha1($_POST['password']);
	$password2 = sha1($_POST['password2']);
	$flag = true;
	$sql = "SELECT * FROM users WHERE username = '$username'";
	$result = mysqli_query($conn,$sql);

	// This function returns the number of rows.
	// mysqli_num_rows($result);
	// As long as this returns a result, then it means that the username already exists.

	if(mysqli_num_rows($result)>0){
		// echo $sql;
		$flag = false;
	}
	if($password != $password2){
		$flag = false;
		echo "Passwords do not match.";
	}
	if($flag){
		$sql = "INSERT INTO users (username,password) VALUES ('$username', '$password')";
		if(mysqli_query($conn,$sql))
			echo "ey";
			var_dump($conn);
			echo $sql;
			echo "Registration successful";
			echo "<a href='login.php'>Login here</a>";
			echo $username . $password;
	}

// This was for the json thingy
	// if(isset($users[$username])){
	// 	echo "Sorry, username already taken. <br>";
	// 	$flag = false;
	// }
	// if ($password != $password2){
	// 	echo "Passwords do not match. <br>";
	// 	$flag = false;
	// }


	/* if ($flag){
		// if $flag because $flag is = true
		$users[$username] = sha1($password);
		// $users[$username] ---> this creates an associative array
		// like $age['Hannah'] = "23"
		// so it associates the info 'Hannah' with the info '23'
		$users_json_string = json_encode($users, JSON_PRETTY_PRINT);
		// json_encode(value_to_be_encoded, json_constant)
		// here, JSON_PRETTY_PRINT uses whitespace in returned data to format it
		$file = fopen("users.json", "w");
		// "w" --> opens the file for reading and writing
		fwrite($file, $users_json_string);
		// fwrite --> writes on the open file
		fclose($file);
	} */
}



 ?>