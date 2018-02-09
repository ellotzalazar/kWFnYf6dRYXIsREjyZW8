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
                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Schedule</strong>
                            </div>
              <!-- form sort -->
              <form method="POST" action="sort_date.php">
              <input type="text"  class="w8em format-d-m-y highlight-days-67 range-low-today" name="date" id="sd" maxlength="10" style="border: 3px double #CCCCCC;" required/>
              <br>
              <button name="sort"  class="btn btn-success"><i class="icon-filter icon-large"></i>&nbsp;Sort</button>
              <br>
              <br>
              </form>
              <!-- end form -->
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                            
                                <thead>
                                    <tr>
                                        <th>Number</th>
                                        <th>Member</th>                                
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                 
                                  <?php $user_query=mysql_query("select * from photostatus where status='PENDING'")or die(mysql_error());
                  while($row=mysql_fetch_array($user_query)){
                  $id=$row['id'];
                  $member_id = $row['member_id'];
                  /* member query  */
                  $member_query = mysql_query("select * from members where member_id = ' $member_id'")or die(mysql_error());
                  $member_row = mysql_fetch_array($member_query);
                  /* service query  */
                 
                  ?>
                  
                   <tr class="del<?php echo $id ?>">
                   <td><?php  echo $row['id'];  ?></td>
                   <td><?php echo $member_row['firstname']." ".$member_row['lastname']; ?></td> 
                   <td><?php  echo $row['status'];  ?></td> 
                   <td width="100">
                  
                  <?php
                                     /*    <a href="#delete<?php echo $id ?>" data-toggle="modal" rel="tooltip"  title="Delete" id="<?php echo $id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                    <?php include('delete_schedule.php'); ?> */
                    ?>
                   
                     <a rel="tooltip"  title="Upload" href="upload.php<?php echo '?id='.$member_id; ?>"  class="btn btn-info"><i class="icon-check icon-large"></i></a>
                                    
                  </td>
                  <?php include('toolttip_edit_delete.php'); ?>
                  </tr>
                  <?php } ?>
                           
                                </tbody>
                            </table>
              


            </div>
    </div>
<?php include('footer.php') ?>