<?php

namespace App\Models;
use App\Core\Database;

class Event extends Model
{
    protected $table = "events";

    public function getAll()
    {
        $query = "SELECT * FROM events";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function create(array $request)
    {
        try {
            parent::create($request);

            return true;
        } catch (\Exception $e) {
            $this->db->rollBack();
            throw $e;
        }
    }

}