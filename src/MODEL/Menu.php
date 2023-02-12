<?php
namespace App\Model;

class Menu{
	private $RUB_ID;
	private $RUB_ICONE_ID;
	private $RUB_LIBELLE;
	private $RUB_BACKGROUND;
	private $RUB_FONT_NAME;
	private $RUB_FONT_SIZE;
	private $RUB_FONT_COLOR;
	private $med_ressource;
	// private $menu;

	public function getMenuId()
	{
		return $this->RUB_ID;
	}
	public function getMenuIdIcone()
	{
		return $this->RUB_ICONE_ID;
	}
	public function getMenuName(){
		return $this->RUB_LIBELLE;
	}
	public function getMenuBackgroud(){
		return $this->RUB_BACKGROUND;
	}
	public function getMenuFontName(){
		return $this->RUB_FONT_NAME;
	}
	public function getMenuFontSize(){
		return $this->RUB_FONT_SIZE;
	}
	public function getMenuFontColor(){
		return $this->RUB_FONT_COLOR;
	}
	public function getMenuNameIcone(){
		return $this->med_ressource;
	}
	
           

}
