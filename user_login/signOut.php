<?php

ob_start();

?>

<?php 

session_start();

$_SESSION['useridsA']="";

	if(empty($_SESSION['useridsA']))

	{

		header('Location:./');

	}

