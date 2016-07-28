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

	public function showname()
	{
		echo $this->name;
	}
	public function showfirstname()
	{
		echo $this->firstname;
	}
	public function showemail()
	{
		echo $this->email;
	}

}

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

	public function showMaker()
	{
		echo $this->maker;
	}
	public function showWorker()
	{
		echo $this->worker;
	}
	public function showDescription()
	{
		echo $this->description;
	}

}


?>