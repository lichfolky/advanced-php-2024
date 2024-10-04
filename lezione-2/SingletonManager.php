<?php

// La keyword final impedisce alle classi figlie di sovrascrivere (overriding) 
// un metodo o una costante.
// Se una classe è final, non può essere estesa.

final class SingletonManager {

    // Proprietà statica che conserva l'unica istanza della classe.
    private static $instance = null;
    private $dt = null;

    // Ottiene l'instanza, la crea se non c'è già, unico modo per generare il singleton
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
            self::$instance->dt = new DateTime();
        }
        return self::$instance;
    }

    public function getCreationDate() {
        return $this->dt->format('Y-m-d H:i:s');
    }

    // Non è permesso chiamarlo dall'esterno per evitare la creazione di più istanze.
    // Per utilizzare il singleton, devi ottenere un istanza tramite Singleton::getInstance()
    private function __construct() {
    }

    // Impedisce che l'istanza venga clonata
    private function __clone() {
    }

    // Impedisce che venga deserializzata, non può essere privata
    public function __wakeup() {
        throw new Exception("Cannot unserialize singleton");
    }
}


$test = SingletonManager::getInstance();
echo $test->dt->format('Y-m-d H:i:s') . "<br>";

sleep(5);
$test2 = SingletonManager::getInstance();
//$test = SingletonManager::getInstance();
echo $test2->dt->format('Y-m-d H:i:s') . "<br>";
