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
				<div class="span12">
			<div class="alert alert-success">You are Successfully register you can now login your Account</div>					


		<?php include('login_modal.php');  ?>
<?php include('footer.php');  ?>