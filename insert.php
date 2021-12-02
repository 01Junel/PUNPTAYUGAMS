<?php
include('./includes/db.inc.php');
include('./includes/function.inc.hp.php');
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
   echo 'Data Inserted';
  }
  else{
    echo "\nPDOStatement::errorCode(): ";
print $statement->errorCode();
    echo "\nPDO::errorCode(): ", $statement->errorCode();
    echo "\nPDO::errorInfo():\n";
   print_r($statement->errorInfo());
  }
 }


?>
