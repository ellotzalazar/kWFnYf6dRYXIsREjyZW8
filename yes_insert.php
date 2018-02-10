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
	
	
	require 'dbcon.php';
	$id = doInsertFunction($conn,$query);
	
	$row = fetchData($conn,"SELECT sch.*,srv.service_offer,pck.package_name,pck.description 
								FROM schedule sch
									LEFT JOIN service srv
										ON srv.service_id = sch.service_id
									LEFT JOIN package pck
										ON pck.package_id = sch.package_id
								WHERE
									sch.id = $id
							");
	
	$data = $row->fetch_assoc();
?>
	<div>Type of Service: <?php echo  $data['service_offer']; ?></div>
	<div>Package Type: <?php echo  $data['package_name']; ?></div>
	<div>Package Description: <?php echo  $data['description']; ?></div>
	<div>Hours of service: <?php echo  $data['hours']; ?></div>
	<div>Time of event: <?php echo  date('h:i a',strtotime($data['sched_time'])); ?></div>
	<div>Venue of event: <?php echo  $data['venue']; ?></div>
	<div>Location of event: <?php echo  $data['location']; ?></div>
	<div>Total price: <?php echo  $total; ?></div>