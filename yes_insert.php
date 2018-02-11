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
	$code = str_pad(rand (0,99999),5,'0',STR_PAD_LEFT);

	$query  = "insert into schedule (member_id,date,service_id,package_id,hours,location,venue,sched_time,total_price,number,code,status)
				values('$session_id','$date1','$service1','$package1','$hours1','$location1','$venue1','$time1','$total','$equal','$code','Not Confirm')";
	
	
	require 'dbcon.php';
	$id = doInsertFunction($conn,$query);
	

?>
<script>
	$(function(){
		location = "yes_sendSms.php?code=<?= $id ?>";
	})
</script>