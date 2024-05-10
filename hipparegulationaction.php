 <?php 
       include("includes/database.class.php");

       include("includes/functions.php");

       include("includes/includefunctions.php");
         if(isset($_POST['btn']))

{ 
           print_r($_POST);
           echo "<pre>";
            $cid=$_POST['incident'];
            $description=$_POST['description'];
            $resolution=$_POST['resolution'];
            
           
           
              date_default_timezone_set('Europe/London');
              $cdate = date("d-m-Y H:i:s");
             
             echo "INSERT INTO `hipaa regulations`(`Incident Type`,`description`,`resolution`,`date`,`status`) VALUES ('$cid','$description','$description','$cdate','1')";
           
              $db=new database();   
              $db->query("INSERT INTO `hipaa regulations`(`Incident Type`,`description`,`resolution`,`date`,`status`) VALUES ('$cid','$description','$description','$cdate','1')");
              $db->execute();
             



       

 


    session_write_close();echo "<script>alert('Thank you');window.location='hipparegulations.php';</script>";


}
  




?>

