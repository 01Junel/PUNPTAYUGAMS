<?php

include('./includes/db.inc.php');
include("./includes/function.inc.hp.php");
/*
if(isset($_POST["user_id"]))
{
$statement = $connection->prepare(
 "DELETE FROM users WHERE empid = :empid"
);
$result = $statement->execute(
 array(
  ':empid' => $_POST["user_id"]
 )
);

if(!empty($result))
{
 echo 'Data Deleted';
}
}
*/
if(isset($_POST["user_id"]))
{
	$statement = $connection->prepare(
 "DELETE FROM users WHERE empid = :empid"
);
$result = $statement->execute(
 array(
  ':empid' => $_POST["user_id"]
 )
);
if(!empty($result))
{
 echo 'Data Deleted';
}
}





?>