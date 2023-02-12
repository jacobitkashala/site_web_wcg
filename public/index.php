<?php
require '../vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];

$router = new App\Router('../views');
$router->get('/', '/index.php', 'homepage');
$router->get('/contact', '/contact.php', 'concat');
$router->run();
