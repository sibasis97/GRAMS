<?php
require ('server.php');
?><div id="fh5co-main">
<html>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
        <form action = "checkOtp.php" method = "POST">
        <center>  <span class="login100-form-title p-b-49">
            Enter Your OTP
        </span>
        </center>
                  <h1>
                  <?php include ('errors.php'); ?>
                  </h1><center>
                <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                    <span class="label-input100">OTP</span>
                    <input class="input100" type="text" name = 'otp_value' placeholder="Type your OTP">
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>
                </div>
                <br>
                <div class="container-login100-form-btn">
								<div class="wrap-login100-form-btn">
									<div class="login100-form-bgbtn"></div>
                                    <center>	<button type='submit' name='otp'class="login100-form-btn" >
								Submit
							</button></center>
								</div>
							</div>
                            </div>
                            </div>
                            </div>

</form>
</html>