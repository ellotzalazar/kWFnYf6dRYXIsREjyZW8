<?php
include('dbcon.php');
$get_id = $_GET['id'];
$sids=$_GET['sid'];
mysql_query("insert into photostatus (member_id,status) values('$get_id','PENDING')")or die(mysql_error());
mysql_query("update schedule set status = 'Done' where id = '$sids' ")or die(mysql_error());
header('location:sched_today.php'); 
?>