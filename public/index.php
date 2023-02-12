<?php
require '../vendor/autoload.php';

$router = new AltoRouter();

define('VIEW_PATH', dirname(__DIR__) . '/views');

$router ->map('GET','/',function(){
	require VIEW_PATH . '/';
});

