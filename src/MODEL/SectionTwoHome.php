<?php

namespace App\Model;

class SectionTwoHome
{
	private $MED_RESSOURCE;
	private $SRU_LIBELLE;
	private $SRU_TITRE;
	private $SRU_CONTENU;
	private $little_content;
	private $id_sous_rubrique;
	private $id_rubrique;


	public function getTemplate()
	{
		return $this->little_content;
	}
	public function getSousRubriaque()
	{
		return $this->id_sous_rubrique;
	}
	public function getRubrique()
	{
		return $this->id_rubrique;
	}
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
