<?php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../services/BookService.php';

$bookService = new BookService($pdo);

$id = $_GET['id'];
$bookService->deleteBook($id);

header('Location: index.php');
exit;
?>
