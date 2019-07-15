<?php include('server.php');?>
<?php
if(isset($_SESSION["name"]) && !empty($_SESSION["name"])) {
   header('location: about2.php');
}
?>
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
	<title>About : GRAMS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive"
	/>
	<meta name="author" content="FreeHTML5.co" />



	<!-- Facebook and Twitter integration -->
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

<body>

	<div id="fh5co-page">

		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<div class="topnav w3-bar w3-left" style="position: fixed; top: 0px;">
			<span style="padding:8px 16px;float:left;width:auto;border:none;display:block;outline:0;color:#cc0000"><b>Let's Share &amp; Evolve!!!</b></span>
			<a class="active w3-bar-item w3-button" href="login.php">Login</a>
			<a class="active w3-bar-item w3-button" href="signup.php">Signup</a>
			<div class="search-container">

				<form action="search.php" method="post">
					<button id="close-image" type="submit">
						<img src="logo/search.png">
					</button>
					<input type="text" placeholder="Search term here" name="search" id="search"
						class="w3-bar-item w3-button w3-right" style="color: white;"/>
				</form>
			</div>
		</div>
		<aside id="fh5co-aside" role="complementary" class="border" style="overflow: hidden;">
			<br> <br>
			<h1 id="fh5co-logo">
				<a href="index.php"><img src="images/logo.png" alt="Free HTML5 Bootstrap Website Template" height="100" width="135"></a>
			</h1>
			<br> 
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
                	<li><a href="login.php">Post an Ad</a></li>
					<li class="fh5co-active"><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact</a></li>
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

		<div id="fh5co-main">

			<div class="fh5co-narrow-content">
				<div class="row">
					<div>
						<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">About Us GRAMS <span>The Online Product Trading Platform</span></h2>
						<p class="fh5co-lead animate-box" data-animate-effect="fadeInLeft">The college community has been one of the active ones when it comes to helping each other. As there is an enormous
							number of students as well as faculties and other supporting staffs, it is difficult to trade for a reusable product.</p>
						<p class="animate-box" data-animate-effect="fadeInLeft"> Students majorly tend to use the second-hand products as they get all their work done in a lesser price than original
							ones’. But it is not possible to get information and trade easily. This “Online Products Trading Community” has been
							designed to overcome such scenario. It is platform that has been developed to be the guide for a buy-sell between
							individuals inside the community. It becomes easier for a person to sell its used products like books, stationary,
							vehicles, electronic items, etc., simply by putting all its details on the website. Now a person searching for a reusable
							product simply finds out through the website. In a way it saves a lot of time and the seller being inside the community
							can communicate easily now. In this modern era, where waste management is a bigger concern, we can promote product
							reusability which saves money and of course our mother nature.
						</p>
					</div>
					<div class="col-md-6 col-md-push-1 animate-box" data-animate-effect="fadeInLeft">
					</div>
				</div>

			</div>

			<div class="fh5co-narrow-content  animate-box" data-animate-effect="fadeInLeft">
				<h2 class="fh5co-heading">The Team</span>
				</h2>

				<div class="row">
					<div class="col-md-4 fh5co-staff">
						<h3>Sibasis Panigrahy</h3>
						
						
					</div>
					
					<div class="col-md-4 fh5co-staff">
						<h3>Ghirit Kumar Sahoo</h3>
						
					</div>
					<div class="col-md-4 fh5co-staff">
						<h3>Joydeep Mahato</h3>
						
					</div>
					<div class="col-md-4 fh5co-staff">
						<h3>Anurag Sinha</h3>
						
					</div>
				</div>
			</div>

		<div class="fh5co-narrow-content">
						<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">This Is What <span>We Love To Do</span></h2>
						<div class="row">
							<div class="col-md-6">
								<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
									<div class="fh5co-icon">
										<i class="icon-strategy"></i>
									</div>
									<div class="fh5co-text">
										<h3>Strategy</h3>
										<p>The best way to look stylish on a budget is to try second-hand, bargain hunting, and vintage. 
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
									<div class="fh5co-icon">
										<i class="icon-telescope"></i>
									</div>
									<div class="fh5co-text">
										<h3>Explore</h3>
										<p>GRAMS is platform connects local people to buy, sell or exchange used goods and services by making it fast and easy for anyone to post a listing through their mobile phone or on the web.
										</p>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
									<div class="fh5co-icon">
										<i class="icon-circle-compass"></i>
									</div>
									<div class="fh5co-text">
										<h3>Direction</h3>
										<p>Our Duty is to provide Services towards the prosperity of collage by reuse the product used by folks. 
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
									<div class="fh5co-icon">
										<i class="icon-tools-2"></i>
									</div>
									<div class="fh5co-text">
										<h3>Expertise</h3>
										<p>Buy, sell or exchange used goods and services by making it fast and easy. 
										</p>
									</div>
								</div>
							</div>

						</div>
					</div>





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

</body>

</html>