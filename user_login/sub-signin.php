<?php
ob_start();
session_start();
include("../includes/database.class.php");
include("../includes/functions.php");
include("../includes/includefunctions.php");

if(isset($_POST['email'])&&isset($_POST['password']))
{
	  $email=$_POST['email'];
	 $password=$_POST['password'];
	  date_default_timezone_set('Europe/London');
              $cdate = date("d-m-Y H:i:s");

	//echo "SELECT * FROM `users` WHERE `email`='$email' AND `phone`='$password'";
	$db1 = new Database();
	$stmt=$db1->query("SELECT * FROM `users` WHERE `email`='$email' AND `phone`='$password'");
	$rows = $db1->resultset();
            
              $db=new database();
              $db->query("UPDATE `users` SET `date`='$cdate',`status`='2' WHERE `email`='$email'");
              $db->execute();						

if($db1->rowCount()>0)
{
	if($_SESSION['useridsA']= $rows[0]['id'])
	{
		//$_SESSION['userA']= $rows[0]['title'];
		//$_SESSION['courseA']= $rows[0]['course'];
		 $_SESSION['subcategory']= $rows[0]['s_id'];
		 header('Location:desk.php');
	}

}
else
{
	header('Location:index.php?l=miss');
}


}
else
{
	header('Location:index.php?l=miss');
}



?>