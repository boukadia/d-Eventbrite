<?php
 namespace App\Controllers;
 use App\Models\NotificationModel;

class NotificationsController {
     private $notificationModel;

    public function __construct() {
       
        $this->notificationModel = new NotificationModel();
    }

     public function getNotifications() {
        $adminID = $this->notificationModel->getAdminId();
        // $adminId = 19; 
        $notifications = $this->notificationModel->getUnreadNotifications($adminID);
        $this->response(['notifications' => $notifications ], 200);
    }

     public function markAsRead() {
        $adminID = $this->notificationModel->getAdminId();

        // $adminId = 19;  
        $this->notificationModel->markNotificationsAsRead($adminID);
        echo json_encode(["success" => true]);
    }
    protected function response($data, int $status = 200) {
        header('Content-Type: application/json');
        http_response_code($status);
        echo json_encode($data);
        exit;
    }

    protected function error(string $message, int $status = 400) {
        http_response_code($status);
        echo $message;
        exit;
    }
}
