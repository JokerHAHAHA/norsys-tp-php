<?php 

class User
{
	private $name;
	private $firstname;
	private $email;

	function __construct($name, $firstname, $email)
	{
		$this->name = $name;
		$this->firstname = $firstname;
		$this->email = $email;
	}

	/**
	* Get name
	* 
	* @return string 
	*/
	public function getName()
	{
		return $this->name;
	}

	/**
	* Get fristname
	* 
	* @return string 
	*/
	public function getFirstName()
	{
		return $this->firstname;
	}

	/**
	* Get email
	* 
	* @return string 
	*/
	public function getEmail()
	{
		return $this->email;
	}

}
