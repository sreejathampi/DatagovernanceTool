<?php

ob_start();

?>

<?php 

session_start();

$_SESSION['registerId']="";

session_unset();


	if(empty($_SESSION['registerId']))

	{

		header('Location:./');

	}

