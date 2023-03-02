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
        $this->router = new \AltoRouter();
    }

    public function get(string $url, string $view, ?string $name = null): self
    {
        $this->router->map('GET', $url, $view, $name);
        return $this;
        // return $route; // On retourne la route pour "enchainer" les méthodes
    }
    public function post(string $url, string $view, ?string $name = null): self
    {
        $this->router->map('POST', $url, $view, $name);
        return $this;
        // return $route; // On retourne la route pour "enchainer" les méthodes
    }
    public function match(string $url, string $view, ?string $name = null): self
    {
        $this->router->map('POST|GET', $url, $view, $name);
        return $this;
        // return $route; // On retourne la route pour "enchainer" les méthodes
    }

    public function url(string $name, array $params = [])
    {
        return $this->router->generate($name, $params);
    }

    public function run(): self
    {
        $match = $this->router->match();
        if ($match === false) {
            header("Location:/");
        }
        if (is_array($match)) {
            $params = $match['params'];
            $view = $match['target'];
            $router = $this;
            ob_start();
            require $this->viewPath . DIRECTORY_SEPARATOR . $view;
            $contentPage = ob_get_clean();

            require $this->viewPath . DIRECTORY_SEPARATOR . 'layouts/default.php';
        } else {
            header("Location:/");
        }


        return $this;
    }
}
