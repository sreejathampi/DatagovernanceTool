<?php
ob_start();
session_start();

include("../includes/database.class.php");
include("../includes/functions.php");
include("../includes/includefunctions.php");
include 'headerarea.php';


if(!empty($_POST['firstname']))
{

$shop=$_POST['shop'];
echo $firstname=$_POST['firstname'];

echo $lastname=$_POST['lastname'];

echo $housenumber=$_POST['housenumber'];
$dob=$_POST['dateofbirth'];
$street=$_POST['street'];
 
echo $postcode=$_POST['postcode'];

echo $city=$_POST['city'];
echo $state=$_POST['state'];
echo $country=$_POST['country'];

  {
        
            date_default_timezone_set("Europe/London");
        echo  $datetime=date('d/m/y/H:i:s');

//date_timezone_set('Europe/London');
//echo $datetime = gmdate("d-m-Y H:i:s");

  $db9 = new Database();
  //echo "INSERT INTO `customer_data`(`first_name`, `last_name`, `house_number`, `street_name`, `post_code`, `city`, `state`, `country`, `DOB`, `date`, `status`) VALUES ('$firstname','$lastname','$housenumber','$street','$postcode','$city','$state','$country','$dob','$datetime','1')";
	$db9->query("INSERT INTO `customer_data`(`first_name`, `last_name`, `house_number`, `street_name`, `post_code`, `city`, `state`, `country`, `DOB`, `date`, `status`,`shop`) VALUES ('$firstname','$lastname','$housenumber','$street','$postcode','$city','$state','$country','$dob','$datetime','1','$shop')");


$db9->execute();
$db9->dbclose();	
} 
header('Location:nonregisteredcustomerlist.php');
}




?>