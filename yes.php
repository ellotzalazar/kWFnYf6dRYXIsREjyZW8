<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('dbcon.php'); ?>
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
				<div class="alert alert-info">Select Date of Appointment and Service Offer</div>

		<!-- reservation -->
		<?php if (isset($_POST['yes'])){ 
		$session_id = $_POST['session_id'];
		$date1 = $_POST['date1'];
		$service1 = $_POST['service1'];
		$package1 = $_POST['package1'];
		$hours1 = $_POST['hours1'];
		$venue1 = $_POST['venue1'];
		$time1 = $_POST['time1'];
		$location1 = $_POST['location1'];
		$equal = $_POST['equal'];
		
			# code...
		
		$pack = fetchData($conn,"select * from package where package_id='$package1'");
		$row= $pack->fetch_assoc();

		$packprice=$row['price'];
		$total=(($hours1-4)*250)+$packprice;

		?>
		<script>
			//'$session_id','$date1','$service1','$package1','$hours1','$location1','$venue1','$time1','$total','$equal','Pending'
			$(function(){
				$.post('yes_insert.php',{
											'session_id':'<?=$session_id?>',
											'date':'<?=$date1?>',
											'service':'<?=$service1?>',
											'package':'<?=$package1?>',
											'hours':'<?=$hours1?>',
											'location':'<?=$location1?>',
											'venue':'<?=$venue1?>',
											'time':'<?=$time1?>',
											'total':'<?=$total?>',
											'equal':'<?=$equal?>',
											'status':'Pending',
										})
					.done(function(result){
						alert(result);
					});
			})
		</script>
		<div class="yes"><h3>Your appointment has been set on  <?php echo  $date1; ?>. Thank you for choosing us!</h3></div>
		
		<h4>Details:</h4>
		<div>Hours of service: <?php echo  $hours1; ?></div>
		<div>Time of event: <?php echo  date('h:i a',strtotime($time1)); ?></div>
		<div>Location of event: <?php echo  $location1; ?></div>
		<div>Total price: <?php echo  $total; ?></div>

		<div>To see the full details of your schedule kindly refer to the My Schedule tab above. </div>
		


		<?php }else{ ?>
		<script>
		alert('error');
		</script>
		<?php } ?>
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