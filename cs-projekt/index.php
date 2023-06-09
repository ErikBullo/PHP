<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<title>Coming Soon Template</title>
        <meta name="keywords" content="">
		<meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- 
    	Coming Template
    	http://www.templatemo.com/preview/templatemo_447_coming
    	-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/templatemo-style.css">
	</head>
<body>
	<!-- start preloader -->
<!--	<div class="preloader">-->
<!--		<div class="sk-spinner sk-spinner-three-bounce">-->
<!--  			<div class="sk-bounce1"></div>-->
<!--			<div class="sk-bounce2"></div>-->
<!--			<div class="sk-bounce3"></div>-->
<!--		</div>-->
<!--	</div>-->
	<!-- end preloader -->
	<!---start-countdown-timer-->
	<section id="countdown">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="wow bounceIn" data-wow-delay="0.9s">Com<small>in</small>g</h1>
					<h2 class="element">
						<span class="sub-element">Hello, our website is under construction.</span>
						<span class="sub-element">We are currently working on it. Stay tuned!</span>
                        <span class="sub-element">Thank you for visiting templatemo</span>
					</h2>
                    
                    <!-- Edit js/init.js file for the date and time -->
                    
					<ul class="countdown">
						<li>
							<span class="days">365</span>
							<h3>Days</h3>
						</li>
						<li>
							<span class="hours">24</span>
							<h3>Hours</h3>
						</li>
						<li>
							<span class="minutes">59</span>
							<h3>Minutes</h3>
						</li>
						<li>
							<span class="seconds">59</span>
							<h3>Seconds</h3>
						</li>	
					</ul>
					<!-- subscribe form -->
					<form action="#" method="post">
						<div class="col-md-3 col-sm-3"></div>
						<div class="col-md-4 col-sm-4">
							<input type="email" class="form-control" placeholder="Your Email">
						</div>
						<div class="col-md-2 col-sm-2">
							<input type="submit" class="form-control" value="SUBSCRIBE">
						</div>
					</form>
					<!-- subscribe form -->
				</div>
			</div>
		</div>
	</section>
	<!---End-countdown-timer-->

	<!-- start features -->
	<section class="features text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title wow bounceIn">
						<h2>Features</h2>
					</div>
					<div class="col-md-3 col-sm-6 wow fadeInUp templatemo-feature" data-wow-delay="0.6s">
						<i class="fa fa-mobile"></i>
						<h4 class="text-uppercase">Fully Responsive</h4>
						<p>Lorem ipsum dolor sit consectetur ang elit doloribus magni incidunt fugit assumenda atque.</p>
					</div>
					<div class="col-md-3 col-sm-6 wow fadeInUp templatemo-feature" data-wow-delay="0.6s">
						<i class="fa fa-cogs"></i>
						<h4 class="text-uppercase">Bootstrap 3.3.4</h4>
						<p>Lorem ipsum dolor sit consectetur ang elit doloribus magni incidunt fugit assumenda atque.</p>
					</div>
					<div class="col-md-3 col-sm-6 wow fadeInUp templatemo-feature" data-wow-delay="0.6s">
						<i class="fa fa-font"></i>
						<h4 class="text-uppercase">Google Fonts</h4>
						<p>Lorem ipsum dolor sit consectetur ang elit doloribus magni incidunt fugit assumenda atque.</p>
					</div>
					<div class="col-md-3 col-sm-6 wow fadeInUp templatemo-feature" data-wow-delay="0.6s">
						<i class="fa fa-html5"></i>
						<h4 class="text-uppercase">HTML5 &AMP; CSS3</h4>
						<p>Feel free to use this template for your website. Tell your friends about templatemo.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features -->

	<!-- start team -->
	<?php
        include_once "parts/team.php";
    ?>
	<!-- end team -->

	<!-- start contact -->
	<section class="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title wow bounceIn">
						<h2>Stay Connected</h2>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0.6s">
					<div class="contact-form">
						<form action="#" method="post">
							<input type="text" class="form-control" placeholder="Name">
							<input type="email" class="form-control" placeholder="Email">
							<input type="text" class="form-control" placeholder="Subject">
							<textarea class="form-control" rows="4" placeholder="Message"></textarea>
							<input type="submit" class="form-control" value="SEND MESSAGE">
						</form>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 wow fadeInRight" data-wow-delay="0.6s">
					<address>
						<p><i class="fa fa-envelope-o"></i> hello@company.com</p>
						<p><i class="fa fa-phone"></i> 010-020-0340, 090-080-0760</p>								
						<p><i class="fa fa-map-marker"></i> 220 Another Roadside, Birdeye View, GO 54321</p>
					</address>
				</div>
			</div>
		</div>
	</section>
	<!-- end contact -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="templatemo-copyright">Copyright © 2084 Your Company Name</p>
					<ul class="social_icon">
						<li><a href="#" class="fa fa-facebook"></a></li>
						<li><a href="#" class="fa fa-twitter"></a></li>
						<li><a href="#" class="fa fa-google-plus"></a></li>
						<li><a href="#" class="fa fa-linkedin"></a></li>
					</ul>
				</div>						
			</div>
		</div>
	</footer>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/init.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/typed.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>