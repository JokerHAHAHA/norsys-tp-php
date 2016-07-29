<?php 

function checkText($txt) {
	$txt = filter_var($txt, FILTER_SANITIZE_STRING);
	return $txt;
}

function checkEmail($email) {
	// Remove all illegal characters from email
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);

	// Validate e-mail
	if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		return $email;
	} else {
		return false;
	}
}

function getEntireTable($tableName){

	try
	{
		include 'includes/connectDB.php';

		$stmt = $conn->prepare("SELECT * FROM $tableName");
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

function postNewUser($name, $firstname, $email){
	try
	{	
		include 'includes/connectDB.php';

		$stmt = $conn->prepare("INSERT INTO users (name, first_name, email) 
			VALUES (:name, :first_name, :email)");
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':first_name', $firstname);
		$stmt->bindParam(':email', $email);

		$stmt->execute();

	}
	catch(PDOException $e)
	{
		echo "Error: " . $e->getMessage();
	}

	$conn = null;

	return true;

}

function postNewTicket($maker, $worker, $description, $status){
	try
	{	
		include 'includes/connectDB.php';

		$stmt = $conn->prepare("INSERT INTO tickets (maker, worker, description, status) 
			VALUES (:maker, :worker, :description, :status)");
		$stmt->bindParam(':maker', $maker);
		$stmt->bindParam(':worker', $worker);
		$stmt->bindParam(':description', $description);
		$stmt->bindParam(':status', $status);

		$stmt->execute();

	}
	catch(PDOException $e)
	{
		echo "Error: " . $e->getMessage();
	}

	$conn = null;

	return true;

}



