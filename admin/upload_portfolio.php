<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <div class="container">

  <div class="row"> 
            <div class="span3">
            <?php include('sidebar.php'); ?>
            </div>
            <div class="span9">
              <img src="../img/dr.png" class="img-rounded">
                <?php include('navbar_dasboard.php') ?>
              
            
            </div>

  <div class="content">
    
  

<body>
<div class="span6">
   <form action="" method="post"  enctype="multipart/form-data">
      <div id="textcon"><br><br><br>
     
        <input id="fileUpload" type="file" name="myfile"/> </div>
        <input type="submit" id = "button" name="logo" value="Upload">
       
                <div id="image-holder">
        </div>
        <br><br><br>
      </form>
<form action="dasboard.php">
<div >
   <input type="submit" id = "button" name="done" value="Finish">

   </div>
</form>
</div>
<?php

            if (isset($_POST['logo'])) {
                  
				$filename = $_FILES['myfile']['name'];
				$tmp_name = $_FILES['myfile']['tmp_name'];
				if($_FILES['myfile']['size'] > 0)
				{
					$image_check = getimagesize($_FILES['myfile']['tmp_name']);
					$ext = pathinfo($filename, PATHINFO_EXTENSION);
					$extensions = array('jpg','png','gif','mp4');
					if(in_array($ext,$extensions) == true)
					{
						if($image_check==false)
						{
							$location = "portfolio/video/".basename( $_FILES['myfile']['name']); 
							$type = 'video';
						  // echo 'Not a Valid Image';
						  
						}
						elseif ($image_check==true){
							$location = "portfolio/".basename( $_FILES['myfile']['name']);
							$type = 'image';
						}
						$date = date('Y-m-d H:i:s');
						if(move_uploaded_file($tmp_name, $location))
						{
							executeUpdate($con,"insert into portfolio (type,file_name,date_created) values('$type','$filename','$date')");
							echo '<script> alert("Successfully Uploaded!"); </script>' ;  
						}else {
					   
						  echo '<script> alert("Something went wrong!"); </script>' ;  

						}
					}
					else
					{
						echo '<script> alert("Invalid file!!"); </script>' ;  
					}
                }
			}
             
                
        ?>  
        
</div>

  </div>
  <div class="cms_body">
 </div>

</body>
</html>



  </div>

    </div>
<?php include('footer.php') ?>