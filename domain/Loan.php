<?php
class Loan {
    public int $id;
    public int $userId;
    public int $bookId;
    public string $dueDate;
    public bool $returned;

    public function __construct($userId, $bookId, $dueDate, $returned = false, $id = 0) {
        $this->userId = $userId;
        $this->bookId = $bookId;
        $this->dueDate = $dueDate;
        $this->returned = $returned;
        $this->id = $id;
    }
}
