<?php

class Router
{
    public function route()
    {
        $url = $_GET['url'] ?? 'ticket/index';
        $parts = explode('/', trim($url, '/'));

        $controllerName = ucfirst($parts[0]) . 'Controller';
        $method = $parts[1] ?? 'index'; 

        $controllerFile = '../app/controllers/' . $controllerName . '.php';

        if(file_exists($controllerFile)){
            require_once $controllerFile;
            $controller = new $controllerName;
            if(method_exists($controller, $method)){
                $controller->$method();
            } else {
                echo "Metódus nem található: $method";
            }
    
        } else {
            echo "Kontroller nem található: $controllerName";
        }
    }

}



?>