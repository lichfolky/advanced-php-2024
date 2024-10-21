<?php
require_once "../types/object.php";
// require_once "../models/User.php";
trait Loggable {
    public function log() {
        echo printProperties($this);
    }

    public function privateLog() {
        $str = "";

        foreach (get_object_vars($this) as $property => $value) {
            $str .= "<strong>$property</strong>:<br>$value<br>";
        }

        echo $str;
    }
}

//$io = new User(1, "Mattia", "Folcarelli");
//$io->log();
