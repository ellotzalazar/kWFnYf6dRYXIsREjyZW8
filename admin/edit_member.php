	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Edit User</strong></div>
	<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Firstname</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="firstname" value="<?php echo $row['firstname']; ?>" required>
				</div>
			</div><div class="control-group">
				<label class="control-label" for="inputEmail">Lastname</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="lastname" value="<?php echo $row['lastname']; ?>" required>
				</div>
			</div><div class="control-group">
				<label class="control-label" for="inputEmail">Middlename</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="middlename" value="<?php echo $row['middlename']; ?>" required>
				</div>
			</div><div class="control-group">
				<label class="control-label" for="inputEmail">Address</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="address" value="<?php echo $row['address']; ?>" required>
				</div>
			</div><div class="control-group">
				<label class="control-label" for="inputEmail">E mail</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="email" value="<?php echo $row['email']; ?>" required>
				</div>
			</div><div class="control-group">
				<label class="control-label" for="inputEmail">Contact number</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="contact_no" value="<?php echo $row['contact_no']; ?>" required>
				</div>
			</div><div class="control-group">
				<label class="control-label" for="inputEmail">Birthday</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="birthdate" value="<?php echo $row['birthdate']; ?>" required>
				</div>
			</div><div class="control-group">
				<label class="control-label" for="inputEmail">Gender</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="gender" value="<?php echo $row['gender']; ?>" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputEmail">Username</label>
				<div class="controls">
				<input type="hidden" id="inputEmail" name="id" value="<?php echo $row['member_id']; ?>" required>
				<input type="text" id="inputEmail" name="username" value="<?php echo $row['username']; ?>" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Password</label>
				<div class="controls">
				<input type="text" name="password" id="inputPassword" value="<?php echo $row['password']; ?>" required>
			</div>
			</div>
			<div class="control-group">
				<div class="controls">
				<button name="edit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['edit'])){

	$member_id=$_POST['id'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$middlename=$_POST['middlename'];
	$birthdate=$_POST['birthdate'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$contact_no=$_POST['contact_no'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	

	executeUpdate($con,"update members set firstname='$firstname',lastname='$lastname',middlename='$middlename',address='$address',email='$email',contact_no='$contact_no',birthdate='$birthdate',gender='$gender',username='$username', password='$password' where member_id='$member_id'");
	?>
	<script>
		alert('Member update success!');
		window.location="members.php";
	</script>
	<?php
	}
	?>