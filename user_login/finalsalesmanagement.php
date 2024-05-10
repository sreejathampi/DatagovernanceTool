<?php


include("../includes/database.class.php");
include("../includes/functions.php");
include("../includes/includefunctions.php");
include 'headerarea.php';



 echo $cid=$_POST['customerid'];




                $db1  =   new Database();
                  $stmt=$db1->query("SELECT * FROM `checkout_salesdetails` where `Customer_id`='$cid'");    
                   $rows = $db1->resultset();

                     foreach($rows as $result)
                       {
                           
                                 $drug=$result['drug_id'];
                                 $price=$result['price'];
                                 $quantity=$result['purchase_quantity'];
                        


                          $db12  =   new Database();
                 echo  $stmt=$db12->query("SELECT * FROM `drug_detail` where `id`='$drug'");    
                   $rows2 = $db12->resultset();
                    foreach($rows2 as $result2)
                      {
                            
                              

                         echo  $stock=$result2['stock'];
                        
                  $remaing=$stock-$quantity;

             $db13  =   new Database();
                  $stmt=$db13->query("SELECT * FROM `customer_excel2` where `number`='$cid'");    
                   $rows3 = $db13->resultset();
                     foreach($rows3 as $result3)
                       {
                              $dob=$result3['id'];
                                
                       
                     $newd=  date('Y', strtotime($dob));

//$new=explode($dob, )
 date_default_timezone_set("Europe/London");
           $datetime=date('d/m/Y');

if ($newd>=2005) {
   session_write_close();echo "<script>alert('The customer is under 18!');window.location='sales_details.php';</script>";
}

// elseif ($idcheck=='Y') {
//  echo "<script>alert('ID verification Required!');window.location='sales_details.php';</script>"; 
// }


else{
   
  $db9 = new Database();
  //echo "INSERT INTO `new_salesdetails`(`drug_id`, `Customer_id`, `purchase_quantity`, `price`, `date`, `status`, `shop_id`) VALUES ('$drug','$customerid','$quantity','$total','$datetime','1','4')";
  $db9->query("INSERT INTO `new_salesdetails`(`drug_id`, `Customer_id`, `purchase_quantity`, `price`, `date`, `status`,`shop_id`) VALUES ('$drug','$cid','$quantity','$price','$datetime','1','$shop')");

  $db9->execute();
  //$db9->dbclose();

  $db10= new Database();
  $db10->query("UPDATE `drug_detail` SET `stock`='$remaing' WHERE `id`='$drug'");
  $db10->execute();
  $db10->dbclose();
  }
 $db91 = new Database();
  $db91->query("DELETE FROM `checkout_salesdetails` WHERE `Customer_id`='$cid'");
$db91->execute();
  }
//header('Location:sales_details.php');
} } 
header('Location:sales_details.php');



?>