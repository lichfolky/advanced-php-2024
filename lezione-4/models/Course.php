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

class GroupUsers {
    private array $items = [];
    public function addUser(User $user) {
        $this->items[] = $user;
    }
}

class CourseWithUsers extends Course {
    private $users = [];

    function enroll(User $user) {
        $this->users[] = $user;
    }

    /*
    function enrollClass(GroupUsers $users) {
        foreach ($users as $user) {
            $this->users[] = $user;
        }
    }*/

    function enrollClass(array $users) {
        foreach ($users as $user) {
            if ($user instanceof User) {
                $this->users[] = $user;
            } else {
                throw new TypeError($user . " is not an User");
            }
        }
    }
}
