<?php
require 'path.php';
require '../vendor/autoload.php';
require 'env.php';


// $uri = $_SERVER['REQUEST_URI'];
/**
 * ce-ci est a mettre en commentaire avant la mis en prod
 */
// $whoops = new \Whoops\Run;
// $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
// $whoops->register();

// echo dirname(__DIR__);
$router = new App\Router(dirname(__DIR__) . '/views');
$router->get('/', '/index.php', 'homepage');
$router->get('/news:[*:slug]-[i:id]', '/news.php', 'news');
$router->get('/hiring:[*:slug]-[i:id]', '/hiring.php', 'hiring');
$router->get('/hiring_detail:[*:slug]-[i:id]', '/hiring_detail.php', 'hiring_detail');
$router->get('/form', '/form.php', 'form');
$router->post('/form', '/form.php', 'soumettre');
$router->get('/legal_content:[*:slug]-[i:id]', '/legal_content.php', 'legal_content');
$router->get('/little_content:[*:slug]-[i:id]', '/little_content.php', 'little_content');
$router->get('/resource_template:[*:slug]-[i:id]', '/resource_template.php', 'resource_template');
// $router->post('/form/[*:slug]-[i:id]', '/form.php', 'form');

$router->run();
