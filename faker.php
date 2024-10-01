<?php
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

$faker->seed(2123);

echo $faker->name() . "<br>";
echo $faker->email() . "<br>";
echo $faker->text() . "<br>";
echo $faker->datetime()->format("d-m-y H:i:s") . "<br>";
