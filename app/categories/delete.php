<?php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../services/CategoryService.php';

$categoryService = new CategoryService($pdo);

$id = $_GET['id'];
$categoryService->deleteCategory($id);

header('Location: index.php');
exit;
?>
