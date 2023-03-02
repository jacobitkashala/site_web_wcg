<?php

namespace App;
use App\Connection;

class Paginate {
	private $query;
	private $queryCount;
	private $classMapping;
	private $pdo;
	private $parPage = 10;

	public function __construct(
		string $query,
		string $queryCount,
		string $classMapping,
		?\PDO $pdo,
		int $parPage = 10
	) {
		$this->query = $query;
		$this->queryCount = $queryCount;
		$this->classMapping = $classMapping;
		$this->pdo = $pdo;
		$this->parPage = $parPage;
	}
	// public function getItems():array{
	// 	// $currentPage=
	// }
}
