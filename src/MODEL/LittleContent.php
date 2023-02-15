<?php

namespace App\Model;

class LittleContent
{
	private $id;
	private $titre;
	private $contenu;
	private $bgImage;

	public function getLittId()
	{
		return $this->id;
	}
	public function getLittTitle()
	{
		return $this->titre;
	}
	public function getLittContenu()
	{
		return $this->contenu;
	}

	public function getBgImage()
	{
		return $this->bgImage;
	}
}
