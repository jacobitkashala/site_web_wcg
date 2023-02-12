<?php

namespace App;

class Router
{
    /**
     * @var string
     */
    private $viewPath; // contiendra le chemin du nos view

    /**
     * @var  AltoRouter
     */
    private $router;

    // private $url; // Contiendra l'URL sur laquelle on souhaite se rendre
    // private $routes = []; // Contiendra la liste des routes

    public function __construct(string $viewPath)
    {
        $this->viewPath = $viewPath;
        $this-> router =new \AltoRouter();
    }

    public function get(string $url,string $view,?string $name= null):self
    {
        $this->router->map('GET',$url,$view,$name);
        return $this;
        // $route = new Route($path, $callable);
        // $this->routes["GET"][] = $route;
        // return $route; // On retourne la route pour "enchainer" les méthodes
    }
    public function post($path, $callable)
    {
        $route = new Route($path, $callable);
        $this->routes["POST"][] = $route;
        return $route; // On retourne la route pour "enchainer" les méthodes
    }

    public function run():self
    {
        $match = $this->router->match();
         $view = $match['target'];
         require $this->viewPath.$view;
        return $this;
        }
}
