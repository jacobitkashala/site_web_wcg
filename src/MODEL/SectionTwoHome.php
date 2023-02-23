<?php

namespace App\Model;

class SectionTwoHome
{
	private $MED_RESSOURCE;
	private $SRU_LIBELLE;
	private $SRU_TITRE;
	private $SRU_CONTENU;
	private $template;
	private $id_sous_rubrique;
	private $id_rubrique;


	public function getTemplate()
	{
		return $this->template;
	}
	public function getIdSousRubrique()
	{
		return $this->id_sous_rubrique;
	}
	public function getIdRubrique()
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
