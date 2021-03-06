<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Gaadi Baba</title>

		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

		<link href="css/master.css" rel="stylesheet">

	</head>

<?php 

require('php/maincontrol.php');

$brand = $_POST['select3'];
$model = $_POST['select4'];
$min = $_POST['min'];
$max = $_POST['max'];
$vehicleType = $_POST['select1'];

$query = "";

if($vehicleType == 1){
	$query = "SELECT * FROM `car_db` where brand = '$brand' and model = '$model' ";
}
else
{
	$query = "SELECT * FROM car_db where vehicle = '$vehicleType' and value between $min and $max ";
}
$result = mysql_query($query) or die(mysql_error());

?>

	<body class="m-listings" data-scrolling-animations="true" >

		<!-- Loader -->
		<div id="page-preloader"><span class="spinner"></span></div>
		<!-- Loader end -->
		
	<header class="b-topBar">
		<div class="container wow slideInDown" data-wow-delay="0.7s">
			<div class="row">
				<div class="col-md-4 col-xs-6">
					<div class="b-topBar__addr">
						<span class="fa fa-map-marker"></span> IGDTUW, DELHI, INDIA
					</div>
				</div>
				<div class="col-md-2 col-xs-6">
					<div class="b-topBar__tel">
						<span class="fa fa-phone"></span> 1-800-123-123
					</div>
				</div>
				<div class="col-md-6 col-xs-6">
					<nav class="b-topBar__nav">
						<ul>
							<li><a href="register.html">Register</a></li>
							<li><a href="login.html">Sign in</a></li>
							<li><a href="askaquestion.html">Ask a Question</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!--b-topBar-->

	<nav class="b-nav">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-xs-4">
					<div class="b-nav__logo wow slideInLeft" data-wow-delay="0.3s">
											<img src="images/logo/logoN.png">
						<h3><a href="index.html">Gaadi<span>BABA</span></a></h3>
						<h2><a href="index.html">Find your dream car</a></h2>
					</div>
				</div>
				<div class="col-sm-9 col-xs-8">
					<div class="b-nav__list wow slideInRight" data-wow-delay="0.3s">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
						</div>
						<div class="collapse navbar-collapse navbar-main-slide" id="nav">
							<ul class="navbar-nav-menu">
								<li><a href="index.html">Home</a></li>
								<li><a href="search.html">Search</a></li>
								<li><a href="compare.html">Compare</a></li>
								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle='dropdown' href="#">Service <span class="fa fa-caret-down"></span></a>
									<ul class="dropdown-menu h-nav">
										<li><a href="reviews.html">Reviews</a></li>
										<li><a href="askexpert.html">Ask Expert</a></li>
									</ul>
								</li>
								<li><a href="blog.html">Blog </a></li>
								<li><a href="contacts.html">Contact</a></li>
								<li><a href="about.html">About</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<!--b-nav-->

		<section class="b-pageHeader">
			<div class="container">
				<h1 class=" wow zoomInLeft" data-wow-delay="0.5s">Auto Listings</h1>
				<div class="b-pageHeader__search wow zoomInRight" data-wow-delay="0.5s">
				</div>
			</div>
		</section><!--b-pageHeader-->

		<div class="b-breadCumbs s-shadow">
			<div class="container wow zoomInUp" data-wow-delay="0.5s">
				<a href="home.html" class="b-breadCumbs__page">Home</a><span class="fa fa-angle-right"></span><a href="search.html" class="b-breadCumbs__page m-active">Search Results</a>
			</div>
		</div><!--b-breadCumbs-->

	
		<section class="b-items s-shadow">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-sm-8 col-xs-12">
						<div class="b-items__cars">
							
							<?php 
							
							while($row = mysql_fetch_array($result,MYSQL_NUM))
							{ echo " <div class=\"b-items__cars-one wow zoomInUp\" data-wow-delay=\"0.5s\">
								
								<div class=\"b-items__cars-one-img\">
									<img src=\"media/270x230/$row[0].jpg\" alt='$row[0]'/>

									<span class=\"b-items__cars-one-img-type \">PREMIUM</span>
								</div>
								<div class=\"b-items__cars-one-info\">
									<header class=\"b-items__cars-one-info-header s-lineDownLeft\">
										<h2>$row[1] $row[0]</h2>
										<span>Rs. $row[3]0000</span>
									</header>
									<p>
										$row[4] 
									</p>
									<div class=\"b-items__cars-one-info-details\">
										<div class=\"b-featured__item-links\">
											<a href=\"#\">Registered 2016</a>
											<a href=\"#\">Premuim</a>
											<a href=\"#\">4-Speed Automatic</a>
											<a href=\"#\">Petrol</a>
										</div>
									</div>
								</div>
							</div>
							";
							}

							?>

						</div>
					</div>
				</div>
			</div>
		</section><!--b-items-->

		<div class="b-features">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-md-offset-3 col-xs-6 col-xs-offset-6">
						<ul class="b-features__items">
											<li class="wow zoomInUp" data-wow-delay="0.3s" data-wow-offset="100">24/7 Support</li>
						<li class="wow zoomInUp" data-wow-delay="0.3s" data-wow-offset="100">Expert Assistance</li>
						<li class="wow zoomInUp" data-wow-delay="0.3s" data-wow-offset="100">Best Service Provider </li>

						</ul>
					</div>
				</div>
			</div>
		</div><!--b-features-->

		<div class="b-info">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-12">
					<aside class="b-info__aside wow zoomInLeft" data-wow-delay="0.3s">
						<article class="b-info__aside-article">
							<h3> 24 * 7 Support </h3>
							<div class="b-info__aside-article-item">
								<h6> Need Expert Advice ? </h6>
							</div>
							<div class="b-info__aside-article-item">
								<h6> Need help finding your dream car ? </h6>
							</div>
							<div class="b-info__aside-article-item">
								<p> Call us on 1800-123-123 </p>
							</div>
						</article>
						<article class="b-info__aside-article">
							<h3>About us</h3>
							<p> Cars are essential part of family & we at Gaadi Baba help you make your family complete. We help you find the best
								car for all your needs. </p>
						</article>
					</aside>
				</div>
				<div class="col-md-4 col-xs-12">
					<div class="b-info__latest">
						<h3 class="wow slideInUp" data-wow-delay="0.3s">Latest Blogs</h3>
						<div class="b-info__latest-article wow slideInUp" data-wow-delay="0.3s">
							<div class="b-info__latest-article-photo m-audi"></div>
							<div class="b-info__latest-article-info">
								<h6><a href="how_to_buy_your_first_car.html">How to buy your first car </a></h6>
								<div class="b-featured__item-links m-auto">
									<a>First Car</a>
									<a>2016</a>
									<a>Insurance</a>
									<a>Finance</a>
								</div>
							</div>
						</div>
						<div class="b-info__latest-article wow slideInUp" data-wow-delay="0.3s">
							<div class="b-info__latest-article-photo m-audiSpyder"></div>
							<div class="b-info__latest-article-info">
								<h6><a href="what_to_do_if_your_car_gets_damaged.html">What to do if your car gets damaged </a></h6>
								<div class="b-featured__item-links m-auto">
									<a>Damaged</a>
									<a>2016</a>
									<a>Repair</a>
									<a>Accessories</a>
									<a>Insurance</a>
								</div>
							</div>
						</div>
						<div class="b-info__latest-article wow slideInUp" data-wow-delay="0.3s">
							<div class="b-info__latest-article-photo m-aston"></div>
							<div class="b-info__latest-article-info">
								<h6><a href="how_to_maintain_your_first_car.html">How to maintain your new car </a></h6>
								<div class="b-featured__item-links m-auto">
									<a>New Car</a>
									<a>2016</a>
									<a>Air Pressure</a>
									<a>Lubricants</a>
									<a>Engine oil</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-xs-12">
					<address class="b-info__contacts wow slideInUp" data-wow-delay="0.3s">
						<p>contact us</p>
						<div class="b-info__contacts-item">
							<span class="fa fa-map-marker"></span>
							<em>IGDTUW, DELHI, INDIA<br />
									</em>
						</div>
						<div class="b-info__contacts-item">
							<span class="fa fa-phone"></span>
							<em>Phone:  1-800-123-123</em>
						</div>

						<div class="b-info__contacts-item">
							<span class="fa fa-envelope"></span>
							<em>Email:  info@gaadibaba.com</em>
						</div>
					</address>
					<address class="b-info__map">
						<a href="contacts.html">Open Location Map</a>
					</address>
				</div>
			</div>
		</div>
	</div>
	<!--b-info-->

	<footer class="b-footer">
		<a id="to-top" href="#this-is-top"><i class="fa fa-chevron-up"></i></a>
		<div class="container">
			<div class="row">
				<div class="col-xs-4">
					<div class="b-footer__company wow slideInLeft" data-wow-delay="0.3s">
						<div class="b-nav__logo">
							<h3><a href="index.html"><span>GAADIBABA</span></a></h3>
						</div>
						<p>&copy; 2016 Designed with <span class="fa fa-heart fa-lg"></span> by GAADIBABA </p>
					</div>
				</div>
				<div class="col-xs-8">
					<div class="b-footer__content wow slideInRight" data-wow-delay="0.3s">
						<div class="b-footer__content-social">
							<a href="https://www.facebook.com/apurva.chawla1/posts/1202191899848633"><span class="fa fa-facebook-square"></span></a>
							<a href=""><span class="fa fa-twitter-square"></span></a>
							<a href="#"><span class="fa fa-google-plus-square"></span></a>
							<a href="#"><span class="fa fa-instagram"></span></a>
							<a href="#"><span class="fa fa-youtube-square"></span></a>
							<a href="#"><span class="fa fa-skype"></span></a>
						</div>
						<nav class="b-footer__content-nav">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="search.html">Search</a></li>
								<li><a href="comparison.html">Compare</a></li>
								<li><a href="service.html">Service</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="contacts.html">Contact</a></li>
								<li><a href="about.html">About</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--b-footer-->

		<!--Main-->   
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/modernizr.custom.js"></script>

		<script src="assets/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/jquery.easypiechart.min.js"></script>
		<script src="js/classie.js"></script>

		<!--Switcher-->
		<script src="assets/switcher/js/switcher.js"></script>
		<!--Owl Carousel-->
		<script src="assets/owl-carousel/owl.carousel.min.js"></script>
		<!--bxSlider-->
		<script src="assets/bxslider/jquery.bxslider.js"></script>
		<!-- jQuery UI Slider -->
		<script src="assets/slider/jquery.ui-slider.js"></script>

		<!--Theme-->
		<script src="js/jquery.smooth-scroll.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/theme.js"></script>
	</body>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
</html>