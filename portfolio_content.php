

        <div class="">
           <?php
         
          
          $str = "SELECT * from portfolio ORDER BY type ASC,date_created DESC";

          $result = fetchData($conn,$str);
          if($result){
            $i=0;
			while($row = mysqli_fetch_array($result)){
				?>
				<div class="span5 gallery-frame">
					<?php if($row['type'] == 'image'):?>
						<img class="gallery-content" src="admin/portfolio/<?php echo $row['file_name']?>">
					<?php else:?>
							<video class="gallery-content" controls>
							  <source src="admin/portfolio/video/<?php echo $row['file_name']?>" type="video/mp4">
							  Your browser does not support the video tag.
							</video> 
					<?php endif;?>
				</div>
		<?php
				}
			}
		
        ?>
    
    </div>
        </div>

        