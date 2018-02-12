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
					
				<div class="alert alert-info">Edit Personal Information</div>
	<?php 

	$query = "select * from members where member_id='$session_id'";
	$result = mysqli_query($conn,$query);
	$member_row = mysqli_fetch_array($result);

	?>
	 <form class="form-horizontal" method="POST">
		<div class="control-group">
			<label class="control-label" for="inputEmail">Firstname</label>
			<div class="controls">
			<input type="text" value="<?php echo $member_row['firstname']; ?>" name="firstname" id="inputEmail" placeholder="Firstname" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Lastname</label>
			<div class="controls">
			<input type="text" name="lastname" id="inputPassword" placeholder="Lastname" value="<?php echo $member_row['lastname']; ?>" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Middlename</label>
			<div class="controls">
			<input type="text" name="middlename" id="inputPassword" value="<?php echo $member_row['middlename']; ?>" placeholder="Middlename" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Address</label>
			<div class="controls">
			<input type="text" name="address" value="<?php echo $member_row['address']; ?>" id="inputPassword" placeholder="Address" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Email</label>
			<div class="controls">
			<input type="text" name="email" id="inputPassword" value="<?php echo $member_row['email']; ?>" placeholder="Email" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Birthday</label>
			<div class="controls">
			<input type="text" name="birthdate" value="<?php echo $member_row['birthdate']; ?>" id="inputPassword" placeholder="Age" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Gender</label>
			<div class="controls">
			<select class="span2" name="gender" required>
			<option><?php echo $member_row['gender']; ?></option>
			<option>Male</option>
			<option>Female</option>
			</select>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
			<button type="submit" name="update" class="btn btn-success"><i class="icon-pencil"></i>&nbsp;Update</button>
			</div>
		</div>
    </form>
	
	<?php
	if (isset($_POST['update'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$middlename = $_POST['middlename'];
	$address = $_POST['address'];
	$birthdate = $_POST['birthdate'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
		
	$query = "update members set firstname='$firstname' , lastname='$lastname' , middlename='$middlename' , address='$address' ,
	birthdate='$birthdate' , gender='$gender' , email='$email' where member_id='$session_id' ";
	mysqli_query($conn,$query);
	?>
	<script>
	window.location = 'edit_info.php'; 
	</script>
	<?php
	}	
	?>

	
	
	
				</div>
				<div class="span3">
				
				    <ul class="nav nav-list">
					 <div class="alert alert-danger"><li class="nav-header">NOTE</li></div>
						
					
				<?php 
				$query = "select * from note";
				$note_query = mysqli_query($conn,$query);
				$note_count = $note_query->num_rows;

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
								 
                                  <?php 
                                  $query = "select * from service";
                                  $user_query=fetchData($conn,$query);
									while($note_row = $user_query->fetch_assoc() ){
									$id=$note_row['service_id']; ?>
									 <tr class="del<?php echo $id ?>">
                                    <td><?php echo $note_row['service_offer']; ?></td>                   
									<?php } ?>
                           
                                </tbody>
                            </table>
				
				
			</div>
		</div>
    </div>
<?php include('footer.php') ?>