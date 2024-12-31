<?php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../services/BookService.php';

$bookService = new BookService($pdo);
$books = $bookService->getAllBooks();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-6">Books Management</h1>
        <a href="create.php" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add New Book</a>
        <table class="table-auto w-full mt-6 bg-white shadow-md rounded">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Author</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($books as $book): ?>
                    <tr class="border-t">
                        <td class="px-4 py-2"><?= htmlspecialchars($book['id']) ?></td>
                        <td class="px-4 py-2"><?= htmlspecialchars($book['title']) ?></td>
                        <td class="px-4 py-2"><?= htmlspecialchars($book['author']) ?></td>
                        <td class="px-4 py-2">
                            <a href="edit.php?id=<?= $book['id'] ?>" class="text-blue-500 hover:underline">Edit</a> |
                            <a href="delete.php?id=<?= $book['id'] ?>" class="text-red-500 hover:underline">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
