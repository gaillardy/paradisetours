<?php

namespace App\Controllers;

class Router {
    private $routes = [];

    public function add($path, $callback) {
        $this->routes[$path] = $callback;
    }

    public function handle($url) {
        foreach ($this->routes as $path => $callback) {
            if ($path === $url) {
                call_user_func($callback);
                return;
            }
        }
        http_response_code(404);
        echo "404 - Page Not Found";
    }
}