<?php

if (isset($_POST['submit'])) {



	  $dbServername = "localhost";
	  $dbUsername = "root";
	  $dbPassword = "";
	  $dbname = "ams";

	  $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbname);


	$empid = mysqli_real_escape_string($conn, $_POST['empid']);
	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	$mname = mysqli_real_escape_string($conn, $_POST['mname']);
	$lname = mysqli_real_escape_string($conn, $_POST['lname']);
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$confirm_password = mysqli_real_escape_string($conn, $_POST['confirmpassword']);

			
				$sql = "SELECT * FROM users WHERE username='$username' OR empid='$empid'";
				$result = mysqli_query($conn, $sql);
				$resultcheck = mysqli_num_rows($result);

				if ($resultcheck > 0) {
					//$message = "Username/Employee ID is taken";
					//echo "<script type='text/javascript'>alert('$message');</script>";
					echo "Username/Employee ID is taken";
					exit();
					header("Location: ../register.php");
				}else {
					//Hashing the Password
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
					//Insert the user into the database
					$sql = "INSERT INTO users (empid, fname, mname, lname, username, email, pass) 
						VALUES ('$empid', '$fname', '$mname', '$lname', '$username', '$email', '$hashedPwd');";
					mysqli_query($conn, $sql);
					header("Location: ../register.php");
					$message = "New Record Added Successfully";
					echo "<script type='text/javascript'>alert('$message');</script>";
					exit();
				}
		
	}

else {
	header("Location: ../register.php");
	exit();
}