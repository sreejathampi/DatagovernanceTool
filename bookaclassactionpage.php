<?php session_start();
       
if(isset($_POST['btnname']))

{ 

        print_r($_POST);

        
            $grade=$_POST['grade'];
            $email=$_POST['email'];
           
          
          $ran=(rand(1,9999));
          $val=base64_encode($ran);





   



?>

