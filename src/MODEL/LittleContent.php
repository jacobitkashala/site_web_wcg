<?php

namespace App\Model;

class LittleContent
{
	private $id;
	private $title;
	private $description;

	public function getLittId()
	{
		return $this->id;
	}
	public function getLittTitle()
	{
		return $this->title;
	}
	public function getLittDescriotion()
	{
		return $this->description;
	}
}
