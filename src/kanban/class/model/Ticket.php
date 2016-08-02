<?php

class Ticket
{
	private $description;
	private $worker;
	private $maker;
	private $status = 'todo';

	function __construct($maker, $worker, $description)
	{
		$this->maker = $maker;
		$this->worker = $worker;
		$this->description = $description;
	}

	/**
	 * __MAKERS__
	 * 
	*/
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

	/**
	 * Get description
	 * 
	 * @return string
	*/
	public function getStatus()
	{
		return $this->status;
	}

	/**
	 * __SETTERS__
	 * 
	*/
	/**
	 * Set maker
	 * 
	 * 
	*/
	public function getMaker($maker)
	{
		$this->maker = $maker;
	}

	/**
	 * Set worker
	 * 
	 * 
	*/
	public function getWorker($worker)
	{
		$this->worker = $worker;
	}

	/**
	 * Set description
	 * 
	 * 
	*/
	public function getDescription($description)
	{
		$this->description = $description;
	}
}