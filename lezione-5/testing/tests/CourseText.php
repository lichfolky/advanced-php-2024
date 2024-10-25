<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Unifi\Models\CourseWithUsers;
use Unifi\Models\User;

final class CourseTest extends TestCase {
    public function testCantAddMultipleUsers(): void {
        $this->expectException(Exception::class);
        $io = new User(1, "Mattia", "Folcarelli");
        $course = new CourseWithUsers("PHP", "Advanced PHP", 2, $io);
        $course->enroll($io);
        $course->enroll($io);
    }
}
