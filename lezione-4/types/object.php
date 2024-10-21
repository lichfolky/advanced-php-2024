<?php
require_once "../models/User.php";

function printProperties(object $obj): string {
    $str = "";

    foreach (get_object_vars($obj) as $property => $value) {
        $str .= "<strong>$property</strong>:<br>$value<br>";
    }

    return $str;
}


//$io = new User(1, "Mattia", "Folcarelli");
//$io->privateLog();
