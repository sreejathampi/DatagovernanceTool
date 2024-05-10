<?php
ob_start();
session_start();

include("../includes/database.class.php");
include("../includes/functions.php");
include("../includes/includefunctions.php");
include 'headerarea.php';


if(!empty($_POST['shop']))
{
  //echo "<pre>";
//print_r($_POST);
$shop=$_POST['shop'];
 $drug=$_POST['drug'];

 $customerid=$_POST['customerid'];

 $quantity=$_POST['quantity'];


  {
        
         date_default_timezone_set("Europe/London");
           $datetime=date('d/m/Y');

     
                $db1  =   new Database();
                  $stmt=$db1->query("SELECT * FROM `drug_detail` where `id`='$drug'");    
                   $rows = $db1->resultset();
                     foreach($rows as $result)
                       {
                             $idcheck=$result['id_check'];
                              $drugname=$result['Drug_name'];
                      

                                  $stock=$result['stock'];
                             $price=$result['price'];
                        }

$remaing=$stock-$quantity;

 $total=$price * $quantity;

             $db13  =   new Database();
                  $stmt=$db13->query("SELECT * FROM `customer_excel2` where `number`='$customerid'");    
                   $rows3 = $db13->resultset();
                     foreach($rows3 as $result3)
                       {
                              $dob=$result3['id'];
                                
                       }
                     $newd=  date('Y', strtotime($dob));

//$new=explode($dob, )


if ($newd>=2005) 
{
   session_write_close();echo "<script>alert('The customer is under 18!');window.location='sales_details.php';</script>";
}

// elseif ($idcheck=='Y') {
//  echo "<script>alert('ID verification Required!');window.location='sales_details.php';</script>"; 
// }


else{
   
  $db9 = new Database();
  //echo "INSERT INTO `new_salesdetails`(`drug_id`, `Customer_id`, `purchase_quantity`, `price`, `date`, `status`, `shop_id`) VALUES ('$drug','$customerid','$quantity','$total','$datetime','1','4')";
  $db9->query("INSERT INTO `checkout_salesdetails`(`drug_id`, `Customer_id`, `purchase_quantity`, `price`, `date`, `status`,`shop_id`) VALUES ('$drug','$customerid','$quantity','$total','$datetime','1','$shop')");

  $db9->execute();
  //$db9->dbclose();

//echo "UPDATE `drug_detail` SET `stock`='$remaing' WHERE `id`='$drug'";
  // $db10= new Database();
  // $db10->query("UPDATE `drug_detail` SET `stock`='$remaing' WHERE `id`='$drug'");
  // $db10->execute();
  // $db10->dbclose();
  

header('Location:sales_checkout.php?id='.$customerid.'');
	
//header('Location:sales_details.php');
} }

 //session_write_close();echo "<script>window.location='ales_checkout.php?id='.$customerid.';</script>";
}




?>