<?php
include('connect.php');
$get_id = $_GET['id'];
executeUpdate($con,"delete from note where note_id = '$get_id' ");
header('Location:note.php');
?>