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
<script>
	$(function() {
		$( ".draggable" ).draggable({
			containment: $('.restrict')
		});
		$( "#droppable" ).droppable({
			drop: function( event, ui ) {
				$( this )
				.addClass( "ui-state-highlight" )
				.find( "p" )
				.html( "Dropped!" );
			}
		});
	});

</script>
<body>

	<!-- includes -->
	<?php
	include 'includes/navBar.php'; 
	include 'functions/fctPhp.php'; 
	?>





	<div class="row">
		<!-- add user button -->
		<div class="btn-add-user col s1 offset-s4 margin-top-2">
			<h6>UTILISATEUR</h6>
			<a class="btn-floating btn-large waves-effect waves-light red" href="./addUser.php"><i class="material-icons">+</i></a>
		</div>

		<!-- add ticket button -->
		<div class="btn-add-ticket col s1 offset-s1 margin-top-2">
			<h6>TICKET</h6>
			<a class="btn-floating btn-large waves-effect waves-light green modal-trigger" href="#addTicketModal"><i class="material-icons">+</i></a>
		</div>
	</div>

	<!-- kanban area -->
	<div class="row margin-top-2 padding">
		<div class="kanban center z-depth-3 col s12 restrict">

			<!-- todo area -->
			<div class="todo">
				<h3 class="tittle">TO DO</h3>
				<?php 
				foreach (getEntireTable('tickets') as $ticket) {
					?>
					<!-- begining of ticket -->
					<div class="draggable card blue-grey darken-0 ticket">
						<div class="card-content white-text padding">
							<?php
							echo '<span class="card-title">N°= ' . $ticket['id'] . '</span>';
							echo '<p class="description padding">Description : <br />' . $ticket['description'] . '</p>';
							?>
						</div>
						<div class="padding">
							<?php
							echo '<a class="dropdown-button btn orange" data-activates="info'.$ticket['id'].'"'. '>Info</a>';
							echo '<ul id="info'.$ticket['id'].'"'.'class="dropdown-content">';
							?>
								<li><p class="center dropdown-title"><b>CREE PAR</b></p></li>
								<?php echo '<li><p class="center dropdown-info"><i>'.$ticket['maker'].'</i></p></li>';?>
								<li class="divider"></li>
								<li><p class="center dropdown-title"><b>ASSIGNE A</b></p></li>
								<?php echo '<li><p class="center dropdown-info"><i>'.$ticket['worker'].'</i></p></li>';?>
							</ul>
						</div>
					</div>
				<?php } ?>
				<!-- end of ticket -->

			</div>

			<!-- in progress area -->
			<div id="droppable" class="process ui-widget-content">
				<h3 class="tittle">IN PPROCESS</h3>
				<div >

				</div>
			</div>

			<!-- done area -->
			<div class="done">
				<h3 class="tittle">DONE</h3>
				<div>

				</div>
			</div>
		</div>
	</div>








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
								echo '<option value="' . $user['first_name'] . '">' . $user['first_name'] . ' ' . $user['name'] . '</option>';
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
								echo '<option value="' . $user['first_name'] . '">' . $user['first_name'] . ' ' . $user['name'] . '</option>';
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