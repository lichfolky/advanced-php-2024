<?php
require_once "../models/Course.php";


// Definizione del trait per corsi online
trait Online {
    public function onlineAccess() {
        echo "Accesso alla piattaforma online.<br>";
    }
}

// Definizione del trait per corsi in aula
trait InClassroom {
    public function classroomAccess() {
        echo "Accesso alla lezione in aula.<br>";
    }
}

class MixedCourse extends Course {
    use InClassroom, Online;
}

$myCourse = new MixedCourse("PHP", "Adv PHP", "Mattia");
$myCourse->onlineAccess();
$myCourse->classroomAccess();
