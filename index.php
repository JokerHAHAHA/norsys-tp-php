<!DOCTYPE html>
<html lang="fr">
<!-- head -->
<?php include 'includes/head.php'; ?>
<script>
	// activate modal
	$(document).ready(function(){
		$('.modal-trigger').leanModal();
	});
	// activate select
	$(document).ready(function() {
		$('select').material_select();
	});
</script>
<body>

	<!-- navbar -->
	<?php
	include 'includes/navBar.php'; 
	include 'functions/fctPhp.php'; 
	include 'classes.php'; 
	?>

	<!-- add user button -->
	<div class="row">
		<div class="btn-add-user col s1">
			<h6>UTILISATEUR</h6>
			<a class="btn-floating btn-large waves-effect waves-light red" href="./addUser.php"><i class="material-icons">+</i></a>
		</div>
	</div>

	<!-- add ticket button -->
	<div class="row">

		<div class="btn-add-ticket col s1">
			<h6>TICKET</h6>
			<a class="btn-floating btn-large waves-effect waves-light green modal-trigger" href="#addTicketModal"><i class="material-icons">+</i></a>
		</div>
	</div>

	<!-- Modal Structure -->
	<div id="addTicketModal" class="modal modal-fixed-footer">
		<div class="modal-content">
			<h4 class="center">NOUVEAU TICKET</h4>

			<div class="row margin-top-10">
				<div class="input-field col s5 offset-s1">
					<select>
						<option value="" disabled selected>Selectionner un collègue</option>
						<?php
						foreach (getEntireTable('users') as $user) {
							echo '<option value="">' . $user['first_name']. ' ' . $user['name'] . '</option>';
						}
						?>
					</select>
					<label>Créé par : </label>
				</div>

				<div class="input-field col s5">
					<select>
						<option value="" disabled selected>Selectionner un collègue</option>
						<?php
						foreach (getEntireTable('users') as $user) {
							echo '<option value="">' . $user['first_name']. ' ' . $user['name'] . '</option>';
						}
						?>
					</select>
					<label>Assigné à : </label>
				</div>
			</div>

			<!-- description area -->
			<div class="row margin-top-10">
				<form class="col s12">
					<div class="row">
						<div class="input-field col s12">
							<textarea id="description" class="materialize-textarea"></textarea>
							<label for="description">Description du ticket</label>
						</div>
					</div>
				</form>
			</div>

		</div>
		<div class="modal-footer">
			<a type="submit" onsubmit="" class="modal-action modal-close waves-effect waves-green btn-flat ">Enregistrer</a>
			<a href="./index.php" class="modal-action modal-close waves-effect waves-green btn-flat ">Annuler</a>
		</div>
	</div>

</body>
</html>