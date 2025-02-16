<?php
class ParticipantEventModel extends AbstractEventModel {
     public function getPublicEvents() {
        $sql = "SELECT * FROM events WHERE status = 'approved'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}