<!DOCTYPE html>
<html lang="fr">
<!-- head -->
<?php include 'includes/head.php'; ?>
<body>

	<body>

		<?php

		// connection DB
		include 'includes/connectDB.php';

		$name = "'" . $_POST['name'] . "'";
		$firstname = "'" . $_POST['firstname'] . "'";
		$email = "'" . $_POST['email'] . "'";
		
		$sql = "INSERT INTO users (name, first_name, email)
		VALUES ($name, $firstname, $email)";

    	// use exec() because no results are returned
		$conn->query($sql);

		$conn = null;

		?>
		<!-- back to add user page -->
		<div class="row">
			<div class="btn-add-user z-depth-3 col s1">
				<h6>UTILISATEUR</h6>
				<a class="btn-floating btn-large waves-effect waves-light red" href="./addUser.php"><i class="material-icons">+</i></a>
			</div>
		</div>
	</body>
	</html>