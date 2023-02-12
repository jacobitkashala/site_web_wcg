<?php

// namespace App;

require '../vendor/autoload.php';



// $uri = $_SERVER['REQUEST_URI'];

// $router = new AltoRouter();

$router = new App\Router('../views');
$router->get('/', '/index.php', 'homepage');
$router->get('/contact', '/templete', 'category');
$router->run();
// require '../config/route.php';

// $match = $router->match();
	// echo '<pre>';
	// var_dump($match);
	// echo '</pre>';

// if ($match !== null) {
// if ($match) {
// 	// require '../elements/tete.php';
// 	//call_user_func_array($match['target'],$math['params']);
// 	if (is_callable($match['target'])) {
		
// 		$match['target']($match['params']['slug'], $match['params']['id']);
// 	} else {
// 		$params =$match['params'];
// 		ob_start();
// 		require "../templates/{$match['target']}.php";
// 		$pageContent = ob_get_clean();
// 	}
// 	require '../elements/layout.php';
// } else {
// 	echo "404";
// }
