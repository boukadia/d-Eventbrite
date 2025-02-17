<?php
namespace App\Models;

class Payment extends Model
{

    public function createTicketAndPayment($session_id, $amount_total, $currency, $status, $eventId, $userId, $ticketType, $price){

        // Commencer une transaction pour garantir l'intégrité des données
        $this->db->beginTransaction();

        try {
            // Insérer un ticket dans la table tickets
            $sqlTicket = "INSERT INTO tickets (event_id, user_id, ticket_type, price) 
                          VALUES (:event_id, :user_id, :ticket_type, :price)";
            $stmtTicket = $this->db->prepare($sqlTicket);
            $stmtTicket->bindParam(':event_id', $eventId);
            $stmtTicket->bindParam(':user_id', $userId);
            $stmtTicket->bindParam(':ticket_type', $ticketType);
            $stmtTicket->bindParam(':price', $price);
            $stmtTicket->execute();

            $ticketId = $this->db->lastInsertId();

            $sqlPayment = "INSERT INTO payments (session_id, amount, currency, status, ticket_id) 
                           VALUES (:session_id, :amount, :currency, :status, :ticket_id)";
            $stmtPayment = $this->db->prepare($sqlPayment);
            $stmtPayment->bindParam(':session_id', $session_id);
            $stmtPayment->bindParam(':amount', $amount_total);
            $stmtPayment->bindParam(':currency', $currency);
            $stmtPayment->bindParam(':status', $status);
            $stmtPayment->bindParam(':ticket_id', $ticketId); 
            $stmtPayment->execute();

            $this->db->commit();

            return true;  // Tout a été inséré avec succès
        } catch (\Exception $e) {
            // Si une erreur se produit, annuler la transaction
            $this->db->rollBack();
            throw $e;
        }
    }

}
