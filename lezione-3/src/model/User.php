<?php

namespace Unifi\Model;

class User {


    public function __construct(public $id, private $name, public $lastName, public $mail = "NOMAIL") {
    }

    public function getName() {
        return $this->name;
    }

    public function __toString() {
        return $this->name . " " . $this->lastName;
    }
}
