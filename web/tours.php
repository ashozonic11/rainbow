<? php
session_start()
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<title>Rainbow Nepal Airlines</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />



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

	<link href="img/rna.jpg" rel="icon">
  <link href="img/rna.jpg" rel="apple-touch-icon">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

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
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav style='background-color:	#2C2E3E' class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<div id="colorlib-logo"><a href="index.php">Rainbow Nepal Airlines</a></div>
						</div>
						<div class="col-xs-8 text-right menu-1">
							<ul>
								<li ><a href="index.php">Home</a></li>
								<li ><a href="travel.php">Travels</a></li>
								<li class="active" >
									<a href="tours.php">Gallery</a>
									
										
								</li>
					
								<li><a href="services.php">Services</a></li>
								
								
								<?php
          if (isset($_SESSION['user'])) {
            echo "<li class='dropdown'>";
            echo "<a href='' class='dropdown-toggle' data-toggle='dropdown'>";
            echo "<span class='glyphicon glyphicon-cog'></span> Settings <span class='glyphicon glyphicon-triangle-bottom'></span></a>";
            echo "<ul class='dropdown-menu dropdown-menu-left'>";
            echo "<li class='dropdown-header'>"; echo $_SESSION['user']; echo"</li>";
            echo "<li> <a href='index.php?page=changepassword'><span class='glyphicon glyphicon-edit'></span> Change Password</a> </li>";
            echo "<li><a href='login/logout.php?logout'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>";
            echo "</ul>";
            echo "</li>";
          }
          else {
            echo "<li class='dropdown'>";
            echo "<a href='' class='dropdown-toggle' data-toggle='dropdown'>";
            echo "<span class='glyphicon glyphicon-cog'></span> Account <span class='glyphicon glyphicon-triangle-bottom'></span></a>";
            echo "<ul class='dropdown-menu dropdown-menu-left'>";
            echo "<li> <a style='color: black' href='login.php'><span class='glyphicon glyphicon-log-in'></span> Log In</a> </li>";
            echo "<li> <a style='color: black' href='register.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a> </li>";
            echo "</ul>"; 
            echo "</li>";
          }
           ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<br/>

<div class="colorlib-tour">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Image Gallery</h2>
						<p></p>
					</div>
				</div>
		<div class="colorlib-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="wrap-division">
								<div class="col-md-6 col-sm-6 animate-box">
									<div class="tour">
										<a class="tour-img" style="background-image: url(images/rna2.jpg);">
											
										</a>
										
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="tour">
										<a  class="tour-img" style="background-image: url(images/rna3.jpg);">
											
										</a>
										
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="tour">
										<a  class="tour-img" style="background-image: url(images/rna4.jpg);">
											
										</a>
										
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="tour">
										<a class="tour-img" style="background-image: url(images/rna5.jpg);">
											
										</a>
										
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="tour">
										<a  class="tour-img" style="background-image: url(images/rna6.jpg);">
											
										</a>
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="tour">
										<a  class="tour-img" style="background-image: url(images/rna8.jpg);">
											
										</a>
										
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="tour">
										<a  class="tour-img" style="background-image: url(images/rna9.jpg);"></a>
											
									</div>
								</div>


								<div class="col-md-6 col-sm-6 animate-box">
									<div class="tour">
										<a  class="tour-img" style="background-image: url(images/rna10.jpg);">
										
									</div>



									

								
						</div>
						
						</div>
					</div>
	</div>
						</div>
					</div>
						</div>
						</div>
					</div>

					<!-- SIDEBAR-->
					

	
						<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-5 colorlib-widget">
						<h4>Rainbow Nepal Airlines</h4>
						<p>We all have culture and traditions.<br/> 
						Let us serve you by our way.</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
							
								<li><a href="#"><i class="icon-instagram"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						<h4>Book Now</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="index.php">Flight</a></li>
								
								
								
							</ul>
						</p>
					</div>
					

					<div class="col-md-4 col-md-push-1">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>Lakeside,Pokhara <br> Nepal</li>
							<li><a href="tel://+977 061-461848">+977 061-461848</a></li>
							<li><a href="mailto:info@yoursite.com">rainbownepalairlines@gmail.com</a></li>
							<li><a href="rna.html">rainbownepalairlines.com</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | @rainbownepalairlines</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span> 
							
						
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>