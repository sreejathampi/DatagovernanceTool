 <?php 
       include("includes/database.class.php");

       include("includes/functions.php");

       include("includes/includefunctions.php");
         if(isset($_POST['btn']))

{ 
           print_r($_POST);
           echo "<pre>";
            $cid=$_POST['category_id'];
            $sid=$_POST['subcategory_id'];
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $qualification=$_POST['qualification'];
            $address=$_POST['address'];
           
           
              date_default_timezone_set('Europe/London');
              $cdate = date("d-m-Y H:i:s");
             
             
           
              $db=new database();   
              $db->query("INSERT INTO `users`(`name`,`email`,`phone`,`qualification`,`address`,`date`,`status`,`category_id`,`s_id`) VALUES ('$name','$email','$phone','$qualification','$address','$cdate','1','$cid','$sid')");
              $db->execute();
             



       

 


    session_write_close();echo "<script>alert('Thank you.New User  added');window.location='userview.php';</script>";


}
  




?>

