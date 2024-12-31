<?php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../services/CategoryService.php';

$categoryService = new CategoryService($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];

    $categoryService->createCategory($name);
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Category</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-6">Add New Category</h1>
        <form method="POST">
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Category Name:</label>
                <input type="text" id="name" name="name" class="shadow border rounded w-full py-2 px-3 text-gray-700" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Save</button>
        </form>
    </div>
</body>
</html>
