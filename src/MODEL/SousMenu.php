<?php

namespace App\Model;

class SousMenu
{
	private $id;
	private $title;
	private $url_sub_menu;
	private $ressource_sub_menu;


	// private $menu;

	public function getSubMenuId()
	{
		return $this->id;
	}
	public function getSubMenuTitle()
	{
		return $this->title;
	}
	public function getSubMenuUrl()
	{
		return $this->url_sub_menu;
	}
	public function getSubMenuRessource()
	{
		return $this->ressource_sub_menu;
	}

}
