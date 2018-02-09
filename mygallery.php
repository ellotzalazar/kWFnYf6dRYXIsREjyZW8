<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('dbcon.php'); ?>
<link rel="stylesheet" type="text/css" href="css/album.css">
<div class="container">
		<div>
			<div class="row">
				<div class="span"><a href="dasboard.php"><img src="img/dr.png"></a></div>
				<div class="span12">
						<?php include('navbar_dasboard.php'); ?>
				</div>
				<div class="span6">

				<div class="alert alert-info">My Gallery</div>
				<div class="album">
					 <?php
          include 'admin/connect.php';
          $myid=$_SESSION['id'];
          
          $str = "SELECT * from images where member_id='$myid'";

          $result = mysqli_query($con,$str);
          
            while($row=mysqli_fetch_array($result))
          {
          	echo "<div>";
            echo '<img src="admin/images/'.$row['image'].'"style="height:50%; width:50%;">';
            echo "</div>";
          }
          
        ?>
    
    </div>
				</div>
				</div>
				</div>
				</div>
				




<?php include('footer.php') ?>