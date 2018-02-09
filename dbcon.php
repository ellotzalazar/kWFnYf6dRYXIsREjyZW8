<?php
// mysql_select_db('cedd',mysql_connect('localhost','root',''))or die(mysql_error());
// mysql_select_db('scheduler',mysql_connect('localhost','root',''))or die(mysql_error());
$conn = mysqli_connect('localhost','root','','scheduler');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit;
  }
  
 function doInsertFunction($conn,$query)
 {
	mysqli_query($conn,$query);
	mysqli_close($conn);
 }
 
 function fetchData($conn,$query = '')
 {
	$result = mysqli_query($conn,$query);
	

	return $result;
 }
?>
