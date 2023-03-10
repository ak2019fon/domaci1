
<?php

require 'dbBroker.php';
require 'model/coach.php';

if(isset($_POST['submit'])){

	$userName = $_POST['userName'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$pass1 = $_POST['password1'];
	
	$result = Coach::check($userName, $conn);

	if(mysqli_num_rows($result) != 0){
		echo '<script type="text/javascript">alert("Korisnicko ime je zauzeto!")</script>';
	}else {
		Coach::add($userName, $email, $pass, $conn);
		echo '<script type="text/javascript">alert("Uspesno ste se registrovali!")</script>';
		//nakon register ide na login
		header("Location: login.php");
	}

}

?>

<!DOCTYPE html>
<html>
<head>
<title>SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/register_style.css">
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">

</head>
<body>
	
	<div class="main-w3layouts wrapper">
		<h1>SignUp form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="#" method="post">
					<input class="text" type="text" name="userName" required placeholder="Username">
					<input class="text email" type="email" name="email" required placeholder="Email">
					<input class="text" type="password" name="password" required placeholder="Password">
					<input class="text w3lpass" type="password" name="password1" required placeholder="Confirm Password" >
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input name = "submit" type="submit" value="SIGNUP">
				</form>
				<p>Already have an account? <a href="login.php">Login Now!</a></p>
			</div>
		</div>
		
		
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	
</body>
</html>