<?php

namespace App\Model;

class Carousel
{
	private $MED_ID;
	private $SRU_ORDRE;
	private $MED_RESSOURCE;



	// private $menu;

	public function getSubMenuId()
	{
		return $this->MED_ID;
	}
	public function getCarouselOrdre()
	{
		return $this->SRU_ORDRE;
	}
	public function getCarouselNameRessource()
	{
		return $this->MED_RESSOURCE;
	}
	

}
