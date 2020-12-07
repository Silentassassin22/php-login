<?php

class user{
    private $conn;

    public function __construct($conn) { #Grab DB connection from database.php
        $this->conn = $conn;
    }

    public function checkUsernameInUse($username){
        $username = trim($username); #Remove Extra Spaces
        $username = stripslashes($username); #Remove \
        $username = htmlspecialchars($username); #Prevent SQL Injection
        $username = iconv('US-ASCII//TRANSLIT', 'UTF-8//IGNORE', $username);

        $query = $this->conn->prepare("SELECT * FROM user WHERE username = :username");
        $query->BindParam(":username", $username);
        $query->execute();

        if($query->rowCount() > 0){
            return true;
        }
        else {
            return false;
        }

    }

    public function uniqueUID(){
        do {
            $status = false;
            try {
                $uid = bin2hex(random_bytes(16));
            } catch (Exception $e) {
                return $e;
                break;
            }

            if($this->checkUID($uid)){
                $status = true;
                return $uid;
                break;
            }
        } while($status = false);
    }

    public function checkUID($uid){
        $query = $this->conn->prepare("SELECT * FROM users WHERE uid = :uid");
        $query->BindParam(":uid", $uid);
        $query->execute();
        if($query->rowCount() == 0){
            return true;
        } else {
            return false;
        }
    }

    public function createAccount($email, $username, $password, $uuid, $ip){
        return true;
    }
}