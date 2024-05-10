 <?php 
       include("includes/database.class.php");

       include("includes/functions.php");

       include("includes/includefunctions.php");
         if(isset($_POST['btn']))

{ 
            //  echo "<pre>";
           // print_r($_POST);
           
           
             date_default_timezone_set('Europe/London');
              $cdate = date("d-m-Y H:i:s");
             
              echo $name=$_POST['user'];
              //echo "INSERT INTO `usercategory`(`name`,`date`,`status`) VALUES ('$name','$cdate','1')";
              $db=new database();   
              $db->query("INSERT INTO `usercategory`(`name`,`date`,`status`) VALUES ('$name','$cdate','1')");
              $db->execute();
             



       

 


    session_write_close();echo "<script>alert('Thank you.New User Category added');window.location='usercategoryview.php';</script>";


}
  




?>

