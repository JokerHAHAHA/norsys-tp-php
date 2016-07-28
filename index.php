<!DOCTYPE html>
<html lang="fr">
<!-- head -->
<?php include 'includes/head.php'; ?>
<script>
	// activate modal
	$(document).ready(function(){
    $('.modal-trigger').leanModal();
  });
</script>
<body>

	<!-- navbar -->
	<?php include 'includes/navBar.php'; ?>

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
			<h4>Modal Header</h4>
			<p>A bunch of text</p>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
		</div>
	</div>

</body>
</html>