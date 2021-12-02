<?php
include_once 'header.php';
if (isset($_POST['logout_btn'])) {
	session_start();
	session_unset();
	session_destroy();
	header("Location: ../ams.php");
	exit();
}