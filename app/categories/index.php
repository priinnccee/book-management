<?php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../services/CategoryService.php';

$categoryService = new CategoryService($pdo);
$categories = $categoryService->getAllCategories();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-6">Categories Management</h1>
        <a href="create.php" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add New Category</a>
        <table class="table-auto w-full mt-6 bg-white shadow-md rounded">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Category Name</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $category): ?>
                    <tr class="border-t">
                        <td class="px-4 py-2"><?= htmlspecialchars($category['id']) ?></td>
                        <td class="px-4 py-2"><?= htmlspecialchars($category['name']) ?></td>
                        <td class="px-4 py-2">
                            <a href="edit.php?id=<?= $category['id'] ?>" class="text-blue-500 hover:underline">Edit</a> |
                            <a href="delete.php?id=<?= $category['id'] ?>" class="text-red-500 hover:underline">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
