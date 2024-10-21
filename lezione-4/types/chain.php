<?php
require_once "../models/User.php";

$io = new User(1, "Mattia", "Folcarelli");
$io->addVoto(3);
$io->addVoto(1);
$io->addVoto(3)->addVoto(3);
print_r($io->getVoti());
