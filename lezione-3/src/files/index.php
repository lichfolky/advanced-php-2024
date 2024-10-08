<?php
class FileNotFoundException extends Exception {
}

/*
try {
    $filename = "prova.txt";
    $file = fopen($filename, 'r');
    if ($file) {

        $line = fgets($file) . "<br>";
        echo $line;

        fclose($file);
    } else {
        throw new FileNotFoundException("file not found");
    }
    //$line = fgets($file);
    //echo $line;
    //feof();
    fclose($file);
} catch (TypeError $e) {
    echo $e->getMessage();
} catch (FileNotFoundException $e) {
    echo "File non trovato";
}
*/
function readLines($path) {
    $file = fopen($path, 'r');

    if ($file) {
        while (($line = fgets($file)) !== false) {
            yield $line;
        }

        fclose($file);
    } else {
        throw new FileNotFoundException('Could not open the file!');
    }
}

try {
    foreach (readLines("prova.txt") as $line) {
        echo $line . "<br>";
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
