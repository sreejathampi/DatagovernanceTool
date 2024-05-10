<?php
ob_start();
session_start();

include("../includes/database.class.php");
include("../includes/functions.php");
include("../includes/includefunctions.php");
include 'headerarea.php';


if(!empty($_POST['drugname']))
{

$shop=$_POST['shop'];
 $drugname=$_POST['drugname'];

 $stock=$_POST['stock'];
  $price=$_POST['price'];
 //$legal=1;
$expiry=$_POST['expiry'];




  {
        
            date_default_timezone_set("Europe/London");
        echo  $datetime=date('d/m/y/H:i:s');

//date_timezone_set('Europe/London');
//echo $datetime = gmdate("d-m-Y H:i:s");

  $db9 = new Database();
  
	$db9->query("INSERT INTO `drug_details`(`Drug_id`, `stoke`, `expiry_date`, `sales_figure`, `date`, `status`) VALUES ('$drugname','$stock','$expiry','$price','$datetime','1')");



$db9->execute();
$db9->dbclose();	
} 
header('Location:mystore_medicinelist.php');
}




?>