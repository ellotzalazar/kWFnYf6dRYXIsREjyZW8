<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('dbcon.php'); ?>
<style>
	@media print {
		.navbar-inner, .span3, .footer{
			display: none !important;
		}
	}
</style>
    <div class="container">
		<div>
			<div class="row">
				<div><img src="img/dr.png"></div>
				<div class="span12">
				<?php include('navbar_dasboard.php'); ?></div>
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
						<div class="alert alert-info">Reminder:</div>
						
						
					
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
					<br>

		<?php
			// $sch = fetchData($conn,"SELECT * FROM schedule WHERE id = '".$_REQUEST['code']."';");
		?>
		<div class="details-container">
		<?php
			if(isset($_REQUEST['vcode'])){
				$row = fetchData($conn,"SELECT sch.* FROM schedule sch WHERE sch.code='".$_REQUEST['vcode']."' ;");
				
				$rowCount = $row->num_rows;
				    //Display states list
				if($rowCount > 0){
					$data = $row->fetch_assoc();
					fetchData($conn,"UPDATE schedule SET status='Pending' WHERE id='".$data['id']."' ;");
				}
			}
			$row = fetchData($conn,"SELECT sch.*,srv.service_offer,pck.package_name,pck.description, pck.price 
								FROM schedule sch
									LEFT JOIN service srv
										ON srv.service_id = sch.service_id
									LEFT JOIN package pck
										ON pck.package_id = sch.package_id
								WHERE
									sch.id = '".$_REQUEST['code']."'
							");
	
			$data = $row->fetch_assoc();
			if($data['status'] == 'Pending'){
		?>
			<div>Type of Service: <?php echo  $data['service_offer']; ?></div>
			<div>Package Type: <?php echo  $data['package_name']; ?></div>
			<div>Package Description: <?php echo  $data['description']; ?></div>
			<div>Hours of service: <?php echo  $data['hours']; ?></div>
			<div>Time of event: <?php echo  date('h:i a',strtotime($data['sched_time'])); ?></div>
			<div>Venue of event: <?php echo  $data['venue']; ?></div>
			<div>Location of event: <?php echo  $data['location']; ?></div>
			<div>Total price: <?php echo  (($data['hours'] - 4) * 250) + $data['price']; ?></div>
			<div>Security COde: <?php echo  $data['code']; ?></div>
		<?php
			} elseif ($data['status'] == 'Not Confirm'){
		?>
		<form action="">
			<div>
				Hello! <br/>
				To continue your transaction please enter the code that we've sent to your mobile device. <br/>
				Please Enter Code : 
				<input type="hidden" name="code" value="<?= $_REQUEST['code'] ?>"/>
				<input type="text" name="vcode" class="code"/> 
				<input type="submit" value="Validate" class="sendCode"/>
			</div>
		</form>
		<?php
				if(isset($_REQUEST['vcode'])){
			?>
				<div class="alert alert-danger">
					<strong>Invalid Code!</strong>&nbsp;
					Please enter again.
					<div>
						No text received? click <a href="yes_sendSms.php?code=<?= $_REQUEST['code'] ?>">resend sms</a>
					</div>
				</div>
			<?php
				}
		?>
		<?php
			}
		?>
		</div>
		


		<br>
		<br>
	
	<!-- end reservation -->
	


	
	
	
				</div>
				<div class="span3">
				<img src="img/32x32/facebook.png">
				<img src="img/32x32/twitter.png">
				<img src="img/32x32/rss.png">
				<div class="alert alert-info">List of Services</div>
						<table class="table  table-bordered">
                            
                                <thead>
                                    <tr>
                                        <th>Service Offer</th>
                                  	</tr>
                                </thead>
                                <tbody>
								 
                                  <?php $user_query=fetchData($conn,"select * from service");
									while($row=$user_query->fetch_assoc()){
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