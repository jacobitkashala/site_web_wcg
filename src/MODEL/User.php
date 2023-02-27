<?php

namespace App\Model;

class User
{
	/**
	 * la classe qui va gère le user
	 */
	private $id;
	private $USR_PWD;
	private $USR_ID;
	private $USR_FRIST_NAME;
	private $USR_LOGIN;



	/**
	 * Get the value of USR_LOGIN
	 */
	public function getUSR_LOGIN()
	{
		return $this->USR_LOGIN;
	}

	/**
	 * Set the value of USR_LOGIN
	 *
	 * @return  self
	 */
	public function setUSR_LOGIN($USR_LOGIN)
	{
		$this->USR_LOGIN = $USR_LOGIN;

		return $this;
	}

	/**
	 * Get the value of USR_FRIST_NAME
	 */
	public function getUSR_FRIST_NAME()
	{
		return $this->USR_FRIST_NAME;
	}

	/**
	 * Set the value of USR_FRIST_NAME
	 *
	 * @return  self
	 */
	public function setUSR_FRIST_NAME($USR_FRIST_NAME)
	{
		$this->USR_FRIST_NAME = $USR_FRIST_NAME;

		return $this;
	}

	/**
	 * Get the value of USR_ID
	 */
	public function getUSR_ID()
	{
		return $this->USR_ID;
	}

	/**
	 * Set the value of USR_ID
	 *
	 * @return  self
	 */
	public function setUSR_ID($USR_ID)
	{
		$this->USR_ID = $USR_ID;

		return $this;
	}

	/**
	 * Get the value of USR_PWD
	 */ 
	public function getUSR_PWD()
	{
		return $this->USR_PWD;
	}

	/**
	 * Set the value of USR_PWD
	 *
	 * @return  self
	 */ 
	public function setUSR_PWD($USR_PWD)
	{
		$this->USR_PWD = $USR_PWD;

		return $this;
	}
}
