<?php
require_once __DIR__ . '/../infrastructure/Database.php';

class ReturnBook {
    public static function execute($loanId) {
        $db = Database::connect();

        $stmt = $db->prepare("UPDATE loans SET returned = 1 WHERE id = ?");
        return $stmt->execute([$loanId]);
    }
}
