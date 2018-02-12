<?php
	print_r($_POST);
	require 'connect.php';
	
	$type = $_POST['type'];
	$filename = $_POST['filename'];
	$date = date('Y-m-d H:i:s');
	$query  = "INSERT INTO portfolio(type,file_name,date_created) VALUES('$type','$filename','$date')";
	executeUpdate($con,$query);
	
?>