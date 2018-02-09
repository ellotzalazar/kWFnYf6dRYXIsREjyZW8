<?php
include('connect.php');
$id=$_POST['id'];
doInsertFunction($con,"delete from service where service_id='$id'");
?>