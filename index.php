<?php
require 'vendor/autoload.php';

//die($_GET['url']);
echo "Bonjour";

$router = new App\Router($_GET['url']); 

$router->get('/', function(){ echo "Bienvenue sur ma homepage !"; }); 
$router->post('/posts/:id', function($id){ echo "Voila l'article $id"; }); 
$router->run(); 