<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<!-- head -->
<?php include 'includes/head.php'; ?>
<body class="add-user">

	<?php include 'includes/navBar.php'; ?>

	<h1 class="center">AJOUTER UN UTILISATEUR</h1>

	<div class="row">
		<form class="col s12" method="post" onsubmit="addUser()">

			<div class="row margin-top-5">
				<!-- name form -->
				<div class="input-field col s6">
					<input id="name" type="text" name="name">
					<label>Quel est son nom ?</label>
				</div>

				<!-- firstname form -->
				<div class="input-field col s6">
					<input id="firstname" type="text" name="firstname">
					<label>Et son prénom ?</label>
				</div>
			</div>

			<!-- email part -->
			<div class="row margin-top-5">
				<div class="input-field col s12">
					<input id="email" type="text" name="email">
					<label>Et ici son e-mail</label>
				</div>
			</div>

			<?php
			// include 'classes/user.php';
			// $newUser = new User('hola', 'firstname', '$email');
			// $_SESSION['error'] = $newUser->getName();
			if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
				echo '<p class="red-text">' . $_SESSION['error'] . '</p>';
				echo '<p class="red-text">Veuillez réessayer avec une autre adresse mail</p>';
				unset($_SESSION['error']);
			}

			?>

			<button id="submit" type="submit" class="waves-effect waves-light btn">ENREGISTRER</button>

		</form>
	</div>
</body>
</html>