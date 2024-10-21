<?php
class Course {

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

    public function __toString() {
        return $this->name;
    }
}
