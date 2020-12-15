<?php
class misc
{
    public function clean($text){
        $text = trim($text); #Remove Extra Spaces
        $text = stripslashes($text); #Remove \
        $text = htmlspecialchars($text); #Prevent SQL Injection
        $text = iconv('US-ASCII//TRANSLIT', 'UTF-8//IGNORE', $text);
        return $text;
    }
}