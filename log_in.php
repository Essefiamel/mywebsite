<?php
$h=<<<h
<!DOCTYPE HTML>

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-2 text-left">
					<div id="fh5co-logo"><a href="index.html">Meeting<span>.</span></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						

						<li><a href="sign.php">Sign In</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/Business-Meeting.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-7 text-left">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeInUp">
							<h1 class="mb30">when is your meeting?</h1>
							<p>
								<a href="log_in.php" target="_blank" class="btn btn-primary">Get Started</a>  <em class="or">or</em> 
								<a href="sign.php" class="link-watch popup-vimeo">Get an Account</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	
	<div id="fh5co-services" class="fh5co-bg-section border-bottom">
	<div class="container">
		<div class="row row-pb-md">
				<form method="get" action="login.php">
					<span class="login100-form-title p-b-51">
						 <h3>Login</h3>
					</span>

					
					<div  data-validate = "Username is required">
						<input class="form-control" type="text" name="username" placeholder="Username" id="userEmail">
						<span class="focus-input100"></span>
					</div>
					
					
					<div data-validate = "Password is required">
						<input  class="form-control" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
					
					<br>

					<div class="form-group">
							<input type="submit" value="Login" class="btn btn-lg btn-primary">
						</div>

				</form>
			</div>
		</div>
	</div>
	
	<footer id="fh5co-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-4 fh5co-widget ">
						<h3>Meeting.</h3>
						<p>The best automated scheduling software for you and everyone you meet.</p>
						<p><a href="#">Learn More</a></p>
					</div>
					<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
						<ul class="fh5co-footer-links">
							<li><a href="#">About</a></li>
							<li><a href="#">Help</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">Terms</a></li>
							<li><a href="#">Meetups</a></li>
						</ul>
					</div>
	
					<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
						<ul class="fh5co-footer-links">
							<li><a href="#">Shop</a></li>
							<li><a href="#">Privacy</a></li>
							<li><a href="#">Testimonials</a></li>
							<li><a href="#">Handbook</a></li>
							<li><a href="#">Held Desk</a></li>
						</ul>
					</div>
	
					<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
						<ul class="fh5co-footer-links">
							<li><a href="#">Find Designers</a></li>
							<li><a href="#">Find Developers</a></li>
							<li><a href="#">Teams</a></li>
							<li><a href="#">Advertise</a></li>
							<li><a href="#">API</a></li>
						</ul>
					</div>
				</div>
	
				<div class="row copyright">
					<div class="col-md-12 text-center">
						<p>
							<small class="block">&copy; All Rights Reserved.</small> 
							<small class="block">Designed by <a href="#" target="_blank">Amal Essefi</a> </small>
						</p>
						<p>
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
				</div>
	
			</div>
		</footer>
	</div>
	
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- countTo -->
<script src="js/jquery.countTo.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- Stellar -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Main -->
<script src="js/main.js"></script>


	
</body>
</html>
h;
echo $h;
?>