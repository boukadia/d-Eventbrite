<?php

namespace App\Models;

 use App\Core\Database;
use PDO;

class AdminUserModel  {
    protected PDO $db;

    public function __construct() {
        $this->db = Database::connection();
    }
     public function getAllUsers(): array {
        $sql = "SELECT * FROM users";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

     public function banUser(int $userId, $status): bool {
        $sql = "UPDATE users SET status = :status WHERE id = :userId";
        
        $stmt = $this->db->prepare($sql);
        return $stmt->execute(['userId' => $userId , 'status' => $status]);
    }

     public function updateUserRole(int $userId, string $role): bool {
        $sql = "UPDATE users SET role = :role WHERE id = :userId";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            'userId' => $userId,
            'role' => $role
        ]);
    }
}