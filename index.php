<?php
require 'vendor/autoload.php';
//die($_GET['url']);
// echo "Bonjour";
// define('VIEW_PATH', dirname(__DIR__) . '/views');

$router = new App\Router($_GET['url']);

$router->get('/', function () {
	require '/views/index.php';
});

$router->get('/exp', function () {
	require 'views/expertise.php';
});
$router->get('/posts/:slug-:id', function ($slug, $id) {
	echo "Page poste $slug: $id";
});
$router->post('/posts', function () {
	echo "Voila l'article";
});
$router->post('/posts/:id', function ($id) {
	echo "Voila l'article $id";
});

$router->run();

// $match =$router->match();
