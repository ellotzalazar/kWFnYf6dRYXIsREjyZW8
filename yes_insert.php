<?php
	$session_id = $_POST['session_id'];
	$date1 = $_POST['date'];
	$service1 = $_POST['service'];
	$package1 = $_POST['package'];
	$hours1 = $_POST['hours'];
	$venue1 = $_POST['venue'];
	$time1 = $_POST['time'];
	$location1 = $_POST['location'];
	$equal = $_POST['equal'];
	$total = $_POST['total'];
	$query  = "insert into schedule (member_id,date,service_id,package_id,hours,location,venue,sched_time,total_price,number,status)
				values('$session_id','$date1','$service1','$package1','$hours1','$location1','$venue1','$time1','$total','$equal','Pending')";
	
	// echo $query;
	require 'dbcon.php';
	doInsertFunction($conn,$query);
?>