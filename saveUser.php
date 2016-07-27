<!DOCTYPE html>
<html lang="fr">
<!-- head -->
<?php include 'includes/head.php' ?>
<body>

	<body>

		<?php
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "tuto_php";
		$name = "'" . $_POST['name'] . "'";
		$firstname = "'" . $_POST['firstname'] . "'";
		$email = "'" . $_POST['email'] . "'";

		echo $name;

		try {

			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "INSERT INTO users (name, first_name, email)
			VALUES ($name, $firstname, $email)";

    // use exec() because no results are returned
			$conn->exec($sql);
			echo "New record created successfully";
		}

		catch(PDOException $e)
		{
			echo "<b>Requette : </b>" . $sql . "<br>" . $e->getMessage();
		}

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