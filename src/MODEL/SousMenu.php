<?php

namespace App\Model;

class SousMenu
{
	private $RUB_ID;
	private $RUB_ICONE_ID;
	private $RUB_LIBELLE;
	private $RUB_BACKGROUND;
	private $RUB_FONT_NAME;
	private $RUB_FONT_SIZE;
	private $RUB_FONT_COLOR;
	private $med_ressource;
	private $a_sous_rubrique;
	private $url_page;

	// private $menu;

	public function getMenuId()
	{
		return $this->RUB_ID;
	}
	public function getUrlMenu()
	{
		return $this->url_page;
	}
	public function getIsSubMenu()
	{
		if ($this->a_sous_rubrique == 1) {
			return true;
		}
		return false;
	}
	public function getMenuIdIcone()
	{
		return $this->RUB_ICONE_ID;
	}
	public function getMenuName()
	{
		return $this->RUB_LIBELLE;
	}
	public function getMenuBackgroud()
	{
		return $this->RUB_BACKGROUND;
	}
	public function getMenuFontName()
	{
		return $this->RUB_FONT_NAME;
	}
	public function getMenuFontSize()
	{
		return $this->RUB_FONT_SIZE;
	}
	public function getMenuFontColor()
	{
		return $this->RUB_FONT_COLOR;
	}
	public function getMenuNameIcone()
	{
		return $this->med_ressource;
	}
}
