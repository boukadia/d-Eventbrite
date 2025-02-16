<?php

namespace App\Controllers;
use App\Controllers\Controller;
use App\Core\AuthService;
use App\Models\Event;
use App\Models\NotificationModel;
 
class EventController extends Controller
{
public $notificationModel;
public $AuthService;
    public function __construct() {
        $this->model = new Event();
        $this->notificationModel = new NotificationModel();
 

    }
    public function index() {
        $events = $this->model->getAll();
        require __DIR__ . "/../Views/homePage.php";
    }

    public function organisateur(){
        $events = $this->model->getAll();
        require __DIR__ . "/../Views/Organisateur/OrgDashboard.php";
    }

    public function create($request){

        $userData = AuthService::isAuthenticated();
        
        $request = [
                'title' => $request['data']['title'],
                'location' => $request['data']['location'],
                'date' => $request['data']['date'],
                'price' => $request['data']['price'],
                'event_image' => $request['data']['event_image'],
                'category_id' => $request['data']['category'],
                'start_time' => $request['data']['start_time'],
                'end_time' => $request['data']['end_time'],
                'organizer_id' => $userData['userid'],
                'description' => $request['data']['description'],
            ];
            $organizerName = $userData['username'];
            

            $adminID = $this->notificationModel->getAdminId();
            $message = "Organizer $organizerName has created a new event: ";

           $this->notificationModel->createNotification($adminID, $message);

            parent::create($request);

           
            // if ($this->notificationModel->createNotification($admin, "New event created")) {
            //    echo "Success";
            // }
            // else {
            //     echo "Error";
            // }
            // echo json_encode($res);
        }
    
    public function edite($request) {
        $id = $request['id'];
        parent::edite($id);
    }

    public function updateEvent($request){

       $id = $request['id'];
        
        $request = [
                'title' => $request['data']['title'],
                'location' => $request['data']['location'],
                'date' => $request['data']['date'],
                'price' => $request['data']['price'],
                'event_image' => $request['data']['event_image'],
                'category_id' => $request['data']['category'],
                'start_time' => $request['data']['start_time'],
                'end_time' => $request['data']['end_time'],
                'description' => $request['data']['description'],
            ];
            
            parent::update($id, $request);
    }

    public function remove($request) {
        $id = $request['id'];
        parent::delete($id);
    }
}