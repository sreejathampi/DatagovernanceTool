<?php
ob_start();
session_start();
if(empty($_SESSION['useridsA']))
{
	header('Locaton:./');
}
?>
<!DOCTYPE html>
<html>

	<head>
		<title>Staff Panel</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="fonts/font.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
<?php
//print_r($_SESSION);

if(!empty($_SESSION['useridsA']))
{

}
else
{


    echo "<script>window.location.href='signOut.php';</script>";
    exit;

}


?>




</head>
<style type="text/css">
	input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

</style>

<body>