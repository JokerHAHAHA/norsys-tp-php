<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<!-- head -->
<?php include 'includes/head.php'; ?>
<body>

	<body>

		<?php

		// connection DB
		include 'includes/connectDB.php';
		include 'functions/fctPhp.php';

		$name = "'" . checkText($_POST['name']) . "'";
		$firstname = "'" . checkText($_POST['firstname']) . "'";
		
		if (checkEmail($_POST['email']) == false) {
			$_SESSION['error'] = "Votre adresse e-mail est incorrecte : " . $_POST['email'];
		} else {
			$email = "'" . checkEmail($_POST['email']) . "'";

			$sql = "INSERT INTO users (name, first_name, email)
			VALUES ($name, $firstname, $email)";

			$conn->query($sql);
		}

		$conn = null;
		?>

	</body>
	</html>