<?php
require_once __DIR__ . '\..\..\vendor\autoload.php';

use Unifi\Model\User;

$user = new User(1, "Mattia", "Folcarelli");
$serialized = serialize($user);
echo $serialized . "<br>";
$unserialized = unserialize($serialized);
echo $unserialized->getName() . "<br>";

echo json_encode($user);
