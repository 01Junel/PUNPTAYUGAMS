<?php

session_start();


if (isset($_POST['submit'])) {

	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "ams";

	$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbname);

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	$sql = "SELECT * FROM users WHERE  email='$email'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck < 1) {
			header("Location: ../login.php?login=FAILED");
			exit();
	}else {
		if ($row = mysqli_fetch_assoc($result)) {
				//De-Hashing the password
				//hashedPwdCheck
				$hashedpwd = password_verify($password, $row['pass']);
				$password = ($row['pass']);

					if ($hashedpwd == false) {
						header("Location: ../login.php?login=incorrectpassword");
					exit();
				}
					elseif ($password == true) {
					//Login the User here
					$_SESSION['u_id'] = $row['empid'];
					$_SESSION['u_first'] = $row['fname'];
					$_SESSION['u_last'] = $row['mname'];
					$_SESSION['u_bday'] = $row['lname'];
					$_SESSION['u_email'] = $row['username'];
					$_SESSION['u_usern'] = $row['email'];
					header("Location: ../admin.php?login=success");
					exit();
				}
				
		}
	}
}
 	else {
		header("Location: ../admin.php?login=error");
	exit();
	}
?>