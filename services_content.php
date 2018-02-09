<div class="alert alert-info span12"><strong>List of Services Offered</strong>	</div>
       <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered span12" id="example">
                            
                                <thead>
                                    <tr>
                                        <th>Service Offer</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php 
								  $user_query=fetchData($conn,"select * from service");
									while($row=$user_query->fetch_assoc()){
									$id=$row['service_id']; ?>
									 <tr class="del<?php echo $id ?>">
										<td><?php echo $row['service_offer']; ?></td> 
									</tr>
									<?php } ?>
                           
                                </tbody>
                            </table>

