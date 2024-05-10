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
	$db7->deletedata('subuser_permission', array("id"=>$transkey));
	$db7->dbclose();
	header('Location:accesspermissionview.php');
	

}
else
{
	header('Location:./');
}


?>