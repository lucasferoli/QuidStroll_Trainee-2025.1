<?php

namespace App\Core;
use Exception;

class Router
{
    /**
     * All registered routes.
     *
     * @var array
     */
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    /**
     * Load a user's routes file.
     *
     * @param string $file
     */
    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    /**
     * Register a GET route.
     *
     * @param string $uri
     * @param string $controller
     */
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    /**
     * Register a POST route.
     *
     * @param string $uri
     * @param string $controller
     */
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    /**
     * Load the requested URI's associated controller method.
     *
     * @param string $uri
     * @param string $requestType
     */
    
    
 public function direct($uri, $requestType)
{
    foreach ($this->routes[$requestType] as $route => $controller) {
        $pattern = preg_replace('#\{[^/]+\}#', '([^/]+)', $route);
        $pattern = "#^{$pattern}$#";

        if (preg_match($pattern, $uri, $matches)) {
            array_shift($matches); // Remove o match completo

            list($ctrl, $action) = explode('@', $controller);
            return $this->callActionWithParams($ctrl, $action, $matches);
        }
    }

    throw new \Exception('No route defined for this URI.');
}


    
protected function callActionWithParams($controller, $action, $params = [])
{
    $controller = "App\\Controllers\\{$controller}";
    $controller = new $controller;

    if (! method_exists($controller, $action)) {
        throw new Exception(
            "{$controller} does not respond to the {$action} action."
        );
    }

    return call_user_func_array([$controller, $action], $params);
}

    
     /*public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }
        throw new Exception('No route defined for this URI.');
    }*/

    /**
     * Load and call the relevant controller action.
     *
     * @param string $controller
     * @param string $action
     */
    protected function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (! method_exists($controller, $action)) {
            throw new Exception(
                "{$controller} does not respond to the {$action} action."
            );
        }

        return $controller->$action();
    }
}