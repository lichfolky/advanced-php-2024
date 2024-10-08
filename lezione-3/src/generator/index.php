<?php

$arr = [];
for ($i = $start; $i <= $end; $i += 1) {
    $arr[] = $i;
}

foreach ($arr as $i) {
    echo "$i, ";
}


function myRange($start, $end) {
    for ($i = $start; $i <= $end; $i += 1) {
        yield $i;
    }
}

$gen = myRange(5, 9);

foreach ($gen as $i) {
    echo "$i, ";
}
