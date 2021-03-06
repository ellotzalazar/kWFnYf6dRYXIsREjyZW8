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
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Service Table</strong>
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
							<?php
							if (isset($_POST['sort'])){
							$date = $_POST['date']; 
							
							?>
							
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                            
                                <thead>
                                    <tr>
                                        <th>Number</th>
                                        <th>Member</th>
                                        <th>Date</th>                                 
                                        <th>Service</th>                                 
                                        <th>Price</th>                                 
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php 
									$user_query=fetchData($con,"select sch.*,
																			CONCAT(mb.firstname,' ',mb.lastname) member_name,
																			srv.service_offer,sch.total_price
																		from 
																		schedule sch
																		LEFT JOIN members mb
																			ON mb.member_id = sch.member_id
																		LEFT JOIN service srv
																			ON srv.service_id = sch.service_id
																	where 
																		sch.date = '$date' ");
									while($row= $user_query->fetch_array()){
									$id=$row['id'];
									?>
									
									 <tr class="del<?php echo $id ?>">
									 <td><?php  echo $row['Number'];  ?></td>
                                    <td><?php echo $row['member_name']; ?></td> 
                                    <td><?php  echo $row['date'];  ?></td> 
                                    <td><?php  echo $row['service_offer'];  ?></td> 
                                    <td><?php  echo $row['total_price'];  ?></td> 
                                    <td width="100">
                                        <a href="#delete<?php echo $id ?>" data-toggle="modal" rel="tooltip"  title="Delete" id="<?php echo $id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
										<?php include('delete_schedule.php'); ?>
									   <a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="#edit<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                    <?php include('edit_service.php'); ?>
									</td>
									<?php include('toolttip_edit_delete.php'); ?>
									</tr>
									<?php } ?>
                           
                                </tbody>
                            </table>
							
							<?php } ?>

						</div>
    </div>
<?php include('footer.php') ?>