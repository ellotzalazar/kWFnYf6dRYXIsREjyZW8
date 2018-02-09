<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('dbcon.php'); ?>
    <div class="container">
		<div>
			<div class="row">
				<div class="span"><a href="dasboard.php"><img src="img/dr.png"></a></div>
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
                              
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php $user_query=mysql_query("select * from schedule where member_id = '$session_id' ")or die(mysql_error());
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
									
                                    <td><?php  echo $row['date'];  ?></td> 
                                    <td><?php  echo $service_row['service_offer'];  ?></td>
                                    <td><?php echo $package_row['package_name']; ?></td>
                                    <td><?php  echo $schedule_row['hours'];  ?></td> 
                                    <td><?php  echo $schedule_row['location'];  ?></td> 
                                    <td><?php  echo $schedule_row['total_price'];  ?></td> 
                             
							
									</tr>
									<?php } ?>
                           
                                </tbody>
                            </table>


	
	
	
				</div>
				<div class="span3">
				
				

				<ul class="nav nav-list">
					 <div class="alert alert-danger"><li class="nav-header">NOTE</li></div>
						
					
				<?php 
				$note_query = mysql_query("select * from note ")or die(mysql_error());
				$note_count =mysql_num_rows($note_query);
				while($note_row = mysql_fetch_array($note_query)){
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
								 
                                  <?php $user_query=mysql_query("select * from service")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['service_id']; ?>
									 <tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['service_offer']; ?></td> 
                                                          
									<?php } ?>
                           
                                </tbody>
                            </table>
				
				
			</div>
		</div>
    </div>
<?php include('footer.php') ?>