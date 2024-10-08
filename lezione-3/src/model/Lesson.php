<?php

namespace Unifi\Models;

class Lesson {
    public function __construct(
        private $title,
        private $dateTimeStart,
        private $dateTimeEnd,
        private $description = "",
    ) {
    }

    public function getTitle() {
        return $this->title;
    }
    public function getDateTimeStart() {
        return $this->dateTimeStart;
    }
    public function getDateTimeEnd() {
        return $this->dateTimeEnd;
    }
    public function getDescription() {
        return $this->description;
    }

    public function __toString() {
        return $this->dateTimeStart->format('H:i') . " - " . $this->dateTimeEnd->format('H:i') . " " . $this->title;
    }
}
