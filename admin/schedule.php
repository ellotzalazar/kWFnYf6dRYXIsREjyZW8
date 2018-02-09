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
                                        <th>Date</th>                                 
                                        <th>Service</th> 
                                        <th>Package</th>
                                        <th>Hours</th>
                                        <th>Location</th>                                
                                        <th>Price</th>                                 
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php $user_query=mysql_query("select * from schedule where status='Pending'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['id'];
									$member_id = $row['member_id'];
									$service_id = $row['service_id'];
									$package_id = $row['package_id'];
									$schedule_id = $row['id'];	
									/* member query  */
									$member_query = mysql_query("select * from members where member_id = ' $member_id'")or die(mysql_error());
									$member_row = mysql_fetch_array($member_query);
									/* service query  */
									$service_query = mysql_query("select * from service where service_id = '$service_id' ")or die(mysql_error());
									$service_row = mysql_fetch_array($service_query);

									$package_query = mysql_query("select * from package where package_id = '$package_id' ")or die(mysql_error());
									$package_row = mysql_fetch_array($package_query);

									$schedule_query = mysql_query("select * from schedule where id = ' $schedule_id'")or die(mysql_error());
									$schedule_row = mysql_fetch_array($schedule_query);

									?>
									
									 <tr class="del<?php echo $id ?>">
									 <td><?php  echo $row['Number'];  ?></td>
                                    <td><?php echo $member_row['firstname']." ".$member_row['lastname']; ?></td> 
                                    <td><?php  echo $row['date'];  ?></td> 
                                    <td><?php  echo $service_row['service_offer'];  ?></td>
                                    <td><?php echo $package_row['package_name']; ?></td>
                                    <td><?php  echo $schedule_row['hours'];  ?></td> 
                                    <td><?php  echo $schedule_row['location'];  ?></td> 
                                    <td><?php  echo $schedule_row['total_price'];  ?></td> 
                                    <td><?php  echo $row['status'];  ?></td> 
                                    <td width="100">
									
									<?php
                                     /*    <a href="#delete<?php echo $id ?>" data-toggle="modal" rel="tooltip"  title="Delete" id="<?php echo $id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
										<?php include('delete_schedule.php'); ?> */
										?>
									   <a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="#edit<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
									   <a  href="update1.php<?php echo '?id='.$id; ?>"  class="btn btn-info"><i class="icon-check icon-large"></i></a>
                                    <?php include('edit_service.php'); ?>
									</td>
									<?php include('toolttip_edit_delete.php'); ?>
									</tr>
									<?php } ?>
                           
                                </tbody>
                            </table>
							


						</div>
    </div>
<?php include('footer.php') ?>