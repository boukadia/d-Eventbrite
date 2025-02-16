<?php

namespace App\Models\Abstract;

use App\Core\Database;
use PDO;

abstract class AbstractEventModel {
    protected PDO $db;
    
    public function __construct() {
        $this->db = Database::connection();  
    }
    
    public function getEventDetails(int $eventId): ?array {
        $sql = "SELECT * FROM events WHERE id = :eventId";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['eventId' => $eventId]);
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }
    
   
}
 
 