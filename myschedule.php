<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('dbcon.php'); ?>
    <div class="container">
		<div>
			<div class="row">
				<div class="span"><a href="homepage.php"><img src="img/dr.png"></a></div>
				<div class="span12">
						<?php include('navbar_dasboard.php'); ?>
					
				</div>
				<div class="span3">
					    
						<div class="alert alert-alert">
			         <script language="javascript" type="text/javascript">
						/* Visit http://www.yaldex.com/ for full source code
						and get more free JavaScript, CSS and DHTML scripts! */
						<!-- Begin
						var timerID = null;
						var timerRunning = false;
						function stopclock (){
						if(timerRunning)
						clearTimeout(timerID);
						timerRunning = false;
						}
						function showtime () {
						var now = new Date();
						var hours = now.getHours();
						var minutes = now.getMinutes();
						var seconds = now.getSeconds()
						var timeValue = "" + ((hours >12) ? hours -12 :hours)
						if (timeValue == "0") timeValue = 12;
						timeValue += ((minutes < 10) ? ":0" : ":") + minutes
						timeValue += ((seconds < 10) ? ":0" : ":") + seconds
						timeValue += (hours >= 12) ? " P.M." : " A.M."
						document.clock.face.value = timeValue;
						timerID = setTimeout("showtime()",1000);
						timerRunning = true;
						}
						function startclock() {
						stopclock();
						showtime();
						}
						window.onload=startclock;
						// End -->
					</script>								      
					<p style="margin-bottom: 24px"><strong>
						<form name="clock">
							Time is:&nbsp;<input type="submit" class="trans" name="face" value="">
						</form>
					</strong></p>	
					<p><strong>
						Today is:<i class="icon-calendar icon-large"></i>
                       	<?php
                        $Today = date('y:m:d');
                        $new = date(' d/m/Y', strtotime($Today));
                        echo $new;
                        ?>
			        </strong></p>
			    </div>		

				<div class="alert alert-info">Reminders:</div>
						
					
				
						
				
						
				
						<p>Office Hours</p>
						<p>Monday - Friday (9:00 am to 6:00 pm)</p>
						<p>Saturday (9:30 am to 1:00 pm)</p>
						<p>Unit a DM Bldg.</p>
						<p>Sterling Mile Beside Barangay Hall Barangay Salawag,</p>
						<p>Salawag, Dasmariñas, Cavite, Philippines<</p>
					
					
					
				<div class="alert alert-info">Informations</div>
				<div class="testimonial_div">
					<p>
					Special event and wedding coverage is focus. Our team of photographers and videographers are equipped with the latest gear and have extensive experience covering Weddings, Sweet 16's, Corporate, and Family events

					<p>The Sterling Digital photography team are experienced special event photographers each of whom have spent 10+ years covering a wide range of events. We have photographers and videographers available for occasions of all types and sizes.</p>
					</p>
					</div>		
				</div>
				<div class="span6">
					
				<div class="alert alert-info">My Schedule</div>
	
					<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                            
                                <thead>
                                    <tr>
                                        
                                        <th>Date</th>                                 
                                        <th>Service</th>
                                        <th>Package</th>
                                        <th>Hours</th>
                                        <th>Location</th>                                 
                                        <th>Price</th>                                 
                                        <th></th>                                 
                              
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php 
                                 $query = "
                                  			select 
                                  				schedule.*,
                                  				service.service_offer,
                                  				package.package_name,
                                  				schedule.hours,
                                  				schedule.location,
                                  				schedule.total_price
                                  			from 
                                  				schedule schedule

                                  				INNER JOIN members members
                                  				ON members.member_id = schedule.member_id

                                  				INNER JOIN service service
                                  				ON schedule.service_id = service.service_id

                                  				INNER JOIN package package
                                  				ON package.package_id = schedule.package_id


                                  			where 

                                  				schedule.member_id = '$session_id' 
                                  	";
   									$result = fetchData($conn,$query);
									$rowCount = $result->num_rows;
									    
									    //Display states list
									if($rowCount > 0){
										while($row = $result->fetch_assoc() ){ 
									?>
									 <tr class="del<?php echo $id ?>">
	                                    <td><?php  echo $row['date'];  ?></td> 
	                                    <td><?php  echo $row['service_offer'];  ?></td>
	                                    <td><?php echo $row['package_name']; ?></td>
	                                    <td><?php  echo $row['hours'];  ?></td> 
	                                    <td><?php  echo $row['location'];  ?></td> 
	                                    <td><?php  echo $row['total_price'];  ?></td> 
	                                    <td>
                                    		<a href="yes_code1.php?code=<?php  echo $row['id'];  ?>">Stub</a>
                                    	</td> 
									</tr>
										<?php 
										}
									}
									 ?>
                           
                                </tbody>
                            </table>


	
	
	
				</div>
				<div class="span3">
				
				

				<ul class="nav nav-list">
					 <div class="alert alert-danger"><li class="nav-header">NOTE</li></div>
						
					
				<?php 
				$query = "select * from note ";
				$note_query = fetchData($conn,$query);
				$note_count = $note_query->num_rows;

				while($note_row = $note_query->fetch_assoc() ){ 
				if ($note_count > 0){ ?>
				
				<li><i class="icon-stop icon-large"></i>&nbsp;<?php echo $note_row['message'] ?></li>
				<?php
				}  } 
				?>
				</ul>
				<br>
				<div class="alert alert-info">List of Services</div>
						<table class="table  table-bordered">
                            
                                <thead>
                                    <tr>
                                        <th>Service Offer</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php 
                                  $query = "select * from service";
                                  $user_query=fetchData($conn,$query);
									while($note_row = $user_query->fetch_assoc() ){
									$id=$note_row['service_id']; ?>
									 <tr class="del<?php echo $id ?>">
                                   		 <td><?php echo $note_row['service_offer']; ?></td> 
                                     </tr>    
									<?php } ?>
                           
                                </tbody>
                            </table>
				
				
			</div>
		</div>
    </div>
<?php include('footer.php') ?>