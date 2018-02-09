<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('connect.php'); ?>
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
                 
								<?php 
									$user_query=fetchData($con,"
															select phs.*,CONCAT(mb.firstname,' ',mb.lastname) member_name from photostatus phs
																	LEFT JOIN members mb
																		ON mb.member_id = phs.member_id
																where 
																	phs.status='PENDING'");
									while($row=$user_query->fetch_array()){
									  $id=$row['id'];
									 
                  ?>
                  
									   <tr class="del<?php echo $id ?>">
										   <td><?php  echo $row['id'];  ?></td>
										   <td><?php echo $row['member_name']; ?></td> 
										   <td><?php  echo $row['status'];  ?></td> 
										   <td width="100">
											<a rel="tooltip"  title="Upload" href="upload.php<?php echo '?id='.$row['member_id']; ?>"  class="btn btn-info"><i class="icon-check icon-large"></i></a>
                                    
											</td>
											<?php include('toolttip_edit_delete.php'); ?>
										  </tr>
							  <?php } ?>
                           
                                </tbody>
                            </table>
              


            </div>
    </div>
<?php include('footer.php') ?>