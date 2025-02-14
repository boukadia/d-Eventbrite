<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class AdminStaticsModel
{
    protected PDO $db;

    public function __construct()
    {
        $this->db = Database::connection();
    }

     public function getTotalEvents(): int
    {
        $sql = "SELECT COUNT(*) as total FROM events";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    }

     public function getTotalParticipants(): int
    {
        $sql = "SELECT COUNT(DISTINCT user_id) as total FROM tickets";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    }

     public function getTopOrganizers(): array
    {
        $sql = "
            SELECT u.name, COUNT(e.id) as event_count
            FROM users u
            JOIN events e ON u.id = e.organizer_id
            GROUP BY u.id
            ORDER BY event_count DESC
            LIMIT 3
        ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

     public function getTopEvents(): array
    {
        $sql = "
            SELECT e.title, COUNT(t.id) as participants
            FROM events e
            LEFT JOIN tickets t ON e.id = t.event_id
            GROUP BY e.id
            ORDER BY participants DESC
            LIMIT 3
        ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}