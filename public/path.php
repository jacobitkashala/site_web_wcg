<?php
define('DOMAIN_URL', 'http://localhost:8080/');

define('evideo', './media/video/');
define('ephoto', './media/photo/');
if (ROOT_HOST == 'http://localhost:8080/') {
	define('pathCss', ROOT_HOST . 'css/');
	define('pathJs',  ROOT_HOST . 'js/');
	define('logo',  ROOT_HOST . 'media/logo/');
	define('ecrousel',  ROOT_HOST . 'media/carousel/');
	define('icons',  ROOT_HOST . 'media/icons/');
	define('background',  ROOT_HOST . 'media/background/');
} else {
	define('pathCss', ROOT_HOST . 'public/css/');
	define('pathJs',  ROOT_HOST . 'public/js/');
	define('logo',  ROOT_HOST . 'public/media/logo/');
	define('ecrousel',  ROOT_HOST . 'public/media/carousel/');
	define('icons',  ROOT_HOST . 'public/media/icons/');
	define('background',  ROOT_HOST . 'public/media/background/');
}

define('siteId', 1);
define('limite1', 1);
define('limite2', 2);
define('limite3', 3);
define('limite4', 4);
define('limite5', 5);
