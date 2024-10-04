<?php

use Carbon\Carbon;
use Monolog\Logger;
use Monolog\Level;

use Monolog\Handler\BrowserConsoleHandler;

require_once 'vendor/autoload.php';
$logger = new Logger("utenti");
$logger->pushHandler(new BrowserConsoleHandler()); // prima questo

$faker = Faker\Factory::create("it_IT");

function newUser($name, $lastName, $birthdate, $logger = null) {
    $dt = new Carbon($birthdate);
    echo "<p>$name, $lastName, $dt->age </p>";

    if (isset($logger)) {
        $logger->debug("inserito nuovo utente: $name, $lastName, $dt->age");
    }
}

for ($i = 0; $i < 10; $i++) {
    $name = $faker->name();
    $lastName = $faker->lastName();
    $birthdate = $faker->DateTime();
    newUser($name, $lastName, $birthdate, $logger);
}
$logger->alert("ho finito!");
