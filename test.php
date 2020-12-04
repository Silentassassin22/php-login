<?php
session_start();
var_dump($_POST);
switch ($_POST['action']) {
    case '1':
        $_SESSION["username"] = "silentassassin";
        $_SESSION["authed"] = true;
        echo "Logged in!";
        break;
    case '0':
        $_SESSION["username"] = "";
        $_SESSION["authed"] = false;
        session_destroy();
        break;
}
/*session_start();

$_SESSION["username"] = "silentassassin";
$_SESSION["authed"] = true;
header("Refresh: 5; url=/");*/


/*<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
</head>
<body>
    <h1>Logging Out!</h1>
</body>
</html>*/


