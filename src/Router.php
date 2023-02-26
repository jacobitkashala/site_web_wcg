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

    public function url(string $name, array $params = [])
    {
        return $this->router->generate($name, $params);
    }

    public function run(): self
    {
        $match = $this->router->match();
        // $uri =;

        if ($_SERVER['REQUEST_URI'] === "/admin") {
            require $this->viewPath . DIRECTORY_SEPARATOR . 'admin/index.php';
        } else {
            if (is_array($match)) {
                $params = $match['params'];
                // $view = "{$match['target']}";
                $view = $match['target'];
                $router = $this;
                ob_start();
                // echo '<pre>';
                // var_dump($this->viewPath . $view);
                // echo '</pre>';
                require $this->viewPath . DIRECTORY_SEPARATOR . $view;
                $contentPage = ob_get_clean();

                require $this->viewPath . DIRECTORY_SEPARATOR . 'layouts/default.php';
            } else {
                require $this->viewPath . DIRECTORY_SEPARATOR . 'layouts/error.php';
            }
        }


        return $this;
    }
}
