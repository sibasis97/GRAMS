<?php
session_start ();
$name = "";
$email_id = "";
$errors = array();
$user = "";
$otp="";
//conncet to the database
$db = mysqli_connect('localhost','root','','grams');
//checking the connection
if(mysqli_connect_errno())
{
die("connection failed" . mysqli_connect_error());
}	
//if the signup button is clicked
if(isset($_POST['register'])){
	  
	  // clean user inputs to prevent sql injections
  $name = trim($_POST['name']);
  $name = strip_tags($name);
  $name = htmlspecialchars($name);
  
  $email = trim($_POST['email_id']);
  $email = strip_tags($email_id);
  $email = htmlspecialchars($email_id);
  
  $password = trim($_POST['password']);
  $password = strip_tags($password);
  $password = htmlspecialchars($password);
  
   $regd_no = trim($_POST['regd_no']);
  $regd_no = strip_tags($regd_no);
  $regd_no = htmlspecialchars($regd_no);
  
   $phone = trim($_POST['phone_no']);
  $phone = strip_tags($phone);
  $phone = htmlspecialchars($phone);
  
   $conf_password = trim($_POST['conf_password']);
  $conf_password = strip_tags($conf_password);
  $conf_password = htmlspecialchars($conf_password);
  
  
	$name=mysql_real_escape_string($_POST['name']);
	$regd_no=mysql_real_escape_string($_POST['regd_no']);
	$email_id=mysql_real_escape_string($_POST['email_id']);
	$phone=mysql_real_escape_string($_POST['phone_no']);
	$password=mysql_real_escape_string($_POST['password']);
	$conf_password=mysql_real_escape_string($_POST['conf_password']);
	
	
	
	//ensure that form fields are filled correctly
	if(empty($name)){
		array_push($errors, "username is required");

	}
	elseif(empty($regd_no)){
		array_push($errors,"regd_no is required");
		
	}
	elseif(empty($email_id)){
		array_push($errors,"email_id is required");
	}
	elseif(empty($phone)){
		array_push($errors,"phone is required");
	}
	elseif(empty($password)){
		array_push($errors,"password is required");
	}
	elseif($password != $conf_password){
		array_push($errors,"The Two password dont match");
		
		//$_SESSION['message'] = "the two dont match";
	}
	 // first check the database to make sure 
  // a user does not already exist with the same username and/or email
	else {
	$user_check_query = "SELECT * FROM signup WHERE name = '$name' OR email = '$email_id' OR phone = '$phone' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
	}
  if ($user) {
	  // if user exists
    if ($user['name'] === $name) {
		
      array_push($errors, "Username already exists");
    }
    elseif ($user['email'] === $email_id) {
      array_push($errors, "email already exists");
    }
	elseif($user['phone'] === $phone) {
      array_push($errors, "Phone number  already exists");
    }

	
  }
	//if there are no errors, save user to database
      if(count($errors) == 0){
		  
		 
		  $sql = "INSERT INTO user VALUES ('$name','$regd_no','$email_id','$phone','$password','000')";
		  mysqli_query($db,$sql);
		  $_SESSION['success'] = "you are now logged in";
		   $_SESSION['email'] = $email;
		   header('location: signup_succ.php');
	  }
}	  
	  //if login button is clicked
	if (isset($_POST['login'])) {
	
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  if (empty($email)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
	 
  	$query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
		 
			$_SESSION['otp'] = rand(1000,9999);
			$query = "UPDATE user SET otp=".$_SESSION['otp']." WHERE email='$email' AND password='$password'";
			mysqli_query($db, $query);
			$rows = mysqli_fetch_assoc($results);
			print_r($rows);
			$_SESSION['email']=$rows['email'];	
			header('location: Phpmail/sendmail.php');
		

  	}else {
		
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

if (isset($_POST['forgot-password'])) {
	
	$email = mysqli_real_escape_string($db, $_POST['email']);
	if (empty($email)) {
		array_push($errors, "Email is required");
	}
  
	if (count($errors) == 0) {
	   
		$query = "SELECT * FROM user WHERE email='$email'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1) {
		   
			  $_SESSION['otp1'] = rand(1000,9999);
			  $query = "UPDATE user SET otp=".$_SESSION['otp1']." WHERE email='$email'";
			  mysqli_query($db, $query);
			  $rows = mysqli_fetch_assoc($results);
			  print_r($rows);
			  $_SESSION['email']=$rows['email'];	
			  header('location: Phpmail/sendforget.php');
		  
		}else {
		  
			array_push($errors, "Wrong username/password combination");
		}
	}
  }
	
		//logout
		if(isset($_GET['logout']))
		{
			session_destroy();
			unset($_SESSION['email']);
			header('location: index.php');
		}		
		
	if(isset($_POST['otp'])){
		$name = $_SESSION['email'];
			$query = "SELECT * FROM user WHERE email='".$name."' AND otp=".$_POST['otp_value'].";";
			$results = mysqli_query($db, $query);
			$_SESSION['username'] = $name;
			if($results){
			if (mysqli_num_rows($results) == 1) {
				header('location: welcome.php');
			
			}else {
			
				array_push($errors, "Wrong username/password combination");
			}
		}else{

		echo 'some error occurred';
		}
		
	}
	
	
	if(isset($_POST['otp1'])){
		$email = $_SESSION['email'];
			$query = "SELECT * FROM user WHERE email='".$email."' AND otp=".$_POST['otp_value'].";";
			$results = mysqli_query($db, $query);
			$_SESSION['email'] = $email;
			if($results){
			if (mysqli_num_rows($results) == 1) {
				header('location: resetpass.php');
			
			}else {
			
				array_push($errors, "Wrong username/password combination");
			}
		}else{

		echo 'some error occurred';
		}
		
	}

	if(isset($_POST['reset'])){
		$pass = mysqli_real_escape_string($db, $_POST['pass']);
  $cnfmpass = mysqli_real_escape_string($db, $_POST['cnfmpass']);
  $email = $_SESSION["email"];
  if (empty($pass)) {
  	array_push($errors, "Password is required");
  }
  if (empty($cnfmpass)) {
  	array_push($errors, "Confirm Password is required");
  }

  if ($pass != $cnfmpass) {
	  array_push($errors, "Password do not match");
  }

  if (count($errors) == 0) {
	 
  	$query = "UPDATE user SET password='$pass' WHERE email='$email'";
  	$results = mysqli_query($db, $query);
	header('location: index.php');
		

  	}else {
		
  		array_push($errors, "Wrong username/password combination");
  	}
  }
		

?>

