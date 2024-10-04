<?php

namespace Unifi\Model;

class User {

    public static $num = 0;

    public function __construct(public $id, private $name, public $lastName = "NO LAST", public $mail = "NOMAIL") {
    }

    public function getName() {
        self::$num += 1;
        return $this->name;
    }

    public function __toString() {
        return __CLASS__ . ": " . __METHOD__ . " " . $this->name . " " . $this->lastName;
    }
}

class Teacher extends User {

    public function __construct($id,  $name, public $subject,  $lastName = "NO LAST",  $mail = "NOMAIL") {
        parent::__construct($id,  $name,   $lastName,  $mail);
    }

    // sovrascrivo un metodo della sop (method overriding)
    public function getName() {
        // non possiamo usare $this->getName()
        return "Prof " . parent::getName();
        ///return "Prof";
    }
    public function getSubject() {
        return $this->subject;
    }
}
