<?php
class Math {
    public static float $pi = 3.14;

    public function addInt(int $primo, int $secondo): int {
        return $primo + $secondo;
    }
    public function addFloat(float $a, float $b): float {
        return $a + $b;
    }
}

$class_methods = get_class_methods(new Math());
foreach ($class_methods as $method_name) {
    echo "$method_name\n";
}
