	<?php
		include('dbcon.php');
		if (isset($_POST['submit'])){
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$middlename=$_POST['middlename'];
		$address=$_POST['address'];
		$email=$_POST['email'];
		$contact_no=$_POST['contact_no'];
		$age=$_POST['birthdate'];
		$gender=$_POST['gender'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];
		
			if($cpassword!=$password){
		$a="Password do not Match";
		}else{
		$a = "";
		}
	}
	?>
<form method="post">	
	<div class="span6">
	<div class="form-horizontal">

		<div class="control-group">
			<label class="control-label" for="inputEmail">Name: </label>
			<div class="controls">
			<input type="text" name="firstname" value="<?php if (isset($_POST['submit'])){echo $firstname;} ?>" placeholder="Firstname" required> 
			<input type="text" name="lastname"  value="<?php if (isset($_POST['submit'])){echo $lastname;} ?>" placeholder="Lastname" required> 
			<input type="text" name="middlename" value="<?php if (isset($_POST['submit'])){echo $middlename;} ?>" placeholder="Middlename" required> 
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="inputPassword">Address: </label>
			<div class="controls">
			<input type="text" name="address" value="<?php if (isset($_POST['submit'])){echo $address;} ?>" placeholder="Address" required>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="inputPassword">Email Address: </label>
			<div class="controls">
			<input name="email" type="text" value="<?php if (isset($_POST['submit'])){echo $email;} ?>" placeholder="Email Address" required> 
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="inputPassword">Contact No.: </label>
			<div class="controls">
			<input type="text" maxlength="11" name="contact_no" value="<?php if (isset($_POST['submit'])){echo $contact_no;} ?>"placeholder="Contact No" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Birthday: </label>
			<div class="controls">
			<input name="birthdate"  type="text"  value="<?php if (isset($_POST['submit'])){echo $birthdate;} ?>" placeholder="month-day-year" required>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="inputPassword">Gender: </label>
			<div class="controls">
			<select name="gender" required>
			<option><?php if (isset($_POST['submit'])){echo $gender;} ?></option>
			<option>Male</option>
			<option>Female</option>
			</select>
			</div>
		</div>
	
		<div class="control-group">
			<label class="control-label" for="inputPassword">Username: </label>
			<div class="controls">
			<input type="text" name="username" maxlength="25" value="<?php if (isset($_POST['submit'])){echo $username;} ?>" placeholder="Username" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Password: </label>
			<div class="controls">
			<input type="password" name="password" value="<?php if (isset($_POST['submit'])){echo $password;} ?>" placeholder="Password">
			</div>
		</div>
	
		<div class="control-group">
			<label class="control-label" for="inputPassword">Confirm Password: </label>
			<div class="controls">
			<input type="password" name="cpassword" value="<?php if (isset($_POST['submit'])){echo $cpassword;} ?>" placeholder="Confirm Password" required>
					<?php if (isset($_POST['submit'])){?> 	<span class="label label-important"><?php echo $a; ?></span><?php }?>
			</div>

		</div>
		
	<div class="control-group">
				<label class="control-label" for="inputEmail"></label>
				<div class="controls">
			<script type="text/javascript">
				jQuery(document).ready(function() {
					$('#refresh').tooltip('show');
					$('#refresh').tooltip('hide');
				})
			</script>
				<img  src="generatecaptcha.php?rand=<?php echo rand(); ?>" id='captchaimg' > 
				<a href='javascript: refreshCaptcha();'><i data-placement="right" id="refresh"  title="Click to Refresh Code" class="icon-refresh icon-large icon-spin"></i></a> 
				<script language='JavaScript' type='text/javascript'>
			function refreshCaptcha()
			{
				var img = document.images['captchaimg'];
				img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
			}
			</script>
				
				</div>
    </div>
	
	<div class="control-group">
    	<label class="control-label" for="inputPassword">Enter the Code Above: </label>
    <div class="controls">
    <input id="code" name="code" type="text" placeholder="Enter code here" required></td>

    <div >
				<div class="controls">
				<button name="submit" type="submit" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Sign Up</button>
				</div>
			</div>
	    </div>
	
	<?php 

if(isset($_POST['submit']))
{
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$middlename=$_POST['middlename'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$contact_no=$_POST['contact_no'];
	$birthdate=$_POST['birthdate'];
	$gender=$_POST['gender'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];	
	if(strcmp($_SESSION['code'], $_POST['code']) != 0)
	{
	?>
	<span class="label label-important">Code Does Not Match</span>
<?php
}else if(strcmp($_SESSION['code'], $_POST['code']) == 0 && $password == $cpassword){ ?>
<?php
	mysql_query("insert into members (firstname,lastname,middlename,address,email,contact_no,birthdate,gender,username,password,pt_id)
	values ('$firstname','$lastname','$middlename','$address','$email','$contact_no','$birthdate','$gender','$username','$password',2)
	")or die(mysql_error());?>
<script type="text/javascript">
window.location='success.php';
</script>
<?php
}else{
echo " ";
}}
?>
    </div>
    
		
		</div>	

	
</form>