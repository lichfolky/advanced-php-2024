<?php

declare(strict_types=1);
function sumValues(array $arr = []): int|float {
    $tot = 0;
    foreach ($arr as $element) {
        $tot += $element;
    }
    return $tot;
}

function add(int|float $x, null|int|float $y = 0): int {
    return $x + $y;
}

function addInt(?int $x, ?int $y = 0): int {
    return $x + $y;
}

//echo sumValues([3, 3.4, "3", 1, 2]);
echo addInt(2, null);
