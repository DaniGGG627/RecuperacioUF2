<?php
require_once __DIR__ . '/../infrastructure/Database.php';

class BorrowBook {
    public static function execute($userId, $bookId, $type) {
        $db = Database::connect();

        $days = $type === 'physical' ? 14 : 7;
        $dueDate = (new DateTime())->modify("+$days days")->format('Y-m-d');

        $stmt = $db->prepare("INSERT INTO loans (user_id, book_id, due_date) VALUES (?, ?, ?)");
        return $stmt->execute([$userId, $bookId, $dueDate]);
    }
}
