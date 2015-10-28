<?php
	
	//page_one.php
	
	require_once("session.php");
	
	$_SESSION["name"] = "Ruslan";
	
	echo $_SESSION["name"];


?>