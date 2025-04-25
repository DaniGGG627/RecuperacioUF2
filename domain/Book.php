<?php
abstract class Book {
    public int $id;
    public string $title;
    public string $type;

    public function __construct($title, $type, $id = 0) {
        $this->title = $title;
        $this->type = $type;
        $this->id = $id;
    }

    abstract public function getLoanDays(): int;
}
