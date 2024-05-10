 <?php 
       include("includes/database.class.php");

       include("includes/functions.php");

       include("includes/includefunctions.php");
         if(isset($_POST['btn']))

{ 
           print_r($_POST);
           echo "<pre>";
            $cid=$_POST['category_id'];
            $name=$_POST['name'];
            
           
           
              date_default_timezone_set('Europe/London');
              $cdate = date("d-m-Y H:i:s");
             
             
           
              $db=new database();   
              $db->query("INSERT INTO `usersubcategory`(`cid`,`name`,`date`,`status`) VALUES ('$cid','$name','$cdate','1')");
              $db->execute();
             



       

 


    session_write_close();echo "<script>alert('Thank you.New Sub User  added');window.location='userrolesubcategory.php';</script>";


}
  




?>

