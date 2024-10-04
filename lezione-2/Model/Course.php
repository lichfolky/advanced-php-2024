<?php

interface CourseInterface {
    public function getId();
}

class SimpleCourse implements CourseInterface {
    public function __construct(
        public $id,
        public $title,
        public $description = ""
    ) {
    }
    public function getId() {
        return $this->id;
    }
}

class CourseWithUsers implements CourseInterface {
    public function __construct(
        public $id,
        public $title,
        public $description = "",
        private $users = []
    ) {
    }

    public function enroll($user) {
        $this->users[] = $user;
    }

    public function getId() {
        return $this->id;
    }
}


$course = new CourseWithUsers(1, "PHP");
$course2 = new SimpleCourse(2, "PHP2");
echo $course->getID() . " " . $course2->getID();
