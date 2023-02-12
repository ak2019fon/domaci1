<?php

require 'dbBroker.php';
require 'model/coach.php';

session_start();

if(isset($_POST['submit'])){

	$userName = $_POST['userName'];
	$pass = $_POST['pass'];

	$result = Coach::logIn($userName, $pass, $conn);
  

	if($result->num_rows != 0){

		echo '<script type="text/javascript">alert("Uspesno ste se prijavili")</script>';
		$_SESSION['coach'] = $userName;
    //nakon logina ide na home
    //otvaras na desni klik serve project i upaljen xammp
		header("Location: home.php");
		exit();	
		
	}else{
		echo '<script type="text/javascript">alert("Netacna lozinka ili korisnicko ime")</script>';
	}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login_style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 
  
    <title>Login page</title>
</head>
<body>



<div class="wrapper fadeInDown">
  <div id="formContent">
    

    
    <div style = "height: 50%; width: 60%;" class="fadeIn first">
      <img  src="img/35f860c7f651acc4402293cf4e6898c5.jpg" id="icon" alt="User Icon" />
    </div>

    
    <form method="post" action="">
      <input type="text" id="login" class="fadeIn second" name="userName" required placeholder="Username">
      <input type="password" id="password" class="fadeIn third" name="pass" required placeholder="Password">
      <input style="cursor: pointer;" type="submit" name="submit" class="fadeIn fourth" value="Log In">
    </form>

  
    <div id="formFooter">
      <a class="underlineHover" href="register.php">Not a member?</a>
    </div>

  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>