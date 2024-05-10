<?php session_start();
if (isset($_POST['verifybtn'])) {
	  $otp1=($_POST['otp1']);
	  $otp=$_POST['otp'];
     $mailid=$_POST['mailid'];

if ($otp1==$otp) {
 

	session_write_close();echo "<script>alert('OTP has been verified...');window.location='index.php';</script>";
}
else{

   //echo $otp1=($_POST['otp']);
	session_write_close();echo "<script>alert('OTP verification failed...');window.location='index.php';</script>";

}


}

?>