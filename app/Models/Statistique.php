<?php

namespace App\Models;
use App\Core\AuthService;
use App\Models\Model;

class Statistique extends Model
{
    protected $table = "users";

    public function all(){
        $userData = AuthService::isAuthenticated();

        $query = "SELECT * FROM users AS U INNER JOIN tickets AS T ON U.id = T.user_id INNER JOIN events AS E ON T.event_id = E.id WHERE E.organizer_id =" . $userData['userid'];
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}