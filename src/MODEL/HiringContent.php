<?php

namespace App\Model;

class HiringContent
{
	private $id;
	private $titre;
	private $contenu;
	private $libelle;
	private $template;

	public function getTemplate()
	{
		return $this->template;
	}
	public function getId()
	{
		return $this->id;
	}
	public function getTitle()
	{
		return $this->titre;
	}
	public function getContenu()
	{
		return $this->contenu;
	}

	public function getLibelle()
	{
		return $this->libelle;
	}
}
