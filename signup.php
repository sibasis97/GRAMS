<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign up : New Account</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nitro &mdash; Free HTML5 Bootstrap Website Template by FreeHTML5.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" -/>
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
<?php include('errors.php'); ?>
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
        <aside id="fh5co-aside" role="complementary" class="border js-fullheight" style="overflow: hidden;">
            <br><br>
            <h1 id="fh5co-logo">
                <a href="index.php"><img src="images/logo.png" height="100" width="135" alt="Free HTML5 Bootstrap Website Template"></a>
            </h1>
            <br>
            <nav id="fh5co-main-menu" role="navigation">
                <ul>
                    <li><a href="login.php">Login</a></li>
                    <li class="fh5co-active"><a href="signup.php">Sign Up</a></li>

                </ul>
            </nav>

            <div class="fh5co-footer">
                <p><small> All Rights Reserved from </span> <span>GRAMS</span>  </small></p>
                <ul>
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                </ul>
            </div>

        </aside>

        <div id="fh5co-main">

            <div class="limiter">
                <div class="container-login100">
                    <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                        <form action="signup.php" method="post">
                           
                            <span class="login100-form-title p-b-49">

						Sign Up 
					</span>
                                  <?php include('errors.php'); ?>
                            <div class="wrap-input100 validate-input m-b-23" data-validate="Name is reauired">
                                <span class="label-input100">Name</span>
                                <input class="input100" type="text" name="name" placeholder="Type your Name" maxlength="30" value= "<?php echo $name?>" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{3,20}$" title="enter atleast 4 character">
                            
                                <span class="focus-input100" data-symbol="&#xf206;"></span>
                            </div>
                            <div class="wrap-input100 validate-input m-b-23" data-validate="E-mail ID is reauired">
                                <span class="label-input100">E-mail ID</span>
                                <input class="input100" type="email" name="email_id" placeholder="Type your E-mail ID" maxlength="30" value="<?php echo $email_id?>">
                                <span class="focus-input100" data-symbol="&#xf206;"></span>
                            </div>

                            <div class="wrap-input100 validate-input m-b-23" data-validate="Phone Number is reauired">
                                <span class="label-input100">Phone Number</span>
                                <input class="input100" type="text" name="phone_no" placeholder="Type your Phone Number" maxlength="10" pattern="[1-9]{1}[0-9]{9}" title="number should be 10 digit starting with 7 or 8 or 9">
                                <span class="focus-input100" data-symbol="&#xf206;"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate="Regd No. is required">
                                <span class="label-input100">Regd. Number</span>
                                <input class="input100" type="number" name="regd_no" placeholder="Type your Regd. Number" maxlength="10" >
                                <span class="focus-input100" data-symbol="&#xf190;"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate="Password is required">
                                <span class="label-input100">Password </span>
                                <input class="input100" type="password" name="password" placeholder="Type your Password" maxlength="12"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="password must contain one capital and one special characters">
                                <span class="focus-input100" data-symbol="&#xf190;"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate="Password is require">
                                <span class="label-input100">Confirm Password</span>
                                <input class="input100" type="password" name="conf_password" placeholder="Retype your Password" maxlength="12">
                                <span class="focus-input100" data-symbol="&#xf190;"></span>
                            </div>

                            <br>
                            <br>
                            <div class="container-login100-form-btn">
                                <div class="wrap-login100-form-btn">
                                    <div class="login100-form-bgbtn"></div>
                                    <button type="submit" class="login100-form-btn" name="register">
								REGISTER
							</button>
                                </div>
                            </div>
<h3><?php include('errors.php'); ?></h3>
                            <div class="txt1 text-center p-t-54 p-b-20">
                                <span>
							
						</span>
                            </div>



                            <div class="flex-col-c p-t-155">
                                <span class="txt1 p-b-17">
							
						</span>

                                <a href="#" class="txt2">

                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div id="dropDownSelect1"></div>

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
    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>