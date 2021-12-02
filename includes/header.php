<?php
  
  $dbServername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbname = "ams";

  $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbname);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PUNPAMS</title>

  <!-- Custom fonts for this template-->
  <!--<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

   <!-- Custom fonts for this template-->
  <link href="vendor2/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor2/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

  <!--CRUD STYLE-->
    <!--<link rel="stylesheet" href="crud/jquery-ui.css">
    <link rel="stylesheet" href="crud/bootstrap.min.css" />-->
    <script src="crud/jquery.min.js"></script>  
    <script src="crud/jquery-ui.js"></script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">