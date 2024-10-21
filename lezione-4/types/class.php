<?php

declare(strict_types=1); //sempre nella prima riga 1 per attivarlo

require_once "../models/User.php";
require_once "../models/Course.php";

$user = new Teacher(0, "Mattia", "Folcarelli");
$course = new Course("PHP", "Adv PHP", $user);
echo $course->getTeacher()->getLastName();
