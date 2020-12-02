<?php

session_start();
var_dump($_SESSION);

$usernameset = "silentassassin";
$passwordset = "password";
$hash = '$2y$10$YB3fRergCoA2enxlPUK6eOap8f26LFcnRIBmLBzQBZRI9VAoQx2.K';

if(isset($_POST['username']) and isset($_POST['password'])){
	var_dump(password_verify($password, $hash));
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['authed'] = $_POST['true'];
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
</head>
<body>
	<form method="POST">
        <label>Username: <input type="text" name="username"></label>
        <label>Password: <input type="text" name="password"></label>
		<button type="submit">Submit</button>
	</form>
</body>
</html>