<?php
require 'env.php';
require 'path.php';
require '../vendor/autoload.php';




/**
 * ce-ci est a mettre en commentaire avant la mis en prod
 */
// $whoops = new \Whoops\Run;
// $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
// $whoops->register();

$uri = $_SERVER['REQUEST_URI'];
// echo $uri;
// exit();
$routerAdmin = new App\RouterAdmin(dirname(__DIR__) . '/views');
$router = new App\Router(dirname(__DIR__) . '/views');
if (strpos($uri, "admin") !== false) {
	// le router pour l'admin
	session_start();
	// }
	$routerAdmin->match(ROOT_URL . 'admin', 'admin/index.php', 'admin');
	$routerAdmin->match(ROOT_URL . 'admin:login', 'admin/login.php', 'login');
	$routerAdmin->run();
} else {

	$router->get(ROOT_URL, '/index.php', 'homepage');
	$router->get(ROOT_URL . 'news:[*:slug]-[i:id]', '/news.php', 'news');
	$router->get(ROOT_URL . 'hiring:[*:slug]-[i:id]', '/hiring.php', 'hiring');
	$router->get(ROOT_URL . 'hiring_detail:[*:slug]-[i:id]', '/hiring_detail.php', 'hiring_detail');
	$router->get(ROOT_URL . 'form', '/form.php', 'form');
	$router->post(ROOT_URL . 'form', '/form.php', 'soumettre');
	$router->get(ROOT_URL . 'legal_content:[*:slug]-[i:id]', '/legal_content.php', 'legal_content');
	$router->get(ROOT_URL . 'little_content:[*:slug]-[i:id]', '/little_content.php', 'little_content');
	$router->get(ROOT_URL . 'resource_template:[*:slug]-[i:id]', '/resource_template.php', 'resource_template');

	$router->run();
}
