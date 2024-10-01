<?php
// https://github.com/Seldaek/monolog


require 'vendor/autoload.php';

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\BrowserConsoleHandler;

// Each Logger has a channel (name) and a stack of handlers.
$logger = new Logger('name');

// The minimum logging level at which this handler will be triggered
/*
    DEBUG
    INFO
    NOTICE
    WARNING
    ERROR
    CRITICAL
    ALERT
    EMERGENCY
*/

// aggiunti in uno stack, filtrano per livello e propagano se true
$logger->pushHandler(new StreamHandler('test.log', Level::Debug, true)); // poi questo
$logger->pushHandler(new BrowserConsoleHandler(Level::Info, true)); // prima questo

$username = "Mattia";

// a message with brace-delimited placeholder names
$message = "User $username created";

$logger->debug($message);
$logger->alert("attenzione!!! $message!!!");

echo "<h2>" . "Aggiunto utente $username</h2>";
