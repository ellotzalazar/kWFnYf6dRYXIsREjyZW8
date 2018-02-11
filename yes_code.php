<?php
$row = fetchData($conn,"SELECT sch.*,srv.service_offer,pck.package_name,pck.description 
								FROM schedule sch
									LEFT JOIN service srv
										ON srv.service_id = sch.service_id
									LEFT JOIN package pck
										ON pck.package_id = sch.package_id
								WHERE
									sch.code = '".$_REQUEST['code']."'
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