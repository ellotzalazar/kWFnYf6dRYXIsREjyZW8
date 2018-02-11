<?php
require_once('connect.php');
$get_id = $_GET['member_id'];
$sids=$_GET['id'];
fetchData($con,"insert into photostatus (member_id,status) values('$get_id','PENDING')");
fetchData($con,"update schedule set status = 'Done' where id = '$sids' ");
header('location:sched_today.php'); 
?>