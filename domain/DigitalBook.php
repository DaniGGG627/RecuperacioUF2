<?php
require_once 'Book.php';

class DigitalBook extends Book {
    public function __construct($title, $id = 0) {
        parent::__construct($title, 'digital', $id);
    }

    public function getLoanDays(): int {
        return 7;
    }
}
