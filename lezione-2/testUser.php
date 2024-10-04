<?php
require __DIR__ . '\Model\User.php';

use Unifi\Model\{User, Teacher};

$utente = new Teacher(1, "Mattia", "PHP", mail: "mattia.folcarelli@gmail.com");
//echo $utente::$num . "<br>";
echo $utente->getName() . "<br>";
//$utente->name = "Beppe";
$utente2 = new User(2, "Beppe");
echo $utente2->getName() . "<br>";

//echo $utente->name;
//echo $utente::$num . "<br>";
//echo User::$num . "<br>";

echo $utente . "!";
