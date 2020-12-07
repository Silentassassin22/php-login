<?php

$website = $config['website'];
$database = $config['database'];


$host = $database['host'];
$dbname = $database['schema'];
$username = $database['username'];
$password = $database['password'];

try {
    $conn = new PDO("mysql:host=".$host.";dbname=".$dbname, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($website['error'] == "true") {
        echo "Connected successfully";
    }
} catch (PDOException $e) {
    if ($website['error'] == "true") {
        echo "Connection failed: " . $e->getMessage();
    }
}

