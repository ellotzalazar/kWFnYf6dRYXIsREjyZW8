<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>
    <div class="container">
		<div>
			<div class="row">
				<div class="span12">
				<?php include('banner.php'); ?>
				
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
						<li class="active" ><a rel="tooltip"  data-placement="bottom" title="Home" id="home" href="index.php" class=""><i class="icon-home icon-large"></i>&nbsp;Home</a></li>
						<li><a rel="tooltip"  data-placement="bottom" title="Services" id="services" href="services.php" class=""><i class="icon-list icon-large"></i>&nbsp;Services</a></li>
						<li><a rel="tooltip"  data-placement="bottom" title="About Us" id="aboutus" href="about.php" class=""><i class="icon-info icon-large"></i>&nbsp;About Us</a></li>
						<li><a rel="tooltip"  data-placement="bottom" title="Contact Us" id="contactus" href="contact_us.php" class=""><i class="icon-phone icon-large"></i>&nbsp;Contact US</a></li>
						<li><a rel="tooltip"  data-placement="bottom" title="Contact Us" id="contactus" href="portfolio.php" class=""><i class="icon-film icon-large"></i>&nbsp;Portfolio</a></li>
						</ul>
							 
					 
						</div>
					</div>
				</div>



				<div style="margin-top: 20px">
					
					<style>
					* {box-sizing: border-box;}
					body {font-family: Verdana, sans-serif;}
					.mySlides {display: none;}
					img {vertical-align: middle;}

					/* Slideshow container */
					.slideshow-container {
					  max-width: 1250px;
					  position: relative;
					  margin: auto;
					}

					/* Caption text */
					.text {
					  color: #f2f2f2;
					  font-size: 15px;
					  padding: 8px 12px;
					  position: absolute;
					  bottom: 8px;
					  width: 100%;
					  text-align: center;
					}

					/* Number text (1/3 etc) */
					.numbertext {
					  color: #f2f2f2;
					  font-size: 12px;
					  padding: 8px 12px;
					  position: absolute;
					  top: 0;
					}

					/* The dots/bullets/indicators */
					.dot {
					  height: 15px;
					  width: 15px;
					  margin: 0 2px;
					  background-color: #bbb;
					  border-radius: 50%;
					  display: inline-block;
					  transition: background-color 0.6s ease;
					}

					.active {
					  background-color: #717171;
					}

					/* Fading animation */
					.fade {
					  -webkit-animation-name: fade;
					  -webkit-animation-duration: 5s;
					  animation-name: fade;
					  animation-duration: 5s;
					}

					@-webkit-keyframes fade {
					  from {opacity: 1} 
					  to {opacity: 1}
					}

					@keyframes fade {
					  from {opacity: 1} 
					  to {opacity: 1}
					}

					
					@media only screen and (max-width: 300px) {
					  .text {font-size: 11px}
					}
					</style>
					</head>
					<body>

					<div class="slideshow-container">

					<div class="mySlides fade">
					  <div class="numbertext">1 / 3</div>
					  <img src="img/banner-1.jpg" style="width:100%">
					  <div class="text">Caption Text</div>
					</div>

					<div class="mySlides fade">
					  <div class="numbertext">2 / 3</div>
					  <img src="img/banner-2.jpg" style="width:100%">
					  <div class="text">Caption Two</div>
					</div>

					<div class="mySlides fade">
					  <div class="numbertext">3 / 3</div>
					  <img src="img/banner-3.jpg" style="width:100%">
					  <div class="text">Caption Three</div>
					</div>

					</div>
					<br>

					<div style="text-align:center">
					  <span class="dot"></span> 
					  <span class="dot"></span> 
					  <span class="dot"></span> 
					</div>

					<script>
					var slideIndex = 0;
					showSlides();

					function showSlides() {
					    var i;
					    var slides = document.getElementsByClassName("mySlides");
					    var dots = document.getElementsByClassName("dot");
					    for (i = 0; i < slides.length; i++) {
					       slides[i].style.display = "none";  
					    }
					    slideIndex++;
					    if (slideIndex > slides.length) {slideIndex = 1}    
					    for (i = 0; i < dots.length; i++) {
					        dots[i].className = dots[i].className.replace(" active", "");
					    }
					    slides[slideIndex-1].style.display = "block";  
					    dots[slideIndex-1].className += " active";
					    setTimeout(showSlides, 5000); // Change image every 5 seconds
					}
					</script>



									</div>
									
								</div>
							</div>
					    </div>
<div> <?php include('footer.php') ?></div>
			</div>