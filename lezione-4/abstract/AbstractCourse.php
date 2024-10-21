<?php
abstract class AbstractCourse {

    public function __construct(
        private $name,
        private $description,
        private $teacher
    ) {
    }

    function getDescription() {
        return $this->description;
    }

    function getName() {
        return $this->name;
    }

    function getTeacher() {
        return $this->teacher;
    }

    abstract protected function getLocation();
}


class RemoteCourse extends AbstractCourse {
    private $onlinelocation;

    public function __construct($name, $description, $teacher, $onlinelocation) {
        parent::__construct($name, $description, $teacher);
        $this->onlinelocation = $onlinelocation;
    }

    public function getLocation() {
        return $this->onlinelocation;
    }
}

class ClassroomCourse extends AbstractCourse {

    public function __construct($name, $description, $teacher, private $room, private $address) {
        parent::__construct($name, $description, $teacher);
    }

    public function getLocation() {
        return $this->address . " " . $this->room;
    }
}

$remote = new RemoteCourse("PHP", "Adv PHP", "Mattia", "www.BigBlueButton");
echo $remote->getLocation();
$locale = new ClassroomCourse("PHP", "Adv PHP", "Mattia", "A3", "Via roma");
echo $locale->getLocation();
