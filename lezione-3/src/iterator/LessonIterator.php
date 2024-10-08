<?php

namespace Unifi\Iterator;

require_once __DIR__ . '\..\..\vendor\autoload.php';

use Unifi\Model\Lesson;
use Iterator;

class LessonIterator implements Iterator {
    private $position = 0;

    public function __construct(private $lessons) {
        $this->position = 0; // Posizione iniziale
    }
    // Restituisce l'elemento corrente.
    public function current(): Lesson {
        return $this->lessons[$this->position];
    }
    // Restituisce la chiave dell'elemento corrente.
    public function key(): int {
        return $this->position;
    }
    // Passa al prossimo elemento.
    public function next(): void {
        $this->position += 1;
    }
    // Riporta l'iteratore all'inizio.
    public function rewind(): void {
        $this->position = 0;
    }
    // Verifica se l'elemento corrente è valido.
    public function valid(): bool {
        $current = $this->current();
        return isset($current);
    }
}
