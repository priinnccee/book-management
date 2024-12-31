<?php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../services/BookService.php';

$bookService = new BookService($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];

    $bookService->createBook($title, $author);
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-6">Add New Book</h1>
        <form method="POST">
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Title:</label>
                <input type="text" id="title" name="title" class="shadow border rounded w-full py-2 px-3 text-gray-700" required>
            </div>
            <div class="mb-4">
                <label for="author" class="block text-gray-700">Author:</label>
                <input type="text" id="author" name="author" class="shadow border rounded w-full py-2 px-3 text-gray-700" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Save</button>
        </form>
    </div>
</body>
</html>
