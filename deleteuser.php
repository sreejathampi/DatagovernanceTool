<?php
ob_start();
session_start();
  include("includes/database.class.php");

include("includes/functions.php");

include("includes/includefunctions.php");
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit();

if($_GET['trankey'])
{
$transkey=$_GET['trankey'];
	$db7 = new Database();
	$db7->deletedata('users', array("id"=>$transkey));
	$db7->dbclose();
	header('Location:userview.php');
	

}
else
{
	header('Location:./');
}


?>