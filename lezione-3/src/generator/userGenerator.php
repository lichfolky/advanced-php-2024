<?php
require_once __DIR__ . '\..\..\vendor\autoload.php';

use Unifi\Model\User;
use Faker\Factory;

function generateStudents($max, $seed = 123) {
    $faker = Factory::create("it_IT");
    $faker->seed($seed);
    for ($i = 0; $i <= $max; $i += 1) {
        echo "genero $i";
        yield new User($i, $faker->name(), $faker->lastName());
    }
}

foreach (generateStudents(10) as $student) {
    echo "<p><strong>$student</strong></p>";
}
