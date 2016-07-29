<?php

class Ticket
{
	private $description;
	private $worker;
	private $maker;

	function __construct($maker, $worker, $description)
	{
		$this->maker = $maker;
		$this->worker = $worker;
		$this->description = $description;
	}

	/**
	 * Get maker
	 * 
	 * @return string
	*/
	public function getMaker()
	{
		return $this->maker;
	}

	/**
	 * Get worker
	 * 
	 * @return string
	*/
	public function getWorker()
	{
		return $this->worker;
	}

	/**
	 * Get description
	 * 
	 * @return string
	*/
	public function getDescription()
	{
		return $this->description;
	}

}