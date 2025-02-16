<?php

namespace App\Controllers;

use App\Models\AdminEventModel;
use App\Models\Event;

class EventAdminController extends Controller{
    private $adminEventModel;
    public $model;
    public function __construct() {
        $this->adminEventModel = new AdminEventModel();
        $this->model = new Event();
    }
    public function index(){
        include_once __DIR__ . "/../Views/homePage.php";
    }
     public function getAllEvents() {
         parent::getAll();
     }
    public function validateEvent() {
 
         if (!isset($_POST['eventId'])) {
             echo json_encode(['success' => false, 'message' => 'Event ID is missing.']);
            return;
        }
    
        $eventId = $_POST['eventId'];
         $success = $this->adminEventModel->validateEvent($eventId);
            echo json_encode([
            'success' => $success,
            'message' => $success ? 'Event validated successfully!' : 'Failed to validate event.'
        ]);
        // $events = $_GET['page'];
        // echo json_encode($events);
    }
     public function refuseEvent() {
        $eventId = $_POST['eventId'];
        $success = $this->adminEventModel->refuseEvent($eventId);
        echo json_encode(['success' => $success, 'message' => $success ? 'Event refused successfully!' : 'Failed to refuse event.']);

    }

     public function deleteEvent() {
        $eventId = $_POST['eventId'];

        $success = $this->adminEventModel->deleteEvent($eventId);
        echo json_encode(['success' => $success, 'message' => $success ? 'Event deleted successfully!' : 'Failed to delete event.']);
    }
    public function updateEvent() {
         if (!isset($_POST['eventId']) || !isset($_POST['title']) || !isset($_POST['description']) || !isset($_POST['location']) || !isset($_POST['date']) || !isset($_POST['price'])) {
            echo json_encode(['success' => false, 'message' => 'Missing required fields.']);
            return;
        }
    
        $eventId = $_POST['eventId'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $location = $_POST['location'];
        $date = $_POST['date'];
        $price = $_POST['price'];
    
         $success = $this->adminEventModel->updateEvent($eventId, $title, $description, $location, $date, $price);
    
         echo json_encode([
            'success' => $success,
            'message' => $success ? 'Event updated successfully!' : 'Failed to update event.'
        ]);
    }
}
