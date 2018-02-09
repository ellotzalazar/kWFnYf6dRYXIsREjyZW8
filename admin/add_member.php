							<p><a  href="#adduser" data-toggle="modal" class="btn btn-info" ><i class="icon-plus"></i>&nbsp;Add user</a></p>
										<div id="adduser" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Add User</strong></div>
	<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Firstname</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="firstname" placeholder="Firstname" required>
				</div>
			</div><div class="control-group">
				<label class="control-label" for="inputEmail">Lastname</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="lastname" placeholder="Lastname" required>
				</div>
			</div><div class="control-group">
				<label class="control-label" for="inputEmail">Middlename</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="middlename" placeholder="Middlename" required>
				</div>
			</div><div class="control-group">
				<label class="control-label" for="inputEmail">Address</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="address" placeholder="Address" required>
				</div>
			</div><div class="control-group">
				<label class="control-label" for="inputEmail">E mail</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="email" placeholder="Email" required>
				</div>
			</div><div class="control-group">
				<label class="control-label" for="inputEmail">Contact number</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="contact_no" placeholder="Contact no" required>
				</div>
			</div><div class="control-group">
				<label class="control-label" for="inputEmail">Birthday</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="birthdate" placeholder="Birthday" required>
				</div>
			</div><div class="control-group">
				<label class="control-label" for="inputEmail">Gender</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="gender" placeholder="Gender" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputEmail">Username</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="username" placeholder="Username" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Password</label>
				<div class="controls">
				<input type="password" name="password" id="inputPassword" placeholder="Password" required>
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
				<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	<?php
	if(isset($_POST['submit']))
{
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
	

	mysql_query("insert into members (firstname,lastname,age,gender,address,email,contact_no,username,password)
	values ('$firstname','$lastname','$birthdate','$gender','$address','$email','$contact_no','$username','$password')
	")or die(mysql_error());
	}
	?>