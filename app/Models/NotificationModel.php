<?php 

namespace App\Models;

 use App\Core\Database;
use PDO;

class NotificationModel {
    private $db;

    public function __construct() {
        $this->db = Database::connection();
    }
    public function getAdminId() {
         $query = "SELECT id FROM users where role = 'admin' LIMIT 1"; 
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result ? $result['id'] : null;
    }
     public function createNotification($userId, $message) {
        $query = "INSERT INTO notifications (user_id, message, is_read) VALUES (?, ?, false)";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$userId, $message]);
    }

     public function getUnreadNotifications($userId) {
        $query = "SELECT * FROM notifications WHERE user_id = ? AND is_read = false ORDER BY created_at DESC";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

     public function markNotificationsAsRead($userId) {
        $query = "UPDATE notifications SET is_read = true WHERE user_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$userId]);
    }
}
