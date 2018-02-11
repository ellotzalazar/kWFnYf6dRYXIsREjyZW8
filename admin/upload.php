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
<form action="upload_files.php">
<div>
	 <input type="submit" id = "button" name="done" value="Finish">

	 </div>
</form>
</div>
                

  

<?php
            require_once 'connect.php';

            if (isset($_POST['logo'])) {
                  
                  $filename = $_FILES['myfile']['name'];
                  $tmp_name = $_FILES['myfile']['tmp_name'];
                $get_id = $_GET['id'];
                 $image_check = getimagesize($_FILES['myfile']['tmp_name']);
                         if($image_check==false)
                               {
                                  echo 'Not a Valid Image';
                                        }
                          elseif ($image_check==true){
                    $location = "images/".basename( $_FILES['myfile']['name']); 
                     mysql_query("insert into images (member_id,image) values('$get_id','$filename')")or die(mysql_error());
                     mysql_query("update photostatus set status = 'Done' where member_id = '$get_id' ")or die(mysql_error());
                    if(move_uploaded_file($tmp_name, $location))
                       {
                      echo '<script> alert("Successfully Uploaded!"); </script>' ;  
                    }else {
                   
                      echo '<script> alert("Something went wrong!"); </script>' ;  

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