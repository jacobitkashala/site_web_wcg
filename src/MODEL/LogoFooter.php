<?php

namespace App\Model;

class LogoFooter
{
	private $SRU_ID;
	private $MED_RESSOURCE;
	private $SRU_LIBELLE;

	// private $menu;

	public function getId()
	{
		return $this->SRU_ID;
	}
	public function getLibelle()
	{
		return $this->SRU_LIBELLE;
	}
	public function getNameRessource()
	{
		return $this->MED_RESSOURCE;
	}
	

}
