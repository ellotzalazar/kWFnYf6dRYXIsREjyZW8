<?php include('header.php'); ?>
<?php include('dbcon.php'); 

?>
    <div class="container">
		<div>
			<div class="row">
				<div class="span12">
					<img src="img/dr.png">
					<div class="navbar  navbar-inverse">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<div class="nav-collapse collapse">
						<ul class="nav">
						<li><a rel="tooltip"  data-placement="bottom" title="Home" id="home" href="index.php" class=""><i class="icon-home icon-large"></i>&nbsp;Home</a></li>
						<li><a rel="tooltip"  data-placement="bottom" title="Services" id="services" href="services.php" class=""><i class="icon-list icon-large"></i>&nbsp;Services</a></li>
						<li><a rel="tooltip"  data-placement="bottom" title="About Us" id="aboutus" href="about.php" class=""><i class="icon-info icon-large"></i>&nbsp;About Us</a></li>
						<li><a rel="tooltip"  data-placement="bottom" title="Contact Us" id="contactus" href="contact_us.php" class=""><i class="icon-phone icon-large"></i>&nbsp;Contact US</a></li>
						
						</div>
					</div>
				</div>
				
					<?php if(isset($_GET['src'])):?>
						<br/>
						<div class="alert alert-warning">
							<b>A verification link has been sent to your email account.</b>
							<br/>
							Please click on the link that has just been sent to your email account to verify your email and activate your account.
							<a href="resend.php?src=<?php echo $_GET['src']?>">Click here to resend activation link.</a>
						</div>
					<?php 
						elseif(isset($_GET['user'])):
							$username = base64_decode($_GET['user']);
							$user = fetchData($conn,"SELECT * FROM members WHERE username = '$username'");
							$row = $user->fetch_array();
							$mId = $row['member_id'];
							if($row['status'] == 'confirmed'):
								echo '<script>window.location = "login.php"</script>';
							else:
								doInsertFunction($conn,"UPDATE members SET status = 'active' WHERE member_id = $mId");
							
					?>
						<br/>
						<div class="alert alert-info text-center">
							<h4>Thank you for verifying your email.</h4>
							<a href="account_verify.php?member_id=<?php echo $mId?>" class="btn btn-success">Proceed to my account</a> 
							<div class="clearfix"></div>
						</div>
						
						<?php endif;?>
					<?php else:?>
						<div class="alert alert-success">
							You are Successfully register you can now login your Account
						</div>
						<?php include('login_modal.php');  ?>
					<?php endif;?>


		
<?php include('footer.php');  ?>