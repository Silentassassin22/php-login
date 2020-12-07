<?php
require('init.php');
session_start();
if(isset($_SESSION['authed'])){header("Location: /");};

if(isset($_POST['username']) and isset($_POST['password'])){
    $username = $misc->clean($_POST['username']);
    $password = $_POST['password'];

    //-------------------------
    //     Username Checks
    //-------------------------

    if($user->checkUsernameInUse($username)){echo 'Username already in use!'; return;} //Is username in use?
    if(!preg_match("/^[a-z0-9_-]{3,17}$/i",$username)){echo 'Username is invalid!';return;} //Is username invalid?

    //-------------------------
    //     Password Checks
    //-------------------------
    $uuid = $user->uniqueUID();
    $email = "test";
    $ip = "test";

    if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d!$\/%@#*&$^_]{8,255}$/', $password)){echo 'Password is invalid!'; return;} //Is password invalid?

    try{
        $user->createAccount($email, $username, $password, $uuid, $ip);

        throw new Exception("Something went wrong!");
    } catch (Exception $e){
        if($config['website']['error']){
            echo $e;
        }
    }





}

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<title>Signup</title>
</head>
<body>
	<form method="POST">
        <label>Email: <input type="text" name="email" placeholder="user@domain.com"></label>
		<label>Username: <input type="text" name="username" placeholder="username"></label>
		<label>Password: <input type="text" name="password" placeholder="password"></label>
		<button type="submit">Submit</button>
	</form>
</body>
</html>