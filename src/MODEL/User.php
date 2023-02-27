<?php

namespace App\Model;

class User{
	/**
	 * la classe qui va gère le user
	 */
	private $id;
	private $userName;
	private $password;
	private $role;


	/**
	 * Get the value of userName
	 */ 
	public function getUserName()
	{
		return $this->userName;
	}

	/**
	 * Set the value of userName
	 *
	 * @return  self
	 */ 
	public function setUserName($userName)
	{
		$this->userName = $userName;

		return $this;
	}

	/**
	 * Get the value of password
	 */ 
	public function getPassword()
	{
		return $this->password;
	}

	/**
	 * Set the value of password
	 *
	 * @return  self
	 */ 
	public function setPassword($password)
	{
		$this->password = $password;

		return $this;
	}

	/**
	 * Get the value of role
	 */ 
	public function getRole():?string
	{
		return $this->role;
	}

	/**
	 * Set the value of role
	 *
	 * @return  self
	 */ 
	public function setRole($role)
	{
		$this->role = $role;

		return $this;
	}

	/**
	 * Get la classe qui va gère le user
	 */ 
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set la classe qui va gère le user
	 *
	 * @return  self
	 */ 
	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}
}