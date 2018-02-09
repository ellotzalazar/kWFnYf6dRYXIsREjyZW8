

        <div class="album span12">
           <?php
          include 'admin/connect.php';
         
          
          $str = "SELECT image from portfolio";

          $result = mysqli_query($con,$str);
          
            $i=0;
while($row = mysqli_fetch_array($result)){
    if($i==0){
        ?><ul><?php
    }
    ?>
    <li class="span4"><img src="admin/portfolio/'.$row['image']"></img></li>
    <?php
    $i++;
    if($i==5){
        ?></ul><?php
        $i=0;
    }
}
        ?>
    
    </div>
        </div>

        