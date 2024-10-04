<?php

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

$utente = new User(1, "Mattia", mail: "mattia.folcarelli@gmail.com");
echo $utente::$num . "<br>";
echo $utente->getName() . "<br>";
//$utente->name = "Beppe";
$utente2 = new User(2, "Beppe");
echo $utente2->getName() . "<br>";

//echo $utente->name;
echo $utente::$num . "<br>";
echo User::$num . "<br>";

echo $utente . "!";
