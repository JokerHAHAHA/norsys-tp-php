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

	<!-- includes -->
	<?php
	include 'includes/navBar.php'; 
	include 'functions/fctPhp.php'; 
	include 'classes.php'; 
	print_r($_SESSION['check']);
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

	<table class="kanban centered">
		<thead>
			<tr>
				<th>TODO</th>
				<th>IN PROCESS</th>
				<th>DONE</th>
			</tr>
		</thead>
	</table>








	<!-- Modal Structure -->
	<div id="addTicketModal" class="modal modal-fixed-footer modal-add-ticket">
		<div class="modal-content">
			<h4 class="center">NOUVEAU TICKET</h4>

			<form method="post" onsubmit="addTicket()">
				<div class="row margin-top-10">
					<div class="input-field col s5 offset-s1">
						<select id="maker">
							<option value="" disabled selected>Selectionner un collègue</option>
							<?php
							foreach (getEntireTable('users') as $user) {
								echo '<option value="' . $user['first_name'] . ' ' . $user['name'] . '">' . $user['first_name'] . ' ' . $user['name'] . '</option>';
							}
							?>
						</select>
						<label>Créé par : </label>
					</div>

					<div class="input-field col s5">
						<select id="worker">
							<option value="" disabled selected>Selectionner un collègue</option>
							<?php
							foreach (getEntireTable('users') as $user) {
								echo '<option value="' . $user['first_name'] . ' ' . $user['name'] . '">' . $user['first_name'] . ' ' . $user['name'] . '</option>';
							}
							?>
						</select>
						<label>Assigné à : </label>
					</div>
				</div>

				<!-- description area -->
				<div class="row margin-top-10">
					<div class="col s12">
						<div class="row">
							<div class="input-field col s12">
								<textarea id="description" class="materialize-textarea"></textarea>
								<label for="description">Description du ticket</label>
							</div>
						</div>
					</div>
				</div>

				<div class="modal-footer">
					<button type="submit" id="submit" class="modal-action modal-close waves-effect waves-green btn-flat">Enregistrer</button>
					<a href="./index.php" class="modal-action modal-close waves-effect waves-green btn-flat ">Annuler</a>
				</div>
			</form>
		</div>
	</div>

</body>
</html>