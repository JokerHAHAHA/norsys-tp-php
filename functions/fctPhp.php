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

	include 'includes/connectDB.php';

	$sql = "SELECT * FROM " . $tableName;

	$resp = $conn->query($sql)->fetchAll();

	$conn = null;

	return $resp;

}

function postNewUser($name, $firstname, $email){
	try
	{	
		include 'includes/connectDB.php';

	// prepare sql and bind parameters
		$stmt = $conn->prepare("INSERT INTO users (name, first_name, email) 
			VALUES (:name, :first_name, :email)");
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':first_name', $firstname);
		$stmt->bindParam(':email', $email);

    // insert another row
		// $firstname = "Julie";
		// $lastname = "Dooley";
		// $email = "julie@example.com";
		$stmt->execute();

		echo "New records created successfully";
	}
	catch(PDOException $e)
	{
		echo "Error: " . $e->getMessage();
	}

	// $sql = "INSERT INTO users " . " (name, first_name, email)" . " VALUES (" . $name . ", ". $firstname . ", ". $email . ")";

	// $conn->query($sql);

	$conn = null;

	return true;

}
?>