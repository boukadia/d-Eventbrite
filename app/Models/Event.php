<?php

namespace App\Models;
use App\Core\AuthService;
use App\Core\Database;

class Event extends Model
{
    protected $table = "events";

    public function getAll()
    {
        $query = "SELECT E.*, V.ville, C.name FROM events AS E JOIN users AS U ON U.id = E.organizer_id JOIN ville AS V ON V.id = E.villes_id JOIN categories AS C ON C.id = E.category_id WHERE E.status = 'approved'";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getWidthOrganisateur()
    {
        $userData = AuthService::isAuthenticated();

        $query = "SELECT E.*, V.ville, C.name FROM events AS E JOIN users AS U ON U.id = E.organizer_id JOIN ville AS V ON V.id = E.villes_id JOIN categories AS C ON C.id = E.category_id WHERE E.organizer_id =" . $userData['userid'];
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function create(array $request)
    {       
        try {
            // Start a transaction
            $this->db->beginTransaction();  
    
            parent::create($request);
    
            // Commit transaction if successful
            $this->db->commit();  
            return true;
        } catch (\Exception $e) {
            // Check if a transaction is active before rolling back
            if ($this->db->inTransaction()) {  
                $this->db->rollBack();
            }
            throw $e;
        }
    }
    

}