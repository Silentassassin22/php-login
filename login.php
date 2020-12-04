<?php

session_start();
if($_SESSION['authed']){header("Location: /");};
var_dump($_SESSION);

$usernameset = "silentassassin";
$passwordset = "password";
$hash = '$2y$10$.bjB/XNQ2ZfACiBk8Z23A.KSO9mhGzOgqyVyU700204ag1truSqrW';

if(isset($_POST['username']) and isset($_POST['password'])){
	$USERNAME = $_POST['username'];
	$PASSWORD = $_POST['password'];
	print("Authed?:".password_verify($PASSWORD, $hash));
	if(password_verify($PASSWORD, $hash)){
	    //Logged In!
        echo "Logged in!";
        $_SESSION['username'] = $USERNAME;
        $_SESSION['authed'] = true;
        header('Location: index.php');
    }
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