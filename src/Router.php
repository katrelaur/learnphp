<?php 
namespace App;

use stdClass;

class Router {
    public static $routes = [];
    public $path;
    public $method;
    public function __construct($path, $method)
    {
        $this->path = parse_url($path, PHP_URL_PATH);
        $this->method = $method;
    }

    public function match(){
        foreach(self::$routes as $route){
            if($route['path'] === $this->path && $route['method'] === $this->method){
                return $route;
            }
        }
    }

    public static function addRoute($method, $path, $action){
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'action' => $action
        ];
        // $route = new stdClass();
        // $route->path = $path;
        // $route->action = $action;
        // self::$routes[] = $route;
    }

    public static function get($path, $action){
        self::addRoute('GET', $path, $action);
    }

    public static function post($path, $action){
        self::addRoute('POST', $path, $action);
    }
}