<?php
require '../vendor/autoload.php';
require 'path.php';

// $uri = $_SERVER['REQUEST_URI'];
/**
 * ce-ci est a mettre en commentaire avant la mis en prod
 */
// $whoops = new \Whoops\Run;
// $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
// $whoops->register();

$router = new App\Router('../views');
$router->get('/news', '/news.php', 'news');
$router->get('/', '/index.php', 'homepage');
$router->get('/hiring', '/hiring.php', 'hiring');
$router->get('/legal_content', '/legal_content.php', 'legal_content');
$router->get('/little_content', '/little_content.php', 'little_content');

$router->run();
