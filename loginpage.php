<?php
$errorMessage = '';

if (isset($_POST['login']) && $_POST['login'] == 'Login') {
	include 'testconnect.php';
	$idNumber = $_POST['idnumber'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM `user` WHERE idNumber = '$idNumber' and password = '$password'";
	$result = $db_con->query($sql);

	if ($result->num_rows == 1) {
		header("Location: Customer Interface.html");
		exit;
	} else {
		$errorMessage = "Incorrect username and password";
	}
}

?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 	<html lang="en"> <!--<![endif]-->
<head>

	<!-- General Metas -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	<!-- Force Latest IE rendering engine -->
	<title>Login Form</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/layout.css">
	
</head>
<body>

	<div class="notice">
		<a href="" class="close">close</a>
		<!--<p class="warn">Whoops! We didn't recognise your username or password. Please try again.</p>-->
	</div>



	<!-- Primary Page Layout -->

	<div class="container">
		
		<div class="form-bg">
			<form action="loginpage.php" method="post">
				<div class="header">
					<h6>
						THE FACULTY OF MEDICAL SCIENCES
					</h6>
					<h6>
						Request Manager System
					</h6>
					<img class="sitelogo" src="logo.png"/>
				</div>
				<br>
				<p><?php echo $errorMessage; ?></p>
				<p><input type="text" name="idnumber" placeholder="ID Number"></p>
				<p><input type="password" name="password" placeholder="Password"></p>
				<label for="remember">
				  <input type="checkbox" id="remember" value="remember" />
				  <span>Remember me on this computer</span>
				</label>
				<input type="Submit" name="login" value="Login" />
			<form>
		</div>

	
		<p class="forgot">Forgot your password? <a href="">Click here to reset it.</a></p>


	</div><!-- container -->

	<!-- JS  -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script>
	<script src="js/app.js"></script>
	
<!-- End Document -->
</body>
</html>