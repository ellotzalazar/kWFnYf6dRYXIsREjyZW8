<?php
include('dbcon.php');
$id=$_POST['id'];
mysql_query("delete from package where package_id='$id'") or die(mysql_error());
?>