<?php

namespace App\Model;

class SectionTwoHome
{
	private $MED_RESSOURCE;
	private $SRU_LIBELLE;
	private $SRU_TITRE;
	private $SRU_CONTENU;
	

	public function getLibelle()
	{
		return $this->SRU_LIBELLE;
	}
	public function getRessource()
	{
		return $this->MED_RESSOURCE;
	}
	public function getTitre()
	{
		return $this->SRU_TITRE;
	}
	public function getContenu()
	{
		return $this->SRU_CONTENU;
	}
}
