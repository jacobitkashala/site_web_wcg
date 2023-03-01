<?php

namespace App\Model;

class Ressources
{
	private  $libelle; 
	private  $ressources;
	private  $infobulle;
	private  $metadesc;
	private  $nomtype;
	
	/**
	 * Get the value of libelle
	 */ 
	public function getLibelle()
	{
		return $this->libelle;
	}

	/**
	 * Get the value of ressources
	 */ 
	public function getRessources()
	{
		return $this->ressources;
	}

	/**
	 * Get the value of infobulle
	 */ 
	public function getInfobulle()
	{
		return $this->infobulle;
	}

	/**
	 * Get the value of metadesc
	 */ 
	public function getMetadesc()
	{
		return $this->metadesc;
	}

	/**
	 * Get the value of nomtype
	 */ 
	public function getNomtype()
	{
		return $this->nomtype;
	}
}
