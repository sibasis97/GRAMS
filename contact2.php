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
	<title>Contact Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive"
	/>
	<meta name="author" content="FreeHTML5.co" />
	<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>


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
	<style>
 
       #map {
        height: 500px;
        width: 100%;
       }
    </style>
</head>

<body>
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
		<aside id="fh5co-aside" role="complementary" class="js-fullheight" style="overflow: hidden;">
			<br> <br>
			<h1 id="fh5co-logo">
				<a href="welcome.php"><img src="images/logo.png" alt="Free HTML5 Bootstrap Website Template" height="100" width="135"></a>
			</h1>
			<br> 
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
                	<li><a href="postad.php">Post an Ad</a></li>
					<li><a href="about2.php">About</a></li>
					<li class="fh5co-active"><a href="contact2.php">Contact</a></li>
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

			 <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 0, lng: 0};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPj-RRLUAXuFAJRbicX187dTICDUedPxU&callback=initMap">
    </script>

			<div class="fh5co-more-contact">
				<div class="fh5co-narrow-content">
					<div class="row">
						<div class="col-md-4">
							<div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="fh5co-icon">
									<i class="icon-envelope-o"></i>
								</div> <br> <br>
								<div class="fh5co-text">
									<p><a href="#">info@grams.com</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="fh5co-icon">
									<i class="icon-map-o"></i>
								</div> <br> <br>
								<div class="fh5co-text">
									<p> <a href="www.cvrce.edu.in">C. V. Raman College</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="fh5co-icon">
									<i class="icon-phone"></i>
								</div> <br> <br>
								<div class="fh5co-text">
									<p><a href="tel://">+123 456 7890</a></p>
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
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>



	<!-- MAIN JS -->
	<script src="js/main.js"></script>

</body>

</html>