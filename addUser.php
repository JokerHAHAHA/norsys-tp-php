<!DOCTYPE html>
<html lang="fr">
<!-- head -->
<?php include 'includes/head.php' ?>
<body class="add-user">

<?php include 'includes/navBar.php' ?>

<h1 class="center">AJOUTER UN UTILISATEUR</h1>

	<?php
	// BDD conection
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=tuto_php;charset=utf8', 'root', 'root');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	// On récupère tout le contenu de la table jeux_video
	$reponse = $bdd->query('SELECT * FROM users');

	// On affiche chaque entrée une à une
	while ($donnees = $reponse->fetch())
	{
		?>
		<p><?php echo $donnees['id']; ?><br />
		<p><?php echo $donnees['name']; ?><br />
		<?php
	}

$reponse->closeCursor(); // Termine le traitement de la requête


?>


<div class="row">
	<form class="col s12" method="post" action="./saveUser.php">

		<div class="row margin-top-5">
			<!-- name form -->
			<div class="input-field col s6">
				<input type="text" name="name">
				<label>Quel est son nom ?</label>
			</div>

			<!-- firstname form -->
			<div class="input-field col s6">
				<input type="text" name="firstname">
				<label>Et son prénom ?</label>
			</div>
		</div>

		<!-- email part -->
		<div class="row margin-top-5">
			<div class="input-field col s12">
				<input id="email" type="email" name="email">
				<label>Et ici son e-mail</label>
			</div>
		</div>

		<button type="submit" class="waves-effect waves-light btn">ENREGISTRER</button>

	</form>
</div>
</body>
</html>