<?php

namespace App\Core;

use App\Controllers\UsersController;
use App\Controllers\PagesController;

class Router {

    protected $routes = [
        'GET' => [],
        'POST' => []
    ];


    public function get($uri, $controller) {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller) {
        $this->routes['POST'][$uri] = $controller;
    }


    public function direct($uri, $requestType) {


        if (array_key_exists($uri, $this->routes[$requestType]) ){

            return $this->callAction(
                // returns spliteted two variables $controller and $action and passes as arguments to callAction()
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }

        throw new Exception('No route defined for this URI');
    }

    public static function load($file) {

        $router = new static;
        require $file;
        return $router;
    }

    protected function callAction($controller, $action ) {

        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;


        if( ! method_exists($controller, $action)) {
            throw new Exception(
              "{$controller} does not respond to the {action} action"
            );
        }

        return $controller->$action();
    }
}