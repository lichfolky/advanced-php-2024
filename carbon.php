<?php
// https://github.com/briannesbitt/Carbon
// https://carbon.nesbot.com/docs/

require 'vendor/autoload.php';

use Carbon\Carbon;

$dt = Carbon::now();

echo "<h3>Cambio timezone</h3>";
// https://www.php.net/manual/en/timezones.php

$dt->timezone("Europe/Rome");
echo "<p>" . $dt . "</p>";
$dt->timezone("America/Puerto_Rico");
echo "<p>" . $dt . "</p>";

echo "<h3>Cambio locale</h3>";


Carbon::setLocale('en');
echo "<p>" . $dt->isoFormat('LLLL') . "</p>";
Carbon::setLocale('it');
echo "<p>" . $dt->isoFormat('LLLL') . "</p>";


echo "<h3>Operazioni sulle date</h3>";

$dt->addYears(-2);
$dt->addDays(2);
echo "<p>" . $dt->isoFormat('LLLL') . "</p>";

echo "<h3>il " . $dt->year . " è bisestile?</h3>";
echo "<p>" . ($dt->isLeapYear() ? 'sì!' : 'no') . "</p>";
echo "<p>" . $dt->dayOfYear()  . "/" . ($dt->isLeapYear() ? "365" : "366") . "</p>";

echo "<h3>Tra quanto è la fine dell'anno?</h3>";
$dt = Carbon::now()->endOfYear();
echo "<p>" . $dt->diff() . "</p>";
echo "<p>" . $dt->diffForHumans() . "</p>";

echo "<h3>Quanti anni ho?</h3>";
echo "<p>" . Carbon::createFromDate(1986, 7, 15)->age . "</p>";


// Si possono concatenare più operazioni in una singola riga.
echo  "<p>" . Carbon::now()->addDays(5)->addYears(3) . "</p>";
// isToday(), isPast(), isFuture(), 