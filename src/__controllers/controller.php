<?php
namespace App;

class Controller {

	public function index(){
		echo "je suis l' index";

	}

	public function show($id){
		echo "je suis le post $id";
	}
}