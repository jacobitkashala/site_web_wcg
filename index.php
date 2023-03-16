<?php

if (isset($_GET['template']) && $_GET['template'] !== '') {
	if ($_GET['template'] === 'Expertise') {
		require_once('src/controller/expertise.php');
	} else if ($_GET['template'] === 'home') {
		require_once('src/controller/home_page.php');
	} else if ($_GET['template'] === 'Recrutement') {
		require_once('src/controller/recrutement.php');
	} else if ($_GET['template'] === 'detail_recrutement') {
		require_once('src/controller/detail_recrutement.php');
	}
} else {
	require_once('src/controller/home_page.php');
}
