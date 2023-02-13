<?php

namespace App\Model;

class AlaUneActualite
{
	private $SRU_ID;
	private $MED_RESSOURCE;

	public function getId()
	{
		return $this->SRU_ID;
	}
	public function getRessource()
	{
		return $this->MED_RESSOURCE;
	}
}
