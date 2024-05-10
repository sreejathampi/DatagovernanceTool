 <?php 
       include("includes/database.class.php");

       include("includes/functions.php");

       include("includes/includefunctions.php");
         if(isset($_POST['btn']))

{ 
           //print_r($_POST);
         //  echo "<prev>";
            //$cid=$_POST['category_id'];
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $qualification=$_POST['qualification'];
            $address=$_POST['address'];
            $id=$_POST['id'];
           
              date_default_timezone_set('Europe/London');
              $cdate = date("d-m-Y H:i:s");
             
             
           
              $db=new database();   
              echo "UPDATE `users` SET `name`='$name',`email`='$email',`phone`='$phone',`qualification`='$qualification',`address`='$address',`date`='$cdate' WHERE `id`='$id'";

              $db->query("UPDATE `users` SET `name`='$name',`email`='$email',`phone`='$phone',`qualification`='$qualification',`address`='$address',`date`='$cdate' WHERE `id`='$id'");


           

              $db->execute();
             



       

 


    session_write_close();echo "<script>alert('Updated Successfully');window.location='userview.php';</script>";


}
  




?>

