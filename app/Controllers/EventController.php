<?php

namespace App\Controllers;
use App\Core\AuthService;
use App\Models\Category;
use App\Models\Event;
use App\Models\NotificationModel;

class EventController extends Controller
{
    public $notificationModel;
    public $AuthService;
    public $useData;
    public function __construct()
    {
        $this->model = new Event();
        $this->notificationModel = new NotificationModel();
        $this->useData = AuthService::isAuthenticated();
    }
    public function index()
    {
        $events = $this->model->getAll();
        $catgory = new Category();
        $catgories = $catgory->all();
        require __DIR__ . "/../Views/homePage.php";
    }

    public function organisateur()
    {
        $events = $this->model->getAll();
        require __DIR__ . "/../Views/Organisateur/OrgDashboard.php";
    }

    public function eventBooking($request)
    {
        // var_dump($request);  
    
        if (!isset($request['id'])) {
            die("ID is missing!");
        }
    
        $id = $request['id'];
        $userData = $this->useData;
        // var_dump($userData);
        $events = $this->model->getAll();
        
        require __DIR__ . "/../Views/event-booking.php";
    }
    
    public function create($request)
    {

        $userData = $this->useData;

        if (isset($request['event_image'])) {
            $imagePath = $this->uploadImage($request['event_image']);
        } else {
            $imagePath = null;
        }

        $requestData = [
            'title' => $request['title'],
            'villes_id' => $request['villes_id'],
            'date' => $request['date'],
            'price' => $request['price'],
            'event_image' => $imagePath,
            'category_id' => $request['category'],
            'start_time' => $request['start_time'],
            'end_time' => $request['end_time'],
            'organizer_id' => $userData['userid'],
            'description' => $request['description'],
        ];

               $organizerName = $userData['username'];
            

            $adminID = $this->notificationModel->getAdminId();
            $message = "Organizer $organizerName has created a new event: ";

           $this->notificationModel->createNotification($adminID, $message);

            parent::create($requestData);

           
            // if ($this->notificationModel->createNotification($admin, "New event created")) {
            //    echo "Success";
            // }
            // else {
            //     echo "Error";
            // }
            // echo json_encode($res);
    }

    private function uploadImage($file)
    {
        $uploadDir = __DIR__ . "/../../public/uploads/";

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

        if (!in_array(strtolower($extension), $allowedExtensions)) {
            return null;
        }

        $fileName = uniqid('event_', true) . '.' . $extension;
        $filePath = $uploadDir . $fileName;

        if (move_uploaded_file($file['tmp_name'], $filePath)) {
            return "uploads/" . $fileName;
        }

        return null;
    }


    public function edite($request)
    {
        $id = $request['id'];
        parent::edite($id);
    }

    public function updateEvent($request)
    {

        $id = $request['id'];

        if (isset($request['event_image'])) {
            $imagePath = $this->uploadImage($request['event_image']);
        } else {
            $imagePath = null;
        }

        $request = [
            'title' => $request['title'],
            'villes_id' => $request['villes_id'],
            'date' => $request['date'],
            'price' => $request['price'],
            'event_image' => $imagePath,
            'category_id' => $request['category'],
            'start_time' => $request['start_time'],
            'end_time' => $request['end_time'],
            'description' => $request['description'],
        ];

        parent::update($id, $request);
    }

    public function remove($request)
    {
        $id = $request['id'];
        parent::delete($id);
    }

}
