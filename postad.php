<?php include('server.php');?>
<html>

<head>
    <script src="js/jquery.min.js"></script>
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"
    />
    <script class="jsbin" src="js/jquery.min.js"></script>
    <script class="jsbin" src="js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        /*Hide all except first fieldset*/
        
        #helpdeskform .field2 {
            display: none;
        }
        /*inputs*/
        
        #helpdeskform input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
            width: 80%;
            color: #2C3E50;
            font-size: 13px;
        }
        
        #helpdeskform textarea {
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
            color: #2C3E50;
            font-size: 13px;
        }
        /*buttons*/
        
        #helpdeskform .action-button {
            width: 100px;
            font-weight: bold;
            border: 0 none;
            border-radius: 1px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }
        
        #helpdeskform .action-button:hover,
        #helpdeskform .action-button:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #900;
        }
        /*Form labels*/
        
        label.form-label {
            text-align: left;
        }
        /*Phone Label Align*/
        
        input#phone-field {
            margin-left: 26px;
        }
        /*E-mail Label Align*/
        
        input#email-field {
            margin-left: 24px;
        }
        
        .counter-field {
            font-size: 10px;
        }
        /*Divider*/
        
        hr {
            margin-bottom: 20px;
            padding: 0px;
            border-width: 2px;
            border-style: solid;
            border-color: #ccc;
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
    <aside id="fh5co-aside" role="complementary" class="border js-fullheight" style="overflow: hidden;">
        <br>
        <br>
        <h1 id="fh5co-logo">
            <a href="welcome.php"><img src="images/logo.png" width="135" height="100" alt="Free HTML5 Bootstrap Website Template"></a>
        </h1>
        <br>
        <nav id="fh5co-main-menu" role="navigation">
            <ul>
                <li class="fh5co-active"><a href="postad.php">Post an Ad</a></li>
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
    <form id="helpdeskform" action="addproduct.php" method="post" style="float:right; width:85.2%;" enctype="multipart/form-data">
        <fieldset class="field1 current">
            <h2>Post An AD</h2>
            <table width=100%>
                <p>
                    <label class="form-label title" for="title">Ad Title:</label>
                    <input type="text" name="title" id="title" placeholder="Your Ad Title in about 100 characters max" />
                </p>
                <p>
                    <label class="form-label price" for="price">Price:</label>
                    <input type="number" name="price" id="price" placeholder="in Rs." />
                </p>
                <hr>
                <p>
                    <label for="cat">Category:</label>
                    <select name="cat" id="cat">
                <option value="">Please select an option..</option>
                <option value="Bike">Bike</option>
                <option value="Book">Book</option>
                <option value="Car">Car</option>
                <option value="Mobile">Mobile</option>
                <option value="Laptop">Laptop</option>
                <option value="Furnishing">Furnishing</option>
                <option value="Sports Item">Sports Item</option>
                <option value="Accessories">Accessories</option>
                <option value="Clothing">Clothing</option>
                <option value="Electronics">Electronics</option>
            </select>
                </p>
                <p>
                    <label for="desp">Description:</label>
                    <textarea style="font-family: Arial, Veranda, Sans serif" name="desp" id="desp" cols="30" rows="10" placeholder="Short Description"></textarea>
                </p>
                <p>
                    <label for="img1">Upload Photos:</label>
                    <input class="joint upld" type="file" id="img1" name="img1"/>
                </p>
            </table>
            <p>
                <label for="review">
                <input type="button" name="review" class="review action-button" value="Review" />
            </label>
            </p>
        </fieldset>
        <fieldset class="field2">
            <!-- @TODO PREVIEW ALL FORM INPUTS -->
            <br><br>
            <p>Ad Title:
                <input type="text" class="show_title" readonly="readonly" />
            </p>
            <p>Price:
                <input type="number" class="show_price" readonly="readonly" />
            </p>
            <p>Category:
                <input type="text" class="show_cat" readonly="readonly" />
            </p>
            <p>Description:
                <input type="text" class="show_desp" readonly="readonly" />
            </p>
            <p>
                <input type="hidden" class="show_img1" readonly="readonly" />
            </p>
            <p style="float:left;">
                <label for="previous">
                <input type="button" name="previous" class="previous action-button" value="Previous"/>
            </label>
            </p>
            <p style="float:left; padding-left: 10px;">
                <label for="Submit">
                <input type="submit" value="Submit" name="submit" class="action-button" />
            </label>
            </p>
        </fieldset>
    </form>
    <script>
        $(document).ready(function () {

            $('.review').click(function () {
                var formValues = [];
                // get values from inputs in first fieldset
                $('.field1 :input').each(function () {
                    formValues.push($(this).val());
                });

                formValues.pop(); //remove the button from input values
                console.log(formValues);

                // set values in second fieldset
                $('.field2 :input').each(function (index) {
                    if (formValues[index]) {
                        $(this).val(formValues[index]);
                    }
                });

                $('.current').removeClass('current').hide().next().show().addClass('current');

            });

            $('.previous').click(function () {
                $('.current').removeClass('current').hide().prev().show().addClass('current');

            });



        });
    </script>
</body>

</html>