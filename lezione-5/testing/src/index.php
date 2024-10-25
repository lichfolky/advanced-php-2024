<?php

declare(strict_types=1);

namespace Unifi;

require_once __DIR__ . '/../vendor/autoload.php';

use Unifi\Models\CourseWithUsers;
use Unifi\Models\User;

$io = new User(1, "Mattia", "Folcarelli");
echo $io;
$course = new CourseWithUsers("PHP", "Advanced PHP", 2, $io);
$course->enroll($io);
