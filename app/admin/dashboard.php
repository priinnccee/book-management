<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header('Location: login.php');
    exit;
}

// Logout functionality
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_destroy();
    header('Location: login.php');
    exit;
}
?>

<?php include __DIR__ . '/../includes/header.php'; ?>

<div class="container mx-auto p-8">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h1 class="text-2xl font-bold mb-4 text-gray-800">Admin Dashboard</h1>
        <p class="mb-6 text-gray-700">Welcome to the Admin Dashboard. Use the menu to manage the library data.</p>
        <a href="?action=logout" class="text-blue-500 hover:underline">Logout</a>
    </div>
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>

