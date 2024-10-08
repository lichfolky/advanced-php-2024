<?php
require_once __DIR__ . '\..\..\vendor\autoload.php';

use Unifi\Model\User;

$arr = [1, 2, 3, 4];
// array(1,2,3,4)

function printArray($arr) {
    echo "<p>";
    foreach ($arr as $value) {
        echo "$value ";
    }
    echo "</p>";
}

foreach ($arr as $value) {
    $value = $value * 2;
    echo $value;
}

printArray($arr);

foreach ($arr as &$value) {
    $value = $value * 2;
    echo $value;
}

printArray($arr);


$colori = [
    "verde" => "#4e825b",
    "viola" => "#a3637dff",
    "azzurro" => "#527ba8ff",
];

foreach ($colori as $key => $value) {
    echo "<p style='color: $value;'> $key </p>";
}

$arr = [1, 2, 3, 4];
// array(1,2,3,4)

foreach ($arr as $key => $value) {
    echo "$key: $value, ";
}
echo "<br>";

$user = new User(8, "Mattia", "Folcarelli");

foreach ((array)$user as $key => $value) {
    echo "$key: $value <br>";
}
