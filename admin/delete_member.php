<?php
include('connect.php');
$id=$_POST['id'];
executeUpdate($con,"delete from members where member_id='$id'");
?>