<?php

namespace App\Controllers;

use App\Models\AdminStaticsModel;

class StaticsController
{
    private $eventModel;

    public function __construct()
    {
        $this->eventModel = new AdminStaticsModel();
    }

     public function getEventStats()
    {
        $totalEvents = $this->eventModel->getTotalEvents();
        $totalParticipants = $this->eventModel->getTotalParticipants();
        $topOrganizers = $this->eventModel->getTopOrganizers();
        $topEvents = $this->eventModel->getTopEvents();

        echo json_encode([
            'total_events' => $totalEvents,
            'total_participants' => $totalParticipants,
            'top_organizers' => $topOrganizers,
            'top_events' => $topEvents,
        ]);
    }
}