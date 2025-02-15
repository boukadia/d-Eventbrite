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
        if (in_array($method, ['POST', 'PUT'])) {
            $bodyParams = json_decode(file_get_contents('php://input'), true) ?? [];
        }
        
        $request = array_merge($queryParams, $bodyParams);

        
        if (isset($this->routes[$method][$path])) {
            [$class, $method] = $this->routes[$method][$path];
            $controller = new $class();
            $controller->$method($request);
        }
    }
}
