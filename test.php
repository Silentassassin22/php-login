<?php
var_dump(password_hash("password", PASSWORD_DEFAULT));
$password = "$2y$10\$EW3MB4kh5Fh36ndV.BXNHuHT7YNKHH02Vk56swjhYooI360a6EiUi";
var_dump(password_verify("password", $password));

?>