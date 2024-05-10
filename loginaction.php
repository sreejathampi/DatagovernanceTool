<?php 
ob_start();
session_start();
    include("includes/database.class.php");
    include("includes/functions.php");
    include("includes/includefunctions.php");
    
    if (isset($_POST['btn']))
       {
      

          $uname=$_POST['username'];
          $pswd=$_POST['password'];
   

            $db1 = new Database();
             
           $stmt=$db1->query("SELECT * FROM `registration` WHERE `email`='$uname' AND `password`='$pswd'");
           $rows = $db1->resultset();
           if (empty($rows)) {
               header('Location:index.php?l=miss');
           }
           foreach ($rows as $key => $value)
             {
            
             if($db1->rowCount()>0)
                   {
                     
                                  
      
                     $_SESSION['registerId']=$rows[0]['id'];
                     $_SESSION['subcategory']= $rows[0]['s_id'];
                     header('Location:dashboard.php'); 
                                   
                                  }
  
 
else
{
   header('Location:index.php?l=miss');
}
}

}





 



    ?>