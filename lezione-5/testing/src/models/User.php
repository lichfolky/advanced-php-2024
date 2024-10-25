<?php

namespace Unifi\Models;


use DateTime;

class User {

    private array $voti = [];

    public function __construct(
        public int $id,
        private string $name,
        private string $lastName,
        private ?DateTime $birthDay = null
    ) {
    }

    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getBirthDay(): ?DateTime {
        return $this->birthDay;
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
