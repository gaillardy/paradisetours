<?php

namespace App\Controllers;

class Router {
    private $routes = [];
    public function add($path, $callback) {
        $this->routes[$path] = $callback;
    }
        
    public function dispatch() {
        $requestedPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $requestedPath = rtrim($requestedPath, '/'); // Supprime les slashs inutiles
    
        error_log("Requested path: $requestedPath");
    
        foreach ($this->routes as $path => $callback) {
            $routePattern = preg_replace('/\{[a-z]+\}/', '([a-zA-Z0-9_-]+)', $path);
            $routePattern = "#^" . $routePattern . "$#";
    
            if (preg_match($routePattern, $requestedPath, $matches)) {
                error_log("Matched route: $path");
    
                array_shift($matches); // Retirer la correspondance complète
    
                preg_match_all('/\{([a-z]+)\}/', $path, $keys);
                $keys = $keys[1]; // Noms des clés dynamiques
    
                $params = array_combine($keys, $matches);
    
                error_log("Route parameters: " . print_r($params, true));
    
                // Appeler le callback avec les paramètres détectés
                if (is_callable($callback)) {
                    return call_user_func($callback, $params);
                } else {
                    error_log("Callback non appelable pour la route : $path");
                }
            }
        }
    
        // Aucun itinéraire correspondant trouvé
        http_response_code(404);
        echo "404 - Page not found";
    }
    
    
    
}