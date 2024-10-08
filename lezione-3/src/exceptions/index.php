<?php
class MyException extends Exception {
}

try {
    // Genera e lancia un'eccezione
    throw new MyException("Errore!");
} catch (MyException $error) {
    // Cattura l'eccezione e stampa un messaggio di errore
    echo "MyException catturata: {$error->getMessage()}";
} catch (Exception $error) {
    // Cattura l'eccezione e stampa un messaggio di errore
    echo "Eccezione catturata: {$error->getMessage()}";
} finally {
    // Viene eseguita in ogni caso alla fine dell’esecuzione
    echo "Esecuzione completata";
}
