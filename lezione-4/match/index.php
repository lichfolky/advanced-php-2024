<?php

$valutazione = 5;
$risultato = match ($valutazione) {
    5 => 'Scarso',
    6 => 'Sufficiente',
    7 => 'Buono',
    8 => 'Molto buono',
    9 => 'Distinto',
    10 => 'Ottimo',
    default => 'Valutazione non valida',
};
echo $risultato;

$input = 1;

$risultato = match ($input) {
    1 => 'Intero 1',
    '1' => 'Stringa 1',
    default => 'Non corrisponde',
};
/*
$message = match ($statusCode) {
    200, 300 => null,
    400 => 'not found',
    500 => 'server error',
    default => 'unknown status code',
};
*/

$statusCode = 999;
echo match (true) {
    $statusCode === 500 => 'server error',
    $statusCode > 800 => "SUPER ERROR",
    default => 'unknown status code',
};
