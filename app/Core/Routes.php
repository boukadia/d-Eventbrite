<?php

namespace App\Core;


class Routes
{
    private array $routes = [];

    public function get($path, $action)
    {
        $this->routes['GET'][$path] = $action;
    }

    public function post($path, $action)
    {
        $this->routes['POST'][$path] = $action;
    }

    public function put($path, $action)
    {
        $this->routes['PUT'][$path] = $action;
    }

    public function delete($path, $action)
    {
        $this->routes['DELETE'][$path] = $action;
    }


    public function dispatch($method, $uri)
    {
        if ($method === 'OPTIONS') {
            http_response_code(204);
            exit;
        }
    
        $path = parse_url($uri, PHP_URL_PATH);
        $queryParams = [];
        $queryString = parse_url($uri, PHP_URL_QUERY);
        
        if (!is_null($queryString)) {
            parse_str($queryString, $queryParams);
        }
    
        $bodyParams = [];
        if ($method === 'POST' || $method === 'PUT') {
            if (!empty($_POST)) {
                $bodyParams = $_POST; 
            }
            if (!empty($_FILES)) {
                $bodyParams['event_image'] = $_FILES['event_image'];
            }
        }
    
        $request = array_merge($queryParams, $bodyParams);
    
        // Check for an exact match first
        if (isset($this->routes[$method][$path])) {
            [$class, $method] = $this->routes[$method][$path];
            $controller = new $class();
            $controller->$method($request);
            return;
        }
    
        // Check for dynamic routes
        foreach ($this->routes[$method] as $routePath => $action) {
            $pattern = preg_replace('/\{([^\/]+)\}/', '([^\/]+)', $routePath);
            $pattern = "#^" . $pattern . "$#";
    
            if (preg_match($pattern, $path, $matches)) {
                array_shift($matches); // Remove the full match
                $request['id'] = $matches[0] ?? null; // Assign the extracted ID
    
                [$class, $method] = $action;
                $controller = new $class();
                $controller->$method($request);
                return;
            }
        }
    
        // No route matched
        http_response_code(404);
        echo "404 Not Found";
    }
    
}
