<?php
include('connect.php');
$id=$_POST['id'];
executeUpdate($con,"delete from service where service_id='$id'");
?>