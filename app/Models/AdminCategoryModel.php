<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class AdminCategoryModel
{
    protected PDO $db;

    public function __construct()
    {
        $this->db = Database::connection();
    }

    public function addCategory($name): bool
    {
        $sql = "INSERT INTO categories (name) VALUES (:name)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute(['name' => $name]);
    }

    public function deleteCategory($category_id)
    {
        $sql = "DELETE FROM categories WHERE id = :category_id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute(['category_id' => $category_id]);
    }

    public function getAllCategories(): array
    {
        $sql = "SELECT * FROM categories";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}