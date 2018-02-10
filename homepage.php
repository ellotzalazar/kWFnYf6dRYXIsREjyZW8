<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('dbcon.php'); ?>
    <div class="container">
		<div>
			<div class="row">
			<div class="span"><a href="dasboard.php"><img src="img/dr.png"></a></div>
				<div class="span12">
				<?php include('navbar_dasboard.php'); ?></div>
				<div class="span3">
					    
						
				 <div class="alert alert-alert">
			         <script language="javascript" type="text/javascript">
						/* time and date */
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
					
				<div class="alert alert-info">Select Date of Appointment and Service Offer</div>
	
		<!-- reservation -->
		<?php
		if (isset($_POST['sub'])){
		$date = $_POST['date'];
		$service = $_POST['service'];
		$service = $_POST['service'];
		$package = $_POST['package'];
		$hours = $_POST['hours'];
		$venue = $_POST['venue'];
		$time = $_POST['time'];
		$location = $_POST['location'];
		
		$query = "select * from schedule where date = '$date' and member_id = '$session_id' ";
		$result = fetchData($conn,$query);
		$count = $result->num_rows;
	/* 	echo $count; */
		if ($count  > 0){ ?>
		<script>
			alert('You have already schedule on this date');
		</script>
		<?php
		}

		else{
        $queryy = "select * from schedule where date = '$date'";
		$result = fetchData($conn,$query);
		$counts= $result->num_rows;
		$equal = $counts + 1 ;




		if ($equal > 5){ ?>
		<script>
			alert('This date has been fully booked. Please try and book this event to a different date. Thank you!');
			window.location="dasboard.php";
		</script>
		<?php
		}

		?>
		<div class="question">
		<div class="alert alert-success"> You're about to book the date  <strong><?php echo  $date; ?></strong> for an event. <p>Please be informed that the Terms of payment will be  30% upon reservation, 50% for the down payment, and 20% of the payment will be given upon the date of the event. Upon agreeing to this notice will mean that you are settled with your choices and is ready for setting the event with Sterling Digital. No refunds will be given as soon as the process of preparing your event started.</p></div>
		<form method="POST" action="yes.php">
		<input type="hidden" name="session_id" value="<?php echo $session_id; ?>" >
		<input type="hidden" name="date1" value="<?php echo $date; ?>" >
		<input type="hidden" name="service1" value="<?php echo $service; ?>" >
		<input type="hidden" name="package1" value="<?php echo $package; ?>" >
		<input type="hidden" name="hours1" value="<?php echo $hours; ?>" >
		<input type="hidden" name="location1" value="<?php echo $location; ?>" >
		<input type="hidden" name="venue1" value="<?php echo $venue; ?>" >
		<input type="hidden" name="time1" value="<?php echo $time; ?>" >
		<input type="hidden" name="equal" value="<?php echo $equal; ?>" >
		<p>Are you sure you want to set your event?</p>
		<button name="yes" class="btn btn-success"><i class="icon-check icon-large"></i>&nbsp;Yes</button> &nbsp;  <a href="dasboard.php" class="btn"><i class="icon-remove"></i>&nbsp;No</a>
		</form>
	
		</div>
		<br>
		<br>
		<?php }}  
		

		 ?>
	<!-- end reservation -->



	<form class="form-horizontal" method="POST">
    <div class="control-group">
    <label class="control-label" for="inputEmail">Date</label>
    <div class="controls">
    <input type="text"  class="w8em format-d-m-y highlight-days-67 range-low-today" name="date" id="sd" maxlength="10" style="border: 3px double #CCCCCC;" required/>
    </div>
    </div>
     <div class="control-group">
     	<label class="control-label" for="inputEmail">Service</label>
     	<div class="controls">

     		

	<script src="jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	    $('#service').on('change',function(){
	         var serviceID = $(this).val();
	        if(serviceID){
	            $.ajax({
	                type:'POST',
	                url:'ajaxData.php',
	                data:'service_id='+serviceID,
	                success:function(html){
	                    $('#package').html(html);
	                }
	            }); 
	        }else{
	            $('#package').html('<option value="">Select service first</option>');}

	    });
	    
	});
	</script>
	<?php


$queryyy = fetchData($conn,"SELECT * FROM service WHERE status = 1 ORDER BY service_offer ASC");
$rowCount = $queryyy->num_rows;
?>
<select name="service" id="service">
    <option >Select Service</option>
    <?php
    if($rowCount > 0){
        while($row = $queryyy->fetch_assoc()){ 
            echo '<option value="'.$row['service_id'].'">'.$row['service_offer'].'</option>';
        }
    }else{
        echo '<option value="">Service not available</option>';
    }

    ?>
</select>
</div>
</div>


<div class="control-group">
		<label class="control-label" for="inputEmail">Package</label>
			<div class="controls">
			<select name="package" id="package">
				<option value="">Select service first</option>
			<?php
				$pck = fetchData($conn,"SELECT * FROM package ORDER BY package_name");
				while($p = $pck->fetch_assoc())
				{
			?>
					<option value="<?php echo $p['package_id']?>"><?php echo $p['package_name'].'-'.$p['description']?></option>
			<?php }?>
			</select>
</div>
</div>

    

    <div class="control-group">
		<label class="control-label" for="inputEmail">Hours To Render The Service</label>
			<div class="controls">
			<input type="number" name="hours" id="inputEmail" value="4" min="4" placeholder="Hours" required><p>(minimum of 4 hours.)</p>
			<p>NOTE:</p>
			<p>(Upon exceeding minimum of 4 hours; 250.00 per hour will be added to the total amount .)</p>
			</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputEmail">Location Of The Event</label>
			<div class="controls">
			<select name="location" >
				<option>Alfonso</option>
				<option>Amadeo</option>
				<option>Bacoor</option>
				<option>Carmona</option>
				<option>Cavite City</option>
				<option>Dasmarinas</option>
				<option>Gen. Trias</option>
				<option>GMA</option>
				<option>Imus</option>
				<option>Indang</option>
				<option>Kawit</option>
				<option>Magallanes</option>
				<option>Maragondon</option>
				<option>Mendez</option>
				<option>Naic</option>
				<option>Noveleta</option>
				<option>Rosario</option>
				<option>Silang</option>
				<option>Tagaytay</option>
				<option>Tanza</option>
				<option>Ternate</option>
				<option>Trece Martires</option>
				

				
			</select>
			
			</div>
			</div>

    <div class="control-group">

    <div class="control-group">
			<label class="control-label" for="inputEmail">Venue: </label>
			<div class="controls">
			<input type="text" id="inputEmail"  name="venue"  placeholder="Full address of venue" required> 
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="inputEmail">Time: </label>
			<div class="controls">
			<input type="text" id="inputEmail" name="time" placeholder="H:MM AM/PM" required> 
			</div>
		</div>


    <div class="controls">
    <button type="submit" name="sub" class="btn btn-info"><i class="icon-check icon-large"></i>&nbsp;Submit</button>
    </div>
    </div>
    </form>
	

	
	
	
				</div>
				<div class="span3">
				    <ul class="nav nav-list">
					 <div class="alert alert-danger"><li class="nav-header">NOTE</li></div>
						
					
				<?php 
				$note_query = fetchData($conn,"select * from note ");
				$note_count =$note_query->num_rows;
				while($note_row = $note_query->fetch_assoc()){
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
								 
                                  <?php $user_query=fetchData($conn,"select * from service");
									while($row= $user_query->fetch_assoc()){
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