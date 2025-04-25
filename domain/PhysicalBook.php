<?php
require_once 'Book.php';

class PhysicalBook extends Book {
    public function __construct($title, $id = 0) {
        parent::__construct($title, 'physical', $id);
    }

    public function getLoanDays(): int {
        return 14;
    }
}
