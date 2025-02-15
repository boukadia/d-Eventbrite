<?php 
namespace App\Core; 

use Firebase\JWT\JWT; 
use Firebase\JWT\Key;
use App\Core\Config;

class AuthService { 
    
    public static function createToken($userData) { 
        $secretKey = Config::get('JWT_SECRET'); 
        $algorithm = Config::get('JWT_ALGORITHM');

        $issuedAt = time(); 
        $expirationTime = $issuedAt + 3600; 
        $payload = array( 
            'iat' => $issuedAt, 
            'exp' => $expirationTime, 
            'data' => $userData 
        ); 

        return JWT::encode($payload, $secretKey, $algorithm); 
    } 
    
    public static function isAuthenticated() { 
        if (!isset($_COOKIE['jwt'])) { 
            return false; 
        } 

        $jwt = $_COOKIE['jwt']; 
        $userData = self::validateToken($jwt); 

        return $userData ?: false; 
    } 
    
    public static function hasRole($requiredRole) { 
        $userData = self::isAuthenticated(); 
        return $userData && isset($userData['role']) && $userData['role'] === $requiredRole;
    } 
    
    public static function validateToken($jwt) { 
        try { 
             $secretKey = Config::get('JWT_SECRET');
            $algorithm = Config::get('JWT_ALGORITHM');

            $decoded = JWT::decode($jwt, new Key($secretKey, $algorithm)); 
            return (array) $decoded->data; 
        } catch (\Exception $e) { 
            return null; 
        } 
    }

    public static function logout() {
        setcookie('jwt', '', time() - 3600, '/'); 
        return true;  
    }
}
