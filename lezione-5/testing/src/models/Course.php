<?php

namespace Unifi\Models;

require_once "User.php";

use Exception;

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
    private array $users = [];

    public function __construct(
        public string $name,
        public string $description,
        private int $maxUsers,
        public ?User $teacher = null
    ) {
        parent::__construct($name, $teacher);
    }

    public function getUsers(): array {
        return $this->users;
    }

    public function enroll(User $user) {
        if (count($this->users) >= $this->maxUsers) {
            throw new Exception("Impossibile iscrivere lo studente: corso già pieno!");
        } else {
            /*if (isset($this->users[$user->id])) {
                throw new Exception("Impossibile iscrivere lo studente, utente già registrato");
            }*/
            $this->users[$user->id] = $user;
        }
    }

    public function unenroll(User $user) {
        unset($this->users[$user->id]);
    }
}
