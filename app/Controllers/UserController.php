<?php

namespace App\Controllers;

use App\Models\AdminUserModel;

class UserController {
    private $adminUserModel;

    public function __construct() {
        $this->adminUserModel = new AdminUserModel();
    }

     public function getAllUsers() {
        $users = $this->adminUserModel->getAllUsers();
        echo json_encode($users);
    }

     public function banUser() {
        if (!isset($_POST['userId']) ||!isset($_POST['status'])) {
            echo json_encode(['success' => false, 'message' => 'User ID is missing.']);
            return;
        }

        $userId = $_POST['userId'];
        $status = $_POST['status'];
        $success = $this->adminUserModel->banUser($userId, $status );

        echo json_encode([
            'success' => $success,
            'message' => $success ? 'User banned successfully!' : 'Failed to ban user.'
        ]);
    }

     public function updateUserRole() {
        if (!isset($_POST['userId']) || !isset($_POST['role'])) {
            echo json_encode(['success' => false, 'message' => 'User ID or role is missing.']);
            return;
        }

        $userId = $_POST['userId'];
        $role = $_POST['role'];
        $success = $this->adminUserModel->updateUserRole($userId, $role);

        echo json_encode([
            'success' => $success,
            'message' => $success ? 'User role updated successfully!' : 'Failed to update user role.'
        ]);
    }
}

