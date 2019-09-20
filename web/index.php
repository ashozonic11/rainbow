<?php
session_start();
require_once('config/connect.php');

$result=$con->query("SELECT * FROM flights");

if (isset($_POST['submit'])) {
  $counting=$_POST['optradio'];
  $departfrom=$_POST['depart'.$counting];
  $arriveat=$_POST['arriveat'.$counting];
  $departuredate=$_POST['dptdate'.$counting];
  $passengerno=$_POST['passengers'];
  $statement="INSERT INTO booking(departfrom,arriveat,departdate,passengerno) VALUES ('".$departfrom."','".$arriveat."','".$departuredate."','".$passengerno."')";
  $query2=mysqli_query($con,$statement);
  echo "<h2>Booking Successful!</h2>";
}
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
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<div id="colorlib-logo"><a href="index.php">Rainbow Nepal Airlines</a></div>
						</div>
						<div class="col-xs-8 text-right menu-1">
							<ul>
								<li class="active"><a href="index.php">Home</a></li>
								<li ><a href="travel.php">Travels</a></li>
								<li >
									<a href="tours.php">Gallery</a>
									
								</li>
					
								<li><a href="services.php">Services</a></li>
								
								<li>
                    <a class="page-scroll" href="#contact">Contact Us</a>
                  </li>
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
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/rna.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/rna3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					
				   					<h1>Come Fly With Us</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/rna4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   				
				   					<h1>Experience The Best</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/rna5.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					
				   					<h1>Give Us The Chance To Serve You</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>	   	
			  	</ul>
		  	</div>
		</aside>
<!-- fight -->

		<div id="colorlib-reservation">
			<!-- <div class="container"> -->
				<div class="row">
					<div class="search-wrap">
						<div class="container">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#flight"><i class="flaticon-plane"></i> Flight</a></li>
								
								
						</ul>
						</div>
						<div class="tab-content">
							<div id="flight" class="tab-pane fade in active">
								<form method="post" class="colorlib-form" action="">
				              	<div class="row">
				              	 <div class="col-md-3">
				              	 	<div class="form-group">
				  
                <p style='color: white'>One way</p>
              <br/>

          </div>
          <div>
          <table style='color:white'class="table table">
                <thead>
                  <tr>
                  <th>#</th>
                  <th>Depart From</th>
                  <th>Arrive At</th>
                  <th>Departure Date</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $count=0;
                  while ($row = $result->fetch_assoc()):
                    ?>
                  <tr>
                    <form class="form" action="" method="post" role="form">

                      <td><input type="radio" name="optradio" value="<?= $count ?>" required>
                        </td>

                        <td><?php echo $row['departfrom']; ?>
                          <div class="<?=$row['flightno'] ?>" style="display:none;">
                            <input type="text" name=<?= 'depart'.$count  ?> value="<?= $row['departfrom'] ?>" class="form-control">
                          </div></td>

                          <td><?php echo $row['arriveat']; ?>
                            <div class="<?=$row['flightno'] ?>" style="display:none;">
                              <input type="text" name=<?= 'arriveat'.$count ?> value="<?= $row['arriveat'] ?>" class="form-control">
                            </div></td>

                            <td><?php echo $row['departuredate']; ?>
                              <div class="<?=$row['flightno'] ?>" style="display:none;">
                                <input type="date" name=<?= 'dptdate'.$count ?> value="<?= $row['departuredate'] ?>" class="form-control">
                              </div></td>

                  </tr>
                  <?php
                  $count++;
                  endwhile; ?>
                </tbody>
              </table>

              <label for="sel1">Passengers</label>
                <select class="form-control" id="sel1" name="passengers">
                  <option style='color:black'>1</option>
                  <option style='color:black'>2</option>
                  <option style='color:black'>3</option>
                  <option style='color:black'>4</option>
                  <option style='color:black'>5</option>
                </select><br>

              <input type="submit" name="submit" value="Book Flight" class="btn btn-primary pull-right">



				            </form>
				         </div>

				         
						   </div>
			         </div>
					</div>
				</div>
			</div>
		</div>

		

		


		<div class="colorlib-tour">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>About Us</h2>
						<p></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="f-tour">
							<div class="row row-pb-md">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 animate-box">
											<a  class="f-tour-img" style="background-image: url(images/rna.jpg);">
												
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  class="f-tour-img" style="background-image: url(images/rna10.jpg);">
												
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  class="f-tour-img" style="background-image: url(images/rna7.jpg);">
												
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a   class="f-tour-img" style="background-image: url(images/rna9.jpg);">
												
											</a>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="desc">
										<div class="row">
											<div class="col-md-12">
												<h3>Introduction</h3>
												<p>Rainbow Nepal Airlines was establised in 1990 as Royal Nepal Airlines. Later on 2001, Rainbow International Group purchased from the government an so what it is named as.We fly internationally over various parts of the world.</p><br>
											</div>
											<div class="col-md-12">
												<h4>Countries</h4>
												<div class="row">
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a >India</a></li>
															<li><a >China</a></li>
															<li><a >Japan</a></li>
															<li><a >Thailand</li>
																<li><a>Canada</li>
															
														</ul>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a >Singapore</a></li>
															<li><a >Japan</a></li>
															<li><a >Malaysia</a></li>
															<li><a >Australia</li>
																<li><a>USA</li>
															
														</ul>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a >UAE</a></li>
															<li><a >Germany</a></li>
															<li><a>Hongkong</a></li>
															<li><a>South Africa</li>
															<li><a>United Kingdom</li>
														</ul>
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
						</div>
					</div>
				</div>
			</div>
		</div>
    <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Contact us</h2>
            </div>
          </div>
        </div>
       	<div class="row form-group">
								<div class="col-md-12">
									<label for="email">Email</label>
									<input type="text"  class="form-control" placeholder="Your email address" required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="subject">Subject</label>
									<input type="text" id="subj" class="form-control" placeholder="Your subject of this message" required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Message</label>
									<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
								</div>
							</div>
							<div class="form-group text-center">
								<input type="submit" value="Send Message" class="btn btn-primary">
							</div>

						</form>		
					</div>
              </form>
            </div>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->
	
		
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
								<li><a href="rna.html">Flight</a></li>
								
								
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