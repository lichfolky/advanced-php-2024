<?php

declare(strict_types=1); //sempre nella prima riga 1 per attivarlo

require_once "../models/User.php";
require_once "../models/Course.php";

$user = new Teacher(0, "Mattia", "Folcarelli", new DateTime("1986-07-15"));
$user2 = new Teacher(0, "Mattia", "Folcarelli");
$course = new Course("PHP", "Adv PHP", $user);
$course2 = new Course("PHP", "Adv PHP", $user2);


// echo $course->getTeacher()->getBirthDay()->format("Y-m-d");

/*
$bd = $course->getTeacher()->getBirthDay();
if (isset($bd)) {
    echo $bd->format("Y-m-d");
}
*/
echo $course->getTeacher()->getBirthDay()?->format("Y-m-d");
echo $course2->getTeacher()->getBirthDay()?->format("Y-m-d") . "!";

$nome = null;
$student = isset($nome) ? $nome : "Guest";
$student = $nome ?? "Guest";

$bd = $course->getTeacher()->getBirthDay() ?? new DateTime();
echo $bd->format("Y");
