<?php

namespace Unifi\Model;

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
        $this->users[$user->id] = $user;
    }

    public function unenroll($user) {
        unset($this->users[$user->id]);
    }

    public function getId() {
        return $this->id;
    }

    public function getUsers() {
        return $this->users;
    }

    // Notify to the observers
    public function notify() {
        $users = $this->getUsers();
        for ($i = 0; $i < count($users); $i++) {
            $users[$i]->update($this);
        }
    }
}


//$course = new CourseWithUsers(1, "PHP");
//$course2 = new SimpleCourse(2, "PHP2");
// echo $course->getID() . " " . $course2->getID();
//echo $course->getID() . " " . $course2->getID();
