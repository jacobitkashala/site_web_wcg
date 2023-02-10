<?php

require_once('src/model.php');

function homeppage(){
	$posts = getPosts();
	require('templates/homepage.php');
}