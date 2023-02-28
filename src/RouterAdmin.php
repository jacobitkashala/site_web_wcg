<?php

namespace App;

class RouterAdmin
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
        $view = $match['target'];
        $router = $this;

        $uri = $_SERVER['REQUEST_URI'];
        $params = $match['params'];
        $view = $match['target'];
        $router = $this;
        if (is_array($match)) {
            // echo '<pre>';
            // var_dump($uri);
            // echo '</pre>';
            if (strpos($uri, "login") !== false) {
                // si la variable de session  est definit  on charge la page admin
                if (isset($_SESSION['user'])) {
                    header("Location:" . $router->url("admin"));
                } else {
                    require $this->viewPath . DIRECTORY_SEPARATOR . $view;
                }
            } else {

                ob_start();
                require $this->viewPath . DIRECTORY_SEPARATOR . $view;
                $contentPageAdmin = ob_get_clean();

                require $this->viewPath . DIRECTORY_SEPARATOR . 'admin/layouts/default.php';
            }
        }
        return $this;
    }
}
