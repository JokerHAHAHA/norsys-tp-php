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
	 * Get all table
	 * 
	 * @return array
	*/
	public function findAll()
	{

		try
		{
			include 'includes/connectDB.php';

			$stmt = $conn->prepare("SELECT * FROM tickets");
			if ($stmt->execute()) {
				$resp = $stmt->fetchAll();		
			}
		}
		catch(PDOException $e)
		{
			echo "Error: " . $e->getMessage();
		}

		$conn = null;

		return $resp;

	}


}