<?php
$greet = function ($name) {
    $frase = "Hello $name! ";
    return $frase;
};

echo $greet('World');
echo $greet('PHP');

$moltiplica = fn($x) => $x * 2;
// callable
$risultato = array_map($moltiplica, [1, 2, 3]);
print_r($risultato);

$isPari = function (int $numero): bool {
    return $numero % 2 == 0;
};

$risultato = array_filter([1, 2, 3], $isPari);
print_r($risultato);

$sum = function ($carry, $item) {
    $carry += $item;
    return $carry;
};

$risultato = array_reduce([1, 2, 3], $sum, 0);
echo "--" . $risultato;
