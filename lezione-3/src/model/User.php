<?php

namespace Unifi\Model;

use JsonSerializable;

class User implements JsonSerializable {


    public function __construct(public $id, private $name, public $lastName, public $mail = "NOMAIL") {
    }

    public function getName() {
        return $this->name;
    }

    public function __toString() {
        return $this->name . " " . $this->lastName;
    }

    public function __sleep() {
        return ["name", "lastName"];
    }

    public function __wakeup() {
        echo "<strong> mi risveglio! </strong>";
    }
    public function __serialize() {
        return [
            'id' => "#$this->id",
            'name' => "$this->name  $this->lastName",
        ];
    }

    // chiamato durante la deserializzazione, 
    // serve a riallogare risorse tipo connessioni db db
    public function __unserialize($data) {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->lastName = "";
    }

    public function jsonSerialize(): mixed {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'lastName' => $this->lastName,
        ];
    }
}
