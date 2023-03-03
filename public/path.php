<?php
define('DOMAIN_URL', 'http://localhost:8080/');


if (ROOT_HOST == 'http://localhost:8080/') {
	define('pathCss', ROOT_HOST . 'css/');
	define('pathJs',  ROOT_HOST . 'js/');
	define('logo',  ROOT_HOST . 'media/logo/');
	define('ecrousel',  ROOT_HOST . 'media/carousel/');
	define('icons',  ROOT_HOST . 'media/icons/');
	define('background',  ROOT_HOST . 'media/background/');
	define('evideo', ROOT_HOST . 'media/video/');
	define('ephoto', ROOT_HOST . 'media/photo/');
	define('siteId', 1);
	define('idActive', 1);
	define('limite1', 1);
	define('limite2', 2);
	define('limite3', 3);
	define('limite4', 4);
	define('limite5', 5);
} else {
	define('pathCss', ROOT_HOST . 'public/css/');
	define('pathJs',  ROOT_HOST . 'public/js/');
	define('logo',  ROOT_HOST . 'public/media/logo/');
	define('ecrousel',  ROOT_HOST . 'public/media/carousel/');
	define('icons',  ROOT_HOST . 'public/media/icons/');
	define('background',  ROOT_HOST . 'public/media/background/');
	define('evideo', ROOT_HOST . 'public/media/video/');
	define('ephoto', ROOT_HOST . 'public/media/photo/');
}
