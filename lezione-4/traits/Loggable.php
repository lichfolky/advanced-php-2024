<?php

// require_once "../models/User.php";
trait Loggable {
    public function log() {
        echo $this;
    }
}

//$io = new User(1, "Mattia", "Folcarelli");
//$io->log();
