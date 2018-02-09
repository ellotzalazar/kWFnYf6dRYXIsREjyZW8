 <?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "cedd";

 $con = mysqli_connect($servername, $username, $password, $dbname);

 if(!$con){
 	die('connection fail: ' .mysqli_connect_error());
 }

 ?>