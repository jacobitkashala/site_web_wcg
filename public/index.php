<?php
require '../vendor/autoload.php';

// $uri = $_SERVER['REQUEST_URI'];
/**
 * ce-ci est a mettre en commentaire avant la mis en prod
 */
// $whoops = new \Whoops\Run;
// $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
// $whoops->register();

$router = new App\Router('../views');
$router->get('/', '/index.php', 'homepage');
$router->get('/contact', '/contact.php', 'concat');
$router->run();
