<?php
require_once __DIR__ . '\..\..\vendor\autoload.php';

use Carbon\CarbonImmutable;
use Unifi\Model\Lesson;
use Unifi\Iterator\LessonIterator;

$dtStart = CarbonImmutable::now();
$dtEnd = $dtStart->add(1, "hour");
$composer = new Lesson("Composer", $dtStart, $dtEnd);

$dtStart = $dtEnd;
$dtEnd = $dtStart->add(1, "hour");
$oop1 = new Lesson("OOP1", $dtStart, $dtEnd);

$dtStart = $dtEnd;
$dtEnd = $dtStart->add(1, "hour");
$oop2 = new Lesson("OOP2", $dtStart, $dtEnd);

$lezioni = new LessonIterator([$composer, $oop1, $oop2]);

echo "<ul>";
foreach ($lezioni as $lez) {
    echo "<li>$lez</li>";
}
echo "</ul>";
