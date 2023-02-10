<?php
require 'vendor/autoload.php';
// use App\Router;
//die($_GET['url']);
// echo "Bonjour";

$router = new App\Router($_GET['url']);

$router->get('/', function () {
	require_once('views/index.php');
});
// $router->get('/', function(){ echo "Bienvenue sur ma homepage !"; }); 
$router->get('/', 'controller@index');
$router->get('/posts/:slug-:id', function ($slug, $id) {
	echo "Page poste $slug: $id";
});
$router->post('/posts/:id', function ($id) {
	echo "Voila l'article $id";
});
$router->run();
