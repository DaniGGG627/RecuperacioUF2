<?php
require_once 'infrastructure/Database.php';
require_once 'application/BorrowBook.php';
require_once 'application/ReturnBook.php';

$action = $_POST['action'] ?? '';

$db = Database::connect();

switch ($action) {
    case 'add_user':
        $stmt = $db->prepare("INSERT INTO users (name) VALUES (?)");
        $stmt->execute([$_POST['name']]);
        break;

    case 'add_book':
        $stmt = $db->prepare("INSERT INTO books (title, type) VALUES (?, ?)");
        $stmt->execute([$_POST['title'], $_POST['type']]);
        break;

    case 'borrow_book':
        BorrowBook::execute($_POST['user_id'], $_POST['book_id'], $_POST['type']);
        break;

    case 'return_book':
        ReturnBook::execute($_POST['loan_id']);
        break;
}

header("Location: index.php");
exit;
