<?php
require('classes/misc.class.php');
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	<title>Login Page</title>
    <script type="text/javascript">
        const debug = false;

        $(document).ready(function() {   //same as: $(function() {
            const buttons = document.getElementsByClassName(".debug");
            if(debug){
                buttons.style.display = "block";
            } else{
                buttons.style.display = "none";
            }
        });
        function login(action) {
            $.ajax({
                url:"test.php", //the page containing php script
                type: "POST", //request type
                data: {action: action},
                success:function(){
                    window.location.replace("/");
                }
            });
        }
    </script>
</head>
<body>
	<h1>Super Secure Login Page!</h1>
	<h1><?php if(isset($_SESSION['username'])){echo 'You are currently logged in as '.$misc->clean($_SESSION['username']);}else{echo 'You are not logged in!';}?></h1>
	<button type="button" onclick="location.href='login.php'" id="login">Login</button>
	<button type="button" onclick="location.href='signup.php'" id="signup">Signup</button>
    <button type="button" class="debug" onclick="login(0)" id="logout">Logout</button>
    <button type="button" class="debug" onclick="login(1)" id="">Log Me In Now!</button>
</body>
</html>