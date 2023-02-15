<?php

namespace App;

use \PDO;

class Auth{
	private $pdo;
	public function __construct($pdo){
		$this->pdo = $pdo;
	}

	public function user(){

	}
	public function login(string $username, string $password){

	}
}
