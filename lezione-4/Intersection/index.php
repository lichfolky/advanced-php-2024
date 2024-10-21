<?php

declare(strict_types=1);

require_once "../models/User.php";

interface Valutabile {
    public function setVoto(int $voto): void;
}

trait ValutabileTrait {
    public function setVoto(int $voto) {
        $this->voto = $voto;
    }
}

// Esiste già di sistema e si chiama Stringable
interface Stringabile {
    public function __toString(): string;
}

class Student extends User implements Valutabile, Stringabile {
    use ValutabileTrait;
    public ?int $voto;

    /* questa non mi serve perché è implementatata dal trait
        public function setVoto(int $voto): void {
            $this->voto = $voto;
        }
    */
}

function valuta(Valutabile&Stringabile $val, int $voto) {
    $val->setVoto($voto);
    echo $val . " voto " . $voto;
}

$io = new Student(1, "Mattia", "Folcarelli");
valuta($io, 5);
