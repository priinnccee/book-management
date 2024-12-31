
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold text-center">Book Management System</h1>
        <p class="text-center mt-4 text-gray-700">Manage your books, categories, and administrators easily!</p>

        <!-- Admin login link -->
        <div class="flex justify-center mt-6">
            <a href="../app/admin/login.php" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-700">Admin Login</a>
        </div>

        <!-- Search and filter -->
        <div class="mt-8 flex justify-between items-center">
            <input type="text" id="searchInput" placeholder="Search books..." class="border border-gray-300 p-2 rounded" oninput="filterBooks()" />
            <select id="categoryFilter" class="border border-gray-300 p-2 rounded" onchange="filterBooks()">
                <option value="">All Categories</option>
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category['id'] ?>"><?= htmlspecialchars($category['name']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- Book table -->
        <div class="mt-8 overflow-x-auto">
            <table class="min-w-full table-auto" id="bookTable">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 text-left">Title</th>
                        <th class="px-4 py-2 text-left">Author</th>
                        <th class="px-4 py-2 text-left">Category</th>
                        <th class="px-4 py-2 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($books as $book): ?>
                        <tr class="border-b book-row" data-title="<?= htmlspecialchars(strtolower($book['title'])) ?>" data-author="<?= htmlspecialchars(strtolower($book['author'])) ?>" data-category="<?= htmlspecialchars(strtolower($book['category_name'])) ?>">
                            <td class="px-4 py-2"><?= htmlspecialchars($book['title']) ?></td>
                            <td class="px-4 py-2"><?= htmlspecialchars($book['author']) ?></td>
                            <td class="px-4 py-2"><?= htmlspecialchars($book['category_name']) ?></td>
                            <td class="px-4 py-2">
                                <a href="view.php?id=<?= $book['id'] ?>" class="text-blue-500 hover:underline">View</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function filterBooks() {
            const searchInput = document.getElementById('searchInput').value.toLowerCase();
            const categoryFilter = document.getElementById('categoryFilter').value.toLowerCase();
            const books = document.querySelectorAll('.book-row');

            books.forEach(book => {
                const title = book.getAttribute('data-title');
                const author = book.getAttribute('data-author');
                const category = book.getAttribute('data-category');

                if ((title.includes(searchInput) || author.includes(searchInput)) &&
                    (category.includes(categoryFilter) || categoryFilter === '')) {
                    book.style.display = '';
                } else {
                    book.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>
