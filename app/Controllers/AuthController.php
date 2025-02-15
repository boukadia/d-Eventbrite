<?php
namespace App\Controllers;

use App\Core\AuthService;
use App\Models\User;
use App\Models\Event;
 
ob_start();
class AuthController {

    private $db;
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
    
             $user = $this->userModel->validateUser($email, $password);
    
            if ($user) {
                $role = $user['role'];
                $userid = $user['id'];
                echo $userid;
                $userData = ['email' => $email, 'role' => $role, 'userid' => $userid];
                $jwt = AuthService::createToken($userData);
    
                 setcookie("jwt", $jwt, time() + 3600, "/", "", false, true);  
                 if ($role === 'admin') {
                    header("Location: /admin");
                    exit;
                } elseif($role === 'organisateur'){
                    header("Location: /organisateur");
                    exit;
                }elseif ($role === 'participant') {
                    header("Location: /participant");	
                    exit;
                }
            } else {
                echo json_encode(['message' => 'Invalid credentials.']);
            }
        }
    }
    
     public function signup() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $name = $_POST['name'];
            $role = $_POST['role'];
 
             $existingUser = $this->userModel->getUserByUsername($email);
            if ($existingUser) {
                echo json_encode(['message' => 'Username already taken.']);
                return;
            }
            
             if ($this->userModel->createUser($name, $password, $email, $role)) {
                echo json_encode(['message' => 'User registered successfully.']);
                header("Location: /login");
            } else {
                echo json_encode(['message' => 'Error occurred during registration.']);
            }
        }
    }

     public function showLoginPage() {
        include_once __DIR__ . '/../Views/auth/login.php';
    }

     public function showSignupPage() {
        include_once __DIR__ . '/../Views/auth/login.php';
    }
 
    public function dashboard() {
        if (!AuthService::isAuthenticated()){
            header("Location: /login");
            exit;
        } 
        if(AuthService::hasRole('organisateur')) {
            $event = new Event();
            $events = $event->getAll();
            include __DIR__ . '/../Views/Organisateur/OrgDashboard.php';
        }
        if(AuthService::hasRole('admin')) {
            include __DIR__ . '/../Views/admin/adminDashboard.php';
        }
        if(AuthService::hasRole('participant')) {
            include __DIR__ . '/../Views/participant/participant.php';
        }
    }

    public function logout() {
        AuthService::logout();
        header("Location: /login");
        exit;
    }
 
}
