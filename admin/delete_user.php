<?php
include('connect.php');
$id=$_POST['id'];
executeUpdate($con,"delete from users where user_id='$id'");
?>