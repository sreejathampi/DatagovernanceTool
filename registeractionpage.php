<?php session_start();

if(isset($_POST['registrbtn']))

{ 

        // print_r($_POST);

            $name=$_POST['fname'];
        
            $phone=$_POST['phone'];
            $email=$_POST['email'];
          
            $course=$_POST['course'];
           // $photo=$_FILES['photo'];


       




 
 class EMail

{

  const newline = "\r\n";



  private

    $Port, $Localhost, $skt;



  public

    $Server, $Username, $Password, $ConnectTimeout, $ResponseTimeout,

    $Headers, $ContentType, $From, $To, $Cc, $Subject, $Message,

    $Log;



  function __construct()

  {

    $this->Server = "mail.tissertechnologies.com";

    $this->Port = 25 ;

    $this->Localhost = "localhost";

    $this->ConnectTimeout = 30;

    $this->ResponseTimeout = 8;

    $this->From = array();

    $this->To = array();

    $this->Cc = array();

    $this->Log = array();

    $this->Headers['MIME-Version'] = "1.0";

    $this->Headers['Content-type'] = "text/plain; charset=iso-8859-1";

  }



  private function GetResponse()

  {

    stream_set_timeout($this->skt, $this->ResponseTimeout);

    $response = '';

    while (($line = fgets($this->skt, 515)) != false)

    {

 $response .= trim($line) . "\n";

 if (substr($line,3,1)==' ') break;

    }

    return trim($response);

  }



  private function SendCMD($CMD)

  {

    fputs($this->skt, $CMD . self::newline);

    return $this->GetResponse();

  }



  private function FmtAddr(&$addr)

  {

    if ($addr[1] == "") return $addr[0]; else return "\"{$addr[1]}\" <{$addr[0]}>";

  }



  private function FmtAddrList(&$addrs)

  {

    $list = "";

    foreach ($addrs as $addr)

    {

      if ($list) $list .= ", ".self::newline."\t";

      $list .= $this->FmtAddr($addr);

    }

    return $list;

  }



  function AddTo($addr,$name = "")

  {

    $this->To[] = array($addr,$name);

  }



  function AddCc($addr,$name = "")

  {

    $this->Cc[] = array($addr,$name);

  }



  function SetFrom($addr,$name = "")

  {

    $this->From = array($addr,$name);

  }

  function Send()

  {

    $newLine = self::newline;



    //Connect to the host on the specified port

    $this->skt = fsockopen($this->Server, $this->Port, $errno, $errstr, $this->ConnectTimeout);



    if (empty($this->skt))

      return false;



    $this->Log['connection'] = $this->GetResponse();



    //Say Hello to SMTP

    $this->Log['helo']     = $this->SendCMD("EHLO {$this->Localhost}");



    //Request Auth Login

    $this->Log['auth']     = $this->SendCMD("AUTH LOGIN");

    $this->Log['username'] = $this->SendCMD(base64_encode($this->Username));

    $this->Log['password'] = $this->SendCMD(base64_encode($this->Password));



    //Email From

    $this->Log['mailfrom'] = $this->SendCMD("MAIL FROM:<{$this->From[0]}>");



    //Email To

    $i = 1;

    foreach (array_merge($this->To,$this->Cc) as $addr)

      $this->Log['rcptto'.$i++] = $this->SendCMD("RCPT TO:<{$addr[0]}>");



    //The Email

    $this->Log['data1'] = $this->SendCMD("DATA");



    //Construct Headers

    if (!empty($this->ContentType))

      $this->Headers['Content-type'] = $this->ContentType;

    $this->Headers['From'] = $this->FmtAddr($this->From);

    $this->Headers['To'] = $this->FmtAddrList($this->To);

    if (!empty($this->Cc))

      $this->Headers['Cc'] = $this->FmtAddrList($this->Cc);

    $this->Headers['Subject'] = $this->Subject;

    $this->Headers['Date'] = date('r');



    $headers = '';

    foreach ($this->Headers as $key => $val)

      $headers .= $key . ': ' . $val . self::newline;



    $this->Log['data2'] = $this->SendCMD("{$headers}{$newLine}{$this->Message}{$newLine}.");



    // Say Bye to SMTP

    $this->Log['quit']  = $this->SendCMD("QUIT");



    fclose($this->skt);



    return substr($this->Log['data2'],0,3) == "250";

  }

}


  $content='<h3> Registration Details</h3>

  <table cellspacing="3" cellpadding="3">

   <tr>

  <td>First Name</td>


  <td>'.htmlentities($_POST['fname']).'</td>


  </tr>
   
  <tr>


  <td>Email id</td>


  <td>'.htmlentities($_POST['email']).'</td>


  </tr>


  <tr>


  <td>Phone Number</td>


  <td>'.htmlentities($_POST['phone']).'</td>


  </tr>

 
  
  <tr>

  <td>Course</td>

  <td>'.htmlentities($_POST['course']).'</td>

  </tr>
  
   <tr>';
 








  $mail = new EMail;



  
  $mail->Server = "mail.tissertechnologies.com";    



  $mail->Username = 'testemail@tissertechnologies.com';    



  $mail->Password = 'qzcrWtHzVwrv';



  $mail->SetFrom("testemail@tissertechnologies.com","testemail@tissertechnologies.com");  



  //$mail->AddTo("jmpullat@gmail.com","");

   $mail->AddTo("info@sinrorobotics.com","");

  $mail->Subject = "Registration";



  $mail->Message = $content;



  $mail->ContentType = "text/html";   



  if($mail->Send()==1)



  {
 


    session_write_close();echo "<script>alert('Thank you for registering with us. We will contact you soon');window.location='index.php';</script>";



  }



  else



  {
 


    session_write_close();echo "<script>alert('Unable to complete your request. Please try Again!')window.location='index.php';</script>"; 



  }


}
  




?>

