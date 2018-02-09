<?php
session_start();
	if(!isset($_SESSION["id"]) || (trim($_SESSION['id']) == '') || ( $_SESSION['pt_id'] !=2))
	{
		header("Location:../login.php");
	}


	
?>