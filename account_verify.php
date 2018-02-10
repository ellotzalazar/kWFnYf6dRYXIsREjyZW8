<?php
	@session_start(); 
	$_SESSION['id']=$_GET['member_id']; 
	header('Location:homepage.php');
?>