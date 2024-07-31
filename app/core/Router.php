<?php

class Router
{
    private $routes = [];

    public function addRoute($route, $handler)
    {
        $this->routes[$route] = $handler;
    }

    public function dispatch()
    {
        $uri = trim($_SERVER['REQUEST_URI'], '/');
        $method = $_SERVER['REQUEST_METHOD'];

        $route = $uri;

        if ($method === 'POST' && !strpos($route, '_post')) {
            $route .= '_post';
        }
		
        if (array_key_exists($route, $this->routes)) {
            list($controller, $action) = explode('@', $this->routes[$route]);
            if (class_exists($controller) && method_exists($controller, $action)) {
                $controller = new $controller();
                $controller->$action();
            } else {
                echo "Controller or action not found.";
            }
        } else {
            echo "404 Not Found";
        }
    }
}
