<?php

namespace App\Model;

class HomeSection
{
	private $SRU_ID;
	private $SRU_TITRE;
	private $SRU_CONTENU;

	public function getId()
	{
		return $this->SRU_ID;
	}
	public function getTitle()
	{
		return $this->SRU_TITRE;
	}
	public function getContenue()
	{
		return $this->SRU_CONTENU;
	}

}
