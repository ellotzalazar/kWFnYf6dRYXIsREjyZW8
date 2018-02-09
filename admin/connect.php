 <?php
ini_set('upload_max_filesize', '500M');
ini_set('post_max_size', '500M');
ini_set('max_input_time', 1000);
ini_set('max_execution_time', 1000);

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "scheduler";

 $con = mysqli_connect($servername, $username, $password, $dbname);

 if(!$con){
 	die('connection fail: ' .mysqli_connect_error());
 }

 ?>