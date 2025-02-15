<?php

namespace App\Controllers;
use App\Controllers\Controller;
use App\Core\AuthService;
use App\Models\Event;


class EventController extends Controller
{

    public function __construct() {
        $this->model = new Event();
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
            
            parent::create($request);
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
                'image' => $request['data']['image'],
                'description' => $request['data']['description'],
            ];
            
            parent::update($id, $request);
    }

    public function remove($request) {
        $id = $request['id'];
        parent::delete($id);
    }

 
}
