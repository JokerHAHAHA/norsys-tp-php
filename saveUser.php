<?php
		// Start the session
session_start();

		// connection DB
		// include 'includes/connectDB.php';
include 'functions/fctPhp.php';
include 'classes/user.php';

$name = "'" . checkText($_POST['name']) . "'";
$firstname = "'" . checkText($_POST['firstname']) . "'";

if (checkEmail($_POST['email']) == false) {
	$_SESSION['error'] = "Votre adresse e-mail est incorrecte : " . $_POST['email'];
} else {
	$email = "'" . checkEmail($_POST['email']) . "'";

	$newUser = new User($name, $firstname, $email);
	$_SESSION['error'] = $newUser->getName();

	postNewUser('users', $name, $firstname, $email);
}

