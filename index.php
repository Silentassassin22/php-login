<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>Super Secure Login Page!</h1>
	<h1>You are currently logged in as <?=$_SESSION['username']?></h1>
	<button type="button" onclick="location.href='login.php'" id="login">Login</button>
	<button type="button" onclick="location.href='signup.php'" id="signup">Signup</button>
</body>
</html>