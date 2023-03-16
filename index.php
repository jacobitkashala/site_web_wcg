<?php

if (isset($_GET['template']) && $_GET['template'] !== '') {
	if ($_GET['template'] === 'Expertise') {
		require_once('src/controller/expertise.php');
	} else {
		require_once('src/controller/home_page.php');
	}
} else {
	require_once('src/controller/home_page.php');
}
