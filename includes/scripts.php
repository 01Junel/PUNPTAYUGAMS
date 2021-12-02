  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

    <!-- Bootstrap core JavaScript-->
  <script src="./vendor2/jquery/jquery.min.js"></script>
  <script src="./vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="./vendor2/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="./vendor2/datatables/jquery.dataTables.js"></script>
  <script src="./vendor2/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="./js2/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="./js2/demo/datatables-demo.js"></script>


  <!-- Demo scripts for this page-->
  <script src="js2/demo/chart-area-demo.js"></script>
  <script src="js2/demo/chart-bar-demo.js"></script>
  <script src="js2/demo/chart-pie-demo.js"></script>

  <script src="./vendor2/jquery/jquery.min.js"></script>
  <script src="./vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>


<!--  <?php


$connection = mysqli_connect("localhost","root","","ams");

if(isset($_POST['registerbtn']))
{
    $empid = $_POST['empid'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirmpassword'];

    if($password === $confirm_password)
    {
        $query = "INSERT INTO users (empid,fname,mname,lname,username,email,password) VALUES ('$empid','$fname','$mname','$lname','$username','$email','$password')";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
            echo "done";
            $_SESSION['success'] =  "Admin is Added Successfully";
            header('Location: register.php');
        }
        else 
        {
            echo "not done";
            $_SESSION['status'] =  "Admin is Not Added";
            header('Location: register.php');
        }
    }
    else 
    {
        echo "pass no match";
        $_SESSION['status'] =  "Password and Confirm Password Does not Match";
        header('Location: register.php');
    }

}

?>-->

<!--<?php
      /*  include('./includes/db.inc.php');
        include('/includes/function.inc.hp.php');
        if(isset($_POST["submit"]))
        {
          $password = mysqli_real_escape_string($conn, $_POST['password']);
          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
          $statement = $connection->prepare("
           INSERT INTO users (empid, fname, mname, lname, username, email, pass)
           VALUES (:empid, :fname, :mname, :lname, :username, :email, :pass)
          ");
          $result = $statement->execute(
           array(
            ':empid'    => $_POST["empid"],
            ':fname'    => $_POST["fname"],
            ':mname'    => $_POST["mname"],
            ':lname'    => $_POST["lname"],
            ':username' => $_POST["username"],
            ':email'    => $_POST["email"],
            ':pass'     => password_hash($password, PASSWORD_DEFAULT),
           )
          );
          if(!empty($result))
          {
              $message = "Data Inserted";
              echo "<script type='text/javascript'>alert('$message');</script>";
          }
          else{
            echo "\nPDOStatement::errorCode(): ";
        print $statement->errorCode();
            echo "\nPDO::errorCode(): ", $statement->errorCode();
            echo "\nPDO::errorInfo():\n";
           print_r($statement->errorInfo());
          }
         }

?>-->*/