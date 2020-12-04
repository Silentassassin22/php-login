<?php
session_start();
if($_SESSION['authed']){header("Location: /");};

if(isset($_POST['username']) and isset($_POST['password'])){
	$password = trim($_POST['password']);
	$password = stripslashes($password);
	$password = htmlspecialchars($password);
	$password = password_hash($password, PASSWORD_DEFAULT);
	echo($password);
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<title>Signup</title>
</head>
<body>
	<form method="POST">
		<label>Username: <input type="text" name="username"></label>
		<label>Password: <input type="text" name="password"></label>
		<button type="submit">Submit</button>
	</form>
</body>
</html>