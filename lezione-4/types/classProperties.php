<?php
require_once "../models/User.php";

$io = new User(1, "Mattia", "Folcarelli");
echo $io->getId() . "<br>";

$io = new User("2", "Mattia", "Folcarelli");
echo $io->getId() . "<br>";

$io = new User(3.0, "Mattia", "Folcarelli");
echo $io->getId() . "<br>";
