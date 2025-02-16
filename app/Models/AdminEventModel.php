<?php

namespace App\Models;

use App\Models\Abstract\AbstractEventModel;

class AdminEventModel extends AbstractEventModel {
   
     public function deleteEvent( $eventId): bool {
        $sql = "DELETE FROM events WHERE id = :eventId";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute(['eventId' => $eventId]);
    }

     public function refuseEvent($eventId): bool {
        $sql = "UPDATE events SET status = 'rejected' WHERE id = :eventId";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute(['eventId' => $eventId]);
    }

     public function validateEvent( $eventId): bool {
        $sql = "UPDATE events SET status = 'approved' WHERE id = :eventId";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute(['eventId' => $eventId]);
    }

     public function getAllEvents(): array {
        $sql = "SELECT *,e.id as eventsid , u.name AS organizername , u.id AS userID , e.status AS eventsstatus FROM events e
                INNER JOIN users u ON e.organizer_id = u.id 
";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function updateEvent($eventId, $title, $description, $location, $date, $price): bool {
        $sql = "UPDATE events 
                SET title = :title, 
                    description = :description, 
                    location = :location, 
                    date = :date, 
                    price = :price 
                WHERE id = :eventId";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            'eventId' => $eventId,
            'title' => $title,
            'description' => $description,
            'location' => $location,
            'date' => $date,
            'price' => $price
        ]);
    }
}
 