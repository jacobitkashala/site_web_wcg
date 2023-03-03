<?php

namespace App\Model;

class SousMenu
{
	private $id;
	private $title;
	private $url_sub_menu;
	private $ressource_sub_menu;
	private $bgColor;
	private $color;

	
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


	/**
	 * Get the value of bgColor
	 */ 
	public function getBgColor()
	{
		return $this->bgColor;
	}

	/**
	 * Get the value of color
	 */ 
	public function getColor()
	{
		return $this->color;
	}
}
