<?php
require_once "User.php";
class Course {

    public function __construct(
        private string $name,
        private string $description,
        private Teacher $teacher
    ) {
    }

    function getDescription(): string {
        return $this->description;
    }

    function getName(): string {
        return $this->name;
    }

    function getTeacher(): Teacher {
        return $this->teacher;
    }

    public function __toString(): string {
        return $this->name;
    }
}
