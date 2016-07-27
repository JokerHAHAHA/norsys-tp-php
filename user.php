<!DOCTYPE html>
<html lang="fr">
<!-- head -->
<?php include 'includes/head.php'; ?>
<body>

	<?php

	include 'includes/navBar.php';

	// connection DB
	include 'includes/connectDB.php';

	$sql = "SELECT * FROM users";


	$datas = $conn->query($sql)->fetchAll();

	?>
	<ul class="collection">
		<?php

		foreach ($datas as $user) {

			echo '<li class="collection-item"><span>' . $user['first_name'] . 
												'|</span><span> ' . $user['name'] . 
												'|</span><span> ' . $user['email'] . '</span></li>';

		}

		?>
	</ul>
	<?php

	$conn = null;

	?>
</body>
</html>