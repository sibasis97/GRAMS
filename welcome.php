<?php include('server.php');?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>GRAMS : The Online Trading Community</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive"
	/>
	<meta name="author" content="FreeHTML5.co" />


	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="css/w3.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body style="background-size: 100px 80px ;background-repeat: no-repeat; size:10">
<?php if(isset($_SESSION['success'])):?>
<h3>
<?php 
echo $_SESSION['success'];
unset($_SESSION['success']);
 ?>
 </h3>
 <?php endif?>
 <?php if(isset($_SESSION["email"])):?>


	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<div class="topnav w3-bar w3-left" style="position: fixed; top: 0px;">
			<span style="padding:8px 16px;float:left;width:auto;border:none;display:block;outline:0;color:#cc0000"><b>Let's Share &amp; Evolve!!!</b></span>
			<a class="active w3-bar-item w3-button" href="profile.php" style="color:yellow;"><?php echo $_SESSION['email'];?><?php endif?> &nbsp;<img src="logo\user_logo.png"  width="27" height="27"/></a>
			<a class="active w3-bar-item w3-button" href="http://localhost:5000">Chat </a>	
			<a class="active w3-bar-item w3-button" href="login.php?logout='1'">Logout </a>			
			<div class="search-container">

				<form action="search2.php" method="post">
					<button id="close-image" type="submit">
						<img src="logo/search.png">
					</button>
					<input type="text" placeholder="Search term here" name="search" id="search"
						class="w3-bar-item w3-button w3-right" style="color: white;"/>
				</form>
			</div>
		</div>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight" style="overflow: hidden;">
			<br>
			<br>
			<h1 id="fh5co-logo">
				<a href="welcome.php"><img src="images/logo.png" width="135" height="100" alt="Free HTML5 Bootstrap Website Template"></a>
			</h1>
			<br>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
		
					<li><a href="postad.php">Post an Ad</a></li>
					<li><a href="about2.php">About</a></li>
					<li><a href="contact2.php">Contact</a></li>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small> All Rights Reserved.</span> <span>Designed by GRAMS </span></small></p>
				<ul>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
					<li><a href="#"><i class="icon-linkedin"></i></a></li>
				</ul>
			</div>

		</aside>
		<table width=80%>
			<tr>
				<meta name="viewport" content="width=50%, initial-scale=1" width="50%">

				<div id="fh5co-main">


					<div class="fh5co-narrow-content" style="width: 70%; ">
						<h3 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft" style="color: lightcoral;">
							<center>WELCOME</center>
						</h3>
						<div class="row animate-box" data-animate-effect="fadeInLeft">
							<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
								<a href="category2.php?cat=1">
									<img src="logo/bike_image.jpg" class="img-responsive">
									<h3 class="fh5co-work-title" style="color: gray" role="navigation"><br>BIKES</h3>

								</a>
							</div>


							<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
								<a href="category2.php?cat=2">
									<img src="logo/book1_logo.png" class="img-responsive">
									<h3 class="fh5co-work-title" style="color: gray">BOOKS</h3>

								</a>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
								<a href="category2.php?cat=3">
									<img src="logo/car_logo.png" class="img-responsive">
									<h3 class="fh5co-work-title" style="color: gray">CARS</h3>

								</a>
							</div>

							<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
								<a href="category2.php?cat=4">
									<img src="logo/mob_logo.png" class="img-responsive">
									<h3 class="fh5co-work-title" style="color: gray">MOBILES</h3>

								</a>
							</div>

							<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
								<a href="category2.php?cat=5">
									<img src="logo/lap_logo.png" class="img-responsive">
									<h3 class="fh5co-work-title" style="color: gray">LAPTOPS</h3>

								</a>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
								<a href="category2.php?cat=6">
									<img src="logo/fur_logo.jpg" class="img-responsive">
									<h3 class="fh5co-work-title" style="color: gray">FURNISHING</h3>

								</a>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
								<a href="category2.php?cat=7">
									<img src="logo/sport_logo.jpg" class="img-responsive">
									<h3 class="fh5co-work-title" style="color: gray">SPORTS ITEM</h3>

								</a>
							</div>

							<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
								<a href="category2.php?cat=8">
									<img src="logo/auto_logo.png" class="img-responsive">
									<h3 class="fh5co-work-title" style="color: gray">ACCESSORIES</h3>

								</a>
							</div>
							<div class="clearfix visible-sm-block"></div>
							<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
								<a href="category2.php?cat=9">
									<img src="logo/tsh_logo.png" class="img-responsive">
									<h3 class="fh5co-work-title" style="color: gray">CLOTHING</h3>

								</a>
							</div>
							<div class="clearfix visible-sm-block"></div>
							<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
								<a href="category2.php?cat=10">
									<img src="logo/ed_logo.jpg" class="img-responsive">
									<h3 class="fh5co-work-title" style="color: gray">ELECTRONICS</h3>

								</a>
							</div>
							<div class="clearfix visible-md-block"></div>

						</div>
					</div>



					<!-- jQuery -->
					<script src="js/jquery.min.js"></script>
					<!-- jQuery Easing -->
					<script src="js/jquery.easing.1.3.js"></script>
					<!-- Bootstrap -->
					<script src="js/bootstrap.min.js"></script>
					<!-- Carousel -->
					<script src="js/owl.carousel.min.js"></script>
					<!-- Stellar -->
					<script src="js/jquery.stellar.min.js"></script>
					<!-- Waypoints -->
					<script src="js/jquery.waypoints.min.js"></script>
					<!-- Counters -->
					<script src="js/jquery.countTo.js"></script>


					<!-- MAIN JS -->
					<script src="js/main.js"></script>
		</table>
</body>

</html>