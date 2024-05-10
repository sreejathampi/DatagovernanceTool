 <?php 
       include("includes/database.class.php");

       include("includes/functions.php");

       include("includes/includefunctions.php");
         if(isset($_POST['btn']))

{ 
              //echo "<pre>";
              //print_r($_POST);
           
           
             date_default_timezone_set('Europe/London');
              $cdate = date("d-m-Y H:i:s");
             
              $department=$_POST['category_id'];
              $patient=$_POST['patient'];
              $health=$_POST['health'];
              $hippa=$_POST['hippa'];
              $compliance=$_POST['compliance'];
              $operational=$_POST['operational'];
              $op_date=$_POST['op_date'];

              //echo "INSERT INTO `subuser_permission`(`department_id`,`patient_data`,`healthmonitoring`,`hippa_data`,`hippa_copliance`,`operational`,`date`,`status`,`op_date`) VALUES ('$department','$patient','$health','$hippa','$compliance','$operational','$cdate','1','$op_date')";


              $db=new database();   
              $db->query("INSERT INTO `subuser_permission`(`department_id`,`patient_data`,`healthmonitoring`,`hippa_data`,`hippa_copliance`,`operational`,`date`,`status`,`op_date`) VALUES ('$department','$patient','$health','$hippa','$compliance','$operational','$cdate','1','$op_date')");
              $db->execute();
             



       

 


    session_write_close();echo "<script>alert('Thank you.');window.location='accesspermission.php';</script>";


}
  




?>

