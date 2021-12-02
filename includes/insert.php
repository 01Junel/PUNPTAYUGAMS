<?php
include('db.inc.php');
include('function.inc.hp.php');
if(isset($_POST["operation"]))
{
 if($_POST["operation"] == "Add")
 {
  $statement = $connection->prepare("
   INSERT INTO users (StudID, SchID, FirstName, MiddleName, LastName, Year, Address, ContactPerson, ContactNumber, Birthday, Course, image)
   VALUES (:StudID, :SchID, :FirstName, :MiddleName, :LastName, :Year, :Address, :ContactPerson, :ContactNumber, :Birthday, :Course, :image)
  ");
  $result = $statement->execute(
   array(
    ':StudID' => $_POST["StudID"],
    ':SchID' => $_POST["SchID"],
    ':LastName' => $_POST["LastName"],
    ':FirstName' => $_POST["FirstName"],
    ':MiddleName' => $_POST["MiddleName"],
	':Course'       => $_POST["Course"],
    ':Year'       => $_POST["Year"],
    ':Address'    => $_POST["Address"],
    ':ContactPerson' => $_POST["ContactPerson"],
    ':ContactNumber' => $_POST["ContactNumber"],
    ':Birthday'   => $_POST["Birthday"],
    ':image'  => $image
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

 if($_POST["operation"] == "Edit")
 {
  $image = '';
  if($_FILES["user_image"]["name"] != '')
  {
   $image = upload_image();
  }
  else
  {
   $image = $_POST["hidden_user_image"];
  }
  $statement = $connection->prepare(
   "UPDATE students
   SET  StudID = :StudID, FirstName = :FirstName, MiddleName = :MiddleName, LastName = :LastName,  Year = :Year, Address = :Address, ContactPerson = :ContactPerson, ContactNumber = :ContactNumber,  Birthday = :Birthday, Course = :Course, image = :image
   WHERE SchID = :SchID
   "
  );
  $result = $statement->execute(
   array(
     ':StudID'      => $_POST["StudID"],
     ':LastName'      => $_POST["LastName"],
     ':FirstName'     => $_POST["FirstName"],
     ':MiddleName'    => $_POST["MiddleName"],
	 ':Course'          => $_POST["Course"],
     ':Year'          => $_POST["Year"],
     ':Address'       => $_POST["Address"],
     ':ContactPerson' => $_POST["ContactPerson"],
     ':ContactNumber' => $_POST["ContactNumber"],
     ':Birthday'      => $_POST["Birthday"],
     ':image'         => $image,
     //':StudID'        => $_POST["user_id"]
	 ':SchID'        => $_POST["SchID"]
   )
  );
  if(!empty($result))
  {
   echo 'Data Updated';
  }else {
	echo 'UPDATE ERROR!! DUPLICATE DATA. DATA FAILED TO UPDATE';
  }
 }
}

?>
