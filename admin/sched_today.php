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
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Today's Schedule </strong>
                            </div>
						
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                            
                                <thead>
                                    <tr>
                                        <th>Number</th>
                                        <th>Member</th>
                                        <th>Date</th>                                 
                                        <th>Service</th>                                 
                                        <th>Price</th>                                 
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                   
                                  <?php 
								    
									$new = date('d/m/Y');
							
									$user_query= fetchData($con,"SELECT 
																	sch.*,CONCAT(mb.firstname,' ',mb.lastname) member_name,
																	srv.service_offer
																FROM 
																	schedule sch
																	LEFT JOIN members mb
																		ON mb.member_id = sch.member_id
																	LEFT JOIN service srv
																		ON srv.service_id = sch.service_id
																where 
																		sch.date = '$new' 
																	AND 
																		sch.status='Pending'
																		
																");
									while($row= $user_query->fetch_array()){
										$id=$row['id'];
									?>
									
									 <tr class="del<?php echo $id ?>">
									 <td><?php  echo $row['Number'];  ?></td>
                                    <td><?php echo $row['member_name']; ?></td> 
                                    <td><?php  echo $row['date'];  ?></td> 
                                    <td><?php  echo $row['service_offer'];  ?></td>
                                    <td><?php  echo $row['total_price'];  ?></td> 
                                    <td><?php  echo $row['status'];  ?></td> 
                                    <td width="100">
                
									   <a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="#edit<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
									   <a  href="update1.php<?php echo '?id='.$member_id; echo '&sid='.$id; ?>"  class="btn btn-info"><i class="icon-check icon-large"></i></a>
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