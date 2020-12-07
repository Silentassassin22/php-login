<?php
date_default_timezone_set("America/New_York");
set_include_path('H:/Coding/Repos/php-login/');
$config = require("config.php");

require 'database.php';

require(__DIR__."/classes/user.class.php");
$user = new user($conn);

require(__DIR__."/classes/authenticate.class.php");
$auth = new auth($conn);

require(__DIR__."/classes/misc.class.php");
$misc = new misc();

