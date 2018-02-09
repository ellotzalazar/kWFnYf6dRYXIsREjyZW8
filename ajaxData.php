
<?php
//Include database configuration file
include('dbcon.php');

if(isset($_POST["service_id"]) && !empty($_POST["service_id"])){
    //Get all state data
    $queryPack = mysql_query("SELECT * FROM package WHERE service_id = ".$_POST['service_id']." AND status = 1");
    

    //Count total number of rows
    $rowCount = mysql_num_rows($queryPack);
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select Package</option>';
        while($row = mysql_fetch_assoc($queryPack)){ 
            echo '<option value="'.$row['package_id'].'">'.$row['package_name'].'  ' .$row['price'].'</option>';
        }
    }else{
        echo '<option value="">Package not available</option>';
    }
}


?>