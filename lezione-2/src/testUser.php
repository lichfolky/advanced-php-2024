<?php
require __DIR__ . '\Model\User.php';
require __DIR__ . '\Model\Course.php';
//require __DIR__ . '/vendor/autoload.php';

use Unifi\Model\{User, Teacher, CourseWithUsers, CourseInterface};

//$test = __DIR__ . '\..\vendor\autoload.php';

$utente = new Teacher(0, "Mattia", "PHP", mail: "mattia.folcarelli@gmail.com");
//echo $utente::$num . "<br>";
echo $utente->getName() . "<br>";
//$utente->name = "Beppe";
$utente2 = new User(1, "Beppe");
echo $utente2->getName() . "<br>";

//echo $utente->name;
//echo $utente::$num . "<br>";
//echo User::$num . "<br>";

$corso = new CourseWithUsers(1, "PHP");
$corso->enroll($utente);
$corso->enroll($utente2);
$corso->notify();
