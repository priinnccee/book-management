<?php
require_once __DIR__ . '/../models/AdminModel.php';

class AdminService {
    private $adminModel;

    public function __construct($pdo) {
        $this->adminModel = new AdminModel($pdo);
    }

    public function login($username, $password) {
        $admin = $this->adminModel->findAdminByUsername($username);

        if ($admin && $password === $admin['password']) {
            return true; 
        }

        return false; 
    }
}
?>
