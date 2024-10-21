<?php
require_once "../traits/Loggable.php";


class User {
    use Loggable;

    private array $voti = [];

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

    public function addVoto(int $voto): self {
        $this->voti[] = $voto;
        return $this;
    }
    public function getVoti(): array {
        return $this->voti;
    }
}


class Teacher extends User {
}
