<?php
include('connect.php');
$id=$_POST['id'];
executeUpdate($con,"delete from package where package_id='$id'");
?>