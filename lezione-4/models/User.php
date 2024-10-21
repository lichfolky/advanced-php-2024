<?php
require_once "../traits/Loggable.php";


class User {
    use Loggable;

    public function __construct(
        public int $id,
        private string $name,
        private string $lastName
    ) {
    }

    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

    public function __toString(): string {
        return "$this->name $this->lastName";
    }
}
