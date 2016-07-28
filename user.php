<!DOCTYPE html>
<html lang="fr">
<!-- head -->
<?php include 'includes/head.php'; ?>
<body class="user">

	<?php

	include 'includes/navBar.php';

	?>
	<!-- add user button -->
	<div class="row">
		<div class="btn-add-user">
			<h6>UTILISATEUR</h6>
			<a class="btn-floating btn-large waves-effect waves-light white txtOrange" href="./addUser.php"><i class="material-icons">+</i></a>
		</div>
	</div>
	<?php

	// connection DB
	include 'includes/connectDB.php';

	$sql = "SELECT * FROM users";


	$datas = $conn->query($sql)->fetchAll();

	?>
	<ul class="collection user-list">
		<?php

		foreach ($datas as $user) {

			echo '<li class="collection-item"><h5>' . $user['first_name'] . 
										'</h5><h5>' . $user['name'] . 
				'</h5><h5 class="secondary-content">' . $user['email'] . '</h5></li>';

		}

		?>
	</ul>
	<?php

	$conn = null;

	?>
</body>
</html>